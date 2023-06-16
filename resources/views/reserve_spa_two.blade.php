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

        <p class="header-reserve-spa">ผู้รับบริการคนที่ 2</p>
        <p class="text-select-kind-spa">เลือกประเภทบริการ</p>


        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3 gap-10 mt-10">
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

        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3 gap-10 mt-10">
            <div class="radio">
                <input type="radio" id="sixty-minutes-couple" name="select-time-couple" value="sixty-minutes-couple">
                <label for="sixty-minutes-couple"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide  font-bold">60 นาที</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="ninety-minutes-couple" name="select-time-couple" value="ninety-minutes-couple">
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

        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3 gap-10 mt-10">
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


        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3 gap-10 mt-10">
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
                    <form>
                        <div class="mb-4">
                            <input
                                class="bg-white  shadow appearance-none border-solid border-2 border-fuchsia-950 rounded-lg  font-bold  w-full py-2 px-3 text-fuchsia-950 leading-tight focus:outline-none focus:shadow-outline"
                                id="date-picker" type="text" placeholder="YYYY-MM-DD" />
                        </div>
                    </form>
                </div>
            </div>

            <p class="text-time-therapist">เลือกเวลา</p>

            <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3 gap-10 mt-10">
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

                <!-- <button class="btn-next" onclick="redirectToPageService_Address()">ถัดไป</button> -->
            <div class="container-btn-next">
                <a class="button btn-next" href="/service_address">ถัดไป</a>
            </div>
       
        </div>


        <div id="card_select_by_my_self" class="hide-all">
            <p class="text-select-terrapits-like">เลือกจากพนักงานที่คุณชื่นชอบ</p>

            <div class="grid lg:grid-cols-5 gap-6 md:grid-cols-4 sm:grid-cols-1 mt-10 bg-white">
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

            <div class="grid lg:grid-cols-5 gap-6 md:grid-cols-4 sm:grid-cols-1 mt-10 bg-white">
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

function redirectToPageReserve_Time_Therapist() {
    window.location.href = "reserve_time_therapist.php";
}
</script>


</html>

@endsection