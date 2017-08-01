<?php
//include"../konfig/koneksi.php";

include_once "../desain/sider.php";
include_once "../desain/setcss.php";

$id = 'sqli';

echo "<div class=\"main\" style=\"height: 100%;\">";
include_once "../desain/header.php";

echo "<div class=\"each_article\">";

echo "<form action=\"#\" method=\"GET\">
            <p>
                User id:
                <input type=\"text\" name=\"id\" size=\"30\">
                <input type=\"submit\" name=\"Submit\" value=\"Submit\">
            </p>\n
            </form>";

if (isset($_GET['Submit'])) {

    $idG = $_GET['id'];

    if (is_numeric($idG)){
        $db = new mysqli('localhost', 'root', '', 'salakmi');

        if ($db->connect_errno > 0) {
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

        if (!$result = $db->query($sql)) {
            die('Ada eror di query [' . $db->error . ']');
        }

        while ($row = $result->fetch_assoc()) {
            echo '<tr> <td>' . $row['nama'] . '</td> <td>' . $row['alamat'] . '</td>';
        }

        $result->free();
        $db->close();

    }

}
echo "</div>";
include_once "../desain/tombol.php";
echo "</div>";

?>