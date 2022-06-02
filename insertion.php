
<!-- 
<a href="visualiser.php"> la page d’visualiser </a>  -->
<?php
//var_dump($_POST);
if(isset($_POST['submit']))
{

    
    try
    {
        $base=new PDO('mysql:host=127.0.0.1:3306,dbname=test,charset=utf8','root','');
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "connection success";
        $sert="INSERT INTO test.conblog (titre,date,commentaire,photo) values (?,?,?,?)";
        $result=$base->prepare($sert);

        $t = htmlentities(addslashes($_POST['titre']),ENT_QUOTES);
        $d = date("Y-m-d H:i:s");
        $c = htmlentities(addslashes($_POST['commentaire']),ENT_QUOTES);
        $i = $_FILES['photo']['name'];
        echo  $t." ".$d." ";
        echo  $c." ".$i;
        $result->execute(array($t,$d,$c,$i));
    }
   catch(Exception $e)
    {
        die('erreur:'.$e->getmessage());
    }
            
        
        /*:t,:d,:c,:p)";*/
       /* $query = $pdo->prepare($query);
    $query->execute(array($name,$email,$password,$dob,$gender));*/
     /* $result->execute(array('t'=>$t,
                            'd'=>$d,
                            'c'=>$c,
                            'p'=>$i ) ); */
   // echo $result;
  
    if(isset($_FILES['photo']))
    {
        $errors= array();
        $file_name=$_FILES['photo']['name'];
        $file_type=$_FILES['photo']['type'];
        $file_size=$_FILES['photo']['size'];
        $file_tmp=$_FILES['photo']['tmp_name'];
        $exploded = explode('.',$_FILES['photo']['name']);
        $file_ext=strtolower(end($exploded)); 
      //  $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
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
 //   mysql_close($base);  
}



//echo $sert;
//$reponse=mysqli_query('$sert,$base');
//echo $reponse;
/*$resultat=mysqli_insert_id($base);  
/* Fermeture de la connexion */  
/*  */

?>
