
<?php
include_once "../desain/sider.php";
include_once "../desain/setcss.php";

echo "<div class=\"main\" style=\"height: 100%;\">";
include_once "../desain/header.php";

echo "<form enctype=\"multipart/form-data\" action=\"#\" method=\"POST\">
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000\" />
			Pilih gambar :<br /><br />
			<input name=\"uploaded\" type=\"file\" /><br />
			<br />
			<input type=\"submit\" name=\"Upload\" value=\"Upload\" />\n
			</form>";


if( isset( $_POST[ 'Upload' ] ) ) {
	// Where are we going to be writing to?
	$target_path  = "../macemmacem/uploads/";
	$target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

	$uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
	$uploaded_type = $_FILES[ 'uploaded' ][ 'type' ];
	$uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];
	
	// Can we move the file to the upload folder?
	if( ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ) &&
		( $uploaded_size < 1000000 ) ) {

		// Can we move the file to the upload folder?
		if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
			// No
			echo '<pre>Gambarmu gagal di upload.</pre>';
		}
		else {
			// Yes!
			echo "<pre>{$target_path} Sukses Upload Gambar!</pre>";
		}
	}
	else {
		// Invalid file
		echo 'Sori gambar yang kamu pilih tidak di upload. Kamu upload jenis file yang salah (hanya JPEG dan PNG yang di perbolehkan) atau berukuran lebih dari 1 megaByte';
	}
}

echo "</div>";

?>