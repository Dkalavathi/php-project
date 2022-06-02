<?php

class categorie
{
            private $id;
            private $name;
            private $image;
            private $id_categ_sup;

            public function getId()
            {
            return $this->id;
            }
            public function setId($id)
            {
            $this->id=$id;
            }

            public function getId_Categ_Sup()
            {
            return $this->id_categ_sup;
            }
            public function setId_Categ_Sup($id)
            {
            $this->id_categ_sup=$id;
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

}
?>