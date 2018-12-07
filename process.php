<?php include 'index.html';

$email = $_REQUEST['email'];

$servername = "localhost";
$username = "root";
$password = "22357337man";
$dbname = "ass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO emailid (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">',
         'showModal();',
		 '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
