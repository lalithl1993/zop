<?php 
session_start();
date_default_timezone_set('Asia/Calcutta');
include 'admin/config.php';
$weekday=strtolower(date("l"));
GLOBAL $weekday;
GLOBAL $uids;
$uids=$_GET['uid'];
$subs=$_GET['sub'];
$cit=$_GET['city'];
$ban_qrys=mysql_query("select id from sub_category where name='$subs'");
$ban_ress=mysql_fetch_array($ban_qrys);
$sub_id=$ban_ress['id'];

$ban_qry=mysql_query("select main_category from sub_category where name='$subs'");
$ban_res=mysql_fetch_array($ban_qry);
$main_id=$ban_res['main_category'];

$ban_qry1=mysql_query("select banner_image from categories where id='$main_id'");
$ban_res1=mysql_fetch_array($ban_qry1);
$banner_img=$ban_res1['banner_image'];

if($banner_img=="")
{
	$banner_img="assets/bg2.png";
}

	$sql=mysql_query("select booking_id from booking_details where booking_id !='' order by id DESC");
	$res=mysql_fetch_array($sql);
	$pre_book=$res['booking_id'];
	if($pre_book !="")
	{
		$get_id=explode("-",$pre_book);
		$a=$get_id[0];
		$b=$get_id[1]+1;
		$new_id=$a."-".$b;
	}
	if($pre_book=="")
	{
		$new_id="BK-1";
	}
	$_SESSION['booking_id']=$new_id;
function getWorkingDays($startDate, $endDate)
{
    $begin = strtotime($startDate);
    $end   = strtotime($endDate);
    if ($begin > $end) {

        return 0;
    } else {
        $no_days  = 0;
        while ($begin <= $end) {
            $what_day = date("N", $begin);
            if (!in_array($what_day, [4,5,6]) ) // 6 and 7 are weekend
                $no_days++;
            $begin += 86400; // +1 day
        };

        return $no_days;
    }
}

if(!isset($_SESSION['from_date']) or !isset($_SESSION['to_date']) )
	{
		$_SESSION['from_date']=date("d-m-Y");
		$_SESSION['db_f_date']=date("Y-m-d");
		
		$_SESSION['to_date']=date("d-m-Y", strtotime("+1 day"));
		$_SESSION['db_t_date']=date("Y-m-d", strtotime("+1 day"));
		
		$f_date=$_SESSION['db_f_date'];
		$t_date=$_SESSION['db_t_date'];
		
	
		
		
		$datetime1 = new DateTime($f_date);
		$datetime2 = new DateTime($t_date);
		$interval = $datetime1->diff($datetime2);
		$day=$interval->format('%a');
		$total_day=$day;
		if($total_day==0)
		{
			$total_day=1;
		}
		
		$_SESSION['day']=$total_day;
		 $startDate=$from_date;
$endDate=$to_date;
$week_days=getWorkingDays($startDate, $endDate);
$_SESSION['days']=$week_days;
				
	}

