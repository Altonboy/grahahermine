<?php 
require '../../assets/core/init.php';

if (isset($_POST['update'])) {
	$artikelid = $_POST['artikelid'];
	$judul = $_POST['judul'];
	$isi = mysqli_real_escape_string($connect,$_POST['isi']);
	$nama = $_FILES['upfoto']['name'];
	$file_tmp = $_FILES['upfoto']['tmp_name'];
	$acak = rand(1,99);
	$ukuran = $_FILES['upfoto']['size'];
	$nama_file_unik = $acak.$nama; 

	if ($_FILES['upfoto']['error'] > 0) {
	$filetoobig = true;
	}
	else{
	move_uploaded_file($file_tmp, '../../assets/images/'.$nama_file_unik);

	$result = mysqli_query($connect, "UPDATE artikel SET judulArtikel = '$judul', isiArtikel = '$isi', namaFoto = '$nama_file_unik' WHERE artikelID = $artikelid");
	if ($result) {
      $success = true;
    }
    else {
      $failed = true;
    }
  }
}
elseif (isset($_POST['delete'])) {
	$artikelid = $_POST['artikelid'];

	$result = mysqli_query($connect, "DELETE FROM artikel WHERE artikelID='$artikelid'");

?>
<script language="javascript">
alert("Pertanyaan Telah Dihapus!");
window.location.href= "../Dashboard.php?page=artikel";
</script>
<?php
}
?>
<?php

$artikelid = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM artikel WHERE artikelid='$artikelid'");

while($listartikel = mysqli_fetch_array($result)) {
	$judul = $listartikel['judulArtikel'];
	$isi = $listartikel['isiArtikel'];
	$tanggal = $listartikel['tanggalArtikel'];
	$foto = $listartikel['namaFoto'];
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"/>
  	<style type="text/css">
  		body {
      		font-family: "Roboto", sans-serif;
  		}

  		h5{
  			color: rgb(0, 123, 59);
  		}

  		.header{
		  width: 100%;
		  height: auto;
		  max-height: 
		  margin: auto;
		  text-align: center;
		  font-size: 30px;
		  font-weight: bold;
		  color: rgb(0, 123, 59);
		  padding:8px;
		  background-color: white;
		}

		.dashheader{
		  background-color: rgb(0, 123, 59);
		  width: 100%;
		  text-align: center;
		  color: white;
		  vertical-align: middle;
		  font-size: 25px;
		  padding: 10px 0px;
		}
  	</style>
</head>
<body>
	<div class="header">
	    <img src="../../assets/image/logo_gh_2.png" style="max-height: 90px; vertical-align: middle;"> Rs. Graha Hermine
	</div>
	<div class="dashheader">
	    Info
	</div>
	<div class="container">
		<br>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
		<input type="hidden" name="artikelid" value="<?php echo $artikelid;?>">
		
		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Judul Artikel</span>
		  </div>
		  <input class="form-control" type="text" name="judul" value="<?php echo $judul;?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Isi Artikel</span>
		  </div>
		  <textarea class="form-control" name="isi" style="height: 300px;"><?php echo $isi;?></textarea>
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Foto Artikel</span>
		  </div>
		  <input type="file" name="upfoto" class="form-control" accept="image/*"> <img src="../../assets/images/<?php echo $foto?>" width=60%>
		</div>

		<?php if (isset($success) ) { ?>

                <script language="javascript">
                  alert("Artikel Berhasil Disimpan!");
                    window.location.href= "../Dashboard.php?page=artikel";
                </script>


                  <?php } ?>

                  <?php if (isset($failed) ) { ?>

                      <script language="javascript">
                  alert("Artikel Gagal Disimpan!");
                    window.location.href= "../Dashboard.php?page=artikel";
                </script>

                  <?php } ?>

                  <?php if (isset($filetoobig) ) { ?>

                      <p>Foto terlalu besar!</p>

                  <?php } ?>


		<br>
		<div class="float-right">
			<button onclick="return confirm('Apakah anda yakin?');" name="delete" value="delete" class="btn btn-danger" >Hapus</button>
			<button type="submit" name="update" class="btn btn-success">Ubah</button>
		</div>
		</form>
	</div>

<!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>