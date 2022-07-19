<?php

session_start();

$secure = $_SESSION['SECURE'];
if ($secure != "!@#$%^&*()"){
    die('SECURE test failed.');
}
$origin = $_SESSION['ORIGIN'];
if ($origin != "/~u02/submissions/submission06/pages/form_feedback.php") {
    die('ORIGIN test failed.');
}

$salutation = $firstName = $lastName = "";
$email = $phoneNumber = "";
$subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salutation = sanitized_input($_POST["salutation"]);
    $firstName = sanitized_input($_POST["firstName"]);
    if (!preg_match("/^[A-Z][A-Za-z -]*$/", $firstName)){
        die("Bad first name!");
    }
    $lastName = sanitized_input($_POST["lastName"]);
    if (!preg_match("/^[A-Z][A-Za-z '-]*$/", $lastName)){
        die("Bad last name!");
    }
    $email = sanitized_input($_POST["email"]);
    if (!preg_match("/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$/", $email)){
        die("Bad email!");
    }
    $phoneNumber = sanitized_input($_POST["phone"]);
    $phoneNumber = !empty($_POST['phone']) ? $_POST['phone'] : "Not given";
    if ( !empty($_POST['phone']) && !preg_match("/^(\d{3}-)?\d{3}-\d{4}$/", $phoneNumber)){
        die("Bad phone number!");
    }
    $subject = sanitized_input($_POST["subject"]);
    $message = sanitized_input($_POST["message"]);
}

function sanitized_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Send mail to business
$messageToBusiness = 
    "From: $salutation $firstName $lastName\r\n".
    "E-mail address: $email\r\n".
    "Phone Number: $phoneNumber\r\n".
    "--------------------------------------\r\n".
    "Subject: $subject\r\n".
    "--------------------------------------\r\n".
    "$message\r\n".
    "======================================\r\n";

$headerToBusiness = "From: $email\r\n";
mail("u50@mail.cs.smu.ca", $subject, 
    $messageToBusiness, $headerToBusiness);

// Send message to client
$messageToClient = "Dear $salutation $lastName:\r\n".
    "The following message was recieved from you by Badal Sports Collection:\r\n".
    "=====================================\r\n".
    $messageToBusiness.
    "Thank you for your interest and your feedback.\r\n".
    "From Badal Sports Collection Family\r\n".
    "=====================================\r\n";
if (isset($_POST['reply'])) 
    $messageToClient .= "P.S. We will contact you shortly with more information.";

$headerToClient = "From: u50@ps.cs.smu.ca\r\n";
mail($email, "Re: $subject",
    $messageToClient, $headerToClient);

// conversion of message to HTML5 format
$display = str_replace("\r\n", "\r\n<br>", $messageToClient);
$display = "<!DOCTYPE html>
            <html lang='en'>
                <head><meta charset='utf-8'>
                    <title>Your Message</title>
                </head>
                <body>
                    <code>$display</code>
                <body>
            </html>";
echo $display;


// Log the feedback information in data/feedback.txt on the web server
$file = fopen("../data/feedback.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($file,
    "\n-----------------------------------------------------------\n")
    or die("Error: Could not write divider to log file.");
fwrite($file, "Date Recieved: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write date to log file.");
fwrite($file, $messageToBusiness)
    or die("Error: Could not write message to log file.");
?>