<?php require_once "./mvc/core/route.php"; require_once "./mvc/models/dbCon.php";
    define('SALT', '123123$');


    function public_patch($patch){
        echo APP_URL.'public/'.$patch;
    }


    function storage_patch($patch){
        echo APP_URL.'storage/'.$patch;
    }

    function redirect($link, $message=null){
        if($message != null){
            setcookie("message", $message, time() + 2, "/");
        }
        return header("location: ".$link);
    }

    function active($link, $active){
        if(strlen(strstr($_GET['url'], $link)) > 0 ){
            echo $active;
        }
    }

    function Slug($str)
    {
      if(!$str) return false;

      $utf8 = array(
        'a' => 'à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ',
        'd' => 'đ|Đ',
        'e' => 'è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ',
        'i' => 'ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ',
        'o' => 'ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ',
        'u' => 'ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ',
        'y' => 'ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ',);
        foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i", $ascii, $str);
        $str = str_replace(" ", "-", $str);
        $str = str_replace("/", "", $str);
        $str = str_replace("'", "", $str);
        return $str;    
    }

    function DateToTime($date){
        $to_time = strtotime($date);
        $from_time = strtotime(date("Y-m-d H:i:s"));
        $second = abs($to_time - $from_time);

        $time = 0;
        if($second < 60 ){
            $time = $second;
            return $time." giây trước";
        }
        else if($second > 60 && $second <= 3600){
            $time = floor($second/60);
            return $time." phút trước";
        }
        else if($second > 3600 && $second <= 86400){
            $time = floor($second/3600);
            return $time." giờ trước";
        }
        else if($second > 86400 && $second <= 2678400){
            $time = floor($second/86400);
            return $time." ngày trước";
        }
        else if($second > 2678400 && $second <= 321400800){
            $time = floor($second/2678400);
            return $time." tháng trước";
        }
        else{
            $arr = explode('-', $date);
            $truoc = $arr[0];
            $curr = date("Y");
            $time = $curr - $truoc;
            return $time." năm trước";
        }
    }

    function getTheLoai($truyen_id){
        $conn = new dbCon();
        $conn = $conn->connect();

        try{
            $query = "SELECT ten FROM truyen_theloai WHERE truyen_id = :truyen_id";
            $cmd = $conn->prepare($query);
            $cmd->bindValue(":truyen_id", $truyen_id);
            $cmd->execute();

            $theloai = $cmd->fetchAll();
            $result = "";
            $i = 1;

            foreach($theloai as $val){
                if($i < count($theloai))
                    $result .= '<a href="#">'.$val["ten"].'</a>,';
                else
                    $result .= '<a href="#">'.$val["ten"].'</a>';
                $i++;
            }

            echo $result;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

        function getTheLoai_HOME($truyen_id){
            $conn = new dbCon();
            $conn = $conn->connect();
    
            try{
                $query = "SELECT ten FROM truyen_theloai WHERE truyen_id = :truyen_id";
                $cmd = $conn->prepare($query);
                $cmd->bindValue(":truyen_id", $truyen_id);
                $cmd->execute();
    
                $theloai = $cmd->fetchAll();
                $result = "";
                $i = 1;
    
                foreach($theloai as $val){
                    if($i < count($theloai))
                        $result .= ' <a itemprop="genre" href="#" >'.$val['ten'].'</a>,';
                    else
                        $result .= ' <a itemprop="genre" href="#" >'.$val['ten'].'</a>';
                    $i++;
                }
    
                echo $result;
            }catch(PDOException $e){
                return $e->getMessage();
            }

    }
    
        // function getTenChuong($str){
        //     $arr = explode(':', $str);
        //     return $arr[0];
        // }

?>