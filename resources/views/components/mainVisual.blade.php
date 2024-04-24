<?php
$sliderImgList = array(
    'pc' => array(
//        'mv_movie_pc.mp4',
        'top_img_main_01_pc.png',
        'top_img_main_02_pc.png',
        'top_img_main_03_pc.png',
    ),
    'sp' => array(
//        'mv_movie_sp.mp4',
        'top_img_main_01_sp.png',
        'top_img_main_02_sp.png',
        'top_img_main_03_sp.png',
    ),
);
$mvCatchCopy = '';//メインビジュアルのキャッチコピーを「''」内に入力してください
?>

@if(($sliderImgList['pc'] && count($sliderImgList['pc']) > 0) || ($sliderImgList['sp'] && count($sliderImgList['sp']) > 0))

    <div class="mv-catch">
        <div class="inner">
            <h1 class="heading-mv">
                <picture class="image">
                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/top_mainimg_pc_catch_sp.png')}} 2x">
                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/top_mainimg_pc_catch_pc.png')}} 2x">
                    <img class="sizes" src="{{asset('images/contentBox/top_mainimg_pc_catch_pc.png')}}" alt="">
                </picture>
            </h1>
        </div>

    </div>

<div id="mvSlider">
    <div class="mvWrapper">
        <div class="mvInner">
            <?php
            $imgListPc = $sliderImgList[ 'pc' ];
            $imgListSp = $sliderImgList[ 'sp' ];
            ?>
            <?php if(count($imgListPc) == 1): ?>
            <div class="mvOnlyOne">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{asset('images/mvSlider/'. $imgListSp[0])}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/mvSlider/'. $imgListPc[0])}}">
                    <img class="mvPicture" src="{{asset('images/mvSlider/'. $imgListPc[0])}}" alt="<?php echo $mvCatchCopy; ?>">
                </picture>
            </div>
            <?php elseif(count($imgListPc) > 1): ?>
            <div class="mvMultiple js-mvSlider">
                <div class="swiper-wrapper">
                    <?php foreach($imgListPc as $key => $imgName): ?>
                    <div class="swiper-slide">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{asset('images/mvSlider/'. $imgListSp[$key])}} 2x">
                            <source media="(min-width: 768px)" srcset="{{asset('images/mvSlider/'. $imgName)}} 2x">
                            <img class="mvPicture" src="{{asset('images/mvSlider/'. $imgName)}}" alt="<?php echo $mvCatchCopy; ?>">
                        </picture>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <?php endif; ?>
{{--            <a href="#template01">--}}
{{--                <div class="scrollDownGuide">--}}
{{--                    SCROLL DOWN--}}
{{--                </div>--}}
{{--            </a>--}}
        </div>
    </div>

    <script>
        $(function() {
            var mySwiperTop = new Swiper('#mvSlider .js-mvSlider', {// Swiperオプション
                loop: true,
                // effect: 'fade',// アニメーションを指定（'slide' 'fade' 'coverflow' 'flip'）
                speed: 1000,// 移動速度（3000=3秒）
                autoplay: {
                    delay: 3000,// スライド間の間隔（3000=3秒）
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true
                },
                slidesPerView: 1.57,
                centeredSlides: true,
                spaceBetween: 60,
                loopAdditionalSlides: 1,
                simulateTouch: false,
                resizeReInit: true,
                watchOverflow: true,
                breakpoints: {
                    767: {// スマホのみ
                        slidesPerView: 1.18,
                        spaceBetween: 15,
                        speed: 1000,// 移動速度（3000=3秒）
                        autoplay: {
                            delay: 3000,// スライド間の間隔（3000=3秒）
                        }
                    }
                }
            });
            $('#mvSlider .mvMultiple .swiper-slide').on('touchmove', function(){
                return true;
            });
        });
    </script>
</div>

@endif
