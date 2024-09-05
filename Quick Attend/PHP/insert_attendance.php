<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "attendance_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the POST data
$data = json_decode(file_get_contents("php://input"), true);

// Log received data
file_put_contents('debug.log', "Received data: " . print_r($data, true) . "\n", FILE_APPEND);

$roll_number = $data['roll_number'];
$name = $data['name'];
$timestamp = $data['timestamp'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO attendancetable (roll_number, name, timestamp) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $roll_number, $name, $timestamp);

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
    file_put_contents('debug.log', "SQL Error: " . $stmt->error . "\n", FILE_APPEND);
}

// Close the connection
$stmt->close();
$conn->close(); 
