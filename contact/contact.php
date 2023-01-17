<?php 
var_dump($_POST);

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$host = "localhost";
$user = "root";
$psw = "";
$dbname = "db_progreviews";

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dsn, $user, $psw, $options);
} catch (PDOException $Exception) {
    throw new DatabaseConnectionException($Exception->getMessage());
}

$statement = $pdo->prepare("INSERT INTO tbl_contact (fldName, fldEmail, fldMessage) VALUES (?, ?, ?);");
$statement->execute([$name, $email, $message]);

?>