<?php
session_start();
include 'admin/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="hover-active">

<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>ZopRent -Self-driven Car & Motorbike Rentals-Bangalore | Goa | Mysuru | Ooty | Pondicherry</title>
    <meta charset="utf-8">
	<meta name="keywords" content="ZopRent, rent a motorbike online, rent a sports motorbike in Bangalore, rent scooty in Bangalore,rent self driven car in Bangalore ">
	 <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="description" content="Rent sports motorbike, motorcycle, superbikes, Bullet online in Karnataka, Self Driven car in bangalore">    
<meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
	============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
	============================================ -->

    <link rel="shortcut icon" href="assets/small.png">

    <!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!-- Theme CSS
	============================================ -->
    <link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
    <link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
    <!-- <link href="css/themecss/slider.css" rel="stylesheet"> -->
    <link id="color_scheme" href="css/home5.css" rel="stylesheet">
    <link id="color_scheme" href="css/home8.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 <style>
        .info_section {
            background: url(assets/b4.png) no-repeat;
			;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-position:center;
        }
        
        .right_box {
            background: rgba(1, 169, 196, 0.81);
            padding: 0 20px;
        }
        
        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        
        .padding {
            padding: 80px 0;
        }
		.hover-active .mybutton:hover {
    box-shadow: 1px 1px 1px #000;
}
    </style>
	<script>
	(function () {
    'use strict';

    if (!('addEventListener' in window)) {
        return;
    }

    var htmlElement = document.querySelector('html');

    function touchStart () {
        document.querySelector('html').classList.remove('hover-active');

        htmlElement.removeEventListener('touchstart', touchStart);
    }

    htmlElement.addEventListener('touchstart', touchStart);
}());
        jQuery(document).ready(function($) {

            var jssor_1_SlideoTransitions = [
                [{
                    b: 5500,
                    d: 3000,
                    o: -1,
                    r: 240,
                    e: {
                        r: 2
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    o: -1,
                    c: {
                        x: 51.0,
                        t: -51.0
                    }
                }, {
                    b: 0,
                    d: 1000,
                    o: 1,
                    c: {
                        x: -51.0,
                        t: 51.0
                    },
                    e: {
                        o: 7,
                        c: {
                            x: 7,
                            t: 7
                        }
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    o: -1,
                    sX: 9,
                    sY: 9
                }, {
                    b: 1000,
                    d: 1000,
                    o: 1,
                    sX: -9,
                    sY: -9,
                    e: {
                        sX: 2,
                        sY: 2
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    o: -1,
                    r: -180,
                    sX: 9,
                    sY: 9
                }, {
                    b: 2000,
                    d: 1000,
                    o: 1,
                    r: 180,
                    sX: -9,
                    sY: -9,
                    e: {
                        r: 2,
                        sX: 2,
                        sY: 2
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    o: -1
                }, {
                    b: 3000,
                    d: 2000,
                    y: 180,
                    o: 1,
                    e: {
                        y: 16
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    o: -1,
                    r: -150
                }, {
                    b: 7500,
                    d: 1600,
                    o: 1,
                    r: 150,
                    e: {
                        r: 3
                    }
                }],
                [{
                    b: 10000,
                    d: 2000,
                    x: -379,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: 10000,
                    d: 2000,
                    x: -379,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    o: -1,
                    r: 288,
                    sX: 9,
                    sY: 9
                }, {
                    b: 9100,
                    d: 900,
                    x: -1400,
                    y: -660,
                    o: 1,
                    r: -288,
                    sX: -9,
                    sY: -9,
                    e: {
                        r: 6
                    }
                }, {
                    b: 10000,
                    d: 1600,
                    x: -200,
                    o: -1,
                    e: {
                        x: 16
                    }
                }]
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1900);
                    jssor_1_slider.$ScaleWidth(refSize);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
<style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        
        .jssorb05 {
            position: absolute;
        }
        
        .jssorb05 div,
        .jssorb05 div:hover,
        .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        
        .jssorb05 div {
            background-position: -7px -7px;
        }
        
        .jssorb05 div:hover,
        .jssorb05 .av:hover {
            background-position: -37px -7px;
        }
        
        .jssorb05 .av {
            background-position: -67px -7px;
        }
        
        .jssorb05 .dn,
        .jssorb05 .dn:hover {
            background-position: -97px -7px;
        }
        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        
        .jssora22l,
        .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        
        .jssora22l {
            background-position: -10px -31px;
        }
        
        .jssora22r {
            background-position: -70px -31px;
        }
        
        .jssora22l:hover {
            background-position: -130px -31px;
        }
        
        .jssora22r:hover {
            background-position: -190px -31px;
        }
        
        .jssora22l.jssora22ldn {
            background-position: -250px -31px;
        }
        
        .jssora22r.jssora22rdn {
            background-position: -310px -31px;
        }
    </style>
    <style>
        @font-face {
            font-family: ab1;
            src: url(fonts/ab1.ttf);
        }
        
        @font-face {
            font-family: ab2;
            src: url(fonts/ab2.ttf);
        }
        
        @font-face {
            font-family: ab3;
            src: url(fonts/ab3.ttf);
        }
        
        @font-face {
            font-family: ab4;
            src: url(fonts/ab4.ttf);
        }
        
        @font-face {
            font-family: abc;
            src: url(fonts/abc.ttf);
        }
    </style>
    <style type="text/css">
        .no-js #loader {
            display: none;
        }
        
        .js #loader {
            display: block;
            position: absolute;
            left: 100px;
            top: 0;
        }
        
        .se-pre-con {
            position: fixed;
            left: 0px;
            font-family: abc;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: #fff;
        }
    </style>

    <style>
        h1 {
            position: relative;
            color: rgba(0, 0, 0, .3);
        }
        
        h1:before {
            content: attr(data-text);
            position: absolute;
            overflow: hidden;
            max-width: 12em;
            white-space: nowrap;
            color: #000;
            animation: loading 8s linear;
            font-family: abc;
        }
        
        @keyframes loading {
            0% {
                max-width: 0;
            }
        }
    </style>
	<style>
		.page-main-section {
    background: url(assets/Caresh.jpg);
    position: relative;
    z-index: 1;
	width: 100%;
    background-attachment: fixed !important;
    background-repeat: no-repeat;
	padding-top: 6%;
    background-position: 50% 0px;
}
		</style>
		<script src="pop/jquery-loader.js"></script>
    <link rel="stylesheet" href="pop/qunit/qunit/qunit.css" media="screen">
    <script src="pop/qunit/qunit/qunit.js"></script>
    <link rel="stylesheet" href="pop/remodal.css">
    <link rel="stylesheet" href="pop/remodal-default-theme.css">
    <script src="pop/remodal.js"></script>
    <script src="popremodal_test.js"></script>
    <style>
        .remodal-overlay.without-animation.remodal-is-opening,
        .remodal-overlay.without-animation.remodal-is-closing,
        .remodal.without-animation.remodal-is-opening,
        .remodal.without-animation.remodal-is-closing,
        .remodal-bg.without-animation.remodal-is-opening,
        .remodal-bg.without-animation.remodal-is-closing {
            animation: none;
        }
    </style>

	<!--Google Analytics Start-->	
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-97196585-1', 'auto');
		  ga('send', 'pageview');

	</script>	
	<link rel="stylesheet" href="css/style.css">
	<style>
	@media 
	only screen and (max-width: 760px),(min-device-width: 590px)
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			 padding-left: 63% !important;
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "S.NO"; }
		td:nth-of-type(2):before { content: "BOOKING ID"; }
		td:nth-of-type(3):before { content: "PICKUP LOCATION"; }
		td:nth-of-type(4):before { content: "VEHICLE NAME"; }
		td:nth-of-type(5):before { content: "FROM DATE"; }
		td:nth-of-type(6):before { content: "TO DATE"; }
		td:nth-of-type(7):before { content: "TOTAL PRICE"; }
		td:nth-of-type(8):before { content: "STATUS; }
		
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 400px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	td {
    border: none;
    border-bottom: 1px solid #eee;
    position: relative;
   
}	
		
		
	}
	/* 
	Generic Styling, for Desktops/Laptops 
	*/
	.table { 
		width: 100%; 
		border-collapse: collapse; 
	}
	/* Zebra striping */
	.table tr:nth-of-type(odd) { 
		background: #e4e1e1; 
	}
	.table th { 
		background: #004066; 
		color: #fff; 
		font-weight: bold; 
	}
	.tabletd, th { 
		padding: 6px; 
		border: 1px solid #ccc; 
		text-align: left; 
	}
	@media (max-width: 590px) {
		#mobs_div
		{
			width:100%;
			margin-left:90px;
			
		}
		#mobsh_divs
		{
			width:100%;
			
		}
		#mobsh_divs
		{
			width:400px;
			
		}
		
		}
	</style>
	<script>
	$("#anchorID").on("click", function() {
   // your JS code
});
	</script>
	</head>
<body class="common-home res layout-home5">
    <div id="wrapper" class="wrapper-full banners-effect-7">
		<!-- Header Container  -->
		<?php include 'menu1.php';?>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="page-title page-main-section" style="padding-top: 6%; background-position: 50% 0px;">
			<div class="container padding-bottom-top-120 text-uppercase text-center" style="padding: 41px 0;">
				<div class="main-title" style="padding-top: 4%;padding-bottom: 2%;">
				  <h1 style="color:#fff;font-family:ab3;">Booking History</h1>
			    </div>
			</div>
		</div>
		
		<main id="content" class="page-main" style="padding-top:4%;">
			<div class="main-container container" style="">
				<div class="info-contact clearfix">
					<div class="row">
				<div class="col-md-12">
					<div class="my-profile-div">
						<div class="row">
							<!------left bar start------>
							

							<div class="col-lg-3 col-sm-3 col-xs-3" id="mobs_div">
								
										<ul>


											<li><a id="anchorID"
												href="#" onclick="toggleVisibility('Menu2');" > <span> <img
														src="assets/profile.png"
														style="padding-left: 50px;" alt="" />
												</span>
													<h2 style="color:#004066;">Personal Detail</h2>
											</a></li>

											<li class="voler-point-menu-list"><a id="anchorID"
												href="#" onclick="toggleVisibility('Menu3');"> <span> <img
												       src="assets/Place.png"
														style="padding-left: 50px;" 
														alt="">
												</span>
													<h2 style="color:#004066;padding-left:10px;">My Address</h2>
											</a></li>
											<li data-toggle="tab"><a id="anchorID" href="#" onclick="toggleVisibility('Menu1');">
													<span> <img
														src="assets/bookings.png" style="padding-left: 50px;"
														alt="">
												</span>
													<h2 style="color:#004066;padding-left:5px;">My Bookings</h2>
											</a></li>

											<li><a id="anchorID"
												 href="#" onclick="toggleVisibility('Menu4');"> <span> <img
														src="assets/license.png" style="padding-left: 50px;"
														alt="">
												</span>
													<h2 style="color:#004066;padding-left:-10px;">Driving License</h2>
											</a></li>
											
												
											


										</ul>
									
								
							</div>

							<div class="col-md-9 right-column" id="Menu1" style="display: block;">

										<div class="row">
            <div class="col-lg-12"> 
<div class="bs-component">
                    <ul class="nav nav-tabs responsive">
                        <li class="active">
                            <a data-toggle="tab" href="#tab1">Pending Booking</a>
                        </li>
                        <li>    
                            <a data-toggle="tab" href="#tab2">Completed</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3">Cancelled</a>
                        </li>
                              
                     </ul>

<div class="tab-content">
    <div id="tab1" class="tab-pane fade active in">
        <table class="table table-striped table-bordered table-hover footable toggle-medium">
            <thead style="font-family: ab3;background:#004066;color:#fff;">
			<th style="background:#004066;color:#fff;">S.No</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Booking ID</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Pickup Location</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Product Name</th>
										<th style="background:#004066;color:#fff;" data-hide="all">From Date</th>
										<th style="background:#004066;color:#fff;" data-hide="all">To Date</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Total Price</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Status</th>	
                 
             </thead>
             <tbody>
                 <?php
								$user_id=$_SESSION['user_id'];
									$i=1;
									$sql=mysql_query("select * from booking_details where user_id='$user_id' and status='Success'");
									$count=mysql_num_rows($sql);
								if($count>=1)
								{
										
									while($row=mysql_fetch_array($sql))
									{
										$vendor_id=$row['vendor_id'];
										//$phones=$row['phone'];
										
										$sub_qry=mysql_query("select vendor_location from vendor where id='$vendor_id'");
										$sub_res=mysql_fetch_array($sub_qry);
										$location=$sub_res['vendor_location'];
										
										$sub_id=$row['sub_category'];
										$sub_qry1=mysql_query("select name from sub_category where id='$sub_id'");
										$sub_res1=mysql_fetch_array($sub_qry1);
										$product=$sub_res1['name'];
										
										$f_date=$row['from_date'];
										$ch1=explode("-",$f_date);
										$from_date=$ch1[2]."-".$ch1[1]."-".$ch1[0];
										
										$t_date=$row['to_date'];
										$ch2=explode("-",$t_date);
										$to_date=$ch2[2]."-".$ch2[1]."-".$ch2[0];
										
										$status=$row['status'];
										if($status=="Success")
										{
											$status="Pending";
										}
										
										echo '
										<tr>
											<td>'.$i.'</td>
											<td>'.$row['booking_id'].'</td>
											<td>'.$location.'</td>
											<td>'.$product.'</td>
											<td>'.$from_date.'</td>
											<td>'.$to_date.'</td>
											<td> <i class="fa fa-inr"></i> '.$row['total_price'].'</td>
											<td>'.ucwords($status).'</td>
										</tr>
										
										';
										$i++;
									}
								}
								else
								{
									echo '<tr>
											<td colspan="8" style="text-align:center;color: black;font-weight: 800;"><h3>No Bookings!</h3>
																<h4>
																	Not tried a ZopRent yet!<br>Try one now.
																</h4>
																<a href="products.php?id=Bikes&first=1&uid=Bangalore"><button type="submit"
																		class="btn btn-primary">Book Now</button></a>
</td>

										</tr>
										';
									
								}
									
								
								?>
								</tbody>
             </tbody>
         </table>
     </div>
     <div id="tab2" class="tab-pane fade active">
             <table class="table table-striped table-bordered table-hover footable toggle-medium">
            <thead style="font-family: ab3;background:#004066;color: #fff;">
			<th style="background:#004066;color:#fff;">S.No</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Booking ID</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Pickup Location</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Product Name</th>
										<th style="background:#004066;color:#fff;" data-hide="all">From Date</th>
										<th style="background:#004066;color:#fff;" data-hide="all">To Date</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Total Price</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Status</th>	
                 
             </thead>
             <tbody>
                 <?php
								$user_id=$_SESSION['user_id'];
									$i=1;
									$sql=mysql_query("select * from booking_details where user_id='$user_id' and status='finished'");
									$count=mysql_num_rows($sql);
								if($count>=1)
								{
										
									while($row=mysql_fetch_array($sql))
									{
										$vendor_id=$row['vendor_id'];
										
										$sub_qry=mysql_query("select vendor_location from vendor where id='$vendor_id'");
										$sub_res=mysql_fetch_array($sub_qry);
										$location=$sub_res['vendor_location'];
										
										$sub_id=$row['sub_category'];
										$sub_qry1=mysql_query("select name from sub_category where id='$sub_id'");
										$sub_res1=mysql_fetch_array($sub_qry1);
										$product=$sub_res1['name'];
										
										$f_date=$row['from_date'];
										$ch1=explode("-",$f_date);
										$from_date=$ch1[2]."-".$ch1[1]."-".$ch1[0];
										
										$t_date=$row['to_date'];
										$ch2=explode("-",$t_date);
										$to_date=$ch2[2]."-".$ch2[1]."-".$ch2[0];
										
										$status=$row['status'];
										if($status=="Success")
										{
											$status="Pending";
										}
										
										echo '
										<tr>
											<td>'.$i.'</td>
											<td>'.$row['booking_id'].'</td>
											<td>'.$location.'</td>
											<td>'.$product.'</td>
											<td>'.$from_date.'</td>
											<td>'.$to_date.'</td>
											<td> <i class="fa fa-inr"></i> '.$row['total_price'].'</td>
											<td>'.ucwords($status).'</td>
										</tr>
										
										';
										$i++;
									}
								}
								else
								{
									echo '<tr>
											<td colspan="8" style="text-align:center;color: black;font-weight: 800;"><h3>No Bookings!</h3>
																<h4>
																	Not tried a ZopRent yet!<br>Try one now.
																</h4>
																<a href="products.php?id=Bikes&first=1&uid=Bangalore"><button type="submit"
																		class="btn btn-primary">Book Now</button></a>
</td>

										</tr>
										';
									
								}
									
								
								?>
								</tbody>
             </tbody>
         </table>
     </div>
	 <div id="tab3" class="tab-pane fade active">
        <table class="table table-striped table-bordered table-hover footable toggle-medium">
             
            <thead style="font-family: ab3;background:#004066;color: #fff;">
			<th style="background:#004066;color:#fff;">S.No</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Booking ID</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Pickup Location</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Product Name</th>
										<th style="background:#004066;color:#fff;" data-hide="all">From Date</th>
										<th style="background:#004066;color:#fff;" data-hide="all">To Date</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Total Price</th>
										<th style="background:#004066;color:#fff;" data-hide="all">Status</th>	
                 
             </thead>
             <tbody>
                 <?php
								$user_id=$_SESSION['user_id'];
									$i=1;
									$sql=mysql_query("select * from booking_details where user_id='$user_id' and status='rejected'");
									$count=mysql_num_rows($sql);
								if($count>=1)
								{
										
									while($row=mysql_fetch_array($sql))
									{
										$vendor_id=$row['vendor_id'];
										
										$sub_qry=mysql_query("select vendor_location from vendor where id='$vendor_id'");
										$sub_res=mysql_fetch_array($sub_qry);
										$location=$sub_res['vendor_location'];
										
										$sub_id=$row['sub_category'];
										$sub_qry1=mysql_query("select name from sub_category where id='$sub_id'");
										$sub_res1=mysql_fetch_array($sub_qry1);
										$product=$sub_res1['name'];
										
										$f_date=$row['from_date'];
										$ch1=explode("-",$f_date);
										$from_date=$ch1[2]."-".$ch1[1]."-".$ch1[0];
										
										$t_date=$row['to_date'];
										$ch2=explode("-",$t_date);
										$to_date=$ch2[2]."-".$ch2[1]."-".$ch2[0];
										
										$status=$row['status'];
										if($status=="Success")
										{
											$status="Pending";
										}
										
										echo '
										<tr>
											<td>'.$i.'</td>
											<td>'.$row['booking_id'].'</td>
											<td>'.$location.'</td>
											<td>'.$product.'</td>
											<td>'.$from_date.'</td>
											<td>'.$to_date.'</td>
											<td> <i class="fa fa-inr"></i> '.$row['total_price'].'</td>
											<td>'.ucwords($status).'</td>
										</tr>
										
										';
										$i++;
									}
								}
								else
								{
									echo '<tr>
											<td colspan="8" style="text-align:center;color: black;font-weight: 800;"><h3>No Bookings!</h3>
																<h4>
																	Not tried a ZopRent yet!<br>Try one now.
																</h4>
																<a href="products.php?id=Bikes&first=1&uid=Bangalore"><button type="submit"
																		class="btn btn-primary">Book Now</button></a>
</td>

										</tr>
										';
									
								}
									
								
								?>
								</tbody>
             </tbody>
         
         </table>
     </div>
   </div>
									
								</div>
							</div>
							<!------right bar end------>
						
					</div>
					
				</div>
				<div class="col-md-9 right-column" id="Menu2" style="display: none;"><h1>Personal Details</h1>
				<?php
				$user_id=$_SESSION['user_id'];
				
				$ban_qry=mysql_query("select * from users where id='$user_id'");
$ban_res=mysql_fetch_array($ban_qry);
$name=$ban_res['username'];
$email=$ban_res['email'];
$phone=$ban_res['phone'];?>
				<form role="form" class="form-horizontal" action="" method="post" id="">
											<div class="row">
												<div class="col-sm-3">
													<label>Name</label>
												</div>
												<div class="col-sm-9">
													<label><?php echo $name;?></label>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-3">
													<label>Email</label>
												</div>
												<div class="col-sm-9">
													<label><?php echo $email;?></label>
												</div>
											</div>
											

											<div class="row">
												<div class="col-sm-3">
													<label>Phone</label>
												</div>
												<div class="col-sm-9">
													<label><?php echo $phone;?></label>
												</div>
											</div>
											

											<div class="row">
												<div class="col-sm-12">
													<hr>
												</div>
											</div>
											
												
											

											



										</form>
				</div>
					
					<div class="col-md-9 right-column" id="Menu3" style="display: none;"><h1>Delivery Address</h1>
					<?php
					$user_ids=$_SESSION['user_id'];
					$ban_qrys1=mysql_query("select name,address from booking_details where user_id='$user_ids'");
$ban_res2=mysql_fetch_array($ban_qrys1);
$names=$ban_res2['name'];
$address=$ban_res2['address'];
					?>
					<div class="row">
												<div class="col-sm-3">
													<label>Name</label>
												</div>
												<div class="col-sm-9">
													<label><?php echo $names;?></label>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-3">
													<label>Address</label>
												</div>
												<div class="col-sm-9">
													<label><?php echo $address;?></label>
												</div>
											</div></div>
<div class="col-md-9 right-column" id="Menu4" style="display: none;"><h1>Driving License</h1>
<div class="row">
												<div class="col-sm-3">
													<label>Not Uploaded</label>
												</div>
												<div class="col-sm-9">
													<label></label>
												</div>
											</div>
</div>

			</div>
				</div>			
			</div>
	
			
		
		</main >
		
		<!-- //Main Container -->
		  </div>
		 
		<script type="text/javascript"><!--
			var $typeheader = 'header-home5';
			//-->
		</script>
		<?php 
		
		include 'footer.php';
		?>

  
	

	<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
	
	
	
	

	<script>
    var divs = ["Menu1", "Menu2", "Menu3", "Menu4"];
    var visibleDivId = null;
    function toggleVisibility(divId) {
      if(visibleDivId === divId) {
        visibleDivId = null;
      } else {
        visibleDivId = divId;
      }
      hideNonVisibleDivs();
    }
    function hideNonVisibleDivs() {
      var i, divId, div;
      for(i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if(visibleDivId === divId) {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
      }
    }
</script>
		

</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>


	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/toppanel.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	
	<script type="text/javascript" src="js/themejs/accordion.js"></script>	
	<script type="text/javascript" src="js/themejs/cpanel.js"></script>

		<!--Popup Start-->
	
	
	</body>
	
</html>
