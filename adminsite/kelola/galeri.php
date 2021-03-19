<?php
require '../assets/core/init.php';

$result = mysqli_query($connect, "SELECT * FROM galeri");

if(isset($_POST['savefoto'])){
  $judulfoto = $_POST['judulfoto'];
  $nama = $_FILES['upfoto']['name'];
  $file_tmp = $_FILES['upfoto']['tmp_name'];
  $acak = rand(1,99);
  $ukuran = $_FILES['upfoto']['size'];
  $nama_file_unik = $acak.$nama; 

  if ($_FILES['upfoto']['error'] > 0) {
    $filetoobig = true;
  }
  else{
    move_uploaded_file($file_tmp, '../assets/images/'.$nama_file_unik);
    $sql = mysqli_query($connect, "INSERT INTO galeri (namaFoto, judulFoto) VALUES ('$nama_file_unik', '$judulfoto')");

    if ($sql) {
      $success = true;
    }
    else {
      $failed = true;
    }
  }
}

if (isset($_POST['delete'])) {
  $galeriid = $_POST['galeriid'];

  $result = mysqli_query($connect, "DELETE FROM galeri WHERE fotoID='$galeriid'");

?>
<script language="javascript">
alert("Foto Telah Dihapus!");
window.location.href= "Dashboard.php?page=galeri";
</script>
<?php
}
?>

<button class="btn btn-success float-right" data-toggle="modal" data-target="#addGallery">Tambah Foto Baru</button>
<br>
<br>

<?php
    while($galerilist = mysqli_fetch_array($result)) {
      ?>
      <form method="POST" action="Dashboard.php?page=galeri">
        <?php
      echo "<div class='card mb-3'>";
          echo "<div class='row no-gutters'>";
              echo "<div class='col-md-3 p-3'>";        
                echo "<img class='card-img' width='100%' height='auto' src='../assets/images/".$galerilist['namaFoto']."'>";
              echo "</div>";
              echo "<div class='col-md-9'>";
              ?>
              <input type="hidden" name="galeriid" value="<?php echo $galerilist['fotoID']?>">
              
              <button title="Hapus" style="margin-right:5px;" onclick="return confirm('Apakah anda yakin menghapus foto <?php echo $galerilist['judulFoto']?> ?');" name="delete" value="delete" class="close" aria-label="Close">
                <?php
              echo"<span style='color:red' aria-hidden='true'>&times;</span></button>";
                  echo "<div class='card-body'>";
                      echo "<h4>".$galerilist['judulFoto']."</h4>";
                  echo "</div></div></div></div></form>";
    }
?>


<!-- modal -->
<div class="modal fade" id="addGallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Foto Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="Dashboard.php?page=galeri" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">

                <label>Judul Foto</label>
                <input class="form-control" autocomplete="off" type="text" name="judulfoto" required>

                <label>Foto</label>
                <input class="form-control" type="file" name="upfoto" accept="image/*" required>
                
            </div>

          <?php if (isset($success) ) { ?>

                <script language="javascript">
                  alert("Foto Berhasil Disimpan!");
                    window.location.href= "Dashboard.php?page=galeri";
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
        <button type="submit" class="btn btn-primary" name="savefoto">Upload</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- end modal -->