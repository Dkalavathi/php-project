<?php
//include 'connection.pdo.php';

 class Manager
 {
    private $donne;  //instance of pdo
    public function setDb(PDO $donne)
     {
       $this->donne=$donne;
     }
    public function __construct()
     {
       try
        {
          $base = new PDO('mysql:host=localhost;dbname=maquillage', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        }
        catch (PDOException $e)
        {
            echo 'Connexion échouée :'. $e->getMessage();
        }
       // public static setDB()//static....
        /*$base=new PDO('mysql:host=127.0.0.1:3306,dbname=maquillage,charset=utf8','root','');
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);*/
        $this->setDb($base);
     }

     public function insertcategorie(categorie $categorie)
      {
        $sql="INSERT into categorie( name, image, id_categ_sup ) values('".$categorie->getName()."','".$categorie->getImage()."', ".$categorie->getId_Categ_Sup().")";
         
         // echo '<hr/>'.$sql.'<hr/>';

          $this->donne->exec($sql);

          $catid=$this->donne->lastInsertId();
          return $catid;
       
      }
      public function updatecategories()
      { ?>
        <?php
$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
	'nvprix' => $nvprix,
	'nv_nb_joueurs' => $nv_nb_joueurs,
	'nom_jeu' => $nom_jeu
	));

        $stmt = $donne->prepare('UPDATE categorie SET name=:name, image = :image WHERE id_categ_sup= :id_Categ_Sup');
        $stmt->execute(array(
          'image'=>$image,
          'name' =>$name,
          'id_categ_sup' => $id_categ_sup
        )); 
        $categorie = $stmt->fetchAll();
        return $categorie;    

      }
    
      public function deletecategorie()
      {

      }
      public function getCategories()
      {
        $stmt = $this->donne->prepare("SELECT * FROM categorie");
        $stmt->execute(); 
        $categories = $stmt->fetchAll();
        return $categories;
        //print_r($categorie);
      }
      public function getCategorieById($id)
      {
        $stmt = $this->donne->prepare("SELECT * FROM categorie WHERE id=?");
        $stmt->execute([$id]); 
        $categorie = $stmt->fetch();
        return $categorie;
        //print_r($categorie);
      }
    
    public function getcategorie()
      {
        $refer=array();
        $compte=0;
        $values="SELECT * from categorie";

        while($result= $values->fetch())
        {
          $categorie=new categorie();
          $categorie->setId($result['id']);
          $categorie->setName($result['name']);
          $categorie->setImage($result['image']);
          $compteur++;
          $refer[compte]=$categorie;
        }
        return $refer[compte];
       }   
       
       public function insertproduct(product $product)
       {
         $requete="INSERT into product( name, image, descr, prix, id_c) values('".$product->getName()."','".$product->getImage()."',
         '".$product->getDescr()."',".$product->getPrix().",".$product->getId_c().")";
  
          //echo '<hr/>'.$requete.'<hr/>';

          $this->donne->exec($requete);

          $id=$this->donne->lastInsertId();
          return $id;
       }
       public function deleteproduct()
       {

       }
       public function getProductById($id)
       {
         
            $sql="SELECT * from product where id=".$id;
            echo $sql;
            print_r($this->donne);
            $stmt = $this->donne->query($sql);
            if ($result = $stmt->fetch()) {
                return $result;
            }else{
              return null;
            }

            $stmt = $this->donne->prepare("SELECT * FROM product WHERE id=?");
            $stmt->execute([$id]); 
            $product = $stmt->fetch();
            return $product;
       }

       public function getproduct()
       {
        
        $stmt = $this->donne->prepare("SELECT * FROM product");
        $stmt->execute(); 
        $products = $stmt->fetchAll();
        return $products;
       }
       public function updateproduct()
       {

         $refer=array();
         $compteur=0;
         $result=$this->donne->query('SELECT * from product');
          
              while($prod = $result ->fetchAll())
                {
                  $product=new product();
                  $product->setId($prod['id']);
                  $product->setName($prod['name']);
                  $product->setImage($prod['image']);
                  $product->setDescr($prod['descr']);
                  $product->setPrix($prod['prix']);
                  $compteur++;
                  $refer[$compteur]=$product;
                }
          return $refer;
          } 
          public function inserttype_cate(type_cate $type_cate)
          {
          
            $requete="INSERT into type_cate( name,fk_c,fk_p) values('".$type_cate->getName()."','".$type_cate->getfk_c()."',
             '".$type_cate->getfk_p()."')";            //echo '<hr/>'.$requete.'<hr/>';

            $this->donne->exec($requete);

            $id=$this->donne->lastInsertId();

            return $id;
           }
           
          
          public function getType_cate()
          {
           
           $stmt = $this->donne->prepare("SELECT * FROM type_cat");
           $stmt->execute(); 
           $types = $stmt->fetchAll();
           return $types;
          }
          public function updatetype_cate()
          {

          }
  
 }

?>