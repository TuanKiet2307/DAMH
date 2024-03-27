<?php require_once './mvc/core/libs.php'; require_once './mvc/core/route.php'; ?>

<!DOCTYPE html>
<html lang="vi">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# book: http://ogp.me/ns/book# profile: http://ogp.me/ns/profile#">
        <meta charset="UTF-8">
        <title>Đọc truyện online, đọc truyện hay</title>
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <meta name="description" content="Đọc truyện online, đọc truyện chữ, truyện hay, truyện full. Truyện Full luôn tổng hợp và cập nhật các chương truyện một cách nhanh nhất.">
        <meta name="keywords" content="doc truyen, doc truyen online, truyen hay, truyen chu">

        <link href="<?php public_patch('trangchu/css/main.css')?>" rel="stylesheet">

    </head>
    <body id="body_home">
       
        <div id="wrap">
            <div class="navbar navbar-default navbar-static-top" role="navigation" id="nav">
                <script type="text/javascript">
                    function getCookie(d) {
                        d += "=";
                        for (var b = decodeURIComponent(document.cookie).split(";"), c = [], a = 0; a < b.length; a++)
                            0 == b[a].trim().indexOf(d) && (c = b[a].trim().split("="));
                        return 0 < c.length ? c[1] : ""
                    }
                    var js_bgcolor = getCookie("bgcolor-cookie");
                    "#232323" == js_bgcolor && (document.getElementsByTagName("body")[0].className += " dark-theme");
                </script>
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Hiện menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>
                            <a class="header-logo" href="https://truyenfull.vn/" title="doc truyen">doc truyen</a>
                        </h1>
                    </div>
                    <div class="navbar-collapse collapse" itemscope itemtype="https://schema.org/WebSite">
                        <meta itemprop="url" content="https://truyenfull.vn"/>
                        <ul class="control nav navbar-nav ">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-list"></span>
                                    Danh sách <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/truyen-moi/" title="Truyện mới cập nhật">Truyện mới cập nhật</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/truyen-hot/" title="Truyện Hot">Truyện Hot</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/truyen-full/" title="Truyện Full">Truyện Full</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/tien-hiep-hay/" title="Tiên Hiệp Hay">Tiên Hiệp Hay</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/kiem-hiep-hay/" title="Kiếm Hiệp Hay">Kiếm Hiệp Hay</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/truyen-teen-hay/" title="Truyện Teen Hay">Truyện Teen Hay</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/ngon-tinh-hay/" title="Ngôn Tình Hay">Ngôn Tình Hay</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/ngon-tinh-nguoc/" title="Ngôn Tình Ngược">Ngôn Tình Ngược</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/ngon-tinh-sung/" title="Ngôn Tình Sủng">Ngôn Tình Sủng</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/ngon-tinh-hai/" title="Ngôn Tình Hài">Ngôn Tình Hài</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/dam-my-hai/" title="Đam Mỹ Hài">Đam Mỹ Hài</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/dam-my-hay/" title="Đam Mỹ Hay">Đam Mỹ Hay</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/dam-my-h-van/" title="Đam Mỹ H Văn">Đam Mỹ H Văn</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/danh-sach/dam-my-sac/" title="Đam Mỹ Sắc">Đam Mỹ Sắc</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-list"></span>
                                    Thể loại <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu multi-column">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/tien-hiep/" title="Truyện Tiên Hiệp">Tiên Hiệp</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/kiem-hiep/" title="Truyện Kiếm Hiệp">Kiếm Hiệp</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/ngon-tinh/" title="Truyện Ngôn Tình">Ngôn Tình</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/dam-my/" title="Truyện Đam Mỹ">Đam Mỹ</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/quan-truong/" title="Truyện Quan Trường">Quan Trường</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/vong-du/" title="Truyện Võng Du">Võng Du</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/khoa-huyen/" title="Truyện Khoa Huyễn">Khoa Huyễn</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/he-thong/" title="Truyện Hệ Thống">Hệ Thống</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/huyen-huyen/" title="Truyện Huyền Huyễn">Huyền Huyễn</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/di-gioi/" title="Truyện Dị Giới">Dị Giới</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/di-nang/" title="Truyện Dị Năng">Dị Năng</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/quan-su/" title="Truyện Quân Sự">Quân Sự</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/lich-su/" title="Truyện Lịch Sử">Lịch Sử</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/xuyen-khong/" title="Truyện Xuyên Không">Xuyên Không</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/xuyen-nhanh/" title="Truyện Xuyên Nhanh">Xuyên Nhanh</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/trong-sinh/" title="Truyện Trọng Sinh">Trọng Sinh</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/trinh-tham/" title="Truyện Trinh Thám">Trinh Thám</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/tham-hiem/" title="Truyện Thám Hiểm">Thám Hiểm</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/linh-di/" title="Truyện Linh Dị">Linh Dị</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/nguoc/" title="Truyện Ngược">Ngược</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/sung/" title="Truyện Sủng">Sủng</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/cung-dau/" title="Truyện Cung Đấu">Cung Đấu</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/nu-cuong/" title="Truyện Nữ Cường">Nữ Cường</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/gia-dau/" title="Truyện Gia Đấu">Gia Đấu</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/dong-phuong/" title="Truyện Đông Phương">Đông Phương</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/do-thi/" title="Truyện Đô Thị">Đô Thị</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/bach-hop/" title="Truyện Bách Hợp">Bách Hợp</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/hai-huoc/" title="Truyện Hài Hước">Hài Hước</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/dien-van/" title="Truyện Điền Văn">Điền Văn</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/co-dai/" title="Truyện Cổ Đại">Cổ Đại</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/mat-the/" title="Truyện Mạt Thế">Mạt Thế</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/truyen-teen/" title="Truyện Truyện Teen">Truyện Teen</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/phuong-tay/" title="Truyện Phương Tây">Phương Tây</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/nu-phu/" title="Truyện Nữ Phụ">Nữ Phụ</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/light-novel/" title="Truyện Light Novel">Light Novel</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/viet-nam/" title="Truyện Việt Nam">Việt Nam</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/doan-van/" title="Truyện Đoản Văn">Đoản Văn</a>
                                                </li>
                                                <li>
                                                    <a href="https://truyenfull.vn/the-loai/khac/" title="Truyện Khác">Khác</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-list"></span>
                                    Phân loại theo Chương <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="https://truyenfull.vn/top-truyen/duoi-100-chuong/" title="Dưới 100 chương">Dưới 100 chương</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/top-truyen/100-500-chuong/" title="100 - 500 chương">100 - 500 chương</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/top-truyen/500-1000-chuong/" title="500 - 1000 chương">500 - 1000 chương</a>
                                    </li>
                                    <li>
                                        <a href="https://truyenfull.vn/top-truyen/tren-1000-chuong/" title="Trên 1000 chương">Trên 1000 chương</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="https://nettruyenfull.com/" rel="nofollow" target="_blank" title="Truyện tranh">
                                    <span class="glyphicon glyphicon-book" style="margin-right: 3px;"></span>
                                    Truyện Tranh
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-cog"></span>
                                    Tùy chỉnh <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right settings">
                                    <form class="form-horizontal">
                                        <div class="form-group form-group-sm">
                                            <label class="col-sm-2 col-md-5 control-label" for="truyen-background">Màu nền</label>
                                            <div class="col-sm-5 col-md-7">
                                                <select class="form-control" id="truyen-background">
                                                    <option value="#F4F4F4" selected>Xám nhạt</option>
                                                    <option value="#232323">Màu tối</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" action="https://truyenfull.vn/tim-kiem/" role="search" itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
                            <div class="input-group search-holder">
                                <meta itemprop="target" content="https://truyenfull.vn/tim-kiem/?tukhoa={tukhoa}"/>
                                <input aria-label="Từ khóa tìm kiếm" role="search key" class="form-control" id="search-input" type="search" name="tukhoa" placeholder="Tìm kiếm..." value itemprop="query-input" required>
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit" aria-label="Tìm kiếm" role="search">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="list-group list-search-res hide"></div>
                        </form>
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
                        Website hoạt động dưới Giấy phép truy cập mở <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License
                    </p>
</a></div></div></div><div id="fb-root"></div>
<script src="https://static.8cache.com/min/g/mainjs-14032024_2.js"></script>
<noscript>
    <link rel="stylesheet" type="text/css" href="https://static.8cache.com/min/g/maincss-14032024_2.css"/>
</noscript>
<script>
    $('head').append('<link rel="stylesheet" type="text/css" href="https://static.8cache.com/min/g/maincss-14032024_1.css"/>');
</script>
</body></html>
