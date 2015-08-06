<div class="burger_icon black"></div>
<header class="portfolio">
	<?= Html::anchor('/', Asset::img('logo_black.svg', array('onerror' => 'logo_black.png', 'id' => 'logo'))); ?>
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
							<h3 title="<?= $primary_piece ?>">Project: <?= $primary_piece ?></h3>
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
								<h3 title="<?= $piece ?>">Project: <?= $piece ?></h3>
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
		<h2>Have a great idea or project? Let's Chat!</h2>
		<button class="contact">Contact Me</button>
	</div>
</div>