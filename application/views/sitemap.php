<style>
	body {
		background-color: #F8F8F8;
	}

	a,
	a:hover{
		text-decoration: none;
		color: #6A6A6A;
	}

	.container{
		margin-top: 150px;
		margin-bottom: 30px;
	}

	.home{
		font-family: Montserrat-Bold;
		background: #3FACE7 0% 0% no-repeat padding-box;
		color: #FFFFFF;
		text-align: center;
		opacity: 1;
		padding: 1.5%;
	}

	.pages-link{
		display: flex;
		justify-content: center;
		background: transparent linear-gradient(180deg, #3EACE5 0%, #27B7A7 100%) 0% 0% no-repeat padding-box;
		border-radius: 15px;
		padding: 15px;
		margin-bottom: 5px;
	}

	.pages-links{
		font-family: Montserrat-SemiBold;
		color: #6A6A6A;
		width: 100%;
	}

	.link-content{
		text-align: center;
		background: #FFFFFF;
		border-radius: 15px;
		padding: 10% 0;
	}

	.link-content img{
		margin-bottom: 5%;
		transform-style:preserve-3d;
		transition:all 1.5s;
	}

	.link-content:hover img{
		transform:rotateY(360deg);
	}

	.inner-pages button{
		font-family: Montserrat-Medium;
    	background: transparent linear-gradient(180deg, #3EACE5 0%, #27B7A7 100%) 0% 0% no-repeat padding-box;
    	border-radius: 11px;
    	border: none;
    	width: 100%;
    	color: #FFFFFF;
    	margin-bottom: 5px;
    	text-align: left;
    	padding: 5%;
    	padding-right: 0;
    	transition: 0.25s;
	}
	.inner-pages button.product-list{
		text-align: center;
	}

	@media only screen and (max-width: 600px){
		.container{
			margin-top: 110px;
		}
	}
</style>
<div class="container">
	<div class="row my-4">
		<a class="home" href="<?php echo base_url(''); ?>">
			Home Page
		</a>
	</div>
	<div class="row">
		<div class="col-md">
			<div class="pages-link">
				<a class="pages-links" href="<?php echo base_url('about'); ?>">
					<div class="link-content">
						<img src="<?php echo base_url('assets/img/policies/about.png'); ?>" alt="About Us">
						<br>
						<span>About Us</span>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md drop-down">
			<div class="pages-link">
				<a class="pages-links" >
					<div class="link-content">
						<img src="<?php echo base_url('assets/img/policies/product.png'); ?>" alt="Products">
						<br>
						<span>Products</span>
					</div>
				</a>
			</div>
			<div class="inner-pages fade-down">
				<a href="<?php echo base_url('product/quat'); ?>">
					<button class="product-list">QuaT</button>
				</a>
				<a href="<?php echo base_url('product/prodt'); ?>">
					<button class="product-list">ProdT</button>
				</a>
				<a href="<?php echo base_url('product/verit'); ?>">
					<button class="product-list">VeriT</button>
				</a>
				<a href="<?php echo base_url('product/doat'); ?>">
					<button class="product-list">DoaT</button>
				</a>
				<a href="<?php echo base_url('product/claist'); ?>">
					<button class="product-list">ClaisT</button>
				</a>
			</div>
		</div>
		<div class="col-md">
			<div class="pages-link">
				<a class="pages-links" href="<?php echo base_url('casestudies'); ?>">
					<div class="link-content">
						<img src="<?php echo base_url('assets/img/policies/case.png'); ?>" alt="Case Studies">
						<br>
						<span>Case Studies</span>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md">
			<div class="pages-link">
				<a class="pages-links" href="<?php echo base_url('contact'); ?>">
					<div class="link-content">
						<img src="<?php echo base_url('assets/img/policies/contact.png'); ?>" alt="Contact Us">
						<br>
						<span>Contact Us</span>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>