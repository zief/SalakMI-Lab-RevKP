
<?php
include_once "../desain/sider.php";
include_once "../desain/setcss.php";

$id = 'upload';

echo "<div class=\"main\" style=\"height: 100%;\">";
include_once "../desain/header.php";
echo "<div class=\"each_article\">";
echo "<div class=\"artikel\">";
echo "<p>SQL Injection (SQLi) atau SQL Injection Attack (SQLIA) adalah serangan Code Injection yang memanfaatkan kerentanan yang ada dalam aplikasi web dengan melakukan injeksi kode SQL berbahaya di kolom form input pada web untuk mendapatkan akses tidak sah ke Database. Aplikasi web yang rentan terhadap SQL Injection dapat membuat penyerang mendapatkan akses secara lengkap ke seluruh Database yang ada.";
echo "</div>";

echo "<div class=\"artikel\">";
echo "<form enctype=\"multipart/form-data\" action=\"#\" method=\"POST\">
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"10000000\" />
			Pilih gambar :<br /><br />
			<input name=\"uploaded\" type=\"file\" /><br />
			<br />
			<input type=\"submit\" name=\"Upload\" value=\"Upload\" />\n
			</form>";



if( isset( $_POST[ 'Upload' ] ) ) {
	// Where are we going to be writing to?
	$target_path  = "../macemmacem/uploads/";
	$target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

	
	// Can we move the file to the upload folder?
	if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
		// No
		echo '<pre>Gambar kamu belum ke upload.</pre>';
	}
	else {
		// Yes!
		echo "<pre>{$target_path} Sukses Upload gambar!</pre>";
	}
}

include_once "../desain/tombol.php";
echo "</div>";
echo "</div>";
echo "</div>";

?>
