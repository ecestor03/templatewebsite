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
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
	<div id ="lside">
		<?php include 'mainleft.php' ?>
	</div>
	
	<div id="main-content">
		<div class="mc-top">

		</div>
		<div id="customize_form">
			
			<div class="themeinq_ctag">
				<p>
					<img src="images/maillogo.png" width="30" height="30" style="float:left; margin-top:-5px; padding-right:5px  "/>Allow us to fully understand your requirements for the project so we may help you better. Fill up the form below and give us all the small details we may need.
				</p>
			</div><!--themeinq_tag-->
			<div id="alertbox">
				
			</div>
			<form name="customize" action="sendmail_rquote.php" method="post" onsubmit="return validateForm()" class="" novalidate="novalidate" onclick="removepopup()">
				<div>
					<input type="text" name="c_name" value="" size="80" placeholder="Full Name (required)"><br/>							
					<input type="email" name="c_emailaddress" value="" size="80"  placeholder="Email (required)"><br/>
					<input type="tel" name="c_phone" value="" size="80"  placeholder="Phone Number (required)"><br/>
					<input type="text" name="c_type_of_product" value="" size="80"  placeholder="Type of products for the site (required)"><br/>
					<input type="text" name="c_website" value="" size="80"  placeholder="Existing website URL(optional)"><br/>
					<input type="text" name="c_company" value="" size="80"  placeholder="Company (optional)"><br/>
					
					<p>What type of platform you will integrate the theme </p>
					<select name="c_type_cms" width="80" >
						<option value="other_platform">Other</option>	
						<option value="wordpress">Wordpress</option>
						<option value="Drupal">Drupal</option>
						<option value="Joomla">Joomla</option>
						<option value="ecommerce">Ecommerce</option>
						<option value="Blog">Blog</option>						
					</select>	
					
					<p>If Other, please specify below</p>
					<textarea name="c_platform_others" cols="80" rows="10" class="otherinfo" aria-invalid="false"></textarea>
					
					<p>Type of Services needed (you may choose more than one)</p>
					<input type="checkbox" name="c_service_psd"  value="Yes" checked>PSD
					<input type="checkbox" name="c_service_htmlcss"  value="Yes" checked >HTML/CSS
					<input type="checkbox" name="c_service_banner"  value="Yes" checked >Banner 
					<input type="checkbox" name="c_service_ctotheme"  value="Yes" checked >Convert to Theme
					<input type="checkbox" name="c_service_logo"  value="Yes" checked >Logo Design / Redesign
									
				</div>
				<div>
					<p>Do you have some site we could use as reference (optional)</p>
					<textarea name="c_reference_site" cols="80" rows="10" class="otherinfo" aria-invalid="false"></textarea>
				</div>
				
				<div>
					<p>Do you have prefered color other than the existing logo you have (optional)</p>
					<textarea name="c_reference_color" cols="80" rows="10" class="otherinfo" aria-invalid="false"></textarea>
				</div>
				
				<div>
					<p>Other details</p>
					<textarea name="c_other_details" cols="80" rows="10" class="otherinfo" aria-invalid="false"></textarea>
				</div>
				<div class="g-recaptcha" data-sitekey="6LepdQkTAAAAAOGB6b_sAS9TpJNFJ91Y_7KyCSSa"></div>
				<div>
					<input type="submit" name="customize_submit" value="Send me a Quote" class="submit_customize">
				</div>
				
			</form>
		</div>
	</div><!--main-content-->
	
	
	<script>
		function validateForm() {
			var x = document.forms["customize"]["c_name"].value;
			if (x == null || x == "") {
				document.forms["customize"]["c_name"].style.border = '1px solid red';
				document.getElementById("alertbox").innerHTML ='Please Enter Your Full Name'
				document.getElementById("alertbox").style.display ='block';
				document.getElementById('alertbox').scrollIntoView();
				return false;
			}
		
		
			var x = document.forms["customize"]["c_emailaddress"].value;
			if (x == null || x == "") {
				document.forms["customize"]["c_emailaddress"].style.border = '1px solid red';
				document.getElementById("alertbox").innerHTML ='Please Enter valid email address';
				document.getElementById("alertbox").style.display ='block';
				document.getElementById('alertbox').scrollIntoView();
				return false;
			}
			
		
			
		
			var x = document.forms["customize"]["c_phone"].value;
			if (x == null || x == "") {
				document.forms["customize"]["c_phone"].style.border = '1px solid red';
				document.getElementById("alertbox").innerHTML ='Please Enter Phone Number'
				document.getElementById("alertbox").style.display ='block';
				document.getElementById('alertbox').scrollIntoView();
				return false;
			}
		
		
			var x = document.forms["customize"]["c_type_of_product"].value;
			if (x == null || x == "") {
				document.forms["customize"]["c_type_of_product"].style.border = '1px solid red';
				document.getElementById("alertbox").innerHTML ='Please Enter Product Type'
				document.getElementById("alertbox").style.display ='block';
				document.getElementById('alertbox').scrollIntoView();
				return false;
			}

		}
		function removepopup(){
			document.getElementById("alertbox").style.display = 'none';
			document.forms["customize"]["c_name"].style.border = '1px solid #e7e7e7';
		}
	</script>
	
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
