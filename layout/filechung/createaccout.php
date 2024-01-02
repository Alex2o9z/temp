<?php
    if(isset($_POST['submit'])){
        include 'datalock.php';
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conPass = $_POST['conPass'];
        $phone = $_POST['phonnum'];
        if($pass === $conPass){
            var_dump($userName);
            $requete = $conn->prepare("INSERT INTO nguoidung(ID_nguoidung,Tennguoidung,Email,Matkhau,SDT,quyen)
             VALUES('$userName','$userName','$email','$pass','$phone','customer')");
            $requete->execute();
            header('location:index_login.php');
        }
        else{
            header("location:index_login.php?error=password not found");
        }
    }
?>