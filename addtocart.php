<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "primehairdatabase");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

if (isset($_POST["addtocart"])){
    $no = $_POST['no']; 
    
    
    $select_sql = "SELECT no FROM products WHERE no='{$no}'";
    
    $result = $mysqli->query($select_sql);
    
    
    if ($result->num_rows == 0){
        
        echo "Add To Cart Failed";
        echo $mysqli->error;
        
        
    }
    else{
        $no = $_POST['no']; 
        $insert_sql = "INSERT INTO `addtocart`(`no`) VALUES ('$no')";
        $result = $mysqli->query($insert_sql);
        if (!$result){
            echo "Insert failed!<br/>";
            echo $mysqli->error;
        }
        else{
            header('Location: product.php');
        }

    }
}
?>