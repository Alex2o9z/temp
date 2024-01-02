<div class="button-add-student">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Thêm món ăn</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm Món ăn</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="baidangadd.php" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="img" class="form-label">Ảnh món ăn:</label>
              <input type="file" class="form-control" id="img" accept=".jpg, .png, .jpeg .webp" name="img" required>
            </div>
            <div class="mb-3">
              <label for="Tenmonan" class="form-label">Tên món ăn:</label>
              <input type="text" class="form-control" id="Tenmonan" name="Tenmonan" required>
            </div>
            <div class="mb-3">
        <label for="ID_nguoidung" class="form-label">ID người dùng:</label>
        <input type="text" class="form-control" id="ID_nguoidung" name="ID_nguoidung" required>
      </div>
            <div class="mb-3">
              <label for="ID_thucphamchinh" class="form-label">Thực phẩm chính:</label>
              <input type="text" class="form-control" id="ID_thucphamchinh" name="ID_thucphamchinh">
            </div>
            <div class="mb-3">
              <label for="nguyenlieu1" class="form-label">Nguyên liệu 1:</label>
              <input type="file" class="form-control" id="nguyenlieu1" name="nguyenlieu1">
            </div>
            <div class="mb-3">
              <label for="nguyenlieu2" class="form-label">Nguyên liệu 2:</label>
              <input type="file" class="form-control" id="nguyenlieu2" name="nguyenlieu2">
            </div>
            <div class="mb-3">
              <label for="nguyenlieu3" class="form-label">Nguyên liệu 3:</label>
              <input type="file" class="form-control" id="nguyenlieu3" name="nguyenlieu3">
            </div>
            <div class="mb-3">
              <label for="nguyenlieu4" class="form-label">Nguyên liệu 4:</label>
              <input type="file" class="form-control" id="nguyenlieu4" name="nguyenlieu4">
            </div>
            <div class="mb-3">
              <label for="nguyenlieu5" class="form-label">Nguyên liệu 5:</label>
              <input type="file" class="form-control" id="nguyenlieu5" name="nguyenlieu5">
            </div>
            <div class="mb-3">
              <label for="nguyenlieu6" class="form-label">Nguyên liệu 6:</label>
              <input type="file" class="form-control" id="nguyenlieu6" name="nguyenlieu6">
            </div>
            <div class="mb-3">
              <label for="Motamonan" class="form-label">Mô tả món ăn:</label>
              <textarea class="form-control" id="Motamonan" name="Motamonan" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="Thoigianchuanbi" class="form-label">Thời gian chuẩn bị:</label>
              <input type="text" class="form-control" id="Thoigianchuanbi" name="Thoigianchuanbi">
            </div>
            <div class="mb-3">
              <label for="Nguyenlieu" class="form-label">Nguyên liệu:</label>
              <textarea class="form-control" id="Nguyenlieu" name="Nguyenlieu" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="Thoigianlam" class="form-label">Thời gian làm:</label>
              <input type="text" class="form-control" id="Thoigianlam" name="Thoigianlam">
            </div>
            <div class="mb-3">
              <label for="Congthuc" class="form-label">Công thức:</label>
              <textarea class="form-control" id="Congthuc" name="Congthuc" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="Video" class="form-label">Link video hướng dẫn (nếu có):</label>
              <input type="text" class="form-control" id="Video" name="Video">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">Thêm món ăn</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>