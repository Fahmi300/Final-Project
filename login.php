


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body{
      margin-top: 2%;
      background-color:#2eccd442;
    }
  </style>
</head>
<body>
  <div class="login d-flex align-items-center py-5">
      <div class="container w-50 co-login">
          <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Selamat Datang Kembali!</h3>

                    <?php if (isset($error)) : ?>
                      <div class="alert alert-danger text-center">
                          <b>Username/Password Salah</b>
                      </div>
                    <?php endif; ?>
              
                    <form action="login-action.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" name="username"class="form-control" id="floatingInput" placeholder="Username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3"> Remember me</label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>
                    
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" name="login" class="btn btn-primary btn-lg w-100">Masuk</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href="daftar.php"
                                class="link-info">Buat Akun</a></p>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
      

 


<?php
include 'layout/footer.php';
?>