[CmdletBinding()]
param()
$ErrorActionPreference = 'Stop'
$taskRoot = [IO.Path]::GetFullPath((Join-Path $env:LOCALAPPDATA 'SIJAI-UMKM'))
$taskBinary = Join-Path $taskRoot 'mysql-8.4.13-winx64\bin\mysqld.exe'
$taskConfig = Join-Path $taskRoot 'my-sijai.ini'
if (-not (Test-Path -LiteralPath $taskBinary) -or -not (Test-Path -LiteralPath $taskConfig)) {
    throw 'Instance khusus SIJAI UMKM belum disiapkan; jangan memakai instance aplikasi lain.'
}
$taskText = [IO.File]::ReadAllText($taskConfig)
$taskData = (Join-Path $taskRoot 'data-g1b1').Replace('\', '/')
if ($taskText -notmatch '(?m)^bind-address=127\.0\.0\.1\r?$' -or $taskText -notmatch '(?m)^port=33070\r?$' -or -not $taskText.Contains('datadir="' + $taskData + '"')) {
    throw 'Batas konfigurasi instance khusus tidak cocok.'
}
$taskListener = @(Get-NetTCPConnection -LocalPort 33070 -State Listen -ErrorAction SilentlyContinue)
if ($taskListener.Count -gt 0) {
    $taskProcess = Get-CimInstance Win32_Process -Filter ('ProcessId=' + $taskListener[0].OwningProcess)
    if ($taskListener.Count -ne 1 -or $taskListener[0].LocalAddress -ne '127.0.0.1' -or $taskProcess.ExecutablePath -ne $taskBinary -or -not $taskProcess.CommandLine.Contains($taskConfig)) {
        throw 'Port digunakan proses lain; tidak diubah.'
    }
    Write-Output 'MySQL khusus SIJAI UMKM sudah berjalan pada 127.0.0.1:33070.'
    return
}
if ((Get-AuthenticodeSignature -LiteralPath $taskBinary).Status -ne 'Valid') {
    throw 'Tanda tangan binary MySQL tidak valid.'
}
[void](Start-Process -FilePath $taskBinary -ArgumentList @("--defaults-file=$taskConfig") -WindowStyle Hidden -PassThru -RedirectStandardOutput (Join-Path $taskRoot 'runtime\start.stdout') -RedirectStandardError (Join-Path $taskRoot 'runtime\start.stderr'))
for ($taskAttempt = 0; $taskAttempt -lt 40; $taskAttempt++) {
    $taskReady = @(Get-NetTCPConnection -LocalPort 33070 -State Listen -ErrorAction SilentlyContinue)
    if ($taskReady.Count -eq 1 -and $taskReady[0].LocalAddress -eq '127.0.0.1') {
        $taskProcess = Get-CimInstance Win32_Process -Filter ('ProcessId=' + $taskReady[0].OwningProcess)
        if ($taskProcess.ExecutablePath -eq $taskBinary -and $taskProcess.CommandLine.Contains($taskConfig)) {
            [IO.File]::WriteAllText((Join-Path $taskRoot 'runtime\server-process.json'), (@{
                Pid = $taskReady[0].OwningProcess; Binary = $taskBinary; Port = 33070; Project = 'SIJAI-UMKM-G1B1'
            } | ConvertTo-Json))
            Write-Output 'MySQL khusus SIJAI UMKM siap pada 127.0.0.1:33070.'
            return
        }
    }
    Start-Sleep -Milliseconds 250
}
throw 'Server belum siap. Periksa log privat; jangan mencetak kredensial.'
