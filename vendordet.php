<?php
session_start();
include 'admin/config.php';
if(!isset($_SESSION['user_login']) && ($_SESSION['user_login'] != 'true'))
{
header("location:../psigns.php");
}
//$type=$_GET['link'];
//global $type;
?>
<?php
 if (isset($_POST['submit_now'])) 
    {
	        $uids=$_SESSION['name'];
			$names=$_POST['name'];
			$cnamess=$_POST['cnames'];
			$pnamess=$_POST['pname'];
			$models=$_POST['model'];
			$years=$_POST['year'];
			$pan=$_POST['panno'];
			$adds=$_POST['address'];
			$termsh=$_POST['termss'];
			
			$q=mysql_query("INSERT INTO partner_details(user_id,name,cnames,pname,types,years,panno,address,termss) 
										VALUES ('$uids','$names','$cnamess','$pnamess','$models','$years','$pan','$adds','$termsh')");
											
				$_SESSION['success_msg']="aaaa";


$sub_qry2=mysql_query("select name,cnames,types,address from partner_details where user_id='$uids'");
		$sub_res2=mysql_fetch_array($sub_qry2);
		$name=$sub_res2['name'];
		$company=$sub_res2['cnames'];
		$type=$sub_res2['types'];
		$address=$sub_res2['address'];
	
    $sub_qry3=mysql_query("select email,phone from vendorsh where username='$uids'");
		$sub_res3=mysql_fetch_array($sub_qry3);
		$email=$sub_res3['email'];
		$phone=$sub_res3['phone'];	
	
		
   $to = 'spark.ranjan@gmail.com'; 
   
   $subject = "Partner Has been Successfully Registered";
   $message = "Partner Detail.\n";
   $message .= "Name   : ".$name."\n";
   $message .= "Email  : ".$email."\n";
   $message .= "Phone  : ".$phone."\n";
   $message .= "Company : ".$company."\n";
   $message .= "Type  : ".$type."\n";
   $message .= "Address  : ".$address."\n";
   
								
   $from = 'spark.ranjan@gmail.com';
   $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);
   
   
   
  // echo "Mail Sent.";
  /*$to = "Email  : ".$email."\n"; 
   $subject = "Your Request Received\n";
   //$message = "Booking Detail.\n";
   $message .= "Grand Total  : Rs. ".$total_price."\n";
								$message .= "From Date  : ".$from_date."\n";
								$message .= "To Date  : ".$to_date."\n";
								$message .= "Product Name  : ".$pro_name."\n";
								$message .= "Thank you for submitting your details in zoprent.com. Our team will get in touch with you soon !\n\n";
				$message .= "www.zoprent.com\n\n";
				$message .= "7338295707/7338295505\n\n";
   $from = 'zoprent@gmail.com';
   $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);*/
		
		
		/*----------SMS START For Admin----------------------*/
								$mobl='7338295505';
								$mobl1='7338295909';
									
								$message  = " Partner Has been Successfully Registered\n";
								 $message = "Partner Detail.\n";
                             $message .= "Name   : ".$name."\n";
                             $message .= "Email  : ".$email."\n";
                            $message .= "Phone  : ".$phone."\n";
                            $message .= "Company : ".$company."\n";
                            $message .= "Type  : ".$type."\n";
                            $message .= "Address  : ".$address."\n";
								
								$msg=$message;
								$msg_body_final=urlencode($msg);
								
								//$URL = "mindappssms.in/submitsms.jsp?user=rentraja&key=458e7a768eXX&mobile=".$mobl."&message=".$msg_body_final."&senderid=RNTRAJ&accusage=1";
								$URL ="http://login.jupitersms.in/api/mt/SendSMS?user=zoprent&password=Codezop3&senderid=ZOPRNT&channel=Trans&DCS=0&flashsms=0&number=".$mobl."&text=".$msg_body_final."&route=6";
		
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $URL);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								curl_exec($ch);
								curl_close($ch);
								
								//$URL1 = "mindappssms.in/submitsms.jsp?user=rentraja&key=458e7a768eXX&mobile=".$mobl1."&message=".$msg_body_final."&senderid=RNTRAJ&accusage=1";
								$URL1 ="http://login.jupitersms.in/api/mt/SendSMS?user=zoprent&password=Codezop3&senderid=ZOPRNT&channel=Trans&DCS=0&flashsms=0&number=".$mobl1."&text=".$msg_body_final."&route=6";
		
								$ch1 = curl_init();
								curl_setopt($ch1, CURLOPT_URL, $URL1);
								curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
								curl_exec($ch1);
								curl_close($ch1);
								
									/*-----------SMS END Admin---------------------*/			
									/*----------SMS START For User----------------------*/
								
								$message="Dear ".$name."\n";
								$message .= "We have received your request. Our team will get in touch with you soon.\n";
								$message .= "www.zoprent.com";
								$msg=$message;
								$msg_body_final=urlencode($msg);
								
								//$URL = "mindappssms.in/submitsms.jsp?user=rentraja&key=458e7a768eXX&mobile=+91".$phone."&message=".$msg_body_final."&senderid=RNTRAJ&accusage=1";
								$URL ="http://login.jupitersms.in/api/mt/SendSMS?user=zoprent&password=Codezop3&senderid=ZOPRNT&channel=Trans&DCS=0&flashsms=0&number=".$phone."&text=".$msg_body_final."&route=6";
		
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $URL);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								curl_exec($ch);
								curl_close($ch);
								
									/*-----------SMS END User---------------------*/
				
			                   
				
					
				/**************Admin Email End*****************************/
				/**************User Email Start*****************************/
				
				
		
		
	header('location:thankyous.php');
		
}				
						
				
    
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>ZopRent -Self-driven Car & Motorbike Rentals-Bangalore | Goa | Mysuru | Ooty | Pondicherry |Mumbai | Hyderabad</title>
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
    </style>

    <script>
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
    background: url(assets/bg7.png);
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
<!--Google Analytics end-->	
		<link rel="stylesheet" href="style.css">
	
	<!--[if !IE]><!-->
	<style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
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
			width: 320px; }
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
		background: #333; 
		color: black; 
		font-weight: bold; 
	}
	.tabletd, th { 
		padding: 6px; 
		border: 1px solid #ccc; 
		text-align: left; 
	}
	
	</style>
