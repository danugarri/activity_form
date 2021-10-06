<!--this file contain some logic related to the new activity we are adding-->
<?php include 'activity.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleSheet" type="text/css" href="style.css">
    <title>Actividad uf1</title>
</head>
<body>
  
  <!--isset() method-->
  <?php 
  /*if it finds a method="POST" with the indicated name="crear-actividad"*/
  if(isset($_POST['crear-actividad']))
  {
    
    /*creating an instance for the class Activity declared in activity.php*/
    $add_activity= new Activity($_POST['title'],$_POST['date'],$_POST['city'],$_POST['type']);
    //strtolower() method : to transform a string into lower cases
    $activity_image= strtolower($_POST['type']).'.jpg';//this recibe the 'type' name from <option>
  
    //showing on the page
    echo "<div class='container'><main><div>$add_activity->title</div><br/><div>$add_activity->date</div><br/><div> $add_activity->type</div>
    <br/><div>$add_activity->city</div><br/><div> <img src='./src/$activity_image' alt='imagen-actividad'/></div></main></div>";

  }
  ?>
  <!--html fomr-->
  <section class="container">
   
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
    <h1>Actividades</h1>
        <label for="title">T&iacute;tulo</label>
        <input type="text" name="title" placeholder="T&iacute;tulo"/><br/>
        <label for="date">Fecha</label>
        <input type="date" name="date"/><br/>
        <label for="city">Ciudad</label>
        <input type="text" name="city" placeholder="Ciudad"/><br/>
        <label for="type">Tipo</label>
        <!-- El tipo de actividad será un desplegable en el que solo estarán disponibles las siguientes
        opciones: Cine, Comida, Copas, Cultura, Música y Viajes -->
        <select name="type">
          <option selected>Selecciona el tipo de actividad</option>
          <option>Cine </option>
          <option>Comida</option>
          <option>Copas</option>
          <option>Cultura</option>
          <option>Musica</option>
          <option>Viajes</option>
        </select><br/>
        <input type="radio" name="access" />
        <label for="access">Acceso p&uacute;blico y gratuito</label><br/>
        <input type="submit" value="Crear actividad" name="crear-actividad"/>
    </form>
</section>
</body>
</html>