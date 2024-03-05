<?php
// Start session to store messages
session_start();

// Include database connection
include "conn";

// Function to generate a random verification code and Get the current year and Month
function generateVerificationCode() {
    
    $current_year = date("Y");

    $current_month = date("m");


    // Check if the verification code file exists. If the file doesn't exist, create it with initial counter value
    $verification_file = "verification_counter.txt";
    if (!file_exists($verification_file)) {
        
        file_put_contents($verification_file, "0");
    }

    // Read the current counter value from the file
    $counter = intval(file_get_contents($verification_file));

    // Increment the counter and Generate a random 3-digit number then Concatenate parts
    $counter++;

    $random_number = str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);


    $verification_code = 'HUWESDI/' . $current_year . "/" . $current_month . "/" . $random_number;

    // Updated counter value
    file_put_contents($verification_file, $counter);

    return $verification_code;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user details from the signup form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $talent = $_POST["talent"];

    // Add check to fill in all fields if empty
    if (empty($name) || empty($email) || empty($phone) || empty($talent)) {
        $_SESSION['message'] = "<div style='color: red'>All fields are required!</div>";
        header("Location: ../volunteer");
        exit();
    }

    // Check if the email already exists in the database
    $email_check_stmt = $conn->prepare("SELECT Uemail FROM users WHERE Uemail = ?");
    $email_check_stmt->bind_param("s", $email);
    $email_check_stmt->execute();
    $email_check_result = $email_check_stmt->get_result();

    if ($email_check_result->num_rows > 0) {
        // Email already exists, show error message
        $_SESSION['message'] = "<div style='color: red'>Email address is already in use!</div>";
        header("Location: ../volunteer");
        exit();
    }

    // Check if the phone number already exists in the database
    $phone_check_stmt = $conn->prepare("SELECT Uphone FROM users WHERE Uphone = ?");
    $phone_check_stmt->bind_param("s", $phone);
    $phone_check_stmt->execute();
    $phone_check_result = $phone_check_stmt->get_result();

    if ($phone_check_result->num_rows > 0) {
        // Phone number already exists, show error message
        $_SESSION['message'] = "<div style='color: red'>Phone number is already in use!</div>";
        header("Location: ../volunteer");
        exit();
    }

    //Check if name alerady exists!
    $name_check_stmt = $conn->prepare("SELECT Uname FROM users WHERE Uname = ?");
    $name_check_stmt->bind_param("s", $name);
    $name_check_stmt->execute();
    $name_check_result = $name_check_stmt->get_result();

    if ($name_check_result->num_rows > 0) {
        //Check if name alerady exists!
        $_SESSION['message'] = "<div style='color: red'>This Name is already in use!</div>";
        header("Location: ../volunteer");
        exit();
    }

    // Generate a verification code
    $verification_code = generateVerificationCode();

    // Insert user data into the database
    $stmt = $conn->prepare("INSERT INTO users (Uname, Uemail, Uphone, Utalent, verification_code) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $talent, $verification_code);
    $stmt->execute();

    // Check if the user is successfully added to the database
    if ($stmt->affected_rows > 0) {
        $_SESSION['message'] = "<div style='color: green'>Great! &#128513 Sign up was successful! Your verification code is: <br> $verification_code</div>";


    } else {
        // Error occurred during user insertion
        $_SESSION['message'] = "<div style = 'color: red'> Sad! &#128530 Sign up was  not successfully, try again!</div>";       

    }

    // Redirect back to the signup page
    header("Location: ../volunteer");
    exit();
}

?>