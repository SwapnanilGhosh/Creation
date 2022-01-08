<?php
//ini_set('SMTP','127.0.0.1'); 
//ini_set('smtp_port', 25); 
//ini_set('sendmail_from', 'ajad1111@gmail.com');
function Send_HTML_Mail($mail_To, $mail_From, $mail_CC, $mail_subject, $mail_Body)
{
	
	
	$mail_Headers  = "MIME-Version: 1.0\r\n";
	$mail_Headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$mail_Headers .= "To: ${mail_To}\r\n";
	$mail_Headers .= "From: ${mail_From}\r\n";
	header("Location: thanks.html");
	if($mail_CC != '')
	{
		$mail_Headers .= "Cc: ${mail_CC}\r\n";
	}
	if(mail($mail_To, $mail_subject, $mail_Body, $mail_Headers))
	{
		return true;
	}
	else
	{
		return false;
	}
}


if(isset($_POST['submit']))
	{
		    
			$mail_to = "swapnanil2002@gmail.com";
			$mail_subject="Enquiry For CREATION ";
			//$name = $_POST['name'];
			$mailcc="";
			$mail_from = $_POST['email'];
			//$phone= $_POST['phone'];
			//$message = $_POST['message'];
	

			$baseurl=$_SERVER['SERVER_NAME'];
			$mailBody = '<html><head><meta http-equiv="Content-Language" content="en-us"><meta name="GENERATOR" content="Microsoft FrontPage 5.0"><meta name="ProgId" content="FrontPage.Editor.Document"><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>Student Details</title></head><body>';
$mailBody.='<table width="300" border="0" align="center" style="border:1px solid #666; border-collapse:collapse;">
  <tr>
    <td width="300" colspan="2" style="background:#2da036; height:42px; border-bottom:1px solid #666; text-align:center; color:#FFF; font:bold 12px/normal Arial, Helvetica, sans-serif;">Mail From '.$baseurl.'</td>
  </tr>
  <tr>
    <td width="150" align="left" valign="top" style="background:#b2def7; border-right:1px solid #666; border-bottom:1px solid #666; color:#000; font:normal 13px/23px Arial, Helvetica, sans-serif; padding-left:10px;">Name</td>
    <td width="150" align="left" valign="top" style="background:#FFF; border-bottom:1px solid #666;color:#000; font:normal 13px/23px Arial, Helvetica, sans-serif; padding-left:10px;">'.strtoupper($_POST['name']).'</td>
  
  </tr>
 
  <tr>
  <td width="150" align="left" valign="top" style="background:#b2def7; border-right:1px solid #666; border-bottom:1px solid #666; color:#000; font:normal 13px/23px Arial, Helvetica, sans-serif; padding-left:10px;">E-mail</td>
    <td width="150" align="left" valign="top" style="background:#FFF; border-bottom:1px solid #666;color:#000; font:normal 13px/23px Arial, Helvetica, sans-serif; padding-left:10px;">'.$_POST['email'].'</td>

  </tr>
  
  <tr>
  <td width="150" align="left" valign="top" style="background:#b2def7; border-right:1px solid #666; border-bottom:1px solid #666; color:#000; font:normal 13px/23px Arial, Helvetica, sans-serif; padding-left:10px;">Telephone</td>
    <td width="150" align="left" valign="top" style="background:#FFF; border-bottom:1px solid #666;color:#000; font:normal 13px/23px Arial, Helvetica, sans-serif; padding-left:10px;">'.$_POST['mobile'].'</td>

  </tr>
  <tr>
  <td width="150" align="left" valign="top" style="background:#b2def7; border-right:1px solid #666; border-bottom:1px solid #666; color:#000; font:normal 13px/23px Arial, Helvetica, sans-serif; padding-left:10px;">Message</td>
    <td width="150" align="left" valign="top" style="background:#FFF; border-bottom:1px solid #666;color:#000; font:normal 13px/23px Arial, Helvetica, sans-serif; padding-left:10px;">'.$_POST['message'].'</td>

  </tr>
  
		
				
							</table>';
		


			$mailBody.='</body></html>';
			
			//echo $mailBody."<br/>";
			//echo  "Mail From :".$mail_from."<br/>";
			//echo "Mail Subject :".$mail_subject."<br/>";
			//echo "Mail CC :".($mailcc)."<br>";
			//echo "Mail To :".$mail_to."<br/>";
			Send_HTML_Mail($mail_to, $mail_from, $mailcc, $mail_subject, $mailBody);
			//echo "<meta http-equiv=refresh content=\"0; URL=prospectus_rec_entry.php?msg=1\">";
			
			//header('location:prospectus_rec_entry.php?msg=1');
			
			
			
			
	}
	

	
