<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thêm Truyện</h1>
    </div>

<!-- Content Row -->

    
    <div class="row">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?php echo XuLyThemTruyen ?>"  method="POST" enctype="multipart/form-data">
                    <input id="id_chinhsua"  type="text"  name="id"  hidden >
                        <div class="form-group">
                            <label >Tên Truyện</label>
                            <input type="text" class="form-control" name="ten" required autocomplete="off">
                            <small  class="form-text text-muted">Tên truyện phải là duy nhất không được vượt quá 150 ký tự.</small>
                        </div>
                        <div class="form-group">
                            <label >Hình Truyện</label>
                           <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="hinh" name="hinh" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="hinh">Chọn hình ảnh</label>
                                </div>
                           </div>
                        </div>
                        <div class="form-group">
                            <label >Tác Giả</label>
                            <input type="text" class="form-control" name="tacgia" required>
                        </div>
                        <div class="form-group">
                            <label >Nguồn</label>
                            <input type="text" class="form-control" name="nguon" value="Metal" maxlength="255" required>
                        </div>
                        <div class="form-group">
                            <label >Trạng Thái</label>
                            <select class="form-control" name="trangthai" >
                                <option value="Đang cập nhật">Đang cập nhật</option>
                                <option value="Tạm Ngừng">Tạm Ngừng</option>
                                <option value="Hoàn Thành">Hoàn Thành</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label >Thể Loại</label>
                            <select class="form-control" name="theloai[]" >
                            <?php foreach($data['theloai'] as $val) { ?>
                                <option value="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Giới Thiệu</label>
                            <textarea class="form-control ckeditor" name="gioithieu" id="gioithieu" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu Truyện</button>
                </form>
            </div>
        </div>
    </div>   
</div>




