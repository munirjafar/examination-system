<?php
namespace system;
class Controller {
  public $template;
  public $dbc;
  
  public function runAction($action){
    if (method_exists($this, 'runBeforeAction')) {
      $result = $this->runBeforeAction();
      if ($result == false) {
          return;
      }
    }
    $action .= 'Action';
    if (method_exists($this, $action)) {
       $this->$action();
    } else {
      echo "404 page not found";
      http_response_code(404);
    }
  }
}
