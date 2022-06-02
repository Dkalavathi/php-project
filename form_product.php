  <?php

  include 'Categorie.class.php';
  include 'Product.class.php';
  include 'Manager.class.php';
    $manager=new Manager();
    $list= $manager->getCategories();
    //$list=$manager->getProduct();
    // print_r($list);
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <body>
  
 <div style='text-align:center;font-size:20px;'><strong> product details</strong></div> 
 <form action="con_product.php" method="POST" enctype="multipart/form-data">
    <div class="table-responsive-lg">

      <table class="table table-bordered">
        <div class="table-responsive-lg">

            <tr><th>Catégorie</th>
            <td>
              <select name="categorie">
              <?php foreach($list as $c)
              { 
                echo "<option value='".$c['id']."'>". $c['name']."</option>";
              }  ?>
              </select>
            </td>
            </tr>
             
              <tr><th>name</th><td><input type="name" name="name"/></td></tr>
              <tr><th>image</th><td><input type="file" name="image"/></td></tr>
              <tr><th>descr</th><td><input type="descr" name="descr"/></td></tr>
              <tr><th>prix</th><td><input type="prix" name="prix"/></td></tr>
      
      </table>
              </div>
              <div>
              <button onclick="window.location='con_product.php';" type="inser" id="inser" name="inser">Insert</button>
            <!--  <script type="text/javascript">
                    document.getElementById("submit").onclick = function () {
                                          location.href = ;
                                                                              };
              </script-->
              <button id="up" name="upda">update</button>
               <button id="suppr" name="supp">supprimer</button>
        </div>
  </form>
  <br/>
  <html><a href="aff_product.php">List of articles</a> </html>
  </body>  
  </html>



