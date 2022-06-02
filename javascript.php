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
        /* .fakeimg {
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
                } */


                body{
    background:#475f77;
}
.container{
    width:600px;
    margin:50px auto;
}
.searchbox{
    position:relative;
    min-width:50px;
    width:0%;
    height:50px;
    float:right;
   overflow:hidden;    
    -webkit-transition: width 0.3s;
    -moz-transition: width 0.3s;
    -ms-transition: width 0.3s;
    -o-transition: width 0.3s;
    transition: width 0.3s;
}
.searchbox-input{
    top:0;
    right:0;
    border:0;
    outline:0;
    background:#dcddd8;
    width:100%;
    height:50px;
    margin:0;
    padding:0px 55px 0px 20px;
    font-size:20px;
    color:red;%
}
.searchbox-input::-webkit-input-placeholder {
    color: #d74b4b;
}
.searchbox-input:-moz-placeholder {
    color: #d74b4b;
}
.searchbox-input::-moz-placeholder {
   color: #d74b4b;
}
.searchbox-input:-ms-input-placeholder {
    color: #d74b4b;
}

.searchbox-icon,
.searchbox-submit{
    width:50px;
    height:50px;
    display:block;
    position:absolute;
    top:0;
    font-family:verdana;
    font-size:22px;
    right:0;
    padding:0;
    margin:0;
    border:0;
    outline:0;
    line-height:50px;
    text-align:center;
    cursor:pointer;
    color:#dcddd8;
    background:#172b3c;
}


  </style>
 
  <script>
//   $document.ready(function() {
//   alert("ok");
//   $(dropdown-menu).mouseover(function() {

//      $('dropdown-item').fadeIn(500);
//   }).mouseout(function(){
//      $('dropdown-item').fadeOut(500);
//   });
// });


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
</script>
</head>
<body><body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   
<!--<div class="search-container">
      <form action="/action_page.php">
       <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div> -->

<div class="container">
    <form class="searchbox">
        <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
        <input type="submit" class="searchbox-submit" value="GO">
        <span class="searchbox-icon">GO</span>
    </form>
</div>
 
</html>


<div class="container">
    <form class="searchbox">
        <input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
        <input type="submit" class="searchbox-submit" value="GO">
        <span class="searchbox-icon">GO</span>
    </form>
</div>


