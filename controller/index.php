<?php

  //Pulling in the databases
  require('../model/database.php');
  require('../model/helpers.php');

  //Setting a default action
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
          $action = 'home';
      }
  }

   switch ($action) {

     //This case will bring the user to the page that shows all of the prisoners
    case 'home':
      include('home.php');
      break;
   }

?>
