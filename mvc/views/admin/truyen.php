<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh Sách Truyện</h1>
    </div>

<!-- Content Row -->

    
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
                                <th>HÌNH</th>
                                <th>TÊN TRUYỆN</th>
                                <th>TÁC GIẢ</th>
                                <th>TRẠNG THÁI</th>
                                <th>SỐ CHƯƠNG</th>
                                <th>ĐÁNH GIÁ</th>
                                <th>THỂ LOẠI</th>
                                <th>CẬP NHẬT</th>
                                <th>HÀNH ĐỘNG</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $stt=1 ;foreach($data['truyen'] as $val) { ?>
                            <tr>
                                <td> <?php echo $stt ?></td>
                                <td><img src="<?php storage_patch($val['hinh']) ?>" width="45" height="63"></td>
                                <td><?php echo $val['ten'] ?></td>
                                <td><?php echo $val['tacgia'] ?></td>
                                <td><?php echo $val['trangthai'] ?></td>
                                <td><?php echo $val['chuong'] ?></td>
                                <td><?php echo $val['danhgia'] ?></td>
                                <td><?php getTheLoai($val['id']) ?></td>
                                <td><span class="tag tag-success"><?php echo DateToTime($val['capnhat']) ?></span></td>
                                <td>
                                    <a class="btn" href="<?php echo DanhSachChuong.'/'.$val['ten_khongdau'] ?>" ><i class="fas fa-list"></i></a>
                                    <a class="btn" href="<?php echo SuaTruyen.'/'.$val['ten_khongdau'] ?>" ><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo XuLyXoaTruyen.'/'.$val['id'] ?>" class="btn" onclick="return confirm('Bạn có muốn xóa truyện [<?php echo $val['ten'] ?>] ?')"><i class="fas fa-trash-alt"></i></a>
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


