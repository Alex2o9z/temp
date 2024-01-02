<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/style.css">
    <link rel="stylesheet" href="./Assets/css/footer.css">
    <link rel="stylesheet" href="./Assets/css/responsive.css">
    <link rel="stylesheet" href="./Assets/css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Document</title>
</head>
<?php include "./Admin/data/connect.php"   ?>
<body>
    <div id="meal">
    <?php 
    include "./layout/filechung/menu.php";
    include "./layout/food/banner.php";
    include "./layout/food/profo.php";
    include "./layout/filechung/footer.php";
    ?>    
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>
<script src="./Assets/js/profo.js"></script>
<script src="./Assets/js/food.js"></script>
<script src="./Assets/js/header.js"></script>
<script src="./Assets/js/layout.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./Assets/js/comment.js"></script>
 
</html>