<?require_once("./dev/class.php");?>
<?IncludeStyles::addElement('form');?>
<?IncludeScripts::addElement('form');?>
<?IncludeScripts::addElement('./libs/maskedinput/jquery.maskedinput.min', true);?>

<form action="/" class="form">
	<h3 class="h3">Оставить заявку</h3>
	<div class="form__description">
		Равным образом реализация намеченных плановых заданий
	</div>
	<div class="form__group">
		<div class="form__row">
			<div class="form__item">
				<div class="form__inputtext">
					<input type="email" class="form__field form__email"/>
					<div class="form__label">E-mail</div>
				</div>
				<div class="form__errorblock" style="display: none;"></div>
			</div>
		</div>
		<div class="form__row">
			<div class="form__item">
				<div class="form__inputtext">
					<input type="tel" class="form__field form__phone"/>
					<div class="form__label">Телефон</div>
				</div>
			</div>
		</div>
		<div class="form__row">
			<div class="form__item">
				<input type="submit" class="button button__orange form__sumbit" value="Отправить" />
			</div>
		</div>
	</div>
</form>
