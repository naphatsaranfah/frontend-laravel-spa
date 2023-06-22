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
    <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" /> -->

</head>

<body>
    <div class="container-reserve_spa">

        <p class="header-reserve_spa">เลือกจำนวนผู้เข้ารับบริการ</p>

        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
            <div class="radio">
                <input type="radio" id="single" name="select-kind-number-people" value="single"
                    onclick="openSelectSingle()">
                <label for="single"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide  font-bold">นวดแบบเดี่ยว</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="couple" name="select-kind-number-people" value="couple"
                    onclick="openSelectCouple()">
                <label for="couple"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">นวดแบบคู่</p>
                </label>
            </div>
        </div>

        <p class="header-select-client">ผู้รับบริการ</p>

        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 gap-10 mt-10">
            <div class="radio">
                <input type="radio" id="me" name="select-people" value="me">
                <label for="me" class="block text-center p-2 bg-white rounded-xl   border-grey border-solid border-2">
                    <div class="">
                        <img src="./images/user-service-1.png" class="image-me">
                        <p class="py-5">ฉัน</p>
                    </div>
                </label>
            </div>

            <div class="radio" href="{{ url('/contact_us') }}">
                <input type="radio" id="aaa" name="select-people" value="aaa">
                <label for="aaa" class="block text-center p-2 bg-white rounded-xl   border-grey border-solid border-2">
                    <div class="">
                        <img src="./images/user-service-2.png" class="image-me">
                        <p class="py-5">AAA</p>
                    </div>
                </label>
            </div>

            <a href="{{ url('/setting_other_recipients') }}">
                <label for="others"
                    class="block text-center p-2 bg-white rounded-xl   border-grey border-solid border-2">
                    <div class="">
                        <img src="./images/user-service-3.png" class="image-me">
                        <p class="py-5 text-fuchsia-950">ผู้รับบริการอื่น</p>
                    </div>
                </label>
            </a>
        </div>

        <div id="card_select_single" class="">
            <p class="text-select-kind-spa">เลือกประเภทบริการ</p>
            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
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
                    <input type="radio" id="head-shoulders-feet-spa" name="select-kind-spa"
                        value="head-shoulders-feet-spa">
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

            <p class="text-period">ระยะเวลา</p>

            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
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

            <p class="text-terrapits">เลือกเทอราปิส</p>

            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
                <div class="radio">
                    <input type="radio" id="women" name="kind-therapist" value="women">
                    <label for="women"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">ผู้หญิงเท่านั้น</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="men" name="kind-therapist" value="men">
                    <label for="men"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">ผู้ชายเท่านั้น</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="all" name="kind-therapist" value="all">
                    <label for="all"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">ได้ทั้งหมด</p>
                    </label>
                </div>
            </div>


            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
                <div class="radio">
                    <input type="radio" id="company" name="select-company-myself" value="company" checked
                        onclick="openSelectByCompany()">
                    <label for="company"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">บริษัทเลือกให้</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="myself" name="select-company-myself" value="myself"
                        onclick="openSelectByMySelf()">
                    <label for="myself"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">เลือกด้วยตัวเอง</p>
                    </label>
                </div>
            </div>


            <div id="card_select_by_company" class="">
                <p class="text-time-therapist">เลือกวันที่</p>
                <div class="mb-4">
                    <div class="w-80  mt-5">

                        <div date-rangepicker="" id="dateRangePickerId" datepicker-orientation=" right bottom left"
                            class="flex items-center underline">


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
                    </div>
                </div>

                <p class="text-time-therapist">เลือกเวลา</p>

                <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
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

            <div id="card_select_by_my_self" class="hide-all">
                <p class="text-select-terrapits-like">เลือกจากพนักงานที่คุณชื่นชอบ</p>

                <div class="grid lg:grid-cols-5 gap-6 md:grid-cols-3 sm:grid-cols-1 mt-10 bg-white">

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like">
                            <img src="./images/therapist-1.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like">
                            <img src="./images/therapist-2.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like">
                            <img src="./images/therapist-3.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like">
                            <img src="./images/therapist-4.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like">
                            <img src="./images/therapist-5.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like">
                            <img src="./images/therapist-6.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                </div>

                <p class="text-select-terrapits-else">เลือกพนักงานทั่วไป</p>

                <div class="grid lg:grid-cols-5 gap-6 md:grid-cols-3 sm:grid-cols-1 mt-10 bg-white">
                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-1.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-2.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/me.png " class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-3.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-4.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-5.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-6.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-1.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-2.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-3.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="container-btn-next">
                <a class="button btn-next " href="/service_address">ถัดไป</a>
            </div>


        </div>

        <div id="card_select_couple" class="hide-all">
            <p class="text-select-kind-spa">ผู้รับบริการคนที่ 1</p>
            <p class="text-select-kind-spa">เลือกประเภทบริการ</p>
            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
                <div class="radio">
                    <input type="radio" id="aloma-spa-couple" name="select-kind-spa-couple" value="aloma-spa-couple">
                    <label for="aloma-spa-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">นวดน้ำมันอโรมา</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="thai-spa-couple" name="select-kind-spa-couple" value="thai-spa-couple">
                    <label for="thai-spa-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">นวดแผนไทย</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="head-shoulders-feet-spa-couple" name="select-kind-spa-couple"
                        value="head-shoulders-feet-spa-couple">
                    <label for="head-shoulders-feet-spa-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">นวดศีรษะไหล่เท้า</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="office-syndrome-spa-couple" name="select-kind-spa-couple"
                        value="office-syndrome-spa-couple">
                    <label for="office-syndrome-spa-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">นวดแก้ออฟฟิศซินโดม</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="catch-the-line-spa-couple" name="select-kind-spa-couple"
                        value="catch-the-line-spa-couple">
                    <label for="catch-the-line-spa-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">นวดจับเส้น</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="special-points-spa-couple" name="select-kind-spa-couple"
                        value="special-points-spa-couple">
                    <label for="special-points-spa-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">นวดกดจุด</p>
                    </label>
                </div>
            </div>

            <p class="text-period">ระยะเวลา</p>

            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
                <div class="radio">
                    <input type="radio" id="sixty-minutes-couple" name="select-time-couple"
                        value="sixty-minutes-couple">
                    <label for="sixty-minutes-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">60 นาที</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="ninety-minutes-couple" name="select-time-couple"
                        value="ninety-minutes-couple">
                    <label for="ninety-minutes-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">90 นาที</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="one-hundred-twenty-minutes-couple" name="select-time-couple"
                        value="one-hundred-twenty-minutes-couple">
                    <label for="one-hundred-twenty-minutes-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">120 นาที</p>
                    </label>
                </div>
            </div>

            <p class="text-terrapits">เลือกเทอราปิส</p>

            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
                <div class="radio">
                    <input type="radio" id="women-couple" name="kind-therapist-couple" value="women-couple">
                    <label for="women-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">ผู้หญิงเท่านั้น</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="men-couple" name="kind-therapist-couple" value="men-couple">
                    <label for="men-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">ผู้ชายเท่านั้น</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="all-couple" name="kind-therapist-couple" value="all-couple">
                    <label for="all-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">ได้ทั้งหมด</p>
                    </label>
                </div>
            </div>


            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
                <div class="radio">
                    <input type="radio" id="company-couple-couple" name="select-company-myself-couple"
                        value="company-couple-couple" onclick="openSelectCouple_Company()">
                    <label for="company-couple-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide  font-bold">บริษัทเลือกให้</p>
                    </label>
                </div>

                <div class="radio">
                    <input type="radio" id="myself-couple-couple" name="select-company-myself-couple"
                        value="myself-couple-couple" onclick="openSelectCouple_MySelf()">
                    <label for="myself-couple-couple"
                        class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                        <p class="tracking-wide   font-bold">เลือกด้วยตัวเอง</p>
                    </label>
                </div>
            </div>

            <div id="card_select_couple_company" class="">
                <p class="text-time-therapist">เลือกวันที่</p>

                <div class="mb-4">
                    <div class="w-80  mt-5">

                        <div date-rangepicker="" id="dateRangePickerId" datepicker-orientation=" right bottom left"
                            class="flex items-center underline">

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
                                    class="bg-white  focus:ring-1 border-2 border-gray-200  text-fuchsia-950 sm:text-sm rounded-lg focus:ring-fuchsia-950 focus:border-fuchsia-950 block w-full pl-10 p-2.5 "
                                    placeholder="เลือกวันที่">
                            </div>

                        </div>
                    </div>
                </div>

                <p class="text-time-therapist">เลือกเวลา</p>

                <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-10 mt-10">
                    <div class="radio">
                        <input type="radio" id="ten-couple" name="time-start-couple" value="ten-couple">
                        <label for="ten"
                            class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                            <p class="tracking-wide  font-bold">10.00</p>
                        </label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="eleven-couple" name="time-start-couple" value="eleven-couple">
                        <label for="eleven-couple"
                            class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                            <p class="tracking-wide  font-bold">11.00</p>
                        </label>
                    </div>

                    <div class="radio">
                        <input type="radio" id="twelve-couple" name="time-start-couple" value="twelve-couple">
                        <label for="twelve-couple"
                            class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                            <p class="tracking-wide   font-bold">12.00</p>
                        </label>
                    </div>
                </div>
            </div>

            <div id="card_select_couple_my_self" class="hide-all">
                <p class="text-select-terrapits-like">เลือกจากพนักงานที่คุณชื่นชอบ</p>
                <div class="grid lg:grid-cols-5 gap-6 md:grid-cols-3 sm:grid-cols-1 mt-10 bg-white">

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like">
                            <img src="./images/therapist-1.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like" onclick="redirectToPageReserve_Time_Therapist()">
                            <img src="./images/therapist-2.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like" onclick="redirectToPageReserve_Time_Therapist()">
                            <img src="./images/therapist-3.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like" onclick="redirectToPageReserve_Time_Therapist()">
                            <img src="./images/therapist-4.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-like" onclick="redirectToPageReserve_Time_Therapist()">
                            <img src="./images/therapist-5.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>
                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                </div>
                </a>


                <p class="text-select-terrapits-else">เลือกพนักงานทั่วไป</p>

                <div class="grid lg:grid-cols-5 gap-6 md:grid-cols-3 sm:grid-cols-1 mt-10 bg-white">


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-1.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
                            <img src="./images/therapist-2.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
                            <img src="./images/therapist-3.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
                            <img src="./images/therapist-4.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>


                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-5.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-6.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-1.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-2.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-3.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="/reserve_time_therapist">
                        <div class="card-grid-select-terrapits-else">
                            <img src="./images/therapist-4.png" class="image-me">
                            <p class="text-name-terrapits">คุณ นภัสรัญช์ อินเทวา</p>

                            <div class="container-card-text-like-terrapist">
                                <p class="text-sm">นวดแล้ว 18 ครั้ง</p>
                                <svg class="icon-like" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="container-btn-next">
                <a class="button btn-next" href="/service_address">ถัดไป</a>
            </div>

        </div>
    </div>
