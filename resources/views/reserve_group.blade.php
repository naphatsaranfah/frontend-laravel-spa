@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
</head>

<body>


    <div class="container-reserve_time_therapist">
        <p class="header-reserve_spa">แบบองค์กร</p>
        <p class="text-select-kind-spa">เลือกประเภทบริการ</p>

        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-10 mt-10">
            <div class="radio">
                <input type="radio" id="aloma-spa" name="select-kind-spa" value="aloma-spa">
                <label for="aloma-spa"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide  font-bold">นวดน้ำมันอโรมา</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="thai-spa" name="select-kind-spa" value="thai-spa">
                <label for="thai-spa"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">นวดแผนไทย</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="head-shoulders-feet-spa" name="select-kind-spa" value="head-shoulders-feet-spa">
                <label for="head-shoulders-feet-spa"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide  font-bold">นวดศีรษะไหล่เท้า</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="office-syndrome-spa" name="select-kind-spa" value="office-syndrome-spa">
                <label for="office-syndrome-spa"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">นวดแก้ออฟฟิศซินโดม</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="catch-the-line-spa" name="select-kind-spa" value="catch-the-line-spa">
                <label for="catch-the-line-spa"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">นวดจับเส้น</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="special-points-spa" name="select-kind-spa" value="special-points-spa">
                <label for="special-points-spa"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">นวดกดจุด</p>
                </label>
            </div>
        </div>

        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-10 mt-10">
            <div class="radio">
                <input type="radio" id="package" name="select-package" value="package" checked
                    onclick="openSelect_Package()">
                <label for="package"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide  font-bold">เลือกแพ็คเก็จ</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="by-myself" name="select-package" value="by-myself"
                    onclick="openSelect_Custom()">
                <label for="by-myself"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">กำหนดเอง</p>
                </label>
            </div>
        </div>


        <div id="card_package">
            <div class="radio-group grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 gap-5 mt-10">

                <div class="card-promotion">
                    <div class="card-icon-spa-promotion">
                        <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                            </path>
                        </svg>
                    </div>

                    <p class="header-text-card-promotion">SIZE S</p>

                    <div class="flex mt-10">
                        <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg>
                        <p class="ml-2">แบบเดี่ยว</p>
                    </div>

                    <div class="flex mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg>
                        <p class="ml-2">ระยะเวลา 90 นาที</p>
                    </div>

                    <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                        <p>฿650</p>
                        <p>.00</p>
                    </div>

                    <div class="radio">
                        <input type="radio" id="package-s" name="package" value="package-s">

                        <label for="package-s"
                            class="block text-center p-2 mt-5 bg-white rounded-xl   border-grey border-solid border-2">
                            <button>เลือก</button>
                        </label>
                    </div>
                </div>


                <div class="card-promotion">
                    <div class="card-icon-spa-promotion">
                        <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                            </path>
                        </svg>
                    </div>

                    <p class="header-text-card-promotion">SIZE M</p>

                    <div class="flex mt-10">
                        <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg>
                        <p class="ml-2">แบบเดี่ยว</p>
                    </div>

                    <div class="flex mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg>
                        <p class="ml-2">ระยะเวลา 90 นาที</p>
                    </div>

                    <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                        <p>฿650</p>
                        <p>.00</p>
                    </div>

                    <div class="radio">
                        <input type="radio" id="package-m" name="package" value="package-m">
                        <label for="package-m"
                            class="block text-center p-2 mt-5 bg-white rounded-xl   border-grey border-solid border-2">
                            <button>เลือก</button>
                        </label>
                    </div>
                </div>



                <div class="card-promotion">
                    <div class="card-icon-spa-promotion">
                        <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                            </path>
                        </svg>
                    </div>

                    <p class="header-text-card-promotion">SIZE L</p>

                    <div class="flex mt-10">
                        <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg>
                        <p class="ml-2">แบบเดี่ยว</p>
                    </div>

                    <div class="flex mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg>
                        <p class="ml-2">ระยะเวลา 90 นาที</p>
                    </div>

                    <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                        <p>฿650</p>
                        <p>.00</p>
                    </div>

                    <div class="radio">
                        <input type="radio" id="package-l" name="package" value="package-l">
                        <label for="package-l"
                            class="block text-center p-2 mt-5 bg-white rounded-xl   border-grey border-solid border-2">
                            <button>เลือก</button>
                        </label>
                    </div>
                </div>




                <div class="card-promotion">
                    <div class="card-icon-spa-promotion">
                        <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                            </path>
                        </svg>
                    </div>

                    <p class="header-text-card-promotion">SIZE XL</p>

                    <div class="flex mt-10">
                        <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg>
                        <p class="ml-2">แบบเดี่ยว</p>
                    </div>

                    <div class="flex mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                        </svg>
                        <p class="ml-2">ระยะเวลา 90 นาที</p>
                    </div>

                    <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                        <p>฿650</p>
                        <p>.00</p>
                    </div>

                    <div class="radio">
                        <input type="radio" id="package-xl" name="package" value="package-xl">
                        <label for="package-xl"
                            class="block text-center p-2 mt-5 bg-white rounded-xl   border-grey border-solid border-2">
                            <button>เลือก</button>
                        </label>
                    </div>
                </div>

            </div>
        </div>



        <div class="mt-10 hide-all" id="card_custom">

            <label for="num" class=" text-fuchsia-950 font-bold text-lg ">จำนวนผู้รับบริการ</label>
            <select id="num"
                class="mt-10 w-50 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-950 focus:border-fuchsia-950 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-fuchsia-950 dark:focus:border-fuchsia-950">
                <option selected>1</option>
                <option value="two">2</option>
                <option value="three">3</option>
                <option value="four">4</option>
                <option value="five">5</option>
            </select>

            <p class="text-period">ระยะเวลา</p>

            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-3 gap-10 mt-10">
                <div class="radio">
                    <input type="radio" id="sixty-minutes" name="select-time" value="sixty-minutes">
                    <label for="sixty-minutes"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">60 นาที</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="ninety-minutes" name="select-time" value="ninety-minutes">
                    <label for="ninety-minutes"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">90 นาที</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="one-hundred-twenty-minutes" name="select-time"
                        value="one-hundred-twenty-minutes">
                    <label for="one-hundred-twenty-minutes"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">120 นาที</p>
                    </label>
                </div>
            </div>
        </div>

        <p class="header-service_address">ที่อยู่สำหรับรับบริการ</p>



        <div class="radio-group  grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-10 mt-10">
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
                    <label class="block text-fuchsia-900 text-sm font-bold mb-2 " for="">
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


        <div class="" id="card_main_address">
            <p class="text-time-therapist">เลือกวันที่รับบริการ</p>

            <div class="mb-4">
                <div class="w-80  mt-5">
                    <form>
                        <div class="mb-4">

                        <div class="relative">
             <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-fuchsia-950 " fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input datepicker="" datepicker-autohide type="text"
                                    class="bg-white focus:ring-1 border-2 border-gray-200  text-fuchsia-950 sm:text-sm rounded-lg focus:ring-fuchsia-950 focus:border-fuchsia-950 block w-full pl-10 p-2.5"
                                    placeholder="เลือกวันที่">
                            </div>

                        </div>
                    </form>
                </div>
            </div>

           


            <p class="text-time-therapist">เลือกเวลาที่รับบริการ</p>

            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-3 gap-10 mt-10">
                <div class="radio">
                    <input type="radio" id="ten" name="time-start" value="ten">
                    <label for="ten"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">10.00</p>
                    </label>
                </div>
                <div class="radio">
                    <input type="radio" id="eleven" name="time-start" value="eleven">
                    <label for="eleven"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">11.00</p>
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
        </div>


        <div class="container-btn-next">
            <a class="button btn-next " href="/service_address">ถัดไป</a>
        </div>

    </div>


</body>



<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/flowbite@1.4.3/dist/flowbite.js"></script>
<script src="https://unpkg.com/flowbite@1.4.3/dist/datepicker.js"></script>



<!-- Link to Flatpickr JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
// Initialize Flatpickr date picker
flatpickr("#date-picker", {
    dateFormat: "Y-m-d",
    allowInput: true,
    altInput: true,
    altFormat: "F j, Y",
    minDate: "today",
});
</script> -->

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



function openSelect_Package() {
    var x = document.getElementById("card_package");
    x.style.display = "block";
    var y = document.getElementById("card_custom");
    y.style.display = "none";
}

function openSelect_Custom() {
    var x = document.getElementById("card_custom");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var y = document.getElementById("card_package");
    y.style.display = "none";
}



$(document).ready(function() {

    $(".hide-all").hide();

});
</script>


<script>
function redirectToPageSummarize_Reserve() {
    window.location.href = "summarize_reserve.php";
}
</script>

</html>

@endsection