<?php
// Connect to the database
$pdo = new PDO("mysql:host=localhost;dbname=online_store", "username", "password");

// Get the products from the database
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display the products
echo "<h1>Products</h1>";
echo "<ul>";
foreach ($products as $product) {
	echo "<li>";
	echo "<img src='" . $product["image"] . "' alt='" . $product["name"] . "'>";
	echo "<h2>" . $product["name"] . "</h2>";
	echo "<p>" . $product["price"] . "</p>";
	echo "<button onclick='addToCart(" . $product["id"] . ")'>Add to Cart</button>";
	echo "<button onclick='openWhatsApp()'>Contact us on WhatsApp</button>";
	echo "</li>";
}
echo "</ul>";
?>