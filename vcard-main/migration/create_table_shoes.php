<?php
include('../db.php');
try {
    $sql = "CREATE TABLE shoes (id INTEGER AUTO_INCREMENT PRIMARY KEY, type VARCHAR(30), size INTEGER, qual INTEGER)";
$affectedRowsNumber = $conn->exec($sql);
echo "Таблица успешно создана!";
}
catch (PDOException $e) {
    echo "Таблица не создана : " . $e->getMessage();
}
// $sql = "CREATE TABLE tovar (id INTEGER AUTO_INCREMENT PRIMARY KEY, age VARCHAR(30), name INTEGER)";
// $affectedRowsNumber = $conn->exec($sql);
//     if($affectedRowsNumber > 0 ){
//         //header('Location:http://vcard/size.php');
//         echo "Таблица успешно создана!";  
//     }
//     else{
//         echo "Таблица не создана ";
//     }
?>