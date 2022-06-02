<?php
      include 'Categorie.class.php';
      include 'Product.class.php';
      include 'Manager.class.php';
      $manager=new Manager();
      $list= $manager->getCategories();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <style>
  .fakeimg {
             height: auto;
             background: #aaa;
             background-size:auto;
             display:block;
           }
  .right {
             position: absolute;
             color:#;
             right: 0px;
             width: 300px;
             border: 3px;
             margin:-2px;
         }
  body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #fffff;
  color:white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  }
}
</style>

  
 
  <script>
  $document.ready(function() {
  alert("ok");
  $(dropdown-menu).mouseover(function() {

     $('dropdown-item').fadeIn(500);
  }).mouseout(function(){
     $('dropdown-item').fadeOut(500);
  });
});


  //Create a new jQuery.Event object without the "new" operator.
   var e = jQuery.Event( "onclick" );
 
// trigger an artificial click event
   jQuery( "body" ).trigger( e );

//searchbar 
$(document).ready(function(
 {
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
             if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
    }
   
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class="search-container">
       <form class="searchbox">
        <input type="search" placeholder="Search.." name="Search" class="searchbox-input" onkeyup="buttonUp();" required>
        <i class="fa fa-search" color:white></i>
       </form>
   </div> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="right">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="form_categorie.php">Admin<a></button> 
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a>login<a></button>

<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
    <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" required>
  <button type="submit">Login</button>
  <label>
  <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  </form>
  </div> 
  
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="panier.php"> <i class="svg-icon svg-icon-cart">Panier</i></a> </button>

 </div>
</nav>
<!--<svg-icon> <src href="C:\wamp64\www\test\sprite.svg#si-glyph-person-2" /></svg-icon>-->
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1><i>Port maquillage</i></h1>
  <p>Different types of makeup articles!</p> 
</div>

 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 <a class="navbar-brand" href="#"></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
 <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="collapsibleNavbar">
 <ul class="navbar-nav">
 <li class="nav-item">
 <a class="nav-link" href="#">Accueil</a>
 </li>
 </ul>
 </div>

<div class="collapse navbar-collapse" id="collapsibleNavbar">
<div class="dropdown">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#">Marques</a>
<div class="dropdown-menu">
       
                  <a class="dropdown-item" href="#">Dior</a>
                  <a class="dropdown-item" href="#">Guerlain</a>
                  <a class="dropdown-item" href="#">Yves saint</a>
                  <a class="dropdown-item" href="#">claire</a>
                  <a class="dropdown-item" href="#">Garnier</a>
                  <a class="dropdown-item" href="#">la prairie</a>
                  <a class="dropdown-item" href="#">Nuxe</a>
                  <a class="dropdown-item" href="#">clinique</a>

</div>
</li></ul>                   
</div> 
</div>


<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<div class="dropdown">
<a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="">Maquillage</a>
<div class="dropdown-menu">
              <a class="dropdown-item" href="aff_product.php">Teint</a>
              <a class="dropdown-item" href="aff_product.php">Lévres</a>
              <a class="dropdown-item" href="aff_product.php">Yeux</a>
              <a class="dropdown-item" href="aff_product.php">sourcil</a>
              <a class="dropdown-item" href="aff_product.php">ongles</a>
              <a class="dropdown-item" href="aff_product.php">coffrets</a>
</div>
</div>
</li></ul>
</div>

<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav"> <li class="nav-item">
  <div class="dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown"  href="">Soin corps</a>
  <div class="dropdown-menu">
                                          <a class="dropdown-item" href="aff_categorie.php">Coffret soin</a>
                                          <a class="dropdown-item" href="aff_categorie.php">Demaquillant</a>
                                          <a class="dropdown-item" href="aff_categorie.php">nettoyant</a>
                                          <a class="dropdown-item" href="aff_categorie.php">sérums</a>
                                          <a class="dropdown-item" href="aff_categorie.php">Hydrante visage</a>
                                          <a class="dropdown-item" href="aff_categorie.php">cremés</a>
                                          <a class="dropdown-item" href="aff_categorie.php">solaire</a>
                                          <a class="dropdown-item" href="aff_categorie.php">cheveux</a>
    <div></div>
    </li></ul></div>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav"><li class="nav-item">
      <div class="dropdown">
      <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#">Beaute</a>
      <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#">Homme</a>
                                          <a class="dropdown-item" href="#">Femme</a>
                                          <a class="dropdown-item" href="#">Parfume</a>
                                          <a class="dropdown-item" href="#">Nouveauté</a>
                                          <a class="dropdown-item" href="#"></a>
                                          <a class="dropdown-item" href="#"></a>
                                          <a class="dropdown-item" href="#"></a>
                                          <a class="dropdown-item" href="#"></a>
                         </div></div>
      </li></ul></div>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav"><li class="nav-item">
      <div class="dropdown">
      <a class="nav-link  dropdown-toggle" data-toggle="dropdown" href="#">Pratiques</a>
      <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#">Exercise physics</a>
                                          <a class="dropdown-item" href="#">Yoga</a>
                                          <a class="dropdown-item" href="#">Regime</a>
                                          
      </div></div>
      </li></ul></div>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav"> <li class="nav-item">
    <a class="nav-link" href="promotion.php">Promotions</a>
    </li></ul></div>

 <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav"> <li class="nav-item">
      <div class="dropdown">
      <a class="nav-link dropdown-toggle"  data-toggle="dropdown"  href="">Contact us</a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="blogexo.php">Blog</a>
      <a class="dropdown-item" href="contact.php">Inscrits Members</a>
  </div>            
  </div>
  </li></ul>
  </div>
</nav>

<!--<div class="dropdown">
    
<div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
</div> -->
<!---end of -->

 <div class="container" style="margin-top:30px">
  <div class="row">
  <div class="col-sm-4">
              <h2>STYLE</h2>
              <h5>Photo:</h5>
              <div>
              <img src="images\maqui.jpg" class=""> </div><br/>
              <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
              <h3>TYPE DE MAQUILLAGE</h3>
              <tr><th>Catégorie list </th>
              <td>

              <select name="categorie">
                <option value="1"></option>
              <?php 
                 
              foreach($list as $c)
              { 
                echo "<option value='".$c['id']."'>". $c['name']."</option>";
              } 
              
              ?>
              </select>

              </td>

              </tr>

              <p></p>
          <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
          </ul>
          <hr class="d-sm-none">
  </div>

  <div class="col-sm-8">
      <h2>DESCRIPTIONS</h2>
      <h5>Title description</h5>

  <div id="demo" class="carousel slide" data-ride="carousel">

     <!-- Indicators -->
    <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
    </ul>
   <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\abo-produits.png" alt="Los Angeles" width="" height="">
    </div>
    <div class="carousel-item">
      <img src="images\maqui1.png" alt="Chicago" width="" height="">
    </div>
    <div class="carousel-item">
      <img src="images\maqui2.jpg" alt="New York" width="" height="">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span></a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span></a>
    <p>Le maquillage est l’atout essentiel pour sublimer votre beauté naturelle. Du mascara au fard à paupières, du blush au liner, toutes les dernières nouveautés et les produits de référence sont chez Birchbox.
        Que vous soyez plutôt no-make up, look nude ou retro, nos sélections sauront répondre à toutes vos envies.
        Comment maquiller une peau grasse ? Quel maquillage pour des yeux verts ? Comment utiliser un enlumineur ? Toutes ses réponses (et beaucoup d’autres) sont à découvrir sur les fiches de nos produits.
        Que vous souhaitiez tenter le contouring ou découvrir les secrets des highlighters, la communauté port maquillage sera là pour vous aider à sélectionner le meilleur des produits.
        Osez, testez, jouez ! Un léger trait de khôl, un rouge à lèvres pop, le fond teint glowy à la teinte parfaite. Le maquillage est la meilleure façon de laisser s’exprimer sa créativité. Bienvenue chez port maquillage !</p>
  </div>

     <!-- <div class="fakeimg"><img src="images\abo-produits.png" ></div>-->
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg"></div>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <tr>
  <td><a href="https://www.instagram.com/livingindiatv/" class="fa fa-instagram">instagram</a></td>
  <td><a href="https://in.pinterest.com/livingindiatv/" class="fa fa-pinterest">pinterest</a></td>
  <td><a href="https://youtube.com" class="fa fa-youtube">youtube<span></span></a></li></td>
  <td><a href="https://plus.google.com/102689304172526656580" class="fa fa-google">gplus<span></span></a></li></td>
  <td><a href="https://twitter.com/livingindiatv" class="fa fa-twitter">twitter<span></span></a></li></td>
  <td><a href="https://www.facebook.com/livingindiatv/" class="fa fa-facebook">facebook<span></span></a></li></td>
  </tr>
</div>

</body>
</html>
