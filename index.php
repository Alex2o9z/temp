<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAT</title>


    <link rel="stylesheet" href="./Assets/css/style.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
    <link rel="icon" type="image/x-icon" href="./Assets/Images/chef-icon.png">
    <link rel="stylesheet" href="./Assets/css/comment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/css/responsive.css">
</head>
<?php 
 include "./Admin/data/connect.php";
?>
<body>
    <!-- begin: main -->
    <div id="main">
        <?php
        include "./layout/filechung/menu.php";
        include "./layout/index/slider.php";
        include "./layout/index/WWD.php";
        include "./layout/index/favorite__food.php";
        include "./layout/index/comment__container.php";
        include "./layout/filechung/footer.php";
        ?>
    </div>
    <?php

    ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>
<script src="./Assets/js/profo.js"></script>
<script src="./Assets/js/header.js"></script>
<script src="./Assets/js/layout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./Assets/js/comment.js"></script>

</html>