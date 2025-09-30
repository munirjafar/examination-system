<?php
namespace app\modules\sections\admin\model;
use PDO;
class Section {
   public $section_uid;
   public $section_name;
   public $status;
   public $dbc;
   public function __construct($dbc) { $this->dbc = $dbc; }

   public function fetchAllSections(){
    $sql = "SELECT * FROM sections_table";
    $statement = $this->dbc->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_OBJ);
    return $result;
   }
   public  function register_new_section(){
     $sql = "INSERT INTO sections_table (section_name, status) VALUES  (:section, :status) ";
     $statement = $this->dbc->prepare($sql);
     $result = $statement->execute(["section" => $this->section_name,"status" => $this->status]);
     var_dump($result);
     return $result;
   }
}
