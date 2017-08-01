<?php
require_once "core/init.php";
include_once "desain/sider.php";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/salakmi/css/styleku.css\">";
echo "<link rel=\"stylesheet\" href=\"/salakmi/fa/css/font-awesome.min.css\">";

echo "<div class=\"main\">";

include_once "desain/header.php";


  $querydisc   = "SELECT * from tutorial WHERE kode='disclaimer'";
  $resultdisc   = mysqli_query($link, $querydisc) or die('gagal menampilkan data');

   while($row= mysqli_fetch_assoc($resultdisc)){
     $juduldisc = $row['judul'];
     $kontendisc = $row['isi'];  
   }

  $queryite  = "SELECT * from tutorial WHERE kode='uuite'";
  $resultite   = mysqli_query($link, $queryite) or die('gagal menampilkan data');

   while($row= mysqli_fetch_assoc($resultite)){
     $judulite = $row['judul'];
     $kontenite = excerpt($row['isi']); 

   }

?>


<div class="col-9">
  <div class="submitcantik">
  <input type="submit" class="btn fa-input" value="&#xf24a; Petunjuk awal Untuk Newbie" onclick="window.location='tips.php';">
  <input type="submit" class="btn fa-input" value="&#xf24a; Petunjuk Penggunaan SalakMI Lab" onclick="window.location='cara.php';">
  <input type="submit" class="btn fa-input" value="&#xf24a; Pertanyaan dan Jawaban" onclick="window.location='tanyajawab.php';">
  </div>
  <div class="penting">
  <h1>SalakMI Lab</h1>
  <p>Adalah Web yang di desain untuk di jadikan Lab hacking. Web ini di desain untuk di serang</p>
  <p> Di buat untuk menyelesaikan tugas praktek di STMIK AMIKOM PURWOKERTO</p>
  </div>
  
  <div class="penting">
    <p id="judul">
    <?=$judulite; ?>
    </p>

    <p id="konten">
    <?=$kontenite; ?>
    </p>
    <div class="submitcantik">
    <input type="submit" class="btn fa-input" value="&#xf002; Lihat Undang Undang ITE" onclick="window.location='undang.php';">
    </div>
  </div>
  <div class="penting">
    <p id="judul">
    <?=$juduldisc; ?>
    </p>

    <p id="konten">
    <?=$kontendisc; ?>
    </p>
  </div>
  <div class="penting">
    <h3><center> Peringatan </center></h3>
    <p style="text-align:justify"> SalakMI Lab dibuat dengan kerentanan yang benar benar kritis sehingga tidak di sarankan untuk di taruh pada server online.</p>
  </div>
</div>

<div class="col-3 right">
  <div class="aside">
  <div class="artikel">
    <h2>Apa itu salakMI Lab?</h2>
    <p>Adalah Lab hacking Web</p>
    <h2> Diperuntukkan kepada</h2>
    <p> Semua orang yang mempelajari Ethical Hacking di luar sana. Dan terkhusus untuk komunitas hacking dan mahasiswa Amikom yang tertarik di bidang Penetration Testing dan IT Security. SalakMI Lab di peruntukkan bagi pemula pada dunia hacking. </p>
    <h2> Penulis \& Programmer SalakMI Lab</h2>
    <p>Ni'am Habibiy Syahid 14.11.0185<br>
     A.K.A Zifor syuhada<br>
     CEO of SalakMI </p>
     </div>
  </div>
</div>

</div>
</div>
<div class="footer2">
<div class="footer"> 
  <p>Lab ini bersifat Open Source. Beberapa potongan kode berasal dari kode kode php open source juga.</p>
</div>
</div>



</body>
</html> 
