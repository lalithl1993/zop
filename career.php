<?php
session_start();
include 'admin/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Basic page needs
	============================================ -->
	 <title>ZopRent -Self-driven Car & Motorbike Rentals-Bangalore | Goa | Mysuru | Ooty | Pondicherry | Mumbai | Hyderabad</title>
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
	<link href="css/contact.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
		.careers{
    min-height: 380px;
    transition: height 0.2s ease;
	}
	
	   .carloc {
    margin: 0px 8px;
    color: #335b6b;
    display: inline-block;
}
		
		
		.carjob {
    cursor: pointer;
    padding: 18px 22px;
    margin: 0px 0px 20px;
    text-align: left;
    border: 1px solid #1b6682;
    border-radius: 2px;
    display: block;
    text-decoration: none;
    transition: background 0.3s ease;
    color: #333;
}
.fieldLabel {
    display: block;
    margin: 15px 0px 5px;
}

.catsh {
    font-size: 16px;
    line-height: 32px;
    margin: 0px 10px 0px 0px;
    border-right: 1px solid #eee;
    color: #1b6682;
}
.catshcat {
    font-size: 12px;
    color: #fb3;
}
.catshcatsh {
    transition: all .5s ease;
}
.work-options {
    padding: 0 20px 0 40px;
    flex: 3;
    height: 775px;
    overflow-y: overlay;
}

.fw-w {
    flex-wrap: wrap;
}
.jc-sb {
    justify-content: space-between;
}

.d-f {
    display: flex;
}

.ai-c {
    align-items: center;
}

.ai-c {
    align-items: center;
}

.jc-sb {
    justify-content: space-between;
}

.d-f {
    display: flex;
}
.cur-p {
    color: #999;
}

