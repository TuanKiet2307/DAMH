<?php
    class App{
        protected $controller = 'home';
        protected $action = 'index';
        protected $params = [];

        function __construct()
        {
            $url = $this->URLProcess();
            if($url == null){
                $url[0] = $this->controller;
            }

            if(file_exists("./mvc/controllers/".$url[0].".php")){
                $this->controller = $url[0];
                unset($url[0]);
            }

            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;

            if(isset($url[1])){
                $url[1] = str_replace("-", "", $url[1]);
                if(method_exists($this->controller, $url[1])){
                    $this->action = $url[1];
                    unset($url[1]);
                }
            }

            $this->params = $url?array_values($url):[];
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
        function URLProcess(){
            if(isset($_GET['url'])){
                return explode("/", filter_var(trim($_GET['url'], '/')));
            }
        }
    }
?>