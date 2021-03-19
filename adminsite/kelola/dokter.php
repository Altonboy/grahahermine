<?php 
require '../assets/core/init.php';

if (isset($_POST['filtera'])) {
  $filter = $_POST['filtera'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
} 

elseif (isset($_POST['filterb'])) {
  $filter = $_POST['filterb'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterc'])) {
  $filter = $_POST['filterc'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterd'])) {
  $filter = $_POST['filterd'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filtere'])) {
  $filter = $_POST['filtere'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterf'])) {
  $filter = $_POST['filterf'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterg'])) {
  $filter = $_POST['filterg'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterh'])) {
  $filter = $_POST['filterh'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filteri'])) {
  $filter = $_POST['filteri'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterj'])) {
  $filter = $_POST['filterbj'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterk'])) {
  $filter = $_POST['filterk'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterl'])) {
  $filter = $_POST['filterl'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterm'])) {
  $filter = $_POST['filterm'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filtern'])) {
  $filter = $_POST['filtern'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filtero'])) {
  $filter = $_POST['filtero'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterp'])) {
  $filter = $_POST['filterp'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterq'])) {
  $filter = $_POST['filterq'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterr'])) {
  $filter = $_POST['filterr'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filters'])) {
  $filter = $_POST['filters'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filtert'])) {
  $filter = $_POST['filtert'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filteru'])) {
  $filter = $_POST['filteru'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterv'])) {
  $filter = $_POST['filterv'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterw'])) {
  $filter = $_POST['filterw'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterx'])) {
  $filter = $_POST['filterx'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filtery'])) {
  $filter = $_POST['filtery'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['filterz'])) {
  $filter = $_POST['filterz'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '$filter%' ORDER BY namaDokter ASC");
}

elseif (isset($_POST['search'])) {
  $filter = $_POST['filter'];
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter WHERE namaDokter LIKE '%$filter%' OR spesialis LIKE '%$filter%' ORDER BY namaDokter ASC");
}

else {
  $getdoctor = mysqli_query($connect, "SELECT * FROM jadwal_dokter ORDER BY namaDokter ASC");
}

if(isset($_POST['add_doctor'])){
  if (adddokter() === TRUE) {
      $successadd = true;
    } else {
      $error = true;
    }

}

if (isset($_POST['delete'])) {
  $dokterid = $_POST['iddokter'];

  $result = mysqli_query($connect, "DELETE FROM jadwal_dokter WHERE dokterID='$dokterid'");

?>
<script language="javascript">
alert("Data Telah Dihapus!");
window.location.href= "Dashboard.php?page=dokter";
</script>
<?php
}

?>

<button class="btn btn-success float-right" data-toggle="modal" data-target="#addDokter">Tambah Dokter Baru</button>
<br>
<br>
  <form action="Dashboard.php?page=dokter" method="POST">
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="filter" placeholder="Cari Dokter">
      <div class="input-group-prepend">
        <button type="submit" name="search">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </button>
      </div>
    </div>
  </form>

  <form action="Dashboard.php?page=dokter" method="POST">
    <div style="text-align: center;">
      <button type="submit" name="filtera" value="a" class="btn-success">A</button>
      <button type="submit" name="filterb" value="b" class="btn-success">B</button>
      <button type="submit" name="filterc" value="c" class="btn-success">C</button>
      <button type="submit" name="filterd" value="d" class="btn-success">D</button>
      <button type="submit" name="filtere" value="e" class="btn-success">E</button>
      <button type="submit" name="filterf" value="f" class="btn-success">F</button>
      <button type="submit" name="filterg" value="g" class="btn-success">G</button>
      <button type="submit" name="filterh" value="h" class="btn-success">H</button>
      <button type="submit" name="filteri" value="i" class="btn-success">I</button>
      <button type="submit" name="filterj" value="j" class="btn-success">J</button>
      <button type="submit" name="filterk" value="k" class="btn-success">K</button>
      <button type="submit" name="filterl" value="l" class="btn-success">L</button>
      <button type="submit" name="filterm" value="m" class="btn-success">M</button>
      <button type="submit" name="filtern" value="n" class="btn-success">N</button>
      <button type="submit" name="filtero" value="o" class="btn-success">O</button>
      <button type="submit" name="filterp" value="p" class="btn-success">P</button>
      <button type="submit" name="filterq" value="q" class="btn-success">Q</button>
      <button type="submit" name="filterr" value="r" class="btn-success">R</button>
      <button type="submit" name="filters" value="s" class="btn-success">S</button>
      <button type="submit" name="filtert" value="t" class="btn-success">T</button>
      <button type="submit" name="filteru" value="u" class="btn-success">U</button>
      <button type="submit" name="filterv" value="v" class="btn-success">V</button>
      <button type="submit" name="filterw" value="w" class="btn-success">W</button>
      <button type="submit" name="filterx" value="x" class="btn-success">X</button>
      <button type="submit" name="filtery" value="y" class="btn-success">Y</button>
      <button type="submit" name="filterz" value="z" class="btn-success">Z</button>
    </div>
  </form>
  <br>
  
<table class="table table-hover">
  <thead>
    <tr style="text-align: center;">
      <th scope="col">Spesialis</th>
      <th scope="col"></th>
      <th scope="col">Nama Dokter</th>
      <th scope="col" colspan="2">Jadwal Praktek</th>
      <th scope="col" style="width: 9%"></th>
    </tr>
  </thead>
  <tbody>

    <?php
    while ($listdokter = mysqli_fetch_array($getdoctor)) {
      ?>
      <form method="POST" action="Dashboard.php?page=dokter">
        <?php
      echo "<tr>";      
      echo "<td>".$listdokter['spesialis']."<input type='hidden' name='iddokter' value='".$listdokter['dokterID']."'></td>";
      echo "<td> <img src='../assets/images/".$listdokter['namaFoto']."' width='150px' height='auto'></td>";
      echo "<td>".$listdokter['namaDokter']."</td>";
      echo "<td class='text-right'>Senin<br>Selasa<br>Rabu<br>Kamis<br>Jumat<br>Sabtu<br>Minggu</td>";
      echo "<td>".$listdokter['jadwalSenin']."<br>"
      .$listdokter['jadwalSelasa']."<br>"
      .$listdokter['jadwalRabu']."<br>"
      .$listdokter['jadwalKamis']."<br>"
      .$listdokter['jadwalJumat']."<br>"
      .$listdokter['jadwalSabtu']."<br>"
      .$listdokter['jadwalMinggu']."<br>";
      echo "</td>";
      echo "<td><a title='Edit' href='kelola/editdokter.php?id=$listdokter[dokterID]'>
      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16' style='color:rgb(0, 123, 59)'>
      <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
      <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
      </svg>
      </a>";?>
      
      &nbsp;
      <button title="Hapus" style="margin-right:5px;" onclick="return confirm('Apakah anda yakin?');" name="delete" value="delete" class="close" aria-label="Close">
  <?php echo"<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16' style='color:red'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
</svg></button>
</td>";
      echo "</tr></form>";
    }
    ?>
  </tbody>
</table>




<!-- Modal -->
<div class="modal fade" id="addDokter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Dokter Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="add_doctor" method="POST" action="Dashboard.php?page=dokter" enctype="multipart/form-data">

      <div class="modal-body">
      	<table class="table table-borderless">
      		<tbody>
      			<tr>
      				<td colspan="4" style="padding: 0">Nama Dokter</td>
      			</tr>
      			<tr>
      				<td colspan="4" style="padding: 0"><input type="text" name="namadokter" style="width: 100%"></td>
      			</tr>

      			<tr>
      				<td colspan="4" style="padding: 0">Spesialis</td>
      			</tr>
      			<tr>
      				<td colspan="4" style="padding: 0">
                <select class="form-control" style="width: 100%" required name="spesialis">
                  <option value="" selected disabled hidden></option>

                    <?php

                    $query = mysqli_query($connect, "SELECT * FROM spesialis");

                    while ($data = mysqli_fetch_array($query))

                    {

                    echo "<option value='". $data['namaSpesialis']."'>".$data['namaSpesialis']."</option>";

                    }

                    ?>
                </select>
              </td>
      			</tr>

      			<tr>
      				<td colspan="4" style="padding: 2px">Jadwal Praktek</td>
      			</tr>
      			<tr>
      				<td style="padding: 2px">Senin</td>
      				<td style="padding: 2px">
      					<input type="time" name="jadwalsenin1"> - 
      					<input type="time" name="jadwalsenin2">
      				</td>
      			</tr>

      			<tr>
      				<td style="padding: 2px">Selasa</td>
      				<td style="padding: 2px">
      					<input type="time" name="jadwalselasa1"> - 
      					<input type="time" name="jadwalselasa2">
      				</td>
      				
      			</tr>

      			<tr>
      				<td style="padding: 2px">Rabu</td>
      				<td style="padding: 2px">
      					<input type="time" name="jadwalrabu1"> - 
      					<input type="time" name="jadwalrabu2">
      				</td>
      				
      			</tr>

      			<tr>
      				<td style="padding: 2px">Kamis</td>
      				<td style="padding: 2px">
      					<input type="time" name="jadwalkamis1"> - 
      					<input type="time" name="jadwalkamis2">
      				</td>
      				
      			</tr>

      			<tr>
      				<td style="padding: 2px">Jumat</td>
      				<td style="padding: 2px">
      					<input type="time" name="jadwaljumat1"> - 
      					<input type="time" name="jadwaljumat2">
      				</td>
      				
      			</tr>

      			<tr>
      				<td style="padding: 2px">Sabtu</td>
      				<td style="padding: 2px">
      					<input type="time" name="jadwalsabtu1"> - 
      					<input type="time" name="jadwalsabtu2">
      				</td>
      				
      			</tr>

      			<tr>
      				<td style="padding: 2px">Minggu</td>
      				<td style="padding: 2px">
      					<input type="time" name="jadwalminggu1"> - 
      					<input type="time" name="jadwalminggu2">
      				</td>
      			</tr>

            <tr>
              <td colspan="4" style="padding: 0">Foto Dokter</td>
            </tr>
            <tr>
              <td colspan="4" style="padding: 0; width: 100%"><input class="form-control" type="file" name="upfoto" accept="image/*" required></td>
            </tr>
      		</tbody>
      	</table>
        <?php if (isset($successadd) ) { ?>

<script language="javascript">
alert("Jadwal Telah Ditambahkan!");
window.location.href= "Dashboard.php?page=dokter";
</script>

                <?php } ?>



                <?php if (isset($error) ) { ?>

                    <p>error!</p>

                <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="add_doctor">Upload</button>
      </div>
    </form>
    </div>
  </div>
</div>