<?php
$servername = "mysql";
$username = "myuser";
$password = "mypassword";
$dbname = "mydatabase";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Соединение успешно установлено!";
?>

