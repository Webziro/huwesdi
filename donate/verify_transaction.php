<?php

session_start();

$reference = $_GET['reference'];
if ($reference == '') {
    header("location: javascript://history.go(-1)");
    exit();
}

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_0e15e748539182f8d69321106a2ea470577f4cbd",
        "Cache-Control: no-cache",
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
    exit();
} else {
    $result = json_decode($response);

    if (isset($result->data) && $result->data->status == 'success') {
    $status = $result->data->status;
    $reference = $result->data->reference;
    $lname = $result->data->customer->last_name;
    $fname = $result->data->customer->first_name;
    $fullname = $lname . ' ' . $fname;
    $cus_email = $result->data->customer->email;
    $amount = $result->data->amount;
    $date_time = date('Y-m-d H:i:s'); 

    include "conn.php";

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO transactions  (Ustatus, Ureference, fullname, amount, email, date_purchase) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $status, $reference, $fullname, $amount, $cus_email, $date_time);
    

   if ($stmt->execute()) {
    $_SESSION['message'] = "The payment was successful!";
    header('location: ../success_page.php ');
    exit();
    } else {
        $_SESSION['message'] = "Error: " . $stmt->error;
        header("location: error.php");
        exit();
    }

} else {
    header("location: error.php");
    exit();
}
}


?>