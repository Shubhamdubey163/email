<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    include "class.phpmailer.php"; // include the class name
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "shubham@neelnetworks.com";
    $mail->Password = "Shubh@m02";
    //$mail->SMTPSecure = 'tls';
    $mail->SetFrom("shubham@neelnetworks.com");
    $mail->Subject = "Enquiry Generated From  Website";
    $mail->Body = "<b>Enquiry Generated From  Website<b/><br><br><b>Name :- " . $name . " <br><br>Email Id :- " . $email . "<br><br>Contact No. :- " . $phone . "<br><br>Message :- " . $message . "</b>";
	
//$mail->Body = '$email, $name, $phone, $subject, $message';
    $mail->AddAddress("shubhamdubey163@gmaul.com");//careers@in.naval-group.com
    if (!$mail->Send()) {
        echo "<script>
      alert('Error While Message Send, Please Try Again Later !!!');
      //window.location.href='index.html';
      </script>";
    } else 
	{

        $mail2 = new PHPMailer(); // create a new object
        $mail2->IsSMTP(); // enable SMTP
        $mail2->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail2->SMTPAuth = true; // authentication enabled
        $mail2->Host = 'ssl://smtp.gmail.com';
        $mail2->Port = 465; // or 587
        $mail2->IsHTML(true);
         $mail->Username = "shubham@neelnetworks.com";
    $mail->Password = "Shubh@m02";
        //$mail2->SMTPSecure = 'tls';
        $mail2->SetFrom("shubham@neelnetworks.com");
        $mail2->Subject = "Thanks  for enquiry at paw legal";
		    
        $mail2->Body = "<img src='http://code7projects.com/paw-legal/images/logo.png' alt='Paw Legal' /><br><br>Hi,<br><br>Thanks for choosing <a href='www.paw.legal' target='_blank'>PawLegal</a>, amongst the first few platform providing online legal services for dogs in India.<br><br>I'm Priyam Chheda, a legal advisor here at <a href='www.paw.legal' target='_blank'>Paw.Legal</a><br><br>We have received your enquiry. We shall review your requirement and get in touch within 24 hours.<br><br>Regards,<br>Priyam Chheda<br><a href='www.paw.legal' target='_blank'>Paw.Legal</a>";
        //$mail->Body = '$email, $name, $phone, $subject, $message';
        $mail2->AddAddress("$email");
        if (!$mail2->Send()) {
            echo "<script>
              alert('Error While Message Send, Please Try Again Later !!!');
              //window.location.href='index.html';
              </script>";
        } else {
            
            echo "<script>
              alert('Thank you for enquiry.');
              window.location.href='index.html';
              </script>";
        }
        
		
	}
    
} else {
    echo 0;
}
?>