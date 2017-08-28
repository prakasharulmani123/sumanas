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
        $ToEmail = 'roobini@arkinfotec.com';
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
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit1"] == 'submit1') {
    $name = $email = $phone = $source_to_find = $cover_letter = $file = $position = "";
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $source_to_find = test_input($_POST["source_to_find"]);
    $cover_letter = test_input($_POST["cover_letter"]);
    $file_name = $_FILES ["file"] ["name"];
    $file_tmp = $_FILES ["file"] ["tmp_name"];
    $dir = "uploads/";
    $imageFileType = pathinfo($file, PATHINFO_EXTENSION);
    $expensions = array("jpeg", "jpg", "gif", "png");
    $content = chunk_split(base64_encode(file_get_contents($file_tmp)));
    $uid = md5(uniqid(time()));
    $file = $dir . basename($file_name);
    move_uploaded_file($file_tmp, $file);
    $position = test_input($_POST["position"]);
    if (isset($email) && $email != '') {
        $ToEmail = 'roobini@arkinfotec.com';
        $EmailSubject = 'Site contact form';
        $mailheader = "From: " . $email . "\r\n";
        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $mailheader .= "Content-Transfer-Encoding: base64\r\n";
        $mailheader .= "Content-Disposition: attachment";
        $mailheader .= "MIME-Version: 1.0\r\n";
        $mailheader .= "Content-Type: multipart/mixed";
        $mailheader .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
        $mailheader .= "This is a multi-part message in MIME format.\r\n";
        $mailheader .= "--" . $uid . "\r\n";
        $mailheader .= "Content-Type: application/octet-stream"; 
        $mailheader .= "Content-type:text/plain; charset=iso-8859-1\r\n";
        $mailheader .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $mailheader .= "--" . $uid . "\r\n";
        $MESSAGE_BODY = "Position: " . $position . "";
        $MESSAGE_BODY = "Name: " . $name . "";
        $MESSAGE_BODY .= "Email: " . $email . "";
        $MESSAGE_BODY .= "Phone: " . $phone . "";
        $MESSAGE_BODY .= "How did you hear about us: " . $source_to_find . "";
        $MESSAGE_BODY .= "Cover Letter: " . nl2br($cover_letter) . "";
        $MESSAGE_BODY .= "File: " . $file . "";
        if (@mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)) {
            echo "success";
            exit;
        } else {
            echo "invalid";
            exit;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit2"] == 'submit2') {
    $name = $email = $phone = $source_to_find = $cover_letter = $file = $position = "";
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $source_to_find = test_input($_POST["source_to_find"]);
    $cover_letter = test_input($_POST["cover_letter"]);
    $file_name = $_FILES ["file"] ["name"];
    $file_tmp = $_FILES ["file"] ["tmp_name"];
    $dir = "uploads/";
    $imageFileType = pathinfo($file, PATHINFO_EXTENSION);
    $expensions = array("jpeg", "jpg", "gif", "png");
    $file = $dir . basename($file_name);
    move_uploaded_file($file_tmp, $file);
    $position = test_input($_POST ["position"]);
    if (isset($email) && $email != '') {
        $ToEmail = 'roobini@arkinfotec.com';
        $EmailSubject = 'Site contact form';
        $mailheader = "From: " . $email . "\r\n";
        $mailheader .= "Content-type: text/html;
                charset = iso-8859-1\r\n";
        $MESSAGE_BODY = "Position: " . $position . "";
        $MESSAGE_BODY = "Name: " . $name . "";
        $MESSAGE_BODY .= "Email: " . $email . "";
        $MESSAGE_BODY .= "Phone: " . $phone . "";
        $MESSAGE_BODY .= "How did you hear about us: " . $source_to_find . "";
        $MESSAGE_BODY .= "Cover Letter: " . nl2br($cover_letter) . "";
        $MESSAGE_BODY .= "File: " . $file . "";
        if (@mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)) {
            echo "success";
            exit;
        } else {
            echo "invalid";
            exit;
        }
    }
}

if ($_SERVER ["REQUEST_METHOD"] == "POST" && $_POST ["submit3   "] == 'submit3') {
    $name = $email = $phone = $source_to_find = $cover_letter = $file = $position = "";
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $source_to_find = test_input($_POST["source_to_find"]);
    $cover_letter = test_input($_POST["cover_letter"]);
    $file_name = $_FILES ["file"] ["name"];
    $file_tmp = $_FILES ["file"] ["tmp_name"];
    $dir = "uploads/";
    $imageFileType = pathinfo($file, PATHINFO_EXTENSION);
    $expensions = array("jpeg", "jpg", "gif", "png");
    $file = $dir . basename($file_name);
    move_uploaded_file($file_tmp, $file);
    $position = test_input($_POST ["position"]);
    if (isset($email) && $email != '') {
        $ToEmail = 'roobini@arkinfotec.com';
        $EmailSubject = 'Site contact form';
        $mailheader = "From: " . $email . "\r\n";
        $mailheader .= "Content-type: text/html;
                charset = iso-8859-1\r\n";
        $MESSAGE_BODY = "Position: " . $position . "";
        $MESSAGE_BODY = "Name: " . $name . "";
        $MESSAGE_BODY .= "Email: " . $email . "";
        $MESSAGE_BODY .= "Phone: " . $phone . "";
        $MESSAGE_BODY .= "How did you hear about us: " . $source_to_find . "";
        $MESSAGE_BODY .= "Cover Letter: " . nl2br($cover_letter) . "";
        $MESSAGE_BODY .= "File: " . $file . "";
        if (@mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)) {
            echo "success";
            exit;
        } else {
            echo "invalid     ";
            exit;
        }
    }
}
?>