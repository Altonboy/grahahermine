<?php 
require '../../assets/core/init.php';

if (isset($_POST['update'])) {
	$dokterid = $_POST['dokterid'];
	$addnamadokter = $_POST['namadokter'];
	$addspesialis = $_POST['spesialis'];
	$addsenin1 = $_POST['jadwalsenin1'];
	$addsenin2 = $_POST['jadwalsenin2'];
	$jadwalsenin = $addsenin1.'-'.$addsenin2;
	$addselasa1 = $_POST['jadwalselasa1'];
	$addselasa2 = $_POST['jadwalselasa2'];
	$jadwalselasa = $addselasa1.'-'.$addselasa2;
	$addrabu1 = $_POST['jadwalrabu1'];
	$addrabu2 = $_POST['jadwalrabu2'];
	$jadwalrabu = $addrabu1.'-'.$addrabu2;
	$addkamis1 = $_POST['jadwalkamis1'];
	$addkamis2 = $_POST['jadwalkamis2'];
	$jadwalkamis = $addkamis1.'-'.$addkamis2;
	$addjumat1 = $_POST['jadwaljumat1'];
	$addjumat2 = $_POST['jadwaljumat2'];
	$jadwaljumat = $addjumat1.'-'.$addjumat2;
	$addsabtu1 = $_POST['jadwalsabtu1'];
	$addsabtu2 = $_POST['jadwalsabtu2'];
	$jadwalsabtu = $addsabtu1.'-'.$addsabtu2;
	$addminggu1 = $_POST['jadwalminggu1'];
	$addminggu2 = $_POST['jadwalminggu2'];
	$jadwalminggu = $addminggu1.'-'.$addminggu2;

	$result = mysqli_query($connect, "UPDATE jadwal_dokter SET spesialis = '$addspesialis', namaDokter = '$addnamadokter', jadwalSenin = '$jadwalsenin', jadwalSelasa = '$jadwalselasa', jadwalRabu = '$jadwalrabu', jadwalKamis = '$jadwalkamis', jadwalJumat = '$jadwaljumat', jadwalSabtu = '$jadwalsabtu', jadwalminggu = '$jadwalminggu' WHERE dokterID = $dokterid");

?>
<script language="javascript">
alert("Data Telah Diubah!");
window.location.href= "../Dashboard.php?page=dokter";
</script>

<?php

}

$dokterid = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE dokterID='$dokterid'");

while($dokter = mysqli_fetch_array($result)) {
	$spesialis = $dokter['spesialis'];
	$namadokter = $dokter['namaDokter'];
	$senin = $dokter['jadwalSenin'];
	$selasa = $dokter['jadwalSelasa'];
	$rabu = $dokter['jadwalRabu'];
	$kamis = $dokter['jadwalKamis'];
	$jumat = $dokter['jadwalJumat'];
	$sabtu = $dokter['jadwalSabtu'];
	$minggu = $dokter['jadwalMinggu'];
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
	    Jadwal Dokter
	</div>
	<div class="container">
		<br>
		<form method="POST" action="editdokter.php">
		<input type="hidden" name="dokterid" value="<?php echo $dokterid;?>">
		
		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Spesialis</span>
		  </div>
		  <select class="form-control" required name="spesialis">
                  <option value="<?php echo $spesialis?>" selected hidden><?php echo $spesialis?></option>

                    <?php

                    $query = mysqli_query($connect, "SELECT * FROM spesialis");

                    while ($data = mysqli_fetch_array($query))

                    {

                    echo "<option value='". $data['namaSpesialis']."'>".$data['namaSpesialis']."</option>";

                    }

                    ?>
                </select>
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Nama Dokter</span>
		  </div>
		  <input class="form-control" type="text" name="namadokter" value="<?php echo $namadokter;?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Jadwal Senin</span>
		  </div>
		  <input class="form-control" type="time" name="jadwalsenin1" value="<?php echo substr($senin,6, 5);?>">
		  <input class="form-control" type="time" name="jadwalsenin2" value="<?php echo substr($senin, 0, 5);?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Jadwal Selasa</span>
		  </div>
		  <input class="form-control" type="time" name="jadwalselasa1" value="<?php echo substr($selasa,6, 5);?>">
		  <input class="form-control" type="time" name="jadwalselasa2" value="<?php echo substr($selasa, 0, 5);?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Jadwal Rabu</span>
		  </div>
		  <input class="form-control" type="time" name="jadwalrabu1" value="<?php echo substr($rabu,6, 5);?>">
		  <input class="form-control" type="time" name="jadwalrabu2" value="<?php echo substr($rabu, 0, 5);?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Jadwal Kamis</span>
		  </div>
		  <input class="form-control" type="time" name="jadwalkamis1" value="<?php echo substr($kamis,6, 5);?>">
		  <input class="form-control" type="time" name="jadwalkamis2" value="<?php echo substr($kamis, 0, 5);?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Jadwal Jumat</span>
		  </div>
		  <input class="form-control" type="time" name="jadwaljumat1" value="<?php echo substr($jumat,6, 5);?>">
		  <input class="form-control" type="time" name="jadwaljumat2" value="<?php echo substr($jumat, 0, 5);?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Jadwal Sabtu</span>
		  </div>
		  <input class="form-control" type="time" name="jadwalsabtu1" value="<?php echo substr($sabtu,6, 5);?>">
		  <input class="form-control" type="time" name="jadwalsabtu2" value="<?php echo substr($sabtu, 0, 5);?>">
		</div>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" style="width: 150px">Jadwal Minggu</span>
		  </div>
		  <input class="form-control" type="time" name="jadwalminggu1" value="<?php echo substr($minggu,6, 5);?>">
		  <input class="form-control" type="time" name="jadwalminggu2" value="<?php echo substr($minggu, 0, 5);?>">
		</div>

		<br>
		<div class="float-right">
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