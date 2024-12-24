<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
</head>
<body>
<?php
       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "root"; 
            $password = ""; 
            $dbname = "gamelibrary_db"; 

            
            $conn = new mysqli($servername, $username, $password, $dbname);

          
            if ($conn->connect_error) {
                die("اتصال به پایگاه داده ناموفق بود: " . $conn->connect_error);
            }
        }
           
        ?>
   
</body>
</html>
