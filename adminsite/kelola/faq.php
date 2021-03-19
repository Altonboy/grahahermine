<?php 
require '../assets/core/init.php';

if (isset($_POST['pilihkategori'])) {
  $filter = $_POST['pilihkategori'];
  $getfaq = mysqli_query($connect, "SELECT * FROM faq WHERE judulFaq = '$filter'");
} else {
    $getfaq = mysqli_query($connect, "SELECT * FROM faq");
}

if(isset($_POST['add_faq'])){
  $addkategori = $_POST['kategorifaq'];
  $addpertanyaan = $_POST['pertanyaan'];
  $addjawaban = $_POST['jawaban'];

    if (addfaq() === TRUE) {
      $successadd = true;
    } else {
      $error = true;
    }
}

?>

<button class="btn btn-success float-right" data-toggle="modal" data-target="#addFAQ">Tambah F.A.Q Baru</button>
<br>
<br>

<form name="pilihkategori" method="POST" action="Dashboard.php?page=faq">
<select onchange="this.form.submit()" class="btn btn-outline-success" style="width: 100%;" name="pilihkategori">
  <option hidden>Pilih Kategori Pertanyaan</option>
  <option>U Don Say</option>
  <option>Harga</option>
</select>
</form>
<br>
<br>

<?php
while($listfaq = mysqli_fetch_array($getfaq)){
  echo "<a href='kelola/editfaq.php?id=$listfaq[faqID]'>";
echo"<div class='card'>";
  echo"<div class='card-header'>"
    .$listfaq['pertanyaan'];
  echo"</div>";
  echo"<div class='card-body'>";
    echo"<p class='card-text'>".$listfaq['jawaban']."</p>";
  echo"</div>";
echo"</div></a>";
echo"<br>";
}
?>


<!-- modal -->
<div class="modal fade" id="addFAQ" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah F.A.Q Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="add_faq" method="POST" action="Dashboard.php?page=faq">
      <div class="modal-body">
        <div class="form-group">
                <label>Kategori Pertanyaan</label>
                <select class="form-control" autocomplete="off" type="text" name="kategorifaq" required>
                  <option>U Don Say</option>
                  <option>Harga</option>
                </select>

                <label>Pertanyaan</label>
                <input class="form-control" autocomplete="off" type="text" name="pertanyaan" required>
            
                <label>Jawaban</label>
                <textarea class="form-control" name="jawaban" autocomplete="off" class="field" width="100%" required></textarea>
                
                <?php if (isset($successadd) ) { ?>

<script language="javascript">
alert("Pertanyaan Telah Ditambahkan!");
window.location.href= "Dashboard.php?page=faq";
</script>

                <?php } ?>



                <?php if (isset($error) ) { ?>

                    <p>error!</p>

                <?php } ?>

            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" name="add_faq">Upload</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- end modal -->