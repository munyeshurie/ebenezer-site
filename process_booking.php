<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "drycleanerebenezer@gmail.com";
    $subject = "New Booking Request";
    
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $notes = $_POST['notes'];
    
    // Create email message
    $message = "New Booking Details:\n\n";
    $message .= "Name: " . $name . "\n";
    $message .= "Phone: " . $phone . "\n";
    $message .= "Address: " . $address . "\n";
    $message .= "Date: " . $date . "\n";
    $message .= "Time: " . $time . "\n";
    $message .= "Special Instructions: " . $notes . "\n";
    
    // Additional headers
    $headers = "From: " . $name . " <website@ebenezer.com>\r\n";
    
    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>