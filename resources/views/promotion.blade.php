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

    <div class="container-promotion">
        <p class="text-header-promotion">รวมโปรโมชั่น Lirena</p>
        <div class="grid  lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-1 mt-10 gap-5">
            <div class="card-promotion">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                </div>

                <p class="header-text-card-promotion">นวดจับเส้น</p>

                <div class="flex mt-10">
                    <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">แบบเดี่ยว</p>
                </div>

                <div class="flex mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">ระยะเวลา 90 นาที</p>
                </div>

                <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                    <p>฿450</p>
                    <p>.00</p>
                </div>

                <button class="button-select-promotion" onclick="redirectToPageReserve_Promotion()">เลือก</button>
            </div>


            <div class="card-promotion">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                </div>

                <p class="header-text-card-promotion">นวดน้ำมันอโรมา</p>

                <div class="flex mt-10">
                    <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">แบบเดี่ยว</p>
                </div>

                <div class="flex mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">ระยะเวลา 90 นาที</p>
                </div>

                <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                    <p>฿850</p>
                    <p>.00</p>
                </div>

                <button class="button-select-promotion" onclick="redirectToPageReserve_Promotion()">เลือก</button>
            </div>




            <div class="card-promotion">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                </div>


                <p class="header-text-card-promotion">นวดแผนไทย</p>

                <div class="flex mt-10">
                    <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">แบบเดี่ยว</p>
                </div>

                <div class="flex mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">ระยะเวลา 90 นาที</p>
                </div>

                <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                    <p>฿1500</p>
                    <p>.00</p>
                </div>

                <button class="button-select-promotion" onclick="redirectToPageReserve_Promotion()">เลือก</button>
            </div>




            <div class="card-promotion">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                </div>


                <p class="header-text-card-promotion">นวดจับเส้น</p>

                <div class="flex mt-10">
                    <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">แบบเดี่ยว</p>
                </div>

                <div class="flex mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">ระยะเวลา 90 นาที</p>
                </div>

                <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                    <p>฿450</p>
                    <p>.00</p>
                </div>

                <button class="button-select-promotion" onclick="redirectToPageReserve_Promotion()">เลือก</button>
            </div>



            <div class="card-promotion">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                </div>

                <p class="header-text-card-promotion">นวดจับเส้น</p>

                <div class="flex mt-10">
                    <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">แบบเดี่ยว</p>
                </div>

                <div class="flex mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">ระยะเวลา 90 นาที</p>
                </div>

                <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                    <p>฿450</p>
                    <p>.00</p>
                </div>

                <button class="button-select-promotion" onclick="redirectToPageReserve_Promotion()">เลือก</button>
            </div>



            <div class="card-promotion">
                <div class="card-icon-spa-promotion">
                    <svg class="icon-spa-promotion" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path
                            d="m21.88 2.15-1.2.4a13.84 13.84 0 0 1-6.41.64 11.87 11.87 0 0 0-6.68.9A7.23 7.23 0 0 0 3.3 9.5a8.65 8.65 0 0 0 1.47 6.6c-.06.21-.12.42-.17.63A22.6 22.6 0 0 0 4 22h2a30.69 30.69 0 0 1 .59-4.32 9.25 9.25 0 0 0 4.52 1.11 11 11 0 0 0 4.28-.87C23 14.67 22 3.86 22 3.41zm-7.27 13.93c-2.61 1.11-5.73.92-7.48-.45a13.79 13.79 0 0 1 1.21-2.84A10.17 10.17 0 0 1 9.73 11a9 9 0 0 1 1.81-1.42A12 12 0 0 1 16 8V7a11.43 11.43 0 0 0-5.26 1.08 10.28 10.28 0 0 0-4.12 3.65 15.07 15.07 0 0 0-1 1.87 7 7 0 0 1-.38-3.73 5.24 5.24 0 0 1 3.14-4 8.93 8.93 0 0 1 3.82-.84c.62 0 1.23.06 1.87.11a16.2 16.2 0 0 0 6-.35C20 7.55 19.5 14 14.61 16.08z">
                        </path>
                    </svg>
                </div>


                <p class="header-text-card-promotion">นวดจับเส้น</p>

                <div class="flex mt-10">
                    <svg class="fill-gray-800 " xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" style="transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">แบบเดี่ยว</p>
                </div>

                <div class="flex mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
                    </svg>
                    <p class="">ระยะเวลา 90 นาที</p>
                </div>

                <div class="flex text-2xl mt-10 justify-center font-semibold text-fuchsia-950">
                    <p>฿450</p>
                    <p>.00</p>
                </div>

                <button class="button-select-promotion" onclick="redirectToPageReserve_Promotion()">เลือก</button>
            </div>

        </div>
    </div>
</body>


<script>
function redirectToPageReserve_Promotion() {
    window.location.href = "reserve_promotion.php";
}
</script>


</html>

@endsection