<?php
// Connect to the database
$mysqli = new mysqli("localhost", "root", null, "primehairdatabase");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

if (isset($_POST["submit"])){
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname'];
    $first = $_POST['1st'];
    $second = $_POST['2nd'];
    $third = $_POST['3rd'];
    $forth = $_POST['4th'];
    //if (isset($_POST['disabled'])){
        //$is_disabled = 1;
    //} else {
        //$is_disabled = 0;
    //}

    $insert_sql = "INSERT INTO survey(firstname, lastname, firstquestion, secondquestion, thirdquestion, forthquestion)
     VALUES  ('$firstname', '$lastname', '$first', '$second', '$third', '$forth')";
  
    $result = $mysqli->query($insert_sql);

    if (!$result){
        echo "Insert failed!<br/>";
        echo $mysqli->error;
    }
    else{
        header('Location: mainpagewhenloggedin.php');
    }
}
?>