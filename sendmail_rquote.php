<?php 
ob_start();
	if(isset($_POST['themeinquiryform_submit'])){
		$trq_themename = $_POST['trq_themename'];
		$trq_quotereq = $_POST['trq_quotereq'];
		$trq_name = $_POST['trq_name'];
		$trq_email_address = $_POST['trq_email_address'];
		$trq_phone = $_POST['trq_phone'];
		$trq_comments_changes = $_POST['trq_comments_changes'];
		$trq_imgname = $_POST['trq_imgname'];
		

	$to   = 'administrator@8webskin.com';
	$subject = '8webskin:request for customize quote ';
	$message = "<html>
	<head>
	</head>
	<body style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#666666; width:800px;	margin:0 auto;'>
		<div id='title' style='margin:0 auto; width:500px'>
			<div align='center'><img src='http://8webskin.com/images/eight-logo.png' width='251' height='201'/></div>
			<div align='center' style='background-color:#0066cc; color:#fff; font-family:Oswald; font-size:24px; font-weight:normal; padding:5px 0px; margin-bottom:10px; width:100%; text-align:center'>Web Customization Request</div>
		</div>
		<div>
			<table width='551'>
				<tr>
				  <td width='50'>Requested Theme:</td>
				  <td width='215'><b>$trq_themename</b></td>
				</tr>
				<tr>
				  <td width='50'>Requirement:</td>
				  <td width='215'><b>$trq_quotereq</b></td>
				</tr>
				<tr>
				  <td width='50'>Client's Name:</td>
				  <td width='215'><b>$trq_name</b></td>
				</tr>
				<tr>  
				  <td width='81'>Email Address:</td>
				  <td width='185'><b>$trq_email_address</b></td>
				</tr>
				<tr>  
				  <td width='81'>Phone Number:</td>
				  <td width='185'><b>$trq_phone</b></td>
				</tr>
				<tr>  
				  <td width='81'>Aditional Comments:</td>
				  <td width='185'><b>$trq_comments_changes</b></td>
				</tr>
				<tr>  
				  <td width='81'>Image:</td>
				  <td width='185'><b>$trq_imgname</b></td>
				</tr>
				
			</table>
		</div>
	</body>
	</html>";
	$headers = "From: webmaster@example.com\r\n";
	$headers .= "CC: 8webskin@gmail.com\r\n";
	$headers .= "Reply-To: webmaster@example.com\r\n";
	$headers .= "Content-Type: text/html";
	
	mail($to, $subject, $message, $headers);
    header('Location: http://8webskin.com/trq_thankyou.php' );
	exit();
	}
?>

	<!---- REQUEST BANNER FROM HOME PAGE ---->
	<?php 
	if(isset($_POST['bannerinquiryform_submit'])){

		$brq_bannername = $_POST['brq_bannername'];
		$brq_quotereq = $_POST['brq_quotereq'];
		$brq_name = $_POST['brq_name'];
		$brq_emailaddress = $_POST['brq_emailaddress'];
		$brq_phone = $_POST['brq_phone'];
		
		
		echo $brq_bannername;
		echo $brq_quotereq;
		echo $brq_name;
		echo $brq_emailaddress;
		echo $brq_phone;

		
	$to   = '8webskin@gmail.com';
	$subject = '8webskin:request for web template quote ';
	$message = "<html>
	<head>
	</head>
	<body style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#666666; width:800px;	margin:0 auto;'>
		<div id='title' style='margin:0 auto; width:500px'>
			<div align='center'><img src='http://www.8webskin.com/images/logo.jpg' width='294' height='98'/></div>
			<div align='center' style='color:#66CC00; font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:bold;'>Feedback Inquiry</div>
		</div>
		<div>
			<table width='551'>
				<tr>
				  <td width='50'>Banner Code:</td>
				  <td width='215'><b>$brq_bannername</b></td>
				</tr>
				<tr>
				  <td width='50'>platform</td>
				  <td width='215'><b>$brq_quotereq</b></td>
				</tr>
				<tr>
				  <td width='50'>Client Name:</td>
				  <td width='215'><b>$brq_name</b></td>
				</tr>
				<tr>
				  <td width='50'>Client email:</td>
				  <td width='215'><b>$brq_emailaddress</b></td>
				</tr>
				<tr>  
				  <td width='81'>Client Phone:</td>
				  <td width='185'><b>$brq_phone</b></td>
				</tr>
				
			</table>
		</div>
	</body>
	</html>
	";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: BANNERINQUIRY@8webskin.com" . "\r\n";
	mail($to, $subject, $message, $headers);

header( 'Location:http://localhost/8WS/trq_thankyou.php?name='.$brq_name );
	}
