<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    @vite('resources/css/app.css')

</head>

<body>


    <div class="container-login">
        <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-1">
            <div class="hidden  lg:block ">
                <image src="./images/loginlogin.png" class="w-full " />
            </div>

            <div class="container-text-login">
                <p class="header-login">สมัครสมาชิก Lirena</p>
                <div class="relative">
                    <input type="text" class="input-email" placeholder="ยืนยันเบอร์โทร">
                    
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z">
                            </path>
                        </svg>
                    </span>
                </div>

                <button class="button-send_password">ยืนยัน</button>


                <div class="relative">
                    <input type="text" class="input-email " placeholder="รหัส sms">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M3.433 17.325 3.079 19.8a1 1 0 0 0 1.131 1.131l2.475-.354C7.06 20.524 8 18 8 18s.472.405.665.466c.412.13.813-.274.948-.684L10 16.01s.577.292.786.335c.266.055.524-.109.707-.293a.988.988 0 0 0 .241-.391L12 14.01s.675.187.906.214c.263.03.519-.104.707-.293l1.138-1.137a5.502 5.502 0 0 0 5.581-1.338 5.507 5.507 0 0 0 0-7.778 5.507 5.507 0 0 0-7.778 0 5.5 5.5 0 0 0-1.338 5.581l-7.501 7.5a.994.994 0 0 0-.282.566zM18.504 5.506a2.919 2.919 0 0 1 0 4.122l-4.122-4.122a2.919 2.919 0 0 1 4.122 0z">
                            </path>
                        </svg>
                    </span>
                </div>

                <button class="button-login" onclick="redirectToPageLogin()">เข้าสู่ระบบ</button>

            </div>
        </div>
    </div>

</body>
<script>
function redirectToPageLogin() {
    window.location.href = "login.php";
}
</script>

</html>