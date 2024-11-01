<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>GameLibrary</title>
</head>
<body class="body1">
    
<header>
        <h1>کتابخانه بازی</h1>
        
        <nav>
            <ul>
                <li><a href="#about">درباره ما</a></li>
                <li><a href="#games">بازی‌ها</a></li>
                <li><a href="#contact">تماس با ما</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="about">
        <h2>درباره ما</h2>
        <p>در کتاب خانه بازی ها شما میتوانید انواع بازی ها در پلتفرم های مختلف  دیده و دانلود کنید.
            این وبسایت به تازگی شروع به کار کرده و امید واریم که بتوانیم به بهترین شکل ممکن نیاز های شما را برطرف کنیم.
        </p>
    </section>
    
    <section id="games">
        <h2>بازی‌ها</h2>
        
        <div class="games-container">
            <?php
            // آرایه‌ای از بازی‌ها
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
                echo '<div class="card game-card">';
                echo '<img src="' . $game["image"] . '" class="card-img-top" alt="' . $game["title"] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $game["title"] . '</h5>';
                echo '</div>';
                echo '</div>';
            }
            ?>
            
        </div>
    </section>
    
    <section id="contact">
        <h2>تماس با ما</h2>
        <form>
            <input type="text" placeholder="نام شما" required>
            <input type="email" placeholder="ایمیل شما" required>
            <textarea placeholder="پیام شما" required></textarea>
             <button type="submit" class="btn btn-success">ارسال</button>
        </form>
    </section>
    
    <footer>
        <p>کپی‌رایت © 2024 کتابخانه بازی</p>
    </footer>
</body>
</html>