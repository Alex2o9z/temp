<div class="button-add-student">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Thêm Món ăn được yêu thích</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Món ăn được yêu thích</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="monanuuthichadd.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="ID_nguoidung" class="col-form-label">ID Nguoidung:</label>
                            <input type="text" class="form-control" id="ID_nguoidung" name="ID_nguoidung">
                        </div>
                        <div class="mb-3">
                            <label for="ID_thucphamchinh" class="col-form-label">ID Thucphamchinh:</label>
                            <input type="text" class="form-control" id="ID_thucphamchinh" name="ID_thucphamchinh">
                        </div>
                        <div class="mb-3">
                            <label for="ID_baidang" class="col-form-label">ID Baidang:</label>
                            <input type="text" class="form-control" id="ID_baidang" name="ID_baidang">
                        </div>
                        <div class="mb-3">
                            <label for="Tenmonan" class="col-form-label">Tenmonan:</label>
                            <input type="text" class="form-control" id="Tenmonan" name="Tenmonan">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Thêm Món ăn được yêu thích</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
