<header id="header">
	<nav id="top-bar" class="clearfix l-fullwidth">
		<div class="content">
			<div id="logo" class="l-horiz">
				<a href="<?php print $base_path; ?>"><img src="<?php print $logo;?>"></a>
			</div>
			<div class="l-horiz l-float-right is-uppercase">
				<div id="top-menu" class="l-horiz">
					<?php print render($page['main_menu']);?>
				</div>
				<div id="join-us" class="l-horiz">
					<?php if ($logged_in): ?>
						<a class="is-button is-button-outlined" href="<?php base_path();?>user/logout">Log Out</a>
					<?php else: ?>
						<a class="is-button is-button-outlined" href="<?php base_path();?>user/login">Join us</a>
					<?php endif;?>
				</div>
			</div>
		</div>
	</nav>

	<div id="header-intro" class="l-fullwidth is-text-centered">
		<div class="content">
			<div id="intro-content">
				<h1 class="is-uppercase">Sharing ideas for charities</h1>
				<p class="first-intro-par">Many charities' goals are similar as is the functionality we require, but little shared woring takes place.</p>
				<p class="second-intro-par">By working together, driving shared areas of interest and influencing open source developments we can bring efficiencies, improve the digital experience for our users, and have great impact.</p>
				<p class="third-intro-par">Together we can make a bigger difference</p>
			</div>
		</div>
	</div>
</header>
<main>
	<section id="events" class="l-section is-background-light-grey">
		<div class="is-vertical-align-container content">
			<div id="event-content">
				<h3><span class="is-colored-bold">Next Event:</span> June 23<sup>rd</sup> 2016 &nbsp; 18:30 - 21:00</h3>
				<p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
			</div>
			<div id="register-button"><a href="register" class="l-float-right is-button is-button-filled is-uppercase">Register</a></div>
		</div>
	</section>
	<div class="clearfix"></div>
	<section id="get-involved" class="l-section">
		<div class="content is-text-centered clearfix">
			<h1 class="l-section-title">Get Involved</h1>
			<div class="section-content l-column-container">
				<div class="l-column3 is-column-spaced">
					<img src="<?php print $directory;?>/images/Meetup.jpg" alt="We help charities">
					<h3 class="is-uppercase">We do meetings</h3>
					<p>We organize our meetings through open OpenCharity MeetUp group</p>
					<a href="#" class="is-button is-button-large is-button-outlined is-uppercase">Meetup group</a>
				</div>
				<div class="l-column3 is-column-spaced">
					<img src="<?php print $directory;?>/images/Slack.jpg" alt="We help charities">
					<h3 class="is-uppercase">We collaborate</h3>
					<p>OpenCharity has a slack group for<br> daily collaboration</p>
					<a href="#" class="is-button is-button-large is-button-outlined is-uppercase">Slack group</a>
				</div>
				<div class="l-column3 is-column-spaced">
					<img src="<?php print $directory;?>/images/Google.jpg" alt="We help charities">
					<h3 class="is-uppercase">We share</h3>
					<p>We have a Google Group set up to share tools and documents</p>
					<a href="#" class="is-button is-button-large is-button-outlined is-uppercase">Google group</a>
				</div>
			</div>
		</div>
	</section>
	<section id="our-mission" class="l-section is-background-light-grey">
		<div class="content is-text-centered clearfix">
			<h1 class="l-section-title">Our mission</h1>
			<p>Charities and Partners collaborating and sharing open solutions and ideas to create value in digital space.</p>
			<p class="is-bold second-mission-par">If you are a charity or supplier, we are ready to welcome you.</p>
			<div class="section-content l-column-container">
				<div class="l-column3 is-column-spaced">
					<div class="mission-box">
						<span class="image-container">
							<img src="<?php print $directory;?>/images/bulb.png" alt="We help charities">
						</span>
						<h3 class="is-colored-bold">We help charities</h3>
						<p>share knowledge and working practice to make the best technology choices.</p>
					</div>
				</div>
				<div class="l-column3 is-column-spaced">
					<div class="mission-box">
						<span class="image-container">
							<img src="<?php print $directory;?>/images/friends.png" alt="We help charities">
						</span>
						<h3 class="is-colored-bold">We help charities</h3>
						<p>share knowledge and working practice to make the best technology choices.</p>
					</div>
				</div>
				<div class="l-column3 is-column-spaced">
					<div class="mission-box">
						<span class="image-container">
							<img src="<?php print $directory;?>/images/like.png" alt="We help charities">
						</span>
						<h3 class="is-colored-bold">We help charities</h3>
						<p>share knowledge and working practice to make the best technology choices.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="our-members" class="l-section is-background-light-grey">
		<div class="content is-text-centered clearfix">
			<h1 class="l-section-title">Our members</h1>
			<div class="section-content l-column-container">
				<div class="member l-column5 is-column-spaced"><img src="<?php print $directory;?>/images/cruk.png"></div>
				<div class="member l-column5 is-column-spaced"><img src="<?php print $directory;?>/images/compucorp.png"></div>
				<div class="member l-column5 is-column-spaced"><img src="<?php print $directory;?>/images/kop.png"></div>
				<div class="member l-column5 is-column-spaced"><img src="<?php print $directory;?>/images/zing.png"></div>
				<div class="member l-column5 is-column-spaced"><img src="<?php print $directory;?>/images/comicrelief.png"></div>
			</div>
		</div>
	</section>
	<section id="blog" class="l-section">
		<div class="content clearfix">
			<h1 class="l-section-title">Blog</h1>
			<div class="section-content l-column-container">
				<div class="slider">
					<span class="slider-direction-button slider-direction-left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					<div class="slider-container clearfix">
						<?php
						$posts = $page['content']['system_main']['nodes'];
						unset($posts['#sorted']);
						foreach ($posts as $post) {
						    $post = json_decode(json_encode($post['body']['#object']), true);?>
							<div class="blog-post l-column4 is-column-spaced slider-item">
								<h1 class="is-colored-bold"><?php echo substr($post['title'], 0, 37); ?></h1>
								<p><?php
								$content = $post['body']['und'][0]['value'];
							    $summary = (strlen($content) > 230) ? substr($content, 0, 230) . "&hellip;" : $content;
							    echo $summary?></p>
								<span class="post-date"><?php echo date('d M Y', $post['created']) ?></span>
							</div>
						<?php } ?>
					</div>
					<span class="slider-direction-button slider-direction-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
	</section>
</main>
<footer id="footer">
	<div class="content">
		<div id="social-links" class="is-colored is-text-centered clearfix">
			<ul class="l-list-menu">
				<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
				<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
				<li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
			</ul>
		</div>
		<hr class="l-fullwidth-divider">
		<div id="copyright-info" class="clearfix is-text-centered">
			<p>The site was built as a collaboration between <span class="is-colored">Manifesto Digital</span> and <span class="is-colored">Compucorp</span></p>
		</div>
	</div>
</footer>