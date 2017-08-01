<?php
require_once "core/init.php";
include_once "desain/sider.php";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/salakmi/css/styleku.css\">";
echo "<link rel=\"stylesheet\" href=\"/salakmi/fa/css/font-awesome.min.css\">";

?>
<?php

echo "<div class=\"main\">";
include_once "desain/header.php";

  $judul ='';
  $konten = '';

  $query    = "SELECT * from tutorial WHERE kode='nikto'";
  $result   = mysqli_query($link, $query) or die('gagal menampilkan data');

   while($row= mysqli_fetch_assoc($result)){
     $judul = $row['judul'];
     $konten = $row['isi'];   
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