<div class="container" id="intro-index">
    <div class="title-list">
        <h2>
            <a href="#" title="Truyện hot">Truyện hot</a>
        </h2>
        <a href="#" title="Truyện hot">
            <span class="glyphicon glyphicon-fire"></span>
        </a>
       
    </div>
    <div class="index-intro">
        <?php $stt = 1;
        foreach ($data['truyenHOT'] as $val) { ?>
            <div class="item top-<?php echo $stt ?>" itemscope>
                <a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau'] ?>" itemprop="url">
                    <?php if ($val['trangthai'] == "Hoàn Thành") { ?>
                        <span class="full-label"></span>
                    <?php  } ?>
                    <img src="<?php storage_patch($val['hinh']) ?>" alt="<?php echo $val['ten'] ?>" class="img-responsive item-img" itemprop="image">
                    <div class="title">
                        <h3 itemprop="name"><?php echo $val['ten'] ?></h3>
                    </div>
                </a>
            </div>
        <?php $stt++; } ?>
    </div>
</div>
<div class="container" id="list-index">
    <div class="row text-center">
        <div id="banner-bio-link"></div>
    </div>
    <div class="hide" id="history-holder"></div>
    <div class="list list-truyen list-new col-xs-12 col-sm-12 col-md-8 col-truyen-main">
        <div class="title-list">
            <h2>
                <a href="#" title="Truyện mới">Truyện mới cập nhật</a>
            </h2>
            <a href="#" title="Truyện mới">
                <span class="glyphicon glyphicon-menu-right"></span>
            </a>
            
        </div>
        <?php $stt = 1; foreach ($data['truyenCapNhat'] as $val) { ?>
            <div class="row" itemscope>
                <div class="col-xs-9 col-sm-6 col-md-5 col-title">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <h3 itemprop="name">
                        <a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau'] ?>" title="<?php echo $val['ten'] ?>" itemprop="url"><?php echo $val['ten'] ?></a>
                    </h3>
                    <span class="label-title label-new"></span>
                </div>
                <div class="hidden-xs col-sm-3 col-md-3 col-cat text-888">
                    <?php getTheLoai_HOME($val['id'])  ?>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-2 col-chap text-info">
                    <a href="<?php echo APP_URL.'home/doctruyen/'.$val['ten_khongdau'].'/chuong-'.$val['chuong']; ?>" >
                        <span class="chapter-text">
                            <span>Chương </span>
                        </span>
                        <?php echo $val['chuong'] ?>
                    </a>
                </div>
                <div class="hidden-xs hidden-sm col-md-2 col-time text-888"><?php echo DateToTime($val['capnhat']) ?></div>
            </div>
        <?php $stt++;} ?>
    </div>
    <div class="col-md-4 col-truyen-side">
        <div class="visible-md-block visible-lg-block text-center">
            <div class="hide" id="history-holder-side"></div>
            <div class="list list-truyen list-cat col-xs-12">
                <div class="title-list">
                    <h4>Thể loại truyện</h4>
                </div>
                <div class="row">
                    <?php $stt = 1; foreach ($data['theLoaiTruyen'] as $val) { ?>
                    <div class="col-xs-6">
                        <a href="<?php echo APP_URL.'theloai/'.$val['ten_khongdau'] ?>" title="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></a>
                    </div>
                    <?php $stt++;} ?> 
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="truyen-slide">
                <div class="list list-thumbnail col-xs-12">
                    <div class="title-list">
                        <h2>
                            <a href="#" title="Truyện full">Truyện đã hoàn thành</a>
                        </h2>
                        <a href="#" title="Truyện full">
                            <span class="glyphicon glyphicon-menu-right"></span>
                        </a>
                    </div>
                    <div class="row">
                        <?php $stt = 1; foreach ($data['truyenHoanThanh'] as $val) { ?>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau'] ?>" title="<?php echo $val['ten'] ?>">
                                <img src="<?php storage_patch($val['hinh'])  ?>"  alt="<?php echo $val['ten'] ?>">
                                <div class="caption">
                                    <h3><?php echo $val['ten'] ?></h3>
                                    <small class="btn-xs label-primary">Full - <?php echo $val['chuong'] ?></small>
                                </div>
                            </a>
                        </div>  
                        <?php $stt++;} ?>      
                    </div>
                </div>
            </div>
            
        </div>