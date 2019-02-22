<?php

  //The functions in this file will be to get data from the topics table.

  //This function will get all the topics from the topics table.
  function get_all_Topics(){
    global $db;
    $query = "SELECT * FROM topics
              ORDER BY topic_id";
    $statement = $db->prepare($query);
    $statement->execute();
    $topics = $statement->fetchAll();
    $statement->closeCursor();
    return $topics;
  }



?>
