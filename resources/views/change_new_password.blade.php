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


    <div class="container-change-password ">
        <p class="header-change-password">ลืมรหัสผ่าน</p>

        <div class="mt-5">
            <input type="text" class="input-change-password"  placeholder="อีเมล">

            <input type="text" class="input-confirm-change-password" placeholder="ยืนยันรหัสผ่าน">
        </div>


        <div class="">
        <button type="button" class="button-send_password" onclick="redirectToPageLogin()">บันทึกรหัสผ่าน</button>
        </div>
    </div>
</body>

<script>

function redirectToPageLogin() {
    window.location.href = "login.php";
}
</script>

</html>

@endsection