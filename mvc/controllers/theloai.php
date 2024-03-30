<?php
    class theloai extends core{
        function index($ten_khongdau){      
            $truyen = $this->model("Truyen_Model")->getTruyenByTheLoai($ten_khongdau);
  
            $this->view('trangchu', [
                'title' => 'Manga Reader',
                'page' => 'theloai',
                'truyen' => $truyen,
                'truyenHOT' => $this->model("Truyen_Model")->getTruyenHOT()
            ]);
            
        }
    }
?>