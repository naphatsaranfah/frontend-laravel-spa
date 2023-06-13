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

    <div class="container-therapist">
        <p class="header-therapist">เทราปิส</p>
        <div class="flex items-center justify-end">
            <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                data-ripple-dark="true">
                <input id="html" name="type" type="radio"
                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-900 checked:before:bg-fuchsia-900 hover:before:opacity-10" />
                <div
                    class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-900 opacity-0 transition-opacity peer-checked:opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                        </circle>
                    </svg>
                </div>
            </label>
            <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                ทั้งหมด
            </label>


            <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                data-ripple-dark="true">
                <input id="html" name="type" type="radio"
                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-900 checked:before:bg-fuchsia-900 hover:before:opacity-10" />
                <div
                    class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-900 opacity-0 transition-opacity peer-checked:opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                        </circle>
                    </svg>
                </div>
            </label>
            <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                หญิง
            </label>



            <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                data-ripple-dark="true">
                <input id="html" name="type" type="radio"
                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-900 checked:before:bg-fuchsia-900 hover:before:opacity-10" />
                <div
                    class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-900 opacity-0 transition-opacity peer-checked:opacity-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                        </circle>
                    </svg>
                </div>
            </label>
            <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                ชาย
            </label>
        </div>




        <input type="radio" name="tab" id="aaa" class="hidden" checked>
        <input type="radio" name="tab" id="bbb" class="hidden">


        <div class="my-4 nav grid grid-cols-2 gap-5 bg-fuchsia-100">
            <label for="aaa">
                <span class="py-4 px-5  gap-2 w-full text-center flex justify-center">

                    <p>
                        เทราปิสทั้งหมด
                    </p>
                </span>
            </label>

            <label for="bbb">
                <span class="py-4 px-5 gap-2 w-full text-center flex justify-center">

                    <p>
                        เทราปิสที่ถูกใจ
                    </p>
                </span>
            </label>
        </div>

        <div class="p-5 rounded-lg shadow-md hidden tab-aaa">
            <div class="bg-white grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 mt-10 gap-6">
                <div class="card-grid-select-terrapits-like">
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

                <div class="card-grid-select-terrapits-like">
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

                <div class="card-grid-select-terrapits-like">
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

                <div class="card-grid-select-terrapits-like">
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

                <div class="card-grid-select-terrapits-like">
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


        <div class="p-5 rounded-lg shadow-md hidden tab-bbb">
            <div class=" bg-white grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 mt-10 gap-6">
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

                <div class="card-grid-select-terrapits-else">
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

                <div class="card-grid-select-terrapits-else">
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
        </div>
    </div>

</body>

</html>

@endsection