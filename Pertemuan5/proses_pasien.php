<?php 
require_once 'dbkoneksi.php';
// delete data pasien ke database
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM pasien WHERE id=:id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    header("location: list_pasien.php");
}

// update data pasien
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kelurahan = $_POST['kelurahan'];

    // 1) buat query SQL
    $sql = "UPDATE pasien SET kode=:kode, nama=:nama, tmp_lahir=:tmp_lahir, tgl_lahir=:tgl_lahir, gender=:gender, email=:email, alamat=:alamat, kelurahan_id=:kelurahan WHERE id=:id";

    // 2) eksekusi query SQL
    $result = $dbh->prepare($sql);
    $result->bindParam(":id", $id, PDO::PARAM_STR);
    $result->bindParam(":kode", $kode, PDO::PARAM_STR);
    $result->bindParam(":nama", $nama, PDO::PARAM_STR);
    $result->bindParam(":tmp_lahir", $tmp_lahir, PDO::PARAM_STR);
    $result->bindParam(":tgl_lahir", $tgl_lahir, PDO::PARAM_STR);
    $result->bindParam(":gender", $gender, PDO::PARAM_STR);
    $result->bindParam(":email", $email, PDO::PARAM_STR);
    $result->bindParam(":alamat", $alamat, PDO::PARAM_STR);
    $result->bindParam(":kelurahan", $kelurahan, PDO::PARAM_STR);
    $result->execute();

    header("location: list_pasien.php");
}

// tambah data pasien
if (isset($_POST["submit"])) {
    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $tmp_lahir = $_POST["tmp_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $kelurahan = $_POST["kelurahan"];
    // Memasukkan data ke dalam database
    $sql = "INSERT INTO pasien (id,kode,nama,tmp_lahir,tgl_lahir,gender,email,alamat,kelurahan_id) VALUES
        (:id,:kode,:nama,:tmp_lahir,:tgl_lahir,:gender,:email,:alamat,:kelurahan)";
    $result = $dbh->prepare($sql);
    $result->bindParam(":id", $id, PDO::PARAM_STR);
    $result->bindParam(":kode", $_POST["kode"], PDO::PARAM_STR);
    $result->bindParam(":nama", $_POST["nama"], PDO::PARAM_STR);
    $result->bindParam(":tmp_lahir", $_POST["tmp_lahir"], PDO::PARAM_STR);
    $result->bindParam(":tgl_lahir", $_POST["tgl_lahir"], PDO::PARAM_STR);
    $result->bindParam(":gender", $_POST["gender"], PDO::PARAM_STR);
    $result->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
    $result->bindParam(":alamat", $_POST["alamat"], PDO::PARAM_STR);
    $result->bindParam(":kelurahan", $_POST["kelurahan"], PDO::PARAM_STR);
    $result->execute();
    // mengembalikan ke tampilan/page list_pasien
    header("location: list_pasien.php");
}