.c-ptr, .cur-p {
    cursor: pointer;
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
		#myDIV {
    width: 50%;
	 padding: 0px 20px;
    text-align: justify;
    
    margin-top:20px;
    
}
#myDIVs {
    width: 50%;
	 padding: 0px 20px;
    text-align: justify;
    
    margin-top:20px;
    
}
#myDIVsh {
    width: 50%;
	 padding: 0px 20px;
    text-align: justify;
    
    margin-top:20px;
    
}
@media (max-width: 590px) {
		.modsi
		{
	
    width: 300px;
		margin-left:-60px;
		padding-right:10px;
		font-size:12px;
		}
		.dodsi
		{
		
   width: 300px;
   margin-left:-40px;
		overflow-y:hidden;
		font-size:12px;
		}
		.rowss
		{
        width:100%;
		margin-left:-50px;
		font-size: 16px;
		}
		.rowsi
		{
        width:360px;
		margin-left:-50px;
		font-size: 12px;
		}
		
		}
		@media (max-width: 768px) {
		.modsis
		{
		width: 360px;
		margin-left:-60px;
		padding-right:10px;
		
		}
		.dodsis
		{
		
   width: 400px;
		margin-left:-40px;
		font-size:12px;
		overflow-y:hidden;
		}
		.lesd{
		padding-top:50%;
		width:100%;
		}
		}

    </style>
	<style>
		.page-main-section {
    background: url(assets/FB_career.jpg);
    position: relative;
	width: 100%;
    background-repeat: no-repeat;
	padding-top: 6%;
    background-position: 50% 0px;
}
@media (max-width: 768px) {
		.mobs
		{
		width: 100%;
		padding-top: 6%; 
		padding-bottom: 50%;
		padding-right: 50%;
		background-position: 40%;
		}
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
<!--Google Analytics Start-->	
</head>

<body class="common-home res layout-home5">
    <div id="wrapper" class="wrapper-full banners-effect-7">
		<!-- Header Container  -->
		<?php include 'men1.php';?>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div class="page-title page-main-section lesd mobs" style="padding-top: 40%; background-position: 50% 0px;">
  <div class="container padding-bottom-top-120 text-uppercase text-center" style="padding: 41px 0;">
    <div class="main-title" style="padding-top: 4%;padding-bottom: 2%;">
      <!--<h1 style="color:#fff;font-family:ab3;">JOIN US</h1>-->
     </div>
  </div>
</div>


			<main id="content" class="page-main" style="padding-top:4%;">
			<div class="main-container container" style="">
			<H2 align="center" style="font-family:ab3;font-size: 23px;padding-bottom:2%;">WORK WITH <span style="color:#004066;"> US</span></H2>
			<div class="about-text" style="color:#000;font-family:ab2;">
<p style="text-align:justify;line-height:2;color:#000;font-weight:500;font-size: 15px;">We are looking for dynamic professionals who want to explore a steep learning curve to accelerated responsibility and success, while enjoying the journey and making it a fun experience for those they work with. 
   We believe in well-rounded individuals who’re ready to make a difference in the market. There’s always more to an individual than meets the eye</p></br>
   <p style="text-align:justify;line-height:2;color:#000;font-weight:500;font-size: 15px;">Being a part of ZopRent Family means you can make time for all the 
   things you are passionate.Our workplace is designed to promote joy and productivity.If you are excited by what you’ve read above about us, and if you are an achiever with passion, energy, integrity and a 
   mission to excel, this is the place for you. JOIN US!!!</p>
							</div>
									
			<div class="info-contact clearfix">
			
			<div class="col-lg-12 col-sm-12 col-xs-12 contact-form">
			
			
								<div class="col-md-12">
								<div class="container">
  <h2 class="rowss">OUR OPEN POSITION</h2>
  <div class="panel-group" id="accordion" style="padding-top:40px;">
  
    <div class="panel modsi modsis" id="jobs" style="border: 2px solid #f2f2f2;background-color:#004066;">
      <div class="panel-heading" style="color:#fff;">
        <h4 class="panel-title" style="color:#fff;">
          <a  data-toggle="collapse" data-parent="#accordion" data-id="Software Engineer" href="#collapse1">
		                                                                         
                                   <div><span style="color:#fff;font-size:22px" >Software Engineer<span >(Bangalore)</span></span></div><br/>
                                    <div class="catshcatsh">We are looking for Software Engineer who possesses a passion for pushing mobile technologies to the limits</div>
									<p align="right" onclick="myFunction()" style="color:#ddd;">Job Description</p>
									
									
                                </a>
		  
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body dodsi dodsis" style="background-color:#fff;">
		<div class="work-options fw-w col-md-10" ><div ><div class="d-f ai-c jc-sb"> </div> <div class="jobDetails"><p align="center"><strong>Software Engineer</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong><br></strong></p>
<p><strong>Required Education:</strong>&nbsp;</p>
<p>B.Tech./ BE - Computer, MCA, IT</p>
<p>&nbsp;</p>
<p><strong>Roles and Responsibilities:</strong>&nbsp;</p>
<ul>
<li>1-2 year of web development with php,javascript,jquery and media query.</li>
<li>Collaborate with cross-functional teams to define, design, and ship new features.</li>
<li>Design, build, and maintain high performance, reusable, and reliable code.</li>
<li>Strong knowledge of php laravel framework, how to deal with different screen sizes.</li>
<li>Familiarity with RESTful APIs to connect Android applications to back-end services.</li>
<li>Ability to understand business requirements and translate them into technical requirements.</li>

</ul>
<p>&nbsp;</p>
<p><strong>Skills:</strong>&nbsp;</p>
<li>Proven software development experience and web development.</li>
<li>Proven working experience in Android app development and
Have published at least two to three website.</li>
<li>Experience working with remote data via REST and JSON.</li>
<li>Working knowledge of the general mobile landscape, architectures, trends, and emerging technologies.</li>
<li>Excellent Knowledge in PHP,javascript,Bootsrao SQL,Mysql, XML</li>
<ul>

</ul></p> <hr></div> <div class="ta-c" align="center"><button class="apply-button o-n" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color:#004066;color:white;font:50px;width:200px"><b style="width:180px;">Apply</b></button></div></div> <!----> <!----></div>
</div>
      </div>
    </div>
	<br/>
    <!--<div class="panel modsi modsis" id="jobs" style="border: 2px solid #f2f2f2;background-color:#004066;">
      <div class="panel-heading" style="color:#fff;">
        <h4 class="panel-title" style="color:#fff;">
          <a data-toggle="collapse" data-parent="#accordion" data-id="Reasearch Analyst" href="#collapse3"><div><span  style="color:#fff;font-size:22px">Research Analyst<span  style="color:#fff;">(Bangalore)</span></span></div>
                         <br/> <div class="catshcatsh">We are looking for an Research Analyst who possesses a passion for research and marketing to expand to other parts of world.</div>
						 <p align="right" onclick="myFunctionsi()" style="color:#ddd;">Job Description</p>
                                </a> 
        </h4>
      </div>
     <!-- <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body dodsi dodsis" style="background-color:#fff;"><div class="work-options fw-w col-md-10"><div ><div class="d-f ai-c jc-sb">
    </div> <div class="jobDetails"><p align="center"><strong>Research Analyst</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong><br></strong></p>
<p><strong>Required Education:</strong>&nbsp;</p>
<p>Any Graduate/ Post Graduate</p>
<p>&nbsp;</p>
<p><strong>Roles and Responsibilities:</strong>&nbsp;</p>
<ul>
<li>0-2 year of experience.</li>
<li>Conduct global primary and secondary research and preparing reports comprising of market trends, business research, company profiling, market mapping, market sizing, strategies etc.</li>
<li>Remain fully informed on market trends, other parties researches and implement best practices.</li>
<li>Open to go on field visit whenever required.</li>
<li>Analyse the data, key findings etc.</li>
<li>Participate in team development / team management</li>

</ul>
<p>&nbsp;</p>

<p><strong>Skills:</strong>&nbsp;</p>
<ul>
<li>Excellent verbal and written communication in English</li>
<li>Excellent knowledge of MS-Office,MS-Excel and Strong communication & presentation skills.</li>
<li>Knowledge on Secondary Research, Internet Research, Business Contacts Research, Data Mining, Database Management, Data Analysis, Contact Discovery will be
helpful.</li>
<li>Collect the information via telephonic, primary (filed visit, meeting with managers & other person) or secondary research (Google, Facebook,LinkedIn, Bloomberg, Justdial, Indiamart, News, Articles etc.)</li>

</ul></p> <hr></div> <div class="ta-c" align="center"><button class="apply-button o-n" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color:#004066;color:white;font:50px;width:200px"><b style="width:180px;">Apply</b></button></div></div> <!----> <!----></div>
<!--</div>
      </div>
    </div>-->
	<br/>
	
    <div class="panel modsi modsis" id="jobs" style="border: 2px solid #f2f2f2;background-color:#004066;">
      <div class="panel-heading" style="color:#fff;">
        <h4 class="panel-title" style="color:#fff;">
          <a data-toggle="collapse" data-parent="#accordion" data-id="Buisness Development Executive" href="#collapse2"><div><span style="color:#fff;font-size:22px">Business Development Executive<span>(Bangalore)</span></span></div>
                                  <br/>  <div class="catshcatsh">Get into the core of marketing. Negotiate your way to strong business partnerships.</div>
								  <p align="right" onclick="myFunctions()" style="color:#ddd;">Job Description</p>
									
                               </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body dodsi dodsis" style="background-color:#fff;"><div class="work-options fw-w col-md-10"><div ><div class="d-f ai-c jc-sb">
		</span></div> <div class="jobDetails"><p align="center"><strong>Buisness Development Executive</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong><br></strong></p>
<p><strong>Required Education:</strong>&nbsp;</p>
<p>Any Graduate / Post Graduate</p>
<p>&nbsp;</p>
<p><strong>Roles and Responsibilities:</strong>&nbsp;</p>
<ul>
<li>1-2 year of experience.</li>
<li>Closes new business deals by coordinating requirements; developing and negotiating contracts; integrating contract requirements with business operations.</li>
<li>Arrange business meetings with prospective clients.</li>
<li>Promote the company’s products/services addressing or predicting clients’ objectives.</li>
<li>Build long-term relationships with new and existing customers.</li>
<li>Conduct research to identify new markets and customer needs.</li>

</ul>
<p>&nbsp;</p>
<p><strong>Skills:</strong>&nbsp;</p>
<li>Proficiency in English.</li>
<li>Proven working experience as a business development manager, sales executive or a relevant role.</li>
<li>Market knowledge and ability to build reports.</li>
<li>Time Management and Planning skills.</li>
<ul>

</ul></p> <hr></div> <div class="ta-c" align="center"><button class="apply-button o-n" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color:#004066;color:white;font:50px;width:200px"><b style="width:180px;">Apply</b></button></div></div> <!----> <!----></div>
</div>
      </div>
    </div>

	
   <!-- <br/>
   <div class="panel modsi modsis" id="jobs" style="border: 2px solid #f2f2f2;background-color:#004066;">
      <div class="panel-heading" style="color:#fff;">
        <h4 class="panel-title" style="color:#fff;">
          <a data-toggle="collapse" data-parent="#accordion" data-id="Customer Support Executive" href="#collapse4"><div><span style="color:#fff;font-size:22px">Customer Support Executive<span>(Bangalore)</span></span></div>
                                  <br/>  <div class="catshcatsh">Looking for a Customer Support Executive who is willing to work in a highly dynamic learning environment.</div>
								  <p align="right" onclick="myFunctions()" style="color:#ddd;">Job Description</p>
									
                               </a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body dodsi dodsis" style="background-color:#fff;"><div class="work-options fw-w col-md-10"><div ><div class="d-f ai-c jc-sb">
		</span></div> <div class="jobDetails"><p align="center"><strong>Customer Support Executive</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong><br></strong></p>
<p><strong>Required Education:</strong>&nbsp;</p>
<p>PUC/10+2 passed / Graduate </p>
<p>&nbsp;</p>
<p><strong>Roles and Responsibilities:</strong>&nbsp;</p>
<ul>
<li>0-2 year of experience.</li>
<li>Customer Support Executive would be answering calls related to Customer Query/Complains.</li>
<li>Support Executive is to Ensure high quality and maintain AHT.</li>
<li>Customer Support Executive should maintain CSR (Customer satisfaction rating) above 80%.</li>
<li>Should have basic knowledge of Emails.</li>
<li>Customer Support Executive would be taking up other telephonic interactions with the customers.</li>

</ul>
<p>&nbsp;</p>
<p><strong>Skills:</strong>&nbsp;</p>
<li>High Fluency in Hindi, English, Kannada is must</li>
<li>Team Player</li>
<li>Able to handle pressure in case of high load</li>
<li>Follow communication “scripts” when handling different topics</li>
<li>Identify customers’ needs, clarify information, research every issue and provide solutions and/or alternatives</li>
<li>Meet personal/team qualitative and quantitative targets</li>
<li>Strong phone and verbal communication skills along with active listening</li>
<li>Ability to multi-task, set priorities and manage time effectively</li>
<li>Practices and adheres to "Code of Conduct"</li>
<li>Complies with documented attendance/punctuality policies</li>
<ul>

</ul></p> <hr></div> <div class="ta-c" align="center"><button class="apply-button o-n" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color:#004066;color:white;font:50px;width:200px"><b style="width:180px;">Apply</b></button></div></div> <!----> <!--</div>
<!--</div>
      </div>
    </div>	
	
	<br/>
	
   <!-- <div class="panel modsi modsis" id="jobs" style="border: 2px solid #f2f2f2;background-color:#004066;">
      <div class="panel-heading" style="color:#fff;">
        <h4 class="panel-title" style="color:#fff;">
          <a data-toggle="collapse" data-parent="#accordion" data-id="Animation & Graphic Designer" href="#collapse5"><div><span style="color:#fff;font-size:22px">Animation & Graphic Designer<span>(Bangalore)</span></span></div>
                                  <br/>  <div class="catshcatsh">We are looking for Graphic designer is for creating advertisement, images, animation and creatives for website.</div>
								  <p align="right" onclick="myFunctions()" style="color:#ddd;">Job Description</p>
									
                               </a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body dodsi dodsis" style="background-color:#fff;"><div class="work-options fw-w col-md-10"><div ><div class="d-f ai-c jc-sb">
		</span></div> <div class="jobDetails"><p align="center"><strong>Animation & Graphic Designer</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong><br></strong></p>
<p><strong>Required Education:</strong>&nbsp;</p>
<p>PUC/10+2 passed / Graduate </p>
<p>&nbsp;</p>
<p><strong>Roles and Responsibilities:</strong>&nbsp;</p>
<ul>
<li>0-2 year of experience.</li>
<li>You should have good proficiency in Adobe Photoshop and Illustrator</li>
<li>Work on brand identity (logos, brochures, etc.), website layout and mobile user-interfaces</li>
<li>Design and develop aesthetically pleasing marketing content for print, web, mobile, email and social media</li>
<li>Understand and interpret clients language into a design brief</li>
<li>Ability to prototype in responsive web technologies (HTML/CSS if required) is preferred</li>
<li>Innovate to redefine a design brief within the constraints of cost and time</li>
</ul>
<p>&nbsp;</p>
<p><strong>Skills:</strong>&nbsp;</p>
<li>You should be able to develop creatives for products of various kinds that are interesting and appealing to consumers.</li>
<li>You will need to create original work and develop ideas around the themes.You also need to have an eye for detail.</li>
<li>You should be efficient in your design approach for being able to complete work in due time.</li>
<li>Some assignments can take a long time and multiple iterations to give the consumers a desired result.</li>
<li>You will brainstorm ideas and concepts on multiple projects with different designers and thus should be able to get along</li>  
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with people,manage the projects and obtain the best team result.
<li>Our company is a startup and thus you have to work fast, adapt quickly , learn new things and get the job done within time.</li>

<ul>

</ul></p> <hr></div> <div class="ta-c" align="center"><button class="apply-button o-n" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color:#004066;color:white;font:50px;width:200px"><b style="width:180px;">Apply</b></button></div></div> <!----> <!---</div>
<!--</div>
      </div>
    </div>	
	
	
	
	<br/>
	
   <!-- <div class="panel modsi modsis" id="jobs" style="border: 2px solid #f2f2f2;background-color:#004066;">
      <div class="panel-heading" style="color:#fff;">
        <h4 class="panel-title" style="color:#fff;">
          <a data-toggle="collapse" data-parent="#accordion" data-id="Content Writer" href="#collapse6"><div><span style="color:#fff;font-size:22px">Content Writer<span>(Bangalore)</span></span></div>
                                  <br/>  <div class="catshcatsh">We're looking for a great writer who can write super actionable and in-depth content for our blog and website.</div>
								  <p align="right" onclick="myFunctions()" style="color:#ddd;">Job Description</p>
									
                               </a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body dodsi dodsis" style="background-color:#fff;"><div class="work-options fw-w col-md-10"><div ><div class="d-f ai-c jc-sb">
		</span></div> <div class="jobDetails"><p align="center"><strong>Content Writer</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong><br></strong></p>
<p><strong>Required Education:</strong>&nbsp;</p>
<p>PUC/10+2 passed / Graduate </p>
<p>&nbsp;</p>
<p><strong>Roles and Responsibilities:</strong>&nbsp;</p>
<ul>
<li>0-2 year of experience.</li>
<li>Develop quality contact to ensure a company’s web presence</li>
<li>Write and edit creative content to ensure easy and involved reading</li>
<li>Improve or edit text to ensure appropriate product or service description</li>
<li>Research information to write content effectively</li>
<li>Manage blog and other images to provide support to content</li>
<li>Content writers need to have one basic quality and that is to be able to write content in a clear manner</li>
<li>The need for good grammar and editing acumen is high as you don’t want inconsistent content floating around the web!</li>
</ul>
<p>&nbsp;</p>
<p><strong>Skills:</strong>&nbsp;</p>
<li>Bachelors degree with preferred major in English, marketing, advertising, communications or similar.</li>
<li>Any experience in content writing will be preferred.</li>
<li>Knowledge of SEO practices will be advantageous.</li>
<li>Develop unique and engaging content to meet in-house and company multiple requirements</li>
<li>Communicate effectively with team, meet strict deadlines</li>
<ul>

</ul></p> <hr></div> <div class="ta-c" align="center"><button class="apply-button o-n" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color:#004066;color:white;font:50px;width:200px"><b style="width:180px;">Apply</b></button></div></div> <!----> <!--</div>
</div>
      </div>
    </div>
	<br/>
	
    <!--<div class="panel modsi modsis" id="jobs" style="border: 2px solid #f2f2f2;background-color:#004066;">
      <div class="panel-heading" style="color:#fff;">
        <h4 class="panel-title" style="color:#fff;">
          <a data-toggle="collapse" data-parent="#accordion" data-id="Accounting Ececutive" href="#collapse7"><div><span style="color:#fff;font-size:22px">Accounting Ececutive<span>(Bangalore)</span></span></div>
                                  <br/>  <div class="catshcatsh">We're looking for accountant who is efficient in handling company's account.</div>
								  <p align="right" onclick="myFunctions()" style="color:#ddd;">Job Description</p>
									
                               </a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body dodsi dodsis" style="background-color:#fff;"><div class="work-options fw-w col-md-10"><div ><div class="d-f ai-c jc-sb">
		</span></div> <div class="jobDetails"><p align="center"><strong>Accounting Ececutive</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong><br></strong></p>
<p><strong>Required Education:</strong>&nbsp;</p>
<p>PUC/10+2 passed / B COM/BBA </p>
<p>&nbsp;</p>
<p><strong>Roles and Responsibilities:</strong>&nbsp;</p>
<ul>
<li>0-2 year of experience.</li>
<li>Prepares asset, liability, and capital account entries by compiling and analyzing account information.</li>
<li>Documents financial transactions by entering account information.</li>
<li>Recommends financial actions by analyzing accounting options.</li>
<li>Summarizes current financial status by collecting information; preparing balance sheet, profit and loss statement, and other reports.</li>
<li>Substantiates financial transactions by auditing documents.</li>
<li>Guides accounting clerical staff by coordinating activities and answering questions.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Skills:</strong>&nbsp;</p>
<li>Account maintenance using Tally ERP 9, GST returns filing, E-Mail correspondence with our clients</li>
<li>Interaction with Vendors </li>
<li>Basic banking knowledge, like writing a cheque or challan, depositing a cheque. </li>
<li>Assisting for processing of invoices and payments, filing documents .</li>
<li>Assisting in month end and year end process, TDS, PT, Service Tax, Pro Tax, PF and ESI.</li>
<li>Manage Accounts receivables and accounts payable, alongside Credit control </li>
<li>Demonstrated experience in billing, document control, and purchasing</li>
<li>Able to prepare documents like, client contracts and employee contracts.</li> 
<li>Proficient in Tally, Microsoft Office, specifically MS Excel and MS Word </li>
<ul>

</ul></p> <hr></div> <div class="ta-c" align="center"><button class="apply-button o-n" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color:#004066;color:white;font:50px;width:200px"><b style="width:180px;">Apply</b></button></div></div> <!----> <!----><!--</div>
</div>
      </div>
    </div>
	<br/>
	<!--<div class="panel modsi modsis" id="jobs" style="border: 2px solid #f2f2f2;background-color:#004066;">
      <div class="panel-heading" style="color:#fff;">
        <h4 class="panel-title" style="color:#fff;">
          <a data-toggle="collapse" data-parent="#accordion" data-id="Business Analyst" href="#collapse8"><div><span style="color:#fff;font-size:22px">Business Analyst<span>(Bangalore)</span></span></div>
                                  <br/>  <div class="catshcatsh">This position is responsible for supporting analytics that drive business optimizations across the enterprise.</div>
								  <p align="right" onclick="myFunctions()" style="color:#ddd;">Job Description</p>
									
                               </a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body dodsi dodsis" style="background-color:#fff;"><div class="work-options fw-w col-md-10"><div ><div class="d-f ai-c jc-sb">
		</span></div> <div class="jobDetails"><p align="center"><strong>Business Analyst</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong><br></strong></p>
<p><strong>Required Education:</strong>&nbsp;</p>
<p>Graduate / Post Graduate</p>
<p>&nbsp;</p>
<p><strong>Roles and Responsibilities:</strong>&nbsp;</p>
<ul>
<li>2-4 year of experience.</li>
<li>The ideal candidate will have hands-on technical experience in statistics, predictive modeling and other data sciences</li> 
<li>The position requires great communication and proven analytic problem-solving skills.</li>
<li>Business Analyst should prepare estimates, proposals and respond to RFPs (request for proposal)</li>
<li>Client relationship management.</li>
<li>Conducting research and basic analysis of the industry the client is in.</li>
<li>Work directly with the implementation team to ensure delivery and implementation of the software solution.</li>
<li>Collecting, understanding business requirement .</li>
<li>Defining the project and scope.</li>
<li>Drafting business requirement</li>
<li>Translating business requirement document to software requirement specifications (SRS).</li>
</ul>
<p>&nbsp;</p>
<p><strong>Skills:</strong>&nbsp;</p>
<li>Interacting with the technical team to ensure that the requirements are clear.</li>
<li>Must be able to write detailed Functional Specifications.</li>
<li>Must have good knowledge in SQL,Big data,R/Python.</li>
<li>Interacts with the client and product team to gain an understanding of the business and technological requirements .</li>
<li>Analyze requirements and develops functional specification.</li>
<li>Works with Quality Assurance to ensure proper test case coverage and assist in unit testing</li>
<li>Should give product presentations and data pulls, as required to support application development and roll-out.</li>
<ul>

</ul></p> <hr></div> <div class="ta-c" align="center"><button class="apply-button o-n" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color:#004066;color:white;font:50px;width:200px"><b style="width:180px;">Apply</b></button></div></div> <!----> <!----><!--</div>
</div>
      </div>
    </div>-->
  </div> 
</div>
            
	<div class="col-md-10 rowsi" >
                <div style="text-align:justify;line-height:2;color:#000;font-weight:500;font-family:ab3;font-size: 15px;color:#36454f">If you want to apply for any other position which is not listed here, Mail your resume to
                   &nbsp;&nbsp;
											 <a style="color:#004066;" href="mailto:info@zoprent.com"><i class="fa fa-envelope" style="color: #1fa9c1;"></i> info@zoprent.com.</a>
										
				  
                 
								
                                                                                                                
                                                                        </div>
                </div>


					
						
								</div>
							
					
					</div>
	<script>
function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
	
}
function myFunctions() {
var x1 = document.getElementById('myDIVs');
    if (x1.style.display === 'none') {
        x1.style.display = 'block';
    } else {
        x1.style.display = 'none';
    }
	
}
function myFunctionsi() {
var x2 = document.getElementById('myDIVsh');
    if (x2.style.display === 'none') {
        x2.style.display = 'block';
    } else {
        x2.style.display = 'none';
    }
	
}
</script>
		
			
			
			
						
						
						
						
						</div>
						
						
						<div class="col-sm-12 col-lg-12 col-md-12" style="width:100%;">
							<H2 style="font-family:ab3;font-size: 23px;padding-bottom:2%;">REACH<span style="color:#004066;"> US</span></H2>

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31109.32348860545!2d77.5696453429215!3d12.92921171654487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15986765d7d9%3A0xbba2fea7014e5087!2sJayanagar%2C+Bengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1496317095309" width="100%" height="280" frameborder="0" style="border: 4px solid #f2f2f2;" allowfullscreen></iframe>
						
						</div>
						
						
						</div>
			
		
		</main >
		<!-- //Main Container -->
		
		<script type="text/javascript"><!--
			var $typeheader = 'header-home5';
			//-->
		</script>
		<!-- Footer Container -->
		
		<footer class="footer-container typefooter-1">
			<!-- Footer Top -->
			
			<!-- Footer Center -->
				<?php include 'footer.php';?>
			<!-- FOOTER BOTTOM -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-12" style="color: #606062;
    font-weight: 500;
    text-align: center;">
								
						</div>
						<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //end Footer Container -->

    </div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Enter Your Detail</h4>
      </div>
      <div class="modal-body">
       <form action="contactd.php" method="post" enctype="multipart/form-data" class="form-horizontal">
								
								
									<div class="form-group required">
								
								<div class="col-sm-12">
									<input type="text" name="name" value="" id="name" class="form-control" required placeholder="Full Name" style="    height: 30px;border: 2px solid #f2f2f2;border-radius:3px;">
									</div>
								</div>
								<div class="form-group required">
								
									<div class="col-sm-12">
										<input type="email" name="email" value="" id="email" class="form-control" required placeholder="Email" style="    height: 30px;border: 2px solid #f2f2f2;border-radius:3px;">
										</div>
									</div>
								<div class="form-group required">
									
									<div class="col-sm-12">
										<input type="text" name="phone" value="" id="phone" maxlength="10" class="form-control" required placeholder="Contact no" style="height: 30px;border: 2px solid #f2f2f2;border-radius:3px;display:block;">
										</div>
									</div>
									<div class="form-group">
									<div class="col-sm-12">
									<input type="text" name="level" value="" id="level" class="form-control" required placeholder="Education Level" style="    height: 30px;border: 2px solid #f2f2f2;border-radius:3px;">
									</div>
								</div>
								
									<div class="form-group">
									
									<div class="col-sm-12">
										<input type="text" name="salary" value="" id="salary" maxlength="10" class="form-control" required placeholder="Current CTC" style="height: 30px;border: 2px solid #f2f2f2;border-radius:3px;display:block;">
										</div>
									</div>
									<div class="form-group">
									
									<div class="col-sm-12">
										<input type="text" name="cname" value="" id="cname" maxlength="20" class="form-control" required placeholder="Available Date" style="height: 30px;border: 2px solid #f2f2f2;border-radius:3px;display:block;">
										</div>
									</div>
									<div class="form-group required">
									
									<div class="col-sm-12">
									<legend style="font-family:ab3; font-size: 18px;">Upload Your CV</legend>
									   <input type="file" id="file" name="file" class="form-input" placeholder='Upload CV' accept="file/*">
    
	</div>
									</div>
									<div class="form-group">
										
										<div class="col-sm-12">
											<textarea name="message" rows="4" id="message" required class="form-control" placeholder="Message"></textarea>
										</div>
									</div>
									<td colspan="2"> <input type="submit" value="Submit!" id='submit_btn' name="submit_btn" class="submit_btn"/></td>


								
							</form>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

	<link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
	<script>
	$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})</script>
	
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
	<script>$('#jobs a').click(function() {
   myRoomNumber = $(this).attr('data-id');
	document.cookie="classroomnumber="+$(this).attr('data-id');
});

$('#exampleModal').on('show.bs.modal', function (e) {
    $(this).find('.roomNumber').text(myRoomNumber);
});</script>
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
<script>
	   $(document).ready(function () {
        
         $("#s_phone").keypress(function (e) {
        
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        
         
         	   return false;
         }
          });
		  
		   $("#s_name").keypress(function (e) 
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
			$("#s_phone").focusout(function()
			{
				var val=$("#s_phone").val();
				if(val!="")
				{
					var len=val.length;
					if(len!=10)
					{
						alert("Invalid Mobile Number!");
						$("#s_phone").val("");
						$("#s_phone").focus();
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
	<div class="remodal" data-remodal-id="thankyou" style="border: 3px solid #f5be2a;">
							
						<a data-remodal-action="close" class="remodal-close"></a>
					<br>	
				<img src="assets/logo.png" alt="logo">
				  <p style="line-height:1.8;font-size:20px;">Thankyou for filling the form......!</br>
				  Our team will get in touch with you soon....!</p>
				  
		</div>
		
</html>