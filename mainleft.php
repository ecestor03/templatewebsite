<?php
	/****GET CURRENT PAGE****/
	function curPageURL() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	}

	function curPageName() {
	 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}

	$curr_page = curPageName();
	
?>

<div id="main-top">
			
			<div class="container clearfix">
				<div id="logo"><a href="/"><img src="images/eight-logo.png" alt="8webskin" /></a></div>
				<nav>
					<ul>
						<li class="<?php if ($curr_page == 'index.php') { echo "current_page_item"; }else{echo "";} ?>"><a href="/">Pre Designed Themes</a></li>
						<li class="<?php if ($curr_page == 'redesign.php') { echo "current_page_item"; }else{echo "";} ?>"><a href="redesign.php">Redesign Website</a></li>
						<li class="<?php if ($curr_page == 'aboutus.php') { echo "current_page_item"; }else{echo "";} ?>"><a href="aboutus.php">About Us</a></li>
						<li class="<?php if ($curr_page == 'contactus.php') { echo "current_page_item"; }else{echo "";} ?>"><a href="contactus.php">Contact</a></li>
						<!--<li class="<?php if ($curr_page == 'joinus.php') { echo "current_page_item"; }else{echo "";} ?>"><a href="joinus.php">Join Us</a></li>
						<li class="<?php if ($curr_page == 'projects.php') { echo "current_page_item"; }else{echo "";} ?>"><a href="projects.php">Projects</a></li>
						<li class="<?php if ($curr_page == 'contactus.php') { echo "current_page_item"; }else{echo "";} ?>"><a href="contactus.php">Contact</a></li>-->
					</ul>
				</nav>
				
				
				
				<div id="contactusform">

					<div class="cftag">
						<p><img src="images/maillogo.png" width="30" height="30" style="float:left; padding:3px"/>
						We have pre design templates suited for your requirements, allow us to give you a free estimate for your project. Simply send us the form below with the some of the required information so we can process your request. 
						</p>
					</div>
					<div class="cftagnote">
							<p>For more elaborate specs, please click the <strong>Customize</strong> button on the right</p>
					</div>
					
					
					
					<form name="linq_inq" action="sendmail_rquote.php" method="post" onsubmit="return validateForm()" class="" novalidate="novalidate" onclick="removepopup()">

						<div>
							<input type="text" name="linq_name" value="" size="40" placeholder="Name (required)">
							<input type="text" name="linq_companyname" value="" size="40"  placeholder="Company Name">
							<input type="email" name="linq_emailaddress" value="" size="40"  placeholder="Email (required)">
							<input type="tel" name="linq_phone" value="" size="40"  placeholder="Phone Number / Skype ">
						</div>
						
						<div>
							<p>Do you have an existing Website?</p>
							<input type="text" name="linq_currenturl" value="" size="40" placeholder="Website Domain / URL">
						</div>
						<div>
							<p>Type of services you need</p>
							<select name="linq_type" width="80" placeholder="Name (required)">
								<option value="webdesignPSD">Web Design - PSD</option>
								<option value="webdesign_convertion">Design and Integration </option>
								<option value="integration to wordpress">Integration to wordpress</option>
								<option value="logo design">Logo Design</option>
								<option value="banner design">Banner Design</option>
								<option value="wordpress">Wordpress site</option>
								<option value="wpecommerce">Wordpress with ecommerce</option>
								<option value="Drupal">Drupal Site</option>
							</select>
						</div>
						<div>
							<p>Other Information for the request project(if banner please indicate size in inches or pixel)</p>
							<textarea name="linq_comments" cols="32" rows="10" class="otherinfo" aria-invalid="false"></textarea>
						</div>
						<div>
							
							<input type="submit" name="linq_submit" value="Contact Us" class="">
						</div>

					</form>
					<script>
					function validateForm() {
						var x1 = document.forms["linq_inq"]["linq_name"].value;
						//alert(x);
						if (x1 == null || x1 == "") {
							document.forms["linq_inq"]["linq_name"].style.border = '1px solid red';
							return false;
						}
					
					
						var x2 = document.forms["linq_inq"]["linq_emailaddress"].value;
						if (x2 == null || x2 == "") {
							document.forms["linq_inq"]["linq_emailaddress"].style.border = '1px solid red';
							return false;
						}
						
						var $email = $('form input[name="linq_emailaddress"]');
						var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
						if ($email.val == '' || !re.test($email.val())){
							document.forms["linq_inq"]["linq_emailaddress"].style.border = '1px solid red';
							return false;
						}
					
					
						var x3 = document.forms["linq_inq"]["linq_phone"].value;
						if (x3 == null || x3 == "") {
							document.forms["linq_inq"]["linq_phone"].style.border = '1px solid red';
							return false;
						}
					}
					function removepopup(){
						document.forms["linq_inq"]["linq_name"].style.border = '1px solid #e7e7e7';
						document.forms["linq_inq"]["linq_emailaddress"].style.border = '1px solid #e7e7e7';
						document.forms["linq_inq"]["linq_phone"].style.border = '1px solid #e7e7e7';
					}
				
				</script>
				</div><!--contactusform-->
				
			</div> <!-- end .container -->
			
		</div>