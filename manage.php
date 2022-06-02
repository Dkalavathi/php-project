<?php

 class manage
 {
    private $donne;  //instance of pdo
    public function setDb(PDO $donne)
     {
       $this->donne=$donne;
     }
    public function __construct($donne)
     {
        $this->setDb=$donne;
     }
     public function insertvalues(categorie $categorie)
      {
        $cat="INSERT into categorie(id,name,image)values('".$categorie->getId()."','".$categorie->getName()."','".$categorie->getImage()."')";

         $this->donne->exec($cat);
      }
      public function getValues()
      {
        $refer=array();
        $compteur=0;
        $values="SELECT * from categorie";

      while($result= $values->fetch())
      {
       $categorie=new categorie();
       $categorie->setId($result['id']);
       $categorie->setName($result['name']);
       $categorie->setImage($result['image']);
       $compteur++;
       $refer[compteur]=$categorie;
      }
    return $refer[compteur];    
   } 
}

class manager1
{
   private $donne;  //instance of pdo
   public function setDb(PDO $donne)
    {
      $this->donne=$donne;
    }
   public function __construct($donne)
    {
       $this->setDb=$donne;
    }
    public function insertvalues(product $product)
     {
       $cat="INSERT into product(id,name,image,descr,prix)values('".$product->getId()."','".$product->getName()."','".$product->getImage()."','".$product->getDescr()."','".$product->getPrix()."')";

        $this->donne->exec($cat);
     }
     public function getValues()
     {
       $refer=array();
       $compteur=0;
       $values="SELECT * from product";


     while($result= $values->fetch())
     {
      $product=new product();
      $product->setId($result['id']);
      $product->setName($result['name']);
      $product->setImage($result['image']);
      $product->setId($result['descr']);
      $product->setId($result['prix']);
      $compteur++;
      $refer[compteur]=$product;
     }
     return $refer[compteur];
   

  } 
}



?>