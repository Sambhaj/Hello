<?php
include('config.php');
?>



<?php
$req="";
$blank="";

	
if(isset($_POST['submit'])) {
	
// declare all variable

$name=$_POST['name'];

$Mobile=$_POST['mobile_no'];

$email=$_POST['email'];

$inquiry=$_POST['inquiry'];
{
	
	mysql_query("INSERT INTO  tb_contact(name,email,mobile_no,inquiry,website_name) VALUES('$name','$email','$Mobile','$inquiry','vailax')");
	
	echo"<script>alert('Message Send Successfully.We will contact you soon');</script>";
} 
}
else {
			 $req="";
	 $msg="Please Fill In All Mandatory Fields!";
			}



?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VAILAX</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
	<link rel="shortcut icon" type="image/png" href="images/icon/logo.png"  width="16" height="16">
<script> function mobval()
{
     var txt1=document.getElementById('mobile_no');
     var lnth=txt1.value.length;
     var digits=/^([0-9]{10})$/;
     var txtvalue=document.getElementById('mobile_no').value;
         var digitsArray = txtvalue.match(digits);
         if(digitsArray == null)
         {
    	   alert("Please enter 10 digit mobile number.");
         txt1.value="";
         return false;
         }
         else
         {
               return true;
         }
}</script>
    
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<img src="images/icon/logo1.png" style="height:60px">
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html">Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>								
								<li role="presentation"><a href="contact.html" class="active">Contact Us</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li>Contact Us</li>			
			</div>		
		</div>	
	</div>
	
	<!-- <div class="map">
		<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
	</div> -->
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
               
               
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-12 ">
                    
                    <div id="errormessage"></div>
                                          
                </div>
				
				
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
	
	
	<div>
	<div class="gmap-area"  >
            <div class="container">
                <div class="row">
                  <div class="col-sm-6 map-content" style="color:#000000">
				  <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drop Your Message</h3><br>
                          <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="">
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mobile no </label>
                            <input type="text"  id="mobile_no" name="mobile_no" class="form-control"  onblur="mobval();" required="required">
                        </div>
                         <div class="form-group" >
                            <label>Inquiry </label>
                            <input type="text" name="inquiry" class="form-control" required="required">
                        </div>  
						<div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                    
                </form>
                                
                            </li>
                            


                          
                        </ul>
                    </div>
					 <div class="col-sm-6 " style="color:#000000">
					 <h3>Contact Info</h3>
					 &nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i><span style="padding:12px">706, Sarvodaya Galaxy,</br>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Kopar, Dombivli [W], </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thane 421202.</span></br></br>
					 <div style="background-image:url(images/map.jpg);"><br>
                        <div class="gmap" class="col-sm-3 text-center">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.6060867778783!2d73.07613816445108!3d19.212399937009867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7be248e67b74d%3A0xea284f206eff78d1!2sSarvoday+Galaxy%2C+Kopar+Gaon+Rd%2C+Shivaji+Nagar%2C+Kopargaon%2C+Dombivli+West%2C+Dombivli%2C+Maharashtra+421202!5e0!3m2!1sen!2sin!4v1495457087403" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> 
						 
						 </div><br>
						 </div>
						 <br>
                               
                                   
                                    
                                   
                               
                                
                            
                    </div>
                </div>
            </div>
        </div>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						
                        <div class="credits">
                            
                           Copyright © 2017 | Powered By <a href="http://sednainfosystems.com/">&nbsp;&nbsp;Sedna</a>
                        </div>
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>