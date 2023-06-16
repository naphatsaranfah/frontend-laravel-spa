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
        <div class="p-10 border-fuchsia-950 border-solid border-2 rounded-xl mt-10">

       
            <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols1">
                <div class=" p-5 rounded-lg shadow-md">
                <img src="./images/profile_woman.png" class="w-full">
                </div>
            </div>
           


            <div class=" grid lg:grid-cols-2  md:grid-cols-2 sm:grid-cols-1 mt-10 px-10 bg-gray-50 py-10 rounded-xl">
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

            <div class=" lg:px-36 md:px-20 sm:px-10 py-10">
                <img src="./images/cer_1.png " class="w-full">
            </div>

            <div class=" lg:px-36 md:px-20 sm:px-10 py-10">
                <img src="./images/cer_1.png " class="w-full">
            </div>
        </div>

    </div>

</body>

</html>

@endsection