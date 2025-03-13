<?php
function salam($nama = "Nurul Fikri") {
    echo "Assalamualaikum, apa kabar teman! " . $nama;
}
?>
<h1>Selamat datang di STT-NF</h1>
<p>
    <?php
    salam("dewi");
    echo "<br>";
    salam();
    ?>
</p>
