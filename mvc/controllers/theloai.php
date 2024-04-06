<?php
    class theloai extends core{
        function index($ten_khongdau){  
            $pages = isset($_GET['pages']) ? $_GET['pages'] : 1;  
            $truyen = $this->model("Truyen_Model")->getTruyenByTheLoai($ten_khongdau, $pages);
            $count = $this->model("Truyen_Model")->count();


            $this->view('trangchu', [
                'title' => 'Manga Reader',
                'page' => 'theloai',
                'truyen' => $truyen,
                'truyenHOT' => $this->model("Truyen_Model")->getTruyenHOT(),
                'count' => $count

            ]);
            
        }
    }
?>