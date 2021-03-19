<?php 
require '../assets/core/init.php';

$getjob = mysqli_query($connect, "SELECT * FROM list_job");

if($_POST){
  $addjudul = $_POST['lowongan'];
  $adddeskripsi = $_POST['deskripsilowongan'];

    if (addjob() === TRUE) {
      $successadd = true;
    } else {
      $error = true;
    }
}

?>

<button class="btn btn-success float-right" data-toggle="modal" data-target="#addLowongan">Tambah Lowongan Baru</button>
<br>
<br>

<?php
while($listjob = mysqli_fetch_array($getjob)){
  echo "<a href='kelola/detailjob.php?id=$listjob[jobID]'>";
echo"<div class='card'>";
  echo"<div class='card-header'>".$listjob['namaJob']."</div></div></a><br>";
}
?>

<!-- modal -->
<div class="modal fade" id="addLowongan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Lowongan Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="Dashboard.php?page=karir">
      <div class="modal-body">
        <div class="form-group">

                <label>Lowongan Kerja</label>
                <input class="form-control" autocomplete="off" type="text" name="lowongan" required>
            
                <label>Deskripsi dan Persyaratan</label>
                <textarea class="form-control" name="deskripsilowongan" autocomplete="off" class="field" width="100%" required></textarea>
                
            </div>

            <?php if (isset($successadd) ) { ?>

              <script language="javascript">
              alert("Lowongan Telah Ditambahkan!");
              window.location.href= "Dashboard.php?page=karir";
              </script>

                <?php } ?>



                <?php if (isset($error) ) { ?>

                    <p>error!</p>

                <?php } ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- end modal -->