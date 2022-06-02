<?php

  include 'connection.pdo.php';
  include 'Categorie.class.php';
  include 'Product.class.php';
  include 'Manager.class.php';

   echo 'Tests requetes<br/>';

    /*print_r($_POST);
   if(isset($_POST['inser']))
   {
  /*  $base=new PDO('mysql:host=127.0.0.1:3306,dbname=maquillage,charset=utf8','root','');
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   $manager= new manager();
     print_r();
    $recup = $manager->insertproduct($product);
    
   }    
  
  /*
    $res = "INSERT into product (nom,image,descr,prix,id_c)values(?,?,?,?,?)";
    $resultat=$this->$base->prepare($res);
    $re=exec($resultat);
    return $re->fetchAll(); 


    $stmt = $this->donne->prepare("SELECT * FROM product WHERE id=?");
            $stmt->execute([$id]); 
            $product = $stmt->fetch();
            return $product;*/
 
   //$manager = new Manager;

  // $product = $manager->getProductById(1);
  // print_r($product);


     /*$categorie=$manager->getCategorieById(1);?>
     <?php

     echo "<br/>";
     print_r($categorie); 

     /*echo "<table border='1' cellpadding=50px;>";
      echo "<tr>";
     
      echo "<td>" .$pro->setPrix($_POST['prix'])."</td>";
      echo "<td>" .$pro->setId_c($_POST['categorie']). "</td>";
      echo "<tr>";
      echo "</table>";*/
/*
     if(isset($_POST['inser']))
      {
       $base=new PDO('mysql:host=127.0.0.1:3306,dbname=maquillage,charset=utf8','root','');
       $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

           $manager= new manager($base);
       
           $pro = new product();

           echo "<table border='1' cellpadding=50px;>";
           echo "<tr>";
           echo "<td>" .$pro->setName(htmlentities(addslashes($_POST['name']),ENT_QUOTES)). "</td>";
           echo "<td>" .$pro->setDescr(htmlentities(addslashes($_POST['descr']),ENT_QUOTES)). "</td>";
           echo "<td>" .$pro->setImage($_FILES['image']['name']). "</td>";
           echo "<td>" .$pro->setPrix($_POST['prix']). "</td>";
           echo "<td>" .$pro->setId_c($_POST['categorie']). "</td>";
           echo "</tr>";
           echo "</table>";

      }*/       
      try
      {
        
       $manager = new Manager($base);  //(l’objet)
       $retour = $manager -> getProduct();
       //print_r($retour);
           foreach ($retour as $valeur)  //$valeur alias $retour  
                {                       
                   
                    echo "<h3>".$valeur['name']."</h3>"; 
                    echo "<h4>Le ".$valeur['image']."</h4>";  
                    echo "<div style='width:400px'>"; 
                    echo $valeur['descr']."</div>"; 
                    echo "<h3>".$valeur['prix']."</h3>"; 
                }
                echo "</br>";     
        }

      catch(Exception $e)
      {
      die('erreur:'.$e->getmessage());
      }
            
     ?>
      <html>
      <svg-icon> <i type='color:white;'class="svg-icon svg-icon-cart"></i></svg-icon>   </html>



      /**<?php
 
require_once("connexion.pdo.php");  // on fait appel à notre fichier de connexion
 
$req=$bdd->query("select * from produit order by nom asc"); // requête de selection
 
// ouverture de la table qui servira de conteneur pour l'affichage de nos produits
 
echo'<table>';
// remplissage de la table crée, chaque ligne de notre table servira de ligne du tableau
 
while($ligne=$req->fetch()) { 
    echo'<tr><td align="center"><img src="pdt/'.$ligne['image'].' "  width="150" height="75"  title="'.$ligne['description'].'" /> <td> ';
 
    echo'<td>'.$ligne['nom'].' </td>';
 
    echo'<td align="center">'.number_format($ligne['prix'],0,'','').'  FCFA</td> ';
 
    echo'<td align="center"><a href="panier.php?id='.$ligne['id'].' " >Ajouter au panier</a></td></tr> ';
 
}
 // ferméture du tableau
 
echo'</table>';
 
?> **/ 