?>

	<!---- REQUEST LEFT COLUMN FORM ---->
	<?php 
	if(isset($_POST['linq_submit'])){

		$linq_name = $_POST['linq_name'];
		$linq_companyname = $_POST['linq_companyname'];
		$linq_emailaddress = $_POST['linq_emailaddress'];
		$linq_phone = $_POST['linq_phone'];
		$linq_currenturl = $_POST['linq_currenturl'];
		$linq_type = $_POST['linq_type'];
		$linq_comments = $_POST['linq_comments'];
		

	$to   = 'administrator@8webskin.com';
	$subject = '8webskin:request for customize quote ';
	$message = "<html>
	<head>
	</head>
	<body style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#666666; width:800px;	margin:0 auto;'>
		<div id='title' style='margin:0 auto; width:500px'>
			<div align='center'><img src='http://8webskin.com/images/eight-logo.png' width='251' height='201'/></div>
			<div align='center' style='background-color:#0066cc; color:#fff; font-family:Oswald; font-size:24px; font-weight:normal; padding:5px 0px; margin-bottom:10px; width:100%; text-align:center'>Web Customization Request</div>
		</div>
		<div>
			<table width='551'>
				<tr>
				  <td width='50'>Client's Name:</td>
				  <td width='215'><b>$linq_name</b></td>
				</tr>
				<tr>
				  <td width='50'>Company Name:</td>
				  <td width='215'><b>$linq_companyname</b></td>
				</tr>
				<tr>
				  <td width='50'>Email Address:</td>
				  <td width='215'><b>$linq_emailaddress</b></td>
				</tr>
				<tr>  
				  <td width='81'>Phone Number:</td>
				  <td width='185'><b>$linq_phone</b></td>
				</tr>
				<tr>  
				  <td width='81'>Current Website:</td>
				  <td width='185'><b>$linq_currenturl</b></td>
				</tr>
				<tr>  
				  <td width='81'>Type of services:</td>
				  <td width='185'><b>$linq_type</b></td>
				</tr>
				<tr>  
				  <td width='81'>Comments:</td>
				  <td width='185'><b>$linq_comments</b></td>
				</tr>
				
			</table>
		</div>
	</body>
	</html>";
	$headers = "From: webmaster@example.com\r\n";
	$headers .= "CC: 8webskin@gmail.com\r\n";
	$headers .= "Reply-To: webmaster@example.com\r\n";
	$headers .= "Content-Type: text/html";
	
	mail($to, $subject, $message, $headers);
    header('Location: http://8webskin.com/index.php' );
	exit();
	}
?>



