<?php
session_start();
include '../conixion.php';

if (isset($_POST['submit'])) {
    $id_baidang = $_SESSION['ID_baidang'];
    $image = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];  
    $folder = "../../../Assets/images 2/$image";
        
    if (move_uploaded_file($tempname, $folder)) {
        echo 'Images uploaded successfully';
        
        $Tenmonan = $_POST['Tenmonan'];
        $ID_thucphamchinh = $_POST['ID_thucphamchinh'];
        $nguyenlieu1 = $_POST['nguyenlieu1'];
        $nguyenlieu2 = $_POST['nguyenlieu2'];
        $nguyenlieu3 = $_POST['nguyenlieu3'];
        $nguyenlieu4 = $_POST['nguyenlieu4'];
        $nguyenlieu5 = $_POST['nguyenlieu5'];
        $nguyenlieu6 = $_POST['nguyenlieu6'];
        $Motamonan = $_POST['Motamonan'];
        $Thoigianchuanbi = $_POST['Thoigianchuanbi'];
        $Nguyenlieu = $_POST['Nguyenlieu'];
        $Thoigianlam = $_POST['Thoigianlam'];
        $Congthuc = $_POST['Congthuc'];
        $Video = $_POST['Video'];
    
        if (isset($_SESSION['ID_baidang'])) {
            $id_baidang = $_SESSION['ID_baidang'];
    
            $requete = $con->prepare("UPDATE baidangmonan 
                                     SET 
                                     ID_baidang =:Tenmonan,
                                     Tenmonan = :Tenmonan,
                                     ID_thucphamchinh = :ID_thucphamchinh,
                                     nguyenlieu1 = :nguyenlieu1,
                                     nguyenlieu2 = :nguyenlieu2,
                                     nguyenlieu3 = :nguyenlieu3,
                                     nguyenlieu4 = :nguyenlieu4,
                                     nguyenlieu5 = :nguyenlieu5,
                                     nguyenlieu6 = :nguyenlieu6,
                                     Motamonan = :Motamonan,
                                     Thoigianchuanbi = :Thoigianchuanbi,
                                     Nguyenlieu = :Nguyenlieu,
                                     Thoigianlam = :Thoigianlam,
                                     Congthuc = :Congthuc,
                                     Video = :Video,
                                     anhmon = :image
                                     WHERE ID_baidang = :id_baidang");
    
            $requete->bindParam(':Tenmonan', $Tenmonan, PDO::PARAM_STR);
            $requete->bindParam(':ID_thucphamchinh', $ID_thucphamchinh, PDO::PARAM_STR);
            $requete->bindParam(':nguyenlieu1', $nguyenlieu1, PDO::PARAM_STR);
            $requete->bindParam(':nguyenlieu2', $nguyenlieu2, PDO::PARAM_STR);
            $requete->bindParam(':nguyenlieu3', $nguyenlieu3, PDO::PARAM_STR);
            $requete->bindParam(':nguyenlieu4', $nguyenlieu4, PDO::PARAM_STR);
            $requete->bindParam(':nguyenlieu5', $nguyenlieu5, PDO::PARAM_STR);
            $requete->bindParam(':nguyenlieu6', $nguyenlieu6, PDO::PARAM_STR);
            $requete->bindParam(':Motamonan', $Motamonan, PDO::PARAM_STR);
            $requete->bindParam(':Thoigianchuanbi', $Thoigianchuanbi, PDO::PARAM_STR);
            $requete->bindParam(':Nguyenlieu', $Nguyenlieu, PDO::PARAM_STR);
            $requete->bindParam(':Thoigianlam', $Thoigianlam, PDO::PARAM_STR);
            $requete->bindParam(':Congthuc', $Congthuc, PDO::PARAM_STR);
            $requete->bindParam(':Video', $Video, PDO::PARAM_STR);
            $requete->bindParam(':image', $image, PDO::PARAM_STR);
            $requete->bindParam(':id_baidang', $id_baidang, PDO::PARAM_STR);
    
            $res = $requete->execute();
            
            header("location:baidang_list.php");
        } else {
            echo 'Session ID_baidang is not set.';
        }
    } else {
        echo 'Failed to upload images';
    }
}
?>
