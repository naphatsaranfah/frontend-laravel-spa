@extends('layout')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />

</head>

<body>

    <div class="container-reserve_time_therapist">
        <p class="text-header-time-therapist">ตารางเวลาเทราปิส</p>

        <div class="flex gap-10 mt-10">
            <img src="./images/me.png " class="rounded-2xl w-56 h-56">
            <div class="flex gap-5 mt-6">
                <p class="label-summarize">ชื่อ-สกุล</p>
                <p class="text-summarize">คุณ นภัสรัญช์ อินเทวา</p>
            </div>
        </div>

        <p class="text-time-therapist">เลือกวันที่</p>

        <div class="mb-4">
            <div class="w-80  mt-5">
                <form>
                    <div class="mb-4">

                        <input
                            class="bg-white  shadow appearance-none border-solid border-2 border-fuchsia-950 rounded-lg  font-bold  w-full py-2 px-3 text-fuchsia-900 leading-tight focus:outline-none focus:shadow-outline"
                            id="date-picker" type="text" placeholder="YYYY-MM-DD" />
                    </div>
                </form>
            </div>
        </div>

        <p class="text-time-therapist">เลือกเวลา</p>
        <!-- <div class="container-grid-select-reserve_time_therapist">
            <button class="btn-select">10.00</button>
            <button class="btn-select">11.30</button>
            <button class="btn-select">12.00</button>
            <button class="btn-select">12.30</button>
            <button class="btn-select">13.00</button>
            <button class="btn-select">13.30</button>
            <button class="btn-select">14.00</button>
            <button class="btn-select">14.30</button>
            <button class="btn-select">15.00</button>
            <button class="btn-select">15.30</button>
            <button class="btn-select">16.00</button>
            <button class="btn-select">16.30</button>
            <button class="btn-select">17.00</button>
            <button class="btn-select">17.30</button>
            <button class="btn-select">18.00</button>
            <button class="btn-select">18.30</button>
        </div> -->


        <div class="radio-group  grid lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-3 gap-10 mt-10">
            <div class="radio">
                <input type="radio" id="ten" name="time-start" value="ten">
                <label for="ten" class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide  font-bold">10.00</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="eleven" name="time-start" value="eleven">
                <label for="eleven"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">11.00</p>
                </label>
            </div>

            <div class="radio">
                <input type="radio" id="twelve" name="time-start" value="twelve">
                <label for="twelve"
                    class="block text-center p-5 bg-white rounded-xl   border-grey border-solid border-2">
                    <p class="tracking-wide   font-bold">12.00</p>
                </label>
            </div>
        </div>


        <div class="container-submit-reserve-time-therapist">
            <a class="button button-submit-reserve-time-therapist" href="/service_address">ยืนยัน</a>
        </div>


    
    </div>


    </div>
</body>


<!-- Link to Flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
// Initialize Flatpickr date picker
flatpickr("#date-picker", {
    dateFormat: "Y-m-d",
    allowInput: true,
    altInput: true,
    altFormat: "F j, Y",
    minDate: "today",
});
</script>



<script>
function redirectToPageSummarize_Reserve() {
    window.location.href = "summarize_reserve.php";
}
</script>


</html>

@endsection