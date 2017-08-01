<?php

if( isset( $_GET[ 'Submit' ] ) ) {

    $id = $_GET['id'];

$db = new mysqli('localhost', 'root', '', 'salakmi');

if($db->connect_errno > 0){
    die('Nggak bisa konek ke database [' . $db->connect_error . ']');
}

$sql = <<<SQL
    SELECT *
    FROM `nama`
    WHERE `id` = '$id'
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


?> 