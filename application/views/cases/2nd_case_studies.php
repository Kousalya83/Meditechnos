<style type="text/css">
	body {
		background-color: #F8F8F8;
	}

	.banner {
		background: url("<?php echo base_url('assets/img/case/2_banner_bg.png'); ?>");
		background-size: cover;
		margin-top: 95px;
		text-align: center;
		height: 40vh;
		display: flex;
		align-items: center;
	}

	.banner-content h2 {
		font-family: Montserrat-Bold;
		letter-spacing: 0px;
		color: #00252D;
		opacity: 1;
	}

	.banner-content p {
		font-family: HindMadurai-Medium;
		letter-spacing: 0px;
		color: #0A0B10;
		margin: 0;
		opacity: 1;
	}

	.quat-cases {
		padding: 5%;
	}

	.quat-cases h2 {
		font-family: Montserrat-Bold;
		color: #00252D;
	}
	.quat-cases h5 {
		font-family: Montserrat-SemiBold;
		color: #00252D;
	}

	.quat-cases p {
		font-family: HindMadurai-Regular;
		color: #707070;
	}

	table.table{
		font-family: Montserrat-Bold;
		border-style: hidden;
		box-shadow: 0px 0px 20px #00000029;
		border-radius: 20px;
	}

	table thead{
		background-color: #00252D;
		color: #FFFFFF;
	}
	table thead tr th:first-child{
		border-top-left-radius: 20px;
	}
	table thead tr th:last-child{
		border-top-right-radius: 20px;
	}

	table tbody{
		background-color: #FFFFFF;
		color: #00252D;
	}

	table tbody tr:last-child td:first-child{
		border-bottom-left-radius: 20px;
	}
	table tbody tr:last-child td:last-child{
		border-bottom-right-radius: 20px;
	}

	table thead tr,
	table tbody tr{
		height: 4rem;
	}
	table thead tr th,
	table tbody tr td{
		border: 1px solid #A2A2A2;
	}

	.rcm-services {
		font-family: HindMadurai-Regular;
		background-color: #F6FAFF;
		color: #707070;
		padding: 15px 30px;
	}

	.rcm-services ul {
		list-style-image: url("<?php echo base_url('assets/img/case/tick.png'); ?>");
	}

	.rcm-services ul li {
		padding: 10px 20px;
		padding-right: 0;
	}

	.quat-charts {
		background-color: #F6FAFF;
	}

	.quat-charts h5 {
		font-family: Montserrat-Medium;
		color: #FFFFFF;
		background: #828282 0% 0% no-repeat padding-box;
		margin-bottom: 0;
		padding: 15px 50px;
	}

	.problems h5 {
		background: #828282 0% 0% no-repeat padding-box;
	}

	.solutions h5 {
		background: #3FACE7 0% 0% no-repeat padding-box;
	}

	.outcome {
		font-family: Montserrat-Bold;
		color: #00252D;
	}

	.problems h6 {
		font-family: Montserrat-Bold;
		color: #00252D;
		padding-left: 50px;
	}
	.problems p{
		font-family: HindMadurai-Regular;
    	color: #707070;
    	padding-left: 50px;
	}

	.img-adjust {
		width: 75%;
	}

	.top-navigate-btns a{
		display: inline-block;
		background: transparent;
		height: 10px;
		width: 10px;
		border-radius: 50%;
		border: 1px solid #1DB2C4;
	}
	.top-navigate-btns a.active,
	.top-navigate-btns a.btn:hover{
		background: #1DB2C4;
		border: 1px solid #1DB2C4;
	}

	.navigate-btns a{
		display: inline-block;
		text-decoration: none;
		padding: 8px 16px;
		background: transparent linear-gradient(90deg, #1DB2C4 0%, #28B6A3 100%) 0% 0% no-repeat padding-box;
		font-family: Montserrat-Medium;
		color: white;
		border: none;
	}
	.next{
		cursor: not-allowed;
	}

	@media only screen and (min-width: 600px) {
		table.table{
			width: 50%;
		}

		.quat-charts img{
			height: 600px;
		}
	}

	@media only screen and (max-width: 600px) {
		.banner {
			margin-top: 75px;
		}

		.img-adjust {
			width: 100%;
		}

		.rcm-services {
			padding: 15px 0;
		}

		.quat-charts img{
			padding: 10px;
		}
	}
</style>
<div class="row banner">
	<div class="col-md-4"></div>
	<div class="col-md-4 d-flex text-center align-items-center">
		<div class="banner-content">
			<h2>Case Studies - 2</h2>
			<p>We helped a number of RCM houses to improve process, efficiency, quality, financial performance and bottom - line results.</p>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="top-navigate-btns text-center">
			<a href="1" class="top-first"></a>
			<a class="top-second active"></a>
		</div>
	</div>
	<div class="quat-cases">
		<h2>How MediTechnos Solutions optimizes resources and cost using QuaT.</h2>
		<p>“Incorporate Automation“ - We aim to automate the pre-claim submission audit. MediTechnos Solutions has expertise in providing automation tools.</p>
		<br>

		<h2>Background:</h2>
		<p>The QuaT tool was implemented with the primary objective of auditing their pre-claims before submission to the clearing house and increasing the rate of clean claims. It was rolled out after extensive testing and calibration, with the hope of improving the financial health of the organization.</p>
		<br>

		<h2>Methodology:</h2>
		<p>We compared the number of resources assigned in auditing the pre-claims one month before and one month after the implementation of the QuaT tool. Here are the specific figures:</p>

		<div class="table-responsive d-flex justify-content-center">
			<table class="table text-center">
				<thead class="align-middle">
					<tr>
						<th>Month</th>
						<th>Resources Allocated</th>
						<th>Resource Cost (In USD)</th>
					</tr>
				</thead>
				<tbody class="align-middle">
					<tr>
						<td>April 2023</td>
						<td>12</td>
						<td>4352</td>
					</tr>
					<tr>
						<td>May 2023</td>
						<td>4</td>
						<td>1450</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br>

		<h2>Findings:</h2>
		<p>The data shows a promising initial impact of the QuaT tool. This may be attributed to increased efficiency in the auditing process or a rise in clean claims.</p>
		<p>After QuaT tool implementation the count has reduced to 4 people. Now the remaining 8 people are used efficiently for better processes where the human mind’s analytical skills are required.</p>
		<p>Our tool has saved $2902 USD per month as it has reduced the total resources. The cost to the company saved is more than the cost of the QuaT Tool.</p>
		<br>

		<h2>Graphical Representation:</h2>
		<h5 class="text-center">Resources Allocated and Resource Cost (In USD)</h5>
		<div class="row quat-charts">
			<!-- <div class="col-md-1"></div> -->
			<div class="col-md-12">
				<img class="mx-auto" src="<?php echo base_url('assets/img/case/2_chart.png'); ?>" alt="Claim Charts" width="100%">
				<br>		
			</div>
			<!-- <div class="col-md-1"></div> -->
		</div>
		<br>

		<h2>Conclusion:</h2>
		<p>While it is encouraging to see the positive impact of the QuaT tool in the first month, it is essential to monitor these metrics over a more extended period to ensure the sustainability of these improvements. However, the initial results are promising and support the effectiveness of the QuaT tool in reducing resources and increasing clean claims.</p>
		
	</div>
</div>
<div class="row">
	<div class="navigate-btns text-center">
		<a href="1" class="btn btn-primary previous">&laquo; Previous</a>
		<a class="btn btn-primary next">Next &raquo;</a>
	</div>
</div>