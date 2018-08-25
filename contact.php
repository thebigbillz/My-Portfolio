<?php

$emailFrom = $email;
$emailTo = "adenugbafavour@gmail.com";
$Subject = "Slick Dev Contact Form";
$name = Trim(stripslashes($_POST['name'])); 
$tel = Trim(stripslashes($_POST['tel'])); 
$email = Trim(stripslashes($_POST['email'])); 
$message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Phone No.: ";
$Body .= $tel;
$Body .= "\n";
$Body .= "E-mail: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email 
$success = mail($emailTo, $Subject, $Body, "From: <$email>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>