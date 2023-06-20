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

    <div class="container-all-my-reserve">
        <p class="header-all-my-reserve">การจองของฉัน</p>

        <div class="container-tab-all_my_reserve">
            <input type="radio" name="tab" id="reserve-all" class="hidden" checked>
            <input type="radio" name="tab" id="outstanding" class="hidden">
            <input type="radio" name="tab" id="success-payment" class="hidden">
            <input type="radio" name="tab" id="service-success" class="hidden">

            <div
                class="my-4 nav grid lg:grid-cols-4 md:grid-cols-4  sm:grid-cols-1 gap-5 bg-fuchsia-100 rounded-r-2xl rounded-l-2xl  ">
                <label for="reserve-all">
                    <span
                        class="py-4 px-5  w-full text-center flex justify-center lg:rounded-l-2xl md:rounded-l-2xl sm:rounded-t-2xl">
                        <p class="text-header-tab-all_my_reserve">
                            การจองทั้งหมด
                        </p>
                    </span>
                </label>

                <label for="outstanding">
                    <span class="py-4 px-5  gap-2 w-full text-center flex justify-center">
                        <p class="text-header-tab-all_my_reserve">
                            ยังไม่ชำระเงิน
                        </p>
                    </span>
                </label>

                <label for="success-payment" class="">
                    <span class="py-4 px-5  gap-2 w-full text-center flex justify-center">

                        <p class="text-header-tab-all_my_reserve">
                            ชำระเงินสำเร็จ
                        </p>
                    </span>
                </label>

                <label for="service-success">
                    <span
                        class="py-4 px-5  gap-2 w-full text-center flex justify-center lg:rounded-พ-2xl md:rounded-r-2xl ">
                        <p class="text-header-tab-all_my_reserve">
                            ใช้บริการสำเร็จ
                        </p>
                    </span>
                </label>
            </div>

            <div class="p-5 rounded-lg shadow-md hidden tab-reserve-all">
                <div class="border-2 border-fuchsia-100 rounded-2xl p-5">
                    <div class="list-icon-header-details-user">
                        <p class="text-orange-500">สถานะยังไม่ชำระเงิน</p>

                        <a href="/reserve_spa">
                            <svg class="fill-fuchsia-950 cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                <path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z"></path>
                            </svg>
                        </a>


                        <svg class="fill-fuchsia-950 cursor-pointer" data-modal-toggle="default-modal"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z">
                            </path>
                        </svg>
                        

                        <div id="default-modal" data-modal-show="false" aria-hidden="true"
                            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                            <div class="relative w-full max-w-2xl px-4 h-full md:h-auto ">
                                <div class="bg-white rounded-lg shadow-xl relative py-10">

                                    <div class="flex justify-center">
                                        <svg class="fill-fuchsia-950" xmlns="http://www.w3.org/2000/svg" width="64"
                                            height="64" viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                            <path
                                                d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="mt-5">
                                        <h2 class="text-fuchsia-950 font-semibold text-lg text-center ">ต้องการลบการ
                                        </h2>
                                        <p class="text-fuchsia-950 font-semibold text-lg text-center ">นวดแบบเดี่ยว</p>
                                        <p class="text-fuchsia-950 font-semibold text-lg text-center ">คุณ นภัสรัญช์
                                            อินเทวา</p>
                                        <p class="text-fuchsia-950 font-semibold text-lg text-center ">วันที่ 12/10/66
                                            เวลา 10.00 น. ใช่หรือไม่ ??</p>
                                    </div>

                                    <div class="grid grid-cols-2 between gap-5 px-10">
                                        <button data-modal-toggle="default-modal" type="button"
                                            class="bg-red-900 text-white cursor-pointer py-2 px-10 rounded-lg mt-10">ยกเลิก</button>
                                        <button data-modal-toggle="default-modal" type="button"
                                            class="bg-fuchsia-950 text-white cursor-pointer py-2 px-10 rounded-lg mt-10">ตกลง</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div
                        class="lg:px-10 md:px-10 sm:px-2 py-5 flex-auto grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-5 ">
                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">ชื่อผู้จอง</p>
                            <p class="text-all-my-service  col-span-3">คุณ นภัสรัญช์ อินเทวา</p>
                        </div>

                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">ประเภทการนวด</p>
                            <p class="text-all-my-service  col-span-3">นวดแผนไทย</p>
                        </div>

                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">รูปแบบบริการ</p>
                            <p class="text-all-my-service col-span-3">นวดแบบเดี่ยว</p>
                        </div>


                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">พนักงานนวด</p>
                            <p class="text-all-my-service  col-span-3">คุณ นภัสรัญช์ อินเทวา</p>
                        </div>

                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">เบอร์</p>
                            <p class="text-all-my-service col-span-3">062-2222222</p>
                        </div>

                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 leading-8">
                            <p class="label-all-my-service col-span-1">ที่อยู่</p>
                            <p class="text-all-my-service col-span-3">999 ถนนกรุงเทพ-นนทบุรี แขวงบางซื่อ เขตบางซื่อ
                                จังหวัดกรุงเทพมหานคร รหัสไปรษณีย์ 10800</p>
                        </div>

                    </div>

                </div>
            </div>


            <div class="p-5 rounded-lg shadow-md hidden tab-outstanding">
                <div class="border-2 border-fuchsia-100 rounded-2xl p-5">
                    <div
                        class="lg:px-10 md:px-10 sm:px-2  py-5 flex-auto grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-5">
                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">ชื่อผู้จอง</p>
                            <p class="text-all-my-service  col-span-3">คุณ นภัสรัญช์ อินเทวา</p>
                        </div>


                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">ประเภทการนวด</p>
                            <p class="text-all-my-service  col-span-3">นวดแผนไทย</p>
                        </div>

                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">รูปแบบบริการ</p>
                            <p class="text-all-my-service col-span-3">นวดแบบเดี่ยว</p>
                        </div>


                        <div class="flex-auto grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">พนักงานนวด</p>
                            <p class="text-all-my-service  col-span-3">คุณ นภัสรัญช์ อินเทวา</p>
                        </div>


                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">เบอร์</p>
                            <p class="text-all-my-service col-span-3">062-2222222</p>
                        </div>


                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 leading-8">
                            <p class="label-all-my-service col-span-1">ที่อยู่</p>
                            <p class="text-all-my-service col-span-3">999 ถนนกรุงเทพ-นนทบุรี แขวงบางซื่อ เขตบางซื่อ
                                จังหวัดกรุงเทพมหานคร รหัสไปรษณีย์ 10800</p>
                        </div>

                    </div>
                    <div class="container-btn-next ">

                        <a href="/pay" class="button btn-next ">ชำระเงิน</a>
                    </div>
                </div>
            </div>

            <div class="p-5 rounded-lg shadow-md hidden tab-success-payment">
                <div class="border-2 border-fuchsia-100 rounded-2xl p-5">
                    <div
                        class="lg:px-10 md:px-10 sm:px-2  py-5 flex-auto grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-5 ">

                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">ชื่อผู้จอง</p>
                            <p class="text-all-my-service  col-span-3">คุณ นภัสรัญช์ อินเทวา</p>
                        </div>


                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">ประเภทการนวด</p>
                            <p class="text-all-my-service  col-span-3">นวดแผนไทย</p>
                        </div>

                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">รูปแบบบริการ</p>
                            <p class="text-all-my-service col-span-3">นวดแบบเดี่ยว</p>
                        </div>


                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">พนักงานนวด</p>
                            <p class="text-all-my-service  col-span-3">คุณ นภัสรัญช์ อินเทวา</p>
                        </div>


                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">เบอร์</p>
                            <p class="text-all-my-service col-span-3">062-2222222</p>
                        </div>


                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 leading-8">
                            <p class="label-all-my-service col-span-1">ที่อยู่</p>
                            <p class="text-all-my-service col-span-3">999 ถนนกรุงเทพ-นนทบุรี แขวงบางซื่อ เขตบางซื่อ
                                จังหวัดกรุงเทพมหานคร รหัสไปรษณีย์ 10800</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-5 rounded-lg shadow-md hidden tab-service-success">
                <div class="border-2 border-fuchsia-100 rounded-2xl p-5">
                    <a class="flex justify-end underline underline-offset-8 cursor-pointer text-fuchsia-900 font-bold "
                        data-modal-toggle="default-modal-review">review</a>


                    <div id="default-modal-review" data-modal-show="false" aria-hidden="true"
                        class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                        <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                            <div class="bg-white rounded-lg shadow-xl relative ">
                                <div class="flex items-start justify-between p-5 border-b rounded-t">
                                    <h3 class="text-fuchsia-950 text-xl lg:text-2xl font-semibold dark:text-white">
                                        Review
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center  dark:hover:text-white"
                                        data-modal-toggle="default-modal-review">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>


                                <div class="px-20 py-2 space-y-6">
                                    <p class="text-fuchsia-950 font-semibold text-lg ">ให้คะแนน</p>

                                    <div class="radio-group  grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-5 ">
                                        <div class="radio">
                                            <div type="radio" id="varygood" name="select-review" value="varygood"
                                                class="bg-white hover:bg-fuchsia-100 rounded-xl p-5  border-2 border-fuchsia-100">
                                                <div class="flex justify-center">
                                                    <svg class="fill-fuchsia-950 hover:fill-fuchsia-800"
                                                        xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                        <path
                                                            d="M14.829 14.828a4.055 4.055 0 0 1-1.272.858 4.002 4.002 0 0 1-4.875-1.45l-1.658 1.119a6.063 6.063 0 0 0 1.621 1.62 5.963 5.963 0 0 0 2.148.903 6.042 6.042 0 0 0 2.415 0 5.972 5.972 0 0 0 2.148-.903c.313-.212.612-.458.886-.731.272-.271.52-.571.734-.889l-1.658-1.119a4.017 4.017 0 0 1-.489.592z">
                                                        </path>
                                                        <circle cx="8.5" cy="10.5" r="1.5"></circle>
                                                        <circle cx="15.493" cy="10.493" r="1.493"></circle>
                                                    </svg>

                                                </div>
                                                <p class="text-center text-fuchsia-950 mt-2 font-semibold">ดีมาก</p>
                                            </div>

                                        </div>


                                        <div class="radio">
                                            <div type="radio" id="good" name="select-review" value="good"
                                                class="bg-white hover:bg-fuchsia-100 rounded-xl p-5  border-2 border-fuchsia-100">
                                                <div class="flex justify-center">
                                                    <svg class="fill-fuchsia-950 hover:fill-fuchsia-800"
                                                        xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                        <path
                                                            d="M14.829 14.828a4.055 4.055 0 0 1-1.272.858 4.002 4.002 0 0 1-4.875-1.45l-1.658 1.119a6.063 6.063 0 0 0 1.621 1.62 5.963 5.963 0 0 0 2.148.903 6.042 6.042 0 0 0 2.415 0 5.972 5.972 0 0 0 2.148-.903c.313-.212.612-.458.886-.731.272-.271.52-.571.734-.889l-1.658-1.119a4.017 4.017 0 0 1-.489.592z">
                                                        </path>
                                                        <circle cx="8.5" cy="10.5" r="1.5"></circle>
                                                        <circle cx="15.493" cy="10.493" r="1.493"></circle>
                                                    </svg>

                                                </div>
                                                <p class="text-center text-fuchsia-950 mt-2 font-semibold">พอใช้</p>
                                            </div>
                                        </div>

                                        <div class="radio">
                                            <div type="radio" id="bad" name="select-review" value="bad"
                                                class="bg-white hover:bg-fuchsia-100 rounded-xl p-5  border-2 border-fuchsia-100">
                                                <div class="flex justify-center">
                                                    <svg class="fill-fuchsia-950 hover:fill-fuchsia-800"
                                                        xmlns="http://www.w3.org/2000/svg" width="76" height="76"
                                                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                                                        <path
                                                            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                                                        </path>
                                                        <path
                                                            d="M14.829 14.828a4.055 4.055 0 0 1-1.272.858 4.002 4.002 0 0 1-4.875-1.45l-1.658 1.119a6.063 6.063 0 0 0 1.621 1.62 5.963 5.963 0 0 0 2.148.903 6.042 6.042 0 0 0 2.415 0 5.972 5.972 0 0 0 2.148-.903c.313-.212.612-.458.886-.731.272-.271.52-.571.734-.889l-1.658-1.119a4.017 4.017 0 0 1-.489.592z">
                                                        </path>
                                                        <circle cx="8.5" cy="10.5" r="1.5"></circle>
                                                        <circle cx="15.493" cy="10.493" r="1.493"></circle>
                                                    </svg>

                                                </div>
                                                <p class="text-center text-fuchsia-950 mt-2 font-semibold">แย่</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="px-20 py-2 gap-10">
                                    <label class="block text-fuchsia-950 font-semibold py-5" for="">
                                        ข้อเสนอแนะเพิ่มเติม
                                    </label><textarea id="message" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900   rounded-lg border-2 border-fuchsia-100 focus:ring-fuchsia-100 outline-fuchsia-400 focus:border-fuchsia-800 "
                                        placeholder="กรอกรายละเอียดเพิ่มเติม..."></textarea>

                                </div>

                                <div class="px-20 py-10 gap-10">
                                    <p class="text-sm text-fuchsia-950">ขอขอบคุณทุกคำติชมของคุณ
                                        เราจะนำไปพัฒนาระบบและการบริการให้ดียิ่งขึ้น</p>

                                    <button data-modal-toggle="default-modal-review" type="button"
                                        class=" mt-5 w-full text-white bg-fuchsia-950 hover:bg-fuchsia-800 focus:ring-4 focus:ring-fuchsia-100 font-medium rounded-lg text-sm px-10 py-2.5 text-center">ส่ง</button>
                                </div>

