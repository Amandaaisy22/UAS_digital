<?php
include"koneksi.php";
$sql= mysqli_query($con,"select * from tbl_users where id_user =$_GET[id] ");
$row = mysqli_fetch_array($sql);

?>
<div class="container-fluid">
                        <h1 class="mt-4">Data User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk/Barang</li>
                        </ol>
                        
<div class="card mb-4">
<div class="card-header"><i class="fas fa-edit mr-1"></i>Data Barang/Produk</div>
<div class="card-body">

<form method="POST" enctype="multipart/form-data">
   
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama User :</label>
                <input type="text" name="name" class="form-control" value="<?php echo"
                $row[name]"; ?>">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Email :</label>
                <input type="text" name="email" class="form-control" value="<?php echo"
                $row[email]"; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Password :</label>
                <input type="text" name="password" class="form-control" value="<?php echo"
                $row[password]"; ?>">
            </div>
             </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Alamat :</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo"
                $row[alamat]"; ?>">
            </div>
             </div>
       
   <center>
        <div class="form-group mt-4 mb-0">
            <input type="submit" name="proses" class="btn btn-primary" value="Update Data User">
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

 

    $query = mysqli_query($con,"update tbl_users set name='$_POST[name]', email='$_POST[email]', password='$_POST[password]', alamat='$_POST[alamat]'  where id_user = $_GET[id] ");

    echo "<script language = 'Javascript'>
    confirm('Data Berhasil Dirubah..!');
    document.location = 'data_user.php';
    </script>";
}


?>