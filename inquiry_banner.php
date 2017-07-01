<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>8web skin </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<?php 
		$urltitle = $_GET['title'] ;
		$urlreq = $_GET['req'] ;
		if($urlreq=='p'){
			$quotereq = 'PSD format';	
		} else if($urlreq=='h'){
			$quotereq = 'HTML/CSS';	
		}
	?>
	
	<div id="themeimage">
		<img src="images/<?=$urltitle ?>.png" height="400" width="300">
	</div>
	
	<div id="themeinquiryform">
		<div class="themeinq_tag">
			<p><img src="images/maillogo.png" width="30" height="30" style="float:left; padding:3px"/>Please  fill up the form below, once we have the necessary details we need we can proceed in sending you quotation of the  <?=$urltitle ?></p>
		</div>
		
		<form  name=" " action="sendmail_rquote.php" method="post" class="" novalidate="novalidate"  >

						<div>
							
							<input type="text" name="brq_bannername" value="Item code: <?=$urltitle?>" size="80" disabled >
							<input type="hidden" name="brq_bannername" value="Item code: <?=$urltitle?>">
							<input type="text" name="brq_quotereq" value="in <?=$quotereq?>" size="80"  disabled>
							<input type="hidden" name="brq_quotereq" value="in: <?=$quotereq?>">
							<input type="text" name="brq_name" value="" size="80" placeholder="Full Name (required)">							
							<input type="email" name="brq_emailaddress" value="" size="80"  placeholder="Email (required)">
							<input type="tel" name="brq_phone" value="" size="80"  placeholder="Phone Number">
						</div>
						<div>
							<p>Do you want us to make some changes in the Banner (ie color, images). If Yes, kindly specify below </p>
							<textarea name="comments_changes" cols="80" rows="10" class="otherinfo" aria-invalid="false"></textarea>
						</div>
						<div>
							<input type="submit" name="bannerinquiryform_submit" value="Send me a Quote" class=""  >
						</div>

		</form>
					
	</div><!--contactusform-->
</body>
</html>	