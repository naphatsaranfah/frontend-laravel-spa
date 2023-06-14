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


    <div class="container-summarize-reserve">
        <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-8">
            <div>
                <p class="header-summarize">สรุปการจอง</p>
                <div class="card-user-information ">
                    <div class=" gap-2 grid grid-cols-2 ">
                        <p class="label-summarize">ชื่อผู้จอง</p>
                        <p class="text-summarize">คุณ นภัสรัญช์ อินเทวา</p>
                    </div>

                    <div class="gap-2 grid grid-cols-2 ">
                        <p class="label-summarize">ประเภทการนวด</p>
                        <p class="text-summarize">นวดแผนไทย</p>
                    </div>

                    <div class="gap-2 grid grid-cols-2">
                        <p class="label-summarize">ระยะเวลา</p>
                        <p class="text-summarize">60 นาที</p>
                    </div>

                    <div class="gap-2 grid grid-cols-2">
                        <p class="label-summarize">พนักงานนวด</p>
                        <p class="text-summarize">คุณ นภัสรัญช์ อินเทวา</p>
                    </div>

                    <div class="gap-2 grid grid-cols-2">
                        <p class="label-summarize">วันที่จอง</p>
                        <p class="text-summarize">12/10/2565</p>
                        <p class="label-summarize">เวลาที่จอง</p>
                        <p class="text-summarize">10.00 น.</p>
                    </div>

                    <div class="gap-2 grid grid-cols-2">
                        <p class="label-summarize">ที่อยู่</p>
                        <p class="text-summarize">เลขที่ 885/871 ถนนกรุงเทพ-นนทบุรี
                        </p>
                    </div>

                    <div class="gap-2 grid grid-cols-2">
                        <p class="label-summarize">เบอร์โทร</p>
                        <p class="text-summarize">062-2222222</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="header-summarize">ราคาที่ต้องชำระ</p>
                <div class="card-user-information">
                    <div class="gap-2 grid grid-cols-2">
                        <p class="label-summarize">นวดแผนไทยแบบเดี่ยว</p>
                        <p class="label-summarize-price">900 ฿</p>
                    </div>

                    <div class="gap-2 grid grid-cols-2">
                        <p class="label-summarize">โปรโมชั่น</p>
                        <p class="label-summarize-price">900 ฿</p>
                    </div>

                    <div class="gap-2 grid grid-cols-2">
                        <p class="label-summarize">ส่วนลด</p>
                        <p class="label-summarize-price">900 ฿</p>
                    </div>


                    <div class="gap-2 grid grid-cols-2">
                        <p class="label-summarize">vat</p>
                        <p class="label-summarize-price">900 ฿</p>
                    </div>


                    <div class="gap-2 grid grid-cols-2">
                        <p class="summarize-pay">ที่ต้องชำระ</p>
                        <p class="label-summarize-price">900 ฿</p>
                    </div>

                    <div class="container-btn-confirm-reserve">
                    <a class="button button-pay" href="/pay">ชำระเงิน</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-grid-summarize-reserve ">
            <input type="text" class="input-email" placeholder="กรอกโค้ดส่วนลด">
            <button class="button-code">ใช้โค้ดส่วนลด</button>
        </div>

    </div>
    </div>


</body>
<script>
function redirectToPagePay() {
    window.location.href = "pay.php";
}
</script>

</html>


@endsection