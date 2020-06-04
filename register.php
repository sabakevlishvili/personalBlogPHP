<?php
require_once './blocks/dbconnect.php';

$user = $_POST['registerUsername'];
$pass = $_POST['registerPassword'];
$confirmpass = $_POST['confirmRegisterPassword'];
$pattern = ' /^.*(?=.{6,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/ ';

if($pass === $confirmpass) {
    if(preg_match($pattern,$pass)){
        $sql = "INSERT INTO usercredentials (username, password) VALUES ('$user', '$pass')";
        if($connection->query($sql) === TRUE) {
            echo "<p>Your Registration has been succesful!</p>";
        } else {
            echo "Error " . $sql . ' ' . $connect->connect_error;
        }
        $connection->close();
    }
} else {
    echo "<p>Passwords do not match!</p>";
};
?>