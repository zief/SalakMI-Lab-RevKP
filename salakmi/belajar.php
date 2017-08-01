<?php

require_once "core/init.php";

echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/salakmi/css/styleku.css\">";
echo "<link rel=\"stylesheet\" href=\"/salakmi/fa/css/font-awesome.min.css\">";
?>
<div id="mySidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="belajar.php?kode=scan" class="fa fa-bug"> Scanning Kerentanan</a>
  <a href="belajar.php?kode=exec" class="fa fa-bug"> Command Execution</a>
    <a href="belajar.php?kode=rlfi" class="fa fa-bug"> RFI / LFI </a>
      <a href="belajar.php?kode=phpi" class="fa fa-bug"> PHP Injection </a>
    <a href="belajar.php?kode=sqli" class="fa fa-bug"> SQL Injection </a>
    <a href="belajar.php?kode=upload" class="fa fa-bug"> Upload file </a>
    <a href="belajar.php?kode=amanexec" class="fa fa-bug"> Mengamankan Command Execution </a>
    <a href="belajar.php?kode=amanrlfi" class="fa fa-bug"> Mengamankan celah RFI / LFI </a>
    <a href="belajar.php?kode=amanphpi" class="fa fa-bug"> Mengamankan celah PHP Injection </a>
    <a href="belajar.php?kode=amansqli" class="fa fa-bug"> Mengamankan celah SQL injection </a>
    <a href="belajar.php?kode=amanupload" class="fa fa-bug"> Mengamankan celah File Upload </a>
    
    
  
</div>

<script>
function buka() {
  var nav = document.getElementById("mySidenav");
  if (nav.style.width == "250px"){
    closeNav();
  }
  else{
    openNav();
  }
}
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<?php

echo "<div class=\"main\">";


include_once "desain/header.php";


 


if(isset($_GET['kode'])){

  $kode = $_GET['kode'];
  $judul ='';
  $konten = '';

  $tutor = tampilkan_tutor($kode);

   while($row= mysqli_fetch_assoc($tutor)){
     $judul = $row['judul'];
     $konten = $row['isi'];

    
  }

}else
{
  $kode = '';
  $judul = 'Tutorial';
  $konten = 'Halaman ini berisi tutorial untuk melakukan serangan. Diharapkan untuk mencoba terlebih dahulu.';
}



?>
<div class="each_article">
<p id="judul">
   <?=$judul; ?>
</p>

<p id="konten">
   <?=$konten; ?>
</p>
</div>
</div>

</div>