<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administratorn Area</title>
    <link rel="stylesheet" href="css/style.css?v=1.1">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" href="font/css/all.min.css">
    <script type="text/javascript" src="font/js/all.min.js"></script>
  </head>
  <body>
    <?php// include_once __DIR__. '/../includes/topnavbar.php'; ?>
    <div class="container">
       <?php include_once __DIR__.'/../includes/sidebar.php'; ?>
       <div class="main-content mb-5">
        <div class="mt-5">
          <div id="toastContainer"></div>
         <?php require_once MODULES_PATH . $template . '.php' ; ?>
        </div>
      </div>
    </div>
    <?php include_once __DIR__. '/../includes/footer.php'; ?>
    <script type="text/javascript">
      showToast('Student registered successfully! Application Number: ', 'success');
                    
             // Toast function
            function showToast(message, type = 'success') {
                const toast = document.createElement('div');
                toast.className = `toast toast-${type}`;
                
                toast.innerHTML = `
                    <div class="toast-icon">
                        <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                    </div>
                    <div class="toast-message">${message}</div>
                `;
                
                document.getElementById('toastContainer').appendChild(toast);
                
                // Remove toast after animation
                setTimeout(() => {
                    toast.remove();
                }, 3000);
            }
    </script>

  </body>
</html>
