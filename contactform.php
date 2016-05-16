<?php



if (empty($_POST['sender_name'])) {

	

	 echo 'No spammers allowed';

	 exit();

	

} else {



	$message  = "WebPro Online Form \n";

	$message .= "======================================\n";

	$message .= "Submitted by ".$_POST['sender_name'].' on '.date("d-M-Y H:m")."\n\n"; 

	$message .= "Name              : \t".$_POST['sender_name']."\n";
	
	$message .= "Message         : \t".$_POST['sender_message']."\n";

	$message .= "Email ID          : \t".$_POST['sender_contact_email']."\n"; 

	$message .= "Phone Number      : \t".$_POST['sender_contact_phone']."\n"; 
	
	
		
	$message .= " \n";	

	$message .= "* This form was submitted from http://www.webprotechnologi.com.-\n";

	

	$to = 'patma@webprotechnologi.com';

	$headers = "From: ".$_POST['sender_name'] . " <" . $_POST['sender_contact_email'] . ">" . "\r\n";

	$headers .= "BCC: patma_1780@hotmail.com,";

	$subject = 'WebPro Technology';



	if(mail($to, $subject, $message, $headers)){
            echo 1;
            //echo "<script>alert('Congratulations! Your form Was Submitted Successfully.'); location='index.html'; </script>";

	}else{
            echo 2;
		//echo "<script>alert('Message send failed. Please try again or contact us if this happen again.'); location='index.html'; </script>"; 

	}

	

}