<!---- REQUEST CUSTOMIZE ---->
	<?php 
	if(isset($_POST['customize_submit'])){

	
	
		$c_name = $_POST['c_name'];
		$c_emailaddress = $_POST['c_emailaddress'];
		$c_phone = $_POST['c_phone'];
		$c_type_of_product = $_POST['c_type_of_product'];
		$c_website = $_POST['c_website'];
		$c_company = $_POST['c_company'];
		$c_type_cms = $_POST['c_type_cms'];
		$c_platform_others = $_POST['c_platform_others'];
		$c_service_psd = $_POST['c_service_psd'];
		if ($c_service_psd != 'Yes') {
			$c_service_psd = 'No';
		}
		$c_service_htmlcss = $_POST['c_service_htmlcss'];
		if ($c_service_htmlcss != 'Yes') {
			$c_service_htmlcss = 'No';
		}
		$c_service_banner = $_POST['c_service_banner'];
		if ($c_service_banner != 'Yes') {
			$c_service_banner = 'No';
		}
		$c_service_ctotheme = $_POST['c_service_ctotheme'];
		if ($c_service_ctotheme != 'Yes') {
			$c_service_ctotheme = 'No';
		}
		$c_service_logo = $_POST['c_service_logo'];
		if ($c_service_logo != 'Yes') {
			$c_service_logo = 'No';
		}
		$c_reference_site = $_POST['c_reference_site'];
		$c_reference_color = $_POST['c_reference_color'];
		$c_other_details = $_POST['c_other_details'];


	$to   = 'administrator@8webskin.com';
	$subject = '8webskin:request for customize quote ';
	$message = "<html>
	<head>
	</head>
	<body style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#666666; width:800px;	margin:0 auto;'>
		<div id='title' style='margin:0 auto; width:500px'>
			<div align='center'><img src='http://8webskin.com/images/eight-logo.png' width='251' height='201'/></div>
			<div align='center' style='background-color:#0066cc; color:#fff; font-family:Oswald; font-size:24px; font-weight:normal; padding:5px 0px; margin-bottom:10px; width:100%; text-align:center'>Web Customization Request</div>
		</div>
		<div>
			<table style='width:100%'>
				<tr style='background-color:#f1f1f1; margin-bottom:3px; height:30px'>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Client's Name:</td>
				  <td width='215'><b>$c_name</b></td>
				</tr>
				<tr style='margin-bottom:3px; height:30px'> 
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Email Address:</td>
				  <td width='215'><b>$c_emailaddress</b></td>
				</tr>
				<tr style='background-color:#f1f1f1; margin-bottom:3px; height:30px'>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Phone Number:</td>
				  <td width='185'><b>$c_phone</b></td>
				</tr>
				<tr style='margin-bottom:3px; height:30px'>  
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Type of Products:</td>
				  <td width='185'><b>$c_type_of_product</b></td>
				</tr>
				<tr style='background-color:#f1f1f1; margin-bottom:3px; height:30px'>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Current Website:</td>
				  <td width='185'><b>$c_website</b></td>
				</tr>
				<tr style='margin-bottom:3px; height:30px'> 
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Company Name:</td>
				  <td width='215'><b>$c_company</b></td>
				</tr>
				<tr style='background-color:#f1f1f1; margin-bottom:3px; height:30px'>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Type of CMS Integrated:</td>
				  <td width='215'><b>$c_type_cms</b></td>
				</tr>
				<tr style='margin-bottom:3px; height:30px'> 
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Other Platform:</td>
				  <td width='215'><b>$c_platform_others</b></td>
				</tr>
				
				<tr style='background-color:#333333'>  
				  <td width='500' style='text-transform: uppercase; text-align:center; font-weight:normal; color:#fff'>Type of Services needed </td>
				  <td width='215'></td>
				</tr>
				<tr>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>PSD:</td>
				  <td width='215'><b>$c_service_psd</b></td>
				</tr>
				<tr>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>HTML/CSS:</td>
				  <td width='215'><b>$c_service_htmlcss</b></td>
				</tr>
				<tr>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Banners:</td>
				  <td width='215'><b>$c_service_banner</b></td>
				</tr>
				<tr>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Convert to theme:</td>
				  <td width='215'><b>$c_service_ctotheme</b></td>
				</tr>
				<tr>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Create me a Logo:</td>
				  <td width='215'><b>$c_service_logo</b></td>
				</tr>
				
				<tr style='background-color:#f1f1f1; margin-bottom:3px; height:30px'>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Reference Site:</td>
				  <td width='185'><b>$c_reference_site</b></td>
				</tr>
				<tr style='margin-bottom:3px; height:30px'> 
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Preferred Color:</td>
				  <td width='185'><b>$c_reference_color</b></td>
				</tr>
				<tr style='background-color:#f1f1f1; margin-bottom:3px; height:30px'> 
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Comments:</td>
				  <td width='185'><b>$c_other_details</b></td>
				</tr>
				
			</table>
		</div>
	</body>
	</html>";
	
	
	$headers = "From: webmaster@example.com\r\n";
	$headers .= "CC: 8webskin@gmail.com\r\n";
	$headers .= "Reply-To: webmaster@example.com\r\n";
	$headers .= "Content-Type: text/html";
	
	mail($to, $subject, $message, $headers);
    header('Location: http://8webskin.com/customize_form.php' );
	exit();
	}
	
	
?>


<!---- CONTACT US ---->
	<?php 
	if(isset($_POST['contact_submit'])){

	
	
		$c_name = $_POST['c_name'];
		$c_emailaddress = $_POST['c_emailaddress'];
		$c_phone = $_POST['c_phone'];
		$c_comments = $_POST['c_comments'];

		
		

	$to   = 'administrator@8webskin.com';
	$subject = '8webskin:Feedback ';
	$message = "<html>
	<head>
	</head>
	<body style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#666666; width:800px;	margin:0 auto;'>
		<div id='title' style='margin:0 auto; width:500px'>
			<div align='center'><img src='http://8webskin.com/images/eight-logo.png' width='251' height='201'/></div>
			<div align='center' style='background-color:#0066cc; color:#fff; font-family:Oswald; font-size:24px; font-weight:normal; padding:5px 0px; margin-bottom:10px; width:100%; text-align:center'>Web Customization Request</div>
		</div>
		<div>
			<table style='width:100%'>
				<tr style='background-color:#f1f1f1; margin-bottom:3px; height:30px'>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Client's Name:</td>
				  <td width='215'><b>$c_name</b></td>
				</tr>
				<tr style='margin-bottom:3px; height:30px'> 
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Email Address:</td>
				  <td width='215'><b>$c_emailaddress</b></td>
				</tr>
				<tr style='background-color:#f1f1f1; margin-bottom:3px; height:30px'>
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Phone Number:</td>
				  <td width='185'><b>$c_phone</b></td>
				</tr>
				
				<tr style='background-color:#f1f1f1; margin-bottom:3px; height:30px'> 
				  <td width='50' style='text-transform: uppercase; font-weight:normal; color:#0066cc'>Comments:</td>
				  <td width='185'><b>$c_comments</b></td>
				</tr>
				
			</table>
		</div>
	</body>
	</html>";
	
	
	$headers = "From: webmaster@example.com\r\n";
	$headers .= "CC: 8webskin@gmail.com\r\n";
	$headers .= "Reply-To: webmaster@example.com\r\n";
	$headers .= "Content-Type: text/html";
	
	mail($to, $subject, $message, $headers);
    header('Location: http://8webskin.com/contactus.php' );
	exit();
	}
	
	
?>
	