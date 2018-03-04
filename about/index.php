<?php
require $_SERVER['DOCUMENT_ROOT'].'/load.php';
$get = new Page();
$get->meta = array('title' => '«dealersAir» — интернет-проекты и сервисы', );
require $_SERVER['DOCUMENT_ROOT'].'/templates/header.php';
?>

<div class="container wrap">
	<h1 class="title c-yellow pad"></h1>
	
</div>

<div class="container bg-2b">
	<div class="wrap">
		<div class="title-h2 c-yellow pad ta-c mb-15">Оставьте заявку на веб-разработку</div>
		<div class="txt ta-c mb-35">Отправьте нам ссылки на макеты и на техническое задание,<br> предварительно загрузив их на гугл диск, яндекс диск или другой файлообменник.<br> Мы рассчитаем стоимость разработки, составим смету и отправим ее вам на e-mail.</div>

		<?php include $_SERVER['DOCUMENT_ROOT'].'/include/request-form.php';?>
		
	</div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>