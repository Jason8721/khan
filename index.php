<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/Style.css">
    <title>GameLibrary</title>
</head>
<body>
    
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
                ["title" => "Call of Duty", "image" => "'image(1).jpg'"],
                ["title" => "God of War", "image" => "'image(2).jpg'"],
                ["title" => "Dota 2", "image" => "'image(3).jpg'"],
                ["title" => "Ghost of Tsushima", "image" => "'image(4).jpg'"],
                ["title" => "Elden Ring", "image" => "'image(5).jpg'"],
                ["title" => "Dark Souls 3", "image" => "'image(6).jpg'"],
            ];

            // نمایش بازی‌ها
            
            foreach ($games as $game) {
                echo '<div class="game">';
                echo '<img src="' . $game["image"] . '" alt="' . $game["title"] . '">';
                echo '<h3>' . $game["title"] . '</h3>';
                echo '</div>';
            } 
            ?>
            <img src="image" alt="">
        </div>
    </section>
    
    <section id="contact">
        <h2>تماس با ما</h2>
        <form>
            <input type="text" placeholder="نام شما" required>
            <input type="email" placeholder="ایمیل شما" required>
            <textarea placeholder="پیام شما" required></textarea>
            <button type="submit">ارسال</button>
        </form>
    </section>
    
    <footer>
        <p>کپی‌رایت © 2024 کتابخانه بازی</p>
    </footer>
</body>
</html>