?>


<!DOCTYPE html>
<html>


<!-- Mirrored from clients.rkwebsolutions.com/guardian/commercial.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2015 14:25:13 GMT -->
<head>

<!-- COMMON META TAG -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kanai Lall Ghosh Co Pvt. Ltd :: Nuts, Bolts, Washers Suppliers in kolkata</title>

<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">

<!-- RESPONSIVE CSS -->
<link rel="stylesheet" href="css/responsive.css" type="text/css">

<!-- WEBSITE CSS -->
<link rel="stylesheet" href="css/website.min.css" type="text/css">

</head>

<body>
 <form id="Form1" action="" method="post">

<!-- getaquote -->
<div class="getaquote">
	<span class="glyphicon glyphicon-envelope"></span><a class="getaquote_btn" href="contact.html" title="Get an Estimate">Get an Estimate</a>
</div>
<!-- getaquote -->

<!-- scrollup -->
<a class="scrollup" href="#" title="Navigate To Top"></a>
<!-- scrollup -->

<!-- wraper_header -->
<header class="wraper_header">
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!-- header -->
				<div class="header">
					<!-- logo -->
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""></a>
					</div>
					<!-- logo -->
					<!-- res_nav -->
					<div class="res_nav"><span class="glyphicon glyphicon-menu-hamburger"></span></div>
					<!-- res_nav -->
					<!-- nav -->
					<nav class="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="#">Products</a>
								<ul>
									<li><a href="bolts.html">Bolts</a>
									<ul>
									<li><a href="bolts.html">Hexagon Bolts</a></li>
									<li><a href="bolts.html">Carriage Bolts</a></li>
									<li><a href="bolts.html">Countersunk Bolts</a></li>
									<li><a href="bolts.html">High Tensile Bolts</a></li>
									
								</ul></li>
									<li><a href="sds.html">Self Drilling Screws</a></li>
									<li><a href="anchor.html">Anchor Bolts</a>
									<ul>
									<li><a href="anchor.html">Anchor Bolts (M.S)</a></li>
									<li><a href="anchor.html">Anchor Bolts (H.T)</a></li>
									<li><a href="anchor.html">Foundation Bolts</a></li>
								    </ul>
									</li>
									<li><a href="rivets.html">Rivets</a></li>
									<li><a href="af.html">Anchor Fasteners</a></li>
									<li><a href="rb.html">Roofing Bolts</a>
									<ul>
									<li><a href="rb.html">Roofing Bolts (M.S)</a></li>
									<li><a href="rb.html">Roofing Bolts (S.S)</a></li>
									<li><a href="rb.html">Aluminium Bolts</a></li>
								    </ul>
									</li>
									<li><a href="jlphooks.html">J, L &amp; P Hooks</a>
									<ul>
									<li><a href="rb.html">G.I Hooks (M.S)</a></li>
									<li><a href="rb.html">Polymore Hooks</a></li>
									<li><a href="rb.html">Aluminium Hooks</a></li>
									<li><a href="rb.html">S.S Hooks</a></li>
								    </ul>
									</li>
									<li><a span style="background-color:grey;" href="cnail.html">Concrete Nails</a></li> 
								</ul>
							</li>
							<li><a href="enquiry.html">Enquiry</a></li>
						
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</nav>
					<!-- nav -->
				</div>
				<!-- header -->
			</div>
		</div>
		<!-- row -->
	</div>
</header>
<!-- wraper_header -->

<!-- wraper_inner_banner -->
<div class="wraper_inner_banner commercial-page">
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!-- inner_banner_text -->
				<div class="inner_banner_text">
					<h3>Enquiry</h3>
				</div>
				<!-- inner_banner_text -->
			</div>
		</div>
		<!-- row -->
	</div>
</div>
<!-- wraper_inner_banner -->

