<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Style.css">
    <title>GameLibrary</title>
</head>
<body class="body1">
    
<?php
   include 'Header.php';
    


?>
    <?php
    
    include 'db.php';
    
    ?>

    <section id="games">
        <h2>بازی‌ها</h2>
        
        <div class="container">
        <div class="row justify-content-center">
        <?php
        
        $image_directory = "C:/wamp64/www/Project/image/";
        $images = array_diff(scandir($image_directory), array('.', '..'));
        

        foreach ($images as $image_name) {
            $image_path = $image_directory . $image_name;
            
        
            $check_sql = "SELECT * FROM images WHERE image_name = '$image_name'";
            $check_result = $conn->query($check_sql);
        
            if ($check_result->num_rows == 0) {
                
                $sql = "INSERT INTO images (image_name, image_path) VALUES ('$image_name', '$image_path')";
                if ($conn->query($sql) === TRUE) {
                    echo "تصویر $image_name با موفقیت ذخیره شد.<br>";
                } else {
                    echo "خطا در ذخیره تصویر $image_name: " . $conn->error . "<br>";
                }
            } 
        }
        
       
      
        
       
        $sql = "SELECT * FROM images";
        $result = $conn->query($sql);

            if ($result->num_rows > 0) {
             echo '<div class="container">';
         echo '<div class="row">';
         while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4 my-3">';
        echo '<div class="card">';
        echo '<img src="' . $row['image_path'] . '" class="card-img-top" alt="' . $row['image_name'] . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['image_name'] . '</h5>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
     echo '</div>';
     echo '</div>';
} else {
    echo "<p>هیچ تصویری یافت نشد.</p>";
}



        ?>
            
           
       
   

   
    <?php include 'footer.php';    ?>

</body>
</html>