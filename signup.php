<?php

  // Start a session
  if (!isset($_SESSION)) {
    session_start();
  }
  //Pulling in the databases
  require('./model/database.php');
  global $db;
  $message = "";
  if (isset($_POST["login"])){
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $username = filter_input(INPUT_POST, 'username');
    $email = filter_input(INPUT_POST, 'email');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip = filter_input(INPUT_POST, 'zip');
    $password = filter_input(INPUT_POST, 'password');
    $password2 = filter_input(INPUT_POST, 'password2');

    //Hashing the password
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);


  }
?>
<?php include 'view/header.php'; ?>

<!-- have to include this link to get the css to apply to this file -->
<!-- <link rel="stylesheet" type="text/css" href="./assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="./assets/css/signup.css"> -->

<div class="row">
  <!-- Start of error handling -->
  <?php
    if (isset($message)){
      echo $message;
    }
  ?>
  <!-- End of error handling -->
  <form method="post" class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <!-- <input name='firstname' id="first_name" type="text" class="validate"> -->
        <input type="text" name='firstname' class="validate" id="firstname">
        <label for="first_name">First Name</label>
      </div>
      <div class="input-field col s6">
        <input name='lastname' id="last_name" type="text" class="validate">
        <label for="last_name">Last Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input name='username' id="email" type="email" class="validate">
        <label for="email">Username</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input name='email' id="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input name='city' id="first_name" type="text" class="validate">
        <label for="first_name">City</label>
      </div>
      <div class="input-field col s6">
        <input name='state' id="last_name" type="text" class="validate">
        <label for="last_name">State</label>
      </div>
      <div class="input-field col s6">
        <input name='zip' id="last_name" type="text" class="validate">
        <label for="last_name">Zip</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input name='password' id="password" type="password" class="validate">
        <label for="password">Password</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input name='password2' id="password2" type="password" class="validate">
        <label for="password2">Confirm Password</label>
      </div>
    </div>
    <button type="submit" name="login" class="btn btn-primary form-submit-btn">Sign Up</button>
  </form>
</div>

<?php include 'view/footer.php'; ?>
