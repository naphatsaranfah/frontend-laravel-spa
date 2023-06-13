@extends('layout')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container-join-up">
        <p class="header-join-up">สมัครเป็นเทอราปิสกับเรา ฟรี ไม่มีค่าใช้จ่าย</p>
        <button class="button-booking-aroma-contant" onclick="redirectToPageScan_QR_Code()">
            สมัครตอนนี้
        </button>

        <div class="bg-[url('./images/join_up.jpg')] w-full px-20 pt-20 pb-0 rounded-t-2xl bg-cover bg-center mt-10">
            <div class="bg-fuchsia-100 p-5 rounded-t-xl">
                <p class="text-join-up">สิ่งที่คุณได้รับหากร่วมงานกับเรา</p>
            </div>
        </div>

        <div class="grid-aroma-oil-benefit">

            <div class="card-join-up">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-join-up" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                    <p class="mt-10">รายได้ดี</p>
                    <p>สูงสุดถึง 1000฿ ต่อวัน</p>
                </div>
            </div>

            <div class="card-join-up">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-join-up" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                    <p class="mt-10">รับเงินไว</p>
                    <p>ภายใน 3 ชั่วโมงหลังจบงาน</p>
                </div>
            </div>


            <div class="card-join-up">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-join-up" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                    <p class="mt-10">มียูนิฟอร์มให้</p>
                    <p>ยูนิฟอร์มจำนวน 3 ชุด</p>
                </div>
            </div>
        </div>

        <div class="flex justify-center ">
            <button class="button-join-up" onclick="redirectToPageScan_QR_Code()">สมัครเป็นเทอราปิส</button>
        </div>

        <div class="card-join-up-add-line">
            <div class="flex gap-5 justify-center">
                <div class="text-join-up-add-line">
                    <p>สมัครเป็นเทอราปิส</p>
                    <p>คลิกเพิ่มเพื่อนทางไลน์</p>
                </div>
                <img src="./images/line.png" class="w-20 h-20">

            </div>
        </div>

        <div class="grid grid-cols-2 gap-5 mt-10">
            <img src="./images/lelavadee.jpg" class="rounded-2xl">
            <img src="./images/lelavadee.jpg" class="rounded-2xl">


        </div>

        <div class="flex justify-center">
            <button class="button-join-up-bottom" onclick="redirectToPageScan_QR_Code()">สมัครเป็นเทอราปิส</button>
        </div>
    </div>

</body>

<script>
function redirectToPageScan_QR_Code() {
    window.location.href = "scan_qr_code.php";
}
</script>

</html>

@endsection