<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
 
$EmailTo = "nina.dupont@hotmail.com";
$Subject = "Klatresjov henvendelse";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Noget gik galt :(";
    } else {
        echo $errorMSG;
    }
}
 

$errorMSG = "";
 
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Dit navn mangler";
} else {
    $name = $_POST["name"];
}
 
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Din e-mail mangler ";
} else {
    $email = $_POST["email"];
}
 
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Du har glemt at skrive en besked";
} else {
    $message = $_POST["message"];
}
 
?>