<?php
    class admin extends core{
        function dangky(){
            $this->view('dangky');
        }

        function xulydangky(){
            if($this->model("TaiKhoan_Model")->them($_POST['tendangnhap'], $_POST['matkhau']) == 1){
                $this->loginSession($this->model("TaiKhoan_Model")->get($_POST['tendangnhap']));
                return redirect(bangdieukhien);
            }else{
                return redirect(dangky, 'Tên đăng nhập bị trùng');
            }
        }

        function dangnhap(){
            $this->view('dangnhap');
        }

        function XuLyDangNhap(){
            $taikhoan = $this->model("TaiKhoan_Model")->DangNhap($_POST['tendangnhap'], $_POST['matkhau']);
            if($taikhoan == true){
                $this->loginSession($this->model("TaiKhoan_Model")->get($_POST['tendangnhap']));
                return redirect(bangdieukhien);
            }else{
                return redirect(dangnhap, 'Tên đăng nhập hoặc mật khẩu không chính xác');
            }

        }


        function DangXuat(){
            $this->logOut();
            return redirect(APP_URL);
        }


        function bangdieukhien(){
            $this->view('admin', [
                'title'   => 'Bảng Điều Khiển',
                'page'    => 'admin/bangdieukhien',               
            ]);
        }


        function theloaitruyen(){
            $this->view('admin', [
                'title'   => 'Thể Loại Truyện',
                'page'    => 'admin/theloaitruyen',
                'theloai' => $this->model('TheLoaiTruyen_Model')->getAll()
            ]);
        }

        function XuLyThemTheLoaiTruyen(){
            if($this->model("TheLoaiTruyen_Model")->them($_POST['ten']) == 1){
                return redirect(theloaitruyen);
            }else{
                return redirect(theloaitruyen, 'Thể loại truyện bị trùng!');
            }
        }

        function XuLySuaTheLoaiTruyen(){
            $theloai = $this->model("TheLoaiTruyen_Model")->sua($_POST['id'], $_POST['ten']) ;

            if($theloai === 1){
                return redirect(theloaitruyen);
            }else{
                return redirect(theloaitruyen, 'Thể loại truyện bị trùng!');
            }
        }

        function XuLyXoaTheLoaiTruyen($id){
            $theloai = $this->model("TheLoaiTruyen_Model")->xoa($id) ;

            if($theloai === 1){
                return redirect(theloaitruyen);
            }else{
                return redirect(theloaitruyen, 'Lỗi không xác định!');
            }
        }


        function truyen(){
            $this->view('admin', [
                'title'   => 'Danh Sách Truyện',
                'page'    => 'admin/truyen',
                'truyen'    => $this->model("Truyen_Model")->getAll()
            ]);
        }

        function themtruyen(){
            $this->view('admin', [
                'title'   => 'Thêm Truyện',
                'page'    => 'admin/themtruyen',
                'theloai' => $this->model("TheLoaiTruyen_Model")->getAll()
            ]);
        }

        function XuLyThemTruyen(){
            if(isset($_FILES['hinh'])){
                $img_name = Slug($_POST['ten']).'-'.Slug($_POST['tacgia']).'.jpg';
                $img_tmp = $_FILES['hinh']['tmp_name'];
                $patch = "./storage/";

                if(move_uploaded_file($img_tmp, $patch . $img_name)){
                    $hinh = $img_name;
                }else{
                    $hinh = "default.jpg";
                }
            }else{
                $hinh = "default.jpg";
            }
            $truyen = $this->model("Truyen_Model")->them($hinh, $_POST['ten'], $_POST['tacgia'], $_POST['nguon'], $_POST['trangthai'], $_POST['gioithieu']) ;

            if($truyen === 1){
                $truyen_id = $this->model("Truyen_Model")->getID(Slug($_POST['ten']));
                foreach($_POST['theloai'] as $val){
                    $this->model("TruyenTheLoai_Model")->them($truyen_id, $val);
                }
                return redirect(Truyen);
            }else{
                return redirect(ThemTruyen, 'Truyện đã tồn tại!');
            }
        }


        function SuaTruyen($ten_khongdau){
            $truyen = $this->model('Truyen_Model')->get($ten_khongdau);
            $this->view('admin', [
                'title'   => 'Sửa Truyện',
                'page'    => 'admin/suatruyen',
                'truyen'  => $truyen,
                'theloai' => $this->model("TheLoaiTruyen_Model")->getAll(),
                'truyen_tl' => $this->model("TruyenTheLoai_Model")->get($truyen['id'])
            ]);
        }

        function XuLySuaTruyen(){
            if(isset($_FILES['hinh'])){
                $img_name = Slug($_POST['ten']).'-'.Slug($_POST['tacgia']).'.jpg';
                $img_tmp = $_FILES['hinh']['tmp_name'];
                $patch = "./storage/";

                if(move_uploaded_file($img_tmp, $patch . $img_name)){
                    $hinh = $img_name;
                }else{
                    $hinh = "default.jpg";
                }
            }else{
                $hinh = "default.jpg";
            }
            $truyen = $this->model("Truyen_Model")->sua($hinh, $_POST['ten'], $_POST['tacgia'], $_POST['nguon'], $_POST['trangthai'], $_POST['gioithieu'], $_POST['id']);

            if($truyen >= 0 ){
                $truyen_id = $this->model("Truyen_Model")->getID(Slug($_POST['ten']));
                $this->model("TruyenTheLoai_Model")->xoa($truyen_id);
                foreach($_POST['theloai'] as $val){
                    $this->model("TruyenTheLoai_Model")->them($truyen_id, $val);
                }
                return redirect(Truyen);
            }else{
                return redirect(ThemTruyen, 'Truyện đã tồn tại!');
            }          
        }

        function XuLyXoaTruyen($truyen_id){
            $this->model("Chuong_Model")->xoaToanBo($truyen_id);  
            $this->model("TruyenTheLoai_Model")->xoa($truyen_id);  
            $this->model("Truyen_Model")->xoaTruyen($truyen_id);
            return redirect(Truyen);
        }


        function DanhSachChuong($ten_khongdau){
            $truyen = $this->model("Truyen_Model")->get($ten_khongdau);
            $this->view('admin', [
                'title'   => 'Danh Sách Chương',
                'page'    => 'admin/danhsachchuong',
                'truyen'  => $truyen,
                'chuong' => $this->model("Chuong_Model")->get($truyen['id'])
            ]);
        }

        function XuLyDangChuong(){
            $this->model("Chuong_Model")->them($_POST['truyen_id'], $_POST['ten'], $_POST['noidung']);  
            $this->model("Truyen_Model")->capNhatSoChuong($_POST['truyen_id']);
            return redirect(DanhSachChuong.'/'.$_POST['ten_khongdau']);
        }

        function XuLySuaChuong(){
            $this->model("Chuong_Model")->sua($_POST['chuong_id'], $_POST['ten'], $_POST['noidung']);  
            return redirect(DanhSachChuong.'/'.$_POST['ten_khongdau']);
        }

        function XuLyXoaChuong($ten_khongdau, $id){
            $this->model("Chuong_Model")->xoa($id);  
            $truyen = $this->model('Truyen_Model')->get($ten_khongdau);
            $this->model("Truyen_Model")->capNhatXoaChuong($truyen['id']);  
            return redirect(DanhSachChuong.'/'.$ten_khongdau);
        }
    }
?>