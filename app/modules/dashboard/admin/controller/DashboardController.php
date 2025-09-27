<?php
use system\Controller;
class DashboardController extends Controller {
  public function runBeforeAction()
  {
    // if ($_SESSION['is_admin'] ?? false == true) {
    //    return true;
    // }
    // $action = $_GET['action'] ?? $_POST['action'] ?? 'default';
    // if ($action != 'login') {
    //   header("location: ?module=dashboard&action=login");
    // } else {
      return true;
    // }
  }

  public function  defaultAction(){
    $this->template->render("dashboard/admin/view/index",[]);
  }
  public function loginAction(){
    include VIEWS_PATH. 'auth/login.php';
  }
}
