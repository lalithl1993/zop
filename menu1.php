<?php
date_default_timezone_set('Asia/Calcutta');
	if(!isset($_SESSION['city']))
	{
		$_SESSION['city']='1';
	}
	if(isset($_SESSION['user_id']))
	{
		$user_id=$_SESSION['user_id'];
	}
	else if(!isset($_SESSION['user_id']))
	{
			//*********************<Generating User Number>*************************//

		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < 3; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		$user_id="user".$randomString.date("is");
		
			//*********************</Generating User Number>***********************//
		$_SESSION['user_id']=$user_id;
		
	}
?>
<style>
@media (max-width: 960px) {
	.variantleft
	{
	background:#fff;
	}
}
.fa {
  margin-left : -5px;
}
</style>
<style>
#flash-button{
	
	padding:15px 10px;
	color:#fff;
	border:none;
	border-radius:1px; 
	
	animation-name: flash;
	animation-duration: 0.5s;
	animation-timing-function: linear;
	animation-iteration-count: infinite;

	//Firefox 1+
	-webkit-animation-name: flash;
	-webkit-animation-duration: 0.5s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: infinite;

	//Safari 3-4
	-moz-animation-name: flash;
	-moz-animation-duration: 0.5s;
	-moz-animation-timing-function: linear;
	-moz-animation-iteration-count: infinite;
}

@keyframes flash {  
    0% { opacity: 1.0; }
    50% { opacity: 0.5; }
    100% { opacity: 1.0; }
}

//Firefox 1+
@-webkit-keyframes flash {  
    0% { opacity: 1.0; }
    50% { opacity: 0.5; }
    100% { opacity: 1.0; }
}

//Safari 3-4
@-moz-keyframes flash {  
    0% { opacity: 1.0; }
    50% { opacity: 0.5; }
    100% { opacity: 1.0; }
}
</style>





		<header id="header" class="variantleft type_5" style="position:fixed;">

            <!-- Header center -->

            <!-- //Header center -->
            <!-- Header Bottom -->
           <div class="header-top compact-hidden" >
                <div class="container">
                    <div class="rows">
                        <div class="header-bottom-inner" style="width:100%">
                            <div class="header-bottom-menu col-md-12 col-sm-12 col-xs-12">
                                <div class="navbar-logo logo col-md-2 col-sm-4 col-xs-12">
                                    <a href="indext.php"><img src="assets/logo.png" alt="Your Store" id="logo"   class="desktop"/></a>
                                    <a href="indext.php"><img src="assets/logoes.png" alt="Your Store" id="logo1" class="mobile"  style="display:none;width:150px"/></a>
                                </div>

                                <div class="navbar-logo col-md-10 col-sm-4 col-xs-12">
                                    <div class="responsive so-megamenu  megamenu-style-dev">
                                        <nav class="navbar-default">
                                            <div class=" container-megamenu  horizontal">
                                                <div class="navbar-header">
                                                    <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle" style="float:right;">
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                                </div>

                                                <div class="megamenu-wrapper " >
                                                    <span id="remove-megamenu" class="fa fa-times"></span>
                                                    <div class="megamenu-pattern">
                                                        <div class="container">
                                                            <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                                                <li >
                                                                    <p class="close-menu"></p>
                                                                    <a href="indext.php" class="clearfix">Home</a>

                                                                </li>
                                                                <li>
                                                                    <p class="close-menu"></p>
                                                                    <a href="about.php" class="clearfix">About</a>
                                                                </li>
																
																	<?php 
																	$city_id=$_SESSION['city'];
														$sub_sql=mysql_query("select * from city where id='$city_id'");
														$sub_res=mysql_fetch_array($sub_sql);
														$ref_id=$sub_res['ref_id'];
														$citys=$sub_res['city_name'];
														
														$sub_sql1=mysql_query("select * from city_service where ref_id='$ref_id'");
														while($sub_row1=mysql_fetch_array($sub_sql1))
														{
															$cate_id=$sub_row1['main_category'];
															$qry=mysql_query("select * from categories where id='$cate_id'");
																while($res=mysql_fetch_array($qry))
																{
																	$cate_id=$res['id'];
																	$cate_name=$res['categories'];
																?>
																<li class="">
																	<p class="close-menu"></p>
																	<a href="products.php?id=<?php echo $cate_name."&amp;first=".$cate_id."&amp;uid=".$citys;?>" class="clearfix">
																		<?php echo $cate_name;?>
																		
																	</a>
																	
																</li>
																<?php 
																}
														
														}
														if($city_id==1 OR $city_id==11){
																echo'
																<li>
																				<p class="close-menu"></p>
																				<a href="month.php" class="clearfix">Monthly</a>
																</li>';
																}
														?>
														 <li>
                                                                <p class="close-menu"></p>
																<?php
																	if(isset($_SESSION['user_login']))
																	{
																		
																		 echo  '	<li><a href="booking_history.php" class="transition-effect" style="margin: 0 0 0 15px;">
							<img src="assets/u5.png" alt="cruise" style="width: 30px;
    height: 30px;
    border-radius: 50%;">
							Hi, '.$_SESSION['name'].'
						</a> 
														</li>';
																	echo '
																		 <li>
																				<p class="close-menu"></p>
																				<a href="logout.php" class="clearfix">Sign Out</a>
																		 </li>';	
																		
																	}
																	else
																	{
																		echo '
																			<li>
																				<p class="close-menu"></p>
																				<a href="index.php#signin" class="clearfix">Sign In</a>
																			</li>';
																	}
																?>
																															
													     </li>
														<?php
												
												if(empty($_SESSION['name'])){
														 echo '<li><a href="tel:+91-7338295909 " style="color:#fff;">
															<i class="fa fa-phone" aria-hidden="true" ></i>+91-7338295909</a>
														</li>';
													}
														
													?>
													<li>
                                                                    <p class="close-menu"></p>
                                                                    <a href="packages.php" class="clearfix" id="flash-button">Holiday Package</a>
                                                                 </li>
														 
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
								
							
                            </div>
                        </div>
                    </div>
                </div>
        </header>