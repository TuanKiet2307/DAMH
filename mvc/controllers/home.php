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
                $truyen = $this->model("Truyen_Model")->get($ten_khongdau);
                $this->view('trangchu', [
                    'title' => 'Truyện '.$truyen['ten'],
                    'page' => 'truyen',
                    'truyen' => $truyen,
                    'cungtacgia' => $this->model("Truyen_Model")->truyenCungTacGia($truyen['tacgia']),
                    'chuong' => $this->model("Chuong_Model")->get($truyen['id']),
                    'truyenHOT' => $this->model("Truyen_Model")->getTruyenHOT()
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
    }
?>