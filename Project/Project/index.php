
<?php
    include("Header.php");
    


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

            // نمایش بازی‌ها
            
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
    
  
    <?php include("footer.php")    ?>

</body>
</html>