<?php
    class truyen extends core{
        function index($ten_khongdau){ 
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


    }
?>