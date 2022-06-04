<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ef8e692f4f.js" crossorigin="anonymous"></script>
    <title>Doc truyen</title>
</head>

<body id="body_chapter" class="" cz-shortcut-listen="true">
    <div id="wrap">
        <div id="chapter-big-container" class="container chapter">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Giới thiệu nội dung -->

                    <h1 href="#" class="truyen-title" "><?php echo $truyen->Tentruyen;  ?></h1>
                    <!-- ten truyen -->
                    <a href=" #" class="truyen-title" title="<?php echo $value['Tentruyen']?>"></a>                    
                    <h2>
                        <a href="#" class="chapter-title" title="Chuong 1: AAAAAAAAAA">
                                </span><?php  echo $chuong->Chuongten  ?>
                        </a>                    
                    </h2>
                    <hr class="chapter-start" />
                    <div class="chapter-nav text-center" id="chapter-nav-top">
                        <div class="btn-group ">
                            <a class="btn btn-success btn-chapter-nav" 
                            href="index.php?controller=chuong&action=doc_truyen&idchuong=<?php  
                            echo $chuongtruoc -> Id_Chuong ;
                            ?>" title="Không có chương trước" id="prev_chap" data-cid="" >
                                <span class="hidden-xs"><i class="bi bi-chevron-left"></i> Chương </span>trước
                            </a>
                            <button type="button"  class="btn btn-success btn-chapter-nav chapter_jump" >
                                <i class="bi bi-list"></i>
                            </button >
                            <a class="btn btn-success btn-chapter-nav" 
                            href="index.php?controller=chuong&action=doc_truyen&idchuong=<?php  
                            echo $chuongsau -> Id_Chuong ;
                            ?>" 
                            title="Chương 2"
                            id="next_chap" data-cid="436265">
                                <span class="hidden-xs">Chương tiếp <i class="bi bi-chevron-right"></i> </span>
                            </a>
                        </div>
                    </div>
                    <br />
                    <div class="group_story text-center" style="  font-weight: bold;  padding: 0 5px 0 5px; display: flex; align-items: center;flex-direction: column;text-align: center; ">
                        <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px" >
                            <a href="https://truyenfull.vn/giai-nhan-va-luat-su-010620/chuong-1/" target="_blank" >
                                Đọc thêm truyện
                                <span style="color: #e30c0c" >TẠI ĐÂY!</span >
                            </a>
                        </div>
                        <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px" >
                            <a href="https://truyenfull.vn/giai-nhan-va-luat-su-010620/chuong-1/" target="_blank" >
                                Đọc thêm truyện
                                <span style="color: #e30c0c" >TẠI ĐÂY!</span >
                            </a>
                        </div>
                        <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px" >
                            <a href="https://truyenfull.vn/giai-nhan-va-luat-su-010620/chuong-1/" target="_blank" >
                                Đọc thêm truyện
                                <span style="color: #e30c0c" >TẠI ĐÂY!</span >
                            </a>
                        </div>
                    </div>
                    <hr class="chapter-end" />

                    <!-- Nội dung chương  -->
                    <div id="chapter-c" class="chapter-c">
                        <p class="text-break">
                            <?php  echo $chuong->Noidung;?>
                        </p>
                    </div>
                    <hr class="chapter-end" />
                    
                    <!-- Giới thiệu nội dung -->
                    <div class="chapter-nav text-center" id="chapter-nav-top">
                        <div class="btn-group">
                            <a class="btn btn-success btn-chapter-nav" 
                            href="index.php?controller=chuong&action=doc_truyen&idchuong=<?php  
                            echo $chuongtruoc -> Id_Chuong ;
                            ?>" 
                            title="Không có chương trước" id="prev_chap" data-cid="" >
                                <span class="hidden-xs"><i class="bi bi-chevron-left"></i> Chương </span>trước
                            </a>
                            <button type="button"  class="btn btn-success btn-chapter-nav chapter_jump" >
                                <i class="bi bi-list"></i>
                            </button >
                            <a class="btn btn-success btn-chapter-nav" 
                            href="index.php?controller=chuong&action=doc_truyen&idchuong=<?php  
                            echo $chuongsau -> Id_Chuong ;
                            ?>"  title="Chương 2"
                                id="next_chap" data-cid="436265">
                                <span class="hidden-xs">Chương tiếp <i class="bi bi-chevron-right"></i> </span> 
                            </a>
                        </div>
                    </div>
                    <br />
                    <!-- Boc goi y -->
                    <div class="group_story text-center" style="  font-weight: bold;  padding: 0 5px 0 5px; display: flex; align-items: center;flex-direction: column;text-align: center; ">
                        <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px" >
                            <a href="https://truyenfull.vn/giai-nhan-va-luat-su-010620/chuong-1/" target="_blank" >
                                Đọc thêm truyện
                                <span style="color: #e30c0c" >TẠI ĐÂY!</span >
                            </a>
                        </div>
                        <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px" >
                            <a href="https://truyenfull.vn/giai-nhan-va-luat-su-010620/chuong-1/" target="_blank" >
                                Đọc thêm truyện
                                <span style="color: #e30c0c" >TẠI ĐÂY!</span >
                            </a>
                        </div>
                        <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px" >
                            <a href="https://truyenfull.vn/giai-nhan-va-luat-su-010620/chuong-1/" target="_blank" >
                                Đọc thêm truyện
                                <span style="color: #e30c0c" >TẠI ĐÂY!</span >
                            </a>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button type="button" class="btn btn-warning" id="chapter_error" >
                            <span class="glyphicon glyphicon-flag"></span> Báo lỗi chương
                        </button >
                        <button type="button" class="btn btn-info" id="chapter_comment" >
                            <span class="glyphicon glyphicon-comment"></span> Bình luận
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>