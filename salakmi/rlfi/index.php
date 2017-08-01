<?php
include_once "../desain/sider.php";
include_once "../desain/setcss.php";

$id = 'rlfi';

echo "<div class=\"main\" style=\"height: 100%;\">";
include_once "../desain/header.php";

$status = "";

echo "<div class=\"each_article\">";

echo "<div class=\"artikel\">";
echo "<p> Kerentanan RFI memungkinkan penyerang untuk melakukan include File host secara Remote.
<br>Kerentanan LFI memungkinkan penyerang untuk membaca file dalam server lokal.
<br>LFI sangat mirip dengan RFI. Perbedaannya adalah bahwa di LFI penyerang harus meng-upload Script berbahaya ke server target untuk dieksekusi secara lokal. Sedangkan RFI maka penyerang tinggal melakukan include file dari luar server, misalkan Script berbahaya di taruh pada website lain atau server lain. Pada RFI penyerang hanya perlu melakukan include url atau alamat dimana Script berbahaya tersebut di letakkan";
echo "</div>";

echo "<div class=\"artikel\">";
echo "<form name=\"rfli\" action=\"#\" method=\"get\">
            <p>
                Status:
                <select name=\"status\">
             	    <option value=\"jomblo.php\"> Jomblo </option>
            		<option value=\"single.php\"> Single </option>
            		<option value=\"complicated.php\"> Complicated </option>
            	</select>

             <button type=\"submit\" name=\"action\" value=\"go\"> Go </button>
             </form>";

if(isset($_GET["status"]))
	{
		$status = $_GET["status"];  
		include($status);
	}
echo "</div>";  
echo "</div>";
include_once "../desain/tombol.php";

echo "</div>";

?>