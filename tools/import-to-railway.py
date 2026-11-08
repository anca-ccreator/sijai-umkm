"""
Script Impor Data SIJAI UMKM Langsung ke Railway MySQL
Penggunaan:
    python tools/import-to-railway.py <HOST> <PORT> <PASSWORD> [DATABASE] [USER]
Contoh:
    python tools/import-to-railway.py junction.proxy.rlwy.net 12345 myPassword123
"""

import sys
import gzip
import os

try:
    import pymysql
except ImportError:
    import subprocess
    subprocess.check_call([sys.executable, "-m", "pip", "install", "pymysql", "cryptography"])
    import pymysql

def run_import():
    if len(sys.argv) < 4:
        print("Penggunaan: python tools/import-to-railway.py <HOST> <PORT> <PASSWORD> [DATABASE] [USER]")
        sys.exit(1)

    host = sys.argv[1]
    port = int(sys.argv[2])
    password = sys.argv[3]
    database = sys.argv[4] if len(sys.argv) > 4 else "railway"
    user = sys.argv[5] if len(sys.argv) > 5 else "root"

    gz_path = os.path.join(os.path.dirname(__file__), "..", "database", "seeders", "initial_database.sql.gz")
    if not os.path.exists(gz_path):
        gz_path = os.path.join(os.path.dirname(__file__), "..", "storage", "app", "backups", "backup_20261107_212933.sql.gz")

    if not os.path.exists(gz_path):
        print(f"Berkas database tidak ditemukan di {gz_path}")
        sys.exit(1)

    print(f"Menghubungkan ke Railway MySQL di {host}:{port}...")
    conn = pymysql.connect(
        host=host,
        port=port,
        user=user,
        password=password,
        database=database,
        charset='utf8mb4',
        autocommit=True
    )

    print("Koneksi berhasil! Membaca berkas cadangan dan mengeksekusi batch SQL...")
    cursor = conn.cursor()
    cursor.execute("SET FOREIGN_KEY_CHECKS=0;")
    cursor.execute("SET NAMES utf8mb4;")
    cursor.execute("SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO';")

    stmt_count = 0
    cur_stmt = []

    with gzip.open(gz_path, 'rt', encoding='utf-8') as f:
        for line in f:
            trimmed = line.strip()
            if not trimmed or trimmed.startswith('--') or trimmed.startswith('/*'):
                continue
            cur_stmt.append(line)
            if trimmed.endswith(';'):
                stmt = "".join(cur_stmt)
                cursor.execute(stmt)
                stmt_count += 1
                cur_stmt = []
                if stmt_count % 50 == 0:
                    print(f"  -> {stmt_count} batch SQL telah dieksekusi...")

    cursor.execute("SET FOREIGN_KEY_CHECKS=1;")
    print(f"✓ SELESAI! Total {stmt_count} batch SQL berhasil dimasukkan ke Railway MySQL.")

    # Verifikasi data
    cursor.execute("SELECT COUNT(*) FROM umkm;")
    total_umkm = cursor.fetchone()[0]
    cursor.execute("SELECT COUNT(*) FROM users;")
    total_users = cursor.fetchone()[0]
    cursor.execute("SELECT COUNT(*) FROM nib_records;")
    total_nib = cursor.fetchone()[0]

    print(f"\nVerifikasi Data di Railway:")
    print(f"  - Total UMKM    : {total_umkm:,}")
    print(f"  - Rekod NIB OSS : {total_nib:,}")
    print(f"  - Akun Pengguna : {total_users:,}")

    cursor.close()
    conn.close()

if __name__ == '__main__':
    run_import()
