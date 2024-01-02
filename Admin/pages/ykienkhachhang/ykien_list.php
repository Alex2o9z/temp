<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studens_list</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "../component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
        <?php 
            include "../component/header.php";
        ?>
          
        
            <!-- start student list table -->
            <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th>Tên món ăn</th>
                            <th>Họ và tên</th>
                            <th>Bài đăng cần ý kiến </th>
                            <th>Đánh giá</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include '../conixion.php';
                          $result = $con -> query("SELECT * FROM donggopykien ");
                          foreach($result as $value):
                        ?>
                      <tr class="bg-white align-middle">
                                <td><?php echo $value['Tenmonan'] ?></td>
                                <td><?php echo $value['Hovaten'] ?></td>
                                <td><?php echo $value['Baidangcanykien'] ?></td>
                                <td><?php echo $value['Noidungykien'] ?></td>
                                
                                <td class="d-md-flex gap-3 mt-3">
                                
                                  <a href="ykienremove.php?ID_donggopykien=<?php echo $value['ID_donggopykien']?>"><i class="far fa-trash"></i></i></a>
                                </td>
                        </tr> 

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- end student list table -->
        </div>
        <!-- end content page -->
    </main>
    <script src="../../js/script.js"></script>
    <script src="../../js/bootstrap.bundle.js"></script>
</body>

</html>
