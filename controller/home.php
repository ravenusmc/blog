<?php
  session_start();
  $name = $_SESSION["username"];
  if (!empty($name)){
    $navbar = True;
  }
?>
<!-- Bringing in CSS -->
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="../assets/css/home.css">

<?php include '../view/header.php'; ?>

<main>
</main>


<?php include '../view/footer.php'; ?>
