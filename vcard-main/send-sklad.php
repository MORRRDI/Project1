<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type-shoes'];
    $size = $_POST['size-shoes'];
    $qual = $_POST['qual-shoes'];


    if ($qual < 0) {
        echo 'Нельзя вносить товар с отрицательным количеством';
        exit;
    }

    
    $shoes = "SELECT * FROM shoes WHERE type = ? AND size = ?";
    $stmt = $conn->prepare($shoes);
    $stmt->execute([$type, $size]);

    if ($stmt->rowCount() > 0) {
  
        $row = $stmt->fetch();
        $bd_id = $row["id"];
        $bd_qual = $row["qual"];
        $live_qual = $bd_qual + $qual;

    
        if ($live_qual < 0) {
            echo 'Нельзя отгрузить больше, чем есть на складе';
        } else {
            $sql = "UPDATE shoes SET qual = ? WHERE id = ?";
            $updateStmt = $conn->prepare($sql);
            $updateStmt->execute([$live_qual, $bd_id]);
            header('Location: http://vcard-main/size.php');
            exit;
        }
    } else {

        $sql = "INSERT INTO shoes (type, size, qual) VALUES (?, ?, ?)";
        $insertStmt = $conn->prepare($sql);
        if ($insertStmt->execute([$type, $size, $qual])) {
            header('Location: http://vcard-main/size.php');
            exit; 
        } else {
            echo 'Ошибка при добавлении товара: ' . implode(", ", $insertStmt->errorInfo());
        }
    }
}
?>
