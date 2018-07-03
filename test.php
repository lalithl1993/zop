<?php
date_default_timezone_set('Asia/Calcutta');
include("admin/config.php");
$weekday='friday';
$qry=mysql_query("select * from product_details where sub_category='18' and vendor_city='1' and vendor_id='15' order by oneday_price asc");
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
						echo $ven_day_price;
?>