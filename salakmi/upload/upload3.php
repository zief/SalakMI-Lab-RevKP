
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

	// informasi file
	$uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
	$uploaded_ext  = substr( $uploaded_name, strrpos( $uploaded_name, '.' ) + 1);
	$uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];
	$uploaded_tmp  = $_FILES[ 'uploaded' ][ 'tmp_name' ];

	// Can we move the file to the upload folder?
	if( ( strtolower( $uploaded_ext ) == "jpg" || strtolower( $uploaded_ext ) == "jpeg" || strtolower( $uploaded_ext ) == "png" ) &&
		( $uploaded_size < 100000 ) &&
		getimagesize( $uploaded_tmp ) ) {

		// Can we move the file to the upload folder?
		if( !move_uploaded_file( $uploaded_tmp, $target_path ) ) {
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
		echo '<pre>Sori gambar yang kamu pilih tidak di upload. Kamu upload jenis file yang salah (hanya JPEG dan PNG yang di perbolehkan)</pre>';
	}
}

echo "</div>";

?>