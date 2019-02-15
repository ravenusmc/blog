<?php
  // Start the session
  session_start();
  //Pulling in the databases
  require('./model/database.php');
  global $db;
  $message = "";
  if (isset($_POST["login"])){
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $password2 = filter_input(INPUT_POST, 'password2');
    //Hashing the password
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    $query = "SELECT * FROM users WHERE
              userName = :username AND
              password = :password";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $count = $statement->rowCount();
    if ($count > 0){
      $message = '<label>Username Taken!</label>';
    }else if ($password != $password2) {
      $message = '<label class="errorMsg">Passwords Do Not Match!</label>';
    }else {
      $query = 'INSERT INTO users
                  (userName, password)
                VALUES
                  (:username, :password)';
      $statement = $db->prepare($query);
      $statement->bindValue(':username', $username);
      $statement->bindValue(':password', $password_hashed);
      $statement->execute();
      $statement->closeCursor();
    }
  }
?>
<?php include 'view/header.php'; ?>

<!-- have to include this link to get the css to apply to this file -->
<!-- <link rel="stylesheet" type="text/css" href="./assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="./assets/css/signup.css"> -->
<div class="row">
  <form class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input id="first_name" type="text" class="validate">
        <label for="first_name">First Name</label>
      </div>
      <div class="input-field col s6">
        <input id="last_name" type="text" class="validate">
        <label for="last_name">Last Name</label>
      </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="password" type="password" class="validate">
        <label for="password">Password</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
  </form>
</div>
