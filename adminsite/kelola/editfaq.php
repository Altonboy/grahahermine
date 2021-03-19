<?php 
require '../../assets/core/init.php';

if (isset($_POST['update'])) {
	$faqid = $_POST['faqid'];
	$pertanyaan = $_POST['pertanyaan'];
	$jawaban = $_POST['jawaban'];

	$result = mysqli_query($connect, "UPDATE faq SET pertanyaan = '$pertanyaan', jawaban = '$jawaban' WHERE faqID = $faqid");

?>
<script language="javascript">
alert("Data Telah Diubah!");
window.location.href= "../Dashboard.php?page=faq";
</script>

<?php

}
elseif (isset($_POST['delete'])) {
	$faqid = $_POST['faqid'];

	$result = mysqli_query($connect, "DELETE FROM faq WHERE faqID='$faqid'");

?>
<script language="javascript">
alert("Pertanyaan Telah Dihapus!");
window.location.href= "../Dashboard.php?page=faq";
</script>
<?php
}
?>
<?php

$faqid = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM faq WHERE faqID='$faqid'");

while($faq = mysqli_fetch_array($result)) {
	$kategori = $faq['judulFaq'];
	$pertanyaan = $faq['pertanyaan'];
	$jawaban = $faq['jawaban'];
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
		<form method="POST" action="editfaq.php">
		<input type="hidden" name="faqid" value="<?php echo $faqid;?>">
		
		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Kategori</span>
		  </div>
		  <input class="form-control" disabled type="text" name="kategori" value="<?php echo $kategori;?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Pertanyaan</span>
		  </div>
		  <input class="form-control" type="text" name="pertanyaan" value="<?php echo $pertanyaan;?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Jawaban</span>
		  </div>
		  <textarea class="form-control" name="jawaban" style="height: 300px;"><?php echo $jawaban;?></textarea>
		</div>

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