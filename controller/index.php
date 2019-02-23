<?php

  session_start();
  $name = $_SESSION["username"];
  if (!empty($name)){
    $allowed = True;
  }

  //Pulling in the databases
  require('../model/database.php');
  require('../model/helpers.php');
  require('../model/topics.php');

  //Setting a default action
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
          $action = 'home';
      }
  }

  if ($allowed){
    switch ($action) {
      //This case will bring the user to the home page
      case 'home':
        $topics = get_all_Topics();
        include('home.php');
        break;
      //This case will bring the user to the page to see all of the topics 
      case 'see_topic':
        include('see_topic.php');
        break;
    }
  }else {
    include('notAllowed.php');
  }



?>
