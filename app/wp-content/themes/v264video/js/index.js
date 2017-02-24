$(document).ready(function () {
        // 广告创意
    $jq('#carousel_1').carousel({
        interval: 4200
    });
    $jq('#carousel_1_m').carousel({
        interval: 4200
    });
    $jq('#carousel_1_m').hammer().on('swipeleft', function () {
        $jq(this).carousel('next');
    });
    $jq('#carousel_1_m').hammer().on('swiperight', function () {
        $jq(this).carousel('prev');
    });

    // 宣传片
    $jq('#carousel_2').carousel({
        interval: 8600
    });
    $jq('#carousel_2_m').carousel({
        interval: 8600
    });
    $jq('#carousel_2_m').hammer().on('swipeleft', function () {
        $jq(this).carousel('next');
    });
    $jq('#carousel_2_m').hammer().on('swiperight', function () {
        $jq(this).carousel('prev');
    });


    // 顶部轮播
    $jq('#mainCarousel').carousel();
    $jq('#mainCarousel').hammer().on('swipeleft', function () {
        $jq(this).carousel('next');
    });
    $jq('#mainCarousel').hammer().on('swiperight', function () {
        $jq(this).carousel('prev');
    });
    
}