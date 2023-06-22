@extends('layout')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
</head>

<body>

    <div class="container-reserve_spa">
        <p class="header-service_address">ที่อยู่สำหรับรับบริการ</p>

        <div class="radio-group  grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-10 mt-10">

            <div class="radio">
                <input type="radio" id="main-address" name="select-address" value="main-address"
                    onclick="openSelectMain_Address()">
                <label for="main-address"
                    class="block text-center p-10 bg-white rounded-xl   border-grey border-solid border-2 ">
                    <div class="flex justify-between">
                        <div class="flex gap-5 justify-start">
                            <svg class="icon-address" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path
                                    d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z">
                                </path>
                            </svg>
                            <p class="">ที่อยู่หลัก</p>
                        </div>

                        <a href="{{ url('/setting_profile') }}">
                            <svg class="icon-address" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z"></path>
                            </svg>
                        </a>
                    </div>

                    <div class="text-start mt-10">
                        <p>เลขที่ 885/871 ถนนกรุงเทพ-นนทบุรี แขวงบางซื่อ </p>
                        <p>เขตบางซื่อ จังหวัดกรุงเทพมหานคร รหัสไปรษณีย์ 10800</p>
                    </div>
                </label>
            </div>


            <div class="radio">
                <input type="radio" id="others-address" name="select-address" value="others-address"
                    onclick="openSelectOthers_Address()">
                <label for="others-address"
                    class="block text-center p-10 bg-white rounded-xl   border-grey border-solid border-2 ">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="transform: ;msFilter:;">
                        <path d="M4 22h12v-2H4V8H2v12c0 1.103.897 2 2 2z"></path>
                        <path
                            d="M20 2H8c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm-2 9h-3v3h-2v-3h-3V9h3V6h2v3h3v2z">
                        </path>
                    </svg>
                    <p class="mt-8 mb-8">เพิ่มที่อยู่อื่น</p>
                </label>
            </div>
        </div>




        <div class="hide-all" id="card_others_adress">
            <p class="header-text-add-address">กรุณากรอกที่อยู่ที่ต้องการเพิ่ม</p>
            <form class="bg-white  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 mt-5">
                <div class="mb-4">
                    <label class="block text-fuchsia-950 text-sm font-bold mb-2 " for="">
                        เลขที่
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        ชื่อบ้าน/โครงการ
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>

                <div class="mb-4 ">
                    <label class="block text-fuchsia-950 text-sm font-bold mb-2 " for="">
                        ถนน
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="">
                        ซอย
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="">
                        เขต
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>

                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="">
                        แขวง
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="">
                        จังหวัด
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="">
                        รหัสไปรษณีย์
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
            </form>
        </div>

        <div class="flex justify-between">
            <p class="header-health">ข้อมูลการเจ็บป่วย</p>
            <a href="{{ url('/setting_profile') }}">
                <svg class="icon-edit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="transform: ;msFilter:;">
                    <path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z"></path>
                </svg>
            </a>
        </div>

        <p class="header-qa-health">โรคที่คุณเป็นในปัจจุบัน</p>
        <p class="answer-health">ไม่มี</p>

        <p class="header-qa-health">คุณเคยได้รับการผ่าตัดหรือไม่</p>
        <p class="answer-health">ไม่มี</p>

        <p class="header-qa-health">อาการนอกเหนือจากที่กล่าวข้างต้น</p>
        <p class="answer-health">ไม่มี</p>

        <p class="header-qa-health">หมอนรองกระดูกสันหลังทับเส้นประสาท</p>
        <p class="answer-health">ไม่มี</p>

        <p class="header-qa-health">คุณรู้จักเราได้อย่างไร</p>

        <div class="lg:flex gap-10  mt-5">
            <div class="flex items-center">
                <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                    data-ripple-dark="true">
                    <input id="html" name="type" type="radio"
                        class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-950 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-950 checked:before:bg-fuchsia-950 hover:before:opacity-10" />
                    <div
                        class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-950 opacity-0 transition-opacity peer-checked:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                            fill="currentColor">
                            <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                        </svg>
                    </div>
                </label>
                <label class="mt-px cursor-pointer select-none font-light text-fuchsia-950" for="html">
                    หน้าร้าน
                </label>
            </div>

            <div class="lg:flex items-center">
                <div class="flex items-center ">
                    <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                        data-ripple-dark="true">
                        <input id="html" name="type" type="radio"
                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-950 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-950 checked:before:bg-fuchsia-950 hover:before:opacity-10" />
                        <div
                            class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-950 opacity-0 transition-opacity peer-checked:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                                fill="currentColor">
                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                            </svg>
                        </div>
                    </label>
                    <label class="mt-px cursor-pointer select-none font-light text-fuchsia-950" for="html">
                        Facebook
                    </label>
                </div>
            </div>

            <div class="lg:flex items-center">
                <div class="flex items-center ">
                    <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                        data-ripple-dark="true">
                        <input id="html" name="type" type="radio"
                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-950 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-950 checked:before:bg-fuchsia-950 hover:before:opacity-10" />
                        <div
                            class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-950 opacity-0 transition-opacity peer-checked:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                                fill="currentColor">
                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                            </svg>
                        </div>
                    </label>
                    <label class="mt-px cursor-pointer select-none font-light text-fuchsia-950" for="html">
                        Youtube
                    </label>
                </div>
            </div>

            <div class="lg:flex items-center">
                <div class="flex items-center ">
                    <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                        data-ripple-dark="true">
                        <input id="html" name="type" type="radio"
                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-950 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-950 checked:before:bg-fuchsia-950 hover:before:opacity-10" />
                        <div
                            class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-950 opacity-0 transition-opacity peer-checked:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                                fill="currentColor">
                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                            </svg>
                        </div>
                    </label>
                    <label class="mt-px cursor-pointer select-none font-light text-fuchsia-950" for="html">
                        Tiktok
                    </label>
                </div>

            </div>
        </div>


        <div class="container-btn-confirm-reserve gap-5">
            <a class="button btn-confirm-reserve" href="/summarize_reserve">ถัดไป</a>
            <a class="button btn-confirm-reserve" href="/reserve_spa">ผู้รับบริการคนที่ 2</a>
        </div>


    </div>

</body>



<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
// Initialize Flatpickr date picker
flatpickr("#date-picker", {
    dateFormat: "Y-m-d",
    allowInput: true,
    altInput: true,
    altFormat: "F j, Y",
    minDate: "today",
});
</script>




<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
function openSelectMain_Address() {
    var x = document.getElementById("card_main_address");
    x.style.display = "block";
    var y = document.getElementById("card_others_adress");
    y.style.display = "none";
}

function openSelectOthers_Address() {
    var x = document.getElementById("card_others_adress");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var y = document.getElementById("card_main_address");
    y.style.display = "none";

}


function openSelectMain_Address() {
    var y = document.getElementById("card_others_adress");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
    var x = document.getElementById("card_main_address");
    x.style.display = "none";
}

$(document).ready(function() {

    $(".hide-all").hide();

});
</script>


</html>

@endsection