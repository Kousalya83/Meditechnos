<style>
	body {
		background: #F8F8F8;
	}

	.background {
		background: url("<?php echo base_url('assets/img/about/about-meditechnos.png'); ?>");
		background-size: cover;
		background-position: center;
		margin-top: 95px;
		height: 50vh;
	}

	.foot-bg {
		background: url("<?php echo base_url('assets/img/about/footbg.png'); ?>");
		background-size: cover;
		object-fit: cover;
		object-position: center;
	}

	.background h2 {
		font-family: Montserrat-Bold;
		color: #00252D;
	}

	.background p {
		font-family: HindMadurai-Medium;
		color: #0A0B10;
	}

	.sidemenu,
	.alter-pad,
	.alter-foot,
	.alter-up,
	.why-reason {
		padding-left: 5%;
		padding-right: 5%;
	}

	.why-reason ul{
		font-family: HindMadurai-Regular;
		color: #707070;
		list-style: none;
		padding-left: 0;
	}
	.why-reason ul li{
		display: flex;
		align-items: center;
		margin: 15px 0;
	}
	.why-reason ul li span{
		font-weight: bold;
	}
	.why-reason ul li p{
		padding-left: 15px;
		margin: 0;
	}
	.final-choice{
		background: transparent linear-gradient(90deg, #1DB2C4 0%, #28B6A3 100%) 0% 0% no-repeat padding-box;
		box-shadow: 0px 0px 3px #4394DB;
		color: #FFFFFF;
		padding: 10px;
		text-align: center;
		border-radius: 10px;
	}

	.bar h3:after,
	.about-head:after,
	.before-bot h6:after {
		background-color: #000;
		content: "";
		display: inline-block;
		height: 3px;
		position: relative;
		vertical-align: middle;
		width: 5%;
		left: 0.5em;
		font-family: Montserrat-Bold;
		color: #00252D;
	}

	.sidemenu h3,
	.before-bot h3 {
		font-family: Montserrat-Bold;
		color: #00252D;
	}

	.sidemenu p {
		font-family: HindMadurai-Regular;
		color: #707070;
		text-align: justify;
	}

	.about-bg {
		background: url("<?php echo base_url('assets/img/about/about-mid.png'); ?>");
		background-size: cover;
		object-fit: cover;
		object-position: center;
	}

	.integrity li {
		background: url("<?php echo base_url('assets/img/about/integrity.png'); ?>");
	}

	.dedication li {
		background: url("<?php echo base_url('assets/img/about/dedication.png'); ?>");
	}

	.knowledge li {
		background: url("<?php echo base_url('assets/img/about/knowledge.png'); ?>");
	}

	.delivery li {
		background: url("<?php echo base_url('assets/img/about/delivery.png'); ?>");
	}

	.integrity li,
	.dedication li,
	.knowledge li,
	.delivery li {
		background-repeat: no-repeat;
		padding: 25px 0px 25px 85px;
		background-size: 25% auto;
		list-style-type: none;
		font-family: Montserrat-SemiBold;
		color: #00252D;
	}

	.integrity-para li {
		background: url("<?php echo base_url('assets/img/about/tick.png'); ?>");
		background-repeat: no-repeat;
		padding: 5px 0 5px 40px;
		margin: 5px 0px 10px 0px;
		background-size: 5%;
		list-style-type: none;
		background-position: left center;
		font-family: Montserrat-Medium;
		color: #707070;
	}

	.about-bg ul {
		padding-left: 0;
	}

	.mission h3 {
		font-family: Montserrat-Medium;
		text-align: center;
	}

	.mission p {
		font-family: HindMadurai-Regular;
		text-align: center;
	}

	.mission-bg,
	.mission-bgw {
		background-color: #FFFFFF;
		color: #707070;
	}

	.bg-blue:hover {
		background-color: #3AB0E4;
		color: #FFFFFF;
	}

	.bg-green:hover {
		background-color: #65CCBB;
		color: #FFFFFF;
	}

	.mission-bg h3 {
		padding-top: 15px;
		padding-bottom: 13px;
	}

	.mission-bg p {
		padding-bottom: 20px;
		padding-left: 10px;
		padding-right: 10px;
	}

	.before-bot {
		background-color: #F6FAFF;
	}

	.mission-bg {
		margin: 0 4.5em;
		padding: 1em;
		min-height: 100%;
	}

	.mission-bgw {
		margin: 0 .5em;
	}

	.about-content span {
		font-weight: bold;
		font-size: 20px;   
	}

	.foot-bg h2 {
		color: #F6FAFF;
		font-family: Montserrat-Bold;
	}

	.foot-bg p {
		color: #F6FAFF;
		font-family: Montserrat-Regular;
	}

	.b-button1 {
		padding: 5px 25px;
	}

	.b-button {
		font-family: Montserrat-SemiBold;
		background: #0A0B10;
		border-radius: 5px;
		opacity: 1;
		border: none;
		color: #FFFFFF;
	}

	.mission-bgw {
		position: relative;
		overflow: hidden;
	}

	.team-detail {
		position: absolute;
		left: 0;
		bottom: -140px;
		padding: 15px 0px;
		width: 100%;
		z-index: 9;
		-webkit-transition: all 700ms ease;
		-moz-transition: all 700ms ease;
		-ms-transition: all 700ms ease;
		-o-transition: all 700ms ease;
		transition: all 700ms ease;
	}

	.inner-detail {
		font-family: Montserrat-Medium;
		text-align: center;
		background-color: rgba(38, 167, 230, 0.7);
		color: #FFFFFF;
		padding: 0px 0px;
	}

	.inner-detail p,
	.inner-detail h5 {
		margin-bottom: 0;
	}

	.mission-bgw:hover .team-detail {
		bottom: 0;
	}

	@media only screen and (min-width: 1700px) {
		.integrity li,
		.dedication li,
		.knowledge li,
		.delivery li {
			background-size: 16% auto;
		}
	}

	@media only screen and (max-width: 600px) {
		.background {
			margin-top: 75px;
			height: 40vh;
		}

		.mission-bg {
			margin: 0 .5em;
			padding: .5em;
		}

		.foot-bg{
			text-align: center;
			padding-bottom: 5%;
		}
	}
</style>

<div class="row background">
	<div class="col-md-7"></div>
	<div class="col-md-4 d-flex align-items-center">
		<div class="about-content">
			<h2>About us</h2>
			<p>Everyone in the healthcare industry is smart. Can we do this in the long run? Yes, Go to <span>MediTechnos</span>.</p>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
<div class="row">
	<div class="col-md-12 sidemenu bar mt-5">
		<div class="row">
			<div class="col-md-8">
				<p>MediTechnos Solutions is at the forefront of revolutionizing the healthcare industry by seamlessly integrating technology with revenue cycle management. Their comprehensive range of automation tools play a transformative role in powering essential functions such as insurance eligibility, claim submission, and claim status tracking.</p>

				<p>By leveraging cutting-edge technology, MediTechnos Solutions empowers healthcare RCM houses to streamline operations and optimize revenue potential. Their tools bring efficiency, accuracy, and automation to the forefront, enabling seamless handling of insurance eligibility verification, simplified claim submission processes, and real-time tracking of claim status.</p>
				
				<p>MediTechnos fosters a culture of innovation, continuously seeking new and creative solutions to enhance healthcare revenue cycle management. They embrace emerging technologies and approaches to drive positive change and improve industry practices.</p>
				
				<p>MediTechnos places clients at the center of everything they do. They prioritize understanding and addressing the unique needs and challenges of their clients, providing tailored solutions and exceptional customer service to ensure client satisfaction.</p>
				
				<p>MediTechnos operates with utmost integrity, maintaining ethical standards, and conducting business with honesty and transparency. They prioritize building trust and fostering long-term relationships with clients, partners, and stakeholders.</p>
				
				<p>MediTechnos believes in the power of collaboration and teamwork. They foster an environment that encourages open communication, mutual respect, and the sharing of ideas. They collaborate closely with clients and partners to deliver optimal solutions and achieve shared success.</p>
				
				<p>MediTechnos is dedicated to delivering excellence in all aspects of their work. They strive for excellence in service, technology, and support, aiming to exceed expectations and consistently deliver high-quality results.</p>
				
				<p>MediTechnos is committed to ongoing learning and improvement. They proactively seek feedback, embrace opportunities for growth, and adapt to evolving industry trends and client needs. They constantly refine their solutions and processes to ensure they remain at the forefront of healthcare revenue cycle management.</p>
				
				<p>By embodying these core values, MediTechnos aims to make a positive impact in the healthcare industry, revolutionizing revenue cycle management and empowering healthcare providers with innovative and effective solutions.</p>
			</div>
			<div class="col-md-4">
				<img class="img-responsive" src="<?php echo base_url('assets/img/about/discuss.png'); ?>" width="100%" alt="Discuss">
			</div>
		</div>

	</div>
</div>
<!-- <div class="row">
	<div class="col-md-12 about-bg sidemenu">
		<div class="row">
			<div class="col-md-12">
				<h6 class="about-head mt-5">WHY CHOOSE US</h6>
				<h3 class="my-4">Core Values</h3>
			</div>
			<div class="row">
				<div class="col-md-3">
					<ul class="integrity">
						<li>
							<h6>Integrity</h6>
						</li>
					</ul>
					<ul class="integrity-para">
						<li>Do the right thing</li>
						<li>Built trust</li>
						<li>Be transparent</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="dedication">
						<li>
							<h6>Dedication</h6>
						</li>
					</ul>
					<ul class="integrity-para">
						<li>Embody throughness</li>
						<li>Commit to excellence</li>
						<li>Exceed expectations</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="knowledge">
						<li>
							<h6>Knowledge</h6>
						</li>
					</ul>
					<ul class="integrity-para">
						<li>Share knowledge</li>
						<li>Be ahead of the curve</li>
						<li>Stimulate innovation</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="delivery">
						<li>
							<h6>Delivery</h6>
						</li>
					</ul>
					<ul class="integrity-para">
						<li>Deliver world class service</li>
						<li>Deliver results</li>
						<li>Deliver on time, all the time</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> -->



<div class="row">
	<div class="col-md-12 alter-up mt-5 mb-4">
		<h3 class="mb-5">Our Mission & Vision</h3>
		<div class="row mission">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6 mb-4 mb-sm-0">
						<div class="mission-bg bg-blue">
							<h3>Mission</h3>
							<p>Five fingers on the same hand: knowledge applied, the technology used, customer care, excellence in every facet of service. As a team, we offer excellent solutions to support the growth of more organizations throughout the world.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mission-bg bg-green">
							<h3>Vision</h3>
							<p>To be the most advanced technology-implemented healthcare RCM company, you care for the patients, and we care for you with the latest technologies at an affordable cost.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row d-none">
	<div class="col-md-12 before-bot alter-pad">
		<h6 class="about-head mt-5">TEAM</h6>
		<h3 class="my-4">Meet Our Team</h3>
		<div class="row mb-5">
			<div class="col-md-2">
				<div class="mission-bgw">
					<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/about/men.png'); ?>" alt="service1" width="100%">
					<div class="team-detail">
						<div class="inner-detail">
							<p>Founder</p>
							<h5>Mr.Loganathan</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="mission-bgw">
					<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/about/men.png'); ?>" alt="service1" width="100%">
					<div class="team-detail">
						<div class="inner-detail">
							<p>Director</p>
							<h5>Mr.Kannan</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="mission-bgw">
					<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/about/men.png'); ?>" alt="service1" width="100%">
					<div class="team-detail">
						<div class="inner-detail">
							<p>Manager</p>
							<h5>Mr.Rambarathan</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="mission-bgw">
					<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/about/men.png'); ?>" alt="service1" width="100%">
					<div class="team-detail">
						<div class="inner-detail">
							<p>Founder</p>
							<h5>Mr.Prabhu</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="mission-bgw">
					<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/about/men.png'); ?>" alt="service1" width="100%">
					<div class="team-detail">
						<div class="inner-detail">
							<p>Founder</p>
							<h5>Mr.Karthik</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="mission-bgw">
					<img class="img-responsive mx-auto d-block" src="<?php echo base_url('assets/img/about/men.png'); ?>" alt="service1" width="100%">
					<div class="team-detail">
						<div class="inner-detail">
							<p>Founder</p>
							<h5>Mr.Krishna</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 why-reason mb-3">
		<h3 class="my-4">Why MediTechnos stands out as a preferred choice?</h3>
		<ul>
			<li>
				<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
				<p><span>Innovation:</span> MediTechnos is dedicated to staying at the forefront of the healthcare industry, consistently developing and implementing innovative solutions to address the evolving needs of healthcare revenue cycle management.</p>
			</li>
			<li>
				<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
				<p><span>Cutting-edge technology:</span> MediTechnos leverages cutting-edge technology, including automation tools and advanced software, to optimize and streamline revenue cycle processes. This ensures accuracy, efficiency, and improved financial outcomes.</p>
			</li>
			<li>
				<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
				<p><span>Client-centric approach:</span> MediTechnos puts clients at the center of its services, tailoring solutions to meet their specific needs. The company values client feedback and actively incorporates it into their offerings, ensuring a personalized and satisfying experience.</p>
			</li>
			<li>
				<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
				<p><span>Simplified healthcare needs:</span> MediTechnos simplifies complex revenue cycle management tasks, making them more manageable and efficient. By automating processes, reducing paperwork, and providing intuitive interfaces, they empower healthcare providers to focus on patient care.</p>
			</li>
			<li>
				<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
				<p><span>Expertise and experience:</span> With a team of industry experts, MediTechnos brings extensive knowledge and experience in healthcare revenue cycle management. They understand the challenges faced by RCM houses and offer valuable insights and support to navigate those challenges effectively.</p>
			</li>
			<li>
				<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
				<p><span>Reliability and trust:</span> MediTechnos has built a reputation for reliability and trust. They have a proven track record of delivering high-quality solutions and exceptional customer service, earning the trust and loyalty of their clients.</p>
			</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-md-12 foot-bg alter-foot">
		<div class="row">
			<div class="col-md-6 my-5">
				<p>Overall, MediTechnos stands out with its innovative technology, and deliver cutting-edge solutions for all your needs.</p>
				<h2>READY TO TALK?</h2>
				<p class="mb-0">We're ready to listen. Let's find a good time</p>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-3 d-flex align-items-center justify-content-center">
				<div>
					<a href="<?php echo base_url('contact'); ?>">
						<button type="button" class="b-button b-button1">Contact Us</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>