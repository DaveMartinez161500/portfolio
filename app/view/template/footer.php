<footer>
	<div id="footer">
		<div class="wrapper">
			<div class="container-xxl content">
				<div class="footer-logo pb-5 pa-6 m-auto text-center">
					<a href="<?php echo URL ?>"><img src="public/images/content/images/Logo/logo.png" alt="logo-footer" class="logo-footer"></a>
				</div>
				<div class="footer-navbar">
					<nav class="navbar navbar-expand-lg pt-0">
						<div class="container-fluid d-flex align-self-baseline justify-content-center">
							<div class=" navbar-collapse">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex p-1 gap-5">
									<li class="nav-item <?php $this->helpers->isActiveMenu("home"); ?>">
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
									<li class="nav-item  <?php $this->helpers->isActiveMenu("contact"); ?>">
										<a class="nav-link" href="<?php echo URL ?>contact#content">Contact</a>
									</li>
								</ul>
							</div>
							<div class="copyrights">
								<p class="title mb-0">Copyright © 2018 Habtom Corporation. All Rights Reserved.</p>
							</div>
						</div>
					</nav>
				</div>
			</div>
			<div class="validator">
				<div class="left">
					<a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fexams.technodreamcenter.com%2Fdave.atchioco%2Fhabtomcorp.com%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank"><img src="public/images/content/images/validator/css.jpg" alt=""></a>
				</div>
				<div class="right">
					<a href="https://validator.w3.org/nu/?checkerrorpages=yes&useragent=Validator.nu%2FLV+http%3A%2F%2Fvalidator.w3.org%2Fservices&acceptlanguage=&doc=https%3A%2F%2Fexams.technodreamcenter.com%2Fdave.atchioco%2Fhabtomcorp.com%2F" target="_blank"><img src="public/images/content/images/validator/html.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</div>



</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']) : ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<!-- <textarea id="g-recaptcha-response" class="destroy-on-load"></textarea> -->
<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
<script>
	var captchaCallBack = function() {
		$('.g-recaptcha').each(function(index, el) {
			var recaptcha = grecaptcha.render(el, {
				'sitekey': '<?php $this->info("site_key"); ?>'
			});
			$('.destroy-on-load').remove();
		})
	};

	$('.consentBox').click(function() {
		if ($(this).is(':checked')) {
			if ($('.termsBox').length) {
				if ($('.termsBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').removeAttr('disabled');
			}
		} else {
			$('.ctcBtn').attr('disabled', true);
		}
	});

	$('.termsBox').click(function() {
		if ($(this).is(':checked')) {
			if ($('.consentBox').is(':checked')) {
				$('.ctcBtn').removeAttr('disabled');
			}
		} else {
			$('.ctcBtn').attr('disabled', true);
		}
	});

	// STICKY
	const contHeader = document.querySelector('.cont');
	const contLogo = document.querySelector('.header-logo');
	const nav = document.querySelector('nav');
	let x = window.matchMedia("(min-width: 991px)");

	window.onscroll = function() {
		myFunction();
	};
	window.onload = function() {
		myFunction();
	}


	AOS.init();

	function myFunction() {
		// Header is sticky
		if (x.matches) {
			if (window.pageYOffset >= 200) {
				headerIsSticky();
			}
			// Header is not sticky
			else {
				headerIsNotSticky();
			}
		} else {
			contHeader.style.position = 'unset';
		}
	}

	const headerIsSticky = () => {
		contHeader.style.position = 'fixed';
		contHeader.style.background = '#014c8c';
		contLogo.style.maxWidth = '120px';
		nav.style.paddingBottom = '0px';
		contHeader.style.transition = 'all 0.5s ease-in-out';

	}

	const headerIsNotSticky = () => {
		contHeader.style.background = 'unset';
		contLogo.style.maxWidth = 'unset';
		nav.style.paddingBottom = '8px';
		contHeader.style.transition = 'all 0.5s ease-in-out';
	}
</script>

<?php if ($view == "gallery") : ?>
	<script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({
			num_page_links_to_display: 3,
			items_per_page: 10
		});
		$('.fancy').fancybox({
			helpers: {
				title: {
					type: 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>