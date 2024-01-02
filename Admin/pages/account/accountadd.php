<?php 
    include '../conixion.php';
    if(isset($_POST['submit'])){
    $image = $_FILES['img']['name'];
    $tempname = $_FILES['img']['tmp_name'];  
    $folder = "../../assets/img/$image";
    
    if(move_uploaded_file($tempname, $folder)){
        echo 'Images uploaded successfully';
    } else {
        echo 'Failed to upload images';
    }

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];

    include '../conixion.php';
    
    $requete = $con->prepare("INSERT INTO `nguoidung` (`ID_nguoidung`,`Tennguoidung`, `anhdaidien`, `Email`, `Matkhau`, `SDT`, `quyen`) 
                             VALUES (:Name,:Name, :image, :Email, NULL, :Phone, 'customer') ");

    $requete->bindParam(':Name', $Name, PDO::PARAM_STR);
    $requete->bindParam(':image', $image, PDO::PARAM_STR);
    $requete->bindParam(':Email', $Email, PDO::PARAM_STR);
    $requete->bindParam(':Phone', $Phone, PDO::PARAM_STR);

    $requete->execute();
    
    header('location:account_list.php');
}
    ?>