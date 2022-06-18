<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/doc_truyen.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/ef8e692f4f.js" crossorigin="anonymous"></script>
    <title>Doc truyen</title>
</head>

<body>


    <div id="chapter-big-container" class="container chapter">
        <div class="row">
            <div class="col-xs-12" style="margin-top:30px ;">
                <h1 href="#" class="truyen-title"><?php echo $truyen->Tentruyen;  ?></h1>
                <!-- ten truyen -->
                <a href=" #" class="truyen-title" title="<?php echo $value['Tentruyen']?>"></a>
                <h2>
                    <a href="#" class="chapter-title" title="Chuong 1: AAAAAAAAAA">
                        <!-- <?php echo $value['chuong']['ten']?> -->
                        <span class="chapter-text"><span><?php  echo $chuong->Chuongso;?></span>
                        </span><?php  echo $chuong->Chuongten  ?>
                    </a>
                </h2>
                <hr class="chapter-start">
                <div class="chapter-nav text-center" id="chapter-nav-top">
                    <div class="btn-group">

                        <button type="button" class="btn btn-success btn-chapter-nav chapter_jump">
                            <i class="bi bi-list"></i>
                        </button>
                        <?php if($idchuong>=2&&$idchuong<$kt)
                        {
                        $chuongtruoc=$idchuong-1;
                        $chuongsau=$idchuong+1;
                        }
                        else 
                        {
                            $chuongtruoc=1;
                            $chuongsau=$kt; 
                        }
                      
                        ?>
                        <a class="btn btn-success btn-chapter-nav"
                            href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?php echo $truyen->Id_Truyen; ?>&idchuong=<?php echo $chuongtruoc?>">Chuong
                            truoc</a>
                        <a class="btn btn-success btn-chapter-nav"
                            href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?php echo $truyen->Id_Truyen; ?>&idchuong=<?php echo $chuongsau?>">Chuong
                            sau</a>

                    </div>
                </div>

                <div class="group_story text-center"
                    style="font-weight: bold ; padding:0 5px 0 5px; display:inline-block; text-align:center !important;">
                    <div class="bg-info col-xs-12 text-center box-notice mr-box" style="padding: 8px;"> <a href="#"
                            target="_blank"> Hello user <span style="color:#e30c0c"><?php echo $ten; ?>
                            </span>Đọc truyện vui vẻ nha</a>
                    </div>


                    <hr class="chapter-end">
                    <div class="chapter-c" id="chapter-c">
                        <div class="visible-md  visible-lg ads-responsive incontent-ad" id="ads-chapter-pc-top"
                            align="center" style="height:90px"></div>
                        <p class="text-break">day la noi dung
                            <?php  echo $chuong->Noidung;?>
                        </p>

                        <!-- <p><?php echo $value['chuong']['noidung'] ?> < </p> -->

                    </div>
                    <hr class="chapter-end" id="chapter-end-bot">
                    <div class="chapter-nav text-center" id="chapter-nav-bot">
                        <div class="btn-group text-center">
                            <a class="btn btn-success btn-chapter-nav"
                                href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?php echo $truyen->Id_Truyen; ?>&idchuong=<?php echo $chuongtruoc?>">Chuong
                                truoc</a>
                            <a class="btn btn-success btn-chapter-nav"
                                href="index.php?controller=chuong&action=doc_truyen&idtruyen=<?php echo $truyen->Id_Truyen; ?>&idchuong=<?php echo $chuongsau?>">Chuong
                                sau</a>
                        </div>



                        <div class="col-xs-12">
                            <div class="row" id="fb-comment-chapter"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>