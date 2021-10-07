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
  <main class="container">
      <section class="activity-box">
        <?php 
        //isset() method
        /*if it finds a method="POST" with the indicated name="crear-actividad"*/
        if(isset($_POST['crear-actividad']))
        {
          //call to the file
          include 'inputController.php';
        }
        ?>
      </section>
      <!--html form-->
      <section id="form-box">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
            <h1>Actividades</h1>
            <label for="title">T&iacute;tulo</label>
            <input type="text" name="title" placeholder="T&iacute;tulo" required/><br/>
            <label for="date">Fecha</label>
            <input type="date" name="date" /><br/>
            <label for="city" >Ciudad</label>
            <input type="text" name="city" placeholder="Ciudad" required/><br/>
            <label for="type">Tipo</label>
            <!-- El tipo de actividad será un desplegable en el que solo estarán disponibles las siguientes
            opciones: Cine, Comida, Copas, Cultura, Música y Viajes -->
            <select name="type" >
              <option selected >Selecciona el tipo de actividad</option>
              <option>Cine </option>
              <option>Comida</option>
              <option>Copas</option>
              <option>Cultura</option>
              <option>Musica</option>
              <option>Viajes</option>
            </select><br/>
            <input type="radio" name="access" value="on"/>
            <label for="access">Acceso p&uacute;blico y gratuito</label><br/>
            <input type="submit" value="Crear actividad" name="crear-actividad"/>
        </form>
    </section>
  </main>
</body>
</html>