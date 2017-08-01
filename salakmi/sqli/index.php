<?php
//include"../konfig/koneksi.php";

include_once "../desain/sider.php";
include_once "../desain/setcss.php";

$id = 'sqli';

echo "<div class=\"main\" style=\"height: 100%;\">";
include_once "../desain/header.php";

echo "<div class=\"each_article\">";
echo "<div class=\"artikel\">";
echo "<p>SQL Injection (SQLi) atau SQL Injection Attack (SQLIA) adalah serangan Code Injection yang memanfaatkan kerentanan yang ada dalam aplikasi web dengan melakukan injeksi kode SQL berbahaya di kolom form input pada web untuk mendapatkan akses tidak sah ke Database. Aplikasi web yang rentan terhadap SQL Injection dapat membuat penyerang mendapatkan akses secara lengkap ke seluruh Database yang ada.";
echo "</div>";

echo "<div class=\"artikel\">";
echo "<form action=\"#\" method=\"GET\">
            <p>
                User id:
                <input type=\"text\" name=\"id\" size=\"30\">
                <input type=\"submit\" name=\"Submit\" value=\"Submit\">
            </p>
            </form>";

if( isset( $_GET[ 'Submit' ] ) ) {

    $idG = $_GET['id'];

$db = new mysqli('localhost', 'root', '', 'salakmi');

if($db->connect_errno > 0){
    die('Nggak bisa konek ke database [' . $db->connect_error . ']');
}

$sql = <<<SQL
    SELECT *
    FROM `nama`
    WHERE `id` = '$idG'
SQL;
?>

<table border=0>
 <tr>
    <th> Nama </th>
    <th> Alamat </th>

<?php

if(!$result = $db->query($sql)){
    die('Ada eror di query [' . $db->error . ']');
}


while($row = $result->fetch_assoc()){
    echo '<tr> <td>'.$row['nama'] . '</td> <td>' . $row['alamat'] . '</td>';
}

$result->free();
$db->close();



}
echo "</div>";
echo "</div>";
include_once "../desain/tombol.php";
echo "</div>";

?> 