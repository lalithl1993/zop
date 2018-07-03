<?php
session_start();
date_default_timezone_set('Asia/Calcutta');
include("admin/config.php");

	if($_GET['f']=="change_city")
	{
		change_city(); 
	}
	if($_GET['f']=="change_citys")
	{
		change_citys(); 
	}
	if($_GET['f']=="change_location")
	{
		change_location(); 
	}
	if($_GET['f']=="months_location")
	{
		months_location(); 
	}
	if($_GET['f']=="add_to_cart")
	{
		add_to_cart(); 
	}
	if($_GET['f']=="remove_cart")
	{
		remove_cart(); 
	}
	if($_GET['f']=="change_date")
	{
		change_date(); 
	}
	if($_GET['f']=="changes_date")
	{
		changes_date(); 
	}
	if($_GET['f']=="check_login")
	{
		check_login(); 
	}
	if($_GET['f']=='signup')
	{
		signup();
	}
	if($_GET['f']=='check_otp')
	{
		check_otp();
	}
	if($_GET['f']=='resend_otp')
	{
		resend_otp();
	}
	if($_GET['f']=="check_email_available")
	{
		check_email_available();
	}
	if($_GET['f']=="check_phone_available")
	{
		check_phone_available();
	}
	
	
	if($_GET['f']=="add_accommodation")
	{
		add_accommodation();
	}
	if($_GET['f']=="change_location_acc")
	{
		change_location_acc();
	}
	if($_GET['f']=="calculate_resort_price")
	{
		calculate_resort_price();
	}
	if($_GET['f']=="cal_total_price")
	{
		cal_total_price();
	}
	if($_GET['f']=="resort_image_pop")
	{
		resort_image_pop();
	}
	
	
	
	
	function add_accommodation()
	{
		$cout=$_POST['counter'];
		
		$id=$cout+1;
		
		echo'
						<div id="accomadation_'.$id.'">
							<div style="border-style: ridge;border-color: rgba(212, 212, 232, 0.32);">
								<fieldset id="account" style="margin-left: -3%;">
								  <div class="col-md-12 col-sm-12">
								  <div class="col-md-6 col-sm-12">
								  <div class="form-group ">
								  
									<label for="input-payment-firstname" class="control-label" style="font-family: ab2;color: #606062;">From Date</label>
									<input type="text" class="date_picker" required id="from_date_'.$id.'" placeholder="From Date" value="'.date("d-m-Y").'" name="from_date_acc[]" onchange="change_date_acc(this.id)">
								  </div>
								  </div>  
								 <div class="col-md-6 col-sm-12">
								  <div class="form-group ">
									<label for="input-payment-firstname" class="control-label" style="font-family: ab2;color: #606062;">To Date</label>
										<input type="text" class="date_picker" required id="to_date_'.$id.'" placeholder="To Date" value="'.date("d-m-Y").'" name="to_date_acc[]" onchange="change_date_acc(this.id)">
								  </div>
								  </div>
								
								  
								  
								  
							<div class="col-md-12 col-sm-12">  
								<div class="form-group ">
									<label for="input-payment-firstname" class="control-label" style="font-family: ab2;color: #606062;">Select Location</label>
																					
							<select class="form-control" id="loc_'.$id.'" name="location_user1[]"  onchange="change_location_acc(this.id);" 
							style="border: 1px solid #004066;font-family:ab2;width: 97%;" required>';
							echo '<option value="">Select City</option>';	
							$qry1=mysql_query("select * from city order by priority Desc");
							while($res1=mysql_fetch_array($qry1))
							{
									echo '<option value="'.$res1['id'].'">'.$res1['city_name'].'</option>';	
							}												
								  
							echo'</select>
						</div>  
						
						
						</div>  
						</div>  
						
						
						<div class="col-md-12 col-sm-12">  
							<div class="col-md-5 col-sm-12">  
								<div class="form-group ">
									<label for="input-payment-firstname" class="control-label" style="font-family: ab2;color: #606062;">Select Resort</label>													
									<select class="form-control" id="resort_'.$id.'"  name="location_resort[]"  onchange="change_resort(this.id);" 
									style="border: 1px solid #004066;font-family:ab2;width: 97%;" required>';
									echo '<option value="">Select Resort</option>';	
									echo'</select>
								</div>  
							</div> 
							
							 <div class="col-md-4 col-sm-12">  
								<span id="resort_price_'.$id.'" style="font-size: 20px;font-weight: bold;padding-right: 10px;">
								</span>
							</div> 
							<div class="col-md-3 col-sm-12">
								<a href="javascript:void(0);" title="Cancel the current accomadation" id="'.$id.'" onclick="remove_acc(this.id);"><i class="fa fa-times" aria-hidden="true" style="font-size:30px;margin-top: 26%;"></i></a>&nbsp;<span style="font-weight: bold;font-size:19px;"></span>
							</div>
							
							
						</div>  
					</fieldset>
				</div>
			</div>
						';
						
						
						
	}
	
	function change_location_acc()
	{
		$city_id=$_POST['city_id'];
		$f_date=$_POST['f_date'];
		$t_date=$_POST['t_date'];
		
		
		
		$datetime1 = new DateTime($f_date);
		$datetime2 = new DateTime($t_date);
		$interval = $datetime1->diff($datetime2);
		$day=$interval->format('%a');
		$total_day=$day+1;
		
		if($total_day==0)
		{
			$total_day=1;
		}
		
		echo '<option value="">Select Resort</option>';
		$sql=mysql_query("Select * from resorts where city_id='$city_id'");
		while($row=mysql_fetch_array($sql))
		{
			$price=$row['price_day'];
			$total_price=$total_day*$price;
			echo '<option value="'.$row['id'].'">'.$row['resort_name'].'</option>';	
		}
		
	}
	function calculate_resort_price()
	{
		$div_id=$_POST['div_id'];
		$resort_id=$_POST['resort_id'];
		$city_id=$_POST['city_id'];
		$f_date=$_POST['f_date'];
		$t_date=$_POST['t_date'];
		
		$datetime1 = new DateTime($f_date);
		$datetime2 = new DateTime($t_date);
		$interval = $datetime1->diff($datetime2);
		$day=$interval->format('%a');
		$total_day=$day+1;
		if($total_day==0)
		{
			$total_day=1;
		}
		$sql=mysql_query("Select * from resorts where id='$resort_id'");
		$res=mysql_fetch_array($sql);
		$day_price=$res['price_day'];
		$total_price=$total_day*$day_price;
			
		echo '<p style="font-size: 12px;"><i class="fa fa-inr"></i> '.$day_price." per Day</p>";
		echo '<p><i class="fa fa-inr"></i> '.$total_price." ";
		echo '<input type="hidden" name="res_price_'.$div_id.'" id="res_price_'.$div_id.'" value="'.$total_price.'"></p>';
	}
	
	function cal_total_price()
	{
		$total_acc=0;
		if(isset($_POST['price']))
		{
			$price=$_POST['price'];
				if(!empty($price))
				{
					foreach($price as $pr)
					{
						if($pr!="")
						{
							$total_acc=$total_acc+$pr;
						}
						else
						{
						}
					}
				}
		}
		$bike_total=$_SESSION['total_bike_price'];
		
		$grand_total=$total_acc+$bike_total;
		echo $grand_total;
	}
	function resort_image_pop()
	{
		$resort_id=$_POST['id'];
		
		$sql=mysql_query("select ref_id from resorts where id='$resort_id'");
		$row=mysql_fetch_array($sql);
		$ref_id=$row['ref_id'];
		
		
		
    
		/*echo '<ol class="carousel-indicators">';
		$j=0;
		$qry=mysql_query("select * from images where ref_id='$ref_id'");
		while($res=mysql_fetch_array($qry))
		{
			if($j==0)
			{
				echo '
					<li data-target="#carousel-example-generic81001211" data-slide-to="0" class="active"></li>
				';	
			}
			else
			{
				echo '<li data-target="#carousel-example-generic81001211" data-slide-to="'.$j.'"></li>';
			}
			$j++;
		}
		echo '</ol>';*/
		
		echo '<div class="carousel-inner" role="listbox">';
		$i=1;
		$qry=mysql_query("select * from images where ref_id='$ref_id'");
		while($res=mysql_fetch_array($qry))
		{
			
			if($i==1)
			{
				echo '
					<div class="item active">
						<img src="admin/'.$res['path'].'" alt="resort">
							<div class="carousel-caption">
       
							</div>
					</div>
			';
			}
			else
			{
				echo '
					<div class="item">
						<img src="admin/'.$res['path'].'" alt="resort">
							<div class="carousel-caption">
       
							</div>
					</div>
			';
			}
			
			$i++;
		}
		echo '</div>';
		
	}
	
	
	
