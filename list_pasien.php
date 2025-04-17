<?php
require_once "dbkoneksi.php";
include_once 'template/top.php';
include_once 'template/navbar.php';
include_once 'template/sidebar.php';

$list_pasien = $dbh->query("SELECT * FROM pasien");
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>kode</th>
            <th>nama</th>
            <th>gender</th>
            <th>alamat</th>
            <th>Email</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_pasien as $idx => $pasien) { ?>
        <tr>
            <td><?= $idx + 1 ?></td>
            <td><?= $pasien->kode ?></td>
            <td><?= $pasien->nama ?></td>
            <td><?= $pasien->gender ?></td>  
            <td><?= $pasien->alamat ?></td>
            <td><?= $pasien->email ?></td>
            <td>
                <a href="edit_pasien.php?id=<?= $pasien->id ?>" class="btn btn-primary">Edit</a>
                <a href="hapus_pasien.php?id=<?= $pasien->id ?>" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
            <?php } ?>
    </tbody>
</table>

<?php 
include_once 'template/bottom.php';
?>