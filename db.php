<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "gamelibrary_db"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}
?>
    
</body>
</html>