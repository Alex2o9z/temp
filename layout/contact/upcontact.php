<?php
// Include your database connection file (modify the path as needed)
include './Admin/conixion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Tenmonan = $_POST['name'];
    $Hovaten = $_POST['name'];
    $Email = $_POST['email'];
    $Baidangcanykien = $_POST['url'];
    $Noidungykien = $_POST['message'];

    $requete = $con->prepare("INSERT INTO donggopykien (Tenmonan, Hovaten, Email, Baidangcanykien, Noidungykien) 
                             VALUES (:Tenmonan, :Hovaten, :Email, :Baidangcanykien, :Noidungykien)");

    $requete->bindParam(':Tenmonan', $Tenmonan, PDO::PARAM_STR);
    $requete->bindParam(':Hovaten', $Hovaten, PDO::PARAM_STR);
    $requete->bindParam(':Email', $Email, PDO::PARAM_STR);
    $requete->bindParam(':Baidangcanykien', $Baidangcanykien, PDO::PARAM_STR);
    $requete->bindParam(':Noidungykien', $Noidungykien, PDO::PARAM_STR);

    $result = $requete->execute();

    if ($result) {
        echo 'Data inserted successfully.';
    } else {
        echo 'Failed to insert data into the database.';
    }
} else {
    echo 'Invalid request method.';
}
?>
