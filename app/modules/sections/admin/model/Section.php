<?php
namespace app\modules\sections\admin\model;
use PDO;
class Section {
   public $section_uid;
   public $section_name;
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
     $sql = "INSERT INTO sections_table (section_name) VALUES section_name = ? ";
     $statement = $this->dbc->prepare($sql);
     $statement->execute($this->section_name);
   }
}
