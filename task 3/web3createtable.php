 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrations";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);


// sql to create table
$sql = "CREATE TABLE login (
 Serial_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Phone_number INT(10) NOT NULL,
Email VARCHAR(20) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
    echo "Table login created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 