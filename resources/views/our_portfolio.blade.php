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

    <div>
        <div id="slider" class="relative">
            <div class="relative">
                <ul class="relative m-0 p-0 ">
                    <li class="relative block m-0 p-0 text-center ">
                        <img class="object-cover w-96" src="./images/banner_portfolio.png" />
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-24 lg:left-28  md:left-28 sm:left-5 ">
                            เชี่ยวชาญเรื่องการนวด</h3>
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-44  lg:left-28  md:left-28 sm:left-5  ">
                            ประสบการณ์มากกว่า 5 ปี</h3>
                        <a href="{{ url('/reserve_spa') }}"
                            class="button absolute text-2xl font-bold bg-fuchsia-950 p-5 px-20 text-white  top-80 rounded-lg lg:left-28 md:left-28 sm:left-5">จองตอนนี้</a>
                    </li>

                    <li class="relative block m-0 p-0 text-center">
                        <img class="object-cover  w-full" src="./images/banner_portfolio.png" />
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-24  lg:left-28  md:left-28 sm:left-5 ">
                            เชี่ยวชาญเรื่องการนวด</h3>
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-44  lg:left-28  md:left-28 sm:left-5 ">
                            ประสบการณ์มากกว่า 5 ปี</h3>
                        <a href="{{ url('/reserve_spa') }}"
                            class="button absolute text-2xl font-bold bg-fuchsia-950 p-5 px-20 text-white  top-80 rounded-lg  lg:left-28 md:left-28 sm:left-5">จองตอนนี้</a>
                    </li>

                    <li class="relative block m-0 p-0 text-center">
                        <img class="object-cover w-full"src="./images/banner_portfolio.png" />
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-24  lg:left-28  md:left-28 sm:left-5 ">
                            เชี่ยวชาญเรื่องการนวด</h3>
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-44  lg:left-28  md:left-28 sm:left-5 ">
                            ประสบการณ์มากกว่า 5 ปี</h3>
                        <a  href="{{ url('/reserve_spa') }}"
                            class="button absolute text-2xl font-bold bg-fuchsia-950 p-5 px-20 text-white  top-80 rounded-lg lg:left-28 md:left-28 sm:left-5">สมัครตอนนี้</a>
                    </li>
                </ul>
            </div>
        </div>






        <p class="mt-20 px-20 font-bold text-2xl text-fuchsia-950">ผลงานการนวด</p>

        <div class="container-our-portfolio ">
            <div class="card-our-portforio grid lg:grid-cols-2 sm:grid-cols-1 gap-5 py-10 mt-10">
                <div class="mt-40">
                    <p class="text-header-card">ผลงานการนวด</p>
                    <p class="text-card">นวดน้ำมันอโรมา
                    </p>
                    <p class="text-card">ด้วยพนักงานมืออาชีพให้กับ</p>
                    <p class="text-card">พนักงานบริษัท SCB จำนวน 30 คน</p>
                </div>

                <img src="./images/portfolio-1.png" class="rounded-xl w-full">
            </div>



            <div class="card-our-portforio grid lg:grid-cols-2 sm:grid-cols-1 gap-5 py-10 mt-10">
                <img src="./images/portfolio-2.png" class="rounded-xl w-full">
                <div class="mt-40">
                    <p class="text-header-card">ผลงานการนวด</p>
                    <p class="text-card">นวดน้ำมันอโรมา
                    </p>
                    <p class="text-card">ด้วยพนักงานมืออาชีพให้กับ</p>
                    <p class="text-card">พนักงานบริษัท SCB จำนวน 30 คน</p>
                </div>
            </div>


            <div class="card-our-portforio grid lg:grid-cols-2 sm:grid-cols-1 gap-5 py-10 mt-10">
                <div class="mt-40">
                    <p class="text-header-card">ผลงานการนวด</p>
                    <p class="text-card">นวดน้ำมันอโรมา
                    </p>
                    <p class="text-card">ด้วยพนักงานมืออาชีพให้กับ</p>
                    <p class="text-card">พนักงานบริษัท SCB จำนวน 30 คน</p>
                </div>
                <img src="./images/portfolio-3.png" class="rounded-xl w-full">
            </div>


            <div class="flex justify-center">
                <a href="{{ url('/reserve_spa') }}" class="button button-booking-our-portforio">จองตอนนี้</a>
            </div>
        </div>
    </div>

</body>




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