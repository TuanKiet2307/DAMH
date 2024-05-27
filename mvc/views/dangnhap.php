<?php
  require_once "./mvc/core/libs.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php public_patch('css/style-register.css')?>">
    <link rel="stylesheet" href="<?php public_patch('css/all.min.css')?>">
    <link rel="stylesheet" href="<?php public_patch('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php public_patch('css/bootstrap.css')?>">
</head>
<body background="<?php public_patch('images/login-register.jpg')?>" style="background-size: cover;">
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
      
             
              <h2 class="text-uppercase text-center mb-5">Login</h2>
              
              <form action="<?php echo XuLyDangNhap ?>"  method="POST" >        

                <div class="form-outline mb-4">
                  <input type="text" name="tendangnhap" id="form3Example1cg" class="form-control form-control-lg"  required />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="matkhau" id="form3Example4cg" class="form-control form-control-lg"  required />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="<?php echo dangky?>"
                    class="fw-bold text-body"><u>Register here</u></a></p>

              </form>
              <?php if(isset($_COOKIE['message'])) { ?>
                  <div class="alert alert -warning shadow-sm px-2 text-center" role="alert">
                    <?php echo $_COOKIE['message']; ?>
                  </div>
              <?php } ?>
                  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="<?php public_patch('js/bootstrap.min.js')?>"></script>

</body>
</html>