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