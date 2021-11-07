<?php session_start();

//LOGIN
if(!isset($_SESSION["user"])){//if there is no session
  if(isset($_COOKIE["activities_user"])){//if the $_COOKIE[] variable is defined
    
    $_SESSION["user"] = $_COOKIE["activities_user"];
  }
}
if(!isset($_SESSION["user"])){
   //begin with the login page

    header("Location: login/login.php");// muy importante la L en mayúscula y los : ponerlos seguidos sin espacio
    exit();

  
}
  //checking if there is not a session
if(!isset($_SESSION["activities"])){

  $_SESSION["activities"] = array();
}
    //checking if the submit button has been clicked
if(isset($_POST["crear-actividad"])){
  if(isset($_POST['access'])){

    $free= "<h3>Gratuita</h3>";
    $activity_image= strtolower($_POST['type']).'.jpg';
    $add_activity= new Activity($_POST['title'],$_POST['date'],$_POST['city'],$_POST['type'],$free,$activity_image);
   
    $serializedActivity = serialize($add_activity);
    array_push( $_SESSION["activities"],$serializedActivity );
  }
  else{
    $free=null;
    $activity_image= strtolower($_POST['type']).'.jpg';
    $add_activity= new Activity($_POST['title'],$_POST['date'],$_POST['city'],$_POST['type'],$free,$activity_image);
    
    $serializedActivity = serialize($add_activity);
    array_push( $_SESSION["activities"],$serializedActivity );
  }

}
?>

