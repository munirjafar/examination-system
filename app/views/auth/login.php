<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
        <!-- Display Flash Message if available -->
       <?= $message ?? '' ?>
               <!-- /.login-logo -->
               <div class="card">
                   <div class="card-body login-card-body">
                       <p class="login-box-msg">Sign in to start your session</p>
                       <form action="" method="POST">
                           <div class="input-group mb-3">
                               <input type="email" name="email" class="form-control" placeholder="Email">
                               <div class="input-group-append">
                                   <div class="input-group-text">
                                       <span class="fas fa-envelope"></span>
                                   </div>
                               </div>
                           </div>
                           <div class="input-group mb-3">
                               <input type="password" name="password" class="form-control" placeholder="Password">
                               <div class="input-group-append">
                                   <div class="input-group-text">
                                     <span class="fas fa-lock"></span>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-7">
                                   <div class="icheck-primary">
                                       <input type="checkbox" id="remember_me" name="remember">
                                       <label for="remember">
                                           Remember Me
                                       </label>
                                   </div>
                               </div>
                               <!-- /.col -->
                               <div class="col-1">
                                   <img class="d-none" id="spinner-img" src="images/spinner.gif">
                               </div>
                               <div class="col-4">
                                   <button type="submit" id="login-btn" class="btn btn-primary btn-block">Sign In</button>
                               </div>
                               <!-- /.col -->
                           </div>
                       </form>
                   </div>
               <!-- /.login-card-body -->
               </div>
           </div>
           <script type="text/javascript">
       $("#login-btn").click(function(evt){
           $("#spinner-img").removeClass("d-none").show();
       });
   </script>
    <script>
       setTimeout(function() {
           $(".alert").fadeOut();
       }, 5000); // Disappears after 5 seconds
   </script>;
  </body>
</html>
