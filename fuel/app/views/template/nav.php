<nav>
	<div class="close_nav">
	</div>
	<img src="<?= Uri::create('assets/img/logo_black.png') ?>">
	<ul class="nav_list">
		<?= Html::anchor('/', '<li>HOME</li>'); ?>
		<?= Html::anchor('portfolio', '<li>PORTFOLIO</li>'); ?>
		<?= Html::anchor('about', '<li>ABOUT</li>'); ?>
		<?= Html::anchor('contact', '<li>CONTACT</li>'); ?>
		<?= Html::anchor('http://linkedin.com/in/alexshaffer', '<li>LINKEDIN</li>', array('target' => '_blank')); ?>
	</ul>
</nav>