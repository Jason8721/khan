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
<body class="body1">
<?php
   include 'Header.php';
    


?>

<section id="about" class="text-center">
    <h2>درباره ما</h2>
    <p>ما یک تیم حرفه‌ای هستیم که به ارائه بهترین خدمات به مشتریان خود متعهد هستیم. هدف ما ایجاد تجربه‌ای بی‌نظیر برای کاربران است.</p>
</section>

<section id="services" class="text-center bg-light">
    <h2 class="services">خدمات ما</h2>
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

<section id="contact" class="text-center bg-light">
    <h2 Style="color: #444;">تماس با ما</h2>
    <form>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="نام شما" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" placeholder="ایمیل شما" required>
        </div>
        <div class="mb-3">
            <textarea class="form-control" placeholder="پیام شما" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">ارسال</button>
    </form>
</section>

<?php include 'footer.php'   ?>


</body>
</html>