<?php
// Подключение к базе данных (здесь используется MySQL)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "powergym";

// Соединение с базой данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$name = $_POST['name'];
$phone = $_POST['phone'];
$membershipType = $_POST['membershipType'];

// Проверка, существует ли уже запись с таким же именем и номером телефона
$check_sql = "SELECT * FROM membership WHERE name = '$name' AND phone = '$phone'";
$result = $conn->query($check_sql);

if ($result->num_rows > 0) {
    echo "Запись с таким именем и номером телефона уже существует.";
} else {
    // SQL-запрос для добавления новой записи в таблицу membership
    $sql = "INSERT INTO membership (name, phone, membership_type) VALUES ('$name', '$phone', '$membershipType')";

    // Выполнение запроса
    if ($conn->query($sql) === TRUE) {
        echo "Запись успешно добавлена";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

// Закрытие соединения
$conn->close();
?>