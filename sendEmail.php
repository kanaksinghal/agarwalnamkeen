<?php 
    error_reporting(0);
	if ($_POST["contactName"] == "")
	{
		$output = 'Name field is empty!';
		die($output);
	}
	elseif ($_POST["contactEmail"] == "")
	{
		$output = 'Email field is empty!';
		die($output);
	}
	elseif ($_POST["contactMessage"] == "")
	{
		$output = 'Message field is empty!';
		die($output);
	}
	else
	{
		$email_to 			=   'suresh@agarwalnamkeen.com,suresh11363@gmail.com,'.$_POST['contactEmail']; 
		$contact_name     	=   $_POST['contactName'];  
		$contact_email    	=   $_POST['contactEmail'];
        $subject 	=   "AgarwalNamkeen.com Contact: ".$_POST['contactSubject'];
        $contact_message 	=   $_POST['contactMessage'];
	
    	$headers  	= "From: ".$contact_name." <".$contact_email.">\r\n";	
		$headers   .= "Reply-To: ".$contact_email."\r\n";	
		
		$finalmessage = $contact_message;
		
		$output="";
		
    	if(mail($email_to, $subject, $finalmessage, $headers)){
        	$output = 'OK';
    	}else{
        	$output = 'Failed';
   		}		
		//$output = json_encode(array('type'=>'success', 'text' => 'Message Sent'));
		die($output);
	}
?>