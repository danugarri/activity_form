<?php include 'model/activity.php'?>
<?php include 'controller/session.php'?>


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
  <header id="header">
    <span class="user">
      <?php echo 'Bienvenido ' .$_SESSION["user"] //showing the userName after login?>
   </span>
    <a class="logout" href="logout.php">Salir</a>
  </header>
  <main class="container">
      <section class="activity-box">
        <!-- showing the activities -->
       <?php include 'view/renderActivity.php'; ?>
       
      </section>
      <!--html form-->
      <section id="form-box">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <h1>Actividades</h1>
            <label for="title">T&iacute;tulo</label>
            <input type="text" name="title" placeholder="T&iacute;tulo" required/><br/>
            <label for="date">Fecha</label>
            <input type="date" name="date" /><br/>
            <label for="city" >Ciudad</label>
            <input type="text" name="city" placeholder="Ciudad" /><br/>
            <label for="type">Tipo</label>
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