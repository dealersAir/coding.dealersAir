<?php
$meta = array('title' => $content->meta_title);
include $_SERVER['DOCUMENT_ROOT'] .'/templates/inc/header.php';
?>

<!--MAIN/-->
<main class="main">
   <article class="section">
      <div class="row row_wrp">
         <div class="col-12">
            <h1 class="title">
               <?php echo $content->title; ?>
            </h1>
         </div>
      </div>
      <?php if (!empty($content->text)) ?>
      <div class="article row row_wrp">
         <div class="col-12">
            <?php echo $content->text; ?>
         </div>
      </div>
   </article>
   <div class="section">
      <div class="row row_wrp">
         <div class="col-12">
            <ul class="list">
               <?php foreach ($main->getPosts() as $post) { ?>
               <li><a href="<?php echo $post->url; ?>" class="link"><?php echo $post->title; ?></a></li>
               <?php } ?>
            </ul>
         </div>
      </div>
   </div>
</main>
<!--/MAIN-->

<?php include $_SERVER['DOCUMENT_ROOT'] .'/templates/inc/footer.php'; ?>