<!-- 
                                <div
                                    class="radio-group  grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3 gap-10 mt-10">
                                    <div class="radio">
                                        <input type="radio" id="me" name="select-people" value="me">
                                        <label for="me"
                                            class="block text-center p-2 bg-white rounded-xl   border-grey border-solid border-2">
                                            <div class="">
                                                <p class="py-5">sfsfwf</p>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <input type="radio" id="others" name="select-people" value="others">
                                        <label for="others"
                                            class="block text-center p-2 bg-white rounded-xl   border-grey border-solid border-2">
                                            <div class="">
                                                <p class="py-5">fswfwf</p>
                                            </div>
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div
                        class="lg:px-10 md:px-10 sm:px-2  py-5 flex-auto grid lg:grid-cols-2 md:grid-cols- sm:grid-cols-1 gap-5 ">
                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">ชื่อผู้จอง</p>
                            <p class="text-all-my-service  col-span-3">คุณ นภัสรัญช์ อินเทวา</p>
                        </div>

                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">ประเภทการนวด</p>
                            <p class="text-all-my-service  col-span-3">นวดแผนไทย</p>
                        </div>

                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">รูปแบบบริการ</p>
                            <p class="text-all-my-service col-span-3">นวดแบบเดี่ยว</p>
                        </div>

                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">พนักงานนวด</p>
                            <p class="text-all-my-service  col-span-3">คุณ นภัสรัญช์ อินเทวา</p>
                        </div>

                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1">
                            <p class="label-all-my-service col-span-1">เบอร์</p>
                            <p class="text-all-my-service col-span-3">062-2222222</p>
                        </div>


                        <div class="flex-auto grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 leading-8">
                            <p class="label-all-my-service col-span-1">ที่อยู่</p>
                            <p class="text-all-my-service col-span-3">999 ถนนกรุงเทพ-นนทบุรี แขวงบางซื่อ เขตบางซื่อ
                                จังหวัดกรุงเทพมหานคร รหัสไปรษณีย์ 10800</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>

<script>
function redirectToPageReserve_Spa() {
    window.location.href = "reserve_spa.php";
}

function redirectToPagePay() {
    window.location.href = "pay.php";
}
</script>


</html>


@endsection