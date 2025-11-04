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


$namaMatkul1 = "Kalkulus";
$namaMatkul2 = "Logika Informatika";
$namaMatkul3 = "Pengantar Teknik Informatika";
$namaMatkul4 = "Aplikasi Perkantoran";
$namaMatkul5 = "Basis Data";

$sksMatkul1 = 4;
$sksMatkul2 = 3;
$sksMatkul3 = 3;
$sksMatkul4 = 2;
$sksMatkul5 = 3;

$nilaiHadir1 = 80;
$nilaiHadir2 = 85;
$nilaiHadir3 = 90;
$nilaiHadir4 = 75;
$nilaiHadir5 = 95;

$nilaiTugas1 = 85;
$nilaiTugas2 = 90;
$nilaiTugas3 = 95;
$nilaiTugas4 = 80;
$nilaiTugas5 = 75;

$nilaiUTS1 = 80;
$nilaiUTS2 = 85;
$nilaiUTS3 = 90;
$nilaiUTS4 = 75;
$nilaiUTS5 = 95;

$nilaiUAS1 = 85;
$nilaiUAS2 = 90;
$nilaiUAS3 = 95;
$nilaiUAS4 = 80;
$nilaiUAS5 = 75;

$nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
$nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
$nilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
$nilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
$nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);

echo("nilai akhir 1 : " . $nilaiAkhir1 . "   ");
echo("nama matkul 1 : " . $namaMatkul1 . "   ");
echo("sks matkul 1 : " . $sksMatkul1 . "   ");
echo("nilai hadir 1 : " . $nilaiHadir1 . "   ");
echo("nilai tugas 1 : " . $nilaiTugas1 . "   ");
echo("nilai UTS 1 : " . $nilaiUTS1 . "   ");
echo("nilai UAS 1 : " . $nilaiUAS1 . "   ");
        
$hasil = grade($nilaiAkhir1, $nilaiHadir1);

echo "Grade: " . $hasil['grade'] . "   ";
echo "Status: " . $hasil['status'] . "   ";
echo "Angka Mutu: " . $hasil['angkaMutu'];