</body>



<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/flowbite@1.4.3/dist/flowbite.js"></script>
<script src="https://unpkg.com/flowbite@1.4.3/dist/datepicker.js"></script>



<script>
function openSelectByCompany() {
    var x = document.getElementById("card_select_by_company");
    x.style.display = "block";
    var y = document.getElementById("card_select_by_my_self");
    y.style.display = "none";
}

function openSelectByMySelf() {
    var x = document.getElementById("card_select_by_my_self");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var y = document.getElementById("card_select_by_company");
    y.style.display = "none";
}

function openSelectSingle() {
    var x = document.getElementById("card_select_single");
    x.style.display = "block";
    var y = document.getElementById("card_select_couple");
    y.style.display = "none";
}

function openSelectCouple() {
    var x = document.getElementById("card_select_couple");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var y = document.getElementById("card_select_single");
    y.style.display = "none";
}

function openSelectCouple_Company() {
    var x = document.getElementById("card_select_couple_company");
    x.style.display = "block";
    var y = document.getElementById("card_select_couple_my_self");
    y.style.display = "none";
}

function openSelectCouple_MySelf() {
    var x = document.getElementById("card_select_couple_my_self");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var y = document.getElementById("card_select_couple_company");
    y.style.display = "none";
}
</script>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
$(document).ready(function() {

    $(".hide-all").hide();

});
</script>

<script>
function redirectToPageService_Address() {
    window.location.href = "service_address.php";
}

function redirectToPageReserve_Spa_Two() {
    window.location.href = "reserve_spa_two.php";
}

// function redirectToPageReserve_Time_Therapist() {
//     window.location.href = "reserve_time_therapist.php";
// }
</script>

</html>

@endsection