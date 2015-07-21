<div id="contact">
	<div class="close_contact"></div>
	<header class="main">
		<img src="<?= Uri::create('assets/img/logo_white.png') ?>">
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
			<input type="text" maxlength="3" name="mobile[]"><input type="text" maxlength="3" name="mobile[]"><input type="text" maxlength="4" name="mobile[]">
		</div>
		<div class="textarea">
			<label>Message:</label>
			<textarea name="message"></textarea>
		</div>
		<button class="white">Send</button>
	</div>
</div>