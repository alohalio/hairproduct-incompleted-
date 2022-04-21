<!DOCTYPE html>
<html>
    <head>
        <?php
            include("nav_bar.php");
        ?>
    </head>
    <body>
        <link rel = "stylesheet" href = "cart.css">
        <div id = "add">
            <?php
            // Connect to the database
            $mysqli = new mysqli("localhost", "root", null, "primehairdatabase");

            if ($mysqli->connect_errno) {
            echo $mysqli->connect_error;
            }

            $result = 'SELECT products.no, name, size, price FROM products, addtocart WHERE products.no=addtocart.no';
            $result1 = $mysqli->query($result);
            if ($result1){
                while($row=$result1->fetch_array()){
                echo "<tr>";
                echo "<td>" . $row["no"] . "</td><br>";
                echo "<td>" . $row["name"] . "</td><br>";
                echo "<td>" . $row["size"] . "</td><br>";
                echo "<td>" . $row["price"] . "</td><br>";
                echo "<br>";
                }
            /*while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $no = htmlspecialchars($row['no']);
                $name = htmlspecialchars($row['name']);
                $size = htmlspecialchars($row['size']);
                $price = htmlspecialchars($row['price']);
                echo '<a href="cart.php?no=' . $no . '">' . $name . '">' . $size . '">' . $price .'</a><br>';*/
            }
            else {
                echo "Error:" . $mysqli->error;
            }
            ?>
        
            <div id = "paybutton">
                        <a href ="customeraddress.php">
                            <input type="submit" value = "Pay Now" name="paynow">
                        </a>
        </div>
    </body