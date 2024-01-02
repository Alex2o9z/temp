<?php
include '../conixion.php';

$ID_donggopykien= $_GET['ID_donggopykien'];

$stmt_delete_favorite = $con->prepare("DELETE FROM donggopykien WHERE ID_donggopykien = :ID_donggopykien");
$stmt_delete_favorite->bindParam(':ID_donggopykien', $ID_donggopykien, PDO::PARAM_STR);
$stmt_delete_favorite->execute();



header('location:ykien_list.php');
?>
