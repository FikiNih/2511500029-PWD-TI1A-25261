<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul halaman</title>
    <link rel="stylesheet" href="style.css">
</head>

<p id="pesan">Teks awal</p>
<button onclick="ubahTeks()">Ubah Teks</button>
<script>
function ubahTeks() {
document.getElementById("pesan").innerText = "Teks berhasil diubah!";
}
</script>

<button id="tombol">Klik Saya</button>
<script>
document.getElementById("tombol").addEventListener("click", function() {
alert("Tombol diklik!");
});
</script>

<input type="text" id="nama" placeholder="Masukkan nama">
<button onclick="cekNama()">Submit</button>
<script>
function cekNama() {
let nama = document.getElementById("nama").value;
if (nama === "") {
alert("Nama tidak boleh kosong!");
} else {
alert("Halo, " + nama + "!");
}
}
</script>

<body>
    <script>
        alert ("Halo Dunia");
    </script>
</body>

<body>
    <header>
        <h1>Tentang Saya</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
        &#9776;
    </button>
        <nav>
            <ul style="list-style-type: square;">
                <li><a href="#Home">Beranda</a></li>
                <li><a href="#About">Tentang</a></li>
                <li><a href="#Contact">Kontak</a></li>
                <li><a href="#ipk">IPK</a></li>
            </ul>
        </nav>
    </header> 
    <main></main>
    <footer>
        <section id="Home">
        <h2>Selamat Datang</h2>
        <?php
        echo "Halo Dunia! <br>";
        echo "Perkenalkan nama saya Fiki";
        ?>
        <p>Saya Suka Ayam Geprek</p>
    </section>
    <section id="About">
        <?php
         $nim = "2511500029";
         $NIM = "2511500008";
         $Nama = "Fiki &#128526;";
         $TempatLahir = "Mentok";
         $TanggalLahir = "10 September 2007";
         $Hobi = "Menulis dan membaca buku";
         $Pasangan = "Belum ada &hearts;";
         $Pekerjaan = "Mahasiswa";
         $NamaOrangTua = "Pak David dan Ibu Yayudamayanti";
         $NamaKakak = "Yujos";
         $NamaAdek = "Tidak Punya";
        ?>
         <h2>Tentang saya</h2> 
         <p><strong>NIM:</strong> 
        <?php
        echo $nim;
        ?>
        </p>
         <p><strong>Nama Lengkap:</strong>
        <?php 
        echo $Nama;
        ?>
         <p><strong>Tempat Lahir:</strong>
        <?php
        echo $TempatLahir;
        ?>
        </p>
         <p><strong>Tanggal Lahir:</strong>
        <?php
        echo $TanggalLahir;
        ?>
        </p>
         <p><strong>Hobi:</strong>
        <?php
        echo $Hobi;
        ?>
        </p>
         <p><strong>Pasangan:</strong>
        <?php
        echo $Pasangan;
        ?>
        </p>
         <p><strong>Pekerjaaan:</strong>
        <?php
        echo $Pekerjaan;
        ?>
        </p>
         <p><strong>Nama Orang Tua: </strong>
        <?php
        echo $NamaOrangTua;
        ?>
        </p>
         <p><strong>Nama Kakak:</strong>
        <?php
        echo $NamaKakak;
        ?>
        </p>
         <p><strong>Nama Adek:</strong>
        <?php
        echo $NamaAdek;
        ?>
        </p>
    </section>
    <section id="Contact">
    <h2>Kontak Saya</h2>
    <form action="" method="get">

        <label for="txtNama"><span>Nama:</span>
        <input type="text" id="txtNama" class="nama" name="txtNama" placeholder="Masukan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
        <input type="email" id="txtEmail" class="oke" name="txtEmail" placeholder="Masukan email" required autocomplete="email">
        </label>   

        <label for="submit"><span>Pesan:</span>
        <textarea id="txtPesan" name="txtPesan" class="submit" rows="4" placeholder="Tulis Pesan anda..." required></textarea>
        <small id="charCount">0/200 karakter</small>
        </label>  

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
    </form>
    </section>
    <section id="ipk">
    <h2>Nilai Saya</h2>
        <?php 
        $namaMatkul1 = "Kalkulus";
        $namaMatkul2 = "Logika Informatika";
        $namaMatkul3 = "Pengantar Teknik Informatika";
        $namaMatkul4 = "Aplikasi Perkantoran";
        $namaMatkul5 = "Konsep Basis Data";

        $sksMatkul1 = 3;
        $sksMatkul2 = 3;
        $sksMatkul3 = 3;
        $sksMatkul4 = 3;
        $sksMatkul5 = 3;

        $nilaiHadir1 = 91;
        $nilaiHadir2 = 85;
        $nilaiHadir3 = 95;
        $nilaiHadir4 = 80;
        $nilaiHadir5 = 69;

        $nilaiTugas1 = 88;
        $nilaiTugas2 = 87;
        $nilaiTugas3 = 90;
        $nilaiTugas4 = 78;
        $nilaiTugas5 = 95;

        $nilaiUTS1 = 80;
        $nilaiUTS2 = 78;
        $nilaiUTS3 = 91;
        $nilaiUTS4 = 92;
        $nilaiUTS5 = 94;

        $nilaiUAS1 = 85;
        $nilaiUAS2 = 80;
        $nilaiUAS3 = 91;
        $nilaiUAS4 = 88;
        $nilaiUAS5 = 93;
        ?>

        <?php
    function grade($nilaiAkhir, $nilaiHadir) {
    if ($nilaiHadir < 70) {
        $grade = "E";
        $status = "GAGAL";
        $angkaMutu = 0.00;
    } elseif ($nilaiAkhir >= 91 && $nilaiAkhir <= 100) {
        $grade = "A";
        $status = "LULUS";
        $angkaMutu = 4.00;
    } elseif ($nilaiAkhir >= 81 && $nilaiAkhir <= 90) {
        $grade = "A-";
        $status = "LULUS";
        $angkaMutu = 3.70;
    } elseif ($nilaiAkhir >= 76 && $nilaiAkhir <= 80) {
        $grade = "B+";
        $status = "LULUS";
        $angkaMutu = 3.30;
    } elseif ($nilaiAkhir >= 71 && $nilaiAkhir <= 75) {
        $grade = "B";
        $status = "LULUS";
        $angkaMutu = 3.00;
    } elseif ($nilaiAkhir >= 66 && $nilaiAkhir <= 70) {
        $grade = "B-";
        $status = "LULUS";
        $angkaMutu = 2.70;
    } elseif ($nilaiAkhir >= 61 && $nilaiAkhir <= 65) {
        $grade = "C+";
        $status = "LULUS";
        $angkaMutu = 2.30;
    } elseif ($nilaiAkhir >= 56 && $nilaiAkhir <= 60) {
        $grade = "C";
        $status = "LULUS";
        $angkaMutu = 2.00;
    } elseif ($nilaiAkhir >= 51 && $nilaiAkhir <= 55) {
        $grade = "C-";
        $status = "LULUS";
        $angkaMutu = 1.70;
    } elseif ($nilaiAkhir >= 36 && $nilaiAkhir <= 50) {
        $grade = "D";
        $status = "GAGAL";
        $angkaMutu = 1.00;
    } elseif ($nilaiAkhir >= 0 && $nilaiAkhir <= 35) {
        $grade = "E";
        $status = "GAGAL";
        $angkaMutu = 0.00;
    } else {
        $grade = "-";
        $status = "NILAI TIDAK VALID";
        $angkaMutu = 0.00;
    }
        
    return ['grade' => $grade, 'status' => $status, 'angkaMutu' => $angkaMutu];
}

        $nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
        $nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
        $nilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
        $nilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
        $nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);

        $hasil1 = grade($nilaiAkhir1, $nilaiHadir1);
        $hasil2 = grade($nilaiAkhir2, $nilaiHadir2);
        $hasil3 = grade($nilaiAkhir3, $nilaiHadir3);
        $hasil4 = grade($nilaiAkhir4, $nilaiHadir4);
        $hasil5 = grade($nilaiAkhir5, $nilaiHadir5);
        ?>

        <p><strong>Nama Matkul:</strong>
        <?php
        echo $namaMatkul1;
        ?>
        </p>
        <p><strong>SKS:</strong>
        <?php 
        echo $sksMatkul1;
        ?>
        <p><strong>Kehadiran:</strong>
        <?php 
        echo $nilaiHadir1;
        ?>
        <p><strong>Tugas:</strong>
        <?php 
        echo $nilaiTugas1;
        ?>
        <p><strong>UTS:</strong>
        <?php 
        echo $nilaiUTS1;
        ?>
        <p><strong>UAS:</strong>
        <?php 
        echo $nilaiUAS1;
        ?>
        <p><strong>Nilai Akhir:</strong>
        <?php 
        echo $NnilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
        ?>
        <p><strong>Grade:</strong>
        <?php 
        echo $Grade1 = $hasil1['grade'];
        ?>
        <p><strong>Angka Mutu:</strong>
        <?php 
        echo $Mutu1 = $hasil1['angkaMutu'];
        ?>
        <p><strong>Bobot:</strong>
        <?php 
        echo $Bobot1 = $sksMatkul1 * $Mutu1;
        ?>
        <p><strong>Status:</strong>
        <?php 
        echo $Status1 = $hasil1['status'];
        ?>

        <h2><br></h2>
        <p><strong>Nama Matkul:</strong>
        <?php
        echo $namaMatkul2;
        ?>
        </p>
        <p><strong>SKS:</strong>
        <?php 
        echo $sksMatkul2;
        ?>
        <p><strong>Kehadiran:</strong>
        <?php 
        echo $nilaiHadir2;
        ?>
        <p><strong>Tugas:</strong>
        <?php 
        echo $nilaiTugas2;
        ?>
        <p><strong>UTS:</strong>
        <?php 
        echo $nilaiUTS2;
        ?>
        <p><strong>UAS:</strong>
        <?php 
        echo $nilaiUAS2;
        ?>
        <p><strong>Nilai Akhir:</strong>
        <?php 
        echo $NnilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
        ?>
        <p><strong>Grade:</strong>
        <?php 
        echo $Grade2 = $hasil2['grade'];
        ?>
        <p><strong>Angka Mutu:</strong>
        <?php 
        echo $Mutu2 = $hasil2['angkaMutu'];
        ?>
        <p><strong>Bobot:</strong>
        <?php 
        echo $Bobot2 = $sksMatkul2 * $Mutu2;
        ?>
        <p><strong>Status:</strong>
        <?php 
        echo $Status2 = $hasil2['status'];
        ?>

        <h2><br></h2>
        <p><strong>Nama Matkul:</strong>
        <?php
        echo $namaMatkul3;
        ?>
        </p>
        <p><strong>SKS:</strong>
        <?php 
        echo $sksMatkul3;
        ?>
        <p><strong>Kehadiran:</strong>
        <?php 
        echo $nilaiHadir3;
        ?>
        <p><strong>Tugas:</strong>
        <?php 
        echo $nilaiTugas3;
        ?>
        <p><strong>UTS:</strong>
        <?php 
        echo $nilaiUTS3;
        ?>
        <p><strong>UAS:</strong>
        <?php 
        echo $nilaiUAS3;
        ?>
        <p><strong>Nilai Akhir:</strong>
        <?php 
        echo $NnilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
        ?>
        <p><strong>Grade:</strong>
        <?php 
        echo $Grade3 = $hasil3['grade'];
        ?>
        <p><strong>Angka Mutu:</strong>
        <?php 
        echo $Mutu3 = $hasil3['angkaMutu'];
        ?>
        <p><strong>Bobot:</strong>
        <?php 
        echo $Bobot3 = $sksMatkul3 * $Mutu3;
        ?>
        <p><strong>Status:</strong>
        <?php 
        echo $Status3 = $hasil3['status'];
        ?>

        <h2><br></h2>
        <p><strong>Nama Matkul:</strong>
        <?php
        echo $namaMatkul4;
        ?>
        </p>
        <p><strong>SKS:</strong>
        <?php 
        echo $sksMatkul4;
        ?>
        <p><strong>Kehadiran:</strong>
        <?php 
        echo $nilaiHadir4;
        ?>
        <p><strong>Tugas:</strong>
        <?php 
        echo $nilaiTugas4;
        ?>
        <p><strong>UTS:</strong>
        <?php 
        echo $nilaiUTS4;
        ?>
        <p><strong>UAS:</strong>
        <?php 
        echo $nilaiUAS4;
        ?>
        <p><strong>Nilai Akhir:</strong>
        <?php 
        echo $NnilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
        ?>
        <p><strong>Grade:</strong>
        <?php 
        echo $Grade4 = $hasil4['grade'];
        ?>
        <p><strong>Angka Mutu:</strong>
        <?php 
        echo $Mutu4 = $hasil4['angkaMutu'];
        ?>
        <p><strong>Bobot:</strong>
        <?php 
        echo $Bobot4 = $sksMatkul4 * $Mutu4;
        ?>
        <p><strong>Status:</strong>
        <?php 
        echo $Status4 = $hasil4['status'];
        ?>
        <h2><br></h2>
        <p><strong>Nama Matkul:</strong>
        <?php
        echo $namaMatkul5;
        ?>
        </p>

        <p><strong>SKS:</strong>
        <?php 
        echo $sksMatkul5;
        ?>
        <p><strong>Kehadiran:</strong>
        <?php 
        echo $nilaiHadir5;
        ?>
        <p><strong>Tugas:</strong>
        <?php 
        echo $nilaiTugas5;
        ?>
        <p><strong>UTS:</strong>
        <?php 
        echo $nilaiUTS5;
        ?>
        <p><strong>UAS:</strong>
        <?php 
        echo $nilaiUAS5;
        ?>
        <p><strong>Nilai Akhir:</strong>
        <?php 
        echo $NnilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);
        ?>
        <p><strong>Grade:</strong>
        <?php 
        echo $Grade5 = $hasil5['grade'];
        ?>
        <p><strong>Angka Mutu:</strong>
        <?php 
        echo $Mutu5 = $hasil5['angkaMutu'];
        ?>
        <p><strong>Bobot:</strong>
        <?php 
        echo $Bobot5 = $sksMatkul5 * $Mutu5;
        ?>
        <p><strong>Status:</strong>
        <?php 
        echo $Status5 = $hasil5['status'];
        ?>
        
    <?php
    $angkaMutuTotal = $Mutu1 + $Mutu2 + $Mutu3 + $Mutu4 + $Mutu5;
    $sksTotal = $sksMatkul1 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;
    $totalBobot = $Bobot1 + $Bobot2 + $Bobot3 + $Bobot4 + $Bobot5;
    $ipk = $totalBobot / $sksTotal;
    ?>

    <h2>Penilaian Akhir<br></h2>
    <p><strong>Total Bobot:</strong>
    <?php
    echo $totalBobot;
    ?>
    </p>

    <p><strong>Total SKS:</strong>
    <?php 
    echo $sksTotal;
    ?>
    </p>
    <p><strong>IPK:</strong>
    <?php
    echo $ipk;
    ?>
    </section>
    </footer>
    <p>&copy; 2025 Fiki [2511500029]</p>
    <script src="script.js"></script>
</body>
</html>