function check_login()
	{
		$u_name=$_POST['u_name'];
		$psd=md5($_POST['password']);
		
		$sql="SELECT * FROM users WHERE password='$psd' and ( email='$u_name' or phone='$u_name')";
		$query=mysql_query($sql) or die(mysql_error());
		$row_count=mysql_num_rows($query);
		if($row_count == 1)
		{
				$res=mysql_fetch_array($query);
				
				$u_id=$res['id'];
				$up=mysql_query("update users set status='1' where id='$u_id'");
				
				$_SESSION['user_id']=$res['id'];
				$_SESSION['name']=$res['username'];
				$_SESSION['phone']=$res['phone'];
				$_SESSION['email']=$res['email'];
				$_SESSION['user_login']="true";
			
				echo "success";
		}
		else
		{
				echo "failed";
		}
		
	}
	function signup()
	{
	$name=$_POST['u_name'];
	$password=$_POST['psd'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	
			
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
				
				$URL="http://roundsms.com/api/sendhttp.php?authkey=OTFmM2Y1ZDJkNDd&mobiles=".$mobl1."&message=".$msg_body_final."&sender=ZOPRNT&type=1&route=2";
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $URL);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_exec($ch);
				curl_close($ch);
				
			/*-----------SMS END---------------------*/
			
			echo 'success';
	}
	function resend_otp()
	{
		$phone=$_SESSION['phone'];
		$otp=mt_rand(100000,999999);
		$_SESSION['user_otp']=$otp;		
		
			/*----------SMS START----------------------*/
		
				$message="Dear ".$name."\n";
				$message .= "You are trying to register in Zoprent.\n";
				$message .= "Your OTP : ".$otp."\n";
				$msg=$message;
				$msg_body_final=urlencode($msg);
				
				$URL="http://roundsms.com/api/sendhttp.php?authkey=OTFmM2Y1ZDJkNDd&mobiles=".$mobl1."&message=".$msg_body_final."&sender=ZOPRNT&type=1&route=2";
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $URL);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_exec($ch);
				curl_close($ch);
				
			/*-----------SMS END---------------------*/
	}
	function check_otp()
	{
			$otp=$_POST['otp'];
			$user_otp=$_SESSION['user_otp'];
			
			if($otp==$user_otp)
			{
				$_SESSION['user_otp']=mt_rand(100000,999999);
				
					$name=$_SESSION['username'];		
					$password=$_SESSION['password'];		
					$email=$_SESSION['email'];		
					$phone=$_SESSION['phone'];	
					
					$date=date("Y-m-d");
					$encrypt_password=md5($password);
					$sql=mysql_query("INSERT INTO users (username,password,email,phone,status,date_register) 
								VALUES ('$name', '$encrypt_password', '$email', '$phone', '1', '$date')");
					if($sql)
					{
						$sql1=mysql_query("select * from users where email='$email'");
						$res=mysql_fetch_array($sql1);
						
						$_SESSION['user_id']=$res['id'];
						$_SESSION['name']=$res['username'];
						$_SESSION['phone']=$res['phone'];
						$_SESSION['email']=$res['email'];
						$_SESSION['user_login']="true";	
							
						echo 'success';
					}
			}
			else
			{
				echo 'failed';
			}
	}
	function check_email_available()
	{
		
		$email=$_POST['email'];
		$master_sources_query = "SELECT * FROM users where email='$email'"; //select query for viewing users.
		$run = mysql_query($master_sources_query); //here run the sql query.
		if(mysql_num_rows($run))
		{  
			
			$msg="true";
			echo $msg;
		} 
		else
		{
			$msg="false";
			echo $msg;
		}	
		
		exit(0);
	}
	function check_phone_available()
	{
		
		$phone=$_POST['phone'];
		$master_sources_query = "SELECT * FROM users where phone='$phone'"; //select query for viewing users.
		$run = mysql_query($master_sources_query); //here run the sql query.
		if(mysql_num_rows($run))
		{  
			
			$msg="true";
			echo $msg;
		} 
		else
		{
			$msg="false";
			echo $msg;
		}	
		
		exit(0);
	}
	
	function change_city()
	{
		$city=$_POST['city'];
		$_SESSION['city']=$city;
		$sql_city=mysql_query("select city_name from city where id=$city");
		$row_city=mysql_fetch_array($sql_city);
		$_SESSION['cityname']=$row_city['city_name'];
	}
		function change_citys()
	{   
		$city=$_POST['city'];//city id
		$_SESSION['city']=$city;//city id
		//session_regenerate_id(false);
		$sql_city=mysql_query("select city_name from city where id=$city");
		$row_city=mysql_fetch_array($sql_city);
		$_SESSION['cityname']=$row_city['city_name'];
		echo $row_city['city_name'];
	}
	
	function add_to_cart()
	{
		$sub_id=$_POST['sub_id'];
		$ven_id=$_POST['ven_id'];
		
		$day=$_SESSION['day'];
				$sql=mysql_query("select * from sub_category where id='$sub_id'");
				$row=mysql_fetch_array($sql);
				
				$pro_name=$row['name'];
				$image=$row['image'];
				
				$qry=mysql_query("select * from product_details where vendor_id='$ven_id' and sub_category='$sub_id'");
				$res=mysql_fetch_array($qry);
				$price=$res['oneday_price'];
				
				$total_price=$day*$price;
						
		$from_date=$_SESSION['db_f_date'];
		$to_date=$_SESSION['db_t_date'];
		
		$f_time=date("H:i:s", strtotime($_SESSION['from_time']));
		$t_time=date("H:i:s", strtotime($_SESSION['to_time']));
		
		
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
		
		
		$sql=mysql_query("INSERT INTO cart(user_id,vendor_id,sub_category,from_date,from_time,to_date,to_time,total_price) 
						VALUES ('$user_id', '$ven_id', '$sub_id', '$from_date', '$f_time', '$to_date', '$t_time', '$total_price')");	
	}
	function remove_cart()
	{
		
		$cart_id=$_POST['id'];
		
		$del=mysql_query("delete from cart where id='$cart_id'");
		
		
		$user_id=$_SESSION['user_id'];
						
						$sql1=mysql_query("select sum(total_price)'grand_total' from cart where user_id='$user_id'");
						$row1=mysql_fetch_array($sql1);
						$grand_total=$row1['grand_total'];
						
						$sql=mysql_query("select * from cart where user_id='$user_id'");
						$count=mysql_num_rows($sql);
				if($count>=1)
				{
						while($row=mysql_fetch_array($sql))
						{
							$cart_id=$row['id'];
							$ven_id=$row['vendor_id'];
							$sub_id=$row['sub_category'];
							$total_pro_price=$row['total_price'];
														
							$db_from_date=$row['from_date'];
							$db_to_date=$row['to_date'];
							$db_from_time=$row['from_time'];
							$db_to_time=$row['to_time'];
							
							$ch1=explode("-",$db_from_date);
							$from_date=$ch1[2]."-".$ch1[1]."-".$ch1[0];
							
							$ch2=explode("-",$db_to_date);
							$to_date=$ch2[2]."-".$ch2[1]."-".$ch2[0];
							
							
							$from_time=date("h:i:s a", strtotime($db_from_time));
							$to_time=date("h:i:s a", strtotime($db_to_time));
							
							
							$qry1=mysql_query("select name,image from sub_category where id='$sub_id'");
							$res1=mysql_fetch_array($qry1);
							$pro_name=$res1['name'];
							$pro_image=$res1['image'];
							
							$qry2=mysql_query("select vendor_name,vendor_location,vendor_city from vendor where id='$ven_id'");
							$res2=mysql_fetch_array($qry2);
							$ven_name=$res2['vendor_name'];
							$ven_loc=$res2['vendor_location'];
							$ven_city=$res2['vendor_city'];
							
							$qry3=mysql_query("select city_name from city where id='$ven_city'");
							$res3=mysql_fetch_array($qry3);
							$city_name=$res3['city_name'];
							
							$qry4=mysql_query("select * from product_details where vendor_id='$ven_id' and sub_category='$sub_id'");
							$res4=mysql_fetch_array($qry4);
							$price=$res4['oneday_price'];
							
							
							echo ' <tr>
                    <td class="text-center"><a href="#"><img width="200px" src="admin/'.$pro_image.'" alt="image" title="'.$pro_name.'" class="img-thumbnail" style="border:none;"/></a></td>
                     <td class="text-center">
					<h3 style="color: #004066;font-weight: bold;font-family: ab2;">'.$pro_name.'</h3>
					<p  style="font-size:14px;text-align:center;line-height:1.7 ;font-weight: bold;
                    font-family: ab2;""><i class="fa fa-map-marker" style="color:#004066;"></i>&nbsp;'.$ven_loc.','.$city_name.'</p>
						
					<p ><i class="fa fa-clock-o" style="color: #004066;font-size: 15px;"></i>&nbsp;
						'.$from_date.' '.$from_time.' To '.$to_date.' '.$to_time.'</p></td>
					
					
                    <td class="text-center" style="padding-top: 3%;">
					<b style="font-size: 14px;color: #004066;"><i class="fa fa-inr"></i> '.$price.'</b></td>
                    <td class="text-center" style="padding-top: 3%;">
					<b style="font-size: 16px;color: #004066;"><i class="fa fa-inr"></i> '.$total_pro_price.'</b>
					
					</td>
                    <td class="text-right" style="padding-top: 3%;text-align: center;">  
						<button type="button" class="btn btn-danger" id='.$cart_id.' onclick="remove_cart(this.id);" style="background:#a7a7a7;border:#a7a7a7;"><i class="fa fa-times-circle"></i></button></td>
                
                  </tr>';	
						}
						echo '<tr>
						<td colspan="3" class="text-right" style="text-transform: uppercase;">
									<b style="font-size: 14px;color: #004066;">Grand Total</b></td>
							<td colspan="2" class="text-center"><b style="font-size: 14px;color: #004066;"><i class="fa fa-inr"></i>. '.$grand_total.'</b></td>
						</tr>';
				}
				else
				{
					echo '<tr>
						<td colspan="5" class="text-center" style="text-transform: uppercase;">
									<b style="font-size: 16px;color: #004066;">Your Cart Is Empty</b></td><tr>';
				}
	}
	
	function change_location()
	{   
	    $weekday=strtolower(date("l"));
		$sub_id=$_POST['sub_id'];
		$user=$_POST['location_user'];
		$div_id=$_POST['div_id'];
		$day=$_SESSION['day'];
		$days=$_SESSION['days'];
		$city_id=$_SESSION['city'];

                $_SESSION['ven']=$user;
		
		$db_date_from=$_SESSION['db_f_date'];
		$db_date_to=$_SESSION['db_t_date'];
		
		$sql=mysql_query("select * from sub_category where id='$sub_id'");
		$row=mysql_fetch_array($sql);
		
		$image=$row['image'];
		$name=$row['name'];
		$description=$row['description'];
		                
						//if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
						$qry=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' and vendor_id='$user' order by oneday_price asc");
						//}
						//else{
						//$qry=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' and vendor_id='$user' order by oneday_price asc");
						//}
						$res=mysql_fetch_array($qry);
						$pro_id=$res['id'];
						$pricen=$res['oneday_price'];
						$pricew=$res['weekend'];
						$terms_conditions=$res['terms_conditions'];
						$sub_cate_count=mysql_num_rows($qry);
						if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
						$ven_day_price=$res['weekend'];
						}
						else{
						$ven_day_price=$res['oneday_price'];
						}
						$tots=$day-$days;
$price1=$tots*$pricew;
$price2=$days*$pricen;
$user_price=$price1+$price2;
						//$user_price=$day*$ven_day_price;
		
		
		
		echo '
													
										<div class="row">
												<div class="col-md-12 col-sm-12 col-xs-12 " style="padding-right:20px;">
												
											<div class="col-md-12" style="padding-top: 1%;font-family: ab2;">
													<div class="form-group ">
												<label for="input-payment-firstname" class="control-label" style="font-family: ab2;font-size: 16px;color: #004066;">Select the vendor</label>
																											
													<select class="form-control" id="loc_'.$sub_id.'_'.$pro_id.'"  name="location_user"  onchange="change_location(this.id);" 
													style="border: 1px solid #004066;font-family:ab2;width: 97%;">';
													//if($weekday=="friday"||$weekday=="saturday" || $weekday=="sunday"){
													$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' order by oneday_price asc");
													//}
													//else{
													//$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' order by oneday_price asc");
													//}
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
														//else{
														$ven_pricew=$res1['oneday_price'];
														//}
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
															
															if($user==$vendor_id)
															{
																echo '<option value="'.$vendor_id.'" selected>'.$ven_loc.'- Rs. '.$ven_total_price.' (Available)</option>';
															}
															else
															{
																echo '<option value="'.$vendor_id.'">'.$ven_loc.'- Rs. '.$ven_total_price.' (Available)</option>';
															}
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
																	
																		<h5 style="font-size: 15px;font-weight: bold;color: #004066;">Daily Price</h5>
																		<h5 style="font-size: 20px;font-weight: bold;"><i class="fa fa-inr"></i> '.$ven_day_price.' /day</h5>
																	</div>
																	<div class="col-md-6">
																		<h5 style="font-size: 15px;font-weight: bold;color: #004066;">Amount Payable</h5>
																		<h5 style="font-size: 20px;font-weight: bold;"><i class="fa fa-inr"></i> '.$user_price.'</h5>
																	</div>
																	<a href="#terms" target="_self" style="color: #004066;font-family:ab2;font-weight:bold;">
                                                        <input type="button" class="btn btn-info" style="    margin-top: 6%; border-radius: 4px;" value="Terms & Condition">
														</a>
														</div>
															</div>
														
													</div>
													';
													echo '~$*'.$terms_conditions;
													$_SESSION['totals']=$user_price;
	}
	function months_location()
	{
		$sub_id=$_POST['sub_id'];
		$user=$_POST['location_user'];
		$div_id=$_POST['div_id'];
		$day=$_SESSION['day'];
		$city_id=$_SESSION['city'];
		
		$db_date_from=$_SESSION['db_f_date'];
		$db_date_to=$_SESSION['db_t_date'];
		
		$sql=mysql_query("select * from sub_category where id='$sub_id'");
		$row=mysql_fetch_array($sql);
		
		$image=$row['image'];
		$name=$row['name'];
		$description=$row['description'];
						
						$qry=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' and vendor_id='$user' and monthly > 0");
						$res=mysql_fetch_array($qry);
						$pro_id=$res['id'];
						$terms_conditions=$res['terms_conditions'];
						$sub_cate_count=mysql_num_rows($qry);
						
						$ven_day_price=$res['monthly'];
						
						$user_price=$ven_day_price;
		
		
		
		echo '
													
										<div class="row">
										<div class="col-md-12 col-sm-12 col-xs-12 ">
												
											<div class="col-md-12" style="padding-top: 1%;font-family: ab2;">
											<div class="form-group ">
											<label for="input-payment-firstname" class="control-label" style="font-family: ab2;color: #606062;">Select the vendor</label>
																											
													<select class="form-control" id="loc_'.$sub_id.'_'.$pro_id.'"  name="location_user"  onchange="month_location(this.id);" 
													style="border: 1px solid #004066;font-family:ab2;width: 97%;">';
													
													$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' and monthly > 0");
													while($res1=mysql_fetch_array($qry1))
													{
														$day=$_SESSION['day'];
														$vendor_id=$res1['vendor_id'];
														$sub_id1=$res1['sub_category'];
														$qty=$res1['qty'];
														
												$sub_qry=mysql_query("select id from booking_details where (sub_category='$sub_id1' and vendor_id='$vendor_id')
													and ((from_date between '$db_date_from' and '$db_date_to') or (to_date between '$db_date_from' and '$db_date_to')) and status='Success'");
												
												$booked_count=mysql_num_rows($sub_qry);		
												
												$diff=$qty-$booked_count;
														
														$ven_price=$res1['monthly'];
														$qry2=mysql_query("select * from vendor where id='$vendor_id'");
														$res2=mysql_fetch_array($qry2);
														$ven_name=$res2['vendor_name'];
														$ven_loc=$res2['vendor_location'];
														$ven_total_price=$ven_price;
														if($diff>=1)
														{
															
															if($user==$vendor_id)
															{
																echo '<option value="'.$vendor_id.'" selected>'.$ven_loc.'- Rs. '.$ven_total_price.' (Available)</option>';
															}
															else
															{
																echo '<option value="'.$vendor_id.'">'.$ven_loc.'- Rs. '.$ven_total_price.' (Available)</option>';
															}
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
																		<h5 style="font-size: 15px;font-weight: bold;color: #004066;">Monthly Price</h5>
																		<h5 style="font-size: 20px;font-weight: bold;"><i class="fa fa-inr"></i> '.$ven_day_price.' / day</h5>
																	</div>
																	<div class="col-md-6">
																		<h5 style="font-size: 15px;font-weight: bold;color: #004066;">Amount Payable</h5>
																		<h5 style="font-size: 20px;font-weight: bold;"><i class="fa fa-inr"></i> '.$user_price.'</h5>
																	</div>
																	<a href="#terms" target="_self" style="color: #004066;font-family:ab2;font-weight:bold;">
                                                        <input type="button" class="btn btn-info" style="margin-top: 6%; border-radius: 4px;" value="Terms & Condition">
														</a>
														</div>
															</div>
														
													</div>
													';
													echo '~$*'.$terms_conditions;
	                        }
	
	function change_location_old()
	{
		$sub_id=$_POST['sub_id'];
		$user=$_POST['location_user'];
		$div_id=$_POST['div_id'];
		
		$day=$_SESSION['day'];

				$city_id=$_SESSION['city'];
					$sql=mysql_query("select * from sub_category where id='$sub_id'");
					$row=mysql_fetch_array($sql);
					
						$sub_id=$row['id'];
						$def_price=$row['oneday_price'];
						$img_path=$row['image'];
						$name=$row['name'];
						
						$qry=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' and vendor_id='$user' order by oneday_price asc");
						$res=mysql_fetch_array($qry);
						$pro_id=$res['id'];
						$terms_conditions=$res['terms_conditions'];
						$sub_cate_count=mysql_num_rows($qry);
						
						$ven_day_price=$res['oneday_price'];
						$user_price=$day*$ven_day_price;
						
						if($sub_cate_count>=1)
						{
							echo '<div class="col-md-12 " style="margin-top:2%;border: 2px solid #004066;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);margin-bottom:5%;border-radius: 3px;background:#efefef;">
								<div class="col-md-2">
									<center><img src="admin/'.$img_path.'" style="margin-top: 42%;"></center>
									<h3 style="text-align:center;color:#000;font-size:15px;font-family:ab2;">'.$name.'</h3>
								</div>
								<div class="col-md-6" style="padding-bottom:2%;margin-top:3%">
									<p style="background: #606062;padding: 8px;text-align: center;font-size: 13px;
    color: #fff;
    font-family: ab2;
    border-radius: 4px;">
									'.$_SESSION['from_date'].' '.$_SESSION['from_time'].' To '.$_SESSION['to_date'].' '.$_SESSION['to_time'].'</p>
									<p style="text-align: center;font-size: 14px;color: #004066;font-family: ab2;"><b>AVAILABLE</b></p>	
									</br>		
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-3">
											</div>
											<div class="col-md-4">
												<h5>Daily Prices</h5>
											</div>
											<div class="col-md-5">
												<h5>Rs. '.$user_price.' / day</h5>
											</div>
									
										</div>
									</div>
									<div class="col-md-3">
													<h3 style="border: 2px solid #004066;border-radius: 6px;padding: 5px;text-align: center;color:#969595;font-family: abc;font-size:15px;margin-top: 19%;">Located </h3>
									</div>
									<div class="col-md-1" style="padding-top:5%;">
										<span style="color:#000;font-family: abcfont-weight: 900;">At:</span>
									</div>
									<div class="col-md-8" style="padding-top: 3%;font-family: ab2;">
											<select class="form-control" id="loc_'.$sub_id.'_'.$div_id.'"  name="location_user"  onchange="change_location(this.id);" style="border: 1px solid #004066;font-family:ab2;">';
												 
											$qry1=mysql_query("select * from product_details where sub_category='$sub_id' and vendor_city='$city_id' order by oneday_price asc");
											while($res1=mysql_fetch_array($qry1))
											{
												$vendor_id=$res1['vendor_id'];
												$ven_price=$res1['oneday_price'];
												$qry2=mysql_query("select * from vendor where id='$vendor_id'");
												$res2=mysql_fetch_array($qry2);
												$ven_name=$res2['vendor_name'];
												$ven_loc=$res2['vendor_location'];
												$ven_total_price=$day*$ven_price;
												if($user==$vendor_id)
												{
													echo '<option value="'.$vendor_id.'" selected>'.$ven_loc.'- Rs. '.$ven_total_price.'</option>';
												}
												else
												{
													echo '<option value="'.$vendor_id.'">'.$ven_loc.'- Rs. '.$ven_total_price.'</option>';
												}
												
											}												
												  
											echo'</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row" style="padding-top:4%">
										<div class="col-md-12">
											<div >
												<h3 style="text-align:center;font-size:19px;color:#000;font-family: ab2;font-weight: 900;"> Amount Payable &nbsp;</h3><h3 style="text-align:center;font-size:45px;color:#000;font-family: ab2;font-weight: 900;"><i class="fa fa-inr" style="color:#004066;"></i>
													'.$user_price.'</h3>
											</div>
										</div>						
									</div>';
								echo '
									
								<div class="row" style="padding-top:4%">
								<div class="col-md-12">
								<div class="col-md-6" style="padding-top:2%">
								
								<div>
								<h3 style="text-align:center;font-size:11px;color:#fff;font-family: ab2; border: 1px solid #004066 ;background: #004066;padding: 5px 0px 11px 0px;
    border-radius: 4px; ">
								<a  href="#modal'.$div_id.'" data-remodal-target="modal'.$div_id.'" style="color:#fff;font-size:13px;">
		 
						 Conditions </a></h3>
								 
								</div>
								</div>
								
								<div class="col-md-6 col-sm-12"   style="padding-top:9%;margin-bottom: 3%;">
								<div style="">
								<a href=booking.php?sub='.base64_encode($sub_id).'&ven='.base64_encode($user).'><input type="button" value="Book Now" style="text-align:center;font-size:12px;color:#fff;font-family: ab2;border: 1px solid #606062;background: #606062;padding:7%;border-radius: 6px;width:100%;padding: 6px 4px 6px 5px;"></a>
								 
								
								</div>
								</div>
								</div>
								
								
								</div>
								</div>
								</div>';
								echo '*********';
								
								echo '<p style="text-align:justify;fon-family:ab2;">
									'.$terms_conditions.'
									</p>';
						}		
	}
	
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
	
	function change_date()
	{
		$from_date=$_POST['from_date'];
		$to_date=$_POST['to_date'];
                $from_time=$_POST['from_time'];
                $to_time=$_POST['to_time'];
		
		
		$result1=explode("-",$from_date);
		$db_from_date=$result1[2]."-".$result1[1]."-".$result1[0];
		
		$result2=explode("-",$to_date);
		$db_to_date=$result2[2]."-".$result2[1]."-".$result2[0];
		
		
		$_SESSION['from_time']=$from_time;
                 
		$_SESSION['to_time']=$to_time;
		
		$_SESSION['from_date']=$from_date;
		$_SESSION['db_f_date']=$db_from_date;
		
		$_SESSION['to_date']=$to_date;
		$_SESSION['db_t_date']=$db_to_date;
				
		$datetime1 = new DateTime($db_from_date);
		$datetime2 = new DateTime($db_to_date);
		$interval = $datetime1->diff($datetime2);
		$day=$interval->format('%a');
		$total_day=$day+1;
		if($total_day==0)
		{
			$total_day=1;
		}
		if(($_SESSION['city']==1)&&($total_day>=2))
		{
		 $total_day--;
		}
		$_SESSION['day']=$total_day;
		
		 $startDate=$from_date;
$endDate=$to_date;
$week_days=getWorkingDays($startDate, $endDate);
$_SESSION['days']=$week_days;
			
	}
	function changes_date()
	{
		$from_date=$_POST['from_date'];
		$to_date=$_POST['to_date'];
		
		
		$result1=explode("-",$from_date);
		$db_from_date=$result1[2]."-".$result1[1]."-".$result1[0];
		
		$result2=explode("-",$to_date);
		$db_to_date=$result2[2]."-".$result2[1]."-".$result2[0];
		
		
		if($from_date==$to_date)
		{
			$to_date = date('d-m-Y', strtotime($to_date . " +1 month"));
			$db_to_date = date('Y-m-d', strtotime($db_to_date . " +1 month"));
		}
		
		
		
		$_SESSION['from_date']=$from_date;
		$_SESSION['db_f_date']=$db_from_date;
		
		$_SESSION['to_date']=$to_date;
		$_SESSION['db_t_date']=$db_to_date;
				
		$datetime1 = new DateTime($db_from_date);
		$datetime2 = new DateTime($db_to_date);
		$interval = $datetime1->diff($datetime2);
		$day=$interval->format('%m');
		$total_day=$day;
		if($total_day==0)
		{
			$total_day=1;
		}
		if(($_SESSION['city']==1)&&($total_day>=2))
		{
		 $total_day--;
		}
		$_SESSION['day']=$total_day;
			
	}
?>