<?php require_once './mvc/core/libs.php'; require_once './mvc/core/route.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head >
        <meta charset="UTF-8">
        <title><?php echo $data['title'] ?></title>
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <link href="<?php public_patch('trangchu/css/main.css')?>" rel="stylesheet">
        <link href="<?php public_patch('js/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
       
    
    </head>
    <body id="body_home">
       
        <div id="wrap">
            <div class="navbar navbar-default navbar-static-top" role="navigation" id="nav">
             
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Hiện menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>               
                            <ul class="control nav navbar-nav ">
                                <li class="dropdown">
                                    <a href="<?php echo APP_URL ?>"  title="Truyện tranh">
                                        <span class="glyphicon glyphicon-book" style="margin-right: 3px;"></span>
                                        Trang Chủ
                                    </a>
                                </li>
                            </ul>           
                    </div>
                    <div class="navbar-collapse collapse" itemscope itemtype="https://schema.org/WebSite">
                        <meta itemprop="url" content="#"/>
                        <ul class="control nav navbar-nav ">
                            
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-list"></span>
                                    Thể loại <span class="caret"></span>
                                </a>
                                
                                    
                                
                                <div class="dropdown-menu multi-column">
                                    <div class="row">
                                        <?php foreach(getTheLoai_Header() as $val) { ?>
                                        <div class="col-md-4">
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo APP_URL.'theloai/'.$val['ten_khongdau'] ?>" title="Truyện <?php echo $val['ten'] ?>"><?php echo $val['ten'] ?> </a>
                                                </li>                                                                   
                                            </ul>
                                        </div> 
                                        <?php } ?>                                      
                                    </div>
                                </div>
                            </li>
                            
                            
                        </ul>
                        <form class="navbar-form navbar-right" action="<?php echo XuLyTimTruyen ?>"  method="POST" role="search"  >
                            <div class="input-group search-holder">
                                
                                <input aria-label="Từ khóa tìm kiếm" role="search key" class="form-control" id="search-input" type="search" name="ten" placeholder="Tìm kiếm..." >
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit" aria-label="Tìm kiếm" role="search">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="list-group list-search-res hide"></div>
                        </form>
                        <ul class="control nav navbar-nav navbar-right">
                            
                           
                            <li>
                            <div class="translate" id="google_translate_element"></div>

                            <script type="text/javascript">
                                function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'vi'}, 'google_translate_element');}
                            </script>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                            </li>
                            
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo $_SESSION['truyenfull_user'] ?>
                                <i class="far fa-user"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#" title="Truyện mới cập nhật"><?php echo $_SESSION['truyenfull_xu'] ?> Xu</a>
                                    </li>
                                    <?php if($_SESSION['truyenfull_quyen'] == "admin") {?>
                                    <li>
                                        <a href="<?php echo Truyen ?>" title="Truyện mới cập nhật">Dashboard</a>
                                    </li>
                                    <?php } ?>
                                    <li>
                                        <a href="<?php echo napthe ?>" title="Truyện mới cập nhật">Nạp Xu</a>
                                    </li>    
                                    <li>
                                        <a href="<?php echo DangXuat ?>" title="Truyện mới cập nhật">Đăng Xuất</a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-breadcrumb">
                    <div class="container breadcrumb-container">Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Tổng hợp đầy đủ và cập nhật liên tục. </div>
                </div>
            </div>
            
            <?php require_once './mvc/views/home/'.$data['page'].'.php'; ?>

                
            </div>
            <div class="clearfix"></div>
           
            
        <div id="footer" class="footer">
            <div class="container">
                
                <div class="col-xs-12 col-sm-12">
                    
                    <p>
                       Metal 2024
                    </p>
                </div>
            </div>
        </div>
    
<script src="<?php public_patch('trangchu/js/mainjs-14032024_2.js')?>"></script>
<script src="<?php public_patch('js/jquery-3.6.0.min.js')?>"></script>
<noscript>
    <link rel="stylesheet" type="text/css" href="<?php public_patch('trangchu/css/maincss-14032024_2.css')?>"/>
</noscript>
<script>
    $('head').append('<link rel="stylesheet" type="text/css" href="<?php public_patch('trangchu/css/maincss-14032024_1.css')?>"/>');
</script>




</body></html>
