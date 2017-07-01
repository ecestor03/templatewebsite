<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us | Web Templates company | 8web skin</title>
	<meta name="description" content="Beutifully designed template for your website redesignt based on your requirement. We are small company with big solutions that meet your demands and requiremnet. Aligned with number of freelancer with expertise in web development that will  fire up your companies online presence. We are based on the Philippines and our office is online.  Each Web designed is original and made specially for your company and based on what you need. We dont just used predesigned template we make it customized."></meta>
	
	<meta name="keywords" content="redesign web design, redesign web templates, customized redesign web theme, redesign wordpress theme, redesign drupal theme, redesign joomla theme, redesign ecommerce template, redesign drupal template, redesign virtuemart theme, redesign website theme, redesign customized template, freelance webdesigner, freelance webdeveloper"></meta>
	
	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="shortcut icon" type="image/x-icon" href="images/eighicon.png" />	
<link rel="shortcut icon" type="image/x-icon" href="" />	
<link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif' rel='stylesheet' type='text/css'>

<link rel="stylesheet"  href="colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="colorbox-master/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"800px"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

</head>

<body>
	<div id ="lside">
		<?php include 'mainleft.php' ?>
	</div>
	
	<div id="main-content">
		<div class="mc-top">
			<div class="custombutt"><a href="customize_form.php">custom quote</a></div>
		</div>

		<div class="mc_gallery">
			<div class="w_contents2">
			
			<h1>Feedback Form</h1>
			
			<div class="abefore"></div>
			<div class="lbefore"></div>
				<p>We value your thoughts, Drop us a message or feedback or just a chat over a cup of coffee. We love to read comments, we will get back to you as soon as possible.</p>
				
			</div>

			<div id="customize_form">
				<form name="contactusp" action="sendmail_rquote.php" method="post" class="" novalidate="novalidate" onclick="removepopup()">
					<div>
						<input type="text" name="c_name" value="" size="80" placeholder="Full Name (required)"><br/>							
						<input type="email" name="c_emailaddress" value="" size="80"  placeholder="Email (required)"><br/>
						<input type="tel" name="c_phone" value="" size="80"  placeholder="Phone Number (required)"><br/>

					</div>
					<div>
						<p>Comments</p>
						<textarea name="c_comments" cols="80" rows="10" class="otherinfo" aria-invalid="false"></textarea>
					</div>
					
					
					<div class="g-recaptcha" ></div>
					<div>
						<input type="submit" name="contact_submit" value="Contact Us" class="submit_customize">
					</div>
					
				</form>
			
			</div>
			
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123658.98582971514!2d121.03209765!3d14.407362549999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d02cc7b1e345%3A0x51fdbee47cdaf013!2sMuntinlupa%2C+Metro+Manila!5e0!3m2!1sen!2sph!4v1443032452607" width="600" height="450" frameborder="0" style="border:0; width:100%" allowfullscreen "></iframe>
			</div>
		
		</div>	
	
	</div>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66881562-1', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>
