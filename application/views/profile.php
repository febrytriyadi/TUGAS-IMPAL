<!DOCTYPE html>
<html lang="en">

<head>
	<title>Apotik Online | Profile</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
	<!--//tags -->
	<link href="<?php echo base_url("css/bootstrap.css") ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url("css/style.css") ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url("css/font-awesome.css") ?>" rel="stylesheet">
	<!--pop-up-box-->
	<link href="<?php echo base_url("css/popuo-box.css") ?>" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/jquery-ui1.css") ?>">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<style type="text/css">
	th{
		text-align: center;
		color: white;
	}
	table tr th{
		color: black;
	}
	footer{
		margin: 25px;
	}
</style>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p><span style="margin-left: 50px"><?php echo $this->session->userdata('nama') ?></span>
			<a href="<?php echo base_url("C_login/logout") ?>" style="float: right; margin-right: 50px;">Logout</a>
		</p>	
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.html">
						<span>A</span>potik
						<span>O</span>nline
						<img src="<?php echo base_url("css/img/obatpil.jpg") ?>" alt=" " style="width: 130px;">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- Teks bergerak -->
			<div style="text-align: center; font-size: 30px; font-family: Comic Sans MS, cursive, sans-serif;color: orange">
				<script language="JavaScript">
    				var text="Welcome <?php echo $this->session->userdata('nama'); ?> to Apotik Online";
    				var delay=30;
    				var currentChar=1;
   					var destination="[none]";
    				function type(){
    				//if (document.all)
    				{
    				var dest=document.getElementById(destination);
    				if (dest)// && dest.innerHTML)
    				{
    					dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
    					currentChar++;
    				if (currentChar>text.length){
    					currentChar=1;
    					setTimeout("type()", 3000);
    				}else{
    					setTimeout("type()", delay);
    				}
    				}
    				}
    				}
    				function startTyping(textParam, delayParam, destinationParam){
    					text=textParam;
    					delay=delayParam;
    					currentChar=1;
    					destination=destinationParam;
    					type();
    				}
    			</script>
    		<b><div id="texthestination"></div></b>
    		<script language="JavaScript">
    			javascript:startTyping(text, 50, "texthestination");
    		</script>
    		</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="<?php echo base_url("C_login/index") ?>">Home</a>
						<i>|</i>
					</li>
					<li>
						Profile
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_login/komplain") ?>">Komplain</a>
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_login/backtraking") ?>">Backtraking</a>
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_login/data_komplain") ?>">Histori</a>
						<i>|</i>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
	<div class="col-md-4" style="background-color: lightgrey; width: 300px; height: 300px; border:1; padding:25px;margin: 25px;">
		<form>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>BPJS</th>
					<th> : </th>
					<th><?php echo $this->session->userdata('BPJS') ?></th>
				</tr>
				<tr>
					<th>Nama</th>
					<th> : </th>
					<th><?php echo $this->session->userdata('nama') ?></th>
					<th><a href="#" style="float: right;">Edit</a></th>
				</tr>
			</thead>
		</table>
		</form>	
	</div>
	<div class="col-md-4" style="background-color: lightgrey; width: 350px; height: 300px; border:1; padding:25px;margin: 25px;">
		<form>
		<table class="table table-striped">
			<thead>
				<tr style="width: auto;">
					<th>Email</th>
					<th> : </th>
					<th><?php echo $this->session->userdata('email') ?></th>
				</tr>
				<tr>
					<th>Notlp</th>
					<th> : </th>
					<th><?php echo $this->session->userdata('notlp') ?>
					<a href="#" style="margin-left: 20px;">Edit</a></th>
				</tr>
			</thead>
		</table>
		</form>
	</div>
	<div class="col-md-4" style="background-color: lightgrey; width: 300px; height: 300px; border:1; padding:25px;margin: 25px;">
		<form>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Password</th>
					<th> : </th>
					<th><?php echo $this->session->userdata('password') ?></th>
					<th><a href="#" style="float: right;">Edit</a></th>
				</tr>
			</thead>
		</table>
		</form>
	</div>
	</div>
	<div class="type" style="margin-top: 20px">
		<div class="container">
			<h3 class="tittle-w3l">My Profile
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
		</div>
	</div>
	<!-- //page -->
	<footer>
		<div class="container">
			<!-- footer first section -->
			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Track Your Order</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Free & Easy Returns</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-times" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Online cancellation </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Categories</h3>
						<ul>
							<li>
								<a href="product.html">Obat Batuk</a>
							</li>
							<li>
								<a href="product.html">Obat Flu</a>
							</li>

						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="about.html">About Us</a>
							</li>
							<li>
								<a href="contact.html">Contact Us</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> Jalan Telekomunikasi No 1 Bandung, Indonesia.</li>
							<li>
								<i class="fa fa-mobile"></i> 0813 9593 9188 </li>
							<li>
								<i class="fa fa-phone"></i> +6281 3953 9188 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="gmailto:triyadifebry@gmail.com"> triyadifebry@gmail.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			<div class="agile-sometext">

				<!-- payment -->
				<div class="sub-some child-momu">
					<h5>Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>Copyright © 2018 Apotik Online. All rights reserved
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="<?php echo base_url("js/jquery-2.1.4.min.js") ?>"></script>
	<!-- //jquery -->

	<!-- smoothscroll -->
	<script src="<?php echo base_url("js/SmoothScroll.min.js") ?>"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="<?php echo base_url("js/move-top.js") ?>"></script>
	<script src="<?php echo base_url("js/easing.js") ?>"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventhefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="<?php echo base_url("js/bootstrap.js") ?>"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>