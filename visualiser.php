</title>
</head>
<body>
<table class="table table-border">
<div class="col-lg-5 container">
    
</div>
</table>

</body>
<h2  style="background-color:DodgerBlue; text-align:center">visualiser le blog</h2>

<?php       
 //require 'insertion.php';
 $base = mysqli_connect("127.0.0.1:3306", "root", "", "maquillage"); 
   
  if (!$base)      /* Vérification de la connexion */ 
   {  
     echo "Échec de la connexion :".mysqli_connect_error(); 
     exit();  
   } 

  $sert = "SELECT * FROM conblog"; 
  if ($sert = mysqli_query($base,$sert))
   { 
     date_default_timezone_set('Europe/Paris');  
                                                     
     while ($ligne = mysqli_fetch_assoc($sert)) /* fetch le tableau associatif */  
       { 
              echo "<h2>".$ligne['titre']."</h2>"; 
              $date = date_create_from_format('Y-m-d','H:i:s');     
              echo  "<h3>".$ligne['date']."</h3>";  
              echo "<div style='width:400px'>".$ligne['commentaire']." </div>"; 
      
            if ($ligne['photo'] != "")
              { 
              echo "<img src='images/".$ligne['photo']."' width='200px' height='200px'/>";
              }  
            echo "<hr />";
       } 
  }
  echo "<br/>";  
?>  
<a href="blogexo.php"> retour à la page d’insertion </a> 
  
</html>




       
