<?php

/* Configuration */
/*your web-mail*/
$mailto = 'filip.develop@outlook.com';


$name = strip_tags($_POST['name']);
$subject = strip_tags($_POST['subject']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);

$inboxSubject = "Message From Sole"; //subject will appear on inbox

// HTML for email to send submission details
$body = "
<br>
<p><b>Message</b>: $message</p>
<p><b>Name</b>: $name <br>
<p><b>Subject</b>: $subject <br>
<b>Email</b>: $email<br>
";


// Success Message
$success = "Sent";
$error = "Failed";


$headers = "From: $name <$email> \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers2 = "From:" . $mailto;
$message = "<html><body>$body</body></html>";

if (empty($name) || empty($email) || empty($message)) {

    echo "Fill The Form Properly"; // message

} else {

    if (mail($mailto, $inboxSubject, $message, $headers)) {
        echo "$success"; // success
    } else {
        echo "$error"; // failure
    }
}

