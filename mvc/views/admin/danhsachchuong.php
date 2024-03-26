<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $data['truyen']['ten'] ?></h1>
    </div>

<!-- Content Row -->

    <div class="row">
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
             
                <div class="card-body">
                    <form action="<?php echo XuLyDangChuong ?>"  method="POST">
                        <input type="text" name="truyen_id" value="<?php echo $data['truyen']['id'] ?>" hidden>
                        <input type="text" name="ten_khongdau" value="<?php echo $data['truyen']['ten_khongdau'] ?>" hidden>
                        <div class="form-group">
                            <label for="ten">Tên Chương</label>
                            <input type="text" class="form-control" name="ten" id="ten" value="Chương <?php echo $data['truyen']['chuong'] + 1 ?>:" required autocomplete="off">
                        </div>
                        <div class="form-group" >
                            <label >Nội Dung</label>
                            <textarea class="form-control " name="noidung" id="noidung" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu Chương</button>
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
                    <form action="<?php echo XuLySuaChuong ?>"  method="POST">
                    <input id="id_chinhsua"  type="text"  name="chuong_id"  hidden >
                    <input type="text" name="ten_khongdau" value="<?php echo $data['truyen']['ten_khongdau'] ?>" hidden>
                        <div class="form-group">
                            <label for="ten">Tên Chương</label>
                            <input type="text" class="form-control" name="ten" id="ten_chinhsua" required autocomplete="off">
                        </div>
                        <div class="form-group" >
                            <label >Nội Dung</label>
                            <textarea class="form-control " name="noidung" id="noidung_chinhsua" rows="3"></textarea>
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
                                <th>TÊN CHƯƠNG</th>
                                <th>TÊN CHƯƠNG KHÔNG DẤU</th>
                                <th>CẬP NHẬT</th>
                                <th>HÀNH ĐỘNG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt=1; foreach($data['chuong'] as $val) { ?>
                            <tr>
                                <td><?php echo $stt ?></td>
                                <td><?php echo $val['ten'] ?></td>
                                <td><?php echo $val['ten_khongdau'] ?></td>
                                <td><?php echo DateToTime($val['capnhat']) ?></td>                   
                                <td>
                                    <button class="btn" onclick="ChinhSua('<?php echo $val['id'] ?>', '<?php echo $val['ten'] ?>', '<?php echo htmlspecialchars(json_encode($val['noidung']), ENT_QUOTES, 'UTF-8'); ?>')" ><i class="fas fa-edit"></i></button>
                                    <a href="<?php echo XuLyXoaChuong.'/'.$data['truyen']['ten_khongdau'].'/'.$val['id'] ?>" class="btn" onclick="return confirm('Bạn có muốn xóa thể loại [<?php echo $val['ten']?>]?')"><i class="fas fa-trash-alt"></i></a>
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
    function ChinhSua(id, ten, noidung){
        document.getElementById('id_chinhsua').value = id;
        document.getElementById('ten_chinhsua').value = ten;
        var noidungconvert = noidung.replace(/\"/g, '');
        document.getElementById('noidung_chinhsua').innerHTML = noidungconvert ;
    }
</script>









