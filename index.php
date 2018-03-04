<?php
require $_SERVER['DOCUMENT_ROOT'].'/load.php';
$get = new Page();
$get->meta = array('title' => 'Веб-разработка. Интернет-проекты и сервисы.', );
require $_SERVER['DOCUMENT_ROOT'].'/templates/header.php';
?>

<div class="container wrap">
	<h1 class="title c-yellow pad">Веб-разработка</h1>
	<div class="row bb-l-gray">
		<div class="col-3">
			<h2 class="title-h2 mb-5">Frontend</h2>
			<div class="txt c-gray">HTML/CSS/JavaScript</div>
		</div>
		<div class="col-7">
			<div class="txt">
				Качественная верстка сайтов и веб-приложений по вашему дизайн-макету, с&nbsp;применением современных стандартов HTML5 и CSS3. Адаптирование под различные размеры устройств: смартфон, планшет, монитор компьютера... Программирование интерактивных элементов: формы, калькуляторы, всплывающие окна... Реализация динамической графики: счетчики, таймеры, диаграммы... Применение эффектов и анимации.
			</div>
		</div>
		<div class="col-2">
			<div class="title-h2 c-green ta-r m-0">$7<span>/час</span></div>
		</div>
	</div>
	<div class="pad">
		<hr class="gray">
	</div>
	<div class="row">
		<div class="col-3">
			<h2 class="title-h2 mb-5">Backend</h2>
			<div class="txt c-gray">PHP/SQL</div>
		</div>
		<div class="col-7">
			<div class="txt">
				Реализация серверной части сайтов и веб-приложений на языке PHP. Создание и подключение базы данных. Написание парсеров и грабберов.
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
			<h2 class="title-h2 mb-5">CMS</h2>
			<div class="txt c-gray">WordPress</div>
		</div>
		<div class="col-7">
			<div class="txt">
				Натяжка HTML-верстки на движок WordPress.
			</div>
		</div>
		<div class="col-2">
			<div class="title-h2 c-green ta-r m-0">$5<span>/час</span></div>
		</div>
	</div>
</div>

<div class="container bg-2b">
	<div class="wrap">
		<div class="title-h2 c-yellow pad ta-c mb-15">Оставьте заявку на веб-разработку</div>
		<div class="txt ta-c mb-35">Отправьте нам ссылки на макеты и на техническое задание,<br> предварительно загрузив их на гугл диск, яндекс диск или другой файлообменник.<br> Мы рассчитаем стоимость разработки, составим смету и отправим ее вам на e-mail.</div>

		<?php include $_SERVER['DOCUMENT_ROOT'].'/include/request-form.php';?>

	</div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>