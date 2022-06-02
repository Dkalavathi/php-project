 
 <?php

  include 'Categorie.class.php';
  include 'Product.class.php';
  include 'Manager.class.php';
  include 'connection.pdo.php';

 
//print_r($_FILES);

    try
    {
       print_r($_POST);
        /*  $base=new PDO('mysql:host=127.0.0.1:3306,dbname=maquillage,charset=utf8','root','');
            $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);*/


       if(isset($_POST['inser']))
       {
                                           
            $manager= new manager($base);
        
            $pro = new product();
            
              $pro->setName(htmlentities(addslashes($_POST['name']),ENT_QUOTES));
              $pro->setDescr(htmlentities(addslashes($_POST['descr']),ENT_QUOTES));
              $pro->setPrix($_POST['prix']);
              $pro->setId_c($_POST['categorie']);                          
              $pro->setImage($_FILES['image']['name']);
            
            $pro_values = $manager->insertproduct($pro);
            print_r($pro_values);
        
       }    

         /* echo "<table border='1' cellpadding=50px;>";   ?>

            <tr><td><?php echo ; ?></td>
            <td><?php echo ; ?></td>
            <td><?php echo ; ?></td>
            <td><?php echo  $pro->setPrix($_POST['prix']);?></td>
            <td><?php echo  $pro->setId_c($_POST['categorie']); ?></td></tr>
            <?php
             echo "</table>";*/
             ////todo!!!

           
            
        /*echo  $n." ".$i." ";
        echo  $d." ".$p;
        $result->execute(array($n,$i,$d,$p));*/
    }
    catch(Exception $e)
    {
    die('erreur:'.$e->getmessage());
    }


    if(isset($_FILES['image']['name']))
     {
            $errors= array();
            $file_name=$_FILES['image']['name'];
            $file_type=$_FILES['image']['type'];
            $file_size=$_FILES['image']['size'];
            $file_tmp=$_FILES['image']['tmp_name'];
        //$file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
            $exploded = explode('.',$_FILES['image']['name']);
            $file_ext=strtolower(end($exploded));
            $expensions=array("jpeg","png","jpg","php","gif","txt","html");

            if(in_array($file_ext,$expensions)==false)
            {
                $errors[]="extensions not allowed,please choose a jpeg or png file.";
            }
            if($file_size > 2097152)
            {
                $errors[]='File size must be excately 2 MB';
            }

            if(empty($errors)==true)
            {
                move_uploaded_file($file_tmp,"images/".$file_name);
                echo "Success";
            }
            else
            {
            print_r($errors);
            }
       
     }

     
?> 

<?php

try
{
  
 $manager = new Manager($base);  //(l’objet)
 $retour = $manager -> getProduct();
//print_r($retour);
     foreach ($retour as $valeur)  //$valeur alias $retour  
          {   
              echo "<div class=container>";
              echo "<table class=table table-bordered>"; 
              
           /* if ($valeur->getImage() != "")
            { 
               echo "<img src='images/ ".$valeur->getImage()." width='200px' height='200px'/>"; 
            }*/
              echo "<div class=row>";
              echo"<div class=col-sm-3><img src='images/".$valeur['image']."' width='' height=''></div>";  
              echo "<div class=col-sm-3>".$valeur['descr']."</div>";
              echo "<td>"; 
              echo "<div class=col-sm-3>".$valeur['prix']."</div>";
              echo "<div class=col-sm-3>".$valeur['name']. "</div>";  
              echo "</table>" ;  
              echo "</div>";
          }
          echo "</br>";     
  }

catch(Exception $e)
{
die('erreur:'.$e->getmessage());
}
?>

