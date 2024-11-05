<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما</title>
</head>
<body>
<?php include 'header.php'; ?>

<section id="about" class="text-center">
    <h2>درباره ما</h2>
    <p>ما یک تیم حرفه‌ای هستیم که به ارائه بهترین خدمات به مشتریان خود متعهد هستیم. هدف ما ایجاد تجربه‌ای بی‌نظیر برای کاربران است.</p>
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

<section id="contact" class="text-center bg-light">
    <h2>تماس با ما</h2>
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

<?php include("./footer/footer.php")    ?>


</body>
</html>