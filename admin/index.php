<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administratorn Area</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/font/css/all.css">
  </head>
  <body>
    <?php include_once 'includes/topnavbar.php'; ?>
    <div class="container">
       <?php include_once 'includes/sidebar.php'; ?>
       <div class="main-content">
         <?php
           $url = $_GET['page'] ?? $_POST['page'] ?? 'dashboard';
           $file = 'pages/admin.' . $url . '.php';
           if (file_exists($file)) {
              require_once $file;
              // echo phpversion();?
           }else {
             print('404 not availale');
           }
           // print_r($url);
          ?>
      </div>
    </div>
    <?php include_once 'includes/footer.php'; ?>

  </body>
</html>
