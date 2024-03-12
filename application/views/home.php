<style type="text/css">
	.background {
		background: url("<?php echo base_url('assets/img/home/head-bg.png'); ?>");
		background-size: cover;
		object-fit: cover;
		object-position: center;
		margin-bottom: 15px;
	}

	.top-margin {
		margin-top: 150px;
	}

	.mid-margin h6 {
		font-family: HindMadurai-SemiBold;
		margin-top: 10px;
		color: #00252D;
	}

	.mid-margin p {
		font-family: HindMadurai-Regular;
		color: #707070;
		text-align: justify;
	}

	.mid-margin h3 {
		font-family: Montserrat-Bold;
		color: #00252D;
		line-height: 1.5;
	}

	.mid-margin h3 span {
		font-family: Montserrat-Medium;
		color: #636363;
	}

	.quat-pad {
		padding-left: 4%;
		padding-right: 4%;
	}

	.quat-pad h3 {
		font-family: Montserrat-SemiBold;
	}

	.quat-pad h3:nth-child(1) {
		margin-top: 65px;
		color: #00252D;
	}

	.quat-pad h3:nth-child(2) {
		color: #4AB697;
	}

	.quat-pad p {
		font-family: HindMadurai-Regular;
		color: #707070;
		text-align: justify;
	}

	.quat-pad ul {
		list-style-type: none;
		display: flex;
	}

	.quat-pad ul li {
		padding: 0px 10px;
	}

	.quat-pad ul li:nth-child(1) button {
		font-family: HindMadurai-Medium;
		background: transparent linear-gradient(104deg, #0FABEC 0%, #34BE82 100%) 0% 0% no-repeat padding-box;
		border: 2px solid #35B2C9;
		color: #FFFFFF;
		padding: 8px 30px;
		border-radius: 54px;
	}

	.quat-pad ul li:nth-child(2) button {
		font-family: HindMadurai-Medium;
		background: #FFFFFF;
		border: 2px solid #35B2C9;
		color: #0A0B10;
		padding: 8px 30px;
		border-radius: 54px;
	}

	.quat-rect {
		padding-left: 4%;
		padding-right: 4%;
	}

	.quat-rect h5 {
		color: #FFFFFF;
		font-family: Montserrat-SemiBold;
	}

	.quat-rect span {
		font-size: 30px;
	}

	.bg-rect {
		background: url("<?php echo base_url('assets/img/home/rectangle.png'); ?>");
		background-size: 100% 100%;
		background-repeat: no-repeat;
		object-position: center;
	}

	.quat-img {
		padding-top: 30px;
		padding-bottom: 30px;
	}

	

	.quat-center {
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.quat-center ul {
		display: flex;
		list-style-type: none;
		justify-content: center;
		margin-bottom: 0;
		padding-left: 0;
	}

	.quat-center ul li:first-child {
		background: #FFFFFF 0% 0% no-repeat padding-box;
		border-radius: 30px 0px 0px 30px;
	}

	.quat-center ul li:last-child {
		background: #0A0B10 0% 0% no-repeat padding-box;
		border-radius: 0px 30px 30px 0px;
	}

	.bg-but1 {
		background: #FFFFFF 0% 0% no-repeat padding-box;
		border-radius: 30px 0px 0px 30px;
		border: none;
		padding: 10px 40px;
		color: #0A0B10;
		font-family: HindMadurai-Medium;
	}

	.bg-but2 {
		background: #0A0B10 0% 0% no-repeat padding-box;
		border-radius: 0px 30px 30px 0px;
		color: #FFFFFF;
		border: none;
		padding: 10px 60px;
		font-family: HindMadurai-Medium;
	}

	.circle {
		position: absolute;
		left: 50%;
		transform: translate(-50%, -42px);
		width: 40px;
		height: 40px;
		line-height: 40px;
		border-radius: 50%;
		color: #fff;
		text-align: center;
		background: transparent linear-gradient(180deg, #28A8E0 0%, #3DB9B8 100%) 0% 0% no-repeat padding-box;
	}

	.license-block {
		background-color: #F2F5F6;
	}

	.license-content {
		background: url("<?php echo base_url('assets/img/home/ama_license_bg.png'); ?>");
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		margin: 2%;
		padding: 2%;
	}

	.license-content h2 {
		font-family: Montserrat-Bold;
		color: #FFFFFF;

	}

	.testimonial-bg {
		background-color: #F6FAFF;
	}

	.testimonial-bg h3 {
		font-family: Montserrat-Bold;
		color: #00252D;
		text-align: center;
	}

	.testimonial-content {
		text-align: left;
	}

	.testimonial-content h6 {
		font-family: Montserrat-SemiBold;
	}

	.testimonial-content p {
		font-family: Montserrat-Regular;
		margin-top: 10px;
		text-align: justify;
	}

	.content-bg {
		background-color: #FFFFFF;
		margin: 3%;
		padding: 3%;
	}

	.content-bg img {
		width: 100%;
	}

	.fa-star,
	.checked {
		color: orange;
	}

	.carousel-control-next,
	.carousel-control-prev {
		opacity: 1;
		width: 8%;
	}

	.carousel-control-prev-icon {
		background: url("<?php echo base_url('assets/img/home/arrow-prev.png'); ?>");
		background-size: cover;
	}

	.carousel-control-next-icon {
		background: url("<?php echo base_url('assets/img/home/arrow-next.png'); ?>");
		background-size: cover;
	}

	.multiple-img {
		display: none;
	}
	.single-img {
		display: block;
	}

	@media (max-width: 767px) {
		.carousel-inner .carousel-item>div {
			display: none;
		}

		.carousel-inner .carousel-item>div:first-child {
			display: block;
		}

	}

	.carousel-inner .carousel-item.active,
	.carousel-inner .carousel-item-next,
	.carousel-inner .carousel-item-prev {
		display: flex;
	}

	/* medium and up screens */
	@media (min-width: 768px) {
		.carousel-control-prev-icon {
			width: 3rem;
			height: 3rem;
		}

		.carousel-control-next-icon {
			width: 3rem;
			height: 3rem;
		}

		.carousel-inner .carousel-item-end.active,
		.carousel-inner .carousel-item-next {
			transform: translateX(50%);
		}

		.carousel-inner .carousel-item-start.active,
		.carousel-inner .carousel-item-prev {
			transform: translateX(-50%);
		}

		.carousel-inner .carousel-item-end,
		.carousel-inner .carousel-item-start {
			transform: translateX(0);
		}
	}

	@media only screen and (min-width: 600px) {
		.mid-margin {
			padding-left: 2%;
			padding-right: 2%;
		}

		.content-bg {
			width: 50%;
		}
	}

	@media only screen and (max-width: 600px) {
		.content-bg {
			height: 80vh;
		}

		.content-bg img {
			width: 70%;
		}

		.license-content {
			margin: 2%;
			padding: 10%;
		}

		.license-content h2 {
			padding-top: 10px;
		}

		.testimonial-content {
			margin-top: 15px;
			text-align: center;
		}

		.quat-pad ul {
			padding-left: 0;
		}

		.bg-rect {
			background: transparent linear-gradient(100deg, #3EB9B6 0%, #3EB9B6 30%, #21A3EE 100%) 0% 0% no-repeat padding-box;
			text-align: center;
		}

		.quat-center ul {
			margin-bottom: 28px;
		}

		.quat-center ul li {
			width: 50%;
		}

		.bg-but1 {
			padding: 10px 20px;
		}

		.circle {
			transform: translate(-50%, -70px);
		}

		.single-img {
			display: none;
		}

		.multiple-img {
			display: block;
		}
	}
</style>

<div class="row background">
	<div class="col-md-12 top-margin mid-margin">
		<div class="row">
			<div class="col-md-7">
				<h3><span>Experience the power</span> <br>of tomorrow’s technology and <br class="d-none d-sm-block"> future of Healthcare Revenue Cycle Management.</h3>

				<p class="mt-4">Welcome to Meditechnos Solutions, a leading provider of RCM (Revenue Cycle Management) automation solutions licensed by the American Medical Association for Standard CPT codes. With a strong focus on delivering innovative technology and exceptional automation tools, we help RCM houses streamline their revenue cycle processes, optimize financial performance, and improve overall operational efficiency.</p>

				<p>At Meditechnos Solutions, we understand the complexities and challenges faced by RCM companies in managing their revenue cycle. Our mission is to empower our clients with cutting-edge automation tools and solutions that drive sustainable financial growth while reducing administrative burdens.</p>

				<p>Our team consists of industry experts, including healthcare professionals, IT specialists, and business analysts, who collaborate to develop and deliver comprehensive RCM automation solutions tailored to the unique needs of each client. We combine our deep industry knowledge with advanced technology to create intuitive and user-friendly platforms that revolutionize revenue cycle management. At Meditechnos Solutions, we prioritize the success of our clients and strive to build long-lasting partnerships. We provide comprehensive training and ongoing support to ensure a smooth implementation and utilization of our RCM automation solutions. Our dedicated customer success team is always available to address any questions or concerns.</p>

				<p>Partner with Meditechnos Solutions and experience the transformative power of RCM automation. Let us help you enhance your revenue cycle processes, increase revenue, and focus on delivering exceptional claim process. Contact us today to learn more about our solutions and how we can support your organization's unique needs</p>
			</div>
			<div class="col-md-5">
				<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/home/lady-doctor.png'); ?>" alt="Doctor" width="60%">
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12 license-block">
		<div class="license-content">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 d-flex align-items-center justify-content-center text-center">
					<h2 class="py-5 px-0 px-sm-5 mb-0">"We are licensed by the American Medical Association for Standard CPT codes"</h2>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</div>

<section id="testimonial">
	<div class="row testimonial-bg">
		<h3 class="mt-5">What Clients Say About Us?</h3>
		<div class="container text-center my-3">
			<div class="row mx-auto my-auto justify-content-center">
				<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="row content-bg">
								<div class="col-md-3 d-flex align-items-center">
									<img class="mx-auto d-block" src="<?php echo base_url('assets/img/home/mid-girl.png'); ?>" alt="testimonial">
								</div>
								<div class="col-md-9 testimonial">
									<div class="testimonial-content">
										<h6>Martin William</h6>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<p>I wanted to write to thank you for the incredible technology you've created. As a healthcare provider, I've struggled for years to find a solution that can help me manage my patients' care and communicate with them more effectively. Your platform has completely transformed how I work and made a huge difference for my patients.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row content-bg">
								<div class="col-md-3 d-flex align-items-center">
									<img class="mx-auto d-block" src="<?php echo base_url('assets/img/home/mid-girl.png'); ?>" alt="testimonial">
								</div>
								<div class="col-md-9 testimonial">
									<div class="testimonial-content">
										<h6>James Carter</h6>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<p>I want to express my gratitude for your improved automation tools for the healthcare sector and it was incredibly rewarding to hear firsthand how much the platform was helping healthcare providers and patients. Thank you for making such a positive impact on healthcare!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					</a>
					<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="row">
	<div class="col-md-12 fame why-reason">
		<h3 class="text-center py-3">Are you familiar with <span class="sp">Meditechnos!!</span></h3>
		<p class="first">MediTechnos Solutions combines Technology with "Revenue Cycle Management" to revolutionize the healthcare industry. Their services and AI based Products powered the Insurance Eligibility, Claim Submission and Claim Status.</p>
		<p class="second">"Stay ahead and learn more about Meditechnos services today".</p>
		<h4 class="py-2">Our RCM automation solutions encompass a wide range of capabilities, including:</h4>
		<ul>
			<li>
				<p><span>Patient registration and eligibility verification:</span> Our tools streamline the patient registration process, ensuring accurate and efficient eligibility verification, insurance verification, and demographic data collection.</p>
			</li>
			<li>
				<p><span>Claims management:</span> We provide advanced tools to automate the claims submission and processing workflows, reducing errors and improving reimbursement rates. Our solutions help optimize coding accuracy, claim scrubbing, and tracking of claim status.</p>
			</li>
			<li>
				<p><span>Revenue analytics and reporting:</span> We offer robust reporting and analytics functionalities that provide real-time insights into key performance indicators, revenue trends, and areas for improvement. These insights empower healthcare organizations to make data-driven decisions and drive financial success.</p>
			</li>
			<li>
				<p><span>Denial management and appeals:</span> Our automation solutions include intelligent denial management capabilities that streamline the identification, tracking, and resolution of claim denials. We assist in managing appeals, ensuring maximum reimbursement for our clients.</p>
			</li>
			<li>
				<p><span>Payment processing and reconciliation:</span> We simplify and automate payment processing workflows, including electronic remittance advice (ERA) posting, payment reconciliation, and patient payment management, leading to improved cash flow and reduced manual effort.</p>
			</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-md-12 quat-pad mt-3">
		<div class="row multiple-img">
			<div class="col-md-6 d-flex align-items-center">
				<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/home/quatlogin.png'); ?>" alt="Quat" width="100%">
			</div>
			<div class="col-md-6 d-flex align-items-center">
				<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/home/veritlogin.png'); ?>" alt="Verit" width="100%">
			</div>
		</div>
		<div class="row single-img">
			<div class="col-md-12 d-flex align-items-center">
				<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/home/qvlogin.png'); ?>" alt="QuaT & VeriT" width="100%">
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 quat-rect my-5">
		<div class="row bg-rect">
			<div class="col-md-5 quat-img"><img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/home/world.png'); ?>" alt="World" width="80%"></div>
			<div class="col-md-7 quat-center">
				<div style="position: relative;">
					<h5>Need a solution for claim rejection and denial.</h5>
					<h5 class="text-center"><span>QuaT</span> is here to assist.</h5>
					<br>
					<ul>
						<li>
							<a href="<?php echo base_url('product/get_demo/1'); ?>">
								<button type="button" class="bg-but1">GET A DEMO</button>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('product/quat_login'); ?>" target="_blank">
								<button type="button" class="bg-but2">LOGIN</button>
							</a>
						</li>
					</ul>
					<div class="circle">OR</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function responsive_carousel(maxWidth) {
		if (!maxWidth.matches) {
			let items = document.querySelectorAll('.carousel .carousel-item');

			items.forEach((el) => {
				const minPerSlide = 2
				let next = el.nextElementSibling
				for (var i = 1; i < minPerSlide; i++) {
					if (!next) {
						// wrap carousel by using first child
						next = items[0]
					}
					let cloneChild = next.cloneNode(true)
					el.appendChild(cloneChild.children[0])
					next = next.nextElementSibling
				}
			})
		}
	}

	var maxScreenWidth = window.matchMedia("(max-width: 600px)");
	responsive_carousel(maxScreenWidth);
	maxScreenWidth.addListener(responsive_carousel);
</script>
<style>
	.fame h3 {
		font-family: Montserrat-SemiBold;
	}

	.fame .sp {
		color: #4AB697;
	}

	.fame .first {
		font-family: HindMadurai-Regular;
		color: #707070;
		text-align: center;
	}

	.fame .second {
		font-family: Montserrat-MediumItalic;
		color: #707070;
		text-align: center;
	}

	.fame h4 {
		color: #29A9DD;
		font-family: Montserrat-SemiBold;
		text-align: center;
	}

	.why-reason {
		padding-left: 5%;
		padding-right: 5%;
	}

	.why-reason ul {
		font-family: HindMadurai-Regular;
		color: #707070;
		list-style: none;
		padding-left: 0;
	}

	.why-reason ul li {
		display: flex;
		align-items: center;
		margin: 15px 0;
	}

	.why-reason ul li span {
		font-weight: bold;
	}

	.why-reason ul li p {
		padding-left: 15px;
		margin: 0;
	}
</style>