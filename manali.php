<?php 
session_start();
include 'admin/config.php';

if(!isset($_SESSION['city']))
	{
		$sql_city=mysql_query("select id from city where city_name='Manali'");
		$row_city=mysql_fetch_array($sql_city);
		$city=$row_city['id'];
		$_SESSION['city']=$city;
		
		//header("location:index.php#location");
	
	}
	else
	{
	$city=13;
		$_SESSION['city']=$city;
		}
$citys=$_SESSION['city'];
$subs_sql=mysql_query("select * from city where id='$citys'");
$sub_ress=mysql_fetch_array($subs_sql);
$citiname=$sub_ress['city_name'];		
	
if(isset($_POST['send_mail']))
{
	$emailTo = 'zoprent@gmail.com';
		
		
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$phone = trim($_POST['phone']);
		
		$email_body  = "New request to become a partner\n\n";
		$email_body .= "Name  : ".$name."\n\n";
		$email_body .= "Email : ".$email."\n\n";
		$email_body .= "Phone : ".$phone."\n\n";
		
			$headers = "From:no-reply@zoprent.com\r\n" . "Reply-To: " . $email;
			mail($emailTo, $subject="New Request", $email_body, $headers);
			
			header('Location:index.php#success');
}
if(isset($_POST['signup']))
{
	$name=$_POST['s_name'];
	$password=$_POST['s_psd'];
	$email=$_POST['s_email'];
	$phone=$_POST['s_phone'];
	
			
			$otp=mt_rand(100000,999999);		
	$_SESSION['username']=$name;		
	$_SESSION['password']=$password;		
	$_SESSION['email']=$email;		
	$_SESSION['phone']=$phone;		
	$_SESSION['user_otp']=$otp;		
		
			/*----------SMS START----------------------*/
		
				$message="Dear ".$name."\n";
				$message .= "You are trying to register in Zoprent.\n";
				$message .= "Your OTP : ".$otp."\n";
				$msg=$message;
				$msg_body_final=urlencode($msg);
				
				//$URL = "mindappssms.in/submitsms.jsp?user=rentraja&key=458e7a768eXX&mobile=+91".$phone."&message=".$msg_body_final."&senderid=RNTRAJ&accusage=1";
				//$URL ="http://login.jupitersms.in/api/mt/SendSMS?user=zoprent&password=Codezop3&senderid=ZOPRNT&channel=Trans&DCS=0&flashsms=0&number=".$phone."&text=".$msg_body_final."&route=6";
		$URL="http://roundsms.com/api/sendhttp.php?authkey=OTFmM2Y1ZDJkNDd&mobiles=".$phone."&message=".$msg_body_final."&sender=ZOPRNT&type=1&route=2";
		
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $URL);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_exec($ch);
				curl_close($ch);
				
			/*-----------SMS END---------------------*/
			header('location:index.php#otp');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
	============================================ -->
  <title>Book a Self-Drive Car/Bike and Stay all over India</title>
    <meta charset="utf-8">
	<meta name="msvalidate.01" content="BB36471903B1CCE02D0D60EFC38ABBC8" />
	<meta name="keywords" content="ZopRent- Rent Self-driven,Motorbike & Stay at Bangalore,Mysore,Goa, Pondicherry,Hyderabad,Pune,Mumbai & Pune ">
	 <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="description" content="Rent Bikes/Self driven Cars & Stay on hourly/daily basis in Bangalore, Mysore, Goa,Hyderabad,Ooty,Pondicherry,Mumbai & Pune. Rent Royal-Enfield, Harley,Duster, Audi & more.
