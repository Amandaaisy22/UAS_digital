<?php
include"koneksi.php";

$query = mysqli_query($con, "select * from tbl_rental where id_rental = $_GET[id]");

$row = mysqli_fetch_array($query);

$sql = mysqli_query($con, "delete from tbl_rental where id_rental = $_GET[id] ");

unlink('assets/foto_produk/'.$row['foto']);

$sql= mysqli_query($con,"delete from tbl_rental where id_rental =$_GET[id] ");

 echo "<script language = 'Javascript'>
    confirm('Data Berhasil Dihapus..!');
    document.location = 'data_rental.php';
    </script>";

?>