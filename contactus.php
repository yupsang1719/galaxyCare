<?php include_once"header.php"?>
  <!-- Breadcroumbs start -->
  <div class="wshipping-content-block wshipping-breadcroumb inner-bg-1">
    <div class="container">
      <div class="row">
         <div class="col-12 col-lg-7">
            <h1>Contact Us</h1>
            <a href="index.php" title="Home">Home</a> / Contact Us
         </div>
         <div class="col-12 col-lg-5 text-right"><h4>Galaxy Care Staffing  <br>We Pride in <span>Excellent Care </span> </h4></div>
      </div>
    </div>
  </div>
  <!-- Breadcroumbs end -->
  
  <!-- Contact Section Start -->
  <div class="wshipping-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
         <div class="col-12 col-lg-4">
            <div class="address">
               <h3>Corporate Office</h3>
               <div class="address-block">
                  <ul>
                    <li class="address-icon"><strong>Adderss:</strong><br>14-40 Victoria road, Aldershot, Hampshire, GU11 1TQ</li>
                    <li class="phone-icon"><strong>Contact No:</strong><br> 01483 374094</li>
                    <li class="email-icon"><strong>Email:</strong><br><a href="mailto:admin@galaxystaffing.co.uk" title="">admin@galaxystaffing.co.uk</a></li>
                  </ul>
               </div>
            </div>
            
         </div>
         <div class="col-12 col-lg-8">
            <div class="contact-form">
               <h3 class="heading3-border text-uppercase">Contact Us</h3>                
               <form action="" method="POST">
                  <div class="form-group">
                     <div class="row">
                       <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Name" name="fname" required>
                       </div> 
                       <div class="col-12 col-lg-6">
  <select class="form-control" name="squery" required>
    <option value="0">Select Query :</option>
    <option value="1">General</option>
    <option value="2">Booking Staff</option>
    <option value="3">Employee Registration</option>
    <option value="4">Supplier</option>
    <option value="5">Other</option>
  </select>
                       </div> 
                     </div>   
                   </div>
                   <div class="form-group">
                     <div class="row">
                       <div class="col-12 col-lg-6">
                        <input type="email" class="form-control" placeholder="E-mail" name="eemail" required>
                       </div>
                       <div class="col-12 col-lg-6">  
                        <input type="text" class="form-control" placeholder="Contact Number" name="contact" required>
                       </div>  
                     </div>   
                   </div><div class="form-group">
                     <div class="row">
                       <div class="col-12">
                        <input type="text" class="form-control" placeholder="Address" name="address" required>
                       </div>
                     </div>   
                   </div>
				   
                   <div class="form-group">
                        <textarea class="form-control" placeholder="Message" name="message"></textarea>
                   </div>
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6LcVZrkgAAAAAEXZmQD-wHkiHN7LcmU24mSU4wTJ"  style="transform:scale(0.89);-webkit-transform:scale(0.89);transform-origin:0 0;-webkit-transform-origin:0 0;"> </div>
                </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-submit" name="contact">Submit</button>
                    </div>
                </form>
             </div>  
         </div>
      </div>
    </div>
  </div>
<script src='https://www.google.com/recaptcha/api.js'></script>
   <?php
 if (isset($_POST['fname']) && (!empty($_POST['fname'])))
{
	$name = $_POST['fname'];
    $squery = $_POST['squery'];
	$phone = $_POST['contact'];
	$email = $_POST['eemail'];
	$address = $_POST['address'];
	$message2= $_POST['message'];	
   
	 $headers ='From:'.$email ;
	 //$to      = "mainuddin.swadesh@gmail.com"; 
     $to      = "admin@galaxystaffing.co.uk"; 
	 $subject = "CONTACT US Email from Galaxy Care Staffing";
	// $txt="name:";
	// $message .=$phone;
	 $message ="Name :- " .$name."\n\n"."Email :- ".$email."\n\n"."Query :- ".$squery."\n\n"."Phone No :- ".$phone."\n\n"."Address :- ".$address."\n\n"."Message :- ".$message2;
	 mail($to, $subject, $message, $headers);
	 
 echo "<script>alert('Thank you for contacting us. We will get back to you soon!');</script>";
}
?>
  <!-- Contact Section end -->  
  <!-- Map start --> 
  <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2496.928960259962!2d-0.7714212847019398!3d51.25721733678623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48742ca1113babef%3A0x75a5d6aaa0d74aee!2s10%20Frost%20Dr%2C%20Aldershot%20GU11%204DE%2C%20UK!5e0!3m2!1sen!2sin!4v1655905325570!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div> 
  <!-- Map end -->
  <!-- Footer start -->
 <?php include_once"footer.php"?>