<?php
    $result = $data['count'];
    $pages = ceil($result / 10);
?>

<div class="container csstransforms3d" id="truyen">
    <div class="col-xs-12 col-sm-12 col-md-9 col-truyen-main">
        <div class="col-xs-12 col-info-desc" itemscope>
            <div class="title-list book-intro">
                <h2>Thông tin truyện</h2>
            </div>
            <h3 class="title" itemprop="name"><?php echo $data['truyen']['ten'] ?></h3>
            <div class="col-xs-12 col-sm-4 col-md-4 info-holder">
                <div class="books">
                    <div class="book">
                        <img src="<?php storage_patch($data['truyen']['hinh'])  ?>" alt="<?php echo $data['truyen']['ten'] ?>" itemprop="image">
                    </div>
                </div>
                <div class="info">
                    <div>
                        <h3>Tác giả:</h3>
                        <a itemprop="author" href="#" title="<?php echo $data['truyen']['tacgia'] ?>"><?php echo $data['truyen']['tacgia'] ?></a>
                    </div>
                    <div>
                        <h3>Thể loại:</h3>
                        <?php getTheLoai_HOME($data['truyen']['id']) ?>
                    </div>
                    <div>
                        <h3>Nguồn:</h3>
                        <span class="source"><?php echo $data['truyen']['nguon'] ?></span>
                    </div>
                    <div>
                        <h3>Trạng thái:</h3>
                        <span class="text-primary"><?php echo $data['truyen']['trangthai'] ?></span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 desc">
                <div class="rate">
                    <div class="rate-holder" data-score="8.5"></div>
                    <em class="rate-text"></em>
                    <div class="small" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                        <em>
                            Đánh giá:
                            <strong>
                                <span itemprop="ratingValue"><?php echo $data['truyen']['danhgia'] ?></span>
                            </strong>
                            /<span class="text-muted" itemprop="bestRating">0</span>
                            từ
                            <strong>
                                <span itemprop="ratingCount">0</span>
                                lượt
                            </strong>
                        </em>
                    </div>
                </div>
                <div class="desc-text" itemprop="description">
                    <?php echo $data['truyen']['gioithieu'] ?>
                </div>
                <div class="showmore">
                    <a class="btn btn-default btn-xs hide" href="javascript:void(0)" title="Xem thêm">Xem thêm »</a>
                </div>
                
            </div>
        </div>
       
        <div class="col-xs-12" id="list-chapter">
            <div class="title-list">
                <h2>Danh sách chương</h2>
            </div>
            <div class="row">
                <?php foreach($data['chuong'] as $val) {?>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <ul class="list-chapter">
                        <li>
                            <span class="glyphicon glyphicon-certificate"></span>
                            <a href="<?php echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/'.$val['ten_khongdau'] ?>" title="<?php echo $val['ten'] ?>">
                                <span class="chapter-text">
                                    
                                </span>
                                <?php echo $val['ten'] ?>
                            </a>
                        </li>  
                    </ul>
                </div>
                <?php } ?>
            </div>
            <input id="truyen-id" type="hidden" value="20413">
            <input id="total-page" type="hidden" value="31">
            <input id="truyen-ascii" type="hidden" value="chu-gioi-tan-the-online-ngay-tan-cua-the-gioi">
            <input id="truyen-comment" type="hidden" value="chu-gioi-tan-the-online">
            <input id="chapter-sac" type="hidden" value="0">
            <input id="truyen-time" type="hidden" value="1602611933">
            <ul class="pagination pagination-sm">
            <ul class="pagination pagination-sm">
                <?php for ($i = 1; $i <= $pages; $i++) { ?>
                    <li> 
                        <a href="?pages=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php } ?>
            </ul>
            </ul>
        </div>
        
    </div>
    <div class="visible-md-block visible-lg-block col-md-3 text-center col-truyen-side">
        <div class="list list-truyen col-xs-12">
            <div class="title-list">
                <h4>Truyện cùng tác giả</h4>
            </div>
            <div class="row">
                <?php foreach($data['cungtacgia'] as $val) { ?>
                <div class="col-xs-12">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <h3>
                        <a href="<?php echo APP_URL.'home/truyen/'.$val['ten_khongdau'] ?>" title="<?php echo $val['ten'] ?>"><?php echo $val['ten'] ?></a>
                    </h3>
                </div>
                <?php } ?>
            </div>
        </div>
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
</div>
</div>