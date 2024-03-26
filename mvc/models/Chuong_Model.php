<?php require_once "./mvc/core/libs.php";  
    class Chuong_Model extends dbCon{
        private $Chuong;

        function __construct(){
            $this->Chuong = new dbCon();
            $this->Chuong = $this->Chuong->connect();
        }

        public function them($truyen_id, $ten, $noidung){
            try{
                $query = "INSERT INTO chuong(truyen_id, ten, ten_khongdau, noidung) VALUES (:truyen_id, :ten, :ten_khongdau, :noidung)";
                $cmd = $this->Chuong->prepare($query);
                $cmd->bindValue(":truyen_id", $truyen_id);
                $cmd->bindValue(":ten", $ten);
                $cmd->bindValue(":ten_khongdau", (Slug($ten)));
                $cmd->bindValue(":noidung", $noidung);
                $cmd->execute();
                return $cmd->rowCount();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function get($truyen_id){
            try{
                $query = "SELECT * FROM chuong WHERE truyen_id = :truyen_id";
                $cmd = $this->Chuong->prepare($query);
                $cmd->bindValue(":truyen_id", $truyen_id);
                $cmd->execute();
                return $cmd->fetchAll();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }     
        

        public function sua($chuong_id, $ten, $noidung){
            try{
                $query = "UPDATE chuong SET ten = :ten, ten_khongdau = :ten_khongdau, noidung = :noidung WHERE id = :id";
                $cmd = $this->Chuong->prepare($query);
                $cmd->bindValue(":ten", $ten);
                $cmd->bindValue(":ten_khongdau", (Slug($ten)));
                $cmd->bindValue(":noidung", $noidung);
                $cmd->bindValue(":id", $chuong_id);
                $cmd->execute();
                return $cmd->rowCount();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function xoa($chuong_id){
            try{
                $query = "DELETE FROM chuong WHERE id = :id";
                $cmd = $this->Chuong->prepare($query);
                $cmd->bindValue(":id", $chuong_id);
                $cmd->execute();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }  
    }
?>