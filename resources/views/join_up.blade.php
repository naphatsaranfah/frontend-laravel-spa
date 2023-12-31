@extends('layout')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="mt-40 ">
        <div id="slider" class="relative">
            <div class="relative">
                <ul class="relative m-0 p-0 ">
                    <li class="relative block m-0 p-0 text-center ">
                        <img class="object-cover w-96" src="./images/banner_join_up_2.png" />
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-24 lg:left-28  md:left-28 sm:left-5 ">
                            ยินดีต้อนรับสู่ Lirena</h3>
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-44  lg:left-28  md:left-28 sm:left-5  ">
                            สมัครเป็นเทอราปิสกับเรา</h3>
                        <a href="{{ url('/apply_therapist') }}"
                            class="button absolute text-2xl font-bold bg-fuchsia-950 p-5 px-20 text-white  top-80 rounded-lg lg:left-28 md:left-28 sm:left-5">สมัครตอนนี้</a>
                    </li>

                    <li class="relative block m-0 p-0 text-center">
                        <img class="object-cover  w-full" src="./images/banner_join_up_2.png" />
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-24  lg:left-28  md:left-28 sm:left-5 ">
                            ยินดีต้อนรับสู่ Lirena</h3>
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-44  lg:left-28  md:left-28 sm:left-5 ">
                            สมัครเป็นเทอราปิสกับเรา</h3>
                        <a href="{{ url('/apply_therapist') }}"
                            class="button absolute text-2xl font-bold bg-fuchsia-950 p-5 px-20 text-white  top-80 rounded-lg  lg:left-28 md:left-28 sm:left-5">สมัครตอนนี้</a>
                    </li>

                    <li class="relative block m-0 p-0 text-center">
                        <img class="object-cover w-full" src="./images/banner_join_up_2.png" />
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-24  lg:left-28  md:left-28 sm:left-5 ">
                            ยินดีต้อนรับสู่ Lirena</h3>
                        <h3
                            class="absolute lg:text-5xl md:text-3xl sm:text-3xl text-fuchsia-950  top-44  lg:left-28  md:left-28 sm:left-5 ">
                            สมัครเป็นเทอราปิสกับเรา</h3>
                        <a href="{{ url('/apply_therapist') }}"
                            class="button absolute text-2xl font-bold bg-fuchsia-950 p-5 px-20 text-white  top-80 rounded-lg lg:left-28 md:left-28 sm:left-5">สมัครตอนนี้</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="grid-aroma-oil-benefit">
            <div class="card-join-up">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-join-up" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                    <p class="mt-10">รายได้ดี</p>
                    <p class="mt-5">สูงสุดถึง 1000฿ ต่อวัน</p>
                </div>
            </div>

            <div class="card-join-up">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-join-up" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                    <p class="mt-10">รับเงินไว</p>
                    <p class="mt-5">ภายใน 3 ชั่วโมงหลังจบงาน</p>
                </div>
            </div>

            <div class="card-join-up">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-join-up" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                    <p class="mt-10">มียูนิฟอร์มให้</p>
                    <p class="mt-5">ยูนิฟอร์มจำนวน 3 ชุด</p>
                </div>
            </div>
        </div>



        <div class="relative">

            <img class="object-cover h-full w-full mt-10 " src="./images/banner_join_up.png" />

            <div class="">
                <a href="{{ url('/apply_therapist') }}"
                    class="button absolute lg:text-2xl md:text-2xl sm:text-md font-bold  bg-fuchsia-950 lg:p-5 md:p-5 sm:p-3 lg:px-20 md:px-20 sm:px-12 text-white  lg:top-80 md:top-80 sm:top-20 rounded-lg lg:left-5 lg:ml-20 md:left-5 sm:ml-6">สมัครตอนนี้</a>


                <div class="px-20">
                    <p class="text-2xl font-bold text-fuchsia-950 mt-10">ความรู้สึกพนักงาน</p>
                </div>

                <div class="px-20 grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 mt-10 gap-10">
                    <div class="text-center bg-white rounded-xl   border-grey border-solid border-2">

                        <div class="">
                            <img src="./images/therapist-4.png" class="image-me w-full">
                            <div class="p-5">
                                <p class="py-2 text-lg text-fuchsia-950 font-bold text-left">คุณ นภัสรัญช์ อินเทวา</p>
                                <p class="py-2 text-md text-fuchsia-950 font-bold text-left">ร่วมงานกับเรามาแล้ว 2 ปี
                                </p>
                                <p class="py-2 text-md text-fuchsia-950 font-bold text-left">ประทับใจการทำงานที่นี้
                                    เพื่อนร่วมงานดี และสวัสดิการดีเป็นอย่างมาก</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center bg-white rounded-xl   border-grey border-solid border-2">

                        <div class="">
                            <img src="./images/therapist-6.png" class="image-me w-full">
                            <div class="p-5">
                                <p class="py-2 text-lg text-fuchsia-950 font-bold text-left">คุณ นภัสรัญช์ อินเทวา</p>
                                <p class="py-2 text-md text-fuchsia-950 font-bold text-left">ร่วมงานกับเรามาแล้ว 2 ปี
                                </p>
                                <p class="py-2 text-md text-fuchsia-950 font-bold text-left">ประทับใจการทำงานที่นี้
                                    เพื่อนร่วมงานดี และสวัสดิการดีเป็นอย่างมาก</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center bg-white rounded-xl   border-grey border-solid border-2">

                        <div class="">
                            <img src="./images/therapist-6.png" class="image-me w-full">
                            <div class="p-5">
                                <p class="py-2 text-lg text-fuchsia-950 font-bold text-left">คุณ นภัสรัญช์ อินเทวา</p>
                                <p class="py-2 text-md text-fuchsia-950 font-bold text-left">ร่วมงานกับเรามาแล้ว 2 ปี
                                </p>
                                <p class="py-2 text-md text-fuchsia-950 font-bold text-left">ประทับใจการทำงานที่นี้
                                    เพื่อนร่วมงานดี และสวัสดิการดีเป็นอย่างมาก</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center bg-white rounded-xl   border-grey border-solid border-2">

                        <div class="">
                            <img src="./images/therapist-1.png" class="image-me w-full">
                            <div class="p-5">
                                <p class="py-2 text-lg text-fuchsia-950 font-bold text-left">คุณ นภัสรัญช์ อินเทวา</p>
                                <p class="py-2 text-md text-fuchsia-950 font-bold text-left">ร่วมงานกับเรามาแล้ว 2 ปี
                                </p>
                                <p class="py-2 text-md text-fuchsia-950 font-bold text-left">ประทับใจการทำงานที่นี้
                                    เพื่อนร่วมงานดี และสวัสดิการดีเป็นอย่างมาก</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

<script>
function redirectToPageScan_QR_Code() {
    window.location.href = "scan_qr_code.php";
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