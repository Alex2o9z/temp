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
  $_SESSION["ID_baidang"] = $_GET['ID_baidang'];
  $id = $_SESSION["ID_baidang"];
  $statement = $con->prepare("SELECT * FROM baidangmonan WHERE ID_baidang = :id");
  $statement->bindParam(':id', $id, PDO::PARAM_STR);
  $statement->execute();
  $table = $statement->fetch();
  ?>

  <div class="container w-50">
    <form method="POST" action="baidangupdate.php" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="img" class="form-label">Ảnh món ăn:</label>
        <input type="file" class="form-control" id="img" accept=".jpg, .png, .jpeg .webp" name="img">
      </div>
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
        <label for="nguyenlieu1" class="form-label">Nguyên liệu 1:</label>
        <input type="text" class="form-control" id="nguyenlieu1" name="nguyenlieu1" value="<?php echo $table['nguyenlieu1'] ?>">
      </div>

      <div class="mb-3">
        <label for="nguyenlieu2" class="form-label">Nguyên liệu 2:</label>
        <input type="text" class="form-control" id="nguyenlieu2" name="nguyenlieu2" value="<?php echo $table['nguyenlieu2'] ?>">
      </div>

      <div class="mb-3">
        <label for="nguyenlieu3" class="form-label">Nguyên liệu 3:</label>
        <input type="text" class="form-control" id="nguyenlieu3" name="nguyenlieu3" value="<?php echo $table['nguyenlieu3'] ?>">
      </div>

      <div class="mb-3">
        <label for="nguyenlieu4" class="form-label">Nguyên liệu 4:</label>
        <input type="text" class="form-control" id="nguyenlieu4" name="nguyenlieu4" value="<?php echo $table['nguyenlieu4'] ?>">
      </div>

      <div class="mb-3">
        <label for="nguyenlieu5" class="form-label">Nguyên liệu 5:</label>
        <input type="text" class="form-control" id="nguyenlieu5" name="nguyenlieu5" value="<?php echo $table['nguyenlieu5'] ?>">
      </div>

      <div class="mb-3">
        <label for="nguyenlieu6" class="form-label">Nguyên liệu 6:</label>
        <input type="text" class="form-control" id="nguyenlieu6" name="nguyenlieu6" value="<?php echo $table['nguyenlieu6'] ?>">
      </div>

      <div class="mb-3">
        <label for="Motamonan" class="form-label">Mô tả món ăn:</label>
        <textarea class="form-control" id="Motamonan" name="Motamonan" rows="3"><?php echo $table['Motamonan'] ?></textarea>
      </div>

      <div class="mb-3">
        <label for="Thoigianchuanbi" class="form-label">Thời gian chuẩn bị:</label>
        <input type="text" class="form-control" id="Thoigianchuanbi" name="Thoigianchuanbi" value="<?php echo $table['Thoigianchuanbi'] ?>">
      </div>

      <div class="mb-3">
        <label for="Nguyenlieu" class="form-label">Nguyên liệu:</label>
        <textarea class="form-control" id="Nguyenlieu" name="Nguyenlieu" rows="3"><?php echo $table['Nguyenlieu'] ?></textarea>
      </div>

      <div class="mb-3">
        <label for="Thoigianlam" class="form-label">Thời gian làm:</label>
        <input type="text" class="form-control" id="Thoigianlam" name="Thoigianlam" value="<?php echo $table['Thoigianlam'] ?>">
      </div>

      <div class="mb-3">
        <label for="Congthuc" class="form-label">Công thức:</label>
        <textarea class="form-control" id="Congthuc" name="Congthuc" rows="3"><?php echo $table['Congthuc'] ?></textarea>
      </div>

      <div class="mb-3">
        <label for="Video" class="form-label">Link video hướng dẫn (nếu có):</label>
        <input type="text" class="form-control" id="Video" name="Video" value="<?php echo $table['Video'] ?>">
      </div>
      <div class="mb-3">
        <label for="Trangthai" class="form-label">Trạng thái:</label>
        <select class="form-control" id="Trangthai" name="Trangthai">
          <option value="accept" <?php echo ($table['Trangthai'] === 'accept') ? 'selected' : ''; ?>>Chấp nhận</option>
          <option value="process" <?php echo ($table['Trangthai'] === 'process') ? 'selected' : ''; ?>>Đang xử lý</option>
        </select>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Cập Nhật Món Ăn</button>
      </div>
    </form>
  </div>

  <script src="../../js/script.js"></script>
  <script src="../../js/bootstrap.bundle.js"></script>
</body>

</html>