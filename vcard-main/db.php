<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sklad", "root", "");
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}