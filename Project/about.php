<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Style.css">
    <title>درباره ما</title>
</head>
<body>
<?php include("Header.php");?>

<section id="about">
        <h2>درباره ما</h2>
        <p>در کتاب خانه بازی ها شما میتوانید انواع بازی ها در پلتفرم های مختلف  دیده و دانلود کنید.
            این وبسایت به تازگی شروع به کار کرده و امید واریم که بتوانیم به بهترین شکل ممکن نیاز های شما را برطرف کنیم.
        </p>
    </section>
<section id="services" class="text-center bg-light">
    <h2>خدمات ما</h2>
    <p>ما خدمات متنوعی را ارائه می‌دهیم:</p>
    <ul class="list-unstyled">
        <li>خدمات مشاوره</li>
        <li>طراحی وب‌سایت</li>
        <li>توسعه نرم‌افزار</li>
        <li>پشتیبانی فنی</li>
    </ul>
</section>

<section id="team" class="text-center">
    <h2>تیم ما</h2>
    <div class="row justify-content-center">
        <div class="col-md-3 team-member">
            <img src="member1.jpg" alt="عضو ۱">
            <h5>عضو ۱</h5>
            <p>تخصص: توسعه‌دهنده وب</p>
        </div>
        <div class="col-md-3 team-member">
            <img src="member2.jpg" alt="عضو ۲">
            <h5>عضو ۲</h5>
            <p>تخصص: طراح UI/UX</p>
        </div>
        <div class="col-md-3 team-member">
            <img src="member3.jpg" alt="عضو ۳">
            <h5>عضو ۳</h5>
            <p>تخصص: مدیر پروژه</p>
        </div>
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

<?php include("footer.php")    ?>


</body>
</html>