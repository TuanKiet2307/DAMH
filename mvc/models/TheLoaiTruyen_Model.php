<?php require_once "./mvc/core/libs.php";  
    class TheLoaiTruyen_Model extends dbCon{
        private $TheLoaiTruyen;

        function __construct(){
            $this->TheLoaiTruyen = new dbCon();
            $this->TheLoaiTruyen = $this->TheLoaiTruyen->connect();
        }

        public function them($ten){
            try{
                $query = "INSERT INTO theloaitruyen(`ten`, `ten_khongdau`) VALUES (:ten, :ten_khongdau)";
                $cmd = $this->TheLoaiTruyen->prepare($query);
                $cmd->bindValue(":ten", $ten);
                $cmd->bindValue(":ten_khongdau", Slug2($ten));
                $cmd->execute();
                return $cmd->rowCount();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function getAll(){
            try{
                $query = "SELECT * FROM theloaitruyen ORDER BY ten ASC";
                $cmd = $this->TheLoaiTruyen->prepare($query);
                $cmd->execute();
                return $cmd->fetchAll();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }


        public function sua($id, $ten){
            try{
                $query = "UPDATE theloaitruyen SET ten= :ten, ten_khongdau= :ten_khongdau WHERE id= :id";
                $cmd = $this->TheLoaiTruyen->prepare($query);
                $cmd->bindValue(":ten", $ten);
                $cmd->bindValue(":ten_khongdau", Slug2($ten));
                $cmd->bindValue(":id", $id);
                $cmd->execute();
                return $cmd->rowCount();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function xoa($id){
            try{
                $query = "DELETE FROM theloaitruyen WHERE id= :id";
                $cmd = $this->TheLoaiTruyen->prepare($query);
                $cmd->bindValue(":id", $id);
                $cmd->execute();
                return $cmd->rowCount();
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
?>