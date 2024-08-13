<?php
$firstname = $_POST['first-name']; 
$lastname = $_POST['last-name'];   
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$message = $_POST['message'];
$preferredContactMethod = $_POST['contact-method']; // Adjusted key to match form field names

// Database connection
$conn = new mysqli('localhost', 'root', '', 'contact');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact_form (firstName, lastName, email, phone, date, message, Preferred_Contact_Method) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $firstname, $lastname, $email, $phone, $date, $message, $preferredContactMethod);

// Execute statement
if ($stmt->execute()) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
