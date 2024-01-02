<?php
include '../conixion.php';

if (isset($_POST['submit'])) {
    try {
        $Tenmonan = $_POST['Tenmonan'];
        $ID_nguoidung = $_POST['ID_nguoidung'];
        $ID_thucphamchinh = $_POST['ID_thucphamchinh'];
        $ID_baidang = $_POST['ID_baidang'];

        $requete = $con->prepare("INSERT INTO `monanduocyeuthich` 
            (ID_monanduocyeuthich, ID_nguoidung, ID_thucphamchinh, ID_baidang, Tenmonan) 
            VALUES (:ID_baidang, :ID_nguoidung, :ID_thucphamchinh, :ID_baidang, :Tenmonan)");

        $requete->bindParam(':ID_nguoidung', $ID_nguoidung, PDO::PARAM_STR);
        $requete->bindParam(':ID_thucphamchinh', $ID_thucphamchinh, PDO::PARAM_STR);
        $requete->bindParam(':ID_baidang', $ID_baidang, PDO::PARAM_STR);
        $requete->bindParam(':Tenmonan', $Tenmonan, PDO::PARAM_STR);

        $res = $requete->execute();

        if ($res) {
            header('location:monanuuthich_list.php');
        } else {
            echo 'Failed to insert data into the database';
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage(); // Output detailed error message
    }
}
?>
