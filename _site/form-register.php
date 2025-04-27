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
    $email = filter_var(trim($_POST['user_email']), FILTER_SANITIZE_EMAIL);
    $first_name = $_POST['user_first_name'];
    $last_name = $_POST['user_last_name'];
    $newsletter = "No";

    if (!empty($_POST['newsletter'])) {
        $newsletter = "Yes";
    }

    $to = "contact@skyld.io";
    $subject = "Webinar registration";

    // The following text will be sent
    $txt = $first_name . " " . $last_name . " registered to the next webinar\n    Email: " . $email . "\n    Wants to suscribe to the newsletter: " . $newsletter;

    $headers = "From: noreply@skyld.io";

    if ($email != NULL) {
        mail($to, $subject, $txt, $headers);
    }

    $url = "https://skyld.kchat.infomaniak.com/hooks/9d7eb617-8bfc-4bd4-ab86-7c266f4a2925";
    $message = "**" . $first_name . " " . $last_name . "** registered to the next webinar\n    Email: [" . $email . "](mailto:" . $email . ")\n    Wants to suscribe to the newsletter: " . $newsletter;
    $channel = "organisation-webinaire";
    $content = json_encode(array("text" => $message, "channel" => $channel, "username" => "Webinar registration", "icon_url" => "https://skyld.io/assets/images/favicon.webp"));

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $curl,
        CURLOPT_HTTPHEADER,
        array("Content-type: application/json")
    );
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

    $json_response = curl_exec($curl);

    // Redirect to
    header("Location:thanks");
}
