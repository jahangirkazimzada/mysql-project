<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <?php
        include "connect_db.php";
        $sql = "SELECT * FROM workers";
        $list = $conn -> query($sql);
    ?>
    <div class="form-control">
        <form action = "insert_table.php" method="POST">
            <label for="insert-name">Name:</label>
            <input type="text" name = "form_name" required><br><br>

            <label for="insert-surname">Surname:</label>
            <input type="text" name = "form_surname" required><br><br>


            <label for="insert-age">Age:</label>
            <input type="text" name = "form_age" required><br><br>

            <label for="insert-age">City:</label>
            <input type="text" name = "form_city" required><br><br>
            <button type="submit" name = "submit_button">Insert</button>
        </form>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Surname</th>
                    
                    <th>Age</th>
                    <th>City</th>
                    <th>PersonId</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $list -> fetch_assoc()): ?>
                    <tr class = "row">
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["surname"] ?></td>
                        
                        <td><?php echo $row["age"] ?></td>
                        <td><?php echo $row["city"] ?></td>
                        <td><?php echo $row["personId"] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script>
        document.querySelectorAll(".row") . forEach((element, index) => {
            if((index += 1) % 2 !== 0){
                element.style.cssText = "background-color: black; color: white;";
            }
        })
    </script>
</body>
</html>