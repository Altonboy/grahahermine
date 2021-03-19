<?php 
session_start();

require_once("../assets/core/init.php");
if(not_logged_in() === TRUE){
  header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="icon" href="../assets/image/gh.png" sizes="32x32" type="image/png">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"/>
  <style type="text/css">
    body{
      margin: 0;
      padding: 0;
      font-family: "Roboto", sans-serif;
    }

    a {
      text-decoration: none;
      color: rgb(0, 123, 59);
    }

    a:hover{
      text-decoration: none;
      color: 
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

    .sidebarlink {
      padding: 6px 8px 6px 35px;
      text-decoration: none;
      font-size: 16px;
      color: #ffffff;
      display: block;
      width: 100%;
    }

    .sidebarlink:hover {
      color: #06d86b;
      background-color: #ffffff;
    }

    .navheader{
      padding: 6px 8px 6px 35px;
      text-decoration: none;
      font-size: 18px;
      color: #ffffff;
      display: block;
      background-color: #049c4d;
    }

    .maincontent{
      margin-left: 20%;
    }

    .pelayanan{
      text-align: left;
    }

    .imgcontainer{
      box-shadow: 1px 1px 2px #5f5f5f;
      margin: 0.5%;
      width: 23%;
      border-radius: 5px 5px 0 0;
      display: inline-block;
    }

    .imgheader{
      top: 0;
      background-color: rgb(0, 123, 59);
      padding: auto;
      border-radius: 5px 5px 0 0;

    }

    .footer{
      background-color: rgb(0, 123, 59);
      width: 100%;
      text-align: center;
      color: white;
      font-family: "Roboto", sans-serif;
      font-size: 15px;
      padding: 10px 0px;
      bottom: 0;
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="../assets/image/logo_gh_2.png" style="max-height: 90px; vertical-align: middle;"> RS. Graha Hermine
  </div>
  <div class="dashheader">
    Dashboard
  </div>

<!-- Contents -->
  <div class="container">
    <div class="row">
<!-- Navbar -->
      <div class="col-2" style="background-color: #06d86b; padding: 0;">
        <span style="cursor: pointer;" class="navheader" onclick="location='Dashboard.php'">Dashboard</span>
        <span class="navheader">Email</span>
        <a class="sidebarlink" href="#">Kotak Masuk</a>
        <a class="sidebarlink" href="#">Terkirim</a>
        <a class="sidebarlink" href="#">Tulis</a>
        <span class="navheader">Kelola</span>
        <a class="sidebarlink" href="Dashboard.php?page=dokter">Dokter</a>
        <a class="sidebarlink" href="Dashboard.php?page=pelayanan">Pelayanan</a>
        <a class="sidebarlink" href="Dashboard.php?page=partnership">Partnership</a>
        <a class="sidebarlink" href="Dashboard.php?page=galeri">Galeri</a>
        <a class="sidebarlink" href="Dashboard.php?page=artikel">Artikel & Berita</a>
        <a class="sidebarlink" href="Dashboard.php?page=profil">Profil</a>
        <a class="sidebarlink" href="Dashboard.php?page=karir">Informasi Karir</a>
        <a class="sidebarlink" href="Dashboard.php?page=faq">F.A.Q</a>
        <span style="cursor: pointer;" class="navheader" onclick="location='logout.php'">Log Out</span>
      </div>
<!-- End Navbar -->

      <div class="col-9" style="padding: 5px;">
<!-- maincontents -->
        <?php
          if(isset($_GET['page']))
          {
          $page = $_GET['page'];
          switch ($page) {
            case 'dokter':
              include "kelola/dokter.php";
              break;

            case 'pelayanan':
              include "kelola/pelayanan.php";
              break;

            case 'partnership':
              include "kelola/partnership.php";
              break;

            case 'galeri':
              include "kelola/galeri.php";
              break;

            case 'artikel':
              include "kelola/artikel.php";
              break;

            case 'profil':
              include "kelola/profil.php";
              break;

            case 'karir':
              include "kelola/karir.php";
              break;

            case 'faq':
              include "kelola/faq.php";
              break;

            default:
              echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
              break;
          }
                  }
          else
          {
          echo "";
          }
         ?>
<!-- End Main Contents -->
      </div>
    </div>
  </div>

</div>

<!-- End Contents -->

  <div class="footer">
    COPYRIGHT
  </div>

<!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>