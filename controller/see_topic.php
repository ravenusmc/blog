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


<header class='see_topic_header'>
  <div>
    <h5 class='center'>Comments about <?php echo $topic['topic']; ?></h5>
  </div>
</header>

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

  <section>

</main>
<!-- End of main section -->




<!-- Java Script File -->
<script type="text/javascript" src='../assets/js/support.js'></script>
<?php include '../view/footer.php'; ?>
