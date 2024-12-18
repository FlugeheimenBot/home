<?php
session_start();

// Проверка, есть ли данные в сессии
if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: auth/login.html"); // Перенаправление на страницу входа
    exit();
}

// Если пользователь авторизован
echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
?>
