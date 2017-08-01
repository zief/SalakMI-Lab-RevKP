<?php

include_once "../desain/sider.php";
include_once "../desain/setcss.php";

$id = 'exec';

echo "<div class=\"main\">";
include_once "../desain/header.php";

echo "<div class=\"each_article\">";

echo "<div class=\"artikel\">";
echo "<p> Command Execution atau disebut juga Command Injection serangan dimana tujuannya adalah eksekusi perintah arbitrary  pada sistem operasi ( perintah terminal atau cmd ) dengan cara mengeksploitasi kerentanan pada aplikasi, disini fitur yang rentan adalah fitur untuk melakukan ping IP Address.</p>";
echo "</div>";

echo "<div class=\"artikel\">";
echo "Bejo membuat sebuah fungsi di websitenya untuk melakukan ping ke server lain.
Dengan kemampuan pas pasan seperti inilah fungsi yang ia buat.";

echo "<form name=\"ping\" action=\"#\" method=\"post\">
            <p>
                Enter an IP address:
                <input type=\"text\" name=\"ip\" size=\"30\">
                <input type=\"submit\" name=\"Submit\" value=\"Submit\">
            </p>\n
            </form>";

if (isset($_POST['Submit'])) {

    $target = $_REQUEST['ip'];

    if (stristr(php_uname('s'), 'Windows NT')) {
        // Windows
        $cmd = shell_exec('ping  ' . $target);
    } else {
        // *nix
        $cmd = shell_exec('ping  -c 4 ' . $target);
    }

    echo "<pre>{$cmd}</pre>";
}
echo "</div>";
echo "</div>";

include_once "../desain/tombol.php";
echo "</div>";
?>

<!--<div style="position:absolute;bottom:0;right:10px;">asd</div>-->
