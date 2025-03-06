<?php

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $praktikum = $_POST['nilai_tugas'];
    
    echo "<P>Nama : $nama</p>";
    echo "<p>Mata Kuliah ; $matkul</p>";
    echo "<p>Nilai UTS : $uts</p>";
    echo "<p>Nilai UAS : $uas</p>";
    echo "<p>Nilai Tugas/praktikum : $praktikum</p>";

//status kelulusan
$nilai_total = ($uts * 0.3) + ($uas *0.35) + ($praktikum * 0.35);

//check nilai total
if($nilai_total > 55) {
    echo "<p>Status: dinyatakan lulus.</p>";
    } else {
        echo "<p>Status: tidak lulus</p>";
}
}