<div class="burger_icon white"></div>
<div id="home">
	<div class="segments">
		<div class="segment disciplines">
			<h2><span>Disciplines</span></h2>
			<div class="disciplines_list">
				<div class="discipline">
					<div class="icon user_interface"></div>
					<h3>User Interface</h3>
					<p>Awesome interfaces are more than aesthetics. They are inutive systems that solve complex problems for users. The best interfaces are the ones you can actually use!</p>
				</div
				><div class="discipline">
					<div class="icon user_experience"></div>
					<h3>User Experience</h3>
					<p>Amazing user experiences build the users confidence so they never ask “how do I do this?” The best user experiences are not only easy to use but fun!</p>
				</div
				><div class="discipline">
					<div class="icon product_strategy"></div>
					<h3>Product Strategy</h3>
					<p>All ideas need to be discussed, debated and planned to become great products.</p>
				</div>
			</div>
		</div>
		<div class="segment services">
			<h2><span>Services</span></h2>
			<div class="services_list">
				<div class="service">
					<div class="icon"></div>
					<h3>Website &amp; App Design</h3>
					<p>The design is crafted around the pulse of the company.</p>
				</div
				><div class="service">
					<div class="icon"></div>
					<h3>Mobile Site &amp; App Design</h3>
					<p>The design is crafted around the pulse of the company.</p>
				</div>
			</div>
		</div>
		<div class="segment portfolio">
			<h2><span>Portfolio</span></h2>
			<div id="portfolio">
				<?php foreach ($portfolio_pieces as $piece => $data) : ?>
					<div class="piece">
						<div class="arrow left_arrow">
						</div>
						<div class="project_container">
							<div class="project">
								<h3>Project: <?= $data->name ?></h3>
								<?= Html::anchor($data->url, '<button>Visit Site</button>') ?>
							</div>
							<div class="screenshot">
								<img src="<?= Uri::create("assets/img/portfolio/{$piece}/screenshot_1.png") ?>">
							</div>
						</div>
						<div class="arrow right_arrow">
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<div class="contact_me">
		<h2>Have a great idea or project? Lets Chat!</h2>
		<button>Contact Me</button>
	</div>
</div>