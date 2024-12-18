<?php
// Проверка Cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['email'])) {
    $username = htmlspecialchars($_COOKIE['username']);
    $email = htmlspecialchars($_COOKIE['email']);
} else {
    // Если Cookie нет, перенаправляем на страницу входа
    header("Location: auth/login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Earth Mine</title>
</head>
<body>
    <h1>Welcome to Earth Mine!</h1>
    <p>Hello, <?php echo $username; ?>! Your email: <?php echo $email; ?></p>
</body>
</html>
