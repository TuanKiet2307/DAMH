<?php require_once "./mvc/core/libs.php"; require_once "./mvc/core/route.php";
    class core{
        public function view($view, $data = []){
            require_once "./mvc/views/".$view.".php";
        }

        public function model($model){
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }

        public function loginSession($session){
            $_SESSION['truyenfull_id'] = $session['id'];
            $_SESSION['truyenfull_user'] = $session['tendangnhap'];
            $_SESSION['truyenfull_quyen'] = $session['quyen'];
            $_SESSION['truyenfull_xu'] = $session['xu'];
        }

        public function logOut(){
            unset($_SESSION['truyenfull_id']);
            unset($_SESSION['truyenfull_user']);
            unset($_SESSION['truyenfull_quyen']);
            unset($_SESSION['truyenfull_xu']);
        }
    }
?>