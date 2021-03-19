<?php 
require '../assets/core/init.php';
$result = mysqli_query($connect, "SELECT * FROM artikel");

if(isset($_POST['saveartikel'])){
  $judulartikel = $_POST['judulartikel'];
  $artikel=mysqli_real_escape_string($connect,$_POST['artikel']);
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
    $sql = mysqli_query($connect, "INSERT INTO artikel (judulArtikel, isiArtikel, namaFoto) VALUES ('$judulartikel', '$artikel','$nama_file_unik')");

    if ($sql) {
      $success = true;
    }
    else {
      $failed = true;
    }
  }
}

?>

<button class="btn btn-success float-right" data-toggle="modal" data-target="#addArtikel">Tambah Artikel Baru</button>
<br>
<br>

<?php
while($listartikel = mysqli_fetch_array($result)){
  echo "<a style='text-decoration:none;' href='kelola/editartikel.php?id=$listartikel[artikelID]'>";
echo "<div class='card mb-3' style='cursor: pointer;'>";
	echo "<div class='row no-gutters'>";
    	echo "<div class='col-md-4'>";
      		echo "<img class='card-img' width='100%' height='auto' src='../assets/images/".$listartikel['namaFoto']."'>";
    	echo "</div>";
    	echo "<div class='col-md-8'>";
      		echo "<div class='card-body' style='max-height: 200px'>";
        		echo "<div class='row'>";
		            echo "<div class='col-md-8'>";
		                echo "<h5 class='card-title'>".$listartikel['judulArtikel']."</h5>";
		            echo "</div>";
        		echo "</div>";
        		echo"<p class='card-text text-truncate' style='overflow: hidden;'>".$listartikel['isiArtikel']."</p><p><i>Show More >></i></p>";
      		echo"</div></div></div></div></a>";
        }
?>

<!-- modal -->
<div class="modal fade" id="addArtikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Artikel Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="Dashboard.php?page=artikel" enctype="multipart/form-data">

      <div class="modal-body">
        <div class="form-group">

                <label>Judul Artikel</label>
                <input class="form-control" autocomplete="off" type="text" name="judulartikel" required>

                <label>Artikel</label>
                <textarea class="form-control" name="artikel" autocomplete="off" class="field" width="100%" required></textarea>

                <label>Foto Artikel</label>
                <input class="form-control" type="file" name="upfoto" required accept="image/*">
                
            </div>

            <?php if (isset($success) ) { ?>

                <script language="javascript">
                  alert("Artikel Berhasil Disimpan!");
                    window.location.href= "Dashboard.php?page=artikel";
                </script>


                  <?php } ?>

                  <?php if (isset($failed) ) { ?>

                      <script language="javascript">
                  alert("Artikel Gagal Disimpan!");
                    window.location.href= "Dashboard.php?page=artikel";
                </script>

                  <?php } ?>

                  <?php if (isset($filetoobig) ) { ?>

                      <p>Foto terlalu besar!</p>

                  <?php } ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="saveartikel">Upload</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- end modal -->