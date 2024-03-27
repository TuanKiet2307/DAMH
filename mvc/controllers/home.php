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
    }
?>