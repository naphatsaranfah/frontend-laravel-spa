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


    <div class="container-setting-profile">
        <!-- <div class="bg-[url('./images/binifit.png')] h-32 rounded-t-2xl"> -->

        <div class="grid grid-cols-3">
            <img src="./images/binifit.png" class="w-full h-28">
            <img src="./images/binifit.png" class="w-full h-28">
            <img src="./images/binifit.png" class="w-full h-28">
        </div>


        <div class="flex gap-5 mt-10">
            <img src="./images/profile_woman.png" class="w-24 h-24">
            <div>
                <p class="username mt-10"> Naphatsaran Intewa</p>
                <p class="email-user  ">naphatsaran@gmail.com</p>
            </div>
        </div>




        <div class="container-tab-setting-profile">

            <input type="radio" name="tab" id="aaa" class="hidden" checked>
            <input type="radio" name="tab" id="bbb" class="hidden">

            <div class="my-4 nav grid grid-cols-2 bg-fuchsia-100">
                <label for="aaa">
                    <span class="py-4 lg:px-5 sm:px-2  gap-2 w-full text-center flex justify-center">
                        <svg class="icon-setting-profile" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg>
                        <p class="text-tab lg:text-md md-text-md sm:text-sm">
                            ฉัน
                        </p>
                    </span>
                </label>

                <label for="bbb">
                    <span class="py-4 px-5 gap-2 w-full text-center flex justify-center">
                        <svg class="icon-setting-profile" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg>
                        <p>
                            ผู้รับบริการอื่น
                        </p>
                    </span>
                </label>
            </div>

            <div class="p-5 rounded-lg shadow-md hidden tab-aaa">
                <div class="px-2 py-5 flex-auto">
                    <div class="tab-content tab-space">
                        <div class="block" id="tab-profile">
                            <p class="header-personal-information">กรอกข้อมูลส่วนตัว</p>

                            <form class="container-input-personal-information ">
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        ชื่อ-นามสกุล
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="นภัสรัญช์ อินเทวา">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        อายุ
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="24">
                                </div>

                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        เพศ
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="หญิง">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        เบอร์โทรศัพท์
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="062-0688888">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        อีเมล
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="naphatsaran.fah@gmail.com">
                                </div>
                            </form>

                            <p class="header-address">กรุณากรอกที่อยู่หลัก</p>

                            <form class="container-input-personal-information ">
                                <div class="mb-4 ">
                                    <label class="block  text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        เลขที่
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        ชื่อบ้าน/โครงการ
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>

                                <div class="mb-4 ">
                                    <label class="block  text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        ถนน
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        ซอย
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        เขต
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        แขวง
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">


                                    <label for="countries"
                                        class="block text-sm font-bold mb-2 text-fuchsia-90 text-fuchsia-900">จังหวัด</label>
                                    <select id="countries"
                                        class=" bg-white border shadow border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>เลือกจังหวัด</option>
                                        <option class="option-select" value="กรุงเทพมหานคร">
                                            กรุงเทพมหานคร</option>
                                        <option value="กระบี่">กระบี่ </option>
                                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                        <option value="จันทบุรี">จันทบุรี</option>
                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                        <option value="ชัยนาท">ชัยนาท </option>
                                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                                        <option value="ชุมพร">ชุมพร </option>
                                        <option value="ชลบุรี">ชลบุรี </option>
                                        <option value="เชียงใหม่">เชียงใหม่ </option>
                                        <option value="เชียงราย">เชียงราย </option>
                                        <option value="ตรัง">ตรัง </option>
                                        <option value="ตราด">ตราด </option>
                                        <option value="ตาก">ตาก </option>
                                        <option value="นครนายก">นครนายก </option>
                                        <option value="นครปฐม">นครปฐม </option>
                                        <option value="นครพนม">นครพนม </option>
                                        <option value="นครราชสีมา">นครราชสีมา </option>
                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                        <option value="นครสวรรค์">นครสวรรค์ </option>
                                        <option value="นราธิวาส">นราธิวาส </option>
                                        <option value="น่าน">น่าน </option>
                                        <option value="นนทบุรี">นนทบุรี </option>
                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                        <option value="ปทุมธานี">ปทุมธานี </option>
                                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                        <option value="ปัตตานี">ปัตตานี </option>
                                        <option value="พะเยา">พะเยา </option>
                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                        <option value="พังงา">พังงา </option>
                                        <option value="พิจิตร">พิจิตร </option>
                                        <option value="พิษณุโลก">พิษณุโลก </option>
                                        <option value="เพชรบุรี">เพชรบุรี </option>
                                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                        <option value="แพร่">แพร่ </option>
                                        <option value="พัทลุง">พัทลุง </option>
                                        <option value="ภูเก็ต">ภูเก็ต </option>
                                        <option value="มหาสารคาม">มหาสารคาม </option>
                                        <option value="มุกดาหาร">มุกดาหาร </option>
                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                        <option value="ยโสธร">ยโสธร </option>
                                        <option value="ยะลา">ยะลา </option>
                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                        <option value="ระนอง">ระนอง </option>
                                        <option value="ระยอง">ระยอง </option>
                                        <option value="ราชบุรี">ราชบุรี</option>
                                        <option value="ลพบุรี">ลพบุรี </option>
                                        <option value="ลำปาง">ลำปาง </option>
                                        <option value="ลำพูน">ลำพูน </option>
                                        <option value="เลย">เลย </option>
                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option value="สกลนคร">สกลนคร</option>
                                        <option value="สงขลา">สงขลา </option>
                                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                        <option value="สระแก้ว">สระแก้ว </option>
                                        <option value="สระบุรี">สระบุรี </option>
                                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                                        <option value="สุโขทัย">สุโขทัย </option>
                                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                        <option value="สุรินทร์">สุรินทร์ </option>
                                        <option value="สตูล">สตูล </option>
                                        <option value="หนองคาย">หนองคาย </option>
                                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                        <option value="อุดรธานี">อุดรธานี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        รหัสไปรษณี
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                            </form>

                            <div class="flex gap-10 mt-5 ">
                                <div class="inline-flex items-center  ">
                                    <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                                        data-ripple-dark="true">
                                        <input id="html" name="type" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-900 checked:before:bg-fuchsia-900 hover:before:opacity-10" />
                                        <div
                                            class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-900 opacity-0 transition-opacity peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                </circle>
                                            </svg>
                                        </div>
                                    </label>
                                    <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                                        มีที่จอดรถ
                                    </label>
                                </div>

                                <div class="inline-flex items-center">
                                    <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                                        data-ripple-dark="true">
                                        <input id="html" name="type" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-900 checked:before:bg-fuchsia-900 hover:before:opacity-10" />
                                        <div
                                            class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-900 opacity-0 transition-opacity peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                </circle>
                                            </svg>
                                        </div>
                                    </label>
                                    <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                                        ไม่มีที่จอดรถ
                                    </label>
                                </div>

                            </div>

                            <p class="header-health">แบบสอบถามสุขภาพก่อนการนวด</p>

                            <form class="container-input-personal-information">
                                <div class="mb-4 ">
                                    <label for="countries"
                                        class="block text-sm font-bold mb-2 text-fuchsia-90 text-fuchsia-900">โรคที่คุณเป็นในปัจจุบัน</label>
                                    <select id="countries"
                                        class=" bg-white shadow border border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="อุดรธานี">ไม่มี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>



                                <div class="mb-4 ">
                                    <label for="countries"
                                        class="block text-sm  font-bold mb-2 text-fuchsia-90 text-fuchsia-900">โรคที่คุณเป็นในปัจจุบัน</label>
                                    <select id="countries"
                                        class=" bg-white border shadow border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="อุดรธานี">ไม่เคย </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>

                                <div class="mb-4 ">

                                    <label for="countries"
                                        class="block text-sm  font-bold mb-2 text-fuchsia-90 text-fuchsia-900">อาการนอกเหนือจากที่กล่าวข้างต้น</label>
                                    <select id="countries"
                                        class=" bg-white border shadow border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="อุดรธานี">เป็นไข้ </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>


                                <div class="mb-4 ">
                                    <label for="countries"
                                        class="block text-sm  font-bold mb-2 text-fuchsia-90 text-fuchsia-900">หมอนรองกระดูกสันหลังทับเส้นประสาท</label>
                                    <select id="countries"
                                        class=" bg-white shadow border border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="อุดรธานี">บริเวณกระดูกสันหลังช่วงคอ </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>

                            </form>

                            <div class="container-btn-next">
                                <button class="btn-next">บันทึก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="p-5 rounded-lg shadow-md hidden tab-bbb">
                <div class="px-2 py-5 flex-auto">
                    <div class="tab-content tab-space">
                        <div class="block" id="tab-profile">
                            <div id="card_add_service_others">

                                <p class="header-personal-information">กรอกข้อมูลส่วนตัว</p>

                                <form class="container-input-personal-information ">
                                    <form
                                        class="bg-white grid lg:grid-cols-2 sm:grid-cols-1 mt-10 gap-5 lg:px-10 sm:px-3 ">
                                        <div class="mb-4 ">
                                            <label class="block  text-sm font-bold mb-2 text-fuchsia-900"
                                                for="username">
                                                ชื่อ-นามสกุล
                                            </label>
                                            <input
                                                class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                id="username" type="text" placeholder="" value="">
                                        </div>
                                        <div class="mb-4 ">
                                            <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                                อายุ
                                            </label>
                                            <input
                                                class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                id="username" type="text" placeholder="" value="">
                                        </div>

                                        <div class="mb-4 ">
                                            <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                                เพศ
                                            </label>
                                            <input
                                                class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                id="username" type="text" placeholder="" value="">
                                        </div>
                                        <div class="mb-4 ">
                                            <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                                เบอร์โทรศัพท์
                                            </label>
                                            <input
                                                class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                id="username" type="text" placeholder="" value="">
                                        </div>
                                        <div class="mb-4 ">
                                            <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                                อีเมล
                                            </label>
                                            <input
                                                class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                id="username" type="text" placeholder="" value="">
                                        </div>
                                    </form>
                            </div>


                            <p class="header-address">กรุณากรอกที่อยู่หลัก</p>


                            <form class="container-input-personal-information ">
                                <div class="mb-4 ">
                                    <label class="block  text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        เลขที่
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        ชื่อบ้าน/โครงการ
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>

                                <div class="mb-4 ">
                                    <label class="block  text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        ถนน
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        ซอย
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        เขต
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        แขวง
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                                <div class="mb-4 ">


                                    <label for="countries"
                                        class="block text-sm font-bold mb-2 text-fuchsia-90 text-fuchsia-900">จังหวัด</label>
                                    <select id="countries"
                                        class=" bg-white border shadow border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>เลือกจังหวัด</option>
                                        <option class="option-select" value="กรุงเทพมหานคร">
                                            กรุงเทพมหานคร</option>
                                        <option value="กระบี่">กระบี่ </option>
                                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                        <option value="จันทบุรี">จันทบุรี</option>
                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                        <option value="ชัยนาท">ชัยนาท </option>
                                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                                        <option value="ชุมพร">ชุมพร </option>
                                        <option value="ชลบุรี">ชลบุรี </option>
                                        <option value="เชียงใหม่">เชียงใหม่ </option>
                                        <option value="เชียงราย">เชียงราย </option>
                                        <option value="ตรัง">ตรัง </option>
                                        <option value="ตราด">ตราด </option>
                                        <option value="ตาก">ตาก </option>
                                        <option value="นครนายก">นครนายก </option>
                                        <option value="นครปฐม">นครปฐม </option>
                                        <option value="นครพนม">นครพนม </option>
                                        <option value="นครราชสีมา">นครราชสีมา </option>
                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                        <option value="นครสวรรค์">นครสวรรค์ </option>
                                        <option value="นราธิวาส">นราธิวาส </option>
                                        <option value="น่าน">น่าน </option>
                                        <option value="นนทบุรี">นนทบุรี </option>
                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                        <option value="ปทุมธานี">ปทุมธานี </option>
                                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                        <option value="ปัตตานี">ปัตตานี </option>
                                        <option value="พะเยา">พะเยา </option>
                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                        <option value="พังงา">พังงา </option>
                                        <option value="พิจิตร">พิจิตร </option>
                                        <option value="พิษณุโลก">พิษณุโลก </option>
                                        <option value="เพชรบุรี">เพชรบุรี </option>
                                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                        <option value="แพร่">แพร่ </option>
                                        <option value="พัทลุง">พัทลุง </option>
                                        <option value="ภูเก็ต">ภูเก็ต </option>
                                        <option value="มหาสารคาม">มหาสารคาม </option>
                                        <option value="มุกดาหาร">มุกดาหาร </option>
                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                        <option value="ยโสธร">ยโสธร </option>
                                        <option value="ยะลา">ยะลา </option>
                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                        <option value="ระนอง">ระนอง </option>
                                        <option value="ระยอง">ระยอง </option>
                                        <option value="ราชบุรี">ราชบุรี</option>
                                        <option value="ลพบุรี">ลพบุรี </option>
                                        <option value="ลำปาง">ลำปาง </option>
                                        <option value="ลำพูน">ลำพูน </option>
                                        <option value="เลย">เลย </option>
                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option value="สกลนคร">สกลนคร</option>
                                        <option value="สงขลา">สงขลา </option>
                                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                        <option value="สระแก้ว">สระแก้ว </option>
                                        <option value="สระบุรี">สระบุรี </option>
                                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                                        <option value="สุโขทัย">สุโขทัย </option>
                                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                        <option value="สุรินทร์">สุรินทร์ </option>
                                        <option value="สตูล">สตูล </option>
                                        <option value="หนองคาย">หนองคาย </option>
                                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                        <option value="อุดรธานี">อุดรธานี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>
                                <div class="mb-4 ">
                                    <label class="block text-sm font-bold mb-2 text-fuchsia-900" for="username">
                                        รหัสไปรษณี
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="username" type="text" placeholder="" value="">
                                </div>
                            </form>



                            <div class="flex gap-10 mt-5 mx-7">
                                <div class="inline-flex items-center  ">
                                    <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                                        data-ripple-dark="true">
                                        <input id="html" name="type" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-900 checked:before:bg-fuchsia-900 hover:before:opacity-10" />
                                        <div
                                            class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-900 opacity-0 transition-opacity peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                </circle>
                                            </svg>
                                        </div>
                                    </label>
                                    <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                                        มีที่จอดรถ
                                    </label>
                                </div>



                                <div class="inline-flex items-center">
                                    <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                                        data-ripple-dark="true">
                                        <input id="html" name="type" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-900 checked:before:bg-fuchsia-900 hover:before:opacity-10" />
                                        <div
                                            class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-900 opacity-0 transition-opacity peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5"
                                                viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8">
                                                </circle>
                                            </svg>
                                        </div>
                                    </label>
                                    <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                                        ไม่มีที่จอดรถ
                                    </label>
                                </div>
                            </div>

                            <p class="header-health">แบบสอบถามสุขภาพก่อนการนวด</p>

                            <form class="container-input-personal-information">
                                <div class="mb-4">
                                    <label for="countries"
                                        class="block text-sm font-bold mb-2 text-fuchsia-90 text-fuchsia-900">โรคที่คุณเป็นในปัจจุบัน</label>
                                    <select id="countries"
                                        class=" bg-white shadow border border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="อุดรธานี">ไม่มี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>

                                <div class="mb-4 ">
                                    <label for="countries"
                                        class="block text-sm  font-bold mb-2 text-fuchsia-90 text-fuchsia-900">โรคที่คุณเป็นในปัจจุบัน</label>
                                    <select id="countries"
                                        class=" bg-white border shadow border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="อุดรธานี">ไม่เคย </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>

                                <div class="mb-4 ">

                                    <label for="countries"
                                        class="block text-sm  font-bold mb-2 text-fuchsia-90 text-fuchsia-900">อาการนอกเหนือจากที่กล่าวข้างต้น</label>
                                    <select id="countries"
                                        class=" bg-white border shadow border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="อุดรธานี">เป็นไข้ </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>


                                <div class="mb-4 ">

                                    <label for="countries"
                                        class="block text-sm  font-bold mb-2 text-fuchsia-90 text-fuchsia-900">หมอนรองกระดูกสันหลังทับเส้นประสาท</label>
                                    <select id="countries"
                                        class=" bg-white shadow border border-gray-300 text-fuchsia-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="อุดรธานี">บริเวณกระดูกสันหลังช่วงคอ </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>



                            </form>

                            <div class="container-btn-next">
                                <button class="btn-next">บันทึก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


</body>


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
function openSelect_Add_Service_Others() {
    var x = document.getElementById("card_add_service_others");
    x.style.display = "block";
    var y = document.getElementById("card_list_service_others");
    y.style.display = "none";
}

function openSelectOthers_List_Service_Others() {
    var x = document.getElementById("card_list_service_others");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    var y = document.getElementById("card_add_service_others");
    y.style.display = "none";
}


$(document).ready(function() {

    $(".hide-all").hide();

});
</script>

</html>

@endsection