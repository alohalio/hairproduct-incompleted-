<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "primehairdatabase");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

if (isset($_POST["signup"])){
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //if (isset($_POST['disabled'])){
        //$is_disabled = 1;
    //} else {
        //$is_disabled = 0;
    //}

    $insert_sql = "INSERT INTO user(firstname, lastname, email, username, password)
     VALUES  ('$firstname', '$lastname', '$email', '$username', '$password')";
  
    $result = $mysqli->query($insert_sql);

    if (!$result){
        echo "Insert failed!<br/>";
        echo $mysqli->error;
    }
    else{
        header('Location: surv.php');
    }
}
?>