<?php
use app\modules\sections\admin\model\Section;
use system\Controller;

class SectionController extends Controller {
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
    $section = new Section($this->dbc);
    $sections = $section->fetchAllSections();
    $this->template->render("sections/admin/view/index",compact("sections"));
  }
  public function loginAction(){
    include VIEWS_PATH. 'auth/login.php';
  }
}
