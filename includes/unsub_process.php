<?php
// Start session to store messages
session_start();

// Check if the email parameter is present in the URL
if(isset($_GET["email"])) {
    // Retrieve the email address from the URL
    $email = $_GET["email"];

    // Display a message confirming the unsubscription
    $_SESSION['message'] = "<div style='color: green'>You have successfully unsubscribed from HUWESDI updates.</div>";
} else {
    // If the email parameter is not present, display an error message
    $_SESSION['message'] = "<div style='color: red'>Invalid unsubscribe request. Please try again later.</div>";
}

// Redirect back to the subscription page
header("Location: ../index.php");
exit();
?>