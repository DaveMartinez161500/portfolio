<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/content/images/Logo/logo.png" type="image/x-icon">


	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen">
	<?php $this->helpers->analytics(); ?>

	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700&family=Open+Sans:wght@300;400;500;600;700;800&family=Rubik:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CMontserrat:400,700,900%7CLato:700" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header">
			<div class="wrapper">
				<div class="cont">
					<div class="container-xxl">
						<div class="container-xxl d-flex justify-content-between content-header">
							<div class="header-logo pt-t ms-n1">
								<a href="<?php echo URL ?>"><img src="public/images/content/images/Logo/logo.png" alt="logo-header" class="logo-header"></a>
							</div>
							<nav class="navbar navbar-expand-lg pt-0">
								<div class="container-fluid d-flex align-self-baseline gap-5 navigation-cont">
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex p-1 gp-5">
											<li class="nav-item <?php $this->helpers->isActiveMenu("home"); ?>" >
												<a class="nav-link" aria-current="page" href="<?php echo URL ?>">Home</a>
											</li>
											<li class="nav-item <?php $this->helpers->isActiveMenu("services"); ?>">
												<a class="nav-link" href="<?php echo URL ?>services#content">Services</a>
											</li>
											<li class="nav-item <?php $this->helpers->isActiveMenu("gallery"); ?>">
												<a class="nav-link" href="<?php echo URL ?>gallery#content">Gallery</a>
											</li>
											<li class="nav-item <?php $this->helpers->isActiveMenu("testimonials"); ?>">
												<a class="nav-link" href="<?php echo URL ?>testimonials#content">Testimonials</a>
											</li>
											<li class="nav-item <?php $this->helpers->isActiveMenu("contact"); ?>">
												<a class="nav-link" href="<?php echo URL ?>contact#content">Contact</a>
											</li>
										</ul>
									</div>
									<div class="header-logo-call">
										<a href="tel:917-280-1294"><img src="public/images/content/images/Logo/call.png" alt="logo-call" class="logo-call"></a>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>

			</div>
		</div>
	</header>

	<script>
		$(window).scroll(function() {
			if ($(this).scrollTop() > 1) {
				// $('content-header').addClass("sticky");
			} else {
				// $('content-header').removeClass("sticky");
			}
		})
	</script>