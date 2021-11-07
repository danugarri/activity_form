<!DOCTYPE html>

<?php 

//this is necesary
session_start();

if(isset($_POST["login"])){

    if($_POST["username"] == "ifp" && $_POST["pw"] == "2021"){
      
        $user_name = $_POST["username"];
        $_SESSION["user"]  = $user_name;//asigning session to logged user
        setcookie("activities_user", $user_name, time() + 86400, "/"); // persistency during 1 day
        //very important the fourth argument for setcookie since this file is in the /login directory
        
        /* Si se utiliza '/', la cookie estará disponible en la totalidad del domain. Si se configura como '/foo/',
         la cookie sólo estará disponible dentro del directorio /foo/ y todos sus sub-directorios en el domain, 
         tales como /foo/bar/. El valor por defecto es el directorio actual en donde se está configurando la cookie.
         */
        //redirection
        header("Location: ../index.php");
        exit();
    }
    else{
        $error='El nombre de usuario o la contraseña son incorrectos ';
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleSheet" type="text/css" href="login.css">
    <title>login</title>
</head>
<body>
    <body>
 
  <main class="container">
      <!--html form-->
      <section id="form-box">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                <h1>LOGIN</h1>
                <label for="username" >Usuario</label>
                <input type="text" name="username" placeholder="Usuario" required/><br/>
                <label for="pw">Contraseña</label>
                <input type="password" name="pw" placeholder="Contraseña" required/>
                <input type="submit" value="login" name="login"/>
            </form>
        </section>
        <section id="error">
        <?php 
        //this if is a way to avoid an error for not to initialise $error
        if(isset($error)){
            echo '<script src="error.js"></script>';//to show the error 
            echo $error ;
        }
        ?>
        </section>
  </main>
</body>
</html>



