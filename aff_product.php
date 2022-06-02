<html>
<title>
</title>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>

<body>
<table class="table table-border">
<div class="col-lg-5 container">
<h2  style="background-color:DodgerBlue; text-align:center">Product Details</h2>
</div>
</table>
</body>
</html>
<?php
        include 'Manager.class.php';
        include 'Categorie.class.php';
        include 'Product.class.php'; 
        include 'connection.pdo.php';

        try
        {
          if(isset($_POST['inser']))
            {
                 print_r($_POST['inser']);                  
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
                      echo "<tr>";
                      echo "<td>";
                      echo"<div class=col-sm-3><img src='images/".$valeur['image']."' width='' height=''></div>";  
                      echo "</td>";
                      echo "<td>";
                      echo "<div class=col-sm-3>".$valeur['descr']."</div>";
                      echo "</td>";
                      echo "<td>"; 
                      echo "<div class=col-sm-3>".$valeur['prix']."</div>";
                      echo "</td>";
                      echo "<td>"; 
                      echo "<div class=col-sm-3>".$valeur['name']. "</div>"; 
                      echo "</td>";  
                      echo "</tr>";                      
                      echo "</table>";  
                      echo "</div>";
                  }
                  echo "</br>";     
          }
  
        catch(Exception $e)
        {
        die('erreur:'.$e->getmessage());
        }
 /*
        try
        {
          
         $manage = new Manager($base);
         $retour = $manage -> getProduct();
         print_r($retour);
      
            if (empty($retour))  
            {  
            echo 'Aucun message'; 
            }  
            else
            { 
                //date_default_timezone_set('Europe/Paris'); 

                foreach ($retour as $valeur)  //$valeur alias $retour //(l’objet blog) 
                {                       
                    //$debut = date_create_from_format( 'Y-m-d H:i:s' , $valeur->getDate());  
                    echo "<h3>".$valeur->getName()."</h3>"; 
                    echo "<h4>Le ".$valeur->getImage()."</h4>";  
                    echo "<div style='width:400px'>"; 
                    echo $valeur->getDescr()."</div>"; 
                    echo "<h3>".$valeur->getPrix()."</h3>"; 
                     

                    if ($valeur->getImage() != "")
                     { 
                      echo "<img src='images/ ".$valeur->getImage()." width='200px' height='200px'/>"; 
                     }  
                   echo "<hr />"; 
                } 
            } 
        } 
        catch(Exception $e) 
        {  
         die('Erreur : '.$e->getMessage());   // message en cas d’erreur  
        }*/ 
     
  ?>



  
   