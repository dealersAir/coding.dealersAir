<?php
$meta = array('title' => $content->title);
include $_SERVER['DOCUMENT_ROOT'] . '/templates/inc/header.php';
?>

<!--MAIN/-->
<main class="main">

   <div class="row row_wrp">
      <h1 class="title">
         <?php echo $content->title; ?>
      </h1>
      <div class="content">
         <?php echo $content->text; ?>
      </div>
   </div>

</main>
<!--/MAIN-->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/inc/footer.php'; ?>