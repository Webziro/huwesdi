<?php


include "conn.php";

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $message = $conn->real_escape_string($_POST['message']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);

    // Check if any field is empty
    if (empty($message) || empty($name) || empty($email) || empty($subject)) {
        $_SESSION['message'] = "<div style='color: red'>Oga, Please fill in all fields!</div>";
        header("location: ../contact.php");
        exit();
    }

    // Validate message length
    if (strlen($message) < 20) {
        $_SESSION['message'] = "<div style='color: red'>Don't dull, Your Message must be at least 20 characters long!</div>";
        header("location: ../contact.php");
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "<div style='color: red'>Chai, you have and Invalid email format!</div>";
        header("location: ../contact.php");
        exit();
    }

    // Validate subject length
    if (strlen($subject) < 10) {
        $_SESSION['message'] = "<div style='color: red'>Subject must be at least 10 characters long!</div>";
        header("location: ../contact.php");
        exit();
    }

    // Insert data into database
    $data = "INSERT INTO HuwesdiContact (Umessage, Uname, email, Usubject) VALUES ('$message', '$name', '$email', '$subject')";
    if ($conn->query($data) === TRUE) {
        $_SESSION['message'] = "<div style='color: green'>Thank you for contacting HUWESDI, A personnel will get back to you soon!</div>";
        header("location: ../contact.php");
        exit();
    } else {
        $_SESSION['message'] = "<div style='color: red'>Failed to send Message!</div>";
        header("location: ../contact.php");
        exit();
    }

    // Close connection
    $conn->close();
}
?>




?>