<?php
session_start();
if (isset($_POST['submit'])) {
    include 'datalock.php';
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $requete = "SELECT * FROM nguoidung WHERE Email = '$email' and Matkhau = '$password' and  quyen = 'customer'";
    $statment = $conn->prepare($requete);
    
    $statment->execute();
    $result = $statment->fetch();

    if ($result['Email'] === $email && $result['Matkhau'] === $password) {
        $_SESSION['Ten'] = $result['Tennguoidung'];
        $_SESSION['email'] = $result['Email'];
        $_SESSION['password'] = $result['Matkhau'];

        if (isset($_POST['check'])) {
            setcookie('email', $_SESSION['email'], time() + 3600);
            setcookie('password', $_SESSION['password'], time() + 3600);
        }

        header("location:../../index.php");
    } else if (empty($email) || empty($password)) {
        header("location:./index_login.php?error=please enter your email or password");
    } else {
        header("location:./index_login.php?error=email or password not found");
    }
}
?>