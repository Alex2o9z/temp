<?php
session_start();
include '../conixion.php';

if (isset($_POST['submit'])) {
    $ID_monanduocyeuthich = $_SESSION['ID_monanduocyeuthich'];
    $Tenmonan = $_POST['Tenmonan'];
    $ID_nguoidung = $_POST['ID_nguoidung'];  //
    $ID_thucphamchinh = $_POST['ID_thucphamchinh'];
    if (isset($_SESSION['ID_monanduocyeuthich'])) {
        $ID_monanduocyeuthich = $_SESSION['ID_monanduocyeuthich'];

        $requete = $con->prepare("UPDATE monanduocyeuthich 
            SET 
            ID_nguoidung = :ID_nguoidung,
            ID_thucphamchinh = :ID_thucphamchinh,
            Tenmonan = :Tenmonan
            WHERE ID_monanduocyeuthich = :ID_monanduocyeuthich");

        $requete->bindParam(':ID_nguoidung', $ID_nguoidung, PDO::PARAM_STR);
        $requete->bindParam(':ID_thucphamchinh', $ID_thucphamchinh, PDO::PARAM_STR);
        $requete->bindParam(':Tenmonan', $Tenmonan, PDO::PARAM_STR);
        $requete->bindParam(':ID_monanduocyeuthich', $ID_monanduocyeuthich, PDO::PARAM_STR);

        $res = $requete->execute();

        header("location:monanuuthich_list.php");  // Update the redirection URL
    } else {
        echo 'Session ID_monanduocuuthich is not set.';
    }
} else {
    echo 'Failed to upload images';
}
