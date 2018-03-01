<?php
require $_SERVER['DOCUMENT_ROOT'].'/load.php';
$get = new Page();
$get->meta = array('title' => 'Интернет-проекты и сервисы. Веб-разработка', );
require $_SERVER['DOCUMENT_ROOT'].'/templates/header.php';
?>

<div class="container wrap">
	<h1 class="title c-yellow pad">Веб-разработка</h1>
	<div class="row bb-l-gray">
		<div class="col-3">
			<div class="title-h2 mb-5">Frontend</div>
			<div class="txt c-gray">HTML/CSS/JavaScript</div>
		</div>
		<div class="col-7">
			<div class="txt">
				Качественная верстка сайтов и веб-приложений по вашему дизайн-макету, с&nbsp;применением современных стандартов HTML5 и CSS3. Адаптирование под различные размеры устройств: смартфон, планшет, монитор компьютера... Программирование интерактивных элементов: формы, калькуляторы, всплывающие окна... Реализация динамической графики: счетчики, таймеры, диаграммы... Применение эффектов и анимации.
			</div>
		</div>
		<div class="col-2">
			<div class="title-h2 c-green ta-r m-0">$5<span>/час</span></div>
		</div>
	</div>
	<div class="pad">
		<hr class="gray">
	</div>
	<div class="row">
		<div class="col-3">
			<div class="title-h2 mb-5">Backend</div>
			<div class="txt c-gray">PHP/SQL</div>
		</div>
		<div class="col-7">
			<div class="txt">
				Реализация серверной части сайтов и веб-приложений на языке PHP. Создание и подключение базы данных. Написание парсеров и грабберов.
			</div>
		</div>
		<div class="col-2">
			<div class="title-h2 c-green ta-r m-0">$10<span>/час</span></div>
		</div>
	</div>
	<div class="pad">
		<hr class="gray">
	</div>
	<div class="row">
		<div class="col-3">
			<div class="title-h2 mb-5">CMS</div>
			<div class="txt c-gray">WordPress</div>
		</div>
		<div class="col-7">
			<div class="txt">
				Натяжка HTML-верстки на движек WordPress.
			</div>
		</div>
		<div class="col-2">
			<div class="title-h2 c-green ta-r m-0">$7<span>/час</span></div>
		</div>
	</div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>