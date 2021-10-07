<?php 
      //isset() method
      /*if it finds a method="POST" with the indicated name="crear-actividad"*/
      if(isset($_POST['crear-actividad']))
      {
        //changing the DOM
        //changing the activity box to visible
        echo '<script type="text/javascript" src="main.js"></script>';
        //Controlling user input
        //if radio button is checked
          if(isset($_POST['access'])){//without isset() it will return a warning
            //var_dump('opcion1');
          $free='<h3>Gratuita</h3>';
          /*creating an instance for the class Activity declared in activity.php*/
          $add_activity= new Activity($_POST['title'],$_POST['date'],$_POST['city'],$_POST['type'],$free);
          //strtolower() method : to transform a string into lower cases
          $activity_image= strtolower($_POST['type']).'.jpg';//this recibe the 'type' name from <option>
          
          //showing on the page
          echo "<div>$add_activity->title</div><br/><div>$add_activity->date</div><br/>
          <br/><div>$add_activity->city</div><br/><div>$free</div></section>";
        }
        //radio button on and option selected
        else if(isset($_POST['access']) && isset($_POST['type'])){
          //var_dump('opcion2');
          $free='<h3>Gratuita</h3>';
          /*creating an instance for the class Activity declared in activity.php*/
          $add_activity= new Activity($_POST['title'],$_POST['date'],$_POST['city'],$_POST['type'],$free);
          //strtolower() method : to transform a string into lower cases
          $activity_image= strtolower($_POST['type']).'.jpg';//this recibe the 'type' name from <option>
          
          //showing on the page
          echo "<div>$add_activity->title</div><br/><div>$add_activity->date</div><br/><div> $add_activity->type</div>
          <br/><div>$add_activity->city</div><br/><div><img src='./src/$activity_image' alt='imagen-actividad'/></div><div>$free</div>";
        }
        //if radio button is not on, but an option is selected
        else if( isset($_POST['type'])&& $_POST['type']!='Selecciona el tipo de actividad' ){
          //var_dump('opcion3');
          /*creating an instance for the class Activity declared in activity.php*/
          $add_activity= new Activity($_POST['title'],$_POST['date'],$_POST['city'],$_POST['type'],null);
          //strtolower() method : to transform a string into lower cases
          $activity_image= strtolower($_POST['type']).'.jpg';//this recibe the 'type' name from <option>
          
          //showing on the page
          echo "<div>$add_activity->title</div><br/><div>$add_activity->date</div><br/><div> $add_activity->type</div>
          <br/><div>$add_activity->city</div><br/><div><img src='./src/$activity_image' alt='imagen-actividad'/></div>";
        }
        //if radio button is not checked
        else {
          //var_dump('opcion4');
          $free=null;
          /*creating an instance for the class Activity declared in activity.php*/
          $add_activity= new Activity($_POST['title'],$_POST['date'],$_POST['city'],$_POST['type'],$free);
          
          //showing on the page
          echo "<div>$add_activity->title</div><br/><div>$add_activity->date</div><br/><div>
          <br/><div>$add_activity->city</div>";
        }
      }
      ?>