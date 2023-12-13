<?php

session_start();

include 'config.php';

//check

if (isset($_POST['login'])) {
  //input user
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  //check database
  $result = mysqli_query($db, "SELECT * FROM user WHERE us_username='$username'");

  //check pass
  if (mysqli_num_rows($result) == 1) {
    
    $hasil = mysqli_fetch_assoc($result);
    
    if ($password == $hasil['us_password']) {
      //set session
      $_SESSION['login']       = true;
      $_SESSION['us_id']       = $hasil['us_id'];
      $_SESSION['us_username'] = $hasil['us_username'];
      $_SESSION['us_email']    = $hasil['us_email'];
      $_SESSION['us_role']     = $hasil['us_role'];
      
      if ($_SESSION['us_role'] == 'siswa') {
        $sql = mysqli_query($db, "SELECT * FROM siswa WHERE s_us_id= $_SESSION[us_id]");
      } elseif ($_SESSION['us_role'] == 'guru') {
        $sql = mysqli_query($db, "SELECT * FROM guru WHERE g_us_id= $_SESSION[us_id]");
      } else {
        $sql = mysqli_query($db, "SELECT * FROM wali WHERE w_us_id= $_SESSION[us_id]");
      }

      header("Location: index.php");
      exit;
    }
  }
  //jika error
  $error = true;


}
