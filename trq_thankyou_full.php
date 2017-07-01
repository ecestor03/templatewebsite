<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>8web skin </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" type="text/css" href="style.css" />
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
			<?php $fname = $_GET['name'] ;	?>
		<div id="thankyoubg">
			<p>Hi  <strong><?=$fname?></strong></p>
			
			<div class="line"></div>
			
		
			<p>You have successfully submitted your request</p>
			<p>Thank you for your interest in purchasing one of our products.  Our team will be evaluating your request and give you a quote within the day. One of the advantage in 8web design is that we welcome customer to feedback on the design giving them a more convenient way to speak out their mind in the template they visualize. Once you have received and approved your Quote give us 1 to two days to make your design. 
			
			<p>Feel free to browse some of our other products or give us feedback on how we can help you more, We love to hear inputs from our clients. This give us an edge and an opportunity to help you more in your business.</p>
			
			
			<div class="line"></div>
			<p> Best regards </p>
			
			<p><strong>E S Rotse</strong><br/>
			<span style="font-style:italic; font-size:12px ; font-family:Georgia,serif; color:#666666">Senior Project Analyst </span></p>
			<div style="margin-left: -30px; margin-top: -22px;"><img src="images/eight-logo.png" alt="8webskin" height="100" width="150" /></div>
		</div>
	
	</div>
	</body>
</html>