</head>

<body class="common-home res layout-home5">
    <div id="wrapper" class="wrapper-full banners-effect-7">
		<?php include 'menu.php';?>
		<div class="page-title page-main-section" style="padding-top: 6%; background-position: 50% 0px;">
			<div class="container padding-bottom-top-120 text-uppercase text-center" style="padding: 41px 0;">
				<div class="main-title" style="padding-top: 4%;padding-bottom: 2%;">
				  <h1 style="color:#fff;font-family:ab3;">Vendor Details</h1>
			    </div>
			</div>
		</div>
		
		
<div class="col-lg-8" style="margin-left:250px;margin-top:2%";">
					
					 <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title" style="font-weight: bold;text-align:center;
									font-family: ab2;">Enter Your Detail</h4>
						</div>
						
						
							
						  <div class="panel-body" >
						 <form  action="" method="post" enctype="multipart/form-data">
											<fieldset id="account">
											 <div class="form-group required">
												<label for="input-payment-firstname" class="control-label">Product Owner name</label>
												<input type="text" class="form-control" placeholder="Product Owner Name" name="name" id="name" required>
											  </div>
                              <div class="form-group required">
												<label for="input-payment-fax" class="control-label">Company/Individual</label>
												<input type="text" class="form-control" id="cnames" placeholder="Company Name" name="cnames" required>
											  </div>
                              
                              <div class="form-group">
												<label for="input-payment-fax" class="control-label">Product Name</label>
												<input type="text" class="form-control" placeholder="Bajaj Honda TVS" id= "pname" name="pname">
												</div>
							   <div class="form-group">
												<label for="input-payment-fax" class="control-label">Product Type</label>
												<input type="text" class="form-control" placeholder="Bikes Cars or Both" id= "model" name="model">
												
											  </div>
							 <div class="form-group">
												<label for="input-payment-telephone" class="control-label">Product Model/Year</label>
												<input type="text" class="form-control" placeholder="Product Year" maxlength="10" id= "year" name="year">
												
											  </div>
											  <div class="form-group">
												<label for="input-payment-telephone" class="control-label">Pan No.</label>
												<input type="text" class="form-control" placeholder="Pan No." maxlength="10" id= "panno" name="panno">
												
											  </div>
											  <div class="form-group">
												<label for="input-payment-fax" class="control-label">Address</label>
										<textarea rows="2" class="form-control" id="address" name="address"  placeholder="Address"></textarea>
                                   </div>										
                                  <div class="form-group">
												<label for="input-payment-fax" class="control-label">Terms and Condition of your product</label>
										<textarea rows="5" class="form-control" id="termss" name="termss"  placeholder="Terms and Condition of your product"></textarea>
                                 </div>				
                              
                            
							
                           
                           <div class="text-right">
                              <button type="submit" class="btn btn-primary" name="submit_now" >Submit <i class="icon-arrow-right14 position-right"></i></button>
                           </div>
											</fieldset>
											</form>
							
						</div>
					  </div>
					 
					</div>
							</div>
		
		<main id="content" class="page-main" style="padding-top:4%;">
			<div class="main-container container" style="">
				<div class="info-contact clearfix">
						<div class="col-lg-12 col-sm-12 col-xs-12 contact-form">
							
							<table class="table" style="font-size: 15px;">
								<!--<thead style="font-family: ab3;">
									<tr>
										<th>S.No</th>
										<th>Vendor ID</th>
										<th>Status</th>	
										
									</tr>
								</thead>-->
								<tbody id="get_details" style="font-family: ab2;">
								
								</tbody>
							</table>
						</div>
				</div>			
			</div>
	
			
		
		</main >
		
		
		  </div>
		<script type="text/javascript"><!--
			var $typeheader = 'header-home5';
			//-->
		</script>
		<?php 
		
		include 'footer.php';
		?>

  
	

	<link rel='stylesheet' property='stylesheet' href='css/themecss/cpanel.css' type='text/css' media='all' />
	
	
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script>
	   $(document).ready(function () {
        
         $("#phone").keypress(function (e) {
        
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        
         
         	   return false;
         }
          });
		  
		   $("#name").keypress(function (e) 
				{
					if(e.which==32)
					{
						return true;
					}
						
				else if (e.which > 31 && (e.which < 65 || e.which > 90) && (e.which < 97 || e.which > 122) || e.which==13)
					{
						return false;
					}
				}); 
         });
		$(document).ready(function(){
			$("#phone").focusout(function()
			{
				var val=$("#phone").val();
				if(val!="")
				{
					var len=val.length;
					if(len!=10)
					{
						alert("Invalid Mobile Number!");
						$("#phone").val("");
						$("#phone").focus();
					}
					
				}
			});
		});
		

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

	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/toppanel.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
	
	<script type="text/javascript" src="js/themejs/accordion.js"></script>	
	<script type="text/javascript" src="js/themejs/cpanel.js"></script>

	</body>
	<div class="remodal" data-remodal-id="thankyou" style="border: 3px solid #f5be2a;">
							
						<a data-remodal-action="close" class="remodal-close"></a>
					<br>	
				<img src="assets/logo.png" alt="logo">
				  <p style="line-height:1.8;font-size:20px;">Thankyou for filling the form......!</br>
				  Our team will get in touch with you soon....!</p>
				  
		</div>
</html>