<?php

class product
  {

          private $id;
          private $name;
          private $images;
          private $descr;
          private $prix;
          private $id_c;

          public function getId()
          {
            return $this->id;
          }
          public function setId($id)
          {
            $this->id=$id;
          }
          public function getName()
          {
          return $this->name;
          }
          public function setName($name)
          {
            $this->name=$name;  
          }
          public function getImage()
          {  
          return $this->image;
          }
          public function setImage($image)
          {  
          $this->image=$image;
          }
          public function getDescr()
          {
          return $this->descr;
          }
          public function setDescr($descr)
          {
            $this->descr=$descr;
          }
          public function getPrix()
          {
          return $this->prix;
          }
          public function setPrix($prix)
          {
          $this->prix=$prix;
          }
          public function getId_c()
          {
          return $this->id_c;
          }
          public function setId_c($id_c)
          {
          $this->id_c=$id_c;
          }
    
           
        }

?>