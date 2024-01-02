<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm Món Ăn</title>
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
  <?php
  session_start();
  include '../conixion.php';
  $_SESSION["ID_monanduocyeuthich"] = $_GET['ID_monanduocyeuthich'];
  $id = $_SESSION["ID_monanduocyeuthich"];
  $statement = $con->prepare("SELECT * FROM monanduocyeuthich WHERE ID_monanduocyeuthich = :id");
  $statement->bindParam(':id', $id, PDO::PARAM_STR);
  $statement->execute();
  $table = $statement->fetch();
  ?>

  <div class="container w-50">
    <form method="POST" action="monanuuthichupdate.php" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="Tenmonan" class="form-label">Tên món ăn:</label>
        <input type="text" class="form-control" id="Tenmonan" name="Tenmonan" value="<?php echo $table['Tenmonan'] ?>" required>
      </div>
      <div class="mb-3">
        <label for="ID_nguoidung" class="form-label">ID người dùng:</label>
        <input type="text" class="form-control" id="ID_nguoidung" name="ID_nguoidung" value="<?php echo $table['ID_nguoidung']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="ID_thucphamchinh" class="form-label">ID thực phẩm chính:</label>
        <input type="text" class="form-control" id="ID_thucphamchinh" name="ID_thucphamchinh" value="<?php echo $table['ID_thucphamchinh'] ?>">
      </div>

      <div class="mb-3">
        <label for="ID_baidang" class="form-label">ID Bài Đăng:</label>
        <input type="text" class="form-control" id="ID_baidang" name="ID_baidang" value="<?php echo $table['ID_baidang'] ?>">
      </div>

     

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Cập Nhật Món Ăn Yêu Thích</button>
      </div>
    </form>
  </div>

  <script src="../../js/script.js"></script>
  <script src="../../js/bootstrap.bundle.js"></script>
</body>

</html>