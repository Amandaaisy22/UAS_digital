<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Luxrent</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">Amanda, Dion, Nadya</span>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="data_roti.php" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            <span class="menu-title">Data User</span></a>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="data_rental.php" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            <span class="menu-title">Data Rental</span></a>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="data_produk.php" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            <span class="menu-title">Data Produk</span></a></li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="data_favorit.php" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Data Favorit</span></a>
            
           
          </li>
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                <ul class="mt-4 pl-0">
                  <li>Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>

<div class="container-fluid">
                        <h1 class="mt-4">Data Rental</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Rental</li>
                        </ol>
                        
<div class="card mb-4">
<div class="card-header"><i class="fas fa-edit mr-1"></i>Data Rental</div>
<div class="card-body">

<form method="POST" enctype="multipart/form-data">
   
        <div class="col-md-6">
            <div class="form-group">
                <label>Mulai Rental :</label>
                <input type="date" name="mulai_rntl" class="form-control">
            </div>
             </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Pengembalian :</label>
                <input type="date" name="pengembalian" class="form-control">
            </div>
             </div>
             <div class="col-md-6">
            <div class="form-group">
                <label>Total :</label>
                <input type="text" name="total" class="form-control" placeholder="Masukkan ID Total">
            </div>
             </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Status :</label>
                <input type="text" name="status" class="form-control" placeholder="Masukkan Status">
            </div>
             </div>
       
   <center>
        <div class="form-group mt-4 mb-0">
            <input type="submit" name="proses" class="btn btn-primary" value="Simpan Data Rental">
            <button type="reset" class="btn btn-dark">Reset</button>
        </div>
    </center>
</form>
                            </div>
                        </div>
                    </div>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include"koneksi.php";
    $query = mysqli_query($con,"insert into tbl_rental(id_rental, mulai_rntl, pengembalian, total, status) value('$_POST[id_rental]','$_POST[mulai_rntl]','$_POST[pengembalian]','$_POST[total]','$_POST[status]')");
   
    echo "<script language = 'Javascript'>
    confirm('Data Berhasil Dirubah..!');
    document.location = 'data_rental.php';
    </script>";
}


?>