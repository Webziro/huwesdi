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

    if(empty($name) or empty($email)){
        $_SESSION['message'] = "<div style = 'color: red'>Please fill in all fields before proceeding </div>";
        header("location: ../index.php");
        exit();
    }else{
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'mail.huwesdi.org';
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@huwesdi.org'; // Your email address Huwesdi@2424
        $mail->Password = 'Huwesdi@2424';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;


        // Set sender and recipient
        $mail->setFrom('contact@huwesdi.org', 'HUWESDI Africa'); // Your email and name
        $mail->addAddress($email, $name); // Subscriber email and name

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'HUWESDI Africa Subscription Confirmation';
        $mail->Body = 'Thank you for subscribing to HUWESDI updates! Follow us on our various social media platforms:<br>
                                
                        Best Regards,<br>
                        HUWESDI Africa<br>
                        No. 5, Kontagora Close off Jos Street, Garki, FCT, Abuja <br>
                        Website: <a href="https://www.huwesdi.org/">https://www.huwesdi.org/</a> <br>
                        Email: <a href="mailto:contact@huwesdi.org">contact@huwesdi.org</a> <br>
                        Facebook/X: HuwesdiAfrica<br>

                        Copyright (C) 2024 HUWESDI Africa. All rights reserved.<br>
                        You are receiving this email because you opted in via our website. <br>
                        Want to change how you receive these emails? You can <br> <a href="huwesdi.org/unsubscribe.php">unsubscribe</a>.';


        // Send the email
        $mail->send();
        $_SESSION['message'] = "<div style = 'color: green'> Subscription successful! Check your email for confirmation.!</div>"; 
        
    } catch (Exception $e) {
   $_SESSION['message'] = "<div style='color: red'>Failed to subscribe. Error: " . $mail->ErrorInfo . "</div>";
}

    // Redirect back to the subscription page
    header("Location: ../index.php");
    exit();
}
} else {
    // The form was not submitted
    $_SESSION['message'] = "<div style = 'color: red'> Failed to subscribe. Please try again later.</div>";
    // Redirect back to the subscription page
    header("Location: ../index.php");
    exit();
}
?>