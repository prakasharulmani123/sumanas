<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Contact Form
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["contactus"] == 'contactus') {
    $name = $email = $phone = $subject = $message = "";
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $subject = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]);
    if (isset($email) && $email != '') {
        $ToEmail = 'nadesh@arkinfotec.com';
        $EmailSubject = 'Site contact form';
        $mailheader = "From: " . $email . "\r\n";
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $MESSAGE_BODY = "Name: " . $name . "\n";
        $MESSAGE_BODY .= "Email: " . $email . "\n";
        $MESSAGE_BODY .= "Phone: " . $phone . "\n";
        $MESSAGE_BODY .= "Subject: " . $subject . "\n";
        $MESSAGE_BODY .= "Message: " . nl2br($message) . "\n";
        if (@mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)) {
            echo "success";
            exit;
        } else {
            echo "invalid";
            exit;
        }
    }
}

// Careers Forms
?>