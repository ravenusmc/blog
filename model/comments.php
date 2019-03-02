<?php

  //This file will contain all of the code to get information out of the
  //comments table.

  //This function will get all comments by topic.
  function get_all_comments_by_topic($topic_id) {
    global $db;
    $query = 'SELECT *
              FROM comments c
              JOIN users u on u.user_id = c.user_id
              WHERE topic_id = :topic_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':topic_id', $topic_id);
    $statement->execute();
    $comments = $statement->fetchAll();
    $statement->closeCursor();
    return $comments;
  }

  function add_comments($comment, $topic_id, $user_id, $votes){
      global $db;
      $query = 'INSERT INTO comments
                    (comment, topic_id, user_id, votes)
                  VALUES
                    (:comment, :topic_id, :user_id, :votes)';
      $statement = $db->prepare($query);
      $statement->bindValue(':comment', $comment);
      $statement->bindValue(':topic_id', $topic_id);
      $statement->bindValue(':user_id', $user_id);
      $statement->bindValue(':votes', $votes);
      $statement->execute();
      $statement->closeCursor();
  }

?>
