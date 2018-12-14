<?php
$meta = array('title' => $content->title);
include $_SERVER['DOCUMENT_ROOT'] . '/templates/inc/header.php';
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
      <div class="article row row_wrp">
         <div class="col-12">
            <?php echo $content->text; ?>
            <h2>Специальные символы</h2>
            <p>
               Список cпециальных символов: <code>[ \ ^ $ . | ? * + ( )</code>
            </p>
            <p>
               Их необходимо экранировать. Чтоб экранировать спецсимвол, ставим перед ним обратный слеш <code>\</code>
            </p>
            <p>
               <code>[</code> - открывающая скобка набора и диапазона
            </p>

         </div>
      </div>
   </article>
</main>
<!--/MAIN-->

<?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/inc/footer.php'; ?>