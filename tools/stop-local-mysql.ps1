[CmdletBinding()]
param()
$ErrorActionPreference = 'Stop'
$taskRoot = [IO.Path]::GetFullPath((Join-Path $env:LOCALAPPDATA 'SIJAI-UMKM'))
$taskBinary = Join-Path $taskRoot 'mysql-8.4.13-winx64\bin\mysqld.exe'
$taskConfig = Join-Path $taskRoot 'my-sijai.ini'
$taskListener = @(Get-NetTCPConnection -LocalPort 33070 -State Listen -ErrorAction SilentlyContinue)
if ($taskListener.Count -eq 0) {
    Write-Output 'Instance khusus sudah berhenti.'
    return
}
$taskProcess = Get-CimInstance Win32_Process -Filter ('ProcessId=' + $taskListener[0].OwningProcess)
if ($taskListener.Count -ne 1 -or $taskListener[0].LocalAddress -ne '127.0.0.1' -or $taskProcess.ExecutablePath -ne $taskBinary -or -not $taskProcess.CommandLine.Contains($taskConfig)) {
    throw 'Listener bukan instance khusus SIJAI UMKM; tidak dihentikan.'
}
$taskClient = Join-Path $taskRoot 'mysql-8.4.13-winx64\bin\mysqladmin.exe'
$taskAuth = Join-Path $taskRoot 'secrets\root.cnf'
& $taskClient "--defaults-extra-file=$taskAuth" --host=127.0.0.1 --port=33070 --protocol=TCP shutdown
if ($LASTEXITCODE -ne 0) { throw 'Shutdown instance khusus gagal; rahasia tidak ditampilkan.' }
Write-Output 'MySQL khusus SIJAI UMKM dihentikan dengan tertib.'
