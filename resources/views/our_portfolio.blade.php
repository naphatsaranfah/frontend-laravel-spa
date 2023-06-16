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


    <div class="container-our-portfolio ">
        <p class="header-our-portfolio">ผลงานของเรา</p>

        <div class="grid lg:grid-cols-3 md:grid-cols-3 sm-grid-cols1">
            <img src="./images/aroma_oil.png" class="w-full mt-10 rounded-l-xl">
            <img src="./images/aroma_oil.png" class="w-full mt-10">
            <img src="./images/aroma_oil.png" class="w-full mt-10 rounded-r-xl">
        </div>


        <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-5 py-10 ">
            <div class="card-our-portforio">
                <p class="text-header-card">ผลงานการนวด</p>
                <p class="text-card">นวดน้ำมันอโรมา
                    ด้วยพนักงานมืออาชีพให้กับพนักงานบริษัท SCB จำนวน 30 คน</p>
            </div>

            <img src="./images/aroma_oil.png" class="w-full rounded-xl">

        </div>

        <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-5 py-10">
            <div class="">
                <p class="text-header-card">ผลงานการนวด</p>
                <p class="text-card">นวดน้ำมันอโรมา
                    ด้วยพนักงานมืออาชีพให้กับพนักงานบริษัท SCB จำนวน 30 คน</p>
            </div>

            <img src="./images/aroma_oil.png" class="w-full rounded-xl">
        </div>

        <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-5 py-10">

            <div class="card-our-portforio">
                <p class="text-header-card">ผลงานการนวด</p>
                <p class="text-card">นวดน้ำมันอโรมา
                    ด้วยพนักงานมืออาชีพให้กับพนักงานบริษัท SCB จำนวน 30 คน</p>
            </div>

            <img src="./images/aroma_oil.png" class="w-full rounded-xl">


        </div>



        <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-5 py-10">
            <img src="./images/aroma_oil.png" class="w-full rounded-xl">

            <div class="card-our-portforio">
                <p class="text-header-card">ผลงานการนวด</p>
                <p class="text-card">นวดน้ำมันอโรมา
                    ด้วยพนักงานมืออาชีพให้กับพนักงานบริษัท SCB จำนวน 30 คน</p>
            </div>
        </div>

        <div class="flex justify-center">
            <a href="{{ url('/reserve_spa') }}"  class="button button-booking-our-portforio" >จองตอนนี้</a>
        </div>

    </div>

</body>

</html>

@endsection