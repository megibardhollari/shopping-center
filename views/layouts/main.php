<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);

$imageUrl = Yii::$app->urlManager->createUrl(['/web/assets/social_media_icons/instagram.png']);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
	<title>
		<?= Html::encode($this->title) ?>
	</title>
	<?php $this->head() ?>


	<!-- Inkludimi i css/js per navbar-->
	<?php
	$this->registerCssFile('@web/css/navbar/style.css');
	// $this->registerCssFile('@web/css/footer.css');

	$this->registerJsFile('@web/js/navbar/bootstrap.min.js');
	$this->registerJsFile('@web/js/navbar/jquery.min.js');
	$this->registerJsFile('@web/js/navbar/main.js');
	$this->registerJsFile('@web/js/navbar/popper.js');

	// Include Google Fonts
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Roboto:400,100,300,700');

	// Footer writting
	$this->registerCssFile('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900');

	// Include Font Awesome
	$this->registerCssFile('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	// Inkludimi i css/js per navbar
	$this->registerJsFile('@web/js/footer/bootstrap.min.js');
	$this->registerJsFile('@web/js/footer/jquery.min.js');
	$this->registerJsFile('@web/js/footer/main.js');
	$this->registerJsFile('@web/js/footer/popper.js');

	$this->registerCssFile('@web/css/footer/style.css');
	$this->registerCssFile('@web/css/footer/ionicons.min.css');
	$this->registerCssFile('@web/css/introjs.css');

	// Inkludimi i css/js intro.js
	// $this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/intro.js/7.2.0/intro.min.js');
	// $this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/intro.js/7.2.0/intro.js');

	?>
	<style>
		body {
			margin: 0;
			padding: 0;
			background: #ebebeb;
		}

		.social-media-icons {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			margin: 0;
			padding: 0;
			display: flex;
		}

		.social-media-icons li {
			list-style: none;
		}

		.social-media-icons li a {
			display: block;
			position: relative;
			width: 50px;
            height: 50px;
			text-align: center;
			text-decoration: none;
			color: #404040;
			margin: 0 30px;
			transition: .5s;
		}

		.social-media-icons li a span {
			position: absolute;
			transition: transform .5s;
		}

		.social-media-icons li a span:nth-child(1),
		.social-media-icons li a span:nth-child(3) {
			width: 100%;
			height: 3px;
			background: #404040;
		}

		.social-media-icons li a span:nth-child(1) {
			top: 0;
			left: 0;
			transform-origin: right;
		}

		.social-media-icons li a:hover span:nth-child(1) {
			transform: scaleX(0);
			transform-origin: left;
			transition: transform .5s;
		}

		.social-media-icons li a span:nth-child(3) {
			bottom: 0;
			left: 0;
			transform-origin: left;
		}

		.social-media-icons li a:hover span:nth-child(3) {
			transform: scaleX(0);
			transform-origin: right;
			transition: transform .5s;
		}

		.social-media-icons li a span:nth-child(2),
		.social-media-icons li a span:nth-child(4) {
			width: 3px;
			height: 100%;
			background: #404040;
		}

		.social-media-icons li a span:nth-child(2) {
			top: 0;
			left: 0;
			transform: scale(0);
			transform-origin: bottom;
		}

		.social-media-icons li a:hover span:nth-child(2) {
			transform: scale(1);
			transform-origin: top;
			transition: transform .5s;
		}

		.social-media-icons li a span:nth-child(4) {
			top: 0;
			right: 0;
			transform: scale(0);
			transform-origin: top;
		}

		.social-media-icons li a:hover span:nth-child(4) {
			transform: scale(1);
			transform-origin: bottom;
			transition: transform .5s;
		}

		.facebook {
			width: 50px;
		}
		
		.facebook:hover {
			color: #3b5998;
		}

		.facebook:hover span {
			background: #3b5998;
		}

		.twitter:hover {
			color: #1da1f2;
		}

		.twitter:hover span {
			background: #1da1f2;
		}

		.instagram:hover {
			color: #c32aa3;
		}

		.instagram:hover span {
			background: #c32aa3;
		}

		.google:hover {
			color: #dd4b39;
		}

		.google:hover span {
			background: #dd4b39;
		}

		.social-media-icons li a .twitter {
			color: #1da1f2;
		}

		.social-media-icons li a:hover:nth-child(3) {
			color: #c32aa3;
		}

		.social-media-icons li a:hover:nth-child(4) {
			color: #dd4b39;
		}
	</style>

</head>

<?php

$defaultRoute = Yii::$app->defaultRoute;
$currentRoute = Yii::$app->controller->route;
$isDefaultRoute = ($currentRoute === $defaultRoute);

?>

<div class="card-welcome">
	<!-- Navbar  i home-->
	<div class="card-navbar">
		<div class="page">
			<nav id="colorlib-main-nav" class="fixed-top" role="navigation">
				<a href="<?= Yii::$app->urlManager->createUrl(['/clothes/all-clothes']) ?>" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
				<div class="js-fullheight colorlib-table">
					<div class="img" style="background-image: url(images/bg_3.jpg); background-color: whitesmoke;"></div>
					<div class="colorlib-table-cell js-fullheight" style="overflow-x: hidden;">
						<div class="row no-gutters">
							<div class="col-md-12 text-center">
								<h1 class="mb-4"><a href="<?= Yii::$app->urlManager->createUrl(['/clothes/all-clothes']) ?>" class="logo">My Shopping Center</a></h1>
								<ul>
									<li class="active"><a href="<?= Yii::$app->urlManager->createUrl(['/clothes/all-clothes']) ?>"><span>Home</span></a>
									</li>
									<li><a href="<?= Yii::$app->urlManager->createUrl(['/site/about']) ?>"><span>About</span></a>
									</li>
									<li><a href="<?= Yii::$app->urlManager->createUrl(['/site/login']) ?>"><span>Log In</span></a>
									</li>
									<li><a href="<?= Yii::$app->urlManager->createUrl(['/site/contact']) ?>"><span>Contact</span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>





<div id="colorlib-page" class="mt-5">
	<header style="background-color: white;">
		<div class="container">
			<div class="colorlib-navbar-brand">
				<a class="colorlib-logo" href="<?= Yii::$app->urlManager->createUrl(['/clothes/all-clothes']) ?>">Shopping Center</a>
			</div>
			<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		</div>
	</header>
	<?php if ($isDefaultRoute) { ?>
		<section class="hero-wrap js-fullheight">
			<div class="container px-0">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
					<div class="col-md-12 ftco-animate text-center">
						<div class="desc">
							<h1>Welcome!</h1>
							<h3>This is a shopping center :)</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
</div>



<div class="card-main">
	<!-- Main  -->
	<main id="main" class="flex-shrink-0" role="main">
		<div class="container">
			<?php if (!empty($this->params['breadcrumbs'])) : ?>
				<?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
			<?php endif ?>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
	</main>





	<!-- Footer  -->
	<footer class="footer-02">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-10 col-lg-6">
					<div class="subscribe mb-5">
						<form action="#" class="subscribe-form">
							<div class="form-group d-flex">
								<input type="text" class="form-control rounded-left" placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="form-control submit px-3">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-lg-5">
					<div class="row">
						<div class="col-md-12 col-lg-8 mb-md-0 mb-4">
							<h2 class="footer-heading"><a href="<?= Yii::$app->urlManager->createUrl(['/clothes/all-clothes']) ?>" class="logo">My
									Shopping Center</a></h2>
							<p> Discover a world of style, convenience, and endless possibilities at our Shopping Center.
								Nestled in... </p>
							<a href="<?= Yii::$app->urlManager->createUrl(['/site/about']) ?>">read more <span class="ion-ios-arrow-round-forward"></span></a>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-lg-7">
					<div class="row">
						<div class="col-md-3 mb-md-0 mb-4 border-left">
							<h2 class="footer-heading">Customer Care</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-1 d-block">Contact Us</a></li>
								<li><a href="#" class="py-1 d-block">Call now: 800 227 8437</a></li>
								<li><a href="#" class="py-1 d-block">Track your order</a></li>
								<li><a href="#" class="py-1 d-block">Book an appointnment</a></li>
							</ul>
						</div>
						<div class="col-md-3 mb-md-0 mb-4 border-left">
							<h2 class="footer-heading">Our Company</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-1 d-block">Staff</a></li>
								<li><a href="#" class="py-1 d-block">Team</a></li>
								<li><a href="#" class="py-1 d-block">Careers</a></li>
							</ul>
						</div>
						<div class="col-md-3 mb-md-0 mb-4 border-left">
							<h2 class="footer-heading follow-us" style="margin-left: 130px; width: 100%;">Follow Us</h2>

							<div class="social-menu">
								<ul class="social-media-icons">
									<li>
										<a class="facebook" href="#">
											<span></span>
											<span></span>
											<span></span>
											<span></span>
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a class="twitter" href="#">
											<span></span>
											<span></span>
											<span></span>
											<span></span>
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a class="instagram" href="#">
											<span></span>
											<span></span>
											<span></span>
											<span></span>
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a class="google" href="#">
											<span></span>
											<span></span>
											<span></span>
											<span></span>
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">

			<div class="row text-center mb-3">
				<p class="mb-0 list-unstyled">
					<a class="mr-md-3" href="#">Terms</a>
					<a class="mr-md-3" href="#">Privacy</a>
					<a class="mr-md-3" href="#">Compliances</a>
				</p>
			</div>

		</div>
</div>

<div class="row text-center copyright">
	Copyright &copy;
	<script>
		document.write(new Date().getFullYear());
	</script> All rights reserved. </a>
</div>
</footer>



<!-- <script>
		document.addEventListener("DOMContentLoaded", function() {
			var tour = introJs();

			tour.setOptions({
				steps: [{
					element: document.querySelector('.card-welcome'),
					title: 'Welcome!',
					intro: 'Welcome in our Shopping Store. This is a tour for a better checking of our items. Enjoy!',
					position: 'bottom',
					step: 1
				}, ]
			});

			var params = new URLSearchParams(window.location.search);
			var continueTour = params.get('tour') === 'continue';
			var startStep = parseInt(params.get('step')) || 1;

			if (continueTour) {
				tour.start().goToStepNumber(startStep);
			} else {
				tour.start();
			}

			tour.oncomplete(function() {
				window.location.href = 'index.php?r=site%2Fabout&tour=continue&step=2';
			});
		});
	</script> -->



<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>