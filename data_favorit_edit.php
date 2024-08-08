<?php
include"koneksi.php";
$sql= mysqli_query($con,"select * from tbl_favorit where id_produk =$_GET[id] ");
$row = mysqli_fetch_array($sql);

?>
<div class="container-fluid">
                        <h1 class="mt-4">Data Favorit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Favorit</li>
                        </ol>
                        
<div class="card mb-4">
<div class="card-header"><i class="fas fa-edit mr-1"></i>Data Favorit</div>
<div class="card-body">

<form method="POST" enctype="multipart/form-data">
   
        <div class="col-md-6">
            <div class="form-group">
                <label>ID Produk :</label>
                <input type="text" name="id_produk" class="form-control" value="<?php echo"
                $row[id_produk]"; ?>">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Barang :</label>
                <input type="text" name="nm_brng" class="form-control" value="<?php echo"
                $row[nm_brng]"; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Brand :</label>
                <input type="text" name="brand" class="form-control" value="<?php echo"
                $row[brand]"; ?>">
            </div>
             </div>
      
       
   <center>
        <div class="form-group mt-4 mb-0">
            <input type="submit" name="proses" class="btn btn-primary" value="Update Data Favorit">
            <button type="reset" class="btn btn-dark">Reset</button>
        </div>
    </center>
</form>
                            </div>
                        </div>
                    </div>
<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){
    include"koneksi.php";

 

    $query = mysqli_query($con,"update tbl_favorit set nm_brng='$_POST[nm_brng]', brand='$_POST[brand]' where id_produk = $_GET[id] ");

    echo "<script language = 'Javascript'>
    confirm('Data Berhasil Dirubah..!');
    document.location = 'data_favorit.php';
    </script>";
}


?>