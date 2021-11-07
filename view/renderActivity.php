 <?php if(isset($_POST["crear-actividad"])): 
          
          // muy importante. la variable que recorre el array no puede estar definida previamente debe ser una iventada?>
        <?php foreach($_SESSION["activities"] as $actividades):
          echo '<script type="text/javascript" src="main.js"></script>';//change the display none property
          $unserializedActivity= unserialize($actividades);
          
          ?>
      
          <!-- showing on the page -->
          <div class ='activity'> 
            <div class= 'acitivity-line'><?php echo $unserializedActivity->title ?></div><br/>
            <div ><?php echo $unserializedActivity->date ?></div><br/>
            <div ><?php echo $unserializedActivity->type ?></div><br/>
            <div ><?php echo $unserializedActivity->city ?></div><br/>
            <div ><img src='./src/<?php echo $unserializedActivity->image ?>' alt='imagen-actividad'/></div>
            <div><?php echo $unserializedActivity->free ?></div>
          </div>
        
         <?php endforeach ?>
         <?php endif ?>