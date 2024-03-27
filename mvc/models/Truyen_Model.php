<?php require_once "./mvc/core/libs.php";  
    class Truyen_Model extends dbCon{
        private $Truyen;

        function __construct(){
            $this->Truyen = new dbCon();
            $this->Truyen = $this->Truyen->connect();
        }

        public function them($hinh, $ten , $tacgia, $nguon, $trangthai, $gioithieu){
            try{
                $query = "INSERT INTO  truyen (hinh, ten , ten_khongdau, tacgia, nguon, trangthai, gioithieu) VALUES (:hinh, :ten , :ten_khongdau, :tacgia, :nguon, :trangthai, :gioithieu)";
                $cmd = $this->Truyen->prepare($query);
                $cmd->bindValue(":hinh", $hinh);
                $cmd->bindValue(":ten", $ten);
                $cmd->bindValue(":ten_khongdau", Slug($ten));
                $cmd->bindValue(":tacgia", $tacgia);
                $cmd->bindValue(":nguon", $nguon);
                $cmd->bindValue(":trangthai", $trangthai);
                $cmd->bindValue(":gioithieu", $gioithieu);
                $cmd->execute();
                return $cmd->rowCount();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function getAll(){
            try{
                $query = "SELECT * FROM  truyen ORDER BY capnhat DESC";
                $cmd = $this->Truyen->prepare($query);
                $cmd->execute();
                return $cmd->fetchAll();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }


        public function getID($ten_khongdau){
            try{
                $query = "SELECT id FROM truyen WHERE ten_khongdau = :ten_khongdau";
                $cmd = $this->Truyen->prepare($query);
                $cmd->bindValue(":ten_khongdau", $ten_khongdau);
                $cmd->execute();
                return $cmd->fetch()['id'];
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function get($ten_khongdau){
            try{
                $query = "SELECT * FROM  truyen WHERE ten_khongdau = :ten_khongdau";
                $cmd = $this->Truyen->prepare($query);
                $cmd->bindValue(":ten_khongdau", $ten_khongdau);
                $cmd->execute();
                return $cmd->fetch();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function getbyID($id){
            try{
                $query = "SELECT * FROM  truyen WHERE id = :id";
                $cmd = $this->Truyen->prepare($query);
                $cmd->bindValue(":id", $id);
                $cmd->execute();
                return $cmd->fetch();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }


        
        public function sua($hinh, $ten , $tacgia, $nguon, $trangthai, $gioithieu, $id){
            try{
                $query = "UPDATE truyen SET hinh = :hinh, ten = :ten, ten_khongdau = :ten_khongdau, tacgia = :tacgia, nguon = :nguon, trangthai = :trangthai, gioithieu = :gioithieu WHERE id = :id";
                $cmd = $this->Truyen->prepare($query);
                $cmd->bindValue(":hinh", $hinh);
                $cmd->bindValue(":ten", $ten);
                $cmd->bindValue(":ten_khongdau", Slug($ten));
                $cmd->bindValue(":tacgia", $tacgia);
                $cmd->bindValue(":nguon", $nguon);
                $cmd->bindValue(":trangthai", $trangthai);
                $cmd->bindValue(":gioithieu", $gioithieu);
                $cmd->bindValue(":id", $id);
                $cmd->execute();
                return $cmd->rowCount();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function capNhatSoChuong($id){
            try{
                $query = "UPDATE truyen SET chuong = chuong + 1 WHERE id = :id";
                $cmd = $this->Truyen->prepare($query);
                $cmd->bindValue(":id", $id);
                $cmd->execute();
                return $cmd->rowCount();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function capNhatXoaChuong($id){
            try{
                $query = "UPDATE truyen SET chuong = chuong - 1 WHERE id = :id";
                $cmd = $this->Truyen->prepare($query);
                $cmd->bindValue(":id", $id);
                $cmd->execute();
                return $cmd->rowCount();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }


        //trang chu
        public function getTruyenHOT(){
            try{
                $query = "SELECT * FROM  truyen ORDER BY danhgia DESC LIMIT 16";
                $cmd = $this->Truyen->prepare($query);
                $cmd->execute();
                return $cmd->fetchAll();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function getTruyenMoiCapNhat(){
            try{
                $query = "SELECT * FROM  truyen ORDER BY capnhat DESC LIMIT 27";
                $cmd = $this->Truyen->prepare($query);
                $cmd->execute();
                return $cmd->fetchAll();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function getTruyenHoanThanh(){
            try{
                $query = "SELECT * FROM  truyen WHERE trangthai = 'Hoàn Thành' ORDER BY capnhat DESC LIMIT 12";
                $cmd = $this->Truyen->prepare($query);
                $cmd->execute();
                return $cmd->fetchAll();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }


        public function truyenCungTacGia($tacgia){
            try{
                $query = "SELECT * FROM truyen WHERE tacgia = :tacgia";
                $cmd = $this->Truyen->prepare($query);
                $cmd->bindValue(":tacgia", $tacgia);
                $cmd->execute();
                return $cmd->fetchAll();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function xoaTruyen($truyen_id){
            try{
                $query = "DELETE FROM truyen WHERE id = :truyen_id";
                $cmd = $this->Truyen->prepare($query);
                $cmd->bindValue(":truyen_id", $truyen_id);
                $cmd->execute();

            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
?>