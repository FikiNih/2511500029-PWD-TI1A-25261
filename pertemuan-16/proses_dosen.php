<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

# Cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('index.php#biodata');
}

# Ambil dan bersihkan nilai dari form biodata pengunjung
$kddosen = bersihkan($_POST['txtNim'] ?? '');
$namadosen = bersihkan($_POST['txtNmLengkap'] ?? '');
$alamat = bersihkan($_POST['txtT4Lhr'] ?? '');
$tanggal_jadi = bersihkan($_POST['txtTglLhr'] ?? '');
$jja = bersihkan($_POST['txtHobi'] ?? '');
$home = bersihkan($_POST['txtPasangan'] ?? '');
$nomor = bersihkan($_POST['txtKerja'] ?? '');
$pasangan = bersihkan($_POST['txtNmOrtu'] ?? '');
$anak = bersihkan($_POST['txtNmKakak'] ?? '');
$bidang = bersihkan($_POST['txtNmAdik'] ?? '');

# Validasi input
$errors = [];

# Validasi Kode Dosen (harus angka, 8-10 digit)
if (empty($kddosen)) {
    $errors[] = 'Kode Dosen wajib diisi.';
} elseif (!preg_match('/^[0-9]{8,10}$/', $kddosen)) {
    $errors[] = 'Kode Dosen harus terdiri dari 8-10 digit angka.';
}

# Validasi Nama
if (empty($namadosen)) {
    $errors[] = 'Nama lengkap wajib diisi.';
} elseif (strlen($namadosen) < 2) {
    $errors[] = 'Nama minimal 2 karakter.';
}

# Validasi Tempat Lahir
if (empty($alamat)) {
    $errors[] = 'Tempat lahir wajib diisi.';
}

# Validasi Tanggal Lahir
if (empty($tanggal_jadi)) {
    $errors[] = 'Tanggal lahir wajib diisi.';
} elseif (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $tanggal_jadi)) {
    if (preg_match('/^\d{2}-\d{2}-\d{4}$/', $tanggal_jadi)) {
        # Format DD-MM-YYYY diubah menjadi YYYY-MM-DD
        $date_parts = explode('-', $tanggal_jadi);
        $tanggal_jadi = $date_parts[2] . '-' . $date_parts[1] . '-' . $date_parts[0];
    } else {
        $errors[] = 'Format tanggal lahir tidak valid. Gunakan format YYYY-MM-DD.';
    }
}

# Validasi Hobi
if (empty($jja)) {
    $errors[] = 'Hobi wajib diisi.';
}

# Validasi Nama Pasangan
if (empty($pasangan)) {
    $errors[] = 'Nama pasangan wajib diisi.';
}

# Cek duplikasi Kode Dosen
if (empty($errors)) {
    $check_kddosen = "SELECT cmid FROM tbl_dosen WHERE ckd_dosen = ?";
    $stmt_check = mysqli_prepare($conn, $check_kddosen);
    mysqli_stmt_bind_param($stmt_check, "s", $kddosen);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_store_result($stmt_check);
    
    if (mysqli_stmt_num_rows($stmt_check) > 0) {
        $errors[] = 'Kode Dosen sudah terdaftar.';
    }
    mysqli_stmt_close($stmt_check);
}

# Jika ada error, simpan nilai lama dan redirect
if (!empty($errors)) {
    $_SESSION['old_biodata'] = [
        'nim' => $kddosen,
        'nama' => $namadosen,
        'tempat_lahir' => $alamat,
        'tanggal_lahir' => $tanggal_jadi,
        'hobi' => $jja,
        'pasangan' => $home,
        'pekerjaan' => $nomor,
        'nama_ortu' => $pasangan,
        'nama_kakak' => $anak,
        'nama_adik' => $bidang
    ];
    
    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('index.php#biodata');
}

# Simpan data ke session untuk ditampilkan di section about
$_SESSION['biodata'] = [
    "nim" => $kddosen,
    "nama" => $namadosen,
    "tempat" => $alamat,
    "tanggal" => $tanggal_jadi,
    "hobi" => $jja,
    "pasangan" => $home,
    "pekerjaan" => $nomor,
    "ortu" => $pasangan,
    "kakak" => $anak,
    "adik" => $bidang
];

# Insert data ke database menggunakan prepared statement
$sql = "INSERT INTO tbl_dosen (ckd_dosen, cnama_dosen, calamat, ctjdosen, cjja, chome, cnomor, cpdosen,
        cadosen, cbidosen) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('index.php#biodata');
}

# Bind parameter dan eksekusi
mysqli_stmt_bind_param($stmt, "ssssssssss", 
    $kddosen, $namadosen, $alamat, $tanggal_jadi, 
    $jja, $home, $nomor, $pasangan, 
    $anak, $bidang);

if (mysqli_stmt_execute($stmt)) {
    unset($_SESSION['old_biodata']);
    $_SESSION['flash_sukses'] = 'Data biodata dosen berhasil disimpan!';
} else {
    $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
    $_SESSION['old_biodata'] = [
        'kode' => $kddosen,
        'nama' => $namadosen,
        'alamat' => $alamat,
        'tanggal_jadi' => $tanggal_jadi,
        'jja' => $jja,
        'home' => $home,
        'nomor' => $nomor,
        'pasangan' => $pasangan,
        'anak' => $anak,
        'bidang' => $bidang
    ];
}

mysqli_stmt_close($stmt);

# Konsep PRG: Redirect ke halaman biodata
redirect_ke('index.php#biodata');
?>