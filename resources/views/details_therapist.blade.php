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

    <div class="container-details-therapist">

        <p class="header-detail-therapist">รายละเอียดเทราปิส</p>
        <div class=" border-fuchsia-950 border-solid border-2 rounded-xl mt-10 header-therapist pb-10">


            <div class="relative">
                <a href="{{ url('/reserve_spa') }}">
                    <img class="object-cover h-64 w-full" src="./images/detail_therapist.png" />

                    <img class="p-1 rounded-lg shadow-md bg-white  w-40 h-40 absolute text-5xl text-fuchsia-950 bottom-5  left-40 top-60 -translate-x-1/2 -translate-y-1/2"
                        src="./images/therapist-6.png" />

                    <div class="mt-2 flex  justify-end mx-10">
                        <a href="{{ url('/reserve_spa') }}" class="button button-booking-banner">จองตอนนี้</a>
                    </div>
                </a>

            </div>



            <div class="px-10 grid lg:grid-cols-2  md:grid-cols-2 sm:grid-cols-1 mt-10   py-10 rounded-xl">
                <div class="flex gap-5 mt-6">
                    <p class="label-summarize">ชื่อ-สกุล</p>
                    <p class="text-summarize">คุณ นภัสรัญช์ อินเทวา</p>
                </div>


                <div class="flex gap-5 mt-6">
                    <p class="label-summarize">ชื่อเล่น</p>
                    <p class="text-summarize">ฟ้า</p>
                </div>


                <div class="flex gap-5 mt-6">
                    <p class="label-summarize">เพศ</p>
                    <p class="text-summarize">หญิง</p>
                </div>


                <div class="flex gap-5 mt-6">
                    <p class="label-summarize">อายุ</p>
                    <p class="text-summarize">30</p>
                    <p class="label-summarize"> ปี</p>
                </div>


                <div class="flex gap-5 mt-6">
                    <p class="label-summarize">ระยะเวลาที่นวด</p>
                    <p class="text-summarize">5</p>
                    <p class="label-summarize">ชั่วโมง</p>
                </div>



                <div class="flex gap-5 mt-6">
                    <p class="label-summarize">จำนวนครั้งที่นวด</p>
                    <p class="text-summarize">15</p>
                    <p class="label-summarize">ครั้ง</p>
                </div>

                <div class="flex gap-5 mt-6">
                    <p class="label-summarize">Certificate</p>
                    <p class="text-summarize">2</p>
                    <p class="label-summarize">ใบ</p>
                </div>

            </div>

            <p class="header-detail-certificate">รายละเอียดใบ Certificate</p>
            <div class="grid grid-cols-4 gap-20 mx-10">
                <div class=" ">
                    <img src="./images/cer_1.png " class="w-full">
                </div>

                <div class="">
                    <img src="./images/cer_1.png " class="w-full">
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@endsection