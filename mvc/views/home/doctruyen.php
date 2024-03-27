<div id="chapter-big-container" class="container chapter">
    <div class="row">
        <div class="col-xs-12">
            
            <a class="truyen-title" href="<?php echo APP_URL.'home/truyen/'.$data['truyen']['ten_khongdau'] ?>" title="<?php echo $data['truyen']['ten'] ?>"><?php echo $data['truyen']['ten'] ?></a>
            <h2>
                <a class="chapter-title" href="#" title="Chương 1: Hố người chết">
                    
                    <?php echo $data['chuong']['ten'] ?>
                </a>
            </h2>
            <hr class="chapter-start">
            <div class="chapter-nav" id="chapter-nav-top">
                <div class="btn-group">
                    <a class="btn btn-success btn-chapter-nav " href="<?php 
                        $truyen_id = $data['truyen']['id'];
                        $soChuong = tachSoChuong($data['chuong']['ten_khongdau']) ;
                        if(checkChuongSau($truyen_id, $soChuong - 1) == true){
                            echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/chuong-'.$soChuong -1;
                        }else{
                            echo '#';
                        }
                    ?>"  id="prev_chap" >
                        
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="hidden-xs">Chương </span>
                        trước
                    </a>
                    <button type="button" class="btn btn-success btn-chapter-nav chapter_jump">
                        <span class="glyphicon glyphicon-list-alt"></span>
                    </button>
                    <a class="btn btn-success btn-chapter-nav" href="<?php 
                        $truyen_id = $data['truyen']['id'];
                        $soChuong = tachSoChuong($data['chuong']['ten_khongdau']) + 1;
                        if(checkChuongSau($truyen_id, $soChuong) == true){
                            echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/chuong-'.$soChuong;
                        }else{
                            echo '#';
                        }
                    ?>"  id="next_chap" >
                        <span class="hidden-xs">Chương </span>
                        tiếp <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <br />
            <hr class="chapter-end">
            <div id="chapter-c" class="chapter-c" itemprop="articleBody">
                <p><?php echo $data['chuong']['noidung'] ?></p>           
            </div>
            <hr class="chapter-end">
            <div class="chapter-nav" id="chapter-nav-bot">
                <div class="btn-group" style="margin-bottom: 15px; margin-top: 15px">
                <a class="btn btn-success btn-chapter-nav  ?>" href="<?php 
                        $truyen_id = $data['truyen']['id'];
                        $soChuong = tachSoChuong($data['chuong']['ten_khongdau']) ;
                        if(checkChuongSau($truyen_id, $soChuong - 1) == true){
                            echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/chuong-'.$soChuong -1;
                        }else{
                            echo '#';
                        }
                    ?>"  id="prev_chap" >
                        
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="hidden-xs">Chương </span>
                        trước
                    </a>
                    <button type="button" class="btn btn-success btn-chapter-nav chapter_jump">
                        <span class="glyphicon glyphicon-list-alt"></span>
                    </button>
                    <a class="btn btn-success btn-chapter-nav" href="<?php 
                        $truyen_id = $data['truyen']['id'];
                        $soChuong = tachSoChuong($data['chuong']['ten_khongdau']) + 1;
                        if(checkChuongSau($truyen_id, $soChuong) == true){
                            echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/chuong-'.$soChuong;
                        }else{
                            echo '#';
                        }
                    ?>"  id="next_chap" >
                        <span class="hidden-xs">Chương </span>
                        tiếp <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
                <div class="group_story text-center" style="padding: 0 5px 0 5px;display: inline-block;text-align: center !important;">
                    <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px;">
                        <a href="https://nettruyenfull.com/truyen-tranh/bach-luyen-thanh-than-s39/chap-1/15138?utm_source=truyenfull&utm_campaign=bach-luyen-thanh-than" target="_blank">
                            Bách Luyện Thành Thần - Chuyện về một kẻ tôi luyện bản thân liên tục cho đến khi đạt tới <b style="color: red">đỉnh cao nhất của toàn bộ thể</b>
                            giới này
                        </a>
                    </div>
                    <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px;">
                        <a href="https://nettruyenfull.com/truyen-tranh/vo-luyen-inh-phong-s2/chap-1/4?utm_source=truyenfull&utm_campaign=vo-luyen-inh-phong" target="_blank">
                            Võ Luyện Đỉnh Phong - Sống trong nghịch cảnh, phát triển trong tuyệt địa, bất khuất không bỏ cuộc, mới có thể <b style="color: red">phá vỡ được cực đạo của võ thuật!</b>
                        </a>
                    </div>
                    <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px;">
                        <a href="https://nettruyenfull.com/truyen-tranh/thanh-thoi-thu-the-chung-chung-ien-sinh-sinh-te-s259/chap-0.000/70699?utm_source=truyenfull&utm_campaign=thanh-thoi-thu-the-chung-chung-ien-sinh-sinh-te" target="_blank">
                            Lạc vào thế giới người thú nơi <b style="color: red">nam nhân đẹp như Khổng tước</b>
                            còn nữ lại xấu không nỡ nhìn, cô gái lập nên <b style="color: red">hậu cung mỹ nam</b>
                            , cuộc đời chạm đỉnh!
                        </a>
                    </div>
                    <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px;">
                        <a href="https://nettruyenfull.com/truyen-tranh/au-pha-thuong-khung-s152-152?utm_source=truyenfull&utm_campaign=dau-pha-thuong-khung" target="_blank">
                            Đấu Phá Thương Khung - <b style="color: red">Một thiên tài tu luyện</b>
                            trong phút chốc thành phế vật, từ phế vật từng bước <b style="color: red">khẳng định lại chính mình</b>
                            !
                        </a>
                    </div>
                    <div id="ads-timviec-list" style="padding: 10px;display: inline;"></div>
                </div>
               
                <div class="text-center">
                    <button type="button" class="btn btn-warning" id="chapter_error">
                        <span class="glyphicon glyphicon-flag"></span>
                        Báo lỗi chương
                    </button>
                    <button type="button" class="btn btn-info" id="chapter_comment">
                        <span class="glyphicon glyphicon-comment"></span>
                        Bình luận
                    </button>
                </div>
                <div class="bg-info text-center visible-md visible-lg box-notice">Bạn có thể dùng phím mũi tên hoặc WASD để lùi/sang chương.</div>
                <div class="col-xs-12">
                    <div class="row" id="fb-comment-chapter"></div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>