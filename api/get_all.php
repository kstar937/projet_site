<?php
// Create connection to the MySQL database
$servername = "localhost";
$username = "techparis";
$password = "karan.021";
$dbname = "techparis_api";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: application/json');

    $rayon = isset($_GET['rayon']) ? $_GET['rayon'] : null;

    $products = array();

    $sql = "SELECT id, name, img, prix,marque FROM products";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        echo json_encode(['products' => $products]);
    }




// Close the database connection
$conn->close();
