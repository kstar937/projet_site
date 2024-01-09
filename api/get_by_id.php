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

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    $products = array();

    $sql = "SELECT id, name, img,description, prix,marque FROM products WHERE id=$id";
    $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) { 
            
            $row['description'] = preg_replace('/[^a-zA-Z0-9\s]/', '', $row['description']);
            $products[] = $row;
        }
        echo json_encode(['products' => $products]);
    




// Close the database connection
$conn->close();
