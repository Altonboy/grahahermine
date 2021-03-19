<?php
require '../assets/core/init.php';
$result = mysqli_query($connect, "SELECT * FROM partnership");

if(isset($_POST['savefoto'])){
  $kategori = $_POST['kategoripartner'];
  $judulfoto = $_POST['partner'];
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
    $sql = mysqli_query($connect, "INSERT INTO partnership (kategori, namaFoto, namaPartnership) VALUES ('$kategori','$nama_file_unik', '$judulfoto')");

    if ($sql) {
      $success = true;
    }
    else {
      $failed = true;
    }
  }
}

if (isset($_POST['delete'])) {
  $partnershipid = $_POST['partnershipid'];

  $result = mysqli_query($connect, "DELETE FROM partnership WHERE partnershipID='$partnershipid'");

?>
<script language="javascript">
alert("Foto Telah Dihapus!");
window.location.href= "Dashboard.php?page=partnership";
</script>
<?php
}
?>

<button class="btn btn-success float-right" data-toggle="modal" data-target="#addPartner">Tambah Partnership Baru</button>
<br>
<br>

<?php
    while($partnerlist = mysqli_fetch_array($result)) {
      ?>
      <form method="POST" action="Dashboard.php?page=partnership">
        <?php
      echo "<div class='card mb-3'>";
          echo "<div class='row no-gutters'>";
              echo "<div class='col-md-3 p-3'>";        
                echo "<img class='card-img' width='100%' height='auto' src='../assets/images/".$partnerlist['namaFoto']."'>";
              echo "</div>";
              echo "<div class='col-md-9'>";
              ?>
              <input type="hidden" name="partnershipid" value="<?php echo $partnerlist['partnershipID']?>">
              
              <button title="Hapus" style="margin-right:5px;" onclick="return confirm('Apakah anda yakin menghapus foto <?php echo $partnerlist['namaPartnership']?> ?');" name="delete" value="delete" class="close" aria-label="Close">
                <?php
              echo"<span style='color:red' aria-hidden='true'>&times;</span></button>";
                  echo "<div class='card-body'>";
                      echo "<h4>".$partnerlist['namaPartnership']."</h4>";
                  echo "</div></div></div></div></form>";
    }
?>


<!-- modal -->
<div class="modal fade" id="addPartner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Partnership Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="Dashboard.php?page=partnership" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
                <label>Kategori Partnership</label>
                <select class="form-control" autocomplete="off" type="text" name="kategoripartner" required>
                  <option value="Asuransi">Asuransi</option>
                  <option value="Perusahaan">Perusahaan</option>
                </select>

                <label>Nama Perusahaan</label>
                <input class="form-control" autocomplete="off" type="text" name="partner" required>

                <label>Logo Perusahaan</label>
                <input class="form-control" type="file" name="upfoto" accept="image/*" required>
                
            </div>

          <?php if (isset($success) ) { ?>

                <script language="javascript">
                  alert("Foto Berhasil Disimpan!");
                    window.location.href= "Dashboard.php?page=partnership";
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