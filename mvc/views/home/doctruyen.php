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
                    <?php $noidung = preg_replace('/\s+/', ' ',$data['chuong']['noidung']); ?>
                    <button onclick="textToSpeech('<?php echo $noidung; ?>');" type="button" class="btn btn-success btn-chapter-nav chapter_jump">
                        <span class=""><i class="fas fa-play"></i></span>
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
                    <button onclick="textToSpeech('<?php echo $noidung; ?>');" type="button" class="btn btn-success btn-chapter-nav chapter_jump">
                        <span class=""><i class="fas fa-play"></i></span>
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
        </div>
    </div>
</div>
</div>


<!-- Script ResponsiveVoiceJS và mã JavaScript -->
<script>
// Hàm chuyển đổi văn bản thành giọng nói
function textToSpeech(text) {
    // Sử dụng ResponsiveVoiceJS để phát giọng nói
    responsiveVoice.speak(text, "Vietnamese Female", {rate: 1});
}
</script>
<script src="https://code.responsivevoice.org/responsivevoice.js?key=PQrJj3jS"></script>