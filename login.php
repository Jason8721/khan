<!DOCTYPE html>
<html lang="en" d>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Style.css">
    <title>ثبت نام</title>
</head>
<body class="body1">
<?php
   include 'Header.php';
    


?>


<div class="container mt-5">
        <h2 class="text-center">ثبت‌نام</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label" dir="rtl">نام کامل</label>
                <input type="text" class="form-control" id="name" placeholder="نام خود را وارد کنید" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label" dir="rtl">ایمیل</label>
                <input type="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"dir="rtl">رمز عبور</label>
                <input type="password" class="form-control" id="password" placeholder="رمز عبور خود را وارد کنید" required>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label"dir="rtl">تأیید رمز عبور</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="رمز عبور خود را دوباره وارد کنید" required>
            </div>
            <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">مرا بخواتر بسپار</label>
  </div>
            <button type="submit" class="btn btn-primary">ثبت‌نام</button>
        </form>
    </div>
    <?php include 'footer.php';    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>