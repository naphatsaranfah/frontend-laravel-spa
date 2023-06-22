@extends('layout')

@section('content')




<div class="lg:px-20 md:px-20 sm:px-10 py-5 flex-auto">
    <div class="">
        <div class="relative">
            <a href="{{ url('/reserve_spa') }}">
                <img class="object-cover h-64 w-full" src="./images/detail_therapist.png" />

                <img class="p-1 rounded-lg shadow-md bg-white  w-40 h-40 absolute text-5xl text-fuchsia-950 bottom-5  lg:left-40 md:left-40 sm:mx-40 top-60 -translate-x-1/2 -translate-y-1/2 "
                    src="./" />
            </a>
        </div>


        <div class="block mt-40">
            <div class="flex gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-fuchsia-950" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path
                        d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                    </path>
                </svg>
                <p class="header-personal-information">ข้อมูลผู้สมัคร</p>
            </div>

            <form class="container-input-personal-information ">
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        ชื่อ-นามสกุล
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        อายุ
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>

                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        เพศ
                    </label>
                    <div class="flex gap-10 mt-5 ">
                        <div class="inline-flex items-center  ">
                            <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                                data-ripple-dark="true">
                                <input id="html" name="type" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-950 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-950 checked:before:bg-fuchsia-950 hover:before:opacity-10" />
                                <div
                                    class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-950 opacity-0 transition-opacity peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                                        fill="currentColor">
                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                        </circle>
                                    </svg>
                                </div>
                            </label>
                            <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                                หญิง
                            </label>
                        </div>

                        <div class="inline-flex items-center">
                            <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                                data-ripple-dark="true">
                                <input id="html" name="type" type="radio"
                                    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-950 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-950 checked:before:bg-ffuchsia-950 hover:before:opacity-10" />
                                <div
                                    class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-950 opacity-0 transition-opacity peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                                        fill="currentColor">
                                        <circle data-name="ellipse" cx="8" cy="8" r="8">
                                        </circle>
                                    </svg>
                                </div>
                            </label>
                            <label class="mt-px cursor-pointer select-none font-light text-gray-700" for="html">
                                ชาย
                            </label>
                        </div>
                    </div>
                </div>


                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        เบอร์โทรศัพท์
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>

            </form>

            <p class="header-address">ข้อมูลที่อยู่</p>

            <form class="container-input-personal-information ">
                <div class="mb-4 ">
                    <label class="block  text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        เลขที่
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        ชื่อบ้าน/โครงการ
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>

                <div class="mb-4 ">
                    <label class="block  text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        ถนน
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        ซอย
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        เขต
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        แขวง
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
                <div class="mb-4 ">


                    <label for="countries"
                        class="block text-sm font-bold mb-2 text-fuchsia-90 text-fuchsia-950">จังหวัด</label>
                    <select id="countries"
                        class=" bg-white border shadow border-gray-300 text-fuchsia-950 text-sm rounded-lg  focus:border-fuchsia-950 block w-full p-2">
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
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        รหัสไปรษณี
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
            </form>


            <div class="mb-4 ">
                <label class="block text-lg font-bold mb-2 text-fuchsia-950 mt-10 " for="">
                    ประสบการณ์การนวด
                </label>

                <div class="flex gap-10 mt-5 ">
                    <div class="inline-flex items-center  ">
                        <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                            data-ripple-dark="true">
                            <input id="html" name="type" type="radio"
                                class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-950 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-950 checked:before:bg-fuchsia-950 hover:before:opacity-10" />
                            <div
                                class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-950 opacity-0 transition-opacity peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <circle data-name="ellipse" cx="8" cy="8" r="8">
                                    </circle>
                                </svg>
                            </div>
                        </label>
                        <label class="mt-px cursor-pointer select-none font-light text-fuchsia-950" for="html">
                            มีประสบการณ์
                        </label>
                    </div>

                    <div class="inline-flex items-center">
                        <label class="relative flex cursor-pointer items-center rounded-full p-3" for="html"
                            data-ripple-dark="true">
                            <input id="html" name="type" type="radio"
                                class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-fuchsia-950 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-fuchsia-950 checked:before:bg-ffuchsia-950 hover:before:opacity-10" />
                            <div
                                class="pointer-events-none absolute top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-fuchsia-950 opacity-0 transition-opacity peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16"
                                    fill="currentColor">
                                    <circle data-name="ellipse" cx="8" cy="8" r="8">
                                    </circle>
                                </svg>
                            </div>
                        </label>
                        <label class="mt-px cursor-pointer select-none font-light text-fuchsia-950" for="html">
                            ไม่มีประสบการณ์
                        </label>
                    </div>
                </div>
            </div>
            </form>

            <form class="container-input-personal-information ">
                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        สถานที่ทำงานล่าสุด
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>

                <div class="mb-4 ">
                    <label class="block text-sm font-bold mb-2 text-fuchsia-950" for="username">
                        อายุงาน
                    </label>
                    <input
                        class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="" value="">
                </div>
            </form>

            <div class="container-btn-next">
                <button class="btn-next">ส่งใบสมัคร</button>
            </div>
        </div>
    </div>
</div>









@endsection