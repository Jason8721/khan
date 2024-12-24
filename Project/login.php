<!DOCTYPE html>
<html lang="en" d>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Style.css">
    <title>ثبت نام</title>
    <style>
     body {
    direction: rtl; 
    text-align: right; 
}
#exampleCheck1 {
            display: flex;
            justify-content: flex-end; 
            align-items: end; 
        }
    </style>
</head>
<body class="body1">
<?php
   include 'Header.php';
    


?>

<div class="container mt-5">
    <h2 class="text-center">ثبت‌نام</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="name" class="form-label" dir="rtl">نام کامل</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="نام خود را وارد کنید" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" dir="rtl">ایمیل</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل خود را وارد کنید" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" dir="rtl">رمز عبور</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور خود را وارد کنید" required>
        </div>
        <div class="mb-3">
            <label for="confirm-password" class="form-label" dir="rtl">تأیید رمز عبور</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="رمز عبور خود را دوباره وارد کنید" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">مرا به خاطر بسپار</label>
        </div>
        <button type="submit" class="btn btn-primary">ثبت‌نام</button>
    </form>

    <?php
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];


        if ($password !== $confirm_password) {
            echo '<div class="alert alert-danger mt-3">رمز عبور و تأیید رمز عبور مطابقت ندارند.</div>';
        } else {
       
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);


            $stmt = $conn->prepare("INSERT INTO registrations (name, email, password, confirm_password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $hashed_password, $hashed_password);

            if ($stmt->execute()) {
                echo '<div class="alert alert-success mt-3">ثبت‌نام با موفقیت انجام شد.</div>';
            } else {
                echo '<div class="alert alert-danger mt-3">خطا در ثبت‌نام: ' . $conn->error . '</div>';
            }

            $stmt->close();
        }
    }
    ?>
</div>


<?php
    
    include 'db.php';
    
    ?>
</body>
</html>