<!-- wraper_about_main -->
<main class="wraper_about_main">
	<div class="container">
		<!-- row -->
		<div class="row about_main_body">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<!-- about_main_body_left -->
				<div class="about_main_body_left">
					<!-- about_main_body_left_head -->
					
					<!-- about_main_body_left_head -->
					<!-- about_main_body_left_body -->
					<br><br><br>
					<div class="about_main_body_left_body">
					<?php if(isset($_GET['msg'])==1){
						
						echo '<p class="blink" style="color:blue;"><b>Thank You for Submitting Information</b>';
						/*echo '<script> showMessage(); </script>';*/ 
						header('location:download.php?filename=new prospectus.pdf');
					/*echo "<script type=\"text/javascript\">
        window.open('download.php?filename=prospectus.pdf', '_blank')
    </script>";*/
						
						}
						?>
						<div class="about_main_body_right_contactform">
						<div class="about_main_body_right_contactform_head">
							<h3>Get In Touch</h3>
						</div>
						<div class="about_main_body_right_contactform_body">
							
							<div class="form-row">
								<input type="text" name="name"  required placeholder="Name">
							</div>
							<div class="form-row">
								<input type="email" name="email"  required placeholder="Email">
							</div>
							<div class="form-row">
								<input type="tel" name="mobile"  required placeholder="Phone">
							</div>
							<div class="form-row">
								<textarea name="message"  required placeholder="Message"></textarea>
							</div>
							<div class="form-row">
								<input type="submit" name="submit" value="Submit">
								<div id="form-email-msg"></div>
							</div>
							</form>
						</div>
					</div>
						<!-- row -->
						<div class="row">
							
							
						</div>
						<!-- row -->
						
					</div>
					<!-- about_main_body_left_body -->
					<!-- about_main_body_left_slider -->
					
					<!-- about_main_body_left_slider -->
				</div>
				<!-- about_main_body_left -->
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<!-- about_main_body_right -->
				<div class="about_main_body_right">
					<!-- about_main_body_right_contactform -->
					<br><br><br><br>
					<div class="about_main_body_right_contactform">
						<div class="about_main_body_right_contactform_head">
							<img src="images/enquiry.png">
						</div>
						
					</div>
					<!-- about_main_body_right_contactform -->
				</div>
				<!-- about_main_body_right -->
			</div>
		</div>
		<!-- row -->
	</div>
</main>
<!-- wraper_about_main -->

<!-- wraper_home_client -->
<section class="wraper_home_client">
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!-- home_client_head -->
				<div class="home_client_head">
					<h3>Awesome Clients</h3>
					
				</div>
				<!-- home_client_head -->
			</div>
		</div>
		<!-- row -->
		<!-- row -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!-- home_client_body -->
				<!-- home_client_body -->
				<div id="home-client-carousel" class="home_client_body">
					<!-- home_client_body_item -->
					<div class="home_client_body_item">
						<img src="images/home/lnt.png" alt="">
					</div>
					<!-- home_client_body_item -->
					<!-- home_client_body_item -->
					<div class="home_client_body_item">
						<img src="images/home/gannon.png" alt="">
					</div>
					<!-- home_client_body_item -->
					<!-- home_client_body_item -->
					<div class="home_client_body_item">
						<img src="images/home/mack.png" alt="">
					</div>
					<!-- home_client_body_item -->
					<!-- home_client_body_item -->
					<div class="home_client_body_item">
						<img src="images/home/jp.png" alt="">
					</div>
					<!-- home_client_body_item -->
					<!-- home_client_body_item -->
					<div class="home_client_body_item">
						<img src="images/home/rms.png" alt="">
					</div>
					<!-- home_client_body_item -->
					<!-- home_client_body_item -->
					<div class="home_client_body_item">
						<img src="images/home/sapponji.jpg" alt="">
					</div>
					<!-- home_client_body_item -->
					<!-- home_client_body_item -->
					<div class="home_client_body_item">
						<img src="images/home/tantia.jpg" alt="">
					</div>
					<!-- home_client_body_item -->
				</div>
				<!-- home_client_body -->
			</div>
		</div>
		<!-- row -->
	</div>
</section>
<!-- wraper_home_client -->
<!-- wraper_home_client -->

