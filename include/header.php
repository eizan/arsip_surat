<?php
include '../include/auth.php';
include "../operator/xcrud.php";
$xcrud = Xcrud::get_instance();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo TITLE; ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../assets/matrix/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/matrix/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../assets/matrix/css/uniform.css" />
<link rel="stylesheet" href="../assets/matrix/css/select2.css" />
<link rel="stylesheet" href="../assets/matrix/css/matrix-style.css" />
<link rel="stylesheet" href="../assets/matrix/css/matrix-media.css" />
<link href="../assets/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="index.php">Sistem Surat</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text"><?php echo $_SESSION['username'] ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <a href="logout.php" class="btn btn-danger"> <i class="icon-key"></i> Logout</a>
</div>
<!--close-top-serch--> 
