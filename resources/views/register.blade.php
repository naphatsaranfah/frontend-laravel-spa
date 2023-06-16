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

                <div class="relative ">
                    <input type="text" class="input-email " placeholder="อีเมล">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z">
                            </path>
                        </svg>
                    </span>
                </div>


                <div class="relative">
                    <input type="text" class="input-email " placeholder="รหัสผ่าน">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M3.433 17.325 3.079 19.8a1 1 0 0 0 1.131 1.131l2.475-.354C7.06 20.524 8 18 8 18s.472.405.665.466c.412.13.813-.274.948-.684L10 16.01s.577.292.786.335c.266.055.524-.109.707-.293a.988.988 0 0 0 .241-.391L12 14.01s.675.187.906.214c.263.03.519-.104.707-.293l1.138-1.137a5.502 5.502 0 0 0 5.581-1.338 5.507 5.507 0 0 0 0-7.778 5.507 5.507 0 0 0-7.778 0 5.5 5.5 0 0 0-1.338 5.581l-7.501 7.5a.994.994 0 0 0-.282.566zM18.504 5.506a2.919 2.919 0 0 1 0 4.122l-4.122-4.122a2.919 2.919 0 0 1 4.122 0z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="relative">
                    <input type="text" class="input-email " placeholder="อายุ">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="relative">
                    <input type="text" class="input-email " placeholder="เพศ">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z">
                            </path>
                        </svg>
                    </span>
                </div>

                <button class="button-login" onclick="redirectToPageRegister_Next()">ถัดไป</button>

            </div>
        </div>
    </div>

</body>

<script>
function redirectToPageRegister_Next() {
    window.location.href = "register_next.php";
}
</script>


</html>