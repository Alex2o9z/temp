<?php
include '../conixion.php';

$id_monanduocyeuthich = $_GET['ID_monanduocyeuthich'];

$stmt_delete_favorite = $con->prepare("DELETE FROM monanduocyeuthich WHERE ID_monanduocyeuthich = :id_monanduocyeuthich");
$stmt_delete_favorite->bindParam(':id_monanduocyeuthich', $id_monanduocyeuthich, PDO::PARAM_STR);
$stmt_delete_favorite->execute();



header('location:monanuuthich_list.php');
?>
