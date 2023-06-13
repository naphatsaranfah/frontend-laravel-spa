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
        <p class="header-reserve_spa">โปรโมชั่นนวดจับเส้น แบบเดี่ยว ระยะเวลา 90 นาที</p>

        <p class="header-select-client">ผู้รับบริการ</p>

        <div id="card_select_single" class="">
            <div class="grid grid-cols-5 gap-5 mt-5">
                <div class="card-grid-select-client">
                    <img src="./images/me.png " class="image-me">
                    <p class="text-me">ฉัน</p>
                </div>
            </div>


            <p class="text-select-kind-spa">เลือกประเภทบริการ</p>

            <div class="grid lg:grid-cols-6 gap-6 md:grid-cols-4 sm:grid-cols-1 mt-10">
                <button class="btn-select-kind-spa">นวดน้ำมันอโรมา</button>
                <button class="btn-select-kind-spa">นวดแผนไทย</button>
                <button class="btn-select-kind-spa">นวดศรีษะหลังไหล่เท้า</button>
                <button class="btn-select-kind-spa">นวดแก้ออฟฟิศซินโดม</button>
                <button class="btn-select-kind-spa">นวดจับเส้น</button>
                <button class="btn-select-kind-spa">นวดกดจุด</button>
            </div>

            <p class="text-period">ระยะเวลา</p>

            <div class="grid lg:grid-cols-6 gap-6 md:grid-cols-4 sm:grid-cols-1 mt-10">
                <button class="btn-select">60 นาที</button>
                <button class="btn-select">90 นาที</button>
                <button class="btn-select">120 นาที</button>
            </div>

            <p class="text-terrapits">เลือกเทอราปิส</p>

            <div class="grid lg:grid-cols-6 gap-6 md:grid-cols-4 sm:grid-cols-1 mt-10">
                <button class="btn-select">ผู้หญิงเท่านั้น</button>
                <button class="btn-select">ผู้ชายเท่านั้น</button>
                <button class="btn-select">ผู้หญิงหรือผู้ชายก็ได้</button>
            </div>


            <div class="grid lg:grid-cols-6 gap-6 md:grid-cols-4 sm:grid-cols-1 mt-10">

                <div class="" onclick="openSelectByCompany()">
                    <button class="btn-select">
                        บริษัทเลือกให้
                    </button>
                </div>

                <div class="" onclick="openSelectByMySelf()">
                    <button class="btn-select">
                        เลือกด้วยตัวเอง
                    </button>
                </div>
            </div>


            <div id="card_select_by_company" class="">
                <p class="text-time-therapist">เลือกวันที่</p>

                <div class="mb-4">
                    <div class="w-80  mt-5">
                        <form>
                            <div class="mb-4">

                                <input
                                    class="bg-white  shadow appearance-none border-solid border-2 border-fuchsia-950 rounded-lg  font-bold  w-full py-2 px-3 text-fuchsia-900 leading-tight focus:outline-none focus:shadow-outline"
                                    id="date-picker" type="text" placeholder="YYYY-MM-DD" />
                            </div>
                        </form>
                    </div>
                </div>

                <p class="text-time-therapist">เลือกเวลา</p>
                <div class="grid lg:grid-cols-6 gap-6 md:grid-cols-4 sm:grid-cols-1 mt-10">
                    <button class="btn-select">10.00</button>
                    <button class="btn-select">11.30</button>
                    <button class="btn-select">12.00</button>
                    <button class="btn-select">12.30</button>
                    <button class="btn-select">13.00</button>
                    <button class="btn-select">13.30</button>
                    <button class="btn-select">14.00</button>
                    <button class="btn-select">14.30</button>
                    <button class="btn-select">15.00</button>
                    <button class="btn-select">15.30</button>
                    <button class="btn-select">16.00</button>
                    <button class="btn-select">16.30</button>
                    <button class="btn-select">17.00</button>
                    <button class="btn-select">17.30</button>
                    <button class="btn-select">18.00</button>
                    <button class="btn-select">18.30</button>
                </div>
                <div class="container-btn-next">
                    <button class="btn-next" onclick="redirectToPageService_Address()">ถัดไป</button>
                </div>
            </div>


            <div id="card_select_by_my_self" class="hide-all">
                <p class="text-select-terrapits-like">เลือกจากพนักงานที่คุณชื่นชอบ</p>

                <div class="container-grid-terrapits-like" onclick="redirectToPageReserve_Time_Therapist()">
                    <div class="card-grid-select-terrapits-like">
                        <img src="./images/me.png " class="image-me">
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

                    <div class="card-grid-select-terrapits-like" onclick="redirectToPageReserve_Time_Therapist()">
                        <img src="./images/me.png " class="image-me">
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

                    <div class="card-grid-select-terrapits-like" onclick="redirectToPageReserve_Time_Therapist()">
                        <img src="./images/me.png " class="image-me">
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

                    <div class="card-grid-select-terrapits-like" onclick="redirectToPageReserve_Time_Therapist()">
                        <img src="./images/me.png " class="image-me">
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

                    <div class="card-grid-select-terrapits-like" onclick="redirectToPageReserve_Time_Therapist()">
                        <img src="./images/me.png " class="image-me">
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

                <p class="text-select-terrapits-else">เลือกพนักงานทั่วไป</p>

                <div class="container-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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

                    <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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

                    <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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

                    <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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

                    <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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

                    <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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

                    <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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

                    <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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

                    <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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

                    <div class="card-grid-select-terrapits-else" onclick="redirectToPageReserve_Time_Therapist()">
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
                </div>

            </div>

            <div class="flex justify-center">
                <button class="bg-fuchsia-950 px-20 py-2 w-full rounded-lg text-white mt-10 "
                    data-modal-toggle="default-modal">ยืนยัน</button>
            </div>


        </div>

        <div id="card_select_couple" class=" hide-all">
            <div class="grid grid-cols-5 gap-5 mt-5">
                <div class="card-grid-select-client">
                    <div>
                        <img src="./images/me.png " class="image-me">
                        <p class="text-me">ฉัน</p>
                    </div>

                </div>
                <div class="card-grid-select-client">
                    <div>
                        <img src="./images/me.png " class="image-me">
                        <p class="text-me">ผู้รับบริการอื่น</p>
                    </div>

                </div>
            </div>

            <p class="header-reserve-spa">ผู้รับบริการคนที่ 1</p>

            <p class="text-select-kind-spa">เลือกประเภทบริการ</p>

            <div class="container-button-select-kind-spa">
                <button class="btn-select-kind-spa">นวดน้ำมันอโรมา</button>
                <button class="btn-select-kind-spa">นวดแผนไทย</button>
                <button class="btn-select-kind-spa">นวดศรีษะหลังไหล่เท้า</button>
                <button class="btn-select-kind-spa">นวดแก้ออฟฟิศซินโดม</button>
                <button class="btn-select-kind-spa">นวดจับเส้น</button>
                <button class="btn-select-kind-spa">นวดกดจุด</button>
            </div>

            <p class="text-period">ระยะเวลา</p>

            <div class="container-button-period">
                <button class="btn-select">60 นาที</button>
                <button class="btn-select">90 นาที</button>
                <button class="btn-select">120 นาที</button>
            </div>

            <p class="text-terrapits">เลือกเทอราปิส</p>

            <div class="container-button-terrapits">
                <button class="btn-select">ผู้หญิงเท่านั้น</button>
                <button class="btn-select">ผู้ชายเท่านั้น</button>
                <button class="btn-select">ผู้หญิงหรือผู้ชายก็ได้</button>
            </div>


            <div class="container-button-terrapits">

                <div class="" onclick="openSelectByCompany()">
                    <button class="btn-select">
                        บริษัทเลือกให้
                    </button>
                </div>

                <div class="" onclick="openSelectByMySelf()">
                    <button class="btn-select">
                        เลือกด้วยตัวเอง
                    </button>
                </div>
            </div>


            <div id="card_select_by_company" class="">
                <p class="text-time-therapist">เลือกวันที่</p>

                <div class="mb-4">
                    <div class="w-80  mt-5">
                        <form>
                            <div class="mb-4">

                                <input
                                    class="bg-white  shadow appearance-none border-solid border-2 border-fuchsia-950 rounded-lg  font-bold  w-full py-2 px-3 text-fuchsia-900 leading-tight focus:outline-none focus:shadow-outline"
                                    id="date-picker" type="text" placeholder="YYYY-MM-DD" />
                            </div>
                        </form>
                    </div>
                </div>

                <p class="text-time-therapist">เลือกเวลา</p>
                <div class="container-grid-select-reserve_time_therapist">
                    <button class="btn-select">10.00</button>
                    <button class="btn-select">11.30</button>
                    <button class="btn-select">12.00</button>
                    <button class="btn-select">12.30</button>
                    <button class="btn-select">13.00</button>
                    <button class="btn-select">13.30</button>
                    <button class="btn-select">14.00</button>
                    <button class="btn-select">14.30</button>
                    <button class="btn-select">15.00</button>
                    <button class="btn-select">15.30</button>
                    <button class="btn-select">16.00</button>
                    <button class="btn-select">16.30</button>
                    <button class="btn-select">17.00</button>
                    <button class="btn-select">17.30</button>
                    <button class="btn-select">18.00</button>
                    <button class="btn-select">18.30</button>
                </div>
                <div class="container-btn-next">
                    <button class="btn-next" onclick="redirectToPageService_Address()">ถัดไป</button>
                </div>
            </div>


            <div id="card_select_by_my_self" class="hide-all">
                <p class="text-select-terrapits-like">เลือกจากพนักงานที่คุณชื่นชอบ</p>

                <div class="container-grid-terrapits-like" oncick="()">
                    <div class="card-grid-select-terrapits-like">
                        <img src="./images/me.png " class="image-me">
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

                    <div class="card-grid-select-terrapits-like">
                        <img src="./images/me.png " class="image-me">
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

                    <div class="card-grid-select-terrapits-like">
                        <img src="./images/me.png " class="image-me">
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

                    <div class="card-grid-select-terrapits-like">
                        <img src="./images/me.png " class="image-me">
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

                    <div class="card-grid-select-terrapits-like">
                        <img src="./images/me.png " class="image-me">
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

                <p class="text-select-terrapits-else">เลือกพนักงานทั่วไป</p>

                <div class="container-grid-select-terrapits-else">
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
                </div>
            </div>
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



<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
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

function redirectToPageReserve_Time_Therapist() {
    window.location.href = "reserve_time_therapist.php";
}
</script>


</html>


@endsection