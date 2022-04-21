<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "primehairdatabase");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

if (isset($_POST["login"])){
    $username = $_POST['username']; 
    $password = $_POST['password'];
    
    $select_sql = "SELECT username, password FROM user WHERE username='{$username}' AND password='{$password}'";
    
    $result = $mysqli->query($select_sql);
    
    

    if ($result->num_rows == 0){
        
        echo "Login Failed";
        echo $mysqli->error;
        
        
    }
    else{
        header('Location: mainpagewhenloggedin.php');

    }
}
?>