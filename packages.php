<?php
session_start();
include 'admin/config.php';
date_default_timezone_set('Asia/Calcutta');

?>
<title>ZopRent -Self-driven Car & Motorbike Rentals-Bangalore | Goa | Mysuru | Ooty | Pondicherry | Hyderabad | Mumbai</title>
    <meta charset="utf-8">
	<meta name="msvalidate.01" content="BB36471903B1CCE02D0D60EFC38ABBC8" />
	<meta name="keywords" content="ZopRent, rent a motorbike online, rent a sports motorbike in Bangalore, rent scooty in Ooty,rent self driven car in Bangalore ">
    <meta name="description" content="Rent sports motorbike, motorcycle, superbikes, Bullet online in Karnataka, Self Driven car in bangalore,Ooty,Mumbai,Hyderabad,Goa,Mysore,Pondicherry">    
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
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <style>
	
	.page-main-section {
    background: url(assets/Package_banner.jpg);
    position: relative;
    z-index: 1;
	width: 100%;
    background-attachment: fixed !important;
    background-repeat: no-repeat;
	padding-top: 6%;
    background-position: 50% 0px;
}
        .info_section {
            background: url(assets/b4.png) no-repeat;
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
		@media (max-width: 590px) {
		#mysd
		{
			margin-top:10px !important;
			
			
		}
		#editUserPopUp
		{
			margin-top:30px !important;
			
			
		}
		}
		
		.required:after {
  content: '*';
  color: #EF5F5F;
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
	<script>
	function getUserName(username) {
  var $modal = $('#editUserPopUp'),
      $userName = $modal.find('#userName');
  $userName.val(username);
  $modal.modal("show");
  $.cookie('username',$userName.val());
  //console.log($.cookie('username'));
}

	</script>
	<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1945186389056283');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=1945186389056283&ev=PageView
&noscript=1"/>
</noscript>

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
  <!--Popup Start-->
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
	</head>
		

<body class="common-home res layout-home1">
    <div id="wrapper" class="wrapper-full banners-effect-7">
		<!-- Header Container  -->
			<?php include 'menu1.php';?>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		
		<div class="page-title page-main-section" style="padding-top: 6%; background-position: 50% 0px;">
  <div class="container padding-bottom-top-120 text-uppercase text-center" style="padding: 41px 0;">
    <div class="main-title" style="padding-top: 4%;padding-bottom: 2%;">
       <h1 style="color:#fff;font-family:ab2;">Select Your Favourite Destination</h1>
      <h5 style="color:#fff;font-family:ab2;">Enjoy the journey!!</h5>
      
     </div>
  </div>
</div>
		
		<main id="content" class="page-main" style="padding-top: 4%; padding-bottom:1%">
			<div class="main-container container" style="" id="form">
	
	<div class="row ">
    <div class="col-sm-1 col-md-2"></div>
      <div class="col-xs-12 col-sm-12 col-md-112 text-center about-us about-demo-1">
	  
	  <h2 class="about-title line-hori" ><span style="font-size: 35px; font-family: ab2; color: #000;font-weight: bold;">Featured <span style="color: #004066;">Packages</span></span></h2>
	  
      
                                
     
        
      </div>
      
    </div>					
			 <div class="row">
						<div class="col-md-12">	
						
						<div class="row" style="padding-top: 0%;"> 
					
					<div class="row" style="padding-top:4%;"> 
									 
									
									 
									<div class="col-md-4 col-sm-4 col-xs-12 text-center">
										 
										 
										 <img src="assets/icons/andam.jpg" alt="image" height="130" width="220"><h4 style="font-family: ab2;">Andaman</h4>
										   
										  
										      <h4 style="margin-top: 10px;font-family: ab2;font-weight:bold;"><i class="fa fa-inr" aria-hidden="true">
											  
											  </i> 30,000/person</h4><p style="color:#004066;"><b>Onwards</b></p>
										<div class="query-submit-button top30">
												
												<a href="#package">
											
										   <input type="button" value="Book Now" onclick="getUserName(this.id)" id="Andaman" style="text-align:center;font-size:12px;color:#fff;font-family: ab2;border: 1px solid #004066;background: #004066;border-radius: 3px;
									width: 50%;
									padding: 6px 4px 6px 5px;"></a>
												
										</div>
									 
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12 text-center" id="mysd">
										 
										 
										<img src="assets/icons/keral.jpg" alt="image" height="130" width="220"><h4 style="font-family: ab2;">Kerala</h4>
										   
										  
										      <h4 style="margin-top: 10px;font-family: ab2;font-weight:bold;"><i class="fa fa-inr" aria-hidden="true">
											  
											  </i> 20,000/person</h4><p style="color:#004066;"><b>Onwards</b></p>
										<div class="query-submit-button top30">
												
												<a href="#package">
											
										   <input type="button" value="Book Now" onclick="getUserName(this.id)" id="Kerala" style="text-align:center;font-size:12px;color:#fff;font-family: ab2;border: 1px solid #004066;background: #004066;border-radius: 3px;
									width: 50%;
									padding: 6px 4px 6px 5px;"></a>
												
										</div>
									 
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12 text-center" id="mysd">
										 
										 
										 <img src="assets/icons/goasj.jpg" alt="image" height="130" width="220"><h4 style="font-family: ab2;">Goa</h4>
										   
										  
										      <h4 style="margin-top: 10px;font-family: ab2;font-weight:bold;"><i class="fa fa-inr" aria-hidden="true">
											  
											  </i> 15,000/person</h4><p style="color:#004066;"><b>Onwards</b></p>
										<div class="query-submit-button top30">
												
												<a href="#package">
											
										   <input type="button" value="Book Now" onclick="getUserName(this.id)" id="Goa" style="text-align:center;font-size:12px;color:#fff;font-family: ab2;border: 1px solid #004066;background: #004066;border-radius: 3px;
									width: 50%;
									padding: 6px 4px 6px 5px;"></a>
												
										</div>
									 
									</div>
									
									</div>
						</div>
							</div>				 
						
						</div>
									
							

                    <div class="row">
						<div class="col-md-12">	
						
						<div class="row" style="padding-top: 0%;"> 
					
					<div class="row" style="padding-top:4%;">							
									
									<div class="col-md-4 col-sm-4 col-xs-12 text-center">
										 
										 
										 <img src="assets/icons/hps.jpg" alt="image" height="130" width="220"><h4 style="font-family: ab2;">Himachal Pradesh</h4>
										   
										  
										      <h4 style="margin-top: 10px;font-family: ab2;font-weight:bold;"><i class="fa fa-inr" aria-hidden="true">
											  
											  </i> 20,000/person</h4><p style="color:#004066;"><b>Onwards</b></p>
										<div class="query-submit-button top30">
												
												<a href="#package">
											
										   <input type="button" value="Book Now" onclick="getUserName(this.id)" id="Himachal Pradesh" style="text-align:center;font-size:12px;color:#fff;font-family: ab2;border: 1px solid #004066;background: #004066;border-radius: 3px;
									width: 50%;
									padding: 6px 4px 6px 5px;"></a>
												
										</div>
									 
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12 text-center" id="mysd">
										 
										 
										 <img src="assets/icons/nagar.jpg" alt="image" height="130" width="220"><h4 style="font-family: ab2;">Nagarhole</h4>
										   
										  
										      <h4 style="margin-top: 10px;font-family: ab2;font-weight:bold;"><i class="fa fa-inr" aria-hidden="true">
											  
											  </i> 10,000/person</h4><p style="color:#004066;"><b>Onwards</b></p>
										<div class="query-submit-button top30">
												
												<a href="#package">
											
										   <input type="button" value="Book Now" onclick="getUserName(this.id)" id="Nagarhole" style="text-align:center;font-size:12px;color:#fff;font-family: ab2;border: 1px solid #004066;background: #004066;border-radius: 3px;
									width: 50%;
									padding: 6px 4px 6px 5px;"></a>
												
										</div>
									 
									</div>
									 
									</div>
									</div> 
							</div>
							</div>
						
						</div>
			 <div class="remodal" data-remodal-id="package" id="editUserPopUp" style="box-shadow: 0 -1px 23px rgba(0,0,0,.06), 0 4px 6px rgba(0,0,0,.09); border: 2px solid #01a9c4;">
				<a data-remodal-action="close" class="remodal-close" data-dismiss="modal"></a>
				<div class="modal-body" style="padding:0px;">
					<div class="row">
                        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" >
							<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<form action="packg.php" method="post" enctype="multipart/form-data" class="form-horizontal">
									<fieldset style="width:100%"> 
										<img src="logos.png" />
										<h3 style="font-family:ab3;">Enquiry Form For Package</h3>
										   <div class="form-group required">
												<div class="col-sm-12">
													<input type="text" id="userName" name="userName" value=""  class="form-control" required placeholder="Destination" class="input-medium" disabled  style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
													<!--<input id="userName" type="text" class="input-medium" disabled />-->
												</div>
											</div>
											<div class="form-group required"> 
												<div class="col-sm-12">
													<input type="text" name="s_name" value="" id="s_name" class="form-control" required placeholder="Name" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
											<div class="form-group required">
												<div class="col-sm-12">
													<input type="text" name="s_email" value="" id="s_email" class="form-control" required placeholder="Email" onchange="validate_email();" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
											<div class="form-group required">
												<div class="col-sm-12">
													<input type="text" name="s_phone" value="" id="s_phone" maxlength="10" pattern="\d{10}" title="Please enter valid 10 digits" class="form-control" required placeholder="Phone"  style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div> 
											<div class="form-group">  
												<div class="col-sm-12">
													<select name="vids" value="" id="vids" class="form-control" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
													<option><b>Preferred Vehicle</b></option>
<option>SUV</option>
<option>Sedan</option>
<option>Hatchback</option>
<option>Bike</option>
<option>Scooty</option>
</select>
												</div>
											</div> 
											
											<div class="form-group">
												<div class="col-sm-12">
													<!--<input type="text" name="stys" value="" id="stys" class="form-control"  placeholder="Stay/Semi Deluxe/Deluxe/SuitRooms/" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">-->
													<select name="stys" value="" id="stys" class="form-control" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
													<!--<select id="country">-->
<option><b>Preferred Stay</b></option>
<option>Suite Room</option>
<option>Deluxe</option>
<option>Semi Deluxe</option>
</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<input type="number" name="vqty" value="" id="vqty" class="form-control"  placeholder="Number of People" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-12">
													<input type="number" name="days" value="" id="days" class="form-control"  placeholder="Number of Days" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
									</fieldset>
											<button class="btn btn-default " type="submit" name="submit" id="submit" style="background-color: #004066;
    color: #fff;
    border: none;">
											<span>Submit</span>
										</button>
											
							
								</form>
							</div>
								
						</div>
					</div>
                </div>
            </div>			
						
						
			
		
		</main >
		<!-- //Main Container -->
		
		<script type="text/javascript"><!--
			var $typeheader = 'header-home5';
			//-->
		</script>
		<!-- Footer Container -->
			<?php include 'footer.php';?>
		<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	
	

	<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
	
	<!-- Preloading Screen -->
	<!-- <div id="loader-wrapper"> -->
		<!-- <div id="loader"></div> -->
		<!-- <div class="loader-section section-left"></div> -->
		<!-- <div class="loader-section section-right"></div> -->
	 <!-- </div> -->
	<!-- End Preloading Screen -->
	
	<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	
		<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	 
    
	<script>
	function validate_email()
			{
					var x=$("#s_email").val();
					
				var atpos = x.indexOf("@");
				var dotpos = x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
				{
					alert("Invalid E-mail address....!");
					$("#s_email").val("");
					
					return false;
				}
				check_email_available();
			}
  </script>
  <script type="text/javascript">
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 848977300;
    w.google_conversion_label = "UZzwCNyM2nIQlLvplAM";
    w.google_remarketing_only = false;
  }
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
</script>
<script>
<!-- Google Code for Package Lead Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 848977300;
var google_conversion_label = "iUkLCIvG2IABEJS76ZQD";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript"  
src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt=""  
src="//www.googleadservices.com/pagead/conversion/848977300/?label=iUkLCIvG2IABEJS76ZQD&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
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

    <script>
        
        $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
	 <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-97196585-1', 'auto');
		  ga('send', 'pageview');

	</script>	
 
	
	</body>
</html>