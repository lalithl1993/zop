<?php 
include 'admin/config.php';
?>
<style>

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 4px;
    font-size: 6px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #222222;
    min-width: 300px;
    box-shadow: 0px 20px 30px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #8a8a8a;
    padding: 4px 6px;
    text-decoration: none;
    display: inline;
}

.dropdown-content a:hover {background-color: #222222}

.dropdown:hover .dropdown-content {
    display: inline;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.img-circle {


    border-radius: 50%;
}

</style>


		<footer class="footer-container typefooter-1" style="margin-top:0%;">
        <!-- Footer Top -->

        <!-- Footer Center -->
        <div class="footer-center">
            <div class="container content">
                <div class="row">
                    <!-- Box Info -->
                   
                    <!-- Box Accout -->
					 <div class="col-md-6 col-sm-6 box-information box-footer">
                        <div class="module clearfix">
                            <h3 class="modtitle">Our Popular Locations</h3>
                         <div class="content-title"  style="text-align:justify;line-height: 2;
    font-family: ab3;"> <span><a href="products.php?id=Bikes&first=1&uid=Bangalore" class="ng-binding">Bike Rentals in Bangalore</a>
		 <span >&nbsp;|&nbsp;</span></span><span ><a href="products.php?id=Bikes&first=1&uid=Goa" class="ng-binding">Bike On Rent in Goa</a>
		 <span>&nbsp;|&nbsp;</span></span><span ><a href="products.php?id=Bikes&first=1&uid=Bangalore" class="ng-binding">Hire Bike in BTM</a>
		 <span>&nbsp;|&nbsp;</span></span><span ><a href="products.php?id=ZopRent%20Stay&first=4&uid=Mysore" class="ng-binding">Hotel in Mysore</a>
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Bangalore" class="ng-binding">Motorcycle On Rent in Lalbagh</a><span >&nbsp;|&nbsp;</span>
		 </span><span  class="ng-scope">
		 <a href="products.php?id=Bikes&first=1&uid=Goa" class="ng-binding">Two Wheeler On Rent in Bagha Beach</a>
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Pondicherry" class="ng-binding">Self Drive car Rentals in Pondicherry</a><span >
		 &nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Mumbai" class="ng-binding">Bike On Rent in Mumbai</a><span >
		 &nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Pune" class="ng-binding">Hire Cars in Pune</a><span >&nbsp;|&nbsp;</span>
		 </span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Bangalore" class="ng-binding">Cars On Rent in RT Nagar</a><span >
		 &nbsp;|&nbsp;</span></span><span  class="ng-scope">
		 <a href="products.php?id=Bikes&first=1&uid=Goa" class="ng-binding">Two Wheeler On Rent in Margoa</a><span >&nbsp;|&nbsp;</span>
		 </span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1F1&uid=Goa" class="ng-binding">Bike Rentals in Colva Beach</a><span >
		 &nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Goa" class="ng-binding">Bike On Rent in Goa</a>
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Bangalore" class="ng-binding">Hire Bike in Hebbal</a>
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=ZopRent%20Stay&first=4&uid=Goa" class="ng-binding">Hotels in Goa</a>
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Shimla" class="ng-binding">Self Drive Cars on rent in Manali</a>
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Bangalore" class="ng-binding">Two Wheeler On Rent in HSR Layout</a>
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Ooty" class="ng-binding">Bike Rentals in Ooty</a>
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=ZopRent%20Stay&first=4&uid=Pondicherry" class="ng-binding">Hotels in Pondicherry</a><span >
		 
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Pondicherry" class="ng-binding">Bike On Rent in Pondicherry</a><span >
		 &nbsp;|&nbsp;</span></span>
		 <span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Delhi" class="ng-binding">Hire Bike in Delhi</a><span >
		 &nbsp;|&nbsp;<a href="products.php?id=Cars&first=3&uid=Bangalore" class="ng-binding">Hire Self Driven Car in Bangalore</a><span >
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Hyderabad" class="ng-binding">Bike On Rent in Hyderabad</a><span >
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Goa" class="ng-binding">Self Driven Car On Rent in Goa</a><span >
		 <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Hyderabad" class="ng-binding">Hire Scooty in Hyderabad</a><span >
		  <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Goa" class="ng-binding">Scooty On Rent in Goa</a><span >
		  <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Pondicherry" class="ng-binding">Scooty On Rent in Pondicherry</a><span >
		  <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Manali" class="ng-binding">Cars Rent in Manali</a><span >
		   <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Bangalore" class="ng-binding">Self Driven Cars Rent in BTM</a><span >
		    <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Mysore" class="ng-binding">Scooty Rent in Mysore</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Ooty" class="ng-binding">Scooty Rent in Ooty</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=ZopRent%20Stay&first=4&uid=Ooty" class="ng-binding">Stay in Ooty</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=id=id=Bikes&first=1&uid=Haridwar" class="ng-binding">Motorbike Rental in Haridwar</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=id=Bikes&first=1&uid=Ladakh" class="ng-binding">Rent bike in Ladakh</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Mumbai" class="ng-binding">Self Driven Cars Rent in Mumbai</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Hyderabad" class="ng-binding">Self Driven Cars in Hyderabad</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Mumbai" class="ng-binding">Scooty Rent in Mumbai</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Pune" class="ng-binding">Scooty Rent in Pune</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Udaipur" class="ng-binding">Motorcycle hire in Udaipur</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=ZopRent%20Stay&first=4&uid=Goa" class="ng-binding">Stay in Goa</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=ZopRent%20Stay&first=4&uid=Pondicherry" class="ng-binding">Stay in Pondicherry</a><span >
             <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Chandigarh" class="ng-binding">Car Rent in Chandigarh</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Chandigarh" class="ng-binding">Gear Bike Rent in Chandigarh</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Andaman" class="ng-binding">Hire Self Drive cars in Andaman</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Andaman" class="ng-binding">Scooty Rent in Andaman</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Delhi" class="ng-binding">Self Driven Cars Rent in Delhi</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Goa" class="ng-binding">Self Driven Cars Rent at Goa Airport</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Shimla" class="ng-binding">Cars on Rent in Shimla </a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Dehra dun" class="ng-binding">Motorbike Rent in Dehradun</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Ahmedabad" class="ng-binding">Scooty Rent in Ahmedabad</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Bangalore" class="ng-binding">Cars on Rent at Bangalore Airport</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Ahmedabad" class="ng-binding"> Rent Cars in Ahmedabad</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Manali" class="ng-binding">Rent bike in Manali</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Jaipur" class="ng-binding">Hire Self Drive Cars in Jaipur</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Rishikesh" class="ng-binding">Rent bike in Rishikesh</a><span >
			<span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Cars&first=3&uid=Bangalore" class="ng-binding">Self Driven Cars Rent at Airport</a><span >
		   <span >&nbsp;|&nbsp;</span></span><span  class="ng-scope"><a href="products.php?id=Bikes&first=1&uid=Agra" class="ng-binding">Bike Rent in Agra</a><span >
			
				 
		 </span>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-2 col-sm-6 box-information box-footer">
                        <div class="module clearfix">
                            <h3 class="modtitle">Quick Links</h3>
                            <div class="modcontent">
                                <ul class="menu">
								     <li><a href="termsconditions.php">Terms And Conditions</a></li>
                                    <li><a href="privacypolicies.php">Privacy Policies</a></li>
                                     <li><a href="contact.php">Reach Us</a></li>
									 <li><a href="cancelpolicy.php">Cancellation Policy</a></li>
                                    <li><a href="about.php">About Us</a></li>
									 <li><a href="products.php?id=Bikes&first=1&uid=Bangalore">Bikes</a></li> 
									 <li><a href="products.php?id=Cars&first=3&uid=Bangalore">Cars</a></li>  
									 <li><a href="products.php?id=%2FZopRent+Stay%2F4&uid=Bangalore">ZopRent Stay</a></li>
									 <li><a href="career.php">Careers</a></li>
									 <li><a href="blog" target="_blank">Blog</a></li>
									 <li><a href="sitemap.html">Sitemap</a></li>
									 </ul>

					            
                            </div>
                        </div>
                    </div>
                    <!-- Box Infomation -->
                  
                    <!-- Box About -->
                    <div class="col-md-4  col-sm-12 collapsed-block box-footer">
                        <div class="module ">
                            <h3 class="modtitle">Contact Us</h3>
                            <div class="modcontent">
                                <ul class="contact-address">
                                    <li><span class="fa fa-home"></span> 579, 10th B Main Rd, 4th T Block East, Jayanagar, Bengaluru, Karnataka 560011</li>
                                    <li><span class="fa fa-envelope"></span> Email: <a href="mailto:info@zoprent.com">  info@zoprent.com</a></li>
                                    <li><span class="fa fa-phone">&nbsp;</span> <a href="tel:+91-7338295909">Phone : +91-7338295909/7338295808</a></li>
                                </ul>
                                <ul class="payment-method">
                                    <li>
                                        <a title="Payment Method" href="#"><img src="image/demo/cms/payment/payment-1.png" alt="Payment"></a>
                                    </li>
                                    
                                    <li>
                                        <a title="Payment Method" href="#"><img src="image/demo/cms/payment/payment-3.png" alt="Payment"></a>
                                    </li>
                                    
                                </ul>
								<ul class="payment-method">
                                   
									 <li><a href="https://www.facebook.com/zoprent/"  target="_blank"><img  src="assets/facbk.png"></a></li>
            
           &nbsp;&nbsp;&nbsp;&nbsp; <li><a href="https://www.linkedin.com/in/zoprent-com-4a607b141/"  target="_blank"><img  src="assets/linkin.png"></a></li>
		    &nbsp;&nbsp;&nbsp;&nbsp; <li><a href="https://twitter.com/zop_rentcom"  target="_blank"><img  src="assets/twitt.png"></a></li>
			 &nbsp;&nbsp;&nbsp;&nbsp; <li><a href="https://plus.google.com/u/0/103868915637686020587"  target="_blank"><img  src="assets/googl.png"></a></li>
          
                                    
                                </ul>
								<ul class="payment-method">
                                   
									 <li><a href="https://goo.gl/nwGM7D"  target="_blank"><img  src="assets/googleplay.png" style="margin-left:-20px;"></a></li>
            
           
          
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER BOTTOM -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="color: #fff;
    font-weight: 500;
    text-align: center;">
                          ZopRent &nbsp;<i class="fa fa-copyright" style="color:#fff;" aria-hidden="true"></i>&nbsp;2018 All Rights Reserved.

                    </div>
                    <div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
                </div>
            </div>
        </div>
    </footer>