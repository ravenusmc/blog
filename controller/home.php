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

<!-- start of main section -->
<main>

  <div class="row">

    <div class="col s3">
      <div class="card-panel orange lighten-2">
        <span class="white-text">Share you ideas with others...
        </span>
      </div>
    </div>

    <div class="col s3">
      <div class="card-panel orange lighten-2">
        <span class="white-text">Argue with others...
        </span>
      </div>
    </div>

    <div class="col s3">
      <div class="card-panel orange lighten-2">
        <span class="white-text">Be inspired by new ideas...
        </span>
      </div>
    </div>

  </div>

</main>
<!-- End of Main Section -->


<?php include '../view/footer.php'; ?>
