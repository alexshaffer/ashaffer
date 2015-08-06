<div id="contact">
	<div class="close_contact"></div>
	<header class="contact">
		<?= Html::anchor('/', Asset::img('logo_white.svg', array('onerror' => 'logo_white.png', 'id' => 'logo'))); ?>
	</header>
	<h2><span>Contact Me</span></h2>
	<div class="form">
		<div class="input">
			<label>First Name:</label>
			<input type="text" name="first_name">
		</div
		><div class="input">
			<label>Last Name:</label>
			<input type="text" name="last_name">
		</div
		><div class="input">
			<label>Email:</label>
			<input type="email" name="email">
		</div
		><div class="input number">
			<label>Phone Number:</label>
			<div class="mobile_input">
				<span>(</span><input type="text" maxlength="3" name="mobile[]" placeholder="###"><span>)</span><input type="text" maxlength="3" name="mobile[]" placeholder="###"><span>-</span><input type="text" maxlength="4" name="mobile[]" placeholder="####">
			</div>
		</div>
		<div class="textarea">
			<label>Message:</label>
			<textarea name="message"></textarea>
		</div>
		<button class="white">Send</button>
	</div>
</div>