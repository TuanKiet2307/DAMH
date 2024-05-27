<div class="container" id="list-page">
    <div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
        <div class="text-center"></div>
        <div class="list list-truyen col-xs-12">
            <div class="title-list">
                <h2>Truyện </h2>
                
            </div>
            

            <?php foreach($data['truyen'] as $val) { ?>
            <div class="row" itemscope >
                <div class="col-xs-3">
                    <div>
                        <img src="<?php storage_patch($val['hinh']) ?>" class="cover" style="width: 182px; height: 82px;">
                    </div>
                </div>
                <div class="col-xs-7">
                    <div>
                        <span class="glyphicon glyphicon-book"></span>
                        <h3 class="truyen-title" itemprop="name">
                            <a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau'] ?>" title="<?php echo $val['ten'] ?>" itemprop="url"><?php echo $val['ten'] ?></a>
                        </h3>
                        <span class="label-title label-hot"></span>
                        <span class="author" itemprop="author">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <?php echo $val['tacgia'] ?>
                        </span>
                    </div>
                </div>
                <div class="col-xs-2 text-info">
                    <div>
                        <a href="<?php echo APP_URL.'home/doctruyen/'.$val['ten_khongdau'].'/chuong-'.$val['chuong']; ?>" title="<?php echo $val['ten'] ?>">
                            <span class="chapter-text">
                                <span>Chương </span>
                            </span>
                            <?php echo $val['chuong'] ?>
                        </a>
                    </div>
                </div>
            </div> 
            <?php } ?>
        </div>   
        <div class="text-center pagination-container">
            <ul class="pagination pagination-sm">
                <li class="active">
                    <span>
                        1<span class="sr-only">(đang xem)</span>
                    </span>
                </li>
              
                
            </ul>
        </div>
    </div>
    <div class="visible-md-block visible-lg-block col-md-3 text-center col-truyen-side">
        
        <div class="list list-truyen list-side col-xs-12">
            <div class="title-list">
                <h4>Truyện đang hot</h4>
            </div>
            
            <?php $stt = 1; foreach($data['truyenHOT'] as $val) { ?>
                <?php if($stt > 10) break; ?>
            <div class="row top-item">
                <div class="col-xs-12">
                    <div class="top-num top-1"><?php echo $stt ?></div>
                    <div class="s-title">
                        <h3>
                            <a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau'] ?>" title="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></a>
                        </h3>
                    </div>
                    <div>
                        <?php echo getTheLoai_HOME($val['id']) ?>
                    </div>
                </div>
            </div>
            <?php $stt++; } ?>
        </div>
    </div>