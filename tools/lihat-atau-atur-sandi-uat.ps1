param(
    [switch]$AturBaru
)

$ErrorActionPreference = 'Stop'
$root = [IO.Path]::GetFullPath((Join-Path $env:LOCALAPPDATA 'SIJAI-UMKM'))
$secPath = Join-Path $root 'secrets\mvp-demo.json'
$php = Join-Path $root 'php\php.exe'

$accounts = @(
    'synthetic_mvp_pencatat',
    'synthetic_mvp_pengesah_awal',
    'synthetic_mvp_pengesah_field',
    'synthetic_mvp_koordinator'
)

if ($AturBaru -or -not (Test-Path $secPath)) {
    Write-Host "=== Atur Kata Sandi Baru untuk 4 Akun Sintetis UAT (Minimal 16 Karakter) ===" -ForegroundColor Cyan
    $secObj = [ordered]@{}
    foreach ($handle in $accounts) {
        $secure = Read-Host "Masukkan kata sandi baru untuk $handle (minimal 16 karakter)" -AsSecureString
        $bstr = [Runtime.InteropServices.Marshal]::SecureStringToBSTR($secure)
        $plain = [Runtime.InteropServices.Marshal]::PtrToStringAuto($bstr)
        [Runtime.InteropServices.Marshal]::ZeroFreeBSTR($bstr)
        if ($plain.Length -lt 16) {
            throw "Kata sandi untuk $handle harus minimal 16 karakter."
        }
        $secObj[$handle] = $plain
    }
    $secObj | ConvertTo-Json | Set-Content -Path $secPath -Encoding UTF8

    & $php -r "
    require 'vendor/autoload.php';
    `$app = require 'bootstrap/app.php';
    `$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
    `$sec = json_decode(file_get_contents('$secPath'), true);
    `$db = app(App\Modules\Shared\Infrastructure\DatabaseBoundary::class)->connection();
    foreach (['synthetic_mvp_pencatat', 'synthetic_mvp_pengesah_awal', 'synthetic_mvp_pengesah_field', 'synthetic_mvp_koordinator'] as `$h) {
        if (!empty(`$sec[`$h])) {
            `$db->table('users')->where('login_handle', `$h)->update([
                'password' => Illuminate\Support\Facades\Hash::make(`$sec[`$h]),
                'active' => true,
            ]);
        }
    }
    "
    Write-Host "Kata sandi keempat akun UAT berhasil diperbarui di database lokal dan disimpan di $secPath." -ForegroundColor Green
    return
}

$sec = Get-Content $secPath -Raw | ConvertFrom-Json
Write-Host "=== Kredensial Lokal 4 Akun Sintetis UAT (Hanya Tampil di Terminal Lokal Anda) ===" -ForegroundColor Cyan
foreach ($handle in $accounts) {
    Write-Host ("{0,-32} : {1}" -f $handle, $sec.$handle)
}
Write-Host "==================================================================================" -ForegroundColor Cyan
