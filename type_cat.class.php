<?php

class type_cat
{
   private $id_tc;
   private $name;
   private $fk_c;
   private $fk_p;

          public function getId_tc()
          {
            return $this->$Id_tc;
          }
          public function setId_tc($Id_tc)
          {
          $this->$Id_tc=$Id_tc;
          }
          public function getName()
          {
            return $this->$name;
          }
          public function setName($name)
          {
           $this->$name=$name;
          }
          public function getFk_c()
          {
            return $this->$fk_c;
          }
          public function setFk_c($fk_c)
          {
           $this->$fk_c=$fk_c;
          }
          public function getFk_p()
          { 
            return $this->$fk_p;
          }
          public function setFk_p($fk_p)
          {
            $this->$fk_p=$fk_p;
          } 
}


?>

