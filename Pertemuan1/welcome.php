<!DOCTYPE html>
<html>
    <head> 
        <tittle> WELCOME </tittle>
    <head>
    <body>
        <h3> Selamat Belajar Web</h3>
        <?php
        $_nama = "Budi darmawan";
        $_umur = 20;
        $_berat = 60 ;
        $_prodi = "Sistem informasi" ;
        $_kampus = "STT terpadu nurul fikri";
        echo "Nama saya $_nama,  umur saya $_umur tahun";
        echo "<br>";
        ?>
    </hr>
    <?php 
        echo "Berat badan saya $_berat kg";
        echo "<br>";
        echo "Saya kuliah di prodi $_prodi";
        ?>
        <br>Saya Kuliah di kampus <strong> <?= $_kampus ?></strong>
       
           
        </body>