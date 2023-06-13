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

    <div class="container-contact-us">
        <p class="header-contact-us">ติดต่อเรา</p>
        <button id="dropdownDefault" data-dropdown-toggle="dropdown"
            class="mt-10 inline-flex items-center rounded-lg bg-fuchsia-900 px-4 py-2.5 text-center text-sm font-medium text-white hover:bg-fuchsia-800 focus:outline-none focus:ring-4 focus:ring-fuchsia-200 dark:bg-fuchsia-800 dark:hover:bg-fuchsia-800 dark:focus:ring-fuchsia-800"
            type="button">
            เลือกหัวข้อการติดต่อ <svg class="ml-2 h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </button>

        <div id="dropdown" class="z-10 block w-44 divide-y divide-gray-100 rounded bg-white shadow dark:bg-gray-700"
            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(327px, 70px, 0px);">
            <ul class=" py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                        out</a>
                </li>
            </ul>
        </div>


        <form class="container-input-contact">
            <div class="mb-4">
                <label class="block text-fuchsia-900 text-sm font-bold mb-2 " for="">
                    ชื่อ
                </label>
                <input
                    class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username" type="text" placeholder="" value="">
            </div>

            <div class="mb-4">
                <label class="block text-fuchsia-900 text-sm font-bold mb-2 " for="">
                    กรุณากรอกอีเมล
                </label>
                <input
                    class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username" type="text" placeholder="" value="">
            </div>

            <label class="block text-fuchsia-900 text-sm font-bold mb-2 " for="">
                รายละเอียดเพิ่มเติม
            </label>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900  rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="กรอกรายละเอียดเพิ่มเติม..."></textarea>
        </form>


        <div class="flex justify-end mt-10">
            <button class="bg-fuchsia-900 px-20 py-3 text-white rounded-xl cursor-pointer"
                data-modal-toggle="default-modal">
                ยืนยัน
            </button>
        </div>

    </div>

    </div>

</body>

<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>

</html>

@endsection