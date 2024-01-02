<?php
include '../conixion.php';

$id_baidang = $_GET['ID_baidang'];

$stmt_delete_favorite = $con->prepare("DELETE FROM monanduocyeuthich WHERE ID_baidang = :id_baidang");
$stmt_delete_favorite->bindParam(':id_baidang', $id_baidang, PDO::PARAM_STR);
$stmt_delete_favorite->execute();

$stmt_delete_baidang = $con->prepare("DELETE FROM baidangmonan WHERE ID_baidang = :id_baidang");
$stmt_delete_baidang->bindParam(':id_baidang', $id_baidang, PDO::PARAM_STR);
$stmt_delete_baidang->execute();



header('location:baidang_list.php');
?>
