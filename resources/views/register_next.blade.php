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
                <p class="lg:text-4xl md:text-3xl sm:text-2xl text-center mt-20 text-fuchsia-950">Register</p>

                <div class="relative mt-5">
                    <input type="text"
                        class="input-register focus:outline-none focus:border-fuchsia-950 focus:ring-2 focus:ring-fuchsia-950"
                        placeholder="Mobile No.">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5026 13.7624C17.7077 12.9777 16.7148 12.9777 15.925 13.7624C15.3222 14.3601 14.7194 14.9577 14.1269 15.5657C13.9648 15.7329 13.8284 15.7681 13.6304 15.6566C13.241 15.4439 12.8252 15.2716 12.4512 15.0391C10.7037 13.9399 9.23995 12.5267 7.94416 10.9369C7.3003 10.147 6.7283 9.30078 6.3279 8.34891C6.24724 8.15678 6.26263 8.02991 6.41883 7.87299C7.02163 7.29072 7.60903 6.69304 8.2023 6.09539C9.02729 5.26451 9.02729 4.29285 8.19716 3.45685C7.72563 2.98091 7.25483 2.51525 6.78403 2.03931C6.29783 1.55312 5.81677 1.06177 5.32544 0.580713C4.53051 -0.194425 3.53758 -0.194426 2.74778 0.58585C2.13985 1.18351 1.55759 1.79585 0.939391 2.38324C0.367393 2.92518 0.0784587 3.58886 0.0175923 4.36325C-0.0784739 5.62458 0.230265 6.81479 0.666596 7.97419C1.55759 10.3744 2.91498 12.5062 4.56058 14.4613C6.78403 17.1049 9.43722 19.1964 12.5421 20.7056C13.9399 21.3839 15.3882 21.9061 16.9627 21.9919C18.0465 22.0527 18.9888 21.7792 19.7434 20.9337C20.2597 20.3565 20.842 19.8293 21.389 19.2778C22.1994 18.4572 22.2045 17.465 21.3993 16.6547C20.4372 15.6867 19.4699 14.7245 18.5026 13.7624Z"
                                fill="#4E2259" />
                        </svg>
                    </span>
                </div>

                <button class="button-login md:mb-10 sm:mb-10">Send</button>

                <div class="relative">
                    <input type="text"
                        class="input-register focus:outline-none focus:border-fuchsia-950 focus:ring-2 focus:ring-fuchsia-950"
                        placeholder="Confirm Password">
                    <span class="icon">
                        <svg width="22" height="26" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.4737 13.6313V26.2629H3.52632V13.6313H22.4737ZM22.4737 11.105H3.52632C2.13684 11.105 1 12.2418 1 13.6313V26.2629C1 27.6523 2.13684 28.7892 3.52632 28.7892H22.4737C23.8632 28.7892 25 27.6523 25 26.2629V13.6313C25 12.2418 23.8632 11.105 22.4737 11.105Z"
                                fill="#4E2259" stroke="#4E2259" />
                            <path
                                d="M12.6844 3.52632C15.4634 3.52632 17.737 5.8 17.737 8.57895V11.1053H7.63178V8.57895C7.63178 5.8 9.90547 3.52632 12.6844 3.52632ZM12.6844 1C8.51599 1 5.10547 4.41053 5.10547 8.57895V13.6316H20.2634V8.57895C20.2634 4.41053 16.8528 1 12.6844 1Z"
                                fill="#4E2259" stroke="#4E2259" />
                            <path
                                d="M10.4727 18.0527C10.4727 18.7227 10.7388 19.3653 11.2126 19.8391C11.6864 20.3128 12.329 20.579 12.999 20.579C13.669 20.579 14.3116 20.3128 14.7853 19.8391C15.2591 19.3653 15.5253 18.7227 15.5253 18.0527C15.5253 17.3827 15.2591 16.7401 14.7853 16.2663C14.3116 15.7925 13.669 15.5264 12.999 15.5264C12.329 15.5264 11.6864 15.7925 11.2126 16.2663C10.7388 16.7401 10.4727 17.3827 10.4727 18.0527Z"
                                fill="#B8ACDD" />
                            <path
                                d="M12.9995 24.3683C12.3047 24.3683 11.7363 23.7998 11.7363 23.1051V18.6841C11.7363 17.9893 12.3047 17.4209 12.9995 17.4209C13.6942 17.4209 14.2626 17.9893 14.2626 18.6841V23.1051C14.2626 23.7998 13.6942 24.3683 12.9995 24.3683Z"
                                fill="#B8ACDD" />
                        </svg>
                    </span>
                </div>

                <button class="button-login  md:mb-10 sm:mb-10" data-modal-toggle="default-modal">Next</button>


                <div id="default-modal" data-modal-show="false" aria-hidden="true"
                    class="hidden lg:mt-5 md:mt-5 sm:mt-40  overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                    <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
                        <div class="bg-white rounded-lg shadow-xl relative p-10">
                            <div class="flex justify-center">
                                <svg width="100" height="100" viewBox="0 0 134 133" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="67" cy="66.5" rx="67" ry="66.5" fill="#E4DAE7" />
                                    <path
                                        d="M46.9135 61.5038L61.4729 81.6701L46.9135 61.5038ZM46.9135 61.5038H42.339C41.6138 61.497 41 62.2262 41 63.1312L41.2789 64.1647L59.186 91.6587C60.1901 93.1918 62.0307 93.4485 63.3137 92.2328L63.7604 91.6587L95.7247 42.6543C96.171 41.9384 96.0592 40.9118 95.5014 40.3512L94.6646 40H90.0902C89.1976 40 88.3611 40.493 87.8032 41.3507L61.4729 81.677M46.9135 61.5038C47.806 61.5038 48.6426 62.0036 49.2004 62.8545L46.9135 61.5038Z"
                                        fill="#4E2259" />
                                    <path
                                        d="M62.3288 80.5043L50.4194 62.3825L49.12 63.5923L61.0294 81.7144L62.3288 80.5043L50.4194 62.3825L49.12 63.5923L61.0294 81.7144L62.3288 80.5043ZM46.9547 62.3304L61.0839 81.7535L62.3288 80.4656L48.1457 61.0425L46.9547 62.3304ZM47.5505 60.7109H43.1114C41.9746 60.7044 41 61.8427 41 63.2477V63.4167L41.3251 64.568L41.379 64.7243L58.8101 91.3348C59.568 92.4276 60.5964 93 61.6791 93C62.4911 93 63.3032 92.6875 63.9528 92.05L64.0068 92.0113L64.4942 91.4193L64.5481 91.3738L95.567 44.1372L96 42.5564C96 41.8019 95.7293 41.0475 95.188 40.5466L95.0796 40.4424L94.1592 40.0521L93.997 40H89.4495C88.3127 40 87.2843 40.6116 86.5806 41.6719L61.0294 80.511L61.1667 81.6429L62.3288 81.7208L87.8255 42.8817C88.2045 42.2897 88.7999 41.9514 89.4495 41.9514H93.7263L94.4299 42.2312L94.7006 41.3139L94.1592 42.0816L94.376 42.5564L94.2676 42.9271L63.3031 90.0729L62.8702 90.5932L63.4654 91.2827L62.9785 90.515L61.6791 91.0486C61.0837 91.0486 60.4885 90.7296 60.1096 90.1247L42.7868 63.7746L42.5701 62.9355L41.812 63.254L42.624 63.2607L43.1114 62.6623H47.5505V60.7109ZM47.5505 61.6866V62.6623C48.2001 62.6623 48.7414 63.0069 49.1745 63.5923L49.7697 62.9876L50.1488 62.1094L47.9295 60.8085L47.5505 61.6866L47.2254 62.5648L49.4452 63.8658L50.4194 62.3825C49.7157 61.3288 48.6873 60.7109 47.5505 60.7109L47.2254 62.5648L47.5505 61.6866Z"
                                        fill="#4E2259" />
                                </svg>
                            </div>

                            <p class="font-bold text-xl text-fuchsia-950 text-center mt-5">Registration Successful !
                            </p>
                            <div class="flex justify-center mt-10">
                                <a class="button bg-fuchsia-950 px-20 py-3 text-white rounded-xl cursor-pointer "
                                    href="/login">ถัดไป</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="bg-fuchsia-950 p-6 absolute bottom-0 w-full">
        </div>
    </div>

</body>

<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>


</html>