<?php
  // Start the session
  session_start();
  //Pulling in the databases
  require('./model/database.php');
  require('./model/helpers.php');

  global $db;
  $message = "";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    //Getting the password from the database
    $query = "SELECT * FROM users
              WHERE userName = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $user = $statement->fetch();
    //Setting the user_table variable to store the password for the verify function
    $user_table_password = $user['password'];
    //Verifing the password from the database.
    $valid_password = password_verify($password, $user_table_password);
    if ($valid_password) {
      $user = get_one_user($username, $user_table_password);
      $_SESSION["username"] = $username;
      $_SESSION["user_id"] = $user['user_id'];
      header("location: controller/index.php");
      exit();
    }else {
      $message = '<label>Password is Wrong!</label>';
    }
  }
?>
<?php include 'view/header.php'; ?>
<!-- have to include this link to get the css to apply to this file -->
<!-- <link rel="stylesheet" type="text/css" href="./assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="./assets/css/landing.css"> -->
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
      <div class="input-field col s12">
        <input name='username' id="username" type="text" class="validate">
        <label for="username">Username</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input name='password' id="password" type="password" class="validate">
        <label for="password">Password</label>
      </div>
    </div>
    <button type="submit" name="login" class="btn btn-primary form-submit-btn">Login</button>
    <a class="waves-effect waves-light btn" href="signup.php">Sign Up</a>
  </form>
</div>

<?php include 'view/footer.php'; ?>
