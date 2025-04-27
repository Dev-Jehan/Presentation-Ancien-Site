<?php
$recaptchaSecret = '6LeFalwqAAAAAAVfE3A1nlQkguU4339M_YdANxxn';
$recaptchaResponse = $_POST['g-recaptcha-response'];
$userIP = $_SERVER['REMOTE_ADDR'];

// prepare the URL to send the request to
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse&remoteip=$userIP";

// make the request and get the response
$response = file_get_contents($url);

// decode the JSON response into a PHP object
$responseData = json_decode($response);

if (!$responseData->success) {
    // reCaptcha validation failed, handle the error as needed
    // For example: $errors[] = 'reCaptcha verification failed.';
    // Redirect to
    header("Location:404");
} else {
    // reCaptcha validation succeeded, proceed with form processing
    // Get data from form
    $source = $_POST['source'];
    $name = $_POST['user_first_name'];
    $last_name = $_POST['user_last_name'];
    $email = filter_var(trim($_POST['user_email']), FILTER_SANITIZE_EMAIL);
    $message = $_POST['user_message'];

    $to = "contact@skyld.io";
    $subject = "Message from the website contact form";

    // The following text will be sent
    // Name = user entered name
    // Email = user entered email
    // Message = user entered message 
    $txt = "First name: " . $name . ", Last name: " . $last_name . ", Email: "
        . $email . "\r\n Source in the Website: " . $source . "\r\n Message:\r\n--------------\r\n" . $message . "\r\n--------------";

    $headers = "From: noreply@skyld.io";

    if ($email != NULL) {
        mail($to, $subject, $txt, $headers);
    }

    // Redirect to
    header("Location:thanks");
}
