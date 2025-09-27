<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administratorn Area</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/css/all.min.css">
    <script type="text/javascript" src="font/js/all.min.js"></script>
  </head>
  <body>
    <?php include_once __DIR__. '/../includes/topnavbar.php'; ?>
    <div class="container">
       <?php include_once __DIR__.'/../includes/sidebar.php'; ?>
       <div class="main-content">
         <?php require_once MODULES_PATH . $template . '.php' ; ?>
      </div>
    </div>
    <?php include_once __DIR__. '/../includes/footer.php'; ?>

  </body>
</html>
