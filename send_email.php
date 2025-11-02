<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $jobcardnumber = $_POST["jobcardnumber"];
    $aadhaarnumber = $_POST["aadhaarnumber"];
    $phonenumber = $_POST["phonenumber"];
    $village = $_POST["village"];
    $district_state = $_POST["district_state"];
    $typeofrequest = $_POST["typeofrequest"];
    $message = $_POST["message"];

    $to = "anvi.mittal2005@gmail.com";
    $subject = "New Contact Form Submission";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Job Card Number: $jobcardnumber\n";
    $body .= "Aadhaar Number: $aadhaarnumber\n";
    $body .= "Phone Number: $phonenumber\n";
    $body .= "Village/Panchayat: $village\n";
    $body .= "District & State: $district_state\n";
    $body .= "Type of Request: $typeofrequest\n";
    $body .= "Message: $message\n";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Email sent successfully!";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong.";
    }
} else {
    http_response_code(403);
    echo "Access denied";
}
?>
