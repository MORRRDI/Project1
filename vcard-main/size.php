<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактор размеров</title>
    <link rel="icon" href="img/favicon.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    
</head>
<body>
    <style>
        body{
            text-align: center;
        }
        form{
            text-align: left;
            max-width: 50%;
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-left: auto;
            margin-right: auto;
        }
        form select, form input{
            padding: 8px;
        }
    </style>
    <div class="bd-example">
        <table class="table table-success table-striped">
        <thead>
        <tr>
        <th scope="col"># id</th>
        <th scope="col">тип</th>
        <th scope="col">размер</th>
        <th scope="col">колличество</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $shoes = "SELECT * FROM shoes";
                if($result = $conn->query($shoes)){
                    foreach($result as $row){
                        $id = $row["id"];
                        $type = $row["type"];
                        $size = $row["size"];
                        $qual = $row["qual"];
                        echo("<tr>");
                        echo("<th scope='row'>$id</th>");
                        echo("<td scope='row'>$type</td>");
                        echo("<td scope='row'>$size</td>");
                        echo("<td scope='row'>$qual</td>");
                        echo("</tr>");
                    }
                }
            ?>
        </tbody>
        </table>
    </div>
    <h1>Управление складом</h1>
    <p>
    Редактирование остатков размеров обуви
    </p>
    <form action="send-sklad.php" id="submit_form_shoes" method="POST">
        <label for="type-shoes">Тип обуви</label>
        <select name="type-shoes" id="type-shoes">
            <optgroup>
                <option value="sneakers" selected>кроссовки</option>
                <option value="sapogi">сапоги</option>
            </optgroup>
        </select>
        <label for="size-shoes">Размер обуви</label>
        <select name="size-shoes" id="size-shoes">
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="43">43</option>
        </select>
        <input type="number" name="qual-shoes" id="qual-shoes" placeholder="приход\расход" required>
        <input type="submit" name="submit-shoes" id="submit-shoes">
    </form>
    
    <!-- <script src="js/size-shoes.js"></script> -->
</body>
</html>