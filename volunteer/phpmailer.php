<?php
// Start session to store messages
session_start();

// Include PHPMailer autoload file
require '../vendor/autoload.php';

// Function to generate a random verification code
function generateVerificationCode() {
    // Generate a random 4-digit code
    return 'HUWESDI' . mt_rand(1000, 9999);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user details from the signup form
    $name = $_POST["name"];
    // Assuming you have other form fields here...

    // Generate a verification code
    $verification_code = generateVerificationCode();

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'apcamaziro@gmail.com';
        $mail->Password = 'hnyp cdsh rtaq lkbx';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set sender and recipient
        $mail->setFrom('contact@huwesdi.org', 'HUWESDI');
        $mail->addAddress('contact@huwesdi.org', 'HUWESDI NAME1');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Welcome to Our HUWESDI';
        $mail->Body = 'Dear ' . $name . ',<br>You are specially Welcome to HUWESDI! Your Registration code is: ' . $verification_code .
        '<br>Please keep this code safe.<br>Best regards,<br> HUWESDI';


        $mail->SMTPDebug = 3; 
        // Send the email
        $mail->send();
        $_SESSION['message'] = "Welcome email sent successfully!";
    } catch (Exception $e) {
        $_SESSION['message'] = "Failed to send welcome email! Error: " . $mail->ErrorInfo;
    }

    // Redirect back to the signup page
    header("Location: ../volunteer.php");
    exit();
} else {
    // The form was not submitted
    $_SESSION['message'] = "Failed to sign up. Please try again later.";
    // Redirect back to the signup page
    header("Location: ../volunteer.php");
    exit();
}
?>