<?php

  session_start();
  $name = $_SESSION["username"];
  $id = $_SESSION["user_id"];
  if (!empty($name)){
    $navbar = True;
  }

?>
 <!-- Bringing in CSS -->
 <link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
 <link rel="stylesheet" type="text/css" href="../assets/css/see_topic.css">

<!-- including header file -->
 <?php include '../view/header.php'; ?>

<!-- Start of header -->
<header class='see_topic_header'>
  <div>
    <h5 class='center'>Comments about <?php echo $topic['topic']; ?></h5>
  </div>
</header>
<!-- End of Header -->

<!-- start of main section -->
<main>

  <section id='section_one'>
    <!-- Start of form -->
    <form action="index.php" method="post" class="topic_selection_form">

      <input type="hidden" name="action" value="add_comment" />

      <input type="hidden" name="topic_id" value="<?php echo $topic['topic_id']; ?>" />

      <div class="row">
        <div class="input-field col s12">
          <textarea name='comment' id="comment" class="materialize-textarea"></textarea>
          <!-- <input name='comment' id="comment" type="text" class="validate" /> -->
          <label for="comment">Comment</label>
        </div>
      </div>
      <button type="submit" name="add_comment" class="btn btn-primary form-submit-btn">Add Comment</button>
      <br>

    </form>
    <!-- End of form -->
  </section>

  <section id='section_two'>
    <iframe>
    <?php foreach ($commments as $commment) : ?>
    <div class="row">
      <div class="col s12 m6">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <p><?php echo $commment['username'] ?> said:</p>
            <span class="card-title"><?php echo $commment['comment'] ?></span>
            <p><?php echo $commment['city'] ?>, <?php echo $commment['state'] ?></p>
          </div>
          <div class="card-action">
            <a href="#">Up Vote</a>
            <a href="#">Down Vote</a>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    </iframe>

  </section>

</main>
<!-- End of main section -->




<!-- Java Script File -->
<script type="text/javascript" src='../assets/js/support.js'></script>
<?php include '../view/footer.php'; ?>
