<?php
if (isset($_POST['submit'])){
    include 'datalock.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $requete = "SELECT * FROM nguoidung WHERE Tennguoidung = '$username' and Email = '$email'";
    $statment = $conn -> prepare($requete);
    $statment -> execute();
    $result = $statment -> fetch();
    if ($username == $result['username'] && $email == $result['Email']){
        echo $result['username'];
        echo $result['Email'];
    }
    }
?>