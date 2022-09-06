<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<style>
    .mView{
        width: 100%;padding-top: 36%;_background: red;
        position: relative;overflow: hidden;
        }
    .mView video{position: absolute;width: 100%;left: 50%;top: 50%; transform:translate(-50%,-50%)}
</style>
<div class="mView">
    <video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay="" muted="" draggable="true"></video>
</div>


<div class="container visual01 d-flex">
    <div class="imgWrap1 ">
   
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_01.png" alt="" class="item01">
 
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_01_item01.png" alt="" class="item02">
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_01_item02.png" alt=""class="position-absolute item03">
        <img src="<?echo G5_THEME_IMG_URL?>/main_ani.gif" alt="" class="position-absolute item05">
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_01_item03.png" alt=""class="position-absolute item04">

    </div>
    <div class="txtWrap01">
        <h2>YBM 레몬만의<br>
        전용뷰어로 수업</h2>
        <h4>화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>
        YBM교육이 개발한 <span>화상수업 전용 뷰어</span>입니다.</h4>
    </div>
    
</div>
<div class="container visual02 d-flex">
    <div class="txtWrap02">
        <h2>화상수업을 위해 개발된<br>
        e-Classbook</h2>
        <h4>오프라인 교재를 그대로 올려서 수업하지 않습니다.<br>
        온라인 수업에 맞춰 개발된 <span>온라인 전용 e-Classbook</span>입니다.</h4>
    </div>
    <div class="imgWrap2">
   
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_02.png" alt="" class="item02_1">
 
        

    </div>
    
</div>
<div class="container visual03 d-flex">
    <div class="imgWrap3 ">
   
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_03.png" alt="" class="item03_1">
 
        <img src="<?echo G5_THEME_IMG_URL?>/img_6.png" alt="" class="item03_2">

    </div>
    <div class="txtWrap03">
        <h2>지루할 틈이 없는 수업 진행</h2>
        <h4>
            <span>온라인 교구와 액티비티</span>로 흥미있는 수업이 진행됩니다.
            <br>선생님과 함께 직접 수업에 참여합니다.
    </h4>
    </div>
    
</div>
<div class="container visual01 d-flex">
    <div class="imgWrap1 ">
   
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_01.png" alt="" class="item01">
 
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_01_item01.png" alt="" class="item02">
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_01_item02.png" alt=""class="position-absolute item03">
        <img src="<?echo G5_THEME_IMG_URL?>/main_ani.gif" alt="" class="position-absolute item05">
        <img src="<?echo G5_THEME_IMG_URL?>/main_visual_01_item03.png" alt=""class="position-absolute item04">

    </div>
    <div class="txtWrap01">
        <h2>YBM 레몬만의<br>
        전용뷰어로 수업</h2>
        <h4>화상 회의실 같은 딱딱한 뷰어가 아닙니다.<br>
        YBM교육이 개발한 <span>화상수업 전용 뷰어</span>입니다.</h4>
    </div>
    
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    .slide1 .prev,.slide1 .next{cursor: pointer;}
    .slide1 img.prev,img.next{position: absolute;top: 50%;transform:translateY(-50%)}
    .slide1 img.prev{left: -50px;}
    .slide1 img.next{right: -50px;}
    .slickslide1 .sItem{
        padding: 15px;opacity: 0.5;transition:0.3s;
        transform:scale(0.8)
    }
    .slickslide1 .sItem.slick-center{padding: 15px;opacity: 1;transform:scale(1)}




    .slide2 .prev,.slide2 .next{cursor: pointer;}
    .slide2 img.prev,img.next{position: absolute;top: 50%;transform:translateY(-50%)}
    .slide2 img.prev{left: -50px;}
    .slide2 img.next{right: -50px;}

    .slickslide2 .sItem{margin: 0 10px;}

    .slide2 .sItem{position: relative;border-radius:10px;overflow: hidden;}
    .slide2 .sItem .txt{
        position: absolute;
        width: 100%;height: 100%;
        top: 0;left: 0;background-color:rgba(0,0,0,0.3);
          
    }
    .slide2 .sItem .txt a{
        display: flex;height: 100%;
        justify-content: center;align-items: center;
        color:white;font-size:2em
    }
    /* .slickslide2 .sItem.slick-center{padding: 15px;opacity: 1;transform:scale(1)} */
 
</style>

<div class="container position-relative slide1">
  <img src="<?php echo G5_THEME_IMG_URL?>/prev.png" alt="" class="prev d-none d-md-block" >
  <img src="<?php echo G5_THEME_IMG_URL?>/next.png" alt="" class="next d-none d-md-block">
  <div class="slickslide1">
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img1.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img2.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img3.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img4.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img5.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img6.jpg" alt="" class="img-fluid">
    </div>
    <div class="sItem">
        <img src="<?php echo G5_THEME_IMG_URL ?>/img7.jpg" alt="" class="img-fluid">
    </div>

  </div>
</div>


<div class="container position-relative slide2">
    <img src="<?php echo G5_THEME_IMG_URL?>/prev.png" alt="" class="prev d-none d-md-block" >
    <img src="<?php echo G5_THEME_IMG_URL?>/next.png" alt="" class="next d-none d-md-block">
    <div class="slickslide2">
        <?php
            echo latest('theme/pic_hanyong5', 'gallery', 7, 23);		
        ?>
    </div>
</div>









<script>
    $('.slickslide1').slick({
    centerMode: true,
    slidesToShow: 5,
    nextArrow:$('.slide1 .next'),
    prevArrow:$('.slide1 .prev'),
    responsive: [
        {
        breakpoint: 768,
        settings: {
            centerMode: true,
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            centerMode: true,
            slidesToShow: 1
        }
        }
    ]
    });


    $('.slickslide2').slick({
    centerMode: true,
    slidesToShow: 5,
    nextArrow:$('.slide2 .next'),
    prevArrow:$('.slide2 .prev'),
    responsive: [
        {
        breakpoint: 768,
        settings: {
            centerMode: true,
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            centerMode: true,
            slidesToShow: 1
        }
        }
    ]
    });
    
</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');