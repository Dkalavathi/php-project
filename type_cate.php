<?php
include 'connection.pdo.php';
include 'Categorie.class.php';
include 'Product.class.php';
include 'Manager.class.php';
  $manager=new Manager();
   $liscat= $manager->getCategories();
   $lispro= $manager->getProduct();
  // print_r($liscat);
   //print_r($lispro);
?>


<html>

<head>
  <title>Type of categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <body>
  <div style='text-align:center;font-size:20px;'><strong> Type of categorie details</strong></div> 

  <form action="aff_type_product.php" method="POST" enctype="multipart/form-data">
           

        <table class="table table-bordered">

            <div class="table-responsive-lg">
            
           
             <tr><th>name</th><td><input type="name" name="name"/></td></tr>

             <tr>
             
             <th>type of categories</th>
             
             <td><select values="categorie">
                                  
                                  <?php
                    
                                   foreach($liscat as $lc)
                                   {
                                     echo "<option value='".$lc['id']."'>". $lc['name']."</option>";
                                   }  ?>
                     
                                 </select>
             </td></tr>
  
             <tr>     <th>All products</th>
             <td>
             
             <select values="product">
               
             <?php
               
               foreach($lispro as $lp)
               {
                 echo "<option value='".$lp['id']."'>". $lp['name']."</option>";
               } 
             ?>

             </select>
             
             
             </td></tr>
             <tr>
             <th></th>
             <td> 
             
            <button onclick="window.location='aff_type_product.php';" type="submit" id="tins" name="tins">Insert</button>
            <button id="up" name="upda">update</button>  <button id="suppr" name="supp">supprimer</button>
            </td> </tr>

    </div>
           
    </table>
             

  </form>
  
  

</body>

</html>