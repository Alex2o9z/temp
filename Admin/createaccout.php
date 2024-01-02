<?php
    if(isset($_POST['submit'])){
        include './pages/conixion.php';
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conPass = $_POST['conPass'];
        $phone = $_POST['phonnum'];
        if($pass === $conPass){
            var_dump($userName);
            $requete = $con->prepare("INSERT INTO nguoidung(ID_nguoidung,Tennguoidung,Email,Matkhau,SDT,quyen)
             VALUES('$userName','$userName','$email','$pass','$phone','admin')");
            $requete->execute();
            header('location:index.php');
        }
        else{
            header("location:index.php?error=password not found");
        }
    }
?>