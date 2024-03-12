<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="Bgr1_6oNmrrUexgyBB6i7bHMcN0VMCKu5Eg1ICtQsMI" />

	<?php
	$default_title = "MediTechnos Solutions - Incorporate Automation";
	$default_description = "Set up an account or log into MediTechnos to receive updates. Connect with the appropriate service medical specialists.";
	?>

	<title><?= isset($title)? $title : $default_title; ?></title>
	<meta name="title" content="<?= isset($title)? $title : $default_title; ?>"/>
	<meta name="description" content="<?= isset($description)? $description :$default_description; ?>"/>
	<meta name="keywords" content="claim rejection, claim denial, clean claim, denial management, denial management in rcm, claims denial management, denials in rcm, clean processing, claim submission, rcm denial management">

	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?= isset($title)? $title : $default_title; ?>" />
	<meta property="og:description" content="<?= isset($description)? $description :$default_description; ?>" />
	<meta property="og:url" content="<?php echo base_url(uri_string()); ?>" />
	<meta property="og:image" itemprop="image" content="<?php echo base_url('assets/img/Meditechnos-logo.png'); ?>" />
	<meta property="og:image:secure_url" content="<?php echo base_url('assets/img/Meditechnos-logo.png'); ?>" />

	<link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" type="image/x-icon">
	<link rel="canonical"  href ="<?php echo base_url(uri_string()); ?>">

	<!-- CSS only -->
	<!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/footer-style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/top-scroll.css'); ?>">

	<!-- Custom JS -->
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7CETGZ4Z5C"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-7CETGZ4Z5C');
	</script>
	
	<style>
		@font-face {
			font-family: Excon-Medium;
			src: url('<?= base_url('assets/fonts/Excon-Medium.ttf') ?>');
		}

		@font-face {
			font-family: Excon-Light;
			src: url('<?= base_url('assets/fonts/Excon-Light.ttf') ?>');
		}

		@font-face {
			font-family: Excon-Regular;
			src: url('<?= base_url('assets/fonts/Excon-Regular.ttf') ?>');
		}

		@font-face {
			font-family: Excon-Bold;
			src: url('<?= base_url('assets/fonts/Excon-Bold.ttf') ?>');
		}

		@font-face {
			font-family: HindMadurai-SemiBold;
			src: url('<?= base_url('assets/fonts/HindMadurai-SemiBold.ttf') ?>');
		}

		@font-face {
			font-family: HindMadurai-Medium;
			src: url('<?= base_url('assets/fonts/HindMadurai-Medium.ttf') ?>');
		}

		@font-face {
			font-family: HindMadurai-Regular;
			src: url('<?= base_url('assets/fonts/HindMadurai-Regular.ttf') ?>');
		}

		@font-face {
			font-family: HindMadurai-Light;
			src: url('<?= base_url('assets/fonts/HindMadurai-Light.ttf') ?>');
		}

		@font-face {
			font-family: Montserrat-Bold;
			src: url('<?= base_url('assets/fonts/Montserrat-Bold.ttf') ?>');
		}

		@font-face {
			font-family: Montserrat-SemiBold;
			src: url('<?= base_url('assets/fonts/Montserrat-SemiBold.ttf') ?>');
		}

		@font-face {
			font-family: Montserrat-Medium;
			src: url('<?= base_url('assets/fonts/Montserrat-Medium.ttf') ?>');
		}

		@font-face {
			font-family: Montserrat-MediumItalic;
			src: url('<?= base_url('assets/fonts/Montserrat-MediumItalic.ttf') ?>');
		}

		@font-face {
			font-family: Montserrat-Regular;
			src: url('<?= base_url('assets/fonts/Montserrat-Regular.ttf') ?>');
		}
	</style>
</head>

<body>
	<header class="fixed-top <?php if ($this->uri->segment('2') == 'get_demo' && $this->uri->segment('4')!= "") { ?> d-none <?php } ?>">
		<nav class="navbar navbar-expand-lg bg-light navadjust">
			<div class="container-fluid">

				<a class="navbar-brand" href="<?php echo base_url(''); ?>"><img classs="img-responsive" class="img-pad" width="200px" height="" src="<?php echo base_url('assets/img/Meditechnos-logo.png'); ?>" alt="Meditechnos-logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link <?php if ($this->uri->segment('1') == 'about') { ?> active <?php } ?>" href="<?php echo base_url('about'); ?>">
								<button type="button">About</button>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle <?php if ($this->uri->segment('1') == 'product') { ?> active <?php } ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<button type="button">Products</button>
							</a>
							<ul class="dropdown-menu fade-down">
								<li class="<?php if ($this->uri->segment('2') == 'quat') { ?> active <?php } ?>">
									<a href="<?php echo base_url('product/quat'); ?>">QuaT</a>
								</li>
								<li class="<?php if ($this->uri->segment('2') == 'prodt') { ?> active <?php } ?>">
									<a href="<?php echo base_url('product/prodt'); ?>">ProdT</a>
								</li>
								<li class="<?php if ($this->uri->segment('2') == 'verit') { ?> active <?php } ?>">
									<a href="<?php echo base_url('product/verit'); ?>">VeriT</a>
								</li>
								<li class="<?php if ($this->uri->segment('2') == 'doat') { ?> active <?php } ?>">
									<a href="<?php echo base_url('product/doat'); ?>">DoaT</a>
								</li>
								<li class="<?php if ($this->uri->segment('2') == 'claist') { ?> active <?php } ?>">
									<a href="<?php echo base_url('product/claist'); ?>">ClaisT</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if ($this->uri->segment('1') == 'casestudies') { ?> active <?php } ?>" href="<?php echo base_url('casestudies/1'); ?>">
								<button type="button">Case Studies</button>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php if ($this->uri->segment('1') == 'contact') { ?> active <?php } ?>" href="<?php echo base_url('contact'); ?>">
								<button type="button">Contact</button>
							</a>
						</li>
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item dropdown d-none d-sm-block">
							<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<button type="button" class="bg-button bg-button1">Login</button>
							</a>
							<ul class="dropdown-menu fade-down">
								<li class="">
									<a href="<?php echo base_url('product/quat_login'); ?>" target="_blank">QuaT</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="container-fluid">