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

    <div class="container-aroma-oil">

        <img src="./images/banner.jpg" class="w-full object-cover h-64">
        <p class="header-aroma-oil">สิ่งที่ได้รับในการนวดน้ำมันอโรมา</p>

        <div class="grid lg:grid-cols-3 mg:grid-cols-3 sm:grid-cols-1 gap-20">
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

        <div class="grid-aroma-oil-contant">
            <div>
                <img src="./images/spa-stones-beautiful-orchid.jpg" class="w-full rounded-lg">
            </div>

            <div class="">
                <p class="text-center mt-20 text-lg font-semibold">นวดได้ตรงจุดที่คุณต้องการความเหนื่อยล้า</p>

                <div class="flex justify-center">
                    <a href="{{ url('/reserve_spa') }}" class="button button-booking-aroma-contant">จองตอนนี้</a>
                </div>

            </div>
        </div>

        <p class="header-aroma-oil">ประโยนช์ของการนวดน้ำมันอโรม่า</p>

        <div class="grid lg:grid-cols-3 mg:grid-cols-3 sm:grid-cols-1  gap-20">
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


        <div class="grid-aroma-oil-contant">
            <div>
                <img src="./images/spa-stones-beautiful-orchid.jpg" class="w-full rounded-lg">
            </div>

            <div class="">
                <div class="flex justify-center">
                    <a href="{{ url('/reserve_spa') }}" class="button button-booking-aroma-contant"
                        onclick="redirectToPageReserve_Spa()">จองตอนนี้</a>
                </div>
            </div>
        </div>


        <div class="grid-aroma-oil-contant">

            <div class="">
                <div class="flex justify-center">
                    <a href="{{ url('/reserve_spa') }}" class="button button-booking-aroma-contant">จองตอนนี้</a>
                </div>
            </div>
            <div>
                <img src="./images/spa-stones-beautiful-orchid.jpg" class="w-full rounded-lg">
            </div>
        </div>


    </div>
    </div>



</body>

<script>
function redirectToPageReserve_Spa() {
    window.location.href = "reserve_spa.php";
}
</script>

</html>

@endsection