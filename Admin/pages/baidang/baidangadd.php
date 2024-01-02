<?php
include '../conixion.php';

if (isset($_POST['submit'])) {
    $image = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];
    $folder = "../../../Assets/images 2/$image";

    if (move_uploaded_file($tempname, $folder)) {
        echo 'Image uploaded successfully';
    } else {
        echo 'Failed to upload image';
    }

    $Tenmonan = $_POST['Tenmonan'];
    $ID_nguoidung = $_POST['ID_nguoidung'];
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

    $requete = $con->prepare("INSERT INTO `baidangmonan` 
    (`ID_baidang`, `ID_nguoidung`, `ID_thucphamchinh`, `Tenmonan`, `anhmon`, 
     `nguyenlieu1`, `nguyenlieu2`, `nguyenlieu3`, `nguyenlieu4`, 
     `nguyenlieu5`, `nguyenlieu6`, `Motamonan`, `Thoigianchuanbi`, 
     `Nguyenlieu`, `Thoigianlam`, `Congthuc`, `Video`, `Trangthai`) 
    VALUES (:Tenmonan, :ID_nguoidung, :ID_thucphamchinh, :Tenmonan, :image, 
            :nguyenlieu1, :nguyenlieu2, :nguyenlieu3, :nguyenlieu4, 
            :nguyenlieu5, :nguyenlieu6, :Motamonan, :Thoigianchuanbi, 
            :Nguyenlieu, :Thoigianlam, :Congthuc, :Video, 'process')");

$requete->bindParam(':ID_nguoidung', $ID_nguoidung, PDO::PARAM_STR);
$requete->bindParam(':ID_thucphamchinh', $ID_thucphamchinh, PDO::PARAM_STR);
$requete->bindParam(':Tenmonan', $Tenmonan, PDO::PARAM_STR);
$requete->bindParam(':image', $image, PDO::PARAM_STR);
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

$res = $requete->execute();

    if ($res) {
        header('location:baidang_list.php');
    } else {
        echo 'Failed to insert data into database';
    }
}
