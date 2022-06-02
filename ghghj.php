<?php     
 
 require 'insertion_cat.php';
 require 'affichage_cate.php';

 $base = mysqli_connect("127.0.0.1:3306", "root", " ", "maquillage"); 
   
  if (!$base) /* Vérification de la connexion */ 
   {  
     echo "Échec de la connexion :".mysqli_connect_error(); 
     exit();  
   } 

  $insert = "SELECT * FROM product"; 
  if ($sert -> mysql_query($base,$insert))
   { 
    // date_default_timezone_set('Europe/Paris');  
                                                     
     while ($ligne -> mysqli_fetch_assoc($sert)) /* fetch le tableau associatif */  
       { 
              echo "<h2>".$ligne['nom']."</h2>"; 
              echo "<h2>".$ligne['image']."</h2>";   
              echo "<div style='width:400px'>".$ligne['descr']."</div>";  
              echo "<h2>".$ligne['prix']." </h2>"; 
      
            if ($ligne['image'] != "")
              { 
              echo "<img src='images/".$ligne['image']."' width='200px' height='200px'/>";
              }  
            echo "<hr />";
       } 
  }
  echo "<br/>"; 
  ?>