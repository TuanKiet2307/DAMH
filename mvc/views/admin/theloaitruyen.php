<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thể Loại Truyện</h1>
    </div>

<!-- Content Row -->

    <div class="row">
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
             
                <div class="card-body">
                    <form action="<?php echo XuLyThemTheLoaiTruyen ?>"  method="POST">
                        <div class="form-group">
                            <label for="ten">Tên Thể Loại</label>
                            <input type="text" class="form-control" name="ten" id="ten" required autocomplete="off">
                            <small id="emailHelp" class="form-text text-muted">Tên thể loại phải là duy nhất không được trùng.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
             
                <div class="card-body">
                    <form action="<?php echo XuLySuaTheLoaiTruyen ?>"  method="POST">
                    <input id="id_chinhsua"  type="text"  name="id"  hidden >
                        <div class="form-group">
                            <label for="ten">Tên Thể Loại</label>
                            <input type="text" class="form-control" name="ten" id="ten_chinhsua" required autocomplete="off">
                            <small id="emailHelp" class="form-text text-muted">Tên thể loại phải là duy nhất không được trùng.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
           
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>THỂ LOẠI</th>
                                <th>THỂ LOẠI KHÔNG DẤU</th>
                                <th>NGÀY TẠO</th>
                                <th>HÀNH ĐỘNG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt=1; foreach($data['theloai'] as $val) { ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $val['ten'] ?></td>
                                <td><?php echo $val['ten_khongdau'] ?></td>
                                <td><?php echo DateToTime($val['ngaytao']) ?></td>
                                <td>
                                    <button class="btn" onclick="ChinhSua('<?php echo $val['id'] ?>','<?php echo $val['ten'] ?>')" ><i class="fas fa-edit"></i></button>
                                    <a href="<?php echo XuLyXoaTheLoaiTruyen.'/'.$val['id'] ?>" class="btn" onclick="return confirm('Bạn có muốn xóa thể loại [<?php echo $val['ten']?>]?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>    
                            <?php $stt++; } ?>          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>   
</div>
<script type="text/javascript">
    function ChinhSua(id, ten){
        document.getElementById('id_chinhsua').value = id;
        document.getElementById('ten_chinhsua').value = ten;
    }
</script>

