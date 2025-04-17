<?php 
include_once "template/top.php";
include_once "template/navbar.php";
include_once "template/sidebar.php";
require_once 'dbkoneksi.php';

// Ambil data kelurahan
$sql = "SELECT * FROM kelurahan";
$rs = $dbh->query($sql);
$kelurahan = $rs->fetchAll(PDO::FETCH_ASSOC);

// Ambil data pasien jika dalam mode edit
$pasien = [];
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql_edit = "SELECT * FROM pasien WHERE id = ?";
    $stmt = $dbh->prepare($sql_edit);
    $stmt->execute([$id]);
    $pasien = $stmt->fetch();
}
?>
<!-- Menampilkan form -->
<form class="mt-2 container" method="post" action="proses_pasien.php">
  <!-- jika dalam mode edit -->
  <?php if (isset($pasien['id'])) : ?>
    <input type="hidden" name="id" value="<?= $pasien['id'] ?>">
  <?php endif; ?>
<!-- form kode -->
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-barcode"></i></div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control" value="<?= $pasien['kode'] ?? '' ?>">
      </div>
    </div>
  </div>
  <!-- form nama -->
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-address-card"></i></div>
        </div>
        <input id="nama" name="nama" type="text" class="form-control" value="<?= $pasien['nama'] ?? ''?>">
      </div>
    </div>
  </div>
  <!-- form tempat lahir -->
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-home"></i></div>
        </div> 
        <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $pasien['tmp_lahir'] ?? '' ?>">
      </div>
    </div>
  </div>
  <!-- form tanggal lahir -->
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?= $pasien['tgl_lahir'] ?? '' ?>">
      </div>
    </div>
  </div>
<!-- form jenis kelamin/gender -->
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?= (isset($pasien['gender']) && $pasien['gender'] == 'L') ? 'checked' : '' ?>> 
        <label for="gender_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?= (isset($pasien['gender']) && $pasien['gender'] == 'P') ? 'checked' : '' ?>> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
<!-- form email -->
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-envelope"></i></div>
        </div> 
        <input id="email" name="email" type="text" class="form-control" value="<?= $pasien['email'] ?? '' ?>">
      </div>
    </div>
  </div>
<!-- form alamat -->
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="2" class="form-control"><?= $pasien['alamat'] ?? '' ?></textarea>
    </div>
  </div>
<!-- form kelurahan -->
  <div class="form-group row">
    <label for="kelurahan" class="col-4 col-form-label">Kelurahan</label> 
    <div class="col-8">
      <select id="kelurahan" name="kelurahan" class="custom-select">
        <?php foreach ($kelurahan as $row) : ?>
          <option value="<?= $row['id'] ?>" <?= (isset($pasien['kelurahan_id']) && $pasien['kelurahan_id'] == $row['id']) ? 'selected' : '' ?>> 
            <?= $row['nama'] ?>
          </option>
        <?php endforeach ?>
      </select>
    </div>
  </div> 
  <!-- button -->
  <div class="form-group row">
    <div class="offset-4 col-8">
      <!-- Tampilkan button cancel dan update jika dalam mode edit -->
      <?php if (isset($pasien['id'])) : ?>
        <button name="cancel" type="submit" class="btn btn-danger">Cancel</button>
        <button name="update" type="submit" class="btn btn-primary">Update</button>
      <!-- Tampilkan button simpan jika dalam mode tambah data -->
      <?php else : ?>
        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
      <?php endif ?>
    </div>
  </div>
</form>

<?php include_once "template/bottom.php"; ?>
