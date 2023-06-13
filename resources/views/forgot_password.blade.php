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

    <div class="container-change-password">
        <p class="header-change-password">ลืมรหัสผ่าน</p>
        <div class="container-text-change-password">
            <p class="text-change-password">ส่งรหัสผ่านทางเบอร์โทรศัพท์</p>
            <p class="text-change-password">กรุณากรอกเบอร์โทรของคุณที่ลงทะเบียนไว้กับเรา</p>
        </div>


        <div class="relative">
            <div>
                <div class="relative flex rounded-md shadow-sm mt-6">
                    <input type="text" id="hs-trailing-button-add-on-with-icon-and-button"
                        name="hs-trailing-button-add-on-with-icon-and-button"
                        class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-l-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 text-gray-400"
                        placeholder="กรุณากรอกเบอร์โทรศัพท์">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4 fill-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z">
                            </path>
                        </svg>
                    </div>
                    <button type="button"
                        class="py-3 px-4 inline-flex flex-shrink-0 justify-center items-center rounded-r-md border border-transparent font-semibold bg-fuchsia-900 text-white hover:bg-fuchsia-700 focus:z-10 focus:outline-none focus:ring-2 focus:ring-fuchsia-900 transition-all text-sm">
                        <div class="fill-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                style="transform: ;msFilter:;">
                                <path
                                    d="m21.426 11.095-17-8A1 1 0 0 0 3.03 4.242l1.212 4.849L12 12l-7.758 2.909-1.212 4.849a.998.998 0 0 0 1.396 1.147l17-8a1 1 0 0 0 0-1.81z">
                                </path>
                            </svg>
                        </div>

                    </button>
                </div>
            </div>

            <div>
                <label for="hs-trailing-button-add-on-with-icon-and-button " class="sr-only">Label</label>
                <div class="relative flex rounded-md shadow-sm mt-6">
                    <input type="text" id="hs-trailing-button-add-on-with-icon-and-button"
                        name="hs-trailing-button-add-on-with-icon-and-button"
                        class="py-3 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-fuchsia-900 focus:ring-fuchsia-900  text-gray-400"
                        placeholder="กรุณากรอกรหัส OTP">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4 fill-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M7 17a5.007 5.007 0 0 0 4.898-4H14v2h2v-2h2v3h2v-3h1v-2h-9.102A5.007 5.007 0 0 0 7 7c-2.757 0-5 2.243-5 5s2.243 5 5 5zm0-8c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3z">
                            </path>
                        </svg>
                    </div>

                </div>
            </div>

            <button type="button" class="button-send-otp">ยืนยัน</button>

        </div>

    </div>

</body>

</html>

@endsection