<?php
    class home extends core{
        function index(){
            $this->view('trangchu', [
                'title' => 'Manga Reader',
                'page' => 'index',
                'truyenHOT' => $this->model("Truyen_Model")->getTruyenHOT(),
                'truyenCapNhat' => $this->model("Truyen_Model")->getTruyenMoiCapNhat(),
                'truyenHoanThanh' => $this->model("Truyen_Model")->getTruyenHoanThanh(),
                'theLoaiTruyen' => $this->model("TheLoaiTruyen_Model")->getAll()
            ]);
        }

        function truyen($ten_khongdau){ 
                $pages = isset($_GET['pages']) ? $_GET['pages'] : 1;  
                $truyen = $this->model("Truyen_Model")->get($ten_khongdau);
                $count = $this->model("Chuong_Model")->count();

                $this->view('trangchu', [
                    'title' => 'Truyện '.$truyen['ten'],
                    'page' => 'truyen',
                    'truyen' => $truyen,
                    'cungtacgia' => $this->model("Truyen_Model")->truyenCungTacGia($truyen['tacgia']),
                    'chuong' => $this->model("Chuong_Model")->get($truyen['id'], $pages),
                    'truyenHOT' => $this->model("Truyen_Model")->getTruyenHOT(),
                    'count' => $count
                ]);
        }

        function doctruyen($ten_khongdau, $chuong){ 
            $truyen = $this->model("Truyen_Model")->get($ten_khongdau);
            $chuong = $this->model("Chuong_Model")->getHome($truyen['id'], $chuong);

            $this->view('trangchu', [
                'title' => 'Truyện '.$truyen['ten'],
                'page' => 'doctruyen',
                'truyen' => $truyen,
                'chuong' => $chuong
                
            ]);
        }

        function XuLyTruXu(){
            $taikhoan = $this->model("TaiKhoan_Model")->truxu($_POST['id'], $_POST['xu']) ;
            $this->loginSession($this->model("TaiKhoan_Model")->get($_POST['tendangnhap']));
        }

        function napthe(){      
            $this->view('trangchu', [
                'title' => 'Truyện ',
                'page' => 'napthe',
                
            ]);
        }

        function xuLyTimTruyen(){ 
            $truyen = $this->model("Truyen_Model")->timTruyen($_POST['ten']);
            
            if(!empty($truyen)){
                $_SESSION['truyen'] = $truyen;
                return redirect(timtruyen);
            }else{
                return redirect(timtruyen, 'Không tìm thấy truyện!');
            }

       
        }

        function timtruyen(){
            $truyen = isset($_SESSION['truyen']) ? $_SESSION['truyen'] : array();
            $this->view('trangchu', [
                'title' => 'Truyện ',
                'page' => 'timtruyen',  
                'truyen' => $truyen,
                'truyenHOT' => $this->model("Truyen_Model")->getTruyenHOT(),
            ]);
        }
    }
?>