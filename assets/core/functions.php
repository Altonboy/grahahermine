<?php 

//Logins function ---->
function userExists($username) 
{
	// global keywords is used to access a global variable from within a function
	global $connect;
	$sql = "SELECT * FROM user_login WHERE username = '$username'";
	$query = $connect->query($sql);
	if($query->num_rows == 1) 
	{
		return true;
	} 
	else 
	{
		return false;
	}
	$connect->close();
	// close the database connection
}

function userdata($username) {
	global $connect;
	$sql = "SELECT * FROM user_login WHERE username = '$username'";
	$query = $connect->query($sql);
	$result = $query->fetch_assoc();
	if($query->num_rows == 1) {
		return $result;
	} else {
		return false;
	}

	$connect->close();
	// close the database connection
}

function login($username, $password) {
	global $connect;
	$userdata = userdata($username);

	if($userdata) {
		$sql = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password'";
		$query = $connect->query($sql);

		if($query->num_rows == 1) {
			while($row = $query->fetch_assoc()) {
				$_SESSION['id'] = $row['userID'];
				return true;
			}
		} else {
			return false;
		}
	}

	$connect->close();
	// close the database connection
}

function getUserDataByUserId($id) {
	global $connect;

	$sql = "SELECT * FROM user_login WHERE id = $id";
	$query = $connect->query($sql);
	$result = $query->fetch_assoc();
	return $result;

	$connect->close();
}

// Sessions ---->
function logged_in() {
	if(isset($_SESSION['id'])) {
		return true;
	} else {
		return false;
	}
}

function not_logged_in() {
	if(isset($_SESSION['id']) === FALSE) {
		return true;
	} else {
		return false;
	}
}

function logout() {
	if(logged_in() === TRUE){
		session_unset();

		session_destroy();

		header('location: login.php');
	}
}

function addfaq(){
	global $connect;

	$addkategori = $_POST['kategorifaq'];
	$addpertanyaan = $_POST['pertanyaan'];
	$addjawaban = $_POST['jawaban'];

	$sql = "INSERT INTO faq (judulFaq, pertanyaan, jawaban) VALUES ('$addkategori', '$addpertanyaan', '$addjawaban')";

	$query = $connect->query($sql);

	if($query === TRUE) {
	  return true;
	} else {
	  return false;
	}
	$connect->close();
}

function addjob(){
	global $connect;

	$addjudul = $_POST['lowongan'];
  	$adddeskripsi = $_POST['deskripsilowongan'];

	$sql = "INSERT INTO list_job (namaJob, deskripsiJob) VALUES ('$addjudul', '$adddeskripsi')";

	$query = $connect->query($sql);

	if($query === TRUE) {
	  return true;
	} else {
	  return false;
	}
	$connect->close();
}

function addprofil(){
	global $connect;

	$addjudul = $_POST['judulfoto'];
  	$nama = $_FILES['file']['name'];
  	$file_tmp       = $_FILES['file']['tmp_name'];
	$acak           = rand(1,99);

	$ukuran         = $_FILES['file']['size'];

	$nama_file_unik = $acak.$nama; 
	if ($_FILES["file"]["error"] > 0)
    {
        $filetoobig= true;
    } else {   
      	move_uploaded_file($file_tmp, '../assets/images/'.$nama_file_unik);
		$sql = "INSERT INTO fotopenghargaan (namaFoto, judulFoto) VALUES ('$nama_file_unik', '$addjudul')";

		$query = $connect->query($sql);

		if($query === TRUE) {
		  return true;
		} else {
		  return false;
		}
		$connect->close();
	}
}

function adddokter(){
	global $connect;

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

	$sql = "INSERT INTO jadwal_dokter (spesialis, namaDokter, jadwalSenin, jadwalSelasa, jadwalRabu, jadwalKamis, jadwalJumat, jadwalSabtu, jadwalMinggu, namaFoto) VALUES ('$addspesialis', '$addnamadokter', '$jadwalsenin', '$jadwalselasa', '$jadwalrabu', '$jadwalkamis', '$jadwaljumat', '$jadwalsabtu', '$jadwalminggu', '$nama_file_unik')";

	$query = $connect->query($sql);

	if($query === TRUE) {
	  return true;
	} else {
	  return false;
	}
	$connect->close();
	}
}
?>