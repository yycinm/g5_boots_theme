<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skin</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    <div class="mylatest">
        <div class="title">
        <a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a><!--메인제목-->
            <a href="<?php echo get_pretty_url($bo_table); ?>" class="mIcon">icon</a><!--메인아이콘-->
        </div>
        <div class="content">
        <?php for ($i=0; $i<$list_count; $i++) {  ?> 
            <li>
                <a href=" <?echo get_pretty_url($bo_table, $list[$i]['wr_id'])?>"> <!--기사제목-->
                    <h4><? echo $list[$i]['subject']; ?>
                <? if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";?>
                </h4> 
                    <!-- 밑에서 복붙한거 -->
                    <p>더보기</p><!--날짜-->
                </a>
            </li>
           
<?} ?>

<?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
        </div>
    </div>
   

<script src="js/script.js"></script>
</body>
</html>

   
    </ul>
    <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a>

</div>
