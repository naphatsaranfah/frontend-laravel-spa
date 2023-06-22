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
    <div class="bg-fuchsia-950 p-6 absolute top-0 w-full">
        </div>

        <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-1">
            <div class="hidden lg:block ">
                <image src="./images/login_resize.png" class="w-full h-full" />
            </div>

            <div class="lg:px-40  md:px-40  sm:px-10">
                <p class="lg:text-4xl md:text-3xl sm:text-2xl text-center mt-20 text-fuchsia-950">Login Account</p>

                <div class="relative mt-5">
                    <input type="text"
                        class="input-login focus:outline-none focus:border-fuchsia-950 focus:ring-2 focus:ring-fuchsia-950"
                        placeholder="Email">
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
                    <input type="text"
                        class="input-login focus:outline-none focus:border-fuchsia-950 focus:ring-2 focus:ring-fuchsia-950"
                        placeholder="Password">
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="transform: ;msFilter:;">
                            <path
                                d="M3.433 17.325 3.079 19.8a1 1 0 0 0 1.131 1.131l2.475-.354C7.06 20.524 8 18 8 18s.472.405.665.466c.412.13.813-.274.948-.684L10 16.01s.577.292.786.335c.266.055.524-.109.707-.293a.988.988 0 0 0 .241-.391L12 14.01s.675.187.906.214c.263.03.519-.104.707-.293l1.138-1.137a5.502 5.502 0 0 0 5.581-1.338 5.507 5.507 0 0 0 0-7.778 5.507 5.507 0 0 0-7.778 0 5.5 5.5 0 0 0-1.338 5.581l-7.501 7.5a.994.994 0 0 0-.282.566zM18.504 5.506a2.919 2.919 0 0 1 0 4.122l-4.122-4.122a2.919 2.919 0 0 1 4.122 0z">
                            </path>
                        </svg>
                    </span>
                </div>

                <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
                    <div class="flex gap-5">
                        <input type="checkbox" class=" rounded h-5 w-5 mt-10 accent-fuchsia-950 border-fuchsia-950" />
                        <p class="text-fuchsia-950 mt-10">Keep me singned in</p>
                    </div>
                    <a class="forgot-password" href="/forgot_password">Already a member ?</a>
                </div>

                <div class="flex justify-center">
                    <a class="button-login text-center" href="/home">Login</a>
                </div>

                <div class="mt-5">
                    <p class="text-center text-fuchsia-950 font-bold text-lg">or</p>
                    <div class="grid grid-cols-3 ">
                        <div class="h-1 bg-fuchsia-950"></div>
                        <p class="text-center text-fuchsia-950 font-bold  text-lg">login with</p>
                        <div class="h-1 bg-fuchsia-950"></div>
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 md:grid-cols-2  sm:grid-cols-1 lg:gap-10 md:gap-10 sm:gap-0 ">
                    <button class="button-line flex gap-2">
                        <svg class="fill-white " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="transform: ;msFilter:;">
                            <path
                                d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                            </path>
                        </svg>
                        <p>Facebook</p>
                    </button>

                    <button class="button-line flex gap-2">
                        <svg class="fill-white" width="24" height="24" viewBox="0 0 34 33"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 0C7.62446 0 0 6.29515 0 14.0387C0 20.9838 6.05579 26.759 14.2275 27.8546C14.7838 27.9753 15.4952 28.2632 15.6867 28.746C15.86 29.1824 15.8144 29.8602 15.7597 30.3058C15.7597 30.3058 15.5864 31.5314 15.5408 31.7914C15.4678 32.2278 15.1851 33.537 17 32.757C18.8149 31.9771 26.7859 26.8333 30.3519 22.6551C32.8144 19.9068 34 17.1399 34 14.0387C34 6.29515 26.3755 0 17 0ZM7.00429 9.95339C7.49678 9.95339 7.87983 10.3434 7.87983 10.8447V16.7871H10.3605C10.853 16.7871 11.2361 17.2513 11.2361 17.7527C11.2361 18.2541 10.853 18.644 10.3605 18.644H7.00429C6.5118 18.644 6.05579 18.2541 6.05579 17.7527V10.8447C6.05579 10.3434 6.5118 9.95339 7.00429 9.95339ZM12.9871 9.95339C13.4796 9.95339 13.8627 10.3434 13.8627 10.8447V17.7527C13.8627 18.2541 13.4796 18.644 12.9871 18.644C12.4946 18.644 12.0386 18.2541 12.0386 17.7527V10.8447C12.0386 10.3434 12.4946 9.95339 12.9871 9.95339ZM15.7597 9.95339C15.8509 9.92553 15.9603 9.95339 16.0515 9.95339C16.3251 9.95339 16.544 10.0927 16.7082 10.3248L20.2103 15.0786V10.8447C20.2103 10.3434 20.5933 9.95339 21.0858 9.95339C21.5783 9.95339 21.9614 10.3434 21.9614 10.8447V17.7527C21.9614 18.1426 21.7425 18.449 21.3777 18.5697C21.2865 18.5976 21.177 18.644 21.0858 18.644C20.8122 18.644 20.5204 18.5048 20.3562 18.2726L16.927 13.4445V17.7527C16.927 18.2541 16.544 18.644 16.0515 18.644C15.559 18.644 15.103 18.2541 15.103 17.7527V10.8447C15.103 10.4548 15.3948 10.0741 15.7597 9.95339ZM24.0773 9.95339H27.4335C27.926 9.95339 28.309 10.3434 28.309 10.8447C28.309 11.3461 27.926 11.7361 27.4335 11.7361H24.9528V13.3702H27.4335C27.926 13.3702 28.309 13.7602 28.309 14.2616C28.309 14.763 27.926 15.2272 27.4335 15.2272H24.9528V16.7871H27.4335C27.926 16.7871 28.309 17.2513 28.309 17.7527C28.309 18.2541 27.926 18.644 27.4335 18.644H24.0773C23.5848 18.644 23.2017 18.2541 23.2017 17.7527V10.8447C23.2017 10.3434 23.5848 9.95339 24.0773 9.95339Z"
                                fill="white" />
                        </svg>
                        <p>Line</p>
                    </button>
                </div>

                <a class="flex justify-end mt-5 gap-2" href="/register">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-fuchsia-950" width="28" height="30"
                        viewBox="0 0 24 24">
                        <path d="M7 6v12l10-6z"></path>
                    </svg>
                    <p class="text-fuchsia-950 font-bold text-lg mb-10">Register now !</p>
                </a>

            </div>
        </div>
        <div class="bg-fuchsia-950 p-6 absolute bottom-0 w-full">
        </div>
    </div>

</body>

</html>