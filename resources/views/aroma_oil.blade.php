@extends('layout')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container-aroma-oil ">
        <!-- <img src="./images/banner.jpg" class="w-full object-cover h-64"> -->
        <div id="slider" class="relative">
            <div class="relative">
                <ul class="relative m-0 p-0 h-2/3">
                    <li class="relative block m-0 p-0 text-center">
                        <img class="object-cover h-full w-full" src="./images/banner_aroma_oil.png" />
                        <h3 class="absolute text-5xl text-white  top-24 left-5 ml-20">
                            นวดน้ำมันอโรม่า</h3>
                        <a href="{{ url('/reserve_spa') }}"
                            class="button absolute text-2xl font-bold bg-fuchsia-950 p-5 px-20 text-white  top-80 rounded-lg left-5 ml-20">จองตอนนี้</a>
                    </li>

                    <li class="relative block m-0 p-0 text-center">
                        <img class="object-cover h-full w-full" src="./images/banner_aroma_oil.png" />
                        <h3 class="absolute text-5xl text-white   top-24 left-5 ml-20">
                            นวดน้ำมันอโรม่า</h3>
                        <a href="{{ url('/reserve_spa') }}"
                            class="button absolute text-2xl font-bold bg-fuchsia-950 p-5 px-20 text-white  top-80 rounded-lg left-5 ml-20">จองตอนนี้</a>
                    </li>


                    <li class="relative block m-0 p-0 text-center">
                        <img class="object-cover h-full w-full" src="./images/banner_aroma_oil.png" />
                        <h3 class="absolute text-5xl text-white   top-24 left-5 ml-20">
                            นวดน้ำมันอโรม่า</h3>
                        <a href="{{ url('/reserve_spa') }}"
                            class="button absolute text-2xl font-bold bg-fuchsia-950 p-5 px-20 text-white  top-80 rounded-lg left-5 ml-20">จองตอนนี้</a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="mx-20 header-aroma-oil">สิ่งที่ได้รับในการนวดน้ำมันอโรมา</p>

        <div class="mx-20 grid lg:grid-cols-3 mg:grid-cols-3 sm:grid-cols-1 gap-20">
            <div class="card-aroma-oil-receive">
                <img src="./images/side-view-photo-relaxed-woman-spa-salon-with-branch-orchid.jpg"
                    class="w-full rounded-lg">
                <p class="lg:mt-10 md:mt-10 sm:mt-5 sm:text-sm md:text-md lg:text-xl font-bold">
                    นวดได้ตรงจุดที่คุณต้องการคลายความเหนื่อยล้า
                </p>
            </div>

            <div class="card-aroma-oil-receive">
                <img src="./images/therapist-pouring-massage-oil-spa.jpg" class="w-full rounded-lg">
                <p class="lg:mt-10 md:mt-10 sm:mt-5 sm:text-sm md:text-md lg:text-xl font-bold">
                    น้ำมันสารสกัดจากธรรมชาติอย่างดี</p>
            </div>

            <div class="card-aroma-oil-receive">
                <img src="./images/lelavadee.jpg" class="w-full rounded-lg">
                <p class="lg:mt-10 md:mt-10 sm:mt-5 sm:text-sm md:text-md lg:text-xl font-bold">
                    นวดน้ำมันอโรมาด้วยพนักงานมืออาชีพ</p>
            </div>
        </div>

        <div class="mx-20 grid-aroma-oil-contant border border-fuchsia-950 rounded-xl">
            <div>
                <img src="./images/spa_aromaoil.png" class="w-full rounded-l-lg">
            </div>

            <div class="">
                <p class="text-center mt-20 text-xl font-semibold">นวดได้ตรงจุดที่คุณต้องการ</p>
                <p class="text-center mt-5 text-xl font-semibold">ความเหนื่อยล้า</p>

                <div class="flex justify-center">
                    <a href="{{ url('/reserve_spa') }}" class="button button-booking-aroma-contant">จองตอนนี้</a>
                </div>

            </div>
        </div>

        <p class="mx-20 header-aroma-oil">ประโยนช์ของการนวดน้ำมันอโรม่า</p>

        <div class="grid mx-20 lg:grid-cols-3 mg:grid-cols-3 sm:grid-cols-1  gap-10 mt-20 ">
            <div class="relative">
                <a href="{{ url('/reserve_group') }}">
                    <img class="object-cover h-64 w-full rounded-lg" src="./images/aroma_1.png" />

                    <h3 class="absolute text-2xl text-white bottom-5  left-1/2 -translate-x-1/2 -translate-y-1/2">
                        คลายความเมื่อยล้า</h3>
                </a>
            </div>

            <div class="relative">
                <a href="{{ url('/reserve_group') }}">
                    <img class="object-cover h-64 w-full rounded-lg" src="./images/aroma_2.png" />

                    <h3 class="absolute text-2xl text-white bottom-5  left-1/2 -translate-x-1/2 -translate-y-1/2">
                        คลายความเมื่อยล้า</h3>
                </a>
            </div>

            <div class="relative">
                <a href="{{ url('/reserve_group') }}">
                    <img class="object-cover h-64 w-full rounded-lg" src="./images/aroma_3.png" />

                    <h3 class="absolute text-2xl text-white bottom-5  left-1/2 -translate-x-1/2 -translate-y-1/2">
                        คลายความเมื่อยล้า</h3>
                </a>
            </div>
        </div>
    </div>


    <div class="mx-20 grid-aroma-oil-contant border border-fuchsia-950 rounded-r-xl">

        <div class="">
            <p class="text-center mt-20 text-xl font-semibold">นวดได้ตรงจุดที่คุณต้องการคลายความ
                เหนื่อยล้า</p>
            <p class="text-center mt-5 text-xl font-semibold">นวดได้ตรงจุดที่คุณต้องการคลายความเหนื่อยล้า</p>
            <div class="flex justify-center">
                <a href="{{ url('/reserve_spa') }}" class="button button-booking-aroma-contant">จองตอนนี้</a>
            </div>
        </div>

        <div>
            <img src="./images/aroma_oil_2.png" class="w-full rounded-r-lg">
        </div>
    </div>


    <div class="relative">
        <a href="{{ url('/reserve_group') }}">
            <img class="object-cover h-full w-full  mt-20"  src="./images/discoust_spa_2.png" />

            <a href="{{ url('/reserve_spa') }}"
                            class="mt-20 button absolute text-2xl font-bold bg-pink-400 p-5 px-20 text-white  top-80 rou left-5 ml-36 rounded-xl">จองตอนนี้</a>
        </a>
    </div>





</body>

<script>
function redirectToPageReserve_Spa() {
    window.location.href = "reserve_spa.php";
}
</script>


<script>
jQuery(document).ready(function($) {

    var interval = setInterval(function() {
        moveRight();
    }, 3000);

    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider ul li').width();
    var slideHeight = $('#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    $('#slider').css({
        width: slideWidth,
        height: slideHeight
    });

    $('#slider ul').css({
        width: sliderUlWidth,
        marginLeft: -slideWidth
    });

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: +slideWidth
        }, 200, function() {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: -slideWidth
        }, 200, function() {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');

        });
    };

    $('a.control_prev').click(function() {
        moveLeft();
    });

    $('a.control_next').click(function() {
        moveRight();
    });


    // Doesn't work quite yet (toggles random slide and only onClick) -->

    // $('input').click(function() {
    //  $('label').toggleClass('checked');
    //  moveRight();
    // });

    $("#slider ul").click(function() {
        //Stop the carousel on click
        clearInterval(interval);
    });
});
</script>


</html>

@endsection