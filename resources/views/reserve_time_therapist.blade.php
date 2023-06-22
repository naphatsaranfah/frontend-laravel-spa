@extends('layout')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" />


</head>

<body>

    <div class="container-reserve_time_therapist">
        <p class="text-header-time-therapist">ตารางเวลาเทราปิส</p>


        <div class="grid grid-cols-8 gap-5 mt-10 p-5 bg-gray-100 rounded-2xl">
            <div class="lg:col-span-2 md:col-span-3 sm:col-span-8">
                <img src="./images/therapist-6.png" class="rounded-2xl md:w-full md:h-full  lg:w-56 lg:h-56  ">
            </div>
            <div class="lg:col-span-3 md:col-span-5 sm:col-span-8">
                <div class="flex gap-2 mt-5">
                    <p class="label-summarize ">คุณ</p>
                    <p class="label-summarize">นภัสรัญช์ อินเทวา</p>
                    <p class="label-summarize">(ฟ้า)</p>
                </div>

                <div class="flex gap-2 mt-5">
                    <p class="label-summarize">อายุ</p>
                    <p class="text-summarize">36</p>
                    <p class="text-summarize">ปี</p>
                </div>

                <div class="flex gap-2 mt-5">
                    <p class="label-summarize">จำนวดครั้งที่นวด</p>
                    <p class="text-summarize">15</p>
                    <p class="text-summarize">ครั้ง</p>
                </div>

                <div class="flex gap-2 mt-5">
                    <p class="label-summarize">ระยะเวลาที่นวด</p>
                    <p class="text-summarize">5</p>
                    <p class="text-summarize">ชั่วโมง</p>
                </div>
            </div>
        </div>

        <p class="text-time-therapist">เลือกวันที่</p>

        <div class="mb-4">
            <div class="w-80  mt-5">
                <div date-rangepicker="" id="dateRangePickerId" datepicker-orientation=" right bottom left"
                    class="flex items-center underline">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-fuchsia-950 dark:text-fuchsia-950" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker="" datepicker-autohide type="text"
                            class="bg-white focus:ring-1 border-2 border-gray-200  text-fuchsia-950 sm:text-sm rounded-lg focus:ring-fuchsia-950 focus:border-fuchsia-950 block w-full pl-10 p-2.5 dark:bg-fuchsia-950 dark:border-gray-200 dark:placeholder-fuchsia-950 dark:fuchsia-950 dark:focus:ring-fuchsia-950 dark:focus:border-fuchsia-950 datepicker-input"
                            placeholder="เลือกวันที่">
                    </div>
                </div>
            </div>
        </div>



        <p class="text-time-therapist">เลือกเวลา</p>


        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-2 sm:grid-cols-1 gap-10 mt-10">
            <div class="radio">
                <input type="radio" id="ten" name="time-start" value="ten">
                <label for="ten" class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide  font-bold">10.00</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="eleven" name="time-start" value="eleven">
                <label for="eleven"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">11.00</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="twelve" name="time-start" value="twelve">
                <label for="twelve"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">12.00</p>
                </label>
            </div>
        </div>

        <div class="container-submit-reserve-time-therapist">
            <a class="button button-submit-reserve-time-therapist" href="/service_address">ยืนยัน</a>
        </div>

    </div>
    </div>
</body>



<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/flowbite@1.4.3/dist/flowbite.js"></script>
<script src="https://unpkg.com/flowbite@1.4.3/dist/datepicker.js"></script>



</html>

@endsection