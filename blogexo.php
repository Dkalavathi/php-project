<!Doctype html>
<html>
<meta charset='UTF-8'>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head><title>exercise php</title></head>
<style>
.table {
        border:3px solid violet;
        width:500px;
        height:500px;
        }
 .form{
       text-align:center;
      }
 [type='search'] {
        -webkit-appearance: textfield;
        -webkit-box-sizing: content-box;
      }
   label{
      margin:50px;
      top:50px;
      left:500px;
    }
    
  </style>
   <body>
  <!--<script>
  var element = document.getElementById('clearText');
     element.addEventListener('click', function() {document.getElementById("pseudo").value = "";});
  </script>-->
  <table class="table table-border">
 
  <div class="row-lg-3 container-fluid">
  <h2 style="background-color:DodgerBlue; text-align:center">Mon super Blog</h2>
  </div>
  <div class="container">
    <h2>Formulaire d’ajout de contenu au Blog</h2> 
    <form action="insertion.php" method="POST" enctype="multipart/form-data">  
     <p>Titre: <input type="text" name="titre" /></p> 
     <p>Commentaire: <br /><textarea name="commentaire" rows="10" cols="50"></textarea></p>  
     <p> <input type="hidden" name="MAX_FILE_SIZE" value="2097152">  </p>
     <p>Choisissez une photo avec une taille inférieure à 2 Mo.</p> 
     <input type="file" name="photo">  
     <br /><br />  
     <input type="submit" name="submit" value="Envoyer">  
  </form>  
  <br />  
  <a href="visualiser.php" >page d’affichage du blog</a> 
  </div>
  </table>
  </body>
  </html>
        
        <!--<p>date</p> 
        <p><input type='date' name='date'></p>
        <p>commentaire:</p>
        <p><textarea type='textarea' name='commentaire' rows=10px value=""></textarea></p>
      
        <!--<input type='hidden' name='MAX_FILE_SIZE' value=''>  
        <p>Choisissez une photo avec une taille inférieure à 2 Mo.</p>
        <p><input type='file' id='image' name='image'>  </p>
         
        <p><input type='submit' id='submit' name='submit' value='envoyer'></p>
        <a href="visualiser.php">page d'affichage du blog </a>
        
       
    </form>    
    </div>
</body>-->

