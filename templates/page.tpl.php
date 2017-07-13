<header id="header">
	<nav id="top-bar" class="clearfix l-fullwidth">
		<div id="logo" class="l-horiz">
			<img src="<?php print $logo; ?>">
		</div>
		<div class="l-horiz l-float-right is-uppercase">
			<div id="top-menu" class="l-horiz">
				<?php print render($page['main_menu']); ?>
			</div>
			<div id="join-us" class="l-horiz">
				<?php if ($logged_in): ?>
					<a class="is-button is-button-outlined" href="<?php base_path(); ?>user/logout">Log Out</a>
				<?php else: ?>
					<a class="is-button is-button-outlined" href="<?php base_path(); ?>user/login">Join us</a>
				<?php endif; ?>
			</div>
		</div>
	</nav>

	<div id="header-img" class="l-fullwidth is-text-centered clearfix">
		<h1 class="is-uppercase">Sharing ideas for charities</h1>
		<div id="subtitle">
			<h3>Many charities' goals are similar as is the functionality we require, but little shared woring takes place.</h3>
			<p>By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
			<h4>Together we can make a bigger difference</h4>
		</div>
	</div>
</header>
<main>
	<section id="events" class="l-section is-background-light-grey is-vertical-align-container">
		<div id="event-content">
			<h3><span class="is-colored-bold">Next Event:</span> June 23<sup>rd</sup> 2016 &nbsp; 18:30 - 21:00</h3>
			<p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
		</div>
		<div id="register-button"><a href="register" class="l-float-right is-button is-button-filled is-uppercase">Register</a></div>
	</section>
	<div class="clearfix"></div>
	<section id="get-involved" class="l-section clearfix is-text-centered">
		<h1 class="l-section-title">Get Involved</h1>
		<div class="section-content l-column-container">
			<div class="l-column3 is-column-spaced">
				<img src="<?php print $directory; ?>/images/test.jpg" alt="We help charities">
				<h3 class="is-uppercase">We do meetings</h3>
				<p>Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="is-button is-button-large is-button-outlined is-uppercase">Meetup group</a>
			</div>
			<div class="l-column3 is-column-spaced">
				<img src="<?php print $directory; ?>/images/test.jpg" alt="We help charities">
				<h3 class="is-uppercase">We do meetings</h3>
				<p>Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="is-button is-button-large is-button-outlined is-uppercase">Meetup group</a>
			</div>
			<div class="l-column3 is-column-spaced">
				<img src="<?php print $directory; ?>/images/test.jpg" alt="We help charities">
				<h3 class="is-uppercase">We do meetings</h3>
				<p>Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="is-button is-button-large is-button-outlined is-uppercase">Meetup group</a>
			</div>
		</div>
	</section>
	<section id="our-mission" class="l-section is-background-light-grey is-text-centered clearfix">
		<h1 class="l-section-title">Our mission</h1>
		<p>Charities and Partners collaborating and sharing open solutions and ideas to create value in digital space.</p>
		<p class="is-bold">If you are a charity or supplier, we are ready to welcome you.</p>
		<div class="section-content l-column-container">
			<div class="l-column3 is-column-spaced">
				<div class="mission-box">
					<span class="image-container">
						<img src="<?php print $directory; ?>/images/test.jpg" alt="We help charities">
					</span>
					<h3 class="is-colored-bold">We help charities</h3>
					<p>share knowledge and working practice to make the best technology choices.</p>
				</div>
			</div>
			<div class="l-column3 is-column-spaced">
				<div class="mission-box">
					<span class="image-container">
						<img src="<?php print $directory; ?>/images/test.jpg" alt="We help charities">
					</span>
					<h3 class="is-colored-bold">We help charities</h3>
					<p>share knowledge and working practice to make the best technology choices.</p>
				</div>
			</div>
			<div class="l-column3 is-column-spaced">
				<div class="mission-box">
					<span class="image-container">
						<img src="<?php print $directory; ?>/images/test.jpg" alt="We help charities">
					</span>
					<h3 class="is-colored-bold">We help charities</h3>
					<p>share knowledge and working practice to make the best technology choices.</p>
				</div>
			</div>
		</div>
	</section>
	<hr id="mission-divider">
	<section id="our-members" class="l-section is-background-light-grey is-text-centered clearfix">
		<h1 class="l-section-title">Our members</h1>
		<div class="section-content l-column-container">
			<div class="l-column5 is-column-spaced"><img src="<?php print $directory; ?>/images/test.jpg"></div>
			<div class="l-column5 is-column-spaced"><img src="<?php print $directory; ?>/images/test.jpg"></div>
			<div class="l-column5 is-column-spaced"><img src="<?php print $directory; ?>/images/test.jpg"></div>
			<div class="l-column5 is-column-spaced"><img src="<?php print $directory; ?>/images/test.jpg"></div>
			<div class="l-column5 is-column-spaced"><img src="<?php print $directory; ?>/images/test.jpg"></div>
		</div>
	</section>
	<section id="blog" class="l-section clearfix">
		<h1 class="l-section-title">Blog</h1>
		<div class="section-content l-column-container">
			<?php
			$posts = $page['content']['system_main']['nodes'];
			unset($posts['#sorted']);
			foreach ($posts as $post) {
				$post = json_decode(json_encode($post['body']['#object']), true); ?>
				<div class="blog-post l-column4 is-column-spaced">
					<h1><?php echo substr($post['title'], 0, 37); ?></h1>
					<p><?php
					$content = $post['body']['und'][0]['value'];
					$summary = (strlen($content) > 230) ? substr($content, 0, 230). "&hellip;" : $content;
					 echo $summary ?></p>
					<span class="post-date"><?php echo date('t M Y', $post['changed']) ?></span>
				</div>
			<?php } ?>
		</div>
	</section>
</main>