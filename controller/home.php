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

  <section class='section_one'>
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
  </section>

  <section class='section_two'>

    <form action="index.php" method="post">
      <label>Please Select a Topic:</label>
      <select name="officers">
        <?php foreach ($officers as $officer) : ?>
        <option value='<?php echo $officer['officer_id'] ?>'>
          <?php echo $officer['first']; ?> <?php echo $officer['last']; ?></option>
        <?php endforeach; ?>
      </select><br>
    </form>

  </section>

</main>
<!-- End of Main Section -->


<?php include '../view/footer.php'; ?>
