<?php


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

?>