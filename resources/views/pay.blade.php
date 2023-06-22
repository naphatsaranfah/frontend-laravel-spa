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

    <div class="">
        <section class="max-w-[900px] mx-auto px-8 pt-20">
            <h1 class="text-lg text-fuchsia-950 mb-8">
                ชำระเงิน
            </h1>

            <div class="shadow-lg rounded-xl p-10 ">

                <div class="card-select-pay" onclick="openSelectVisa()">
                    <div class="flex items-center gap-5 justify-start">

                        <img src="./images/visa.png" class="">

                        <label class="mt-px cursor-pointer select-none  text-fuchsia-950 font-semibold" for="html">
                            บัตรเครดิตหรือเดบิต
                        </label>
                    </div>
                </div>

                <div id="myCardVisa" class="card-visa hide-all">
                    <label class="text-start block text-sm font-bold mb-2 text-fuchsia-950 " for="username">
                        หมายเลขบัตร
                    </label>
                    <div class="shadow-lggrid grid grid-cols-2 mb-5 gap-5">

                        <input
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="" value="">

                        <input
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="" value="">
                    </div>

                    <div>
                        <label class="text-start block text-sm font-bold mb-2 text-fuchsia-950 mt-10" for="username">
                            ชื่อผู้ถือบัตร
                        </label>
                        <input
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="" value="">
                    </div>

                    <label class="text-start block text-sm font-bold mb-2 text-fuchsia-950 mt-10" for="username">
                        วันหมดอายุ
                    </label>

                    <div class="grid grid-cols-3 gap-5">
                        <input
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="วัน" value="">

                        <input
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="เดือน" value="">

                        <input
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="ปี" value="">
                    </div>


                    <div>
                        <label class="text-start block text-sm font-bold mb-2 text-fuchsia-950 mt-10" for="username">
                            รหัสหลังบัตร
                        </label>
                        <input
                            class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" type="text" placeholder="" value="">
                    </div>

                    <div class="flex items-center mb-4 mt-10">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="accent-fuchsia-950 w-4 h-4 text-fuchsia-950 bg-gray-100 border-gray-300 rounded focus:ring-fuchsia-950">
                        <label for="default-checkbox"
                            class="ml-2 text-sm font-medium text-fuchsia-950 dark:text-gray-300">
                            บันทึกข้อมูลสำหรับการซื้อครั้งต่อไป</label>
                    </div>
                </div>


                <div class="card-select-pay " onclick="openSelectPromptPay()">
                    <div class="flex items-center gap-5 justify-start">

                        <img src="./images/prompt_pay.png" class="w-10 h-10">
                        <label class="mt-px cursor-pointer select-none  text-fuchsia-950 font-semibold" for="html">
                            PromptPay (อัพเดทสถานะทันทีหลังชำระเงินสำเร็จ)
                        </label>
                    </div>

                </div>

                <div id="myCardPromptPay" class="card-promptpay hide-all">
                    <p class="block text-lg font-bold mb-2 text-fuchsia-950 mt-10" for="username">
                        สแกน QR Code
                    </p>
                    <img src="./images/qr-code-prompt-pay.png" class="w-full px-56 mt-10">
                </div>
                </button>

                <div class="card-select-pay" onclick="openSelectBank()">
                    <div class="flex items-center gap-5 justify-start">

                        <img src="./images/all_bank.png" class="w-10 h-10">
                        <label class="mt-px cursor-pointer select-none  text-fuchsia-950 font-semibold" for="html">
                            โอนผ่านบัญชีธนาคาร
                        </label>
                    </div>
                </div>

                <div id="myCardBank" class="card-bank hide-all">
                    <div class="p-5 shadow-lg rounded-lg mt-5">
                        <div class="grid grid-cols-3">
                            <img src="./images/ktb.png" class="w-10 h-10 mt-5">
                            <div class="leading-8">
                                <p class="text-fuchsia-950">เลขที่บัญชี 0987654321</p>
                                <p class="text-fuchsia-950">ชื่อบัญชี บริษัทสปา</p>
                            </div>

                            <button class="bg-pink-400 text-white cursor-pointer mx-10 my-4 px-10 rounded-lg"
                                onclick="copyToClipboardSCB()">คัดลอก</button>
                        </div>
                    </div>

                    <div class="p-5 shadow-lg rounded-lg mt-5">
                        <div class="grid grid-cols-3">
                            <img src="./images/kt2.png" class="w-10  h-10 mt-5">
                            <div class="leading-8">
                                <p class="text-fuchsia-950">เลขที่บัญชี 123-456-7890</p>
                                <p class="text-fuchsia-950">ชื่อบัญชี บริษัทสปา</p>
                            </div>

                            <button class="bg-pink-400 text-white cursor-pointer mx-10 my-4 px-10 rounded-lg"
                                onclick="copyToClipboardKTB()">คัดลอก</button>
                        </div>
                    </div>

                    <div class="text-fuchsia-950 font-semibold mt-10">อัพโหลดสลิปยืนยันการโอนเงิน</div>
                    <p> (ระบบจะทำการอัพเดทสถานะภายใน 1-24 ชั่วโมง หลังจากได้รับเอกสารยืนยันการชำระ)</p>
                </div>

                <div class="flex justify-end">
                    <button class="mt-10 bg-fuchsia-950 px-20 py-3 lg:w-60 sm:w-full text-white rounded-xl cursor-pointer"
                        data-modal-toggle="default-modal">
                        ยืนยัน
                    </button>
                </div>


                <div id="default-modal" data-modal-show="false" aria-hidden="true"
                    class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
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

                            <p class="font-bold text-xl text-fuchsia-950 text-center mt-5">สำเร็จ
                                รอการอัพเดตสถานะการชำระเงิน
                            </p>
                            <div class="flex justify-center mt-10">
                                <a class="button bg-fuchsia-950 px-20 py-3 text-white rounded-xl cursor-pointer "
                                href="/all_my_reserve">ถัดไป</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>


<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>


<script>
function openSelectVisa() {
    var x = document.getElementById("myCardVisa");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function openSelectPromptPay() {
    var x = document.getElementById("myCardPromptPay");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function openSelectBank() {
    var x = document.getElementById("myCardBank");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>



<script>
function copyToClipboardKTB() {
    const textToCopyBankNumber_KTB = "12345678";

    navigator.clipboard.writeText(textToCopyBankNumber_KTB)
        .then(() => {
            alert("Text copied to clipboard!");
        })
        .catch((error) => {
            alert(`Error copying text: ${error}`);
        });
}
</script>



<script>
function copyToClipboardSCB() {
    const textToCopyBankNumber_SCB = "0987654321";

    navigator.clipboard.writeText(textToCopyBankNumber_SCB)
        .then(() => {
            alert("Text copied to clipboard!");
        })
        .catch((error) => {
            alert(`Error copying text: ${error}`);
        });
}
</script>


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
$(document).ready(function() {

    $(".hide-all").hide();

});
</script>


<script>
function redirectToPageAll_My_Reserve() {
    window.location.href = "all_my_reserve.php";
}
</script>


</html>


@endsection