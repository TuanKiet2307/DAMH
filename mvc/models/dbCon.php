<?php require_once './mvc/core/config_database.php';
    class dbCon{
        private static $dsn = 'mysql:host = '.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;

        private static $option = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_TIMEOUT => 180
        );

        private static $conn;

        public static function connect(){
            if(!isset(self::$conn)){
                try{
                    self::$conn = new PDO(self::$dsn, DB_USER,DB_PAST, self::$option);
                }catch(PDOException $e){
                    echo $e->getMessage();
                    exit();
                }
            }
            return self::$conn;
        }

        public function disconnect(){
            self::$conn = null ;
        }
    }
?>