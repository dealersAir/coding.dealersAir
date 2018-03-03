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

<div class="container bg-2b">
	<div class="wrap">
		<h1 class="title-h2 c-yellow pad ta-c mb-15">Оставьте заявку на веб-разработку</h1>
		<div class="txt ta-c mb-35">Отправьте нам ссылки на макеты и на техническое задание,<br> предварительно загрузив их на гугл диск, яндекс диск или другой файлообменник.<br> Мы рассчитаем стоимость разработки, составим смету и отправим ее вам на e-mail.</div>
		<form id="request-form" action="/functions/send-mail.php" method="POST" autocomplete="off" class="form form_v1">
			<div class="row">
				<div class="col-6">
					<div class="form__field">
						<label class="overlabel">Ваше имя</label>
						<input type="text" name="name" data-required="true" class="form__text-input" value="">
						<div class="form__error-tip">Введите имя</div>
					</div>
				</div>
				<div class="col-6">
					<div class="form__field">
						<label class="overlabel">E-mail</label>
						<input type="text" name="email" data-type="email" data-required="true" class="form__text-input" value="">
						<div class="form__error-tip" data-second-error-text="Некорректный E-mail">Введите E-mail</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="form__field">
						<label class="overlabel">Сообщение</label>
						<textarea name="message" data-required="true" class="form__textarea"></textarea>
						<div class="form__error-tip">Оставьте сообщение</div>
					</div>
				</div>
			</div>
			<div class="ta-c">
				<button type="submit" class="button button_red">Отправить</button>
			</div>
		</form>
	</div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>