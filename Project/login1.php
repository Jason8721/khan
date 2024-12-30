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
<div class="container mt-5">
    <h2 class="text-center">ورود به حساب کاربری</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="email" class="form-label" dir="rtl">ایمیل</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل خود را وارد کنید" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" dir="rtl">رمز عبور</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="رمز عبور خود را وارد کنید" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">مرا به خاطر بسپار</label>
        </div>
        <button type="submit" class="btn btn-primary">ورود</button>
    </form>

    <?php
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // بررسی وجود کاربر با ایمیل وارد شده
    $stmt = $conn->prepare("SELECT id, name, password FROM registrations WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // اگر کاربر یافت شد
        $stmt->bind_result($id, $name, $hashed_password);
        $stmt->fetch();

        // بررسی رمز عبور وارد شده
        if (password_verify($password, $hashed_password)) {
            // رمز عبور صحیح است، ورود موفق
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;

            // هدایت به صفحه اصلی پس از ورود موفق
            header("Location: index.php"); // صفحه اصلی
            exit();
        } else {
            // رمز عبور نادرست
            $error_message = "رمز عبور نادرست است.";
        }
    } else {
        // کاربر با این ایمیل وجود ندارد
        $error_message = "کاربری با این ایمیل یافت نشد.";
    }
    $stmt->close();
}
    ?>
 <?php include 'footer.php';    ?>
</div>

</body>
</html>