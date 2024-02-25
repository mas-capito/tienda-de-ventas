<?php
$host = 'localhost';
$db   = 'my_database';
$user = 'my_username';
$pass = 'my_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$stmt = $pdo->query('SELECT * FROM products');
$products = $stmt->fetchAll();

// Display the products
foreach ($products as $product) {
    echo $product['name'] . ' - ' . $product['price'] . '<br>';
}
?>