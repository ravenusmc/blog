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

    <h2>Select A Topic</h2>

    <form action="index.php" method="post" class="col s4">
      <input type="hidden" name="action" value="see_topic" />
      <select name="name" class="browser-default">
        <?php foreach ($topics as $topic) : ?>
          <option value='<?php echo $topic['topic_id'] ?>'><?php echo $topic['topic']; ?></option>
        <?php endforeach; ?>
      </select>
      <input type="submit" value="See Discussion" />
    </form>


  </section>




</main>
<!-- End of Main Section -->


<?php include '../view/footer.php'; ?>