<!-- footer -->
<footer class="footer">
	<!-- footer_estimate -->
	<div class="footer_estimate">
		<div class="container">
			<!-- row -->
			<div class="row footer_estimate_body">
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<!-- footer_estimate_body_left -->
					<div class="footer_estimate_body_left">
						<h3>Ready to Work With Us?</h3>
						<h4>Request a Free Estimate Today!</h4>
					</div>
					<!-- footer_estimate_body_left -->
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<!-- footer_estimate_body_right -->
					<div class="footer_estimate_body_right">
						<a class="footer_estimate_body_right_btn" href="contact.html">Request Estimate</a>
					</div>
					<!-- footer_estimate_body_right -->
				</div>
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- footer_estimate -->
	<!-- footer_main -->
	
	<!-- footer_main -->
	<!-- footer_copyright -->
	<div class="footer_copyright">
		<div class="container">
			<!-- row -->
			<div class="row footer_copyright_body">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
					<!-- footer_copyright_body_social -->
					<div class="footer_copyright_body_social">
						<ul>
							<li class="facebook"><a href="http://www.facebook.com/kanai-lall-Ghosh-Co-Pvt-Ltd-148911471867342">&nbsp;</a></li>
							<li class="twitter"><a href="#">&nbsp;</a></li>
							<li class="youtube"><a href="#">&nbsp;</a></li>
						</ul>
					</div>
					<!-- footer_copyright_body_social -->
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
					<!-- footer_copyright_body_text -->
					<div class="footer_copyright_body_text">
						<h3>Copyright &copy; 2016 Kanai Lall Ghosh Co Pvt. Ltd.    | Website Developed By <a href="http://www.wtech.in" target="_blank">Webtech Software Solution</a></h3>
					</div>
					<!-- footer_copyright_body_text -->
				</div>
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- footer_copyright -->
</footer>
<!-- footer -->

<!-- JQUERY LIBRARY JS -->
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>

<!-- BOOTSTRAP JS -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!-- WEBSITE JS -->
<script src="js/website.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#banner-slider").responsiveSlides({
   		auto: true,
        pager: true,
        nav: false,
        speed: 500,
	});
	$("#commercial-body-slider").responsiveSlides({
   		auto: true,
        pager: false,
        nav: true,
        speed: 700,
	});
	$("#home-portfolio-carousel").owlCarousel({
		autoPlay: true,
		navigation: true,
		pagination: false,
		stopOnHover: false,
   		itemsCustom : [
          [0, 1],
          [320, 1],
          [480, 2],
          [768, 3],
          [1000, 3],
          [1200, 3],
          [1400, 4],
          [1600, 4],
        ],
	});
	$("#home-client-carousel").owlCarousel({
		autoPlay: true,
		navigation: false,
		pagination: false,
		stopOnHover: false,
   		itemsCustom : [
          [0, 1],
          [320, 1],
          [480, 2],
          [768, 4],
          [1000, 5],
          [1200, 5],
          [1400, 6],
          [1600, 6],
        ],
	});
	$("#home-testimonial-carousel").owlCarousel({
		autoPlay: true,
		navigation: false,
		pagination: true,
		stopOnHover: true,
   		singleItem: true,
	});
	$("a.fancybox").fancybox({
		openEffect : 'elastic',
		openSpeed  : 200,
		closeEffect : 'elastic',
		closeSpeed  : 200,
		closeClick : true,
	});
	$(".res_nav").sidr({
		side: 'right',
		source: '.nav',
	});
	$(window).scroll(function(){
        if ($(this).scrollTop() > 100){
            $(".scrollup").addClass("active");
        } else {
            $(".scrollup").removeClass("active");
        }
    });
    $(".scrollup").click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false
    });
    $(window).scroll(function(){
	var e = $(window).width();
	if (e > 767){
 		if ($(this).scrollTop() > 0){
			$(".wraper_inner_banner").css({
				"background-position":"100% " + -($(this).scrollTop() / 5) + "px"
			});
     	}else{
      	}
  	}else{
  		return false
	}
});
});
</script>

<!-- EMAIL JS -->
<script type="text/javascript">
$(document).ready(function(){
	$('#submit').click(function(){
		$.post("php/common.html", $("#mycontactform").serialize(), function(response){   
			$('#form-email-msg').html(response);
		});
		return false;
	});
});
</script>

</body>

<!-- Mirrored from clients.rkwebsolutions.com/guardian/commercial.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2015 14:25:24 GMT -->
</html>