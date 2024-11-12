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
            
            $games = [
                ["title" => "Call of Duty", "image" => "image/image(1).jpg"],
                ["title" => "God of War", "image" => "image/image(2).jpg"],
                ["title" => "Dota 2", "image" => "image/image(3).jpg"],
                ["title" => "Ghost of Tsushima", "image" => "image/image(4).jpg"],
                ["title" => "Elden Ring", "image" => "image/image(5).jpg"],
                ["title" => "Dark Souls 3", "image" => "image/image(6).jpg"],
            ];

            
            
            foreach ($games as $game) {
                echo '<div class="col-4 d-flex justify-content-center">';
                echo '<div class="card game-card">';
                
                echo '<img src="' . $game["image"] . '" class="card-img-top" alt="' . $game["title"] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $game["title"] . '</h5>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
            </div>
        </div>
    </section>
    
   
    <?php include 'footer.php';    ?>

</body>
</html>