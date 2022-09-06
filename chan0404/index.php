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
        .imgSlide{
            width: 1000px;;margin: 0 auto;height: 1000px;
            background: pink;
        }
        .imgSlide .slide{position: relative;overflow: hidden;width: 100%;height: 900px;}
        .imgSlide img{width: 100%;}
        .imgSlide a{position: absolute;left: 100%;width: 100%;;top: -100px;}
        .imgSlide a:first-child{left: 0}
        .imgSlide p{position: absolute;font-size:48px;color:white;font-weight:600;left: 37%;top: 37%; letter-spacing:.2rem;;}
</style>
<div class="imgSlide">
    <div class="slideWrap">
        
        <a href="<?php echo G5_URL ?>"><p>사람과 삶, 공간에 대한<br>
깊이있는 고민을 통해
</p><img src="<?php echo G5_THEME_IMG_URL ?>/nav1.jpg" alt="<?php echo $config['cf_title']; ?>"></a>
        <a href="<?php echo G5_URL ?>"><p>가장 편안하고 이로운<br>
        라이프스타일을 만들어갑니다.
</p><img src="<?php echo G5_THEME_IMG_URL ?>/nav2.jpg" alt="<?php echo $config['cf_title']; ?>"></a>
        <a href="<?php echo G5_URL ?>"><p>나는 이로움을 만듭니다<br>
        나는 이안입니다
</p><img src="<?php echo G5_THEME_IMG_URL ?>/nav3.jpg" alt="<?php echo $config['cf_title']; ?>"></a>
    </div>


</div>
<div class="next">next</div>
<div class="prev">prev</div>

<h2>test</h2>
<div class="container">
    <div class="row">

        <div class="col-6">test1</div>
        <div class="col-6">test1</div>
    </div>
</div>

<script>
    let current = 0;
    const liNum = $(".slideWrap>a").length

    $(".next").click(function(){
        $(".slideWrap>a").eq(current).css("left",0).stop().animate({left:"-100%"})
        current ++;
        if( current >2)current =0;
        $(".slideWrap>a").eq(current).css("left","100%").stop().animate({left:0})
        console.log(current)

    })
    $(".prev").click(function(){
        $(".slideWrap>a").eq(current).css("left",0).stop().animate({left:"100%"})
        current --;
        if( current<0)current =2;
        $(".slideWrap>a").eq(current).css("left","-100%").stop().animate({left:0})
        console.log(current)

    })
   setInterval(function(){$(".next").trigger(("click"))},3000)


</script>

<?php
echo G5_THEME_PATH;
echo "<br>";
echo G5_THEME_IMG_URL."<BR>";
echo G5_THEME_CSS_URL."<BR>";
echo G5_THEME_JS_URL."<BR>";
echo G5_BBS_URL."<BR>";
?>

<div class="container">
    <div class="row">
        <div class="col">

        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', 'notice', 3, 24);
        ?>
        </div>

    </div>
</div>
<div class="imgWrap">
    <div class="row">
        <div class="col">
    
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/pic_basic', 'qa', 4, 24);
        ?>
        </div>

    </div>

</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');