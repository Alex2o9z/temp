<?php 
    include '../conixion.php';
    $id = $_GET['ID_nguoidung'];

    if(isset($id)){
        $id = $_GET['ID_nguoidung'];

    $stmt = $con->prepare("DELETE FROM nguoidung WHERE ID_nguoidung = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->execute();

    }
    header('location:account_list.php');
?>