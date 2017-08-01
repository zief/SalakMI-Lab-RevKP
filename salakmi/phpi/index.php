<?php
include_once "../desain/sider.php";
include_once "../desain/setcss.php";

$id='phpi';

echo "<div class=\"main\" >";
include_once "../desain/header.php";
?>
<div class="each_article">
<div class="artikel">
<p> PHP Injection adalah jenis serangan dimana penyerang melakukan injeksi kode PHP pada website. Hal ini terjadi dengan memanfaatkan lemahnya penanganan terhadap data yang di inputkan.</p>
</div>
<div class="artikel">
<p> Halaman ini akan merefleksikan pesan yang kamu tulis di url, klik  <a href="<?php echo($_SERVER["SCRIPT_NAME"]);?>?pesan=test"> Pesan </a>...</p>

<?php

if(isset($_REQUEST["pesan"]))
{
	@eval ("echo " .$_REQUEST["pesan"]. ";");
	//echo htmlspecialchars($_REQUEST["pesan"], ENT_QUOTES, "UTF-8");;
}

echo "</div>";
echo "</div>";
include_once "../desain/tombol.php";
echo "</div>";

?>