<?php
  session_start();
  $name = $_SESSION["username"];
  if (!empty($name)){
    $navbar = True;
  }
?>
<!-- Bringing in CSS -->
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">

<?php include '../view/header.php'; ?>

<h1>HOME</h1>

<?php include '../view/footer.php'; ?>
