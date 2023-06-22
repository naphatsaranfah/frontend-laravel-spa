<!-- 
@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container-reserve_spa">
        <p class="text-select-kind-spa">เลือกประเภทบริการ</p>

        <div class="container-button-select-kind-spa">
            <button class="btn-select-kind-spa">นวดน้ำมันอโรมา</button>
            <button class="btn-select-kind-spa">นวดแผนไทย</button>
            <button class="btn-select-kind-spa">นวดศรีษะหลังไหล่เท้า</button>
            <button class="btn-select-kind-spa">นวดแก้ออฟฟิศซินโดม</button>
            <button class="btn-select-kind-spa">นวดจับเส้น</button>
            <button class="btn-select-kind-spa">นวดกดจุด</button>
        </div>

        <p class="header-reserve-spa-company-select">เลือกจำนวนผู้เข้ารับบริการ</p>
        <div class="container-button-one-two">
            <button class="btn-select-spa_one-two">นวดแบบเดี่ยว</button>
            <button class="btn-select-spa_one-two">นวดแบบคู่</button>
        </div>


        <p class="text-period">ระยะเวลา</p>
        <div class="container-button-period">
            <button class="btn-select-speriod">60 นาที</button>
            <button class="btn-select-speriod">90 นาที</button>
            <button class="btn-select-speriod">120 นาที</button>
        </div>


        <p class="text-terrapits">เลือกเทอราปิส</p>

        <div class="container-button-terrapits">
            <button class="btn-select-kind-terrapits">ผู้หญิงเท่านั้น</button>
            <button class="btn-select-kind-terrapits">ผู้ชายเท่านั้น</button>
            <button class="btn-select-kind-terrapits">ผู้หญิงหรือผู้ชายก็ได้</button>
        </div>


        <div class="container-button-terrapits">
            <button class="btn-select-kind-terrapits">บริษัทเลือกให้</button>
            <button class="btn-select-kind-terrapits">เลือกด้วยตัวเอง</button>
        </div>

        <p class="text-select-date-time">วันที่ต้องการรับบริการ</p>


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

</body>



<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>

flatpickr("#date-picker", {
    dateFormat: "Y-m-d",
    allowInput: true,
    altInput: true,
    altFormat: "F j, Y",
    minDate: "today",
});
</script>


</html>


@endsection -->