">    
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
            background: url(assets/bb10-min.jpg) no-repeat;
        }
        
        .right_box {
            background: rgba(0,64,102, 0.81);
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
		.morecontent span {
    display: none;
}
.morelink {
    display: block;
}
.img-circle {
    border-radius: 50%;
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
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar =100;  // How many characters are shown by default
    //var ellipsestext = "...";
    var moretext = " Read more";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);
 
            var html = c + '<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink" style="margin-left:180px;  color:#fff; font-size: 16px;"><b>' + moretext + '</b></a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
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
            top: 20;
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
.modal-dialog{

width:75%;


}
    @media screen(min-width: 768px) {
        
        .modals {
          width: 100%; /* New width for small modal */
        }
    }
    @media screen(min-width: 992px) {
        .modald {
          width: 100%; /* New width for large modal */
        }
    }
	@media (max-width: 590px) {
		#modalsh
		{
			top:100px !important;
			width:100%;
			
			
		}
		@media (max-width: 590px) {
		#myModal
		{
			top:100px !important;
			margin-right: 10px !important;
			
		}


</style>
<!--Popup Start--><!--Popup Start-->
	<script src="../pop/jquery-loader.js"></script>
    <link rel="stylesheet" href="../pop/qunit/qunit/qunit.css" media="screen">
    <script src="../pop/qunit/qunit/qunit.js"></script>
	<link rel="stylesheet" href="../pop/remodal.css">
    <link rel="stylesheet" href="../pop/remodal-default-theme.css">
    <script src="../pop/remodal.js"></script>
    <script src="../popremodal_test.js"></script>

   <link href="../css/slider.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../js/jquery.flexisel.js"></script>
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
	<style>
	@media (max-width: 590px) {
		.col-xs-15 {
  width: 100%;
  float: left; }}
	@media (max-width: 590px) {
		#jssor_1
		{
			top:65px !important;
		}
		#my_pro
		{
			margin-top: 18%
		}
	}
	@media (max-width: 590px) {
		#mob_div
		{
			width:100%;
			
		}
		#city_select
		{  
		    margin-top:62px; 
			width:100%; 
			font-size:26px !important;
			padding:1% !important;
		}
		#serviced
		{  
		    margin-top:-70px; 
			 
		}
		#mob_div_1
		{
			width:30% !important;
			font-size:26px !important; 
			
		}
		#mob_div_2
		{
			 top:560px !important;
			 font-size:21px !important;
			 width:50% !important;
		}
		
	}
	</style>
	<script>    
	            
				function change_city()
				{
					city=$("#city_select").val();
					jQuery.ajax({
						type:"POST",
						url:"ajax.php?f=change_citys",
						datatype:"text",
						data:{city:city},
						success:function(response)
						{
							//alert(response);
							window.location.replace("http://www.zoprent.com/"+response.trim().toLowerCase()+".php");
						},
						error:function (xhr, ajaxOptions, thrownError){}
						});
				}
				function change_city_pop(id)
				{
					city=id;
					jQuery.ajax({
						type:"POST",
						url:"ajax.php?f=change_citys",
						datatype:"text",
						data:{city:city},
						success:function(response)
						{
							window.location.replace("http://www.zoprent.com/"+response.trim().toLowerCase()+".php");
						},
						error:function (xhr, ajaxOptions, thrownError){}
						});
				}
				function check_login()
				{
					u_name=$('#u_name').val();
					password=$('#password').val();
					
					if(u_name=="" || password=="")
					{
						alert("Please fill all the fields");
						return;
					}
					
					jQuery.ajax({
						type:"POST",
						url:"ajax.php?f=check_login",
						datatype:"text",
						data:{u_name:u_name,password:password},
						success:function(response)
						{
							data=response;
							if($.trim(data) === "success")
							{
								window.location="index.php";
							}
							else
							{
								alert('invalid Email/Phone');
							}
						},
						error:function (xhr, ajaxOptions, thrownError){}
						});
					
				}
				
				function signup_new()
				{
					u_name=$("#s_name").val();
					email=$("#s_email").val();
					phone=$("#s_phone").val();
					psd=$("#s_psd").val();
					c_psd=$("#s_cpsd").val();
					
					if(u_name=="" || email=="" || phone=="" || psd=="" || c_psd=="")
					{
						alert("Please fill all the fields");
						return;
					}
					if(psd!=c_psd)
					{
						alert("Password Mismatch.....Please Try Again..!");
						$("#s_psd").val("");
						$("#s_cpsd").val("");
						return;
					}
					
					jQuery.ajax({
						type:"POST",
						url:"ajax.php?f=signup",
						datatype:"text",
						data:{u_name:u_name,email:email,phone:phone,psd:psd},
						success:function(response)
						{
							data=response;
							if($.trim(data) === "success")
							{
								window.location="index.php#otp";
							}
							else
							{
								alert('Failed.Please Try Again..!');
							}
						},
						error:function (xhr, ajaxOptions, thrownError){}
						});
					
				}
				function check_otp()
				{
					otp=$("#otp").val();
					
					jQuery.ajax({
						type:"POST",
						url:"ajax.php?f=check_otp",
						datatype:"text",
						data:{otp:otp},
						success:function(response)
						{
							data=response;
							if($.trim(data) === "success")
							{
								window.location="index.php";
							}
							else
							{
								alert('Invalid Otp...!');
							}
						},
						error:function (xhr, ajaxOptions, thrownError){}
						});
				}
				
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
			
		function check_email_available()
          { 
           var email=$("#s_email").val();
         		if(email!="")
         			{
         				jQuery.ajax({
         								type:"POST",
         								url:"ajax.php?f=check_email_available",
         								datatype:"text",
         								data:{email:email},
         								success:function(response)
         								{
											if(response)
											{
												res=response;
												if(res=="true")
												{
													alert("Email Already exists!");
													$("#s_email").val("");
													$("#s_email").focus();
												}
											}
         								},
         								error:function (xhr, ajaxOptions, thrownError){}
         								});
         			}
          }
		  function check_phone_available()
          {	
			var phone=$("#s_phone").val();
         		if(phone!="")
         			{
         				jQuery.ajax({
								type:"POST",
								url:"ajax.php?f=check_phone_available",
								datatype:"text",
								data:{phone:phone},
								success:function(response)
								{
										if(response)
										{
											res=response;
											if(res=="true")
											{
												alert("Phone No Already exists!");
												$("#s_phone").val("");
												$("#s_phone").focus();
											}
										}
								},
								error:function (xhr, ajaxOptions, thrownError){}
								});
         			}
          }
		  function resend_otp()
		  {
			  jQuery.ajax({
							type:"POST",
							url:"ajax.php?f=resend_otp",
							datatype:"text",
							data:{},
							success:function(response)
							{
								if(response)
								{
									alert("Otp Send To Your Mobile No..!");
								}
							},
							error:function (xhr, ajaxOptions, thrownError){}	});
		  }
		  function verify_password()
		  {
			  psd=$("#s_psd").val();
			  c_psd=$("#s_cpsd").val();
			  if(psd !=c_psd)
			  {
					alert("Password Mismatch.....Please Try Again..!");
					$("#s_psd").val("");
					$("#s_cpsd").val("");
					$("#s_psd").focus();
			  }
		  }
		</script>
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

<body class="common-home res layout-home1">
    
   <div id="wrapper" class="wrapper-full banners-effect-7">
        <!-- Header Container  -->
       <?php include 'menu1.php';?>
			<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modals modald" id="modalsh">
<div class="modal-content">
   <a data-remodal-action="close" style="color:white;" class="remodal-close"></a>
    <img src="assets/Zopapd.jpg">
   </div>
 </div>
</div>
<script>
$(document).ready( function() {
        $('#myModal').modal();
		setTimeout(function () { $('#myModal').modal("hide");}, 5000);
    });
</script>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<main id="content" class="page-main">
		<div class="spotlight1">
		      <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px;height:650px; width: 1500px; overflow: hidden; visibility: hidden; z-index:-1;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('../img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div data-u="slides"   style="cursor: pointer; position: absolute; top: 0px; left: 0px; width: 1500px;  overflow:hidden; z-index:-1; height:650px;">
                    <div data-p="225.00" style="display: none;z-index:-1;position: absolute;" >
					<img data-u="image" src="assets/banners/Manali.jpg" />
                         
              			
                
    </div>
    </div>
    </div>   
					

                </div>
                <!-- Bullet Navigator -->

                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
				<div class="row ultop"  id="city_select" style="position:relative;cursor: pointer;">

    <ul id="flexiselDemo3"  > 

     <?php
							  $i=1;
									$qry1=mysql_query("select * from city order by priority DESC");
									while($res1=mysql_fetch_array($qry1))
									{

                                          ?>


    <li><a href="javascript:void(0);" id=<?php echo $res1['id'];?> onclick="change_city_pop(this.id);"><p><?php echo'<img src="admin/'.$res1['image'].'" alt="" class="imgwidth" />';?></p> 
<p><span style="font-size:16px;color:#000;"><b><?php echo $res1['city_name']; ?></b></span>   </p></a> </li>

  <?php

  } 


   ?>                                                 
</ul> 
	
		
</div>
                
            </div>
            </div>
			<script>
$("#flexiselDemo3").flexisel({
        visibleItems: 6,
        itemsToScroll: 1,         
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        },

         portrait: { 
                    changePoint:480,
                    visibleItems: 5,
                    itemsToScroll: 1
                }, 

        
    });


</script>


			<!--Block Spotlight2  -->
			<div class="about-us about-demo-1" id="my_pro" >
                <div class="container" id="serviced">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 what-client-say" style="margin-top:0%;">
							<div class="client-say-content"  id="top">
							<?php
							
							$city_id=$_SESSION['city'];
							$sub1_sql=mysql_query("select * from city where id='$city_id'");
							$sub1_res=mysql_fetch_array($sub1_sql);
							$ref_id=$sub1_res['ref_id'];
							
							$sub1_sql1=mysql_query("select * from city_service where ref_id='$ref_id'");
							$count_category1=mysql_num_rows($sub1_sql1);
							if($count_category1>=1)
							{
								echo '<h2 class="about-title" ><span style="font-size: 35px; font-family: ab2; color: #000;font-weight: bold;">Our <span style="color: #004066;">Services</span>&nbsp;in&nbsp;'.$citiname.'</span></h2>';	
							}
							
							?>
                           
                            <div class="module so-deals">
                        
                                <div class="modcontent">
                                    <div id="so_deals_14513931681482050581" class="so-deal modcontent products-list grid clearfixbutton-type1 style2">
                                        <div class="row">
													<div class="col-lg-12 col-md-12">
										
										
										
										<?php 
											$city_id=$_SESSION['city'];
											$sub_sql=mysql_query("select * from city where id='$city_id'");
											$sub_res=mysql_fetch_array($sub_sql);
											$ref_id=$sub_res['ref_id'];
											
											$sub_sql1=mysql_query("select * from city_service where ref_id='$ref_id'");
											$count_category=mysql_num_rows($sub_sql1);
											$div_size=12;
										if($count_category>=1)
										{
											
											if($count_category==1)
											{
												$div_size=12;
											}
											else if($count_category==2)
											{
												$div_size=6;
											}
											else if($count_category==3)
											{
												$div_size=4;
											}
											else if($count_category>=4)
											{
												$div_size=3;
											}
											
											while($sub_row1=mysql_fetch_array($sub_sql1))
											{
												$cate_id=$sub_row1['main_category'];
												$qry=mysql_query("select * from categories where id='$cate_id'");
													while($res=mysql_fetch_array($qry))
													{
																		$cate_id=$res['id'];
																		$cate_name=$res['categories'];
																		$cate_image=$res['image'];
																		echo '
																
																<div class="col-lg-'.$div_size.' col-md-'.$div_size.'">
																<div class="product-thumb  product-item-container">
																<div class="left-block">
									<a href="products.php?id='.$cate_name.'&first='.$cate_id.'&uid='.$citiname.'" target="_self" style="color: #18a9c3;font-family:ab2;font-weight:bold;">
									
																	<div class="image">

																		<img src="admin/'.$cate_image.'" alt="img" class="img-1 img-responsive" />

																	</div>

																</div>
																<div class="right-block">
																	<div class="caption" style="text-align: center;">
                                  									<button class="btn btn-info" onclick="" style="margin-top: 6%; border-radius: 4px;">'.$cate_name.'</button>
																		</a>
																	</div>
																</div>
																</div>
																
																
																<!-- End right block -->
															</div>
																';
													}
											}
										}
										else
										{
											echo '<center><h3 class="about-title line-hori"><span style="font-size: 71px;font-family: ab2;color: #8c8585;">
									OOPS!</h3>
									<p style="font-size: 15px; font-family: ab2;">Sorry, No Category Available !</p></center>';
										}
									
										?>
									
                                    </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.modcontent-->
                        </div>
                        <!-- End Mod -->
                        <!-- Mod Category Slider1 -->

                    </div>
                </div>
            </div>
            </div>
			<section class="info_section" style="background-position: 50% 2px;background-size: cover; width: 100%;background-attachment: fixed !important;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-4"> </div>
                        <div class="col-md-6 col-sm-8 right_box">
                            <div class="right_box_inner padding clearfix">
                           <div class="col-md-6 col-sm-6 white_content top20 bottom30" style="color:#fff;font-family:ab2;text-align:justify;font-size:14px;line-height:1.5;">
                                    <b class="bottom10 top20" style="color:#fff;font-family:ab2;font-weight:bold;">BIKE & CAR RENTAL IN <?php echo strtoupper($citiname); ?><b>
                                    <li type="disc">ZopRent is one of the most Reliable bike & car rental service in <?php echo $citiname; ?>.</li>
         <li type="disc">Both pick-up and drop reservation can be made at once for <?php echo $citiname; ?> Bikes & Cars.</li>
          <li type="disc">Get  <?php echo $citiname; ?> rental bikes & cars to any place.</li>
        <li type="disc">ZopRent offers the cheapest rates for bikes & cars on rent in <?php echo $citiname; ?>.</li>
		
       <!-- <li type="disc">We also take two wheelers rental bookings in <?php echo $citiname; ?>over the phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– 7338295505.</li>-->
         <li type="disc">ZopRent provides customer friendly bike & car rental service in <?php echo $citiname; ?> through which you can book a bike & car & pay online.</li>
		<span class="more"> 
		 <li type="disc">Online mode of payment is perfect to rent a bike & car in <?php echo $citiname; ?>.</li>
		 
         <li type="disc">Now you can enjoy bullet bike & car rental Service in <?php echo $citiname; ?> @ the cheapest rate.</li>
         <li type="disc">You can choose a bike & car in <?php echo $citiname; ?> from a wide range of two wheelers like Bullet, Activa, Harley Davidsons and other sports bikes & cars available at ZopRent.</li>
         <li type="disc">We promise to give you the best bike & car rental service in <?php echo $citiname; ?>.</li>	

	   
	   </span>

        </div>
		 <div class="col-md-6 col-sm-6 white_content top20 bottom30" style="color:#fff;font-family:ab2;padding:20px;" >
                                   <i class="fa fa-thumbs-up" aria-hidden="true" style="font-size:40px;color:#fff; padding-left: 110px;"> </i>
            <h3 class="bottom10 top20" style="padding-left: 60px;">100% Verified</h3>
            <p>The best quality bikes, specially handpicked from across the city.</p>
                                </div>
								
								<div class="col-md-6 col-sm-6 white_content top20 bottom30" style="color:#fff;font-family:ab2; padding:20px;">
								 <i class="fa fa-inr" aria-hidden="true" style="font-size:40px;color:#fff;padding-left: 120px;"> </i>
           
            <h3 class="bottom10 top20" style="padding-left: 20px;">Lowest price guaranteed</h3>
            <p>Select from a variety of bikes and cars at pocket friendly rates.</p>
								</div>
								
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Block Spotlight2  -->
           <div class="about-us about-demo-1" style=" padding-bottom: 4%;padding-top: 4%;">
                <div class="container" style="padding-bottom: 5%; width: 100%;">
                    <h2 class="about-title line-hori" ><span style="font-size: 35px; font-family: ab2; color: #000;font-weight: bold;">How <span style="color: #004066;"> it Works</span></span></h2>
                   <div class="mudule list-services row" style="padding-top:3%;">
            
                       <div class="item-service col-lg-3 col-md-3 col-sm-3 col-xs-15">
                            <center><img src="assets/select.png" /></center>

                            <h3 style="text-align: center;font-family:ab2;color:#000;line-height:23px;font-size:15px;font-weight: bold;">Select the product that you would like to rent for</h3>

                        </div>
						            <div class="item-service col-lg-3 col-md-3 col-sm-3 col-xs-15">
                            <center><img src="assets/s2.png" /></center>
                            <h3 style="text-align: center;font-family:ab2;color:#000;line-height:23px;font-size:15px;font-weight: bold;">Set the time and fill the request form with valid details</h3>

                        </div>
						<div class="item-service col-lg-3 col-md-3 col-sm-3 col-xs-15">
                            <center><img src="assets/booking.png" /></center>
                            <h3 style="text-align: center;font-family:ab2;color:#000;line-height:23px;font-size:15px;font-weight: bold;">Booking Confirmation happens on call</h3>

                        </div>

                        <div class="item-service col-lg-3 col-md-3 col-sm-3 col-xs-15">
                            <center><img src="assets/use.png" /></center>
                            <h3 style="text-align: center;font-family:ab2;color:#000;line-height:23px;font-size:15px;font-weight: bold;">Use the best quality product and enjoy the usage</h3>

                        </div>
                        <div class="item-service col-lg-3 col-md-3 col-sm-3 col-xs-15">
                            <center><img src="assets/ret.png" /></center>
                            <h3 style="text-align: center;font-family:ab2;color:#000;line-height:23px;font-size:15px;font-weight: bold;">Return back the product </br>after the usage </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Block Spotlight3  -->
           

            <div class="module block-clients-say " style="padding: 40px;
margin-bottom:0px;background-position: 50% 2px; background-size: cover; width: 100%;background-attachment: fixed !important;background: url(assets/b3-min.jpg) no-repeat;">
                <h3 style="text-align: center;padding-bottom:3%;  font-family: ab2; font-size: 35px;color:#000;padding-top: 3%;font-weight:bold;color:#fff;"><span>What Our Customer Says about Us</span></h3>
                <div class="block clients_say">
                    <div class="slider-clients-say" style="text-align: center;">
                         <div class="item block_content">
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-2">
                                    <center><img class="img-circle" src="assets/udai.jpg" style="width:100px;margin-top:7%;" /></center>

                                </div>
                                <div class="col-md-5">
                                </div>

                            </div>
                            <div class="info">

                                <div class="text" style="font-size:17px;color:#fff;">"Great service. A professionally run company which makes renting an absolute pleasure. Highly recommended."</div>
                                <div class="author">Udai Pillai</div>

                                
                            </div>
                        </div>
						 <div class="item block_content">
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-2">
                                    <center><img class="img-circle" src="assets/prashant.jpg" style="width:100px;margin-top:7%;" /></center>

                                </div>
                                <div class="col-md-5">
                                </div>

                            </div>
                            <div class="info">

                                <div class="text" style="font-size:17px;color:#fff;">"Awesome bikes from Zoprent, I recommend this for everyone who is looking for rents in Bangalore. Thanks you Team."</div>
                                <div class="author">Prashanth Ramachandran</div>

                                
                            </div>
                        </div>
						<div class="item block_content">
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-2">
                                    <center><img  class="img-circle" src="assets/ang.jpg" style="width:100px;margin-top:7%;" /></center>

                                </div>
                                <div class="col-md-5">
                                </div>

                            </div>
                            <div class="info">

      <div class="text" style="font-size:17px;color:#fff;">"I had tried your services yesterday and i am very happy with it. Next week i am travelling to chennai.<br/>Do you have services in chennai too??.. looking forward to hear from you.
<br/>Thanks"</div>
                                <div class="author">Aneesh George</div>

                                
                            </div>
                        </div>


                        <div class="item block_content">
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-2">
                                    <center><img  class="img-circle" src="assets/Annesh.jpg" style="width:100px;margin-top:7%;" /></center>

                                </div>
                                <div class="col-md-5">
                                </div>

                            </div>
                            <div class="info">

                                <div class="text" style="font-size:17px;color:#fff;">"It was a sudden plan to Nandi hills at 3 am and we were in short of a bike and friend suggested ZopRent.
								</br>I was with an impression that you need to pre-book your ride but to my surprise they delivered the bike on time. Great service team." </div>

                                <div class="author">Nithin K V Kakkarakkunnel
                                </div>

                              
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
           <div class="about-us about-demo-1" style=" padding-bottom: 4%;background-image: url(assets/bg8.png);
   
    height: 250px;">
                <div class="container" style="padding-bottom: 5%;    width: 100%;">
                    <div class="row">
                        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" style="    padding-top: 5%;">
                        <div class=" col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<h2 style="color: #000;    font-size: 40px;
    margin: 2px 36px 23px;">Grow your business with ZopRent</h2>
                           <!-- <h3 style="font-family:ab2;color:#000;line-height:23px;font-size:20px; font-weight: bold;    padding-left: 4%;"> Rental services for your journey!</h3>-->

                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
                           <a href="#." data-remodal-target="modal2" style="display: inline-block;
    padding: 20px 35px;
    background-color:#004066;
    box-shadow: 0 3px 6px rgba(0,0,0,.16), 0 3px 6px rgba(0,0,0,.23);
    font-size: 22px;
    cursor: pointer;
    color: #fff;">Become a partner</a>
	
	 <div class="remodal" data-remodal-id="modal2" style="box-shadow: 0 -1px 23px rgba(0,0,0,.06), 0 4px 6px rgba(0,0,0,.09);    border: 2px solid #01a9c4;">
	  <a data-remodal-action="close" class="remodal-close"></a>
				 
				  <div class="modal-body" style="padding:0px;">
				  
				  
				  
				 <div class="row">
                        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12" >
						<h3 style="padding-bottom:2%;">Benefits of becoming ZopRent partner</h3>
						<div class="feature-box"> 
						<img src="assets/icons/1.png" style="    display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;"/>
							<div class="feature-content">
								<h4 style="text-align:left;">More Exposure</h4>
								<p style="text-align:justify;">With an established foot in the market, you will reach out to numerous customers, by partnering with us.</p> 
							</div>
							
						</div>
						<div class="feature-box"> 
							<img src="assets/icons/2.png" style="    display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;"/>
							<div class="feature-content">
								<h4 style="text-align:left;">Increased Booking</h4>
								<p style="text-align:justify;">With wide network and easy access to customers, we are more accessable, witnessing more bookings.</p> 
							</div>
							
						</div>
						<div class="feature-box"> 
							<img src="assets/icons/3.png" style="    display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;"/>
							<div class="feature-content">
								<h4 style="text-align:left;">Online Presence</h4>
								<p style="text-align:justify;">The scope of internet puts us on the world map and we are more approachable to our customers.</p> 
							</div>
							
						</div>
						<div class="feature-box"> 
							<img src="assets/icons/4.png" style="    display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;"/>
							<div class="feature-content">
								<h4 style="text-align:left;">Immediate Settlement</h4>
								<p style="text-align:justify;">Our easy payment gateway and rigorous team, promise a simple, hassle free payment procedure.</p> 
							</div>
							
						</div>
						
						</div>
						 <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
								<fieldset style=""> 
								<img src="assets/logo.png" />
									<h3 style="font-family:ab3;">Become a partner</h3>
									<div class="form-group required">
								
								<div class="col-sm-12">
									<input type="text" name="name" value="" id="name" class="form-control" required placeholder="Name" style="    height: 54px;border: 1px solid #f2f2f2;border-radius:3px;">
									</div>
								</div>
								<div class="form-group required">
								
									<div class="col-sm-12">
										<input type="email" name="email" value="" id="email" class="form-control" required placeholder="Email" style="    height: 54px;border: 1px solid #f2f2f2;border-radius:3px;">
										</div>
									</div>
								<div class="form-group required">
									
									<div class="col-sm-12">
										<input type="text" name="phone" value="" id="phone" maxlength="10" class="form-control" required placeholder="Contact no" style="height: 54px;border: 1px solid #f2f2f2;border-radius:3px;display:block;">
										</div>
									</div>
								</fieldset>
								<div class="buttons">
									<div class="">
										<button class="btn btn-default buttonGray" type="submit" name="send_mail" style="width:100%;background-color:transparent;    height: 72px;
    border: 1px solid #4aadbf;
    border-radius: 3px;">
											<span style="text-transform:uppercase;color:#39a6b9;font-size:17px;">Submit</span>
										</button>
									</div>
								</div>
							</form>
						</div>
					
						</div>
				  
				</div>
	
                        </div>
                        </div>

                       
                    </div>
                </div>
            </div>
		   

            </div>
    </div>
    </div>
    </div>
    <!--Block Spotlight4  -->

    </main>
    <!-- //Main Container -->

    <script type="text/javascript">
        <!--
        var $typeheader = 'header-home5';
        //-->
    </script>
		<!-- Footer Container -->
		<?php include 'footer.php';
		?>
    <!-- //end Footer Container -->

    </div>
    <!-- Social widgets -->
  
	<div class="remodal" data-remodal-id="location" style="border: 4px solid #18a9c3;overflow-x: hidden;">
	<img src="assets/logo.png" width='197' height=62>
					<h3 style="text-align: center;font-weight:300;">Select your location for booking: </h3>

					<div class="spotlight3" style="padding-bottom:4%;">
				<div class="container">
					<div class="module custom-polyci">
					   
							
							  <?php
							  $i=1;
									$qry1=mysql_query("select * from city order by priority DESC");
									while($res1=mysql_fetch_array($qry1))
									{
									if($i==1)
									{
										
										echo '
										 <div class="row box-polyci" id="myid">
										<div class="col-lg-12 col-md-12 col-sm-12">';
									}										
									echo '	
						
							<div class="col-lg-2 col-md-2 col-sm-12">
							<a href="javascript:void(0);" id='.$res1['id'].' onclick="change_city_pop(this.id);">
							<center><img src="admin/'.$res1['image'].'"/>
							<h4 style="color:black;text-align: center;margin-top: -7%; width:100%;text-align:center;" id="name">'.$res1['city_name'].'</h4></center>
							</a>
							</div>
							';
							
							if($i==3)
							{
								echo "</div>
								</div>
								";
								$i=0;
							}
								$i++;	}
									
							?>			
							
						
					</div>
					<!-- Mod Listing Tab -->
					
					</div>
					
					<!-- End Mod -->
				</div>
		</div>
		
	<div class="remodal" data-remodal-id="success" style="border: 4px dotted #18a9c3;">
							
						<a data-remodal-action="close" class="remodal-close"></a>
					<br>	
					<img src="assets/logo.png" alt="Logo">
				  <p style="line-height:1.8;font-size:20px;font-family:ab1;letter-space:1px;">Thankyou for contacting ZopRent!</br>
				  Our team will get in touch with you soon....!</p>
				  
		</div>
		
		
			 <div class="remodal" data-remodal-id="signin" style="box-shadow: 0 -1px 23px rgba(0,0,0,.06), 0 4px 6px rgba(0,0,0,.09);    border: 2px solid #01a9c4;">
				<a data-remodal-action="close" class="remodal-close"></a>
				<div class="modal-body" style="padding:0px;">
					<div class="row">
                        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" >
							<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
									<fieldset style=""> 
										<img src="assets/logo.png" />
										<h3 style="font-family:ab3;">Sign In</h3>
											<div class="form-group required">
												<div class="col-sm-12">
													<input type="text" name="u_name" value="" id="u_name" class="form-control" required placeholder="Email/Phone" style="    height: 54px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
											<div class="form-group required">
												<div class="col-sm-12">
													<input type="password" name="password" value="" id="password" class="form-control" required placeholder="Password" style="    height: 54px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
									</fieldset>
											<div class="buttons">
												<div class="">
													<button class="btn btn-default buttonGray" type="button" name="signin" onclick="check_login();" style="width:100%;background-color:transparent;    height: 72px;border: 1px solid #4aadbf;border-radius: 3px;">
														<span style="text-transform:uppercase;color:#39a6b9;font-size:17px;">Sign In</span>
													</button>
												</div>
											</div>
											<div class="form-group required">
												<div class="col-sm-12" style="margin-top: 10%;">
													<span style="color:#39a6b9;font-size:11px;color:#39a6b9;text-transform: initial;">Not registered with us? <a href="index.php#signup" style="color:#39a6b9;font-size:11px;color:#39a6b9;text-transform: initial;">Signup here!</a></span>
												</div>
											</div>
								</form>
							</div>
							<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 6%;">
						<h3 style="padding-bottom:2%;">Benefits of Signup and Signin</h3>
						<div class="feature-box"> 
						<img src="assets/icons/1.png" style="    display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;">
							<div class="feature-content">
								<h4 style="text-align:left;">View Bookings</h4>
								<p style="text-align:justify;">User can view all his previous, current and future bookings.</p> 
							</div>
							
						</div>
						<div class="feature-box"> 
							<img src="assets/icons/2.png" style="    display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;">
							<div class="feature-content">
								<h4 style="text-align:left;">News and Events</h4>
								<p style="text-align:justify;">Registered users will get to know the latest news and activities of Zoprent</p> 
							</div>
							
						</div>
						<div class="feature-box"> 
							<img src="assets/icons/3.png" style="display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;">
							<div class="feature-content">
								<h4 style="text-align:left;">New Offers</h4>
								<p style="text-align:justify;">You wil be notified about the new offers running in Zoprent</p> 
							</div>
							
						</div>
						
						
						</div>
						</div>
					</div>
                </div>
            </div>
			
			 <div class="remodal" data-remodal-id="signup" style="box-shadow: 0 -1px 23px rgba(0,0,0,.06), 0 4px 6px rgba(0,0,0,.09); border: 2px solid #01a9c4;">
				<a data-remodal-action="close" class="remodal-close"></a>
				<div class="modal-body" style="padding:0px;">
					<div class="row">
                        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" >
							<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
									<fieldset style=""> 
										<img src="assets/logo.png" />
										<h3 style="font-family:ab3;">Sign Up</h3>
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
													<input type="text" name="s_phone" value="" id="s_phone" maxlength="10" class="form-control" required placeholder="Phone" onchange="check_phone_available();" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
											<div class="form-group required">
												<div class="col-sm-12">
													<input type="password" name="s_psd" value="" id="s_psd" class="form-control" required placeholder="Password" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
											<div class="form-group required">
												<div class="col-sm-12">
													<input type="password" name="s_cpsd" value="" id="s_cpsd" class="form-control" required placeholder="Confirm Password" onchange="verify_password();" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
									</fieldset>
											<div class="buttons">
												<div class="">
													<button class="btn btn-default buttonGray" type="submit" name="signup" style="width:100%;background-color:transparent;    height: 72px;border: 1px solid #4aadbf;border-radius: 3px;">
														<span style="text-transform:uppercase;color:#39a6b9;font-size:17px;">Sign Up</span>
													</button>
												</div>
											</div>
											<div class="form-group required">
												<div class="col-sm-12" style="margin-top: 10%;">
													<span style="color:#39a6b9;font-size:11px;">Already have an account? <a href="index.php#signin" style="color:#39a6b9;">Signin here.</a></span>
												</div>
											</div>
							
								</form>
							</div>
								<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 6%;">
						<h3 style="padding-bottom:2%;">Benefits of Signup and Signin</h3>
						<div class="feature-box"> 
						<img src="assets/icons/1.png" style="display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;">
							<div class="feature-content">
								<h4 style="text-align:left;">View Bookings</h4>
								<p style="text-align:justify;">User can view all his previous, current and future bookings.</p> 
							</div>
							
						</div>
						<div class="feature-box"> 
							<img src="assets/icons/2.png" style="display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;">
							<div class="feature-content">
								<h4 style="text-align:left;">News and Events</h4>
								<p style="text-align:justify;">Registered users will get to know the latest news and activities of Zoprent</p> 
							</div>
							
						</div>
						<div class="feature-box"> 
							<img src="assets/icons/3.png" style="display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;">
							<div class="feature-content">
								<h4 style="text-align:left;">New Offers</h4>
								<p style="text-align:justify;">You wil be notified about the new offers running in Zoprent</p> 
							</div>
							
						</div>
						<div class="feature-box"> 
							<img src="assets/icons/5.png" style="display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;">
							<div class="feature-content">
								<h4 style="text-align:left;">Verify Mobile Number</h4>
								<p style="text-align:justify;">Please verify your mobile number and get the offers details through SMS!</p> 
							</div>
							
						</div>
						
						</div>
						</div>
					</div>
                </div>
            </div>
			<div class="remodal" data-remodal-id="otp" style="box-shadow: 0 -1px 23px rgba(0,0,0,.06), 0 4px 6px rgba(0,0,0,.09);    border: 2px solid #01a9c4;">
				<a data-remodal-action="close" class="remodal-close"></a>
				<div class="modal-body" style="padding:0px;">
					<div class="row">
                        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" >
							<div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
									<fieldset style=""> 
										<img src="assets/logo.png" />
										<h3 style="font-family:ab3;">OTP</h3>
											<div class="form-group required">
												<div class="col-sm-12">
													<input type="text" name="otp" value="" id="otp" class="form-control" required placeholder="OTP" style="height: 39px;border: 1px solid #9a9696;border-radius:3px;">
												</div>
											</div>
									</fieldset>
											<div class="buttons">
												<div class="">
													<button class="btn btn-default buttonGray" type="button" name="signin" onclick="check_otp();" style="width:100%;background-color:transparent;    height: 72px;border: 1px solid #4aadbf;border-radius: 3px;">
														<span style="text-transform:uppercase;color:#39a6b9;font-size:17px;">Submit</span>
													</button>
												</div>
											</div>
											<div class="form-group required">
												<div class="col-sm-12" style="margin-top: 10%;">
													<span style="color:#39a6b9;font-size:11px;">Did not recieve the OTP? <a href="javascript:void(0);" onclick="resend_otp();" style="color:#39a6b9;">Resend OTP</a></span>
												</div>
											</div>
							
								</form>
							</div>
							<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 6%;">
						<h3 style="padding-bottom:2%;">Why should you verify your number?</h3>
						<div class="feature-box"> 
						
						
						
						<div class="feature-box"> 
							<img src="assets/icons/5.png" style=" display: inline-block;
    font-size: 40px;
    height: 40px;
    text-align: center;
    width: 40px;
    float: left;">
							<div class="feature-content">
								<h4 style="text-align:left;">Verify Mobile Number</h4>
								<p style="text-align:justify;">Please verify your mobile number and get the offers details through SMS!</p> 
							</div>
							
						</div>
						<div class="feature-box"> 
						<img src="assets/icons/4.png" style="display: inline-block;font-size: 40px;height: 40px;text-align: center;width: 40px;float: left;">
							<div class="feature-content">
								<h4 style="text-align:left;">Enjoy the deals</h4>
								<p style="text-align:justify;">Get to know the new deals and become a part of it to enjoy the benefits!</p> 
							</div>
							
						</div>
						</div>
						</div>
					</div>
                </div>
            </div>
			
   

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
<script type="application/ld+json">{"@context":"http://schema.org","@type":"Blog","url":"http://www.zoprent.com/blog/"}</script>
	<script type="application/ld+json">{"@context":"http://schema.org","@type":"Organization","name":"ZopRent","url":"http://www.zoprent.com","sameAs":["https://www.facebook.com/zoprent/","https://plus.google.com/u/1/103868915637686020587","https://twitter.com/zop_rentcom","https://foursquare.com/user/479428685"]}</script>

</body>

</html>