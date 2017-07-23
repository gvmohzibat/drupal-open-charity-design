<header id="header">
	<nav id="top-bar" class="clearfix">
		<div class="l-content">
		<?php if ($logo): ?>
			<div id="logo" class="l-horiz">
				<a href="<?php echo $front_page; ?>" title="<?php echo t('Home'); ?>" rel="home"><img src="<?php echo $logo;?>" alt="<?php echo t('Home'); ?>"></a>
			</div>
		<?php endif; ?>
			<div class="l-horiz l-float-right is-uppercase">
				<div id="top-menu" class="l-horiz">
					<?php echo render($page['main_menu']);?>
				</div>
				<div id="join-us" class="l-horiz">
					<?php if ($logged_in): ?>
						<a class="is-button is-button-outlined" href="<?php echo $front_page;?>user/logout">Log Out</a>
					<?php else: ?>
						<a class="is-button is-button-outlined" href="<?php echo $front_page;?>user/login">Join us</a>
					<?php endif;?>
				</div>
			</div>
		</div>
	</nav>

	<div id="header-intro" class="is-text-centered">
		<div class="l-content">
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
		<div class="is-vertical-align-container l-content">
			<div id="event-content">
				<h3><span class="is-colored-bold">Next Event:</span> June 23<sup>rd</sup> 2016 &nbsp; 18:30 - 21:00</h3>
				<p>Cancer Research UK, Angel Building, 407 St John Street, London EC1V 4AD</p>
			</div>
			<div id="register-button"><a href="#" class="l-float-right is-button is-button-filled is-uppercase">Register</a></div>
		</div>
	</section>
	<div class="clearfix"></div>
	<?php if (theme_get_setting('show_get_involved')) { ?>
	<section id="get-involved" class="l-section">
		<div class="l-content is-text-centered clearfix">
			<h1 class="l-section-title">Get Involved</h1>
			<div class="section-content l-column-container">
				<div class="l-column3 is-column-spaced">
					<img src="<?php echo $directory;?>/images/Meetup.jpg" alt="We help charities">
					<h3 class="is-uppercase">We do meetings</h3>
					<p>We organize our meetings through open OpenCharity MeetUp group</p>
					<a href="<?php echo theme_get_setting('meetup_link'); ?>" class="is-button is-button-large is-button-outlined is-uppercase">Meetup group</a>
				</div>
				<div class="l-column3 is-column-spaced">
					<img src="<?php echo $directory;?>/images/Slack.jpg" alt="We help charities">
					<h3 class="is-uppercase">We collaborate</h3>
					<p>OpenCharity has a slack group for<br> daily collaboration</p>
					<a href="<?php echo theme_get_setting('slack_link'); ?>" class="is-button is-button-large is-button-outlined is-uppercase">Slack group</a>
				</div>
				<div class="l-column3 is-column-spaced">
					<img src="<?php echo $directory;?>/images/Google.jpg" alt="We help charities">
					<h3 class="is-uppercase">We share</h3>
					<p>We have a Google Group set up to share tools and documents</p>
					<a href="<?php echo theme_get_setting('google_link'); ?>" class="is-button is-button-large is-button-outlined is-uppercase">Google group</a>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	<?php if (theme_get_setting('show_our_mission')) { ?>
	<section id="our-mission" class="l-section is-background-light-grey">
		<div class="l-content is-text-centered clearfix">
			<h1 class="l-section-title">Our mission</h1>
			<p>Charities and Partners collaborating and sharing open solutions and ideas to create value in digital space.</p>
			<p class="is-bold second-mission-par">If you are a charity or supplier, we are ready to welcome you.</p>
			<div class="section-content l-column-container">
				<div class="l-column3 is-column-spaced">
					<div class="mission-box">
						<span class="image-container">
							<img src="<?php echo $directory;?>/images/bulb.png" alt="We help charities">
						</span>
						<h3 class="is-colored-bold"><?php echo theme_get_setting('first_section_title') ?></h3>
						<p><?php echo theme_get_setting('first_section_content') ?></p>
					</div>
				</div>
				<div class="l-column3 is-column-spaced">
					<div class="mission-box">
						<span class="image-container">
							<img src="<?php echo $directory;?>/images/friends.png" alt="We help charities">
						</span>
						<h3 class="is-colored-bold"><?php echo theme_get_setting('second_section_title') ?></h3>
						<p><?php echo theme_get_setting('second_section_content') ?></p>
					</div>
				</div>
				<div class="l-column3 is-column-spaced">
					<div class="mission-box">
						<span class="image-container">
							<img src="<?php echo $directory;?>/images/like.png" alt="We help charities">
						</span>
						<h3 class="is-colored-bold"><?php echo theme_get_setting('third_section_title') ?></h3>
						<p><?php echo theme_get_setting('third_section_content') ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>
	<section id="our-members" class="l-section is-background-light-grey">
		<div class="l-content is-text-centered clearfix">
			<h1 class="l-section-title">Our members</h1>
			<div class="slider">
				<div class="section-content l-column-container slider-container">
					<div class="member l-column5 is-column-spaced"><img src="<?php echo $directory;?>/images/cruk.png"></div>
					<div class="member l-column5 is-column-spaced"><img src="<?php echo $directory;?>/images/compucorp.png"></div>
					<div class="member l-column5 is-column-spaced"><img src="<?php echo $directory;?>/images/kop.png"></div>
					<div class="member l-column5 is-column-spaced"><img src="<?php echo $directory;?>/images/zing.png"></div>
					<div class="member l-column5 is-column-spaced"><img src="<?php echo $directory;?>/images/comicrelief.png"></div>
					<!-- more items to test the slider -->
					<div class="member l-column5 is-column-spaced"><img src="<?php echo $directory;?>/images/kop.png"></div>
					<div class="member l-column5 is-column-spaced"><img src="<?php echo $directory;?>/images/cruk.png"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="blog" class="l-section">
		<div class="l-content clearfix">
			<h1 class="l-section-title">Blog</h1>
			<div class="section-content l-column-container">
				<div class="slider">
					
					<div class="slider-container clearfix">
						<?php
						$posts = $page['content']['system_main']['nodes'];
						unset($posts['#sorted']);
						foreach ($posts as $post) {
						    $post = json_decode(json_encode($post['body']['#object']), true);
						    ?>
							<div class="blog-post l-column4 is-column-spaced slider-item">
								<h1><a class="is-colored-bold" href="<?php echo $front_page . '/node/' . $post['vid'] ?>"><?php echo substr($post['title'], 0, 37); ?></a></h1>
								<p><?php
								$content = $post['body']['und'][0]['value'];
							    $summary = (strlen($content) > 230) ? substr($content, 0, 230) . "&hellip;" : $content;
							    echo $summary?></p>
								<span class="post-date"><?php echo date('d M Y', $post['created']) ?></span>
							</div>
						<?php }
						
						?>
					</div>
					
				</div>
			</div>
		</div>
	</section>
</main>
<footer id="footer">
	<div class="l-content">
		<div id="social-links" class="is-text-centered clearfix">
			<ul class="l-list-menu">
				<li><a class="is-colored" href="<?php echo theme_get_setting('social_link_facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a class="is-colored" href="<?php echo theme_get_setting('social_link_twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a class="is-colored" href="<?php echo theme_get_setting('social_link_google'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<hr class="l-fullwidth-divider">
		<div id="copyright-info" class="clearfix is-text-centered">
			<p>The site was built as a collaboration between <span class="is-colored">Manifesto Digital</span> and <span class="is-colored">Compucorp</span></p>
		</div>
	</div>
</footer>