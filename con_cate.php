<html>
  <a href="aff_categorie">Menu Categorie</a>
</html>

<?php

include 'Categorie.class.php';
include 'Product.class.php';
include 'Manager.class.php';
include 'connection.pdo.php';

  //print_r($_FILES);
  try
  {
     print_r($_POST);

     if(isset($_POST['incat']))
     {
          $manager= new manager($base);
      
          $cat = new categorie();

          $cat->setName(htmlentities(addslashes($_POST['name']),ENT_QUOTES));
          $cat->setImage($_FILES['image']['name']);

           $cat_values = $manager->insertcategorie($cat);
          print_r($cat_values);
    }    
          
   }
  catch(Exception $e)
  {
  die('erreur:'.$e->getmessage());
  }

   print_r($_FILES);

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







