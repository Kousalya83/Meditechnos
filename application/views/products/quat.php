<style type="text/css">
	body {
		background-color: #F8F8F8;
	}

	.banner {
		background: url("<?php echo base_url('assets/img/products/quat_banner.png'); ?>");
		background-size: cover;
		background-position: center;
		margin-top: 95px;
		height: 40vh;
	}

	.banner h2,
	.service-benefits h3,
	.service-content h3,
	.key-features h3 {
		font-family: Montserrat-Bold;
		color: #00252D;
	}

	.banner p {
		font-family: HindMadurai-Medium;
		color: #0A0B10;
	}

	.service-content {
		margin-top: 40px;
		margin-bottom: 40px;
	}

	.service-content p {
		font-family: HindMadurai-Regular;
		color: #707070;
		text-align: justify;
	}

	.service-content img {
		width: 85%;
		display: block;
		margin: 0 auto;
	}

	.service-benefits {
		background: url("<?php echo base_url('assets/img/products/benefits_bg.png'); ?>");
		background-size: cover;
		background-position: center;
		padding: 0 5%;
	}

	.service-benefits .card {
		font-family: HindMadurai-Regular;
		background: #FFFFFF 0% 0% no-repeat padding-box;
		color: #707070;
		width: 85%;
		border-radius: 5px;
		border: none;
		transition: all 0.5s ease-out;
	}

	.service-benefits .card.strip-blue {
		background-image: linear-gradient(#3EACE5, #3EACE5);
		background-size: 100% 0;
		background-repeat: no-repeat;
	}

	.service-benefits .card.strip-blue:hover {
		background-size: 100% 100%;
		color: #FFFFFF;
	}

	.service-benefits .card.strip-green {
		background-image: linear-gradient(#3ABF9C, #3ABF9C);
		background-size: 100% 0;
		background-repeat: no-repeat;
	}

	.service-benefits .card.strip-green:hover {
		background-size: 100% 100%;
		color: #FFFFFF;
	}

	.key-features{
		padding-left: 5%;
		padding-right: 5%;
	}

	.key-features ul{
		font-family: HindMadurai-Regular;
		color: #707070;
		list-style: none;
		padding-left: 0;
		margin-bottom: 0;
	}
	.key-features ul li{
		display: flex;
		align-items: center;
		margin: 15px 0;
	}
	.key-features ul li span{
		font-weight: bold;
	}
	.key-features ul li p{
		padding-left: 15px;
		margin: 0;
	}

	.top-strip-blue {
		background: #3EACE5 0% 0% no-repeat padding-box;
		border-radius: 5px 5px 0px 0px;
		height: 5px;
	}

	.top-strip-green {
		background: #3ABF9C 0% 0% no-repeat padding-box;
		border-radius: 5px 5px 0px 0px;
		height: 5px;
	}

	.banner-content h5 {
		font-family: HindMadurai-Medium;
		color: #0A0B10;
	}

	.quat-screen {
		background: url("<?php echo base_url('assets/img/products/quat_ss.png'); ?>");
		background-size: contain;
		background-position: center;
		background-repeat: no-repeat;
		height: 100vh;
	}

	.quat-screen p {
		color: #707070;
		font-family: HindMadurai-Regular;
	}

	.quat-screen .init {
		position: absolute;
		top: 5%;
		width: 40%;
	}

	.quat-screen .next {
		position: absolute;
		bottom: 10%;
	}


	.quat-screen span {
		color: #3EACE5;
		font-family: HindMadurai-Regular;
	}

	.quat-screen-mobile {
		display: none;
	}


	@media only screen and (min-width: 600px) {
		.service-content {
			padding: 0 2%;
		}

		.quat-screen {
			position: relative;
		}
	}

	@media only screen and (max-width: 600px) {
		.banner {
			margin-top: 75px;
		}

		.quat-screen {
			background: transparent;
			height: auto;
		}

		.quat-screen .init,
		.quat-screen .next {
			position: static;
			width: 100%;
		}

		.quat-screen-mobile {
			display: block;
			margin: 15px 0px;
		}
	}
</style>
<div class="row banner">
	<div class="col-md-3"></div>
	<div class="col-md-6 d-flex justify-content-center align-items-center text-center">
		<div class="banner-content">
			<h2>Quality Terminal - QuaT</h2>
			<p class="mb-0">Looking for a solutions to the claim denial and rejection troubles.</p>
			<h5><b>"QuaT is prepared to lend a hand"</b></h5>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>

<div class="row service-content">

	<div class="col-md-6 d-flex align-items-center">
		<div class="product-content">
			<p>Introducing QuaT Claim Scrubbing Tool, an advanced solution developed by Meditechnos to optimize your revenue cycle management (RCM) process and maximize your reimbursement rates. With QuaT, healthcare organizations can significantly reduce claim denials, improve coding accuracy, and enhance overall revenue performance.</p>
			<p>QuaT Claim Scrubbing Tool leverages state-of-the-art technology and intelligent algorithms to analyze and validate claims before submission. By automating the claim scrubbing process, QuaT identifies potential errors, inconsistencies, and missing information in real time, enabling your organization to correct issues proactively and increase the chances of first-pass claim acceptance.</p>
			<p>QuaT is a suite of software tools that are designed to automate quality control and assurance processes in the healthcare industry. These tools can be used by medical professionals, researchers, and other stakeholders to streamline workflows, reduce errors, and improve patient outcomes.</p>
			<p>QuaT automation tools can help healthcare professionals save time, reduce errors, and improve patient outcomes by automating repetitive tasks and ensuring that quality control and compliance processes are followed consistently.</p>
		</div>
	</div>
	<!-- <div class="col-md-6">
		<img src="<?php echo base_url('assets/img/products/quat_context.png'); ?>" alt="Insurance Eligibility">

	</div> -->
	<div class="col-md-6 quat-tutorial text-center">
		<h5>QuaT User Guide</h5>
		<video width="80%" controls>
			<source src="<?php echo base_url('assets/tutorial/quat_tutorial.webm'); ?>" type="video/webm">
			Your browser does not support the video tag.
		</video>
	</div>

</div>

<div class="row service-benefits">
	<div class="col-md-12">
		<div class="row my-5">
			<h3>Highlights of "QuaT"</h3>
		</div>
		<div class="row justify-content-center mb-sm-5">
			<div class="col-md-4 mb-3 d-flex align-items-stretch justify-content-center">
				<div class="card strip-blue">
					<span class="top-strip-blue"></span>
					<div class="card-body d-flex flex-column">
						<p class="card-text mb-4">It can help medical professionals manage large amounts of patient data, including electronic medical records, lab reports, and imaging studies. The software can automate data entry and ensure that all patient information is accurate and up-to-date.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3 d-flex align-items-stretch justify-content-center">
				<div class="card strip-green">
					<span class="top-strip-green"></span>
					<div class="card-body d-flex flex-column">
						<p class="card-text mb-4">These tools can automate quality control processes, such as checking for errors in medical records, ensuring that lab tests are performed correctly, and verifying that medications are prescribed and administered correctly.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3 d-flex align-items-stretch justify-content-center">
				<div class="card strip-blue">
					<span class="top-strip-blue"></span>
					<div class="card-body d-flex flex-column">
						<p class="card-text mb-4">It generates reports on patient outcomes, quality control processes, and compliance monitoring. These reports can help medical professionals identify areas for improvement and track progress over time.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mb-5">
			<div class="col-md-4 mb-3 d-flex align-items-stretch justify-content-center">
				<div class="card strip-blue">
					<span class="top-strip-blue"></span>
					<div class="card-body d-flex flex-column">
						<p class="card-text mb-4">By reducing the time required for testing, automation can lead to faster diagnosis and treatment, resulting in improved patient outcomes.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-3 d-flex align-items-stretch justify-content-center">
				<div class="card strip-green">
					<span class="top-strip-green"></span>
					<div class="card-body d-flex flex-column">
						<p class="card-text mb-4">QuaT automation tools can help healthcare organizations ensure compliance with regulations and standards, reducing the risk of non-compliance penalties and improving patient safety.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 key-features">
		<div class="row my-5">
			<div class="col-md-12">
				<h3>Key features and benefits of QuaT Claim Scrubbing Tool</h3>
			</div>		
			<div class="col-md-6 benefits">
				<ul>
					<li>
						<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
						<p><span>Comprehensive Claim Validation:</span> QuaT thoroughly examines claims against a robust database of payer-specific rules, regulatory requirements, and industry best practices. It checks for errors related to coding, modifiers, medical necessity, billing guidelines, and other critical parameters.</p>
					</li>
					<li>
						<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
						<p><span>Real-time Error Identification:</span> QuaT instantly flags potential errors and provides detailed alerts and suggestions for correction. This allows your billing and coding teams to address issues promptly, reducing the risk of claim denials and minimizing the need for time-consuming manual intervention.</p>
					</li>
					<li>
						<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
						<p><span>Customized Rule Engine:</span> QuaT's flexible rule engine allows you to configure and customize validation rules based on your organization's specific needs and payer requirements. This ensures that the tool aligns perfectly with your unique workflows and helps you adhere to the ever-changing billing regulations.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-6 benefits">
				<ul>
					<li>
						<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
						<p><span>Increased Revenue and Efficiency:</span> By minimizing claim denials and rejections, QuaT streamlines the revenue cycle process, accelerates reimbursement timelines, and enhances revenue generation. Its automated nature eliminates manual tasks, freeing up valuable time for your staff to focus on higher-value activities.</p>
					</li>
					<li>
						<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
						<p><span>Reporting and Analytics:</span> QuaT offers comprehensive reporting and analytics capabilities, providing you with actionable insights into claim performance, denial trends, and areas for improvement. These insights empower you to make data-driven decisions, optimize your RCM strategies, and drive financial success.</p>
					</li>
					<li>
						<img src="<?php echo base_url('assets/img/about/tick.png'); ?>" alt="->">
						<p><span>Seamless Integration:</span> QuaT seamlessly integrates with your existing RCM systems, including electronic health record (EHR) and practice management software, ensuring a smooth implementation process and minimal disruption to your operations.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 quat-screen-mobile">
		<img src="<?php echo base_url('assets/img/products/quat_ss.png'); ?>" alt="Quat Screen" width="100%">
	</div>
</div>
<div class="row">
	<div class="col-md-12 quat-screen my-4">
		<div class="row">
			<div class="col-md-5">
				<p class="init">The reduction of regular and monotonous activities is being driven by automated
					processes. The time, expense, and effort associated with submitting claims can
					be greatly reduced for businesses using <span><b>“QuaT”</b></span>.</p>
			</div>
			<div class="col-md-7"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<p class="next">Uploads, problems, warnings, and document timelines are displayed on the dashboard. <br>
					Data can be filtered by user information and the from/to dates.</p>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6 my-5 quat-center text-center">
		<div style="position: relative;">
			<h5>Need a solution for claim rejection and denial.</h5>
			<h5><span>QuaT</span> is here to assist.</h5>
			<br>
			<ul>
				<li>
					<a href="<?php echo base_url('product/get_demo/1'); ?>">
						<button type="button" class="bg-but1">GET A DEMO</button>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('product/quat_login'); ?>"  target="_blank">
						<button type="button" class="bg-but2">LOGIN</button>
					</a>
				</li>
			</ul>
			<div class="circle">OR</div>
		</div>
	</div>
	<div class="col-md-6 service-content">
		<img src="<?php echo base_url('assets/img/products/quat_context.png'); ?>" alt="Insurance Eligibility">

	</div>
	<!-- <div class="col-md-6 quat-tutorial text-center">
		<h5>QuaT User Guide</h5>
		<video width="80%" controls>
			<source src="<?php echo base_url('assets/tutorial/quat_tutorial.webm'); ?>" type="video/webm">
			Your browser does not support the video tag.
		</video>
	</div> -->
</div>

<div class="row my-5">
	<div class="col-md-12 key-features my-1">
		<h3>Frequently Asked Questions</h3>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-10 faqs">
		<div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading1">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapse1">
						Does it have integrations with the billing softwares?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading1">
					<div class="accordion-body">
						Our business model is not to integrate and have this as a stand alone tool which can work independently of the PMS.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading2">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
						How much volume can this tool process?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
					<div class="accordion-body">
						Any number of patients in a single EDI 837 file or multiple files. The result will be given after processing everything as an excel file with separate sheets for each EDI 837 file uploaded.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading3">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
						Does it check the eligibility of the patient?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
					<div class="accordion-body">
						No it does not. Claim eligibility and benefit inquiry is done with our other tool VeriT.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading4">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
						Does it give CPT codes and modifier suggestions?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
					<div class="accordion-body">
						No it does not give CPT and Modifier suggestions right now. Each practice has their own set of guidelines.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading5">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
						Is it possible to add custom rules to the rules engine?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
					<div class="accordion-body">
						Yes it is possible. We can add it on demand.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading6">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
						How often do you update the CPT coding guidelines?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
					<div class="accordion-body">
						As soon as possible, we regularly update the rule engine with the latest guidelines and customer requirements.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading7">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false" aria-controls="panelsStayOpen-collapse7">
						What kind of errors does your tool find?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse7" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading7">
					<div class="accordion-body">
						Our tool covers a list of 27 possible types of error groups such as Subscribers ID, Patient Name, Patient DOB, Patients Gender, Patients Address, Insured Address, QUAL - qualifiers, Referring Doctor, Diagnostics or Nature of Illness, Reference Number, Date of Service, Place of Service, CPT - Current Procedural Terminology, Modifier, Diagnosis pointer, Charges amount, Provider NPI, Tax Number, Patient Account Number, Facility NPI, Billing NPI, Total Charges, Billing Address, Facility Address, Billed Amount vs Allowed amount, ICD - International Classification of Diseases and NDC - National Drug Code.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading8">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false" aria-controls="panelsStayOpen-collapse8">
						Where is your tool hosted?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse8" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading8">
					<div class="accordion-body">
						Hosted in our cloud server and we can also host it at the client premises.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading9">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse9" aria-expanded="false" aria-controls="panelsStayOpen-collapse9">
						Is the tool specific to a speciality or for all?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse9" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading9">
					<div class="accordion-body">
						No it is not specific to a speciality. All the guidelines have been implemented. We can always customize it to our customers' speciality if required.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading10">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse10" aria-expanded="false" aria-controls="panelsStayOpen-collapse10">
						What is the difference between your scrubber and a clearing house scrubbers?
					</button>
				</h2>
				<div id="panelsStayOpen-collapse10" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading10">
					<div class="accordion-body">
						Our scrubber finds errors that are not covered by the clearing house scrubbers.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>

<style type="text/css">
	.quat-center{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.quat-center h5,
	.quat-tutorial h5 {
		font-family: Montserrat-SemiBold;
		color: #00252D;
	}
	.quat-center span {
		color: #32BD86;
		font-size: 30px;
	}
	.quat-center ul {
		display: flex;
		list-style-type: none;
		justify-content: center;
		margin-bottom: 0;
		padding-left: 0;
	}

	.quat-center ul li{
		width: 12rem;
	}

	.quat-center ul li:first-child{
		background: #DCDCDC 0% 0% no-repeat padding-box;
		border-radius: 30px 0px 0px 30px;
	}
	.quat-center ul li:last-child{
		background: #0A0B10 0% 0% no-repeat padding-box;
		border-radius: 0px 30px 30px 0px;
	}
	.bg-but1 {
		background: #DCDCDC 0% 0% no-repeat padding-box;
		border-radius: 30px 0px 0px 30px;
		border: none;
		padding: 10px;
		color: #0A0B10;
		font-family: HindMadurai-Medium;
	}

	.bg-but2 {
		background: #0A0B10 0% 0% no-repeat padding-box;
		border-radius: 0px 30px 30px 0px;
		color: #FFFFFF;
		border: none;
		padding: 10px;
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

	.faqs button,
	.faqs .accordion-body{
		font-family: HindMadurai-Regular;
		color: #707070;
	}

	.accordion-item{
		background-color: transparent;
	}
	.accordion-button{
		background-color: transparent;
		box-shadow: none;
	}
	.accordion-button:focus{
		box-shadow: none;
	}
	.accordion-button:not(.collapsed){
		color: #fff;
		background: transparent linear-gradient(90deg, #28A8E0 0%, #3DB9B8 100%);
	}
	.accordion-body{
		padding: 1rem 4rem;
	}

	@media only screen and (max-width: 600px) {
		.quat-center ul li{
			width: 50%;
		}
		.bg-but1{
			padding: 10px;
		}
	}
</style>