<?php
require '../assets/core/init.php';

if (isset($_POST['pilihkategori'])) {
  $filter = $_POST['pilihkategori'];
  $getdaftarlayanan = mysqli_query($connect, "SELECT * FROM daftar_layanan WHERE kategoriLayanan = '$filter'");
} else {
    $getdaftarlayanan = mysqli_query($connect, "SELECT * FROM daftar_layanan");
}

if(isset($_POST['savelayanan'])){
  $kategori = $_POST['kategorilayanan'];
  $layanan = $_POST['layanan'];
  $deskripsilayanan = $_POST['deskripsilayanan'];

  $nama1 = $_FILES['utama']['name'];
  $file_tmp1 = $_FILES['utama']['tmp_name'];
  $acak1 = rand(1,99);
  $nama_1 = $acak1.$nama1;

  $nama2 = $_FILES['kedua']['name'];
  $file_tmp2 = $_FILES['kedua']['tmp_name'];

  $nama3 = $_FILES['ketiga']['name'];
  $file_tmp3 = $_FILES['ketiga']['tmp_name'];

    move_uploaded_file($file_tmp1, '../assets/images/'.$nama_1);
    move_uploaded_file($file_tmp2, '../assets/images/'.$nama2);
    move_uploaded_file($file_tmp3, '../assets/images/'.$nama3);
    $sql = mysqli_query($connect, "INSERT INTO daftar_layanan (kategoriLayanan, namaLayanan, deskripsiLayanan, fotoUtama, foto2, foto3) VALUES ('$kategori', '$layanan', '$deskripsilayanan', '$nama_1', '$nama2', '$nama3')");

    if ($sql) {
      $success = true;
    }
    else {
      $failed = true;
    }
}

?>
<button class="btn btn-success float-right" data-toggle="modal" data-target="#addLayanan">Tambah Layanan Baru</button>
<br>
<br>

<form name="pilihkategori" method="POST" action="Dashboard.php?page=pelayanan">
<select onchange="this.form.submit()" class="btn btn-outline-success" style="width: 100%;" name="pilihkategori">
<option value="" selected disabled hidden>Pilih Kategori</option>

  <?php

  $query = mysqli_query($connect, "SELECT * FROM kategori_layanan");

  while ($data = mysqli_fetch_array($query))

  {

  echo "<option value='". $data['namaKategori']."'>".$data['namaKategori']."</option>";

  }

  ?>
</select>
</form>
<br>

<div class="pelayanan">
    <?php
      while ($listlayanan = mysqli_fetch_array($getdaftarlayanan)) {
        echo "<a href='kelola/detailpelayanan.php?id=$listlayanan[layananID]'>";
echo"<div class='card'>";
  echo"<div class='card-header'>".$listlayanan['namaLayanan']."</div></div></a><br>";
      }?>
  </div>


<!-- modal -->
<div class="modal fade" id="addLayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Layanan Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" enctype="multipart/form-data" action="Dashboard.php?page=pelayanan">
      <div class="modal-body">
        <div class="form-group">
                <label>Kategori Layanan</label>
                <select class="form-control" style="width: 100%" required name="kategorilayanan">
                  <option value="" selected disabled hidden></option>

                    <?php

                    $query = mysqli_query($connect, "SELECT * FROM kategori_layanan");

                    while ($data = mysqli_fetch_array($query))

                    {

                    echo "<option value='". $data['namaKategori']."'>".$data['namaKategori']."</option>";

                    }

                    ?>
                </select>

                <label>Layanan</label>
                <input class="form-control" autocomplete="off" type="text" name="layanan" required>
            
                <label>Deskripsi Singkat Layanan</label>
                <textarea class="form-control" name="deskripsilayanan" autocomplete="off" class="field" width="100%" required></textarea>

                <label>Foto Layanan</label>
                <input class="form-control" type="file" name="utama" required>
                <input class="form-control" type="file" name="kedua">
                <input class="form-control" type="file" name="ketiga">
                
            </div>
            <?php if (isset($success) ) { ?>

                <script language="javascript">
                  alert("Data Berhasil Disimpan!");
                    window.location.href= "Dashboard.php?page=pelayanan";
                </script>


                  <?php } ?>

                  <?php if (isset($failed) ) { ?>

                      <p>Foto gagal di simpan!</p>

                  <?php } ?>

                  <?php if (isset($filetoobig) ) { ?>

                      <p>Foto terlalu besar!</p>

                  <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" name="savelayanan" class="btn btn-primary">Upload</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- end modal -->