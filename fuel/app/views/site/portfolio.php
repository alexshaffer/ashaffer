<div class="burger_icon black"></div>
<header class="about">
	<img src="<?= Uri::create('assets/img/logo_black.png') ?>">
</header>
<div id="home">
	<div class="segments">
		<div class="segment portfolio">
			<h2><span>Portfolio</span></h2>
			<div id="portfolio">
				<div class="piece">
					<div class="arrow left_arrow">
					</div>
					<div class="project_container" data-total="<?= $portfolio_pieces[$primary_piece]->total_imgs ?>">
						<div class="project">
							<h3>Project: <?= $primary_piece ?></h3>
							<?= $portfolio_pieces[$primary_piece]->url ? Html::anchor($portfolio_pieces[$primary_piece]->url, '<button>Visit Site</button>') : '<span class="development">In Development *</span>' ?>
						</div>
						<div class="screenshot">
							<img src="<?= Uri::create("assets/img/portfolio/{$portfolio_pieces[$primary_piece]->img}screenshot_1.png") ?>">
						</div>
					</div>
					<div class="arrow right_arrow" <?= $portfolio_pieces[$primary_piece]->total_imgs == 1 ? 'style="display:none;"' : null ?>>
					</div>
				</div>
				<?php foreach ($portfolio_pieces as $piece => $data) : if($piece != $primary_piece) : ?>
					<div class="piece">
						<div class="arrow left_arrow">
						</div>
						<div class="project_container" data-total="<?= $data->total_imgs ?>">
							<div class="project">
								<h3>Project: <?= $piece ?></h3>
								<?= $data->url ? Html::anchor($data->url, '<button>Visit Site</button>') : '<span class="development">In Development *</span>' ?>
							</div>
							<div class="screenshot">
								<img src="<?= Uri::create("assets/img/portfolio/{$data->img}screenshot_1.png") ?>">
							</div>
						</div>
						<div class="arrow right_arrow" <?= $data->total_imgs == 1 ? 'style="display:none;"' : null ?>>
						</div>
					</div>
				<?php endif; endforeach; ?>
			</div>
		</div>
	</div>
	<div class="contact_me">
		<h2>Have a great idea or project? Lets Chat!</h2>
		<?= Html::anchor('#contact', '<button class="contact">Contact Me</button>') ?>
	</div>
</div>