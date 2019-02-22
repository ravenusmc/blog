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

    <p>test area</p>
    <?php foreach ($topics as $topic) : ?>
      <p><?php echo $topic['topic']; ?></p>
    <?php endforeach; ?>

    <form action="index.php" method="post">
      <label>Please Select a Topic:</label>
      
      <select name="topics">
        <?php foreach ($topics as $topic) : ?>
        <option value='<?php echo $topic['topic_id'] ?>'>
          <?php echo $topic['topic']; ?></option>
        <?php endforeach; ?>
      </select><br>

      <input type="submit" value="topic" />
    </form>

  </section>

</main>
<!-- End of Main Section -->


<?php include '../view/footer.php'; ?>
