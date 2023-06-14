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
    <div class="">
        <div class="container-header-banner block animatable bounceInRight ">
            <p class="text-purple-900 text-4xl font-semibold ">ยินดีต้อนรับสู่ Lirena</p>

            <p class="text-purple-900 text-4xl font-semibold 	mt-6">ที่จะทำให้คุณผ่อนคลาย</p>

            <div class="mt-20">
                <a href="{{ url('/reserve_spa') }}" class="button button-booking-banner">จองตอนนี้</a>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 text-center mt-10 px-20 ">
            <div class="image-single-spa p-20 rounded-l-lg">
                <a href="{{ url('/reserve_spa') }}">แบบเดี่ยว</a>
            </div>

            <div class="image-couple-spa p-20 ">
                <a href="{{ url('/reserve_spa') }}">แบบคู่</a>
            </div>

            <div class="image-group-spa p-20 rounded-r-lg">
                <a href="{{ url('/reserve_group') }}">แบบกลุ่ม</a>
            </div>

        </div>

        <div class="grid-highlight-details">

            <img src="./images/highlight.png" />

            <div class=" block animatable fadeInDown">
                <p class="header-highlight">จุดเด่นของเรา</p>
                <div class="text-left mt-10 leading-10">
                    <div class="flex gap-3 ">
                        <svg class="mt-2" width="20" height="20" viewBox="0 0 35 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32.8773 10.987C32.6585 11.0328 29.722 11.6961 25.9595 13.9962C25.3942 11.3381 23.7212 6.36116 18.7705 1.29937L17.5 0L16.2295 1.30107C11.2612 6.38152 9.59525 11.3721 9.03525 14.0471C5.25875 11.7079 2.345 11.0362 2.1315 10.9887L0 10.5273V12.6443C0 25.0104 6.86875 33 17.5 33C27.9667 33 35 24.8204 35 12.6443V10.5375L32.8773 10.987ZM12.2482 16.1014C12.2517 16.0454 12.5142 10.8428 17.5 5.02107C22.4245 10.7885 22.75 16.0369 22.75 16.0369V16.2489C20.7875 17.8298 19.0199 19.6251 17.4825 21.5991C15.9407 19.6599 14.1856 17.8893 12.2482 16.3185V16.1014ZM17.5 29.6074C8.197 29.6074 4.28925 22.4897 3.61025 15.0802C6.5065 16.2981 11.6882 19.1954 16.0475 25.4667L17.5192 27.5854L18.963 25.448C23.2085 19.1581 28.4567 16.2693 31.381 15.0632C30.6845 22.2352 26.782 29.6074 17.5 29.6074Z"
                                fill="#4E2259" />
                        </svg>

                        <p class="highlight-details">
                            พนักงานมืออาชีพ บริการดี พนักงานมืออาชีพ บริการดี
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <svg class="mt-2" width="20" height="20" viewBox="0 0 35 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32.8773 10.987C32.6585 11.0328 29.722 11.6961 25.9595 13.9962C25.3942 11.3381 23.7212 6.36116 18.7705 1.29937L17.5 0L16.2295 1.30107C11.2612 6.38152 9.59525 11.3721 9.03525 14.0471C5.25875 11.7079 2.345 11.0362 2.1315 10.9887L0 10.5273V12.6443C0 25.0104 6.86875 33 17.5 33C27.9667 33 35 24.8204 35 12.6443V10.5375L32.8773 10.987ZM12.2482 16.1014C12.2517 16.0454 12.5142 10.8428 17.5 5.02107C22.4245 10.7885 22.75 16.0369 22.75 16.0369V16.2489C20.7875 17.8298 19.0199 19.6251 17.4825 21.5991C15.9407 19.6599 14.1856 17.8893 12.2482 16.3185V16.1014ZM17.5 29.6074C8.197 29.6074 4.28925 22.4897 3.61025 15.0802C6.5065 16.2981 11.6882 19.1954 16.0475 25.4667L17.5192 27.5854L18.963 25.448C23.2085 19.1581 28.4567 16.2693 31.381 15.0632C30.6845 22.2352 26.782 29.6074 17.5 29.6074Z"
                                fill="#4E2259" />
                        </svg>

                        <p class="highlight-details">
                            มีโปรโมชั่นมากมาย มีโปรโมชั่นมากมาย
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <svg class="mt-2" width="20" height="20" viewBox="0 0 35 33" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32.8773 10.987C32.6585 11.0328 29.722 11.6961 25.9595 13.9962C25.3942 11.3381 23.7212 6.36116 18.7705 1.29937L17.5 0L16.2295 1.30107C11.2612 6.38152 9.59525 11.3721 9.03525 14.0471C5.25875 11.7079 2.345 11.0362 2.1315 10.9887L0 10.5273V12.6443C0 25.0104 6.86875 33 17.5 33C27.9667 33 35 24.8204 35 12.6443V10.5375L32.8773 10.987ZM12.2482 16.1014C12.2517 16.0454 12.5142 10.8428 17.5 5.02107C22.4245 10.7885 22.75 16.0369 22.75 16.0369V16.2489C20.7875 17.8298 19.0199 19.6251 17.4825 21.5991C15.9407 19.6599 14.1856 17.8893 12.2482 16.3185V16.1014ZM17.5 29.6074C8.197 29.6074 4.28925 22.4897 3.61025 15.0802C6.5065 16.2981 11.6882 19.1954 16.0475 25.4667L17.5192 27.5854L18.963 25.448C23.2085 19.1581 28.4567 16.2693 31.381 15.0632C30.6845 22.2352 26.782 29.6074 17.5 29.6074Z"
                                fill="#4E2259" />
                        </svg>

                        <p class="highlight-details">
                            มีบริการครบครัน มีบริการครบครัน
                        </p>
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ url('/reserve_spa') }}" class="button button-booking-highlight">จองตอนนี้</a>
                </div>
                <!-- <button type="button" class="button-booking-highlight">จองตอนนี้</button> -->
            </div>
        </div>


        <div>
            <h1 class="header-our-services">บริการของเรา</h1>
        </div>

        <!-- <div class="grid-service"> -->
        <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 gap-10 text-center py-10 px-20">
            <div class="block animatable fadeInUp">
                <img src="./images/spa_servic.png " class="image-service">
                <p class="details-services">นวดน้ำมันอโรมา</p>
                <p class="header-services">ดูแลผิวหน้าด้วยสารสกัดจากธรรมชาต 100 % ตามสภาพผิวของคุณ</p>
            </div>
            <div class="block animatable fadeInUp">
                <img src="./images/spa_servic.png " class="image-service">
                <p class="details-services">นวดกดจุด</p>
                <p class="header-services">ดูแลผิวหน้าด้วยสารสกัดจากธรรมชาต 100 % ตามสภาพผิวของคุณ</p>
            </div>
            <div class="block animatable fadeInUp">
                <img src="./images/spa_servic.png " class="image-service">
                <p class="details-services">นวดแก้ออฟฟิศซินโดม</p>
                <p class="header-services">ดูแลผิวหน้าด้วยสารสกัดจากธรรมชาต 100 % ตามสภาพผิวของคุณ</p>
            </div>
            <div class="block animatable fadeInDown">

                <img src="./images/spa_servic.png " class="image-service">

                <p class="details-services">นวดแผนไทย</p>
                <p class="header-services">ดูแลผิวหน้าด้วยสารสกัดจากธรรมชาต 100 % ตามสภาพผิวของคุณ</p>
            </div>
            <div class="block animatable fadeInDown">
                <img src="./images/spa_servic.png " class="image-service">
                <p class="details-services">นวดน้ำมันอโรมา</p>
                <p class="header-services">ดูแลผิวหน้าด้วยสารสกัดจากธรรมชาต 100 % ตามสภาพผิวของคุณ</p>
            </div>
            <div class="block animatable fadeInDown">
                <img src="./images/spa_servic.png " class="image-service">
                <p class="details-services">นวดน้ำมันอโรมา</p>
                <p class="header-services">ดูแลผิวหน้าด้วยสารสกัดจากธรรมชาต 100 % ตามสภาพผิวของคุณ</p>
            </div>
        </div>

        <div class="card-bg-discount">
            <div class=" block animatable moveUp">
                <h1 class="text-white text-6xl">ส่วนลด 25%</h1>
                <p class="text-pink-400 text-3xl mt-5">สำหรับการจองครั้งแรก</p>
                <p class="text-white text-xl mt-5">แถมฟรีทรีตเม้นผิวหน้า</p>
            </div>

            <div class="mt-10  block animatable moveUp">
                <a href="{{ url('/reserve_spa') }}" class="button button-book-bottom-discount">จองตอนนี้</a>
            </div>
            <!-- <button type="button" class="button-book-bottom-discount">จองตอนนี้</button> -->
        </div>

        <div>
            <h2 class="header-professional-therapist">พนักงานมืออาชีพของเรา</h2>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 gap-5 mt-10 px-20">
            <div class="card-therapist block animatable bounceInLeft">
                <img src="./images/me.png" class="rounded-t-md	" />
                <div class="content-therapist-professional">
                    <p>คุณ นภัสรัญช์ อินเทวา</p>
                    <div class="flex justify-between mt-5">
                        <p>นวดสำเร็จ 18 ครั้ง</p>
                        <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5004 2.65843C16.5482 0.988608 13.9929 0.0618452 11.3409 0.0617676C9.93715 0.0631271 8.5476 0.3227 7.25216 0.825548C5.95671 1.3284 4.78096 2.06459 3.79256 2.99177C-0.423231 6.9301 -0.42144 13.0901 3.79614 17.0118L16.9326 29.2318C17.2372 29.7301 17.8249 30.0518 18.5004 30.0518C18.7777 30.0493 19.0505 29.9863 19.297 29.8679C19.5434 29.7495 19.7566 29.579 19.9193 29.3701L33.2046 17.0118C37.4221 13.0884 37.4221 6.9301 33.201 2.9851C32.2131 2.05963 31.0383 1.32493 29.7441 0.82324C28.4499 0.32155 27.0619 0.0627669 25.6599 0.0617676C23.0079 0.0621708 20.4527 0.988889 18.5004 2.65843ZM30.6676 5.34177C33.4679 7.9601 33.4697 12.0501 30.6711 14.6551L18.5004 25.9768L6.32956 14.6551C3.53098 12.0501 3.53277 7.9601 6.32598 5.34843C7.68764 4.08844 9.46856 3.3951 11.3409 3.3951C13.2131 3.3951 14.9869 4.08843 16.3378 5.3451L17.2336 6.17843C17.3999 6.33334 17.5973 6.45624 17.8147 6.54009C18.032 6.62394 18.265 6.6671 18.5004 6.6671C18.7357 6.6671 18.9687 6.62394 19.186 6.54009C19.4034 6.45624 19.6008 6.33334 19.7671 6.17843L20.6629 5.3451C23.3719 2.8301 27.9621 2.83677 30.6676 5.34177Z"
                                fill="#FF99A6" />
                        </svg>

                    </div>

                </div>
            </div>

            <div class="card-therapist block animatable bounceInLeft">
                <img src="./images/me.png" class="rounded-t-md	" />
                <div class="content-therapist-professional">
                    <p>คุณ นภัสรัญช์ อินเทวา</p>
                    <div class="flex justify-between mt-5">
                        <p>นวดสำเร็จ 18 ครั้ง</p>
                        <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5004 2.65843C16.5482 0.988608 13.9929 0.0618452 11.3409 0.0617676C9.93715 0.0631271 8.5476 0.3227 7.25216 0.825548C5.95671 1.3284 4.78096 2.06459 3.79256 2.99177C-0.423231 6.9301 -0.42144 13.0901 3.79614 17.0118L16.9326 29.2318C17.2372 29.7301 17.8249 30.0518 18.5004 30.0518C18.7777 30.0493 19.0505 29.9863 19.297 29.8679C19.5434 29.7495 19.7566 29.579 19.9193 29.3701L33.2046 17.0118C37.4221 13.0884 37.4221 6.9301 33.201 2.9851C32.2131 2.05963 31.0383 1.32493 29.7441 0.82324C28.4499 0.32155 27.0619 0.0627669 25.6599 0.0617676C23.0079 0.0621708 20.4527 0.988889 18.5004 2.65843ZM30.6676 5.34177C33.4679 7.9601 33.4697 12.0501 30.6711 14.6551L18.5004 25.9768L6.32956 14.6551C3.53098 12.0501 3.53277 7.9601 6.32598 5.34843C7.68764 4.08844 9.46856 3.3951 11.3409 3.3951C13.2131 3.3951 14.9869 4.08843 16.3378 5.3451L17.2336 6.17843C17.3999 6.33334 17.5973 6.45624 17.8147 6.54009C18.032 6.62394 18.265 6.6671 18.5004 6.6671C18.7357 6.6671 18.9687 6.62394 19.186 6.54009C19.4034 6.45624 19.6008 6.33334 19.7671 6.17843L20.6629 5.3451C23.3719 2.8301 27.9621 2.83677 30.6676 5.34177Z"
                                fill="#FF99A6" />
                        </svg>
                    </div>

                </div>
            </div>

            <div class="card-therapist block animatable bounceInRight">
                <img src="./images/me.png" class="rounded-t-md" />
                <div class="content-therapist-professional">
                    <p>คุณ นภัสรัญช์ อินเทวา</p>
                    <div class="flex justify-between mt-5">
                        <p>นวดสำเร็จ 18 ครั้ง</p>
                        <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5004 2.65843C16.5482 0.988608 13.9929 0.0618452 11.3409 0.0617676C9.93715 0.0631271 8.5476 0.3227 7.25216 0.825548C5.95671 1.3284 4.78096 2.06459 3.79256 2.99177C-0.423231 6.9301 -0.42144 13.0901 3.79614 17.0118L16.9326 29.2318C17.2372 29.7301 17.8249 30.0518 18.5004 30.0518C18.7777 30.0493 19.0505 29.9863 19.297 29.8679C19.5434 29.7495 19.7566 29.579 19.9193 29.3701L33.2046 17.0118C37.4221 13.0884 37.4221 6.9301 33.201 2.9851C32.2131 2.05963 31.0383 1.32493 29.7441 0.82324C28.4499 0.32155 27.0619 0.0627669 25.6599 0.0617676C23.0079 0.0621708 20.4527 0.988889 18.5004 2.65843ZM30.6676 5.34177C33.4679 7.9601 33.4697 12.0501 30.6711 14.6551L18.5004 25.9768L6.32956 14.6551C3.53098 12.0501 3.53277 7.9601 6.32598 5.34843C7.68764 4.08844 9.46856 3.3951 11.3409 3.3951C13.2131 3.3951 14.9869 4.08843 16.3378 5.3451L17.2336 6.17843C17.3999 6.33334 17.5973 6.45624 17.8147 6.54009C18.032 6.62394 18.265 6.6671 18.5004 6.6671C18.7357 6.6671 18.9687 6.62394 19.186 6.54009C19.4034 6.45624 19.6008 6.33334 19.7671 6.17843L20.6629 5.3451C23.3719 2.8301 27.9621 2.83677 30.6676 5.34177Z"
                                fill="#FF99A6" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="card-therapist block animatable bounceInRight">
                <img src="./images/me.png" class="rounded-t-md" />
                <div class="content-therapist-professional">
                    <p>คุณ นภัสรัญช์ อินเทวา</p>
                    <div class="flex justify-between mt-5">
                        <p>นวดสำเร็จ 18 ครั้ง</p>
                        <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5004 2.65843C16.5482 0.988608 13.9929 0.0618452 11.3409 0.0617676C9.93715 0.0631271 8.5476 0.3227 7.25216 0.825548C5.95671 1.3284 4.78096 2.06459 3.79256 2.99177C-0.423231 6.9301 -0.42144 13.0901 3.79614 17.0118L16.9326 29.2318C17.2372 29.7301 17.8249 30.0518 18.5004 30.0518C18.7777 30.0493 19.0505 29.9863 19.297 29.8679C19.5434 29.7495 19.7566 29.579 19.9193 29.3701L33.2046 17.0118C37.4221 13.0884 37.4221 6.9301 33.201 2.9851C32.2131 2.05963 31.0383 1.32493 29.7441 0.82324C28.4499 0.32155 27.0619 0.0627669 25.6599 0.0617676C23.0079 0.0621708 20.4527 0.988889 18.5004 2.65843ZM30.6676 5.34177C33.4679 7.9601 33.4697 12.0501 30.6711 14.6551L18.5004 25.9768L6.32956 14.6551C3.53098 12.0501 3.53277 7.9601 6.32598 5.34843C7.68764 4.08844 9.46856 3.3951 11.3409 3.3951C13.2131 3.3951 14.9869 4.08843 16.3378 5.3451L17.2336 6.17843C17.3999 6.33334 17.5973 6.45624 17.8147 6.54009C18.032 6.62394 18.265 6.6671 18.5004 6.6671C18.7357 6.6671 18.9687 6.62394 19.186 6.54009C19.4034 6.45624 19.6008 6.33334 19.7671 6.17843L20.6629 5.3451C23.3719 2.8301 27.9621 2.83677 30.6676 5.34177Z"
                                fill="#FF99A6" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 mt-20  gap-10 px-20">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
                <p class="bg-fuchsia-900 p-10 text-white hover:bg-pink-400 lg:rounded-tl-lg md:rounded-tl-lg">
                    มากกว่า 50 พนักงานมืออาชีพ</p>
                <p class="bg-fuchsia-900 p-10 text-white hover:bg-pink-400 lg:md:rounded-tr-lg md:rounded-tr-lg">
                    มากกว่า 15 ผลิตภัณฑ์ใหม่</p>
                <p class="bg-fuchsia-900 p-10 text-white hover:bg-pink-400 md:rounded-bl-lg lg:md:rounded-bl-lg">
                    มากกว่า 15 ผลิตภัณฑ์ใหม่</p>
                <p class="bg-fuchsia-900 p-10 text-white hover:bg-pink-400 md:rounded-br-lg lg:md:rounded-br-lg">
                    มากกว่า 15 ผลิตภัณฑ์ใหม่</p>
            </div>
            <image class=" block animatable fadeInDown" src="./images/saltflowers.png" />
        </div>

        <div>
            <h2 class="header-feedback">ผลตอบรับหลังจากใช้บริการ</h2>
        </div>

        <!-- <div class="grid-feedback"> -->
        <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 gap-5 px-20">
            <div class="content-feedback block animatable bounceInLeft">
                <div>
                    <img src="./images/f1.png" class="w-full rounded-t-md" />
                    <p class="p-5">“พนักงานมือเบา นวดดี ผ่อนคลายมากๆค่ะ”</p>
                </div>
            </div>

            <div class="content-feedback  block animatable bounceInLeft">
                <div>
                    <img src="./images/f2.png" class="w-full rounded-t-md" />
                    <p class="p-5">“พนักงานมือเบา นวดดี ผ่อนคลายมากๆค่ะ”</p>
                </div>
            </div>

            <div class="content-feedback  block animatable bounceInRight">
                <div>
                    <img src="./images/f3.png" class="w-full rounded-t-md" />
                    <p class="p-5">“พนักงานมือเบา นวดดี ผ่อนคลายมากๆค่ะ”</p>
                </div>
            </div>

            <div class="content-feedback block animatable bounceInRight">
                <div>
                    <img src="./images/f1.png" class="w-full rounded-t-md" />
                    <p class="p-5">“พนักงานมือเบา นวดดี ผ่อนคลายมากๆค่ะ”</p>
                </div>
            </div>
        </div>


        <div class=" grid-address-select ">
            <div class="text-left">
                <p class="text-xl  text-fuchsia-900 font-semibold mb-3">ที่อยู่</p>
                <p class="mb-5  text-fuchsia-900 font-semibold">121 King Street, Melbourne,Victoria 3000 Australia
                </p>
                <p class="text-xl  text-fuchsia-900 font-semibold mb-3 mt-6">ช่องทางติดต่อ</p>
                <p class="mb-5  text-fuchsia-900 font-semibold">phone: +12 3 3456 7890a</p>
                <p class="mb-5  text-fuchsia-900 font-semibold">email: hello@yourdomain.com</p>
                <p class="text-xl  text-fuchsia-900 font-semibold mb-3 mt-6">เวลาเปิดทำการ</p>
                <p class="mb-5  text-fuchsia-900 font-semibold">จันทร์ - ศุกร์ 09:00 น. - 20.00 น.</p>
                <p class="mb-5  text-fuchsia-900 font-semibold">เสาร์ 10:00 น. - 20.00 น.</p>
                <p class="mb-5  text-fuchsia-900 font-semibold">อาทิตย์ 10:00 น. - 15.00 น.</p>
            </div>

            <div>
                <label for="" class="text-xl text-fuchsia-900 font-semibold mb-3">เลือกบริการนวดที่คุณสนใจ</label>
                <select id=""
                    class="mt-10 bg-white focus:outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-900 focus:border-fuchsia-900 block w-full p-2.5 ">
                    <option selected>เลือกบริการ</option>
                    <option value="US">นวดแผนไทย</option>
                    <option value="CA">นวดน้ำมันอโรม่า</option>
                    <option value="FR">นวดกดจุด</option>
                    <option value="DE">นวดแก้ออฟฟิศซินโดม</option>
                </select>

                <div class="container-btn-next">
                    <button class="btn-next">ยืนยัน</button>
                </div>

            </div>
        </div>



        <!-- <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-36">
            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100"
                src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1650&q=80" />
            <div
                class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0">
            </div>
            <div
                class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                <div class="absolute w-full flex place-content-center">
                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Team
                        work</p>
                </div>
                <div class="absolute w-full flex place-content-center mt-20">
                    <p class="font-sans text-center w-4/5 text-white mt-5">Collaborative effort of a group to achieve a
                        common goal the most effective and efficient way!</p>
                </div>
                <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Contact
                    Us</button>
            </div>
        </div> -->



    </div>





</body>



<!-- <script>
function redirectToPageReserve_Spa() {
    window.location.href = "reserve_spa.php";
}

function redirectToPageReserve_Two_Spa() {
    window.location.href = "reserve_spa_two.php";
}

function redirectToPageReserve_Group() {
    window.location.href = "reserve_group.php";
}
</script> -->



<script>
jQuery(function($) {

    // Function which adds the 'animated' class to any '.animatable' in view
    var doAnimations = function() {

        // Calc current offset and get all animatables
        var offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');

        // Unbind scroll handler if we have no animatables
        if ($animatables.length == 0) {
            $(window).off('scroll', doAnimations);
        }

        // Check all animatables and animate them if necessary
        $animatables.each(function(i) {
            var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                $animatable.removeClass('animatable').addClass('animated');
            }
        });

    };

    // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
    $(window).trigger('scroll');

});
</script>


</html>

@endsection