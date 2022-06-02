<?php
      include 'Categorie.class.php';
      include 'Product.class.php';
      include 'Manager.class.php';
      $manager=new Manager();
      $list= $manager->getCategories();
?>
<html>
<body>
<head>
  <title>categorie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>

<div style='text-align:center;font-size:20px;'><strong> Catégorie Détails</strong></div> 

  <form action="aff_categorie.php" method="POST" enctype="multipart/form-data">
           

            <table class="table table-bordered">

            <div class="table-responsive-lg">
            
            
              <tr><th>name</th><td><input type="name" name="name"/></td></tr>
              <tr><th>image</th><td><input type="file" name="image"/></td></tr>

              <tr><th>Sous-Catégorie de </th>
              

              <td>

              <select name="categorie">
                <option value="0">Aucune</option>
              <?php 
                 
                
              foreach($list as $c)
              { 
                echo "<option value='".$c['id']."'>". $c['name']."</option>";
              } 
              
              ?>
              </select>

              </td>

              </tr>
             
              <!--tr><th>ajout categorie</th><td><input type="catename" name="catename"/></td></tr-->

              <tr><th><button onclick="windows.location='aff_categorie.php';" type="submit" id="incat" name="incat">Insert</button>
              <button id="up" name="upda">update</button> 
              <button id="suppr" name="supp">supprimer</button></th><td>
            
            </div>
            </table>
             

  </form>

</body>

</html>
