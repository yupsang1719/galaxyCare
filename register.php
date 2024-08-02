<?php include_once"header.php"?>
  <!-- Breadcroumbs start -->
  <div class="wshipping-content-block wshipping-breadcroumb inner-bg-1">
    <div class="container">
      <div class="row">
         <div class="col-12 col-lg-7">
            <h1>Registration</h1>
            <a href="index.php" title="Home">Home</a> / Registration
         </div>
         <div class="col-12 col-lg-5 text-right"><h4>Galaxy Staffing  <br>We Pride in <span>Excellent Care </span> </h4></div>
      </div>
    </div>
  </div>
  <!-- Breadcroumbs end -->
  
  <!-- Contact Section Start -->
  <div class="wshipping-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
         <div class="col-12 col-lg-7">
            <div class="contact-form">
               <h3 class="heading3-border text-uppercase">Registration Form</h3>
               <form action="" method="POST">
                  <div class="form-group">
                     <div class="row">
                       <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Name" name="rname" required>
                       </div> 
                       <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Contact No" name="contact" required>
                       </div> 
                     </div>   
                   </div>
                   <div class="form-group">
                     <div class="row">
                       <div class="col-12 col-lg-6">
                        <input type="email" class="form-control" placeholder="E-mail" name="eemail" required>
                       </div>
                       <div class="col-12 col-lg-6">  
                        <input type="text" class="form-control" placeholder="City" name="city">
                       </div>  
                     </div>   
                   </div><div class="form-group">
                     <div class="row">
                       <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Address" name="address" required>
                       </div>
                       <div class="col-12 col-lg-6">  
                        <input type="text" class="form-control" placeholder="Age" name="age">
                       </div>  
                     </div>   
                   </div>
				   
                   <div class="form-group">
                     <!--<textarea class="form-control" placeholder="Message" name="message"></textarea>-->
                     <input type="text" class="form-control" placeholder="Message" name="message">
                   </div>
                 <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6LcVZrkgAAAAAEXZmQD-wHkiHN7LcmU24mSU4wTJ"  style="transform:scale(0.89);-webkit-transform:scale(0.89);transform-origin:0 0;-webkit-transform-origin:0 0;"> </div>
                </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-submit" name="contact">Register Now!</button>
                    </div>
                </form>
             </div>  
         </div>
        <script src='https://www.google.com/recaptcha/api.js'></script>
   <?php
 if (isset($_POST['rname']) && (!empty($_POST['rname'])))
{
	$name = $_POST['rname'];
    $city = $_POST['city'];
    $age = $_POST['age'];
	$phone = $_POST['contact'];
	$email = $_POST['eemail'];
	$address = $_POST['address'];
	$message2= $_POST['message'];	
   
	 $headers ='From:'.$email ;
	 //$to      = "mainuddin.swadesh@gmail.com"; 
     $to      = "admin@galaxystaffing.co.uk"; 
	 $subject = "REGISTRATION FORM Email from Galaxy Staffing";
	// $txt="name:";
	// $message .=$phone;
	 $message ="Name :- " .$name."\n\n"."City :- ".$city."\n\n"."Age :- ".$age."\n\n"."Email :- ".$email."\n\n"."Phone No :- ".$phone."\n\n"."Address :- ".$address."\n\n"."Message :- ".$message2;
	 mail($to, $subject, $message, $headers);
	 
 echo "<script>alert('Thank you for registration. We will get back to you soon!');</script>";
}
?>
         <div class="col-12 col-lg-5">
              <div class="contact-text"><br><br>
              <img src="assets/images/rn.jpg" alt=""/>
               </div>
         </div>
      </div>
    </div>
  </div>
  <!-- Contact Section end --> 
  <!-- Footer start -->
 <?php include_once"footer.php"?>