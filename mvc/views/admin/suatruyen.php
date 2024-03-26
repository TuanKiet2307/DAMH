<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sửa Truyện</h1>
    </div>

<!-- Content Row -->

    
    <div class="row">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
           
            <div class="card-body">
                <form action="<?php echo XuLySuaTruyen ?>"  method="POST" enctype="multipart/form-data">
                    <input type="text" name="id" value="<?php echo $data['truyen']['id'] ?>" hidden >
                        <div class="form-group">
                            <label >Tên Truyện</label>
                            <input type="text" class="form-control" name="ten" value="<?php echo $data['truyen']['ten'] ?>" required autocomplete="off" maxlength="150">
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
                            <input type="text" class="form-control" name="tacgia" value="<?php echo $data['truyen']['tacgia'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label >Nguồn</label>
                            <input type="text" class="form-control" name="nguon" maxlength="255" value="<?php echo $data['truyen']['nguon'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label >Trạng Thái</label>
                            <select class="form-control" name="trangthai" >
                                <option value="Đang cập nhật" <?php if($data['truyen']['trangthai'] == 'Đang cập nhật') echo'selected'; ?>>Đang cập nhật</option>
                                <option value="Tạm Ngừng" <?php if($data['truyen']['trangthai'] == 'Tạm Ngừng') echo'selected'; ?>>Tạm Ngừng</option>
                                <option value="Hoàn Thành" <?php if($data['truyen']['trangthai'] == 'Hoàn Thành') echo'selected'; ?>>Hoàn Thành</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label >Thể Loại</label>
                            <select class="form-control" name="theloai[]" >
                            <?php foreach($data['theloai'] as $val) { ?>
                            <?php if(count($data['truyen_tl']) > 0 ) { ?>
                            <?php foreach($data['truyen_tl'] as $val_2) { ?>
                                <option value="<?php echo $val['ten'] ?>" <?php if($val['ten'] == $val_2['ten']){echo 'selected';} ?>><?php echo $val['ten'] ?></option>
                            <?php } ?>
                            <?php }else{ ?>
                                <option value="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></option>
                            <?php }} ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Giới Thiệu</label>
                            <textarea class="form-control ckeditor" name="gioithieu" id="gioithieu" rows="3"><?php echo $data['truyen']['gioithieu'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                </form>
            </div>
        </div>
    </div>   
</div>


