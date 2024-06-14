<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "powergym";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "INSERT INTO guest_visits (name, phone) VALUES (?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $phone);
    if ($stmt->execute()) {
        // Успешная отправка формы
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        // Ошибка при выполнении SQL-запроса
        echo "Ошибка при отправке формы. Попробуйте позже.";
    }
    
    $stmt->close();
}
?>
