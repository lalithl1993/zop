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
                                    <a href="psigns.php"><img src="assets/logo.png" alt="Your Store" id="logo"   class="desktop"/></a>
                                    <a href="psigns.php"><img src="assets/logoes.png" alt="Your Store" id="logo1" class="mobile"  style="display:none;width:150px"/></a>
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
                                                                    <a href="psigns.php" class="clearfix">Home</a>

                                                                </li>
                                                                <li>
                                                                    <p class="close-menu"></p>
                                                                    <a href="abouts.php" class="clearfix">About</a>
                                                                </li>
									 							
															
																
														 <li>
                                                                <p class="close-menu"></p>
																<?php
																	if(isset($_SESSION['user_login']))
																	{
																		echo '
																		 <li>
																				<p class="close-menu"></p>
																				<a href="logouts.php" class="clearfix">Sign Out</a>
																		 </li>';
																		 echo  '<li><a href="#" class="transition-effect" style="margin: 0 0 0 15px;">
				<img src="assets/user4.png" alt="cruise" style="width: 30px;height: 30px;border-radius: 50%;">
							Hi, '.$_SESSION['name'].'
						</a> 
														</li>';
																		
												
																	}
																	else
																	{
																		echo '
																			<li>
																				<p class="close-menu"></p>
																				<a href="psigns.php#signin" class="clearfix">Sign In</a>
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