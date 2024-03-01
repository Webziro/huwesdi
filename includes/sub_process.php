<?php
// Start session to store messages
session_start();

// Include Composer's autoloader
require '../vendor/autoload.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get subscriber details from the form
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Create a new PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'stanleyamaziro@gmail.com'; // Your email address
        $mail->Password = 'hnyp cdsh rtaq lkbx';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set sender and recipient
        $mail->setFrom('contact@huswesdi.org', 'HUWESDI Africa'); // Your email and name
        $mail->addAddress($email, $name); // Subscriber email and name

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'HUWESDI Africa Subscription Confirmation';
        $mail->Body = 'Thank you for subscribing to HUWESDI updates! follow us on our various social media platforms';

        // Send the email
        $mail->send();
        $_SESSION['message'] = "<div style = 'color: green'> Subscription successful! Check your email for confirmation.!</div>"; 
        
    } catch (Exception $e) {
        $_SESSION['message'] = "<div style ='color:red'> Failed to subscribe </div>";
    }

    // Redirect back to the subscription page
    header("Location: ../index.php");
    exit();
} else {
    // The form was not submitted
    $_SESSION['message'] = "<div style = 'color: red'> Failed to subscribe. Please try again later.</div>";
    // Redirect back to the subscription page
    header("Location: ../index.php");
    exit();
}
?>