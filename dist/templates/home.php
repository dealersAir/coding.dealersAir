<?php
$meta = array('title' => 'Шпаргалка программиста. Решение практических задач в программировании');
include $_SERVER['DOCUMENT_ROOT'] .'/templates/inc/header.php';
?>

<!--MAIN/-->
<main class="main">
   <div class="section">
      <article class="row row_wrp">
         <div class="col-12">
            <h1 class="title">Шпаргалка программиста, решение практических задач</h1>
         </div>
         <div class="article col-12">
            <?php 
            foreach ($home->getAllCategories() as $cat) {
               $posts = $home->getPosts($cat->id);

               if (!empty($posts)) {
            ?>
               <h2><?php echo $cat->title; ?></h2>
               <ul class="list">
                  <?php foreach ($posts as $post) { ?>
                  <li><a href="<?php echo $post->url; ?>" class="link"><?php echo $post->title; ?></a></li>
                  <?php } ?>
               </ul>
            <?php } } ?>
         </div>
      </article>
   </div>
</main>
<!--/MAIN-->

<?php
include $_SERVER['DOCUMENT_ROOT'] .'/templates/inc/footer.php';
?>