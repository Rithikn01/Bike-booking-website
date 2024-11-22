<?php
include 'bookingdb_config.php';
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_db"; // Updated database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$owner_name = $_POST['owner_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$district = $_POST['district'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$model = $_POST['model'];
$variant = $_POST['variant'];
$color = $_POST['color'];

// Insert data into database
$sql = "INSERT INTO bookings (owner_name, email, phone, district, state, pincode, model, variant, color) 
        VALUES ('$owner_name', '$email', '$phone', '$district', '$state', '$pincode', '$model', '$variant', '$color')";

if ($conn->query($sql) === TRUE) {
    // Redirect to classic.html on successful booking
    header("Location: thanks.html");
    exit(); // Ensure no further code is executed after redirect
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
