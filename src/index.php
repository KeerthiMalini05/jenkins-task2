<?php
$host=gethostbyname("db");
echo '<h4> Jenkins-Task2 ->Sucessfully connected to mysql"</h4>';

$conn = new mysqli('db','keerthi','Keerthi05');
if ($conn->connect_error) {
    die('Could not connect: ' . $conn->connect_error);
}
echo 'Connected successfully';
?>
