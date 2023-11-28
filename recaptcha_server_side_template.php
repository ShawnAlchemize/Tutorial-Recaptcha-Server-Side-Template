<?php
// ----- Just so that people don't come into this page via URL ------
include_once 'functions.php';
sessStart_admin(true);
// ----------------------------------------------------------------
?>

<?php
// RECAPTCHA TEMPLATE 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$recaptchaSecretKey = "YOUR_SERVER_SIDE_SECRET_KEY"; // Replace with your server-side secret key
    $config = parse_ini_file('../../../../../../../../../../web_docker_mount_directory/private/recaptcha.ini'); // The server-side secret key is stored here for security purposes.
    $recaptchaSecretKey = $config['server_side']; // Replace with your server-side secret key

    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        // Perform reCAPTCHA verification
        // (Use the code from the previous response)

        if ($recaptchaResult->success) {
            // reCAPTCHA verification successful
            // Add your login codes here
            //
            //
            //
        } else {
            // reCAPTCHA verification failed
            //echo "reCAPTCHA verification failed. Please complete the reCAPTCHA.";
            $errorMsg = "reCAPTCHA verification failed. Please complete the reCAPTCHA.";
            $success = false;
        }
    } else {
        // No reCAPTCHA response received
        //echo "Please complete the reCAPTCHA.";
        $errorMsg = "Please complete the reCAPTCHA.";
        $success = false;
    }
}
?>