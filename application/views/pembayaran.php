<!DOCTYPE html>
<html lang="zxx">
 <head>
	<title>Apotik Online | Checkout | Pembayaran</title>
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
	td{
		text-align: center;
	}
	th{
		text-align: center;
		color: white;
	}
	footer{
		margin: 25px;
	}
</style>
 <body>
	<!-- top-header -->
	<div class="header-most-top">
		<p><span style="margin-left: 50px"><?php echo $this->session->userdata('nama'); ?></span>
			<a href="data_obat.html" style="float: right; margin-right: 50px;">Logout</a>
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
				<!-- header lists -->
				
				<!-- //header lists -->
				<!-- search -->
				
				<!-- //search -->
				<!-- Teks bergerak -->
			<div style="text-align: center; font-size: 50px; font-family: Comic Sans MS, cursive, sans-serif;color: orange">
				<script language="JavaScript">
    				var text="Welcome to <?php echo $this->session->userdata('nama') ?> Apotik Online";
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
    		<b><div id="textDestination"></div></b>
    		<script language="JavaScript">
    			javascript:startTyping(text, 50, "textDestination");
    		</script>
    		</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="<?php echo base_url("C_admin/data_obat") ?>">Home</a>
						<i>|</i>
					</li>
					<li>
						Checkout
						<i>|</i>
					</li>
					<li>
						Pembayaran
						<i>|</i>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container" style="padding: 50px">
		
	</div>
	<!-- //page -->
	<div class="container">
		<div class="bs-docs-example">
			<center>
			<button class="btn btn-danger" style="width: 200px; height: 200px;border-radius: 10px;" data-target="#disini" data-toggle="modal">Bayar di tempat</button>
			<button class="btn btn-primary" style="width: 200px; height: 200px;border-radius: 10px;" data-target="#transfer" data-toggle="modal">Bayar transfer</button>
		</center>
		</div>
		<div class="modal fade" id="transfer" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							&times;
						</button>
						
					</div>
					<div class="modal-body">
						<table>
							<tr> BNI </tr>
							<tr>
								<td> a/n </td>
								<td> : </td>
								<td> anis canatiks </td>
							</tr>
							<tr>
								<td> norek </td>
								<td> : </td>
								<td> 1234567 </td>
							</tr>
 						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="disini" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							&times;
						</button>
					</div>
					<div class="modal-body">
						<h3>Successfull...</h3>
						<h1>Di Tunggu yaa....</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="type" style="margin-top: 20px">
		<div class="container">
			<h3 class="tittle-w3l">Pembayaran
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
		</div>
	</div>
	<div class="row">
	<footer class="footer-distributed" style="background-color: lightgrey;height: 200px;">
	<div class="fluid-container" style="margin-top: -50px;">
		<div class="col-md-4">
		<h1>
			<a>
				<span style="color: red;">A</span>potik
				<span style="color: red;">O</span>nline
			</a>
		</h1>
		</div>

		<div class="col-md-4">
			<div>
				<i class="fa fa-map-marker"></i>
					<span> Jalan Telekomunikasi No 1</span> Bandung, Indonesia
			</div>
			<br>
			<div>
				<i class="fa fa-phone"></i>
				+6281395939188
			</div>
			<br>
			<div>
				<i class="fa fa-envelope"></i>
					<a href="mailto:support@company.com">support@apoline.com</a>
			</div>
		</div>
		<div class="col-md-4">
			<p class="footer-company-about">
				<span>About Apotik Online</span>
				Apotik Online the best for trading potion healing and pill healing. 
			</p>

			<div class="footer-icons">
				<a href="#">
					<i class="fa fa-facebook"></i>
				</a>
				<a href="#">
					<i class="fa fa-twitter"></i>
				</a>
				<a href="#">
					<i class="fa fa-instagram"></i>
				</a>
				<a href="#">
					<i class="fa fa-whatsapp"></i>
				</a>
			</div>
		</div>
	</div>
	</footer>
	</div>
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
 	<!-- popup modal (for signin & signup)-->
	<script src="<?php echo base_url("js/jquery.magnific-popup.js") ?>"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
 		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->
 	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js
 		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;
 			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}
 			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->
 	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
 		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
 	<!-- smoothscroll -->
	<script src="<?php echo base_url("js/SmoothScroll.min.js") ?>"></script>
	<!-- //smoothscroll -->
 	<!-- start-smooth-scrolling -->
	<script src="<?php echo base_url("js/move-top.js") ?>"></script>
	<script src="<?php echo base_url("js/easing.js") ?>"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
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