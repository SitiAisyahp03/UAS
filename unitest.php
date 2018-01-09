
<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "distroit";



$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY kode DESC");
$jml_data = mysqli_num_rows($sql);


?>