<style>
	.footer-block{
		padding-top: 2%;
		padding-bottom: 0;
	}

	.arrow-li-foot {
		list-style: none;
		padding-left: 0;
		display: flex;
    	flex-direction: row;
    	justify-content: space-between;
	}

	.arrow-li-foot .contact-addr {
		color: #707070;
		font-family: HindMadurai-Regular;
		background: url('<?php echo base_url('assets/img/footer/location.png'); ?>') no-repeat left center;
		padding: 5px 0px 0px 40px;
		list-style: none;
		vertical-align: middle;
		background-size: 20px;
		text-align: left;
	}

	.ul-head-contact {
		color: #707070;
		font-family: HindMadurai-Medium;
	}

	.queries p{
		font-family: HindMadurai-Regular;
		color: #707070;
		margin: 5px 0;
	}

	.social-icons,
	.bottom-ul li,
	.copyright p{
		opacity: 1;
	}

	.bottom-ul {
		list-style: none;
		display: flex;
		justify-content: space-evenly;
	}

	.copyright {
		padding-top: 15px;
		padding-bottom: 15px;
	}

	@media only screen and (min-width: 600px) {
		.image-pad {
			padding-left: 2%;
		}
		.serv-hd {
			margin-top: 38px;
		}

		.copyright p,
		.bottom-ul{
			margin-bottom: 0;
		}

		.queries{
			display: flex;
	    	justify-content: space-between;
	    	align-items: center;
		}
	}

	@media only screen and (max-width: 600px) {
		.footer{
			text-align: center;
		}
		.arrow-li-foot {
			padding-left: 0;
			flex-direction: column;
		}

		.bottom-ul {
			display: block;
			margin: 0;
			padding: 0;
		}

		.queries{
			text-align: center;
		}
	}
</style>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<footer class="<?php if ($this->uri->segment('2') == 'get_demo' && $this->uri->segment('4')!= "") { ?> d-none <?php } ?>">
	<div class="container-fluid">
		<div class="row footer <?php if (($this->uri->segment('1') == 'contact') && ($this->uri->segment('2') == '')) { ?> d-none <?php } ?>">
			<div class="col-md-12">
				<div class="image-pad">
					<a href="<?php echo base_url(''); ?>"><img classs="img-responsive" class="img-pad" width="200px" height="" src="<?php echo base_url('assets/img/Meditechnos-logo.png'); ?>" alt="Meditechnos-logo"></a>
				</div>
			</div>
			<div class="col-md-12 footer-block">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<h4 class="ul-head-contact">Contact Info</h4>
						<ul class="arrow-li-foot">
							<li class="contact-addr">
								No. 110, 16th Street,<br>
								Ste 1400 #153,<br>
								Denver - 80202,<br>
								Colorado, USA.
							</li>
							<!-- <li class="contact-addr">
								Dhwarco Business Center,<br>
								Plot No. 12C/1, South Phase,<br>
								Guindy, Chennai – 600 032,<br>
								Tamilnadu, India.
							</li> -->
							<!-- <li class="contact-addr">
								New No. 16, Old No. 7/A,<br>
								Plot No. 3, 8th Cross Street,<br>
								Dhandeeswaram Nagar, Velacheri,<br>
								Chennai - 600 042,<br>
								Tamilnadu, India.
							</li> -->
							<li class="contact-addr">
								1st Floor, ELCOT SEZ - IT Park,<br>
								Illanthaikulam,<br>
								Madurai - 625020,<br>
								Tamilnadu, India.
							</li>
						</ul>
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10 queries">
						<p>
							<img src="<?php echo base_url('assets/img/footer/mail.png'); ?>" alt="mail" width="25px">
							<a href="mailto:company@meditechnos.com">company@meditechnos.com</a>
						</p>
						<!-- <p>
							USA : 
							<img src="<?php echo base_url('assets/img/footer/mobile.png'); ?>" alt="mail" width="15px">
							<a href="tel:+17194808024">+1 - 719-480-8024</a>&nbsp;&nbsp;
							<img src="<?php echo base_url('assets/img/footer/mobile.png'); ?>" alt="mail" width="15px">
							<a href="tel:+17208129320">+1 - 720-812-9320</a>
						</p> -->
						<p>
							INDIA : 
							<!-- <img src="<?php echo base_url('assets/img/footer/mobile.png'); ?>" alt="mail" width="15px">
							<a href="tel:+918072882951">+91 - 80728 82951</a>&nbsp;&nbsp; -->
							<img src="<?php echo base_url('assets/img/footer/mobile.png'); ?>" alt="mail" width="15px">
							<a href="tel:+919597395294">+91 - 9597395294</a>
						</p>
						<div class="social-icons">
							<a href="https://www.facebook.com/profile.php?id=100086544992780" target="_blank"><img src="<?php echo base_url('assets/img/footer/facebook.png'); ?>"></a>
							<a href="https://twitter.com/meditechnos3" target="_blank"><img src="<?php echo base_url('assets/img/footer/twitter.png'); ?>"></a>
							<a href="https://www.linkedin.com/company/91429552/admin/" target="_blank"><img src="<?php echo base_url('assets/img/footer/linkedin.png'); ?>"></a>
							<a href="https://in.pinterest.com/meditechnos/" target="_blank"><img src="<?php echo base_url('assets/img/footer/pinterest.png'); ?>"></a>
							<a href="https://www.instagram.com/meditechnos/" target="_blank"><img src="<?php echo base_url('assets/img/footer/instagram.png'); ?>"></a>
							<!-- <a href="https://www.reddit.com/user/meditechnos/" target="_blank"><img class="me-0" src="<?php echo base_url('assets/img/footer/reddit.png'); ?>"></a> -->
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
		<div class="row footer-bg-row">
			<div class="col-md-12 copyright">
				<div class="row">
					<div class="col-md-6">
						<p>Copyrights &copy; 2023 <a href="<?php echo base_url(''); ?>">Meditechnos Solutions</a>. All Rights Reserved</p>
					</div>
					<div class="col-md-5">
						<ul class="bottom-ul">
							<li><a href="<?php echo base_url('sitemap'); ?>">Sitemap</a></li>
							<li><a href="<?php echo base_url('policies/terms_conditions'); ?>">Terms & Conditions</a></li>
							<li><a href="<?php echo base_url('policies/cookies_policy'); ?>">Cookies Policy</a></li>
							<li><a href="<?php echo base_url('policies/privacy_policy'); ?>">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript">
	var baseurl = "<?php echo base_url() ?>";
	console.log(baseurl);
</script>
<script src="<?= base_url('assets/js/top-scroll.js') ?>"></script>
</body>

</html>