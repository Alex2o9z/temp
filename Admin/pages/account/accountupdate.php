<?php
session_start();
$id = $_SESSION['ID_nguoidung'];
include '../conixion.php';
if (isset($_POST['submit'])){
    $image = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];  
    $folder = "../../assets/img/$image";
        
    if (move_uploaded_file($tempname, $folder)) {
        echo 'Images uploaded successfully';
    
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
    
        include '../conixion.php';
    
        // Kiểm tra xem có giá trị cho $_SESSION['ID_nguoidung'] hay không
        if (isset($_SESSION['ID_nguoidung'])) {
            $id = $_SESSION['ID_nguoidung'];
    
            $requete = $con->prepare("UPDATE nguoidung 
                                     SET 
                                     Tennguoidung = :Name,
                                     Email = :Email,
                                     SDT = :Phone,
                                     anhdaidien = :image
                                     WHERE ID_nguoidung = :id");
    
            $requete->bindParam(':Name', $Name, PDO::PARAM_STR);
            $requete->bindParam(':Email', $Email, PDO::PARAM_STR);
            $requete->bindParam(':Phone', $Phone, PDO::PARAM_STR);
            $requete->bindParam(':image', $image, PDO::PARAM_STR);
            $requete->bindParam(':id', $id, PDO::PARAM_STR);
    
            // Bind hình ảnh nếu nó tồn tại
            if (!empty($image)) {
                $requete->bindParam(':image', $image, PDO::PARAM_STR);
            }
    
            $res = $requete->execute();
            
            header("location:account_list.php");
        } else {
            echo 'Session ID_nguoidung is not set.';
        }
    } else {
        echo 'Failed to upload images';
    }
}    
?>