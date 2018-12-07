<!DOCTYPE html>
<html lang="en">

<head>
	<title>Apotik Online | Admin | Laporan</title>
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
		<p><span style="margin-left: 50px"><?php echo $this->session->userdata('nama') ?>Admin</span>
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
			<div style="text-align: center; font-size: 40px; font-family: Comic Sans MS, cursive, sans-serif;color: orange">
				<script language="JavaScript">
    				var text="Welcome to Admin Apotik Online";
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
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="<?php echo base_url("C_admin/tambahobat") ?>">Home</a>
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_admin/tambahobat") ?>">Pengadaan Obat</a>
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_admin/data_pesanan") ?>">Daftar Pemesanan</a>
						<i>|</i>
					</li>
					<li>
						Laporan
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_admin/data_komplain") ?>">Daftar Komplain</a>
						<i>|</i>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container" style="padding: 50px">

		<form method="post" action="<?php echo base_url("C_admin/proses_laporan") ?>">
			<div class="input-group w3_w3layouts">
				<span class="input-group-addon" id="nama_laporan">Nama Laporan</span>
				<select name="nama_laporan" style="width: 100%; padding: 2px;">
					<option value="" required="">Select</option>
					<option value="tambah obat" required="">Pengadaan Obat</option>
					<option value="obat terjual" required="">Obat terjual</option>
				</select>
			</div>
			<div class="input-group w3_w3layouts">
				<span class="input-group-addon" id="nama_obat">Nama Obat</span>
				<input type="text" class="form-control" name="nama_obat" placeholder="Nama Obat" aria-describedby="basic-addon1">
			</div>
			<div class="input-group w3_w3layouts">
				<span class="input-group-addon" id="tanggal">Tanggal</span>
				<input type="date" class="form-control" name="tanggal" placeholder="" value="<?php echo date("Y-m-d"); ?>" aria-describedby="basic-addon1">
			</div>
			<div class="input-group w3_w3layouts">
				<span class="input-group-addon" id="jumlah">Jumlah</span>
				<input type="text" class="form-control" name="jumlah" placeholder="Jumlah" aria-describedby="basic-addon1">
			</div>
			<div class="input-group w3_w3layouts">
				<span class="input-group-addon">Total Harga</span>
				<input type="text" class="form-control" name="total_harga" aria-label="Amount (to the nearest dollar)">
				<span class="input-group-addon">.00</span>
			</div>
			<div class="input-group w3-w3layouts col-md-12">
				<input type='reset' class="btn btn-danger" style="width:50%" value='Batal'/>
            	<input type='submit' class="btn btn-primary" data-toggle="modal" data-target="#sukses" style="width:50%" value='Simpan'/>
			</div>
		</form>
	</div>
	<div id="sukses" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Successfull...</h4>
                    </div>
                    <div class="modal-footer">
                        <form method="post">
                        <!--<input type="hidden" name="no_pesanan" class="form-control" value=<?php echo "'".$key->no_komplain."'"; ?>>-->
                        <button type="submit" class="btn btn-primary">Ok</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
	<div class="type" style="margin-top: 20px">
		<div class="container">
			<h3 class="tittle-w3l">Laporan
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
		</div>
	</div>
	<!-- //page -->
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