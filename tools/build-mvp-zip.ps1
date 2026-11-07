# Build SIJAI UMKM MVP Complete ZIP Package
param(
    [string]$BaseDir = "d:\UMKM",
    [string]$ZipFile = "d:\UMKM\sijai-umkm-mvp-lengkap-2026-11-07.zip"
)

$ErrorActionPreference = 'Stop'

if (Test-Path $ZipFile) {
    Remove-Item $ZipFile -Force
}

$excludeRegex = @(
    '^(\.git|vendor|node_modules)(\\|/|$)',
    '^storage(\\|/)framework(\\|/)(sessions|cache|views)(\\|/|$)',
    '^storage(\\|/)logs(\\|/|$)',
    '^\.env(\.testing)?$',
    '\.zip$',
    '^\.phpunit\.result\.cache$'
)

$basePath = (Resolve-Path $BaseDir).Path.TrimEnd('\', '/')
$allFiles = Get-ChildItem -Path $basePath -Recurse -File

$selectedFiles = @()
foreach ($file in $allFiles) {
    $rel = $file.FullName.Substring($basePath.Length + 1)
    $skip = $false
    foreach ($pattern in $excludeRegex) {
        if ($rel -match $pattern) {
            $skip = $true
            break
        }
    }
    if (-not $skip) {
        $selectedFiles += [PSCustomObject]@{
            FullName = $file.FullName
            RelativePath = $rel.Replace('\', '/')
            Length = $file.Length
        }
    }
}

Write-Host "Total files selected: $($selectedFiles.Count)"

Add-Type -AssemblyName System.IO.Compression
Add-Type -AssemblyName System.IO.Compression.FileSystem

$zipStream = [System.IO.File]::Open($ZipFile, [System.IO.FileMode]::CreateNew)
$archive = New-Object System.IO.Compression.ZipArchive($zipStream, [System.IO.Compression.ZipArchiveMode]::Create)

try {
    foreach ($item in $selectedFiles) {
        $entry = $archive.CreateEntry($item.RelativePath, [System.IO.Compression.CompressionLevel]::Optimal)
        $entryStream = $entry.Open()
        $fileStream = [System.IO.File]::OpenRead($item.FullName)
        $fileStream.CopyTo($entryStream)
        $fileStream.Dispose()
        $entryStream.Dispose()
    }
} finally {
    $archive.Dispose()
    $zipStream.Dispose()
}

$zipInfo = Get-Item $ZipFile
$sha256 = (Get-FileHash -Path $ZipFile -Algorithm SHA256).Hash
Write-Host "ZIP created successfully: $($zipInfo.FullName)"
Write-Host "Size: $($zipInfo.Length) bytes ($([Math]::Round($zipInfo.Length / 1MB, 2)) MB)"
Write-Host "SHA-256: $sha256"
