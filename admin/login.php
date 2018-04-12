
<?php
session_start();
require '../include/database.php';
// Cara lain untuk exsekusi submit button
//if($_SERVER["REQUEST_METHOD"] == "POST"){
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Aplikasi Surat</title><meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/matrix/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/matrix/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="../assets/matrix/css/matrix-login.css" />
  <link href="../assets/matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
  <div id="loginbox">            
    <form id="loginform" class="form-vertical" method="post">
     <div class="control-group normal_text"> <h3><img src="../assets/img/logo.png" alt="Logo" /><br>AMS KEMENAG</h3></div>
     <div class="control-group">
      <div class="controls">
        <div class="main_input_box">
          <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="user" required />
        </div>
      </div>
    </div>
    <div class="control-group">
      <div class="controls">
        <div class="main_input_box">
          <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="pass" required />
        </div>
      </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
      $user = mysqli_real_escape_string($conn,$_POST["user"]);
      $pass = mysqli_real_escape_string($conn,md5($_POST['pass']));
      $sql = "SELECT * FROM tbl_admin WHERE admin_username = '$user' AND admin_password = '$pass' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result) > 0){
        $_SESSION['username'] = $user;
        $_SESSION['foto'] = $row['admin_foto'];
        $_SESSION['nama'] = $row['admin_nama'];
  // Redirect user to index.php
        header("Location: index.php");
      }else{
        echo '
        <span class="alert alert-danger role="alert">Username atau Password Salah</span>
        ';
        mysqli_close($conn);
      }
    }
    ?>
    <div class="form-actions">
      <span class="pull-right"><button type="submit" class="btn btn-success" name="submit" /> Login</button></span>
    </div>
  </form>
</div>

<script src="../matrix/assets/js/jquery.min.js"></script>  
<script src="../matrix/assets/js/matrix.login.js"></script> 
</body>

</html>