if(isset($_POST['book_now']))
{
    $from_time=$_POST['from_time'];
    $to_time=$_POST['to_time'];
	$from_date=$_POST['from_date'];
	$to_date=$_POST['to_date'];
	
		$result1=explode("-",$from_date);
		$db_from_date=$result1[2]."-".$result1[1]."-".$result1[0];
		
		$result2=explode("-",$to_date);
		$db_to_date=$result2[2]."-".$result2[1]."-".$result2[0];
		
	
	$user_id=$_SESSION['user_id'];
	
	$new_ven_id=$_POST['location_user'];
	$sub_category=$sub_id;
	$booking_id=$_SESSION['booking_id'];
	$day=$_SESSION['day'];
	$days=$_SESSION['days'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	
	$today_date=date("Y-m-d");
	$current_time=date("H:i:s");
	/* $weekday=strtolower(date("l"));
	 //$qry=null;
	 //if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
	 $qry=mysql_query("select oneday_price,weekend from product_details where sub_category='$sub_id' and vendor_id='$new_ven_id'");
	 //}
	 //else
	//$qry=mysql_query("select oneday_price from product_details where sub_category='$sub_id' and vendor_id='$new_ven_id'");
	$res=mysql_fetch_array($qry);
	//if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
	$day_price=$res['weekend'];
	//}
	//else
	$day_prices=$res['oneday_price'];
	//$tots=$day-$days;
	//$price1=$tots*$dayprice;
	//$price2=$days*$dayprices;
	//$total_price=$price1+$price2; */ 
	
	$total_price=$_SESSION['totals'];
	
	$ins=mysql_query
	("INSERT INTO booking_details(booking_id,user_id,booked_date,booked_time,name,email,phone,city,address,vendor_id,sub_category,from_date,to_date,total_price,status) 
	VALUES ('$booking_id', '$user_id', '$today_date', '$current_time', '$name', '$email', '$phone', '$cit', '$address', '$new_ven_id', '$sub_category', '$db_from_date', '$db_to_date', '$total_price', 'Success')");			
	
		$sub_qry2=mysql_query("select name from sub_category where id='$sub_category'");
		$sub_res2=mysql_fetch_array($sub_qry2);
		$pro_name=$sub_res2['name'];
		
		$sub_qry3=mysql_query("select vendor_name,vendor_location from vendor where id='$new_ven_id'");
		$sub_res3=mysql_fetch_array($sub_qry3);
		$ven_name=$sub_res3['vendor_name'];
		$ven_loc=$sub_res3['vendor_location'];
		
  $to = 'zoprentcs@gmail.com'; 
   //$to = "zoprentcs@gmail.com\r\n";
   $subject = "New Request\n";
   $message = "Booking Detail.\n";
   $message .= "Name   : ".$name."\n";
   $message .= "Email  : ".$email."\n";
   $message .= "Phone  : ".$phone."\n";
   $message .= "Grand Total  : Rs. ".$total_price."\n";
								$message .= "From Date  : ".$from_date."\n";
								$message .= "To Date  : ".$to_date."\n";
								$message .= "Product Name  : ".$pro_name."\n";
								$message .= "Vendor Name  : ".$ven_name."\n";
								$message .= "Vendor Location  : ".$ven_loc."\n";
   $from = 'zoprent@gmail.com';
   $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);
   
    $to = 'zoprent@gmail.com'; 
   //$to = "zoprentcs@gmail.com\r\n";
   $subject = "New Request\n";
   $message = "Booking Detail.\n";
  
    $message .= "Name   : ".$name."\n";
   $message .= "Email  : ".$email."\n";
   $message .= "Phone  : ".$phone."\n";
    $message .= "Grand Total  : Rs. ".$total_price."\n";
								$message .= "From Date  : ".$from_date."\n";
								$message .= "To Date  : ".$to_date."\n";
								$message .= "Product Name  : ".$pro_name."\n";
								$message .= "Vendor Name  : ".$ven_name."\n";
								$message .= "Vendor Location  : ".$ven_loc."\n";
   $from = 'zoprent@gmail.com';
   $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);
		
		/*----------SMS START For Admin----------------------*/
								//$mobls='7338295505';
								$mobl1='7338295909';
								//$mobls='8073951672';
									
								$message  = "New Request\n";
								$message .= "Name   : ".$name."\n";
								$message .= "Email  : ".$email."\n";
								$message .= "Phone  : ".$phone."\n";
								$message .= "Grand Total  : Rs. ".$total_price."\n";
								$message .= "From Date  : ".$from_date."\n";
								$message .= "To Date  : ".$to_date."\n";
								$message .= "Product Name  : ".$pro_name."\n";
								$message .= "Vendor Name  : ".$ven_name."\n";
								$message .= "Vendor Location  : ".$ven_loc."\n";
								
								$msg=$message;
								$msg_body_final=urlencode($msg);
								
								//$URL = "mindappssms.in/submitsms.jsp?user=rentraja&key=458e7a768eXX&mobile=".$mobl."&message=".$msg_body_final."&senderid=RNTRAJ&accusage=1";
								//$URL ="http://login.jupitersms.in/api/mt/SendSMS?user=zoprent&password=Codezop3&senderid=ZOPRNT&channel=Trans&DCS=0&flashsms=0&number=".$mobl."&text=".$msg_body_final."&route=6";
							$URL="http://roundsms.com/api/sendhttp.php?authkey=OTFmM2Y1ZDJkNDd&mobiles=".$mobl1."&message=".$msg_body_final."&sender=ZOPRNT&type=1&route=2";
//$URL="http://api.roundsms.in/api/SendSMS?api_id=API2072419998&api_password=zop54321&sms_type=O&encoding=T&sender_id=ZOPRNT&phonenumber=".$mobl1.",".$mobls."&textmessa$msg_body_final."";
		
								$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $URL);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								curl_exec($ch);
								curl_close($ch);
								
								
								
									/*-----------SMS END Admin---------------------*/			
									/*----------SMS START For User----------------------*/
								
								$message="Dear ".$name."\n";
								$message .= "We have received your request. Our team will get in touch with you soon.\n";
								$message .= "www.zoprent.com";
								$msg=$message;
								$msg_body_final=urlencode($msg);
								
								//$URL = "mindappssms.in/submitsms.jsp?user=rentraja&key=458e7a768eXX&mobile=+91".$phone."&message=".$msg_body_final."&senderid=RNTRAJ&accusage=1";
								//$URL ="http://login.jupitersms.in/api/mt/SendSMS?user=zoprent&password=Codezop3&senderid=ZOPRNT&channel=Trans&DCS=0&flashsms=0&number=".$phone."&text=".$msg_body_final."&route=6";
								$URL="http://roundsms.com/api/sendhttp.php?authkey=OTFmM2Y1ZDJkNDd&mobiles=".$phone."&message=".$msg_body_final."&sender=ZOPRNT&type=1&route=2";
		              //$URL="http://api.roundsms.in/api/SendSMS?api_id=API2072419998&api_password=zop54321&sms_type=O&encoding=T&sender_id=ZOPRNT&phonenumber=".$mobl1."&textmessage=".$msg_body_final."";
		
							$ch = curl_init();
								curl_setopt($ch, CURLOPT_URL, $URL);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								curl_exec($ch);
								curl_close($ch);
								
									/*-----------SMS END User---------------------*/
				
			
				
					
				/**************Admin Email End*****************************/
				/**************User Email Start*****************************/
				
				
		
		
	header('location:thankyou.php');
		
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
	============================================ -->
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
	============================================ -->
    <title>ZopRent- Rent Self-driven,Motorbike & Stay at Bangalore,Mysore,Goa, Pondicherry,Hyderabad,Pune,Mumbai & Pune</title>
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
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

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
	.page-main-section {
    background: url(<?php echo $banner_img; ?>);
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
<script>
fbq('track', 'Lead');
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
		.boxs
		{
			width:380px !important;
			
			
		}
		@media (max-width: 590px) {
		.boxs
		{
			width:230px !important;
			
			
		}
		}
		@media (max-width: 590px) {
		.mys
		{
			top:-10px !important;
			margin-left:-40px !important;
			
		}
		.mobsf
		{
		margin-left:-10px;
		}
		} 
		@media (max-width: 750px) {
		.mobn{
	     text-align:right; 
		 fon-family:ab2;
		 font-size:5px;
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
<!--Popup End-->	
		
		<script>
			function change_date()
			{
				from_date=$("#from_date").val();
				to_date=$("#to_date").val();
				
				jQuery.ajax({
						type:"POST",
						url:"ajax.php?f=change_date",
						datatype:"text",
						data:{from_date:from_date,to_date:to_date},
						success:function(response)
						{
							location.reload();
						},
						error:function (xhr, ajaxOptions, thrownError){}
					});
			}
	function change_location(id)
	{
		location_user=$("#"+id).val();
		result=id.split("_");	
		sub_id=result[1];
		div_id=result[2];
		
		jQuery.ajax({
						type:"POST",
						url:"ajax.php?f=change_location",
						datatype:"text",
						data:{location_user:location_user,sub_id:sub_id,div_id:div_id},
						success:function(response)
						{
							a=response.split("~$*");
							pro_details=a[0];
							msg=a[1];
							$("#product_details").empty();
							$("#product_details").append(pro_details);
							$("#msg").empty();
							$("#msg").append(msg);
						},
						error:function (xhr, ajaxOptions, thrownError){}
					});
		
		
	}
	function not_available()
	{
		alert("Not Available, Please select another date.....?");
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
<?php $category=$_SESSION['category'];?>
<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">
		<!-- Header Container  -->
		<?php include 'menu1.php';?>
		<!-- //Header Container  --> 	
		<!-- Main Container  -->
		<div class="page-title page-main-section" style="padding-top: 6%; background-position: 50% 0px;">
  <div class="container padding-bottom-top-120 text-uppercase text-center" style="padding: 41px 0;">
    <div class="main-title" style="padding-top: 4%;padding-bottom: 2%;">
      <h1 style="color:#fff;font-family:ab2;">Your  <?php 
	   if($category=='Bikes'){
	  echo 'ZopRent Bike';
	  }
	  elseif($category=='Cars'){
	  echo 'ZopRent Car';
	  }
	  else  {
	  echo 'ZopRent Stay';
	  }
	  ?>  is here!</h1> 
      <h5 style="color:#fff;font-family:ab2;">Enjoy the journey!!</h5>
      
     </div>
  </div>
</div>
		<div class="main-container container">
			
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-md-12 col-sm-12">
					
					
					<?php
						
						$day=$_SESSION['day'];
						$days=$_SESSION['days'];
						$city_id=$uids;
						$db_date_from=$_SESSION['db_f_date'];
						$db_date_to=$_SESSION['db_t_date'];
						
						
						$i=1;
						$id=array();
						$ven_value="";
						//$qry1=null;
	                    //if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
						$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' order by oneday_price asc");
						//}
						//else
						//$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' order by oneday_price asc");
						while($res1=mysql_fetch_array($qry1))
						{
							$day=$_SESSION['day'];
							$days=$_SESSION['days'];
							$vendor_id1=$res1['vendor_id'];
							$sub_id2=$res1['sub_category'];
							$qty=$res1['qty'];
							
						$sub_qry=mysql_query("select id from booking_details where (sub_category='$sub_id2' and vendor_id='$vendor_id1' )
						and ((from_date between '$db_date_from' and '$db_date_to') or (to_date between '$db_date_from' and '$db_date_to')) and status='Success'");
						$booked_count=mysql_num_rows($sub_qry);		
						$diff=$qty-$booked_count;
						
							if(!($diff >=1))
							{
								$id[]=$vendor_id1;
							}	
							$i++;	
						}
						if(count($id)>=1)
						{
							$ven_value .=" vendor_id != ".implode(' and vendor_id!= ',$id)." ";
							//$sub_qry2=null;
						//if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
					 
                    $test_qry="select * from product_details where (sub_category='$sub_id' and vendor_city='$city_id') and $ven_value order by oneday_price asc";
                     //}	
                   //else					 
					//$test_qry="select * from product_details where (sub_category='$sub_id' and vendor_city='$city_id') and $ven_value order by oneday_price asc";								
						}
						else
						{
						    //$sub_qry2=null;
						//if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
						$test_qry="select * from product_details where (sub_category='$sub_id' and vendor_city='$city_id') order by oneday_price asc";
					//}
					//else
					//$test_qry="select * from product_details where (sub_category='$sub_id' and vendor_city='$city_id') order by oneday_price asc";
								}
						$test=mysql_query($test_qry);
						$count=mysql_num_rows($test);
						$res=mysql_fetch_array($test);
						$pro_id=$res['id'];
						$pricen=$res['oneday_price'];
						$pricew=$res['weekend'];
						if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
	$price=$res['weekend'];
	}
	else
	$price=$res['oneday_price'];
						
						
						$terms=$res['terms_conditions'];
						$tots=$day-$days;
	$price1=$tots*$pricew;
	$price2=$days*$pricen;
	$total_price=$price1+$price2;
						//$total_price=$day*$price;
						
						$sql=mysql_query("select * from sub_category where id='$sub_id'");
						$row=mysql_fetch_array($sql);
						$pro_name=$row['name'];
						$image=$row['image'];
						$description=$row['description'];
						
						
					?>
					
				<form action="" method="POST">
					<div class="product-view row" style="padding-top:3%;">
						<div class="left-content-product col-lg-12 col-xs-12">
							<div class="row">
							 
								<div class="content-product-left  col-md-3 col-sm-12 col-xs-12">
<h3 style="text-align:center;color:#004066;font-size:15px;font-family:ab2;font-size:20px;    font-weight: bold;"><?php echo $pro_name;?></h3>
								
									<center><img src="admin/<?php echo $image;?>" alt="Canon EOS 5D"></center>
									</div>

							<div class="content-product-right col-md-5 col-sm-12 col-xs-12">
								<div id="product">
									<div class="form-group box-info-product">
											<div class="col-sm-12 col-md-12"  style="">
												<p style="text-align:justify;font-family:ab2;font-size: 15px;line-height: 26px;"><?php echo $description;?></p>
			 									<?php 
											
												if($city_id ==1 || $city_id == 9 || $city_id == 20 || $city_id == 16 )
												{	
														}
														else if($city_id==10 && $category=='Cars'){
														}
														else if($city_id==11 && $category=='Cars'){
														}
														else if($city_id==19 && $category=='Cars'){
														}
														else if($city_id==22 && $category=='Cars'){
														}
														else if($city_id==21 && $category=='Bikes'){
														}
														else{
															echo '<br/><p style="color:green"><strong>* Booking for a single day? Vehicle should be return on same day.</strong></p>';
														}
														
														
														?>
												 <h3 style="text-align: left;
    color: #004066;
    font-size: 16px;
    font-family: ab2;
    font-weight: bold;
    margin-top: 3%;">Select Date & Location </h3>
								                        <?php
														/*if($city_id==8){
								                        echo '<p style="color:red"><strong>* Please Note.Price varies from 15-12-2017 to 31-12-2017.Thanks for your understanding.</strong></p>';
														}
														elseif($city_id==7){
														 echo '<p style="color:red"><strong>* Please Note.Price varies from 1-12-2017 to 31-12-2017.Thanks for your understanding.</strong></p>';
														
														}
														
														elseif($category=='Cars' && $city_id ==1){
													echo'<p style="color:red"><strong>* Please Note. There is a minimum booking of 4 days between 20th December, 2017 to 2nd January, 2018 and Peak days charges are applicable. Thanks for your understanding. </strong></p>';
													}
													else{
														 echo '<p style="color:red"><strong>* Please Note.Price varies from 20-12-2017 to 05-01-2018.Thanks for your understanding.</strong></p>';
														
														}*/
													?>
										
														
														<fieldset id="account" style="margin-left:0px;">
														<form action="" method="POST">
														  <div class="col-md-5 col-sm-12">
														  <div class="form-group ">
															<label for="input-payment-firstname" class="control-label" style="font-family: ab2;color: #606062;">From Date</label>
															<input type="text" class="form-control" id="from_date" placeholder="From Date" value="<?php echo $_SESSION['from_date'];?>" name="from_date" onchange="change_date();">
														  </div>
														  </div>  
														 <div class="col-md-5 col-sm-12">
														  <div class="form-group ">
															<label for="input-payment-firstname" class="control-label" style="font-family: ab2;color: #606062;">To Date</label>
																<input type="text" class="form-control" id="to_date" placeholder="To Date" value="<?php echo $_SESSION['to_date'];?>" name="to_date" onchange="change_date();">
                                                              <label>from time</label><input type="text" name="from_time"/>
                                                              <label>to time</label><input type="text" name="to_time"/>
														  </div>
														  </div>
														</form>
														</fieldset>
													
											</div>
												<div class="row">
												
					
												
											<div class="col-md-12 col-sm-12 col-xs-12" style="font-family: ab2;margin-left:0px;" id="product_details">
													<?php 
										if($count>=1)
										{
													echo '
													 
										<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12">
												
											<div class="col-md-12" style="padding-top: 1%;font-family: ab2;">
													<div class="form-group ">
											<label for="input-payment-firstname" class="control-label"  style="font-family: ab2;font-size: 16px;color: #004066;">Select Location</label>
																											
													<select class="form-control boxs" id="loc_'.$sub_id.'_'.$pro_id.'"  name="location_user"  onchange="change_location(this.id);" 
													style="border: 1px solid #004066;font-family:ab2;width: 97%;">';
													//$sub_qry2=null;
									//if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
									$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' order by oneday_price asc");
									//}
									//else
									//$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' order by oneday_price asc");
													
													while($res1=mysql_fetch_array($qry1))
													{
														$day=$_SESSION['day'];
														$days=$_SESSION['days'];
														$vendor_id=$res1['vendor_id'];
														$sub_id1=$res1['sub_category'];
														$qty=$res1['qty'];
														
												$sub_qry=mysql_query("select id from booking_details where (sub_category='$sub_id1' and vendor_id='$vendor_id')
													and ((from_date between '$db_date_from' and '$db_date_to') or (to_date between '$db_date_from' and '$db_date_to')) and status='Success'");
												
												$booked_count=mysql_num_rows($sub_qry);		
												
												$diff=$qty-$booked_count;
												     //if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
													 $ven_prices=$res1['weekend'];
														//}
														//else
														
														$ven_pricew=$res1['oneday_price'];
														
														$qry2=mysql_query("select * from vendor where id='$vendor_id'");
														$res2=mysql_fetch_array($qry2);
														$ven_name=$res2['vendor_name'];
														$ven_loc=$res2['vendor_location'];
														$tots=$day-$days;
                                                        $price1=$tots*$ven_prices;
                                                        $price2=$days*$ven_pricew;
                                                        $ven_total_price=$price1+$price2;
														//$ven_total_price=$day*$ven_price;
														if($diff>=1)
														{
															echo '<option value="'.$vendor_id.'">'.$ven_loc.'- Rs. '.$ven_total_price.' (Available)</option>';
														}
														else
														{
															echo '<option value="'.$vendor_id.'" disabled>'.$ven_loc.'- Rs. '.$ven_total_price.' (Not Available)</option>';
														}													
														
													}												
														  
													echo'</select>
												</div>
												</div>
												</div>
												</div>
												<div class="row">
												<div class="container">
															<div class="col-md-12 col-sm-12 col-xs-12">
																	<div class="col-md-6">
																	
																	      
																		<h5 style="font-size: 15px; font-weight: bold; color: #004066;">Daily Price</h5>
																		<h5 style="font-size: 20px;font-weight: bold;"><i class="fa fa-inr"></i> '.$price.' / day</h5>
																		
																	</div>
																	
																	<div class="col-md-6">
																		<h5 style="font-size: 15px; font-weight: bold;color: #004066;">Amount Payable</h5>
																		<h5 style="font-size: 20px;font-weight: bold;"><i class="fa fa-inr"></i> '.$total_price.'</h5>
																	</div>
														
															
															<a href="#terms" target="_self" style="color: #004066;font-family:ab2;font-weight:bold;">
                                                        <input type="button" class="btn btn-info" style=" margin-top: 6%; border-radius: 4px;" value="Terms & Condition">
														</a>
													</div>
													</div>
													</div>
													';
													$_SESSION['totals']=$total_price;
													
										}
										
										else if($count<=0)
										{	
													echo '
													
										<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 ">
												
											<div class="col-md-12" style="padding-top: 1%;font-family: ab2;">
													<div class="form-group ">
												<label for="input-payment-firstname" class="control-label" style="font-family: ab2;color: #606062;">Select Location</label>
																											
													<select class="form-control" id="loc_'.$sub_id.'_'.$pro_id.'"  name="location_user"  onchange="change_location(this.id);" 
													style="border: 1px solid #004066;font-family:ab2;width: 97%;">';
													echo '<option value="">Not Available</option>';
													//$sub_qry2=null;
									//if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
									$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' order by oneday_price asc");
									//}
									//else
									//$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' order by oneday_price asc");
													
													while($res1=mysql_fetch_array($qry1))
													{
														$day=$_SESSION['day'];
														$days=$_SESSION['days'];
														$vendor_id=$res1['vendor_id'];
														$sub_id1=$res1['sub_category'];
														$qty=$res1['qty'];
														
												$sub_qry=mysql_query("select id from booking_details where (sub_category='$sub_id1' and vendor_id='$vendor_id')
													and ((from_date between '$db_date_from' and '$db_date_to') or (to_date between '$db_date_from' and '$db_date_to')) and status='Success'");
												
												$booked_count=mysql_num_rows($sub_qry);		
												
												$diff=$qty-$booked_count;
														//if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
														$ven_prices=$res1['weekend'];
														//}
														//else
														$ven_pricew=$res1['oneday_price'];
														
														$qry2=mysql_query("select * from vendor where id='$vendor_id'");
														$res2=mysql_fetch_array($qry2);
														$ven_name=$res2['vendor_name'];
														$ven_loc=$res2['vendor_location'];
														$tots=$day-$days;
                                                        $price1=$tots*$ven_prices;
                                                        $price2=$days*$ven_pricew;
                                                        $ven_total_price=$price1+$price2;
														//$ven_total_price=$day*$ven_price;
														if($diff>=1)
														{
															echo '<option value="'.$vendor_id.'">'.$ven_loc.' - Rs. '.$ven_total_price.' (Available)</option>';
														}
														else
														{
															echo '<option value="'.$vendor_id.'" disabled>'.$ven_loc.' - Rs. '.$ven_total_price.' (Not Available)</option>';
														}													
														
													}												
														  
													echo'</select>
												</div>
												</div>
												</div>
												</div>';
										}
											?>			
											</div>
											</div>
										</div>
									<!-- end box info product -->
								</div>
							</div>
			
								<div class="col-md-4 col-sm-12 col-xs-12 mobsf" style="padding-left:20px;">
					
					 <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title" style="font-weight: bold;text-align:center;
									font-family: ab2;">For Booking</h4>
						</div>
						<br/>
						<h4 class="panel-title" style="font-weight: bold;text-align:center;color=black;
									">Give us a missed call at <span style="color:blue;";>+91-7338295909</span><br/><br/>
									Or</h4><br/>
									<h4 class="panel-title" style="font-weight: bold;text-align:center;
									font-family: ab2;"><i class="fa fa-user"></i> Your Personal Details</h4>
						  <div class="panel-body">
											<fieldset id="account">
											  <div class="form-group required">
												<label for="input-payment-firstname" class="control-label"> Name</label>
												<input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
											  </div>
											   
											 
											  <div class="form-group required">
												<label for="input-payment-email" class="control-label">E-Mail</label>
												<input type="email" class="form-control" id="input-payment-email" placeholder="E-Mail" name="email" required>
											  </div>
											  
											  <div class="form-group required">
												<label for="input-payment-telephone" class="control-label">Phone</label>
												<input type="text" class="form-control" placeholder="Phone" maxlength="10" id= "phone" name="phone" required style="display:block;">
												
											  </div>
											 
											  <div class="form-group">
												<label for="input-payment-fax" class="control-label">Address</label>
										<textarea rows="2" class="form-control" id="address" name="address"  placeholder="Address"></textarea>	
									<br>
									<label class="control-label" for="confirm_agree">
											  <input type="checkbox"  value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
											  <span>I have read and agree to the <a class="agree" href="#terms" required=""><b>Terms &amp; Conditions</b></a></span> </label>
											  <div class="pull-left" style="margin-top:2%;">
												<?php
												if($count>=1)
												{
													echo '<input type="submit" class="btn btn-primary" id="book_now" name="book_now" value="Confirm Order">';
												}
												else
												{
													echo '<input type="button" class="btn btn-primary" id="book_now" name="book_now" value="Confirm Order" onclick="not_available();">';
												}
												
												?>
												
												
											  </div>

										</div>
											</fieldset>
							
						</div>
					  </div>
					 
					</div>
							</div> 
						</div>
						
						</form>
					</div>
					
					
					
					
					<div class="remodal" data-remodal-id="terms"  style="border: 3px solid #004066;">
					
								  
								  <div class="modal-body">
								   <!--<img src="assets/logo.png"/>-->
						 		    <img src="logos.png"/>
									<h3 style="text-align:center; font-family: ab2;font-weight:bold;"><span style="color:#004066;font-family: ab2;font-weight: bold;">Terms </span>& Condition</h3>
									 <a data-remodal-action="close"  class="remodal-close mys"></a>
									<div id="msg" style="font-size: 13px;
    text-align: justify;
    line-height: 1;
    font-family: ab3;">
									<p style="text-align:justify;fon-family:ab2;font-size:15px;"></p>
									<?php echo $terms;?>
									</div>
									</div>
								  
								</div>
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
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>			

					<script type="text/javascript">
						$(document).ready(function() {
							var zoomCollection = '.large-image img';
							$( zoomCollection ).elevateZoom({
								zoomType    : "inner",
								lensSize    :"200",
								easing:true,
								gallery:'thumb-slider-vertical',
								cursor: 'pointer',
								galleryActiveClass: "active"
							});
							$('.large-image').magnificPopup({
								items: [
									{src: 'image/demo/shop/product/1.png' },
									{src: 'image/demo/shop/product/f9.jpg' },
									{src: 'image/demo/shop/product/2.png' },
									{src: 'image/demo/shop/product/3.png' },
									{src: 'image/demo/shop/product/j9.jpg' },
								],
								gallery: { enabled: true, preload: [0,2] },
								type: 'image',
								mainClass: 'mfp-fade',
								callbacks: {
									open: function() {
										
										var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
										var magnificPopup = $.magnificPopup.instance;
										magnificPopup.goTo(activeIndex);
									}
								}
							});
							$("#thumb-slider-vertical .owl2-item").each(function() {
								$(this).find("[data-index='0']").addClass('active');
							});
							
							$('.thumb-video').magnificPopup({
							  type: 'iframe',
							  iframe: {
								patterns: {
								   youtube: {
									  index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
									  id: 'v=', // String that splits URL in a two parts, second part should be %id%
									  src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
										},
									}
								}
							});
							
							$('.product-options li.radio').click(function(){
								$(this).addClass(function() {
									if($(this).hasClass("active")) return "";
									return "active";
								});
								
								$(this).siblings("li").removeClass("active");
								$(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
							});
							
							var _isMobile = {
							  iOS: function() {
							   return navigator.userAgent.match(/iPhone/i);
							  },
							  any: function() {
							   return (_isMobile.iOS());
							  }
							};
							
							$(".thumb-vertical-outer .next-thumb").click(function () {
								$( ".thumb-vertical-outer .lSNext" ).trigger( "click" );
							});
			
							$(".thumb-vertical-outer .prev-thumb").click(function () {
								$( ".thumb-vertical-outer .lSPrev" ).trigger( "click" );
							});

							$(".thumb-vertical-outer .thumb-vertical").lightSlider({
								item: 4,
								autoWidth: false,
								vertical:true,
								slideMargin: 7,
								verticalHeight:425,
					            pager: false,
								controls: true,
					            prevHtml: '<i class="fa fa-chevron-up"></i>',
					            nextHtml: '<i class="fa fa-chevron-down"></i>',
								responsive: [
									{
										breakpoint: 1199,
										settings: {
											verticalHeight: 330,
											item: 4,
										}
									},
									{
										breakpoint: 1024,
										settings: {
											verticalHeight: 235,
											item: 2,
											slideMargin: 5,
										}
									},
									{
										breakpoint: 768,
										settings: {
											verticalHeight: 340,
											item: 3,
										}
									}
									,
									{
										breakpoint: 480,
										settings: {
											verticalHeight: 100,
											item: 1,
										}
									}
					
								]
								
					        });
			
							
							
							// Product detial reviews button
							$(".reviews_button,.write_review_button").click(function (){
								var tabTop = $(".producttab").offset().top;
								$("html, body").animate({ scrollTop:tabTop }, 1000);
							});
						});
							
					</script>

					
				</div>
				
				
			</div>
			<!--Middle Part End-->
		</div>
		<!-- //Main Container -->
<script type="text/javascript">
        <!--
        var $typeheader = 'header-home5';
        //-->
    </script>
		<!-- Footer Container -->
			<?php include 'footer.php';?>
    <!-- //end Footer Container -->

    </div>
    

	
		<div class="remodal" data-remodal-id="success" style="border: 4px dotted #004066;">
							
						<a data-remodal-action="close" class="remodal-close"></a>
					<br>	
					<img src="assets/logo.png" alt="Logo">
				  <p style="line-height:1.8;font-size:20px;font-family:ab1;letter-space:1px;">Thankyou for contacting us!</br>
				  Our team will get in touch with you soon!</p>
				  
		</div>
	
    <!-- Cpanel Block -->

    <link rel='stylesheet' property='stylesheet' href='css/themecss/cpanel.css' type='text/css' media='all' />

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
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
  $( function() {
    $( "#from_date").datepicker({ dateFormat: "dd-mm-yy",minDate:0}).val();
    $( "#to_date").datepicker({ dateFormat: "dd-mm-yy",minDate:0}).val();
  } );
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
        //paste this code under the head tag or in a separate js file.
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
</body>

</html>