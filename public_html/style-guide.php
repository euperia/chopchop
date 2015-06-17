<!DOCTYPE HTML>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">

	<title>Producer Loops - Style Guide</title>

	<?php include( '../src/templates/_styles.php'); ?>

</head>

<body>

	<div class="wrapper">

		<?php include( '../src/templates/_header.php'); ?>

		<?php include( '../src/templates/_nav.php'); ?>

		<?php include( '../src/templates/_confidence.php'); ?>

		<?php include( '../src/templates/_search.php'); ?>

		<?php include( '../src/templates/_breadcrumb.php'); ?>


		<section class="section title">
			<div class="container">
				<h1>Construction Kits</h1>
				<p>
					<strong>We are the world's largest distributor of downloadable Sample Packs. We sell 12210 LEGAL downloads from 361 sample pack labels.</strong> Whether you are a producer, soundtrack composer or DJ, we have the sample packs you need to succeed.
			</div>
		</section>

		<section class="section main dots">
			<div class="container">
				<div class="gutter--lg">
					<aside class="sidebar">
						<div class="widget js-toggle">
							<h2 class="widget__title js-toggle__title">
								<span>Default</span>
							</h2>
							<div class="widget__content js-toggle__content">
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Our Team</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Policy</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="widget widget--open js-toggle">
							<h2 class="widget__title js-toggle__title">
								<span>Visible</span>
							</h2>
							<div class="widget__content js-toggle__content">
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Our Team</a></li>
									<li><a href="#">Terms</a></li>
									<li><a href="#">Policy</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="widget widget--filter js-toggle">
							<h2 class="widget__title js-toggle__title">
								<span>Filter</span>
							</h2>
							<div class="widget__content js-toggle__content">
								<ul>
									<li><a href="#" class="active">Art Punk</a></li>
									<li><a href="#">Alternative Rock</a></li>
									<li><a href="#" class="active">College Rock</a></li>
									<li><a href="#">Experimental Rock</a></li>
									<li><a href="#" class="active">Goth / Gothic Rock</a></li>
									<li><a href="#">Grunge</a></li>
									<li><a href="#">Hardcore Punk</a></li>
									<li><a href="#">Hard Rock</a></li>
									<li><a href="#">Indie Rock</a></li>
								</ul>
							</div>
						</div>
						<div class="widget widget--filter active js-toggle">
							<h2 class="widget__title js-toggle__title">
								<span>Filter</span>
							</h2>
							<div class="widget__content js-toggle__content">
								<ul>
									<li><a href="#" class="active">Art Punk</a></li>
									<li><a href="#">Alternative Rock</a></li>
									<li><a href="#" class="active">College Rock</a></li>
									<li><a href="#">Experimental Rock</a></li>
									<li><a href="#" class="active">Goth / Gothic Rock</a></li>
									<li><a href="#">Grunge</a></li>
									<li><a href="#">Hardcore Punk</a></li>
									<li><a href="#">Hard Rock</a></li>
									<li><a href="#">Indie Rock</a></li>
								</ul>
							</div>
						</div>
						<div class="widget widget--scroll js-toggle">
							<h2 class="widget__title js-toggle__title">
								<span>Scroll</span>
							</h2>
							<div class="widget__content js-toggle__content">
								<ul>
									<li><a href="#">Art Punk</a></li>
									<li><a href="#">Alternative Rock</a></li>
									<li><a href="#">College Rock</a></li>
									<li><a href="#">Experimental Rock</a></li>
									<li><a href="#">Goth / Gothic Rock</a></li>
									<li><a href="#">Grunge</a></li>
									<li><a href="#">Hardcore Punk</a></li>
									<li><a href="#">Hard Rock</a></li>
									<li><a href="#">Indie Rock</a></li>
									<li><a href="#">Art Punk</a></li>
									<li><a href="#">Alternative Rock</a></li>
									<li><a href="#">College Rock</a></li>
									<li><a href="#">Experimental Rock</a></li>
									<li><a href="#">Goth / Gothic Rock</a></li>
									<li><a href="#">Grunge</a></li>
									<li><a href="#">Hardcore Punk</a></li>
									<li><a href="#">Hard Rock</a></li>
									<li><a href="#">Indie Rock</a></li>
									<li><a href="#">Art Punk</a></li>
									<li><a href="#">Alternative Rock</a></li>
									<li><a href="#">College Rock</a></li>
									<li><a href="#">Experimental Rock</a></li>
									<li><a href="#">Goth / Gothic Rock</a></li>
									<li><a href="#">Grunge</a></li>
									<li><a href="#">Hardcore Punk</a></li>
									<li><a href="#">Hard Rock</a></li>
									<li><a href="#">Indie Rock</a></li>
								</ul>
							</div>
						</div>
					</aside>
					<div class="main-content">

						<?php include( '../src/templates/_toolbar.php'); ?>

						<div class="products">
							<?php for($i=0 ; $i <=5 ; $i++) { include "../src/templates/_product.php"; } ?>
						</div>

						<?php include( '../src/templates/_style-guide.php'); ?>

					</div>
				</div>
			</div>
		</section>

		<?php include( '../src/templates/_footer.php'); ?>

		<?php include( '../src/templates/_preview.php'); ?>

	</div>

	<?php include( '../src/templates/_overlay.php'); ?>

	<?php include( '../src/templates/_scripts.php'); ?>

</body>

</html>
