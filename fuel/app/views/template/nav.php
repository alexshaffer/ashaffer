<nav>
	<div class="close_nav"></div>
	<?= Html::anchor('/', Asset::img('logo_black.svg', array('onerror' => 'logo_black.png', 'id' => 'logo'))); ?>
	<ul class="nav_list">
		<?= Html::anchor('/', '<li>HOME</li>'); ?>
		<?= Html::anchor('portfolio', '<li>PORTFOLIO</li>'); ?>
		<?= Html::anchor('about', '<li>ABOUT</li>'); ?>
		<li class="contact">CONTACT</li>
		<?= Html::anchor('http://linkedin.com/in/alexshaffer', '<li>LINKEDIN</li>', array('target' => '_blank')); ?>
	</ul>
</nav>