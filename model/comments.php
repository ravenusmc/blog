<?php

  //This file will contain all of the code to get information out of the
  //comments table.


  //This function will get all comments by topic.
  function get_all_comments_by_topic($topic_id) {
    global $db;
    $query = 'SELECT * FROM comments
              WHERE topic_id = :topic_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':topic_id', $topic_id);
    $statement->execute();
    $comments = $statement->fetchAll();
    $statement->closeCursor();
    return $comments;
  }

?>
