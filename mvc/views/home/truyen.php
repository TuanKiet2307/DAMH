<?php
    $result = $data['count'];
    $pages = ceil($result / 10);
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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
                <?php $dem=1; foreach($data['chuong'] as $val) {?>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <ul class="list-chapter">
                    <?php if($data['truyen']['chuong'] == $dem) {?>
                        <li>
                        <span class="glyphicon glyphicon-certificate"></span>
                        
                         <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mở Chương</h5>
                                    </div>
                                    <?php if($_SESSION['truyenfull_xu'] >= 50) { ?>       
                                    <div class="modal-body">
                                    <form id="truxuForm" action="<?php echo XuLyTruXu; ?>" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $_SESSION['truyenfull_id'] ?>">
                                        
                                        <input type="hidden" name="xu" value="<?php echo $_SESSION['truyenfull_xu'] ?>">
                                        <input type="hidden" name="tendangnhap" value="<?php echo $_SESSION['truyenfull_user'] ?>">
                                        Dùng 50 xu để mở chương mới nhất !
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button> 
                                        <button id="complete-button" type="button" class="btn btn-primary" data-bs-dismiss="modal">Hoàn Thành</button>
                                    </div>
                                    </form>
                                    <?php }else { ?>
                                    <div class="modal-body">
                                        Bạn không đủ xu !
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button> 
                                    </div>
                                    <?php } ?>
                                </div>   
                            </div>
                        </div>


                        <script>
                           document.getElementById('complete-button').addEventListener('click', function(event) {
                               
                                const form = document.getElementById('truxuForm');
                                const formData = new FormData(form);

                                fetch(form.action, {
                                    method: 'POST',
                                    body: formData
                                })
                                
                                window.location.href = "<?php echo APP_URL . 'home/doctruyen/' . $data['truyen']['ten_khongdau'] . '/' . $val['ten_khongdau']; ?>";
                            
                            });

                        </script>



                            <a href="<?php echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/'.$val['ten_khongdau'] ?>" title="<?php echo $val['ten'] ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span class="chapter-text">
                                    
                                </span>
                                <?php echo $val['ten'] ?>
                            </a>
                        </li>
                       

                        <?php }else{ ?>  
                        <li>
                            <span class="glyphicon glyphicon-certificate"></span>
                            <a href="<?php echo APP_URL.'home/doctruyen/'.$data['truyen']['ten_khongdau'].'/'.$val['ten_khongdau'] ?>" title="<?php echo $val['ten'] ?>">
                                <span class="chapter-text">
                                    
                                </span>
                                <?php echo $val['ten'] ?>
                            </a>
                        </li>  
                        <?php } ?>
                    </ul>
                </div>
                <?php $dem++;} ?>
            </div>
     
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










