<!DOCTYPE html>
<html lang="en">

<head>
	<title>Apotik Online | Admin | Data Pemesanan</title>
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
		<p><span style="margin-left: 50px">Admin</span>
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
						<img src="http://localhost/apotik/css/img/obatpil.jpg" alt=" " style="width: 130px">
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
						<a href="<?php echo base_url("C_admin/data_obat") ?>">Home</a>
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_admin/tambahobat") ?>">Pengadaan Obat</a>
						<i>|</i>
					</li>
					<li>
						Daftar Pemesanan
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_admin/laporan") ?>">Laporan</a>
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
	<!-- //page -->
	<div class="container" style="background-image: ">
		<div class="bs-docs-example">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>ID pesanan</th>
				<th>Nama pembeli</th>
				<th>Nama obat</th>
				<th>Jumlah</th>
				<th>Total Harga</th>
				<th>Alamat Kirim</th>
				<th>Tanggal</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			</thead>
				<?php foreach ($data as $key): ?>
			<tbody>
			<tr>	
				<td>PSN<?php echo $key->no_pesanan; ?></td>
				<td><?php echo $key->nama; ?></td>
				<td><?php echo $key->nama_obat; ?></td>
				<td><?php echo $key->jumlah; ?></td>
				<td>Rp <?php echo $key->total_harga; ?></td>
				<td><?php echo $key->alamat_kirim; ?></td>
				<td><?php echo $key->tanggal_pemesanan; ?></td>
				<td><?php echo $key->status; ?></td>
				<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit"><i class="glyphicon glyphicon-pencil"></i></button>
                	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i></button></td>
			</tr>
			</tbody>
				<?php endforeach; ?>
		</table>
		<div id="edit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Edit Pemesanan</h4>
                    </div>
                    <div class="modal-footer">
                        <form method="post">
                        <input type="hidden" name="no_pesanan" value="<?php echo $key->no_pesanan; ?>">
                        <div class="col-md-8">
                        <center>
                            <select class="form-control" name="proses">
                                <option value="On Proses">On Proses</option>
                                <option value="Delived">Delived</option>
                                <option value="Done">Done</option>
                            </select>
                        </center>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                    </div>
                    <div class="modal-footer">
                        <form method="post">
                        <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                        <input type="hidden" name="no_pesanan" class="form-control" value=<?php echo "'".$key->no_pesanan."'"; ?>>
                        <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		</div>
	</div>
	<br>
	<br>
	<div class="type">
		<div class="container">
			<h3 class="tittle-w3l">Data Pemesanan
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
	<footer>
	<div class="copy-right">
		<div class="container">
			<p>Copyright © 2018 Apotik Online. All rights reserved
			</p>
		</div>
	</div>
	</footer>
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