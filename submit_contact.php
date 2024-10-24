<?php
// Database connection details
$servername = "localhost";
$username = "root";  // XAMPP default username for MySQL
$password = "";  // XAMPP default has no password for 'root'
$dbname = "los_pollos_contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data and escape it for security
$firstname = $conn->real_escape_string($_POST['firstname']);
$lastname = $conn->real_escape_string($_POST['lastname']);
$email = $conn->real_escape_string($_POST['email']);
$service = $conn->real_escape_string($_POST['service']);
$country = $conn->real_escape_string($_POST['country']);
$subject = $conn->real_escape_string($_POST['subject']);

// Insert data into the contact_submissions table
$sql = "INSERT INTO contact_submissions (firstname, lastname, email, service, country, subject)
        VALUES ('$firstname', '$lastname', '$email', '$service', '$country', '$subject')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you! Your submission has been received.";
    // Add a meta refresh tag for a delayed redirect (e.g., 3 seconds delay)
    echo '<meta http-equiv="refresh" content="3;url=polloshermanoswebsite.html">';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
