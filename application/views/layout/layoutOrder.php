<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title></title>
</head>

<style>
    .modal-enter {
        opacity: 0;
        transform: translateY(-50px);
        animation: modal-enter-animation 0.3s ease-in-out forwards;
    }

    .modal-exit {
        opacity: 1;
        transform: translateY(0);
        animation: modal-exit-animation 0.3s ease-in-out forwards;
    }

    @keyframes modal-enter-animation {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes modal-exit-animation {
        from {
            opacity: 1;
            transform: translateY(0);
        }

        to {
            opacity: 0;
            transform: translateY(-50px);
        }
    }
</style>


<body style="overflow: inherit !important; overflow:hidden;">

    <!-- Navbar -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900 mb-8" style="box-shadow:0px -7px 12px 0px;">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="<?= base_url('') ?>" class="flex items-center">
                <img src="<?= base_url('assets/img/dewahoster-logo.png') ?>" class="h-8 mr-3" alt="Flowbite Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <?php if (empty($this->session->userdata('profile'))) { ?>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="text-sm flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li id="loginClient">
                            <a href="https://web.dewahoster.co.id/login" class="login bg-blue-500">
                                <div class="sign-login"><svg viewBox="0 0 14 18" class="w-5 h-5">
                                        <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"></path>
                                    </svg></div>
                                <div class="pl-3 text-login text-sm">Login</div>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php
            } else {
            ?>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="text-sm flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li id="loginClient">
                            <a class="login bg-yellow-500" onclick="logoutLogin(this)">
                                <div class="sign-login"><svg viewBox="0 0 14 18" class="w-5 h-5">
                                        <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"></path>
                                    </svg></div>
                                <div class="pl-3 text-login text-sm md:text-md">Logout</div>
                            </a>
                        </li>
                    </ul>
                </div>
            <?php
            }
            ?>
        </div>
    </nav>
    <!-- End Navbar -->
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 relative">
            <?= $contents ?>
        </div>
    </section>

    <!-- section product offer -->
    <section class="bg-white dark:bg-gray-900 mb-5 mt-5">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                    <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                    </svg>
                    Website Instan
                </a>
                <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Membuat website dengan berbagai kemudahan</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Bebas berkreasi dengan template buatan desainer.</p>
                </a>
            </div>
            <div class="grid md:grid-cols-4 gap-8">
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                        <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                        </svg>
                        Design
                    </a>
                    <h2 class="text-blue-400 dark:text-white/75 text-6xl font-extrabold mb-2">01</h2>
                    <p class="text-lg font-bold text-gray-700 dark:text-white mb-1">Pilih Template.</p>
                    <p class="text-md font-normal text-gray-500 dark:text-gray-400 mb-4">Pilih tema website yang Anda inginkan.</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                        <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                        </svg>
                        Order
                    </a>
                    <h2 class="text-blue-400 dark:text-white/75 text-6xl font-extrabold mb-2">02</h2>
                    <p class="text-lg font-bold text-gray-700 dark:text-white mb-1">Order Website.</p>
                    <p class="text-md font-normal text-gray-500 dark:text-gray-400 mb-4">Order website dan ikuti langkah-langkah pembayarannya.</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                        <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                        </svg>
                        Kustom
                    </a>
                    <h2 class="text-blue-400 dark:text-white/75 text-6xl font-extrabold mb-2">03</h2>
                    <p class="text-lg font-bold text-grey-900 dark:text-white mb-1">Lakukan Kutomisasi.</p>
                    <p class="text-md font-normal text-gray-500 dark:text-gray-400 mb-4">Drag & drop untuk atur tata letak, gambar, dan teks..</p>
                </div>
                <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                        <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                        </svg>
                        Online
                    </a>
                    <h2 class="text-blue-400 dark:text-white/75 text-6xl font-extrabold mb-2">04</h2>
                    <p class="text-lg font-bold text-grey-900 dark:text-white mb-1">Website Online.</p>
                    <p class="text-md font-normal text-gray-500 dark:text-gray-400 mb-4">Selamat, website Anda telah aktif! Mulai kelola website Anda.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section product offer -->

    <!-- Footer -->
    <footer class="bg-center bg-no-repeat bg-blue-900 bg-blend-multiply p-8" id="footer-bg">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 text-white mb-10">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="<?= base_url('assets/img/logo-dewahoster2.png') ?>" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                    </a>
                    <br>
                    <p>Untuk Anda & pelanggan lain, kami berkomitmen menyediakan layanan Go Online berkualitas tinggi.
                        <br> <br> Kami telah membantu ribuan pelanggan dari berbagai sektor. Personal hingga Corporate.
                        <br><br>Layanan: Nama Domain, Cloud Hosting, Unlimited Hosting, Hosting Sekolah, Wordpress Hosting.
                    </p>
                </div>
                <div>
                    <h2 class="mb-8 text-lg font-semibold text-white dark:text-white">Client Link</h2>
                    <ul class="text-blue-100 dark:text-gray-400 font-normal">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Client Area</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Knowledgebase</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Program Affiliasi</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Layanan Migrasi</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Kolaborasi/Kerjasama</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-8 text-lg font-semibold text-white dark:text-white">Services</h2>
                    <ul class="text-blue-100 dark:text-gray-400 font-normal">
                        <li class="mb-4">
                            <a href="https://flowbite.com/" class="hover:underline">Domain</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Hosting Unlimited</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Hosting Sekolah</a>
                        </li>
                        <li class="mb-4">
                            <a href="https://tailwindcss.com/" class="hover:underline">Hosting Wordpress</a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" class="hover:underline">Cloud Hosting</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-8 text-lg font-semibold text-white dark:text-white">Let's Connect</h2>
                    <ul class="text-blue-100 dark:text-gray-400 font-normal">
                        <li class="mb-4">
                            <span>Email: <a href="" class="hover:underline" style="color: #8FA6D3;">sales@dewahoster.com</a></span>
                        </li>
                        <li class="mb-4">
                            <span>Whatsapp: <a href="" class="hover:underline" style="color: #8FA6D3;">+(62) 851-5663-5959</a></span>
                        </li>
                        <li>
                            <span>Address: <a href="" class="hover:underline" style="color: #8FA6D3;">Jl. Ancar Raya, Kota Mataram.</a></span>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-5 border-gray-500 sm:mx-auto dark:border-gray-700 lg:mt-8 mb-3" style="width: 85%;" />
            <div class="sm:flex sm:items-center sm:justify-between mx-auto" style="width: 85%;">
                <ul class="flex flex-wrap items-center mt-3 text-sm font-thin text-gray-400 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Service Level Agreement</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Terms of Service</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Police</a>
                    </li>
                </ul>
                <div class="flex mt-4 space-x-5 sm:justify-center sm:mt-0">
                    <span class="text-sm text-gray-400 sm:text-center dark:text-gray-400">CV Data Digital Indonesia © Copyright 2023 Dewa Hoster | All Rights Reserved
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- <div modal-backdrop="" class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div> -->
</body>
<script src="<?= base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/index.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    document.addEventListener("DOMContentLoaded", function(e) {
        var radio1 = document.getElementById("default-radio-1");
        var radio2 = document.getElementById("default-radio-2");
        var loginForm = document.querySelectorAll("#loginForm input");
        var registerForm = document.querySelectorAll("#registerForm input");
        registerForm.forEach(function(input) {
            input.setAttribute("disabled", "disabled");
        });
        radio1.addEventListener("change", function() {
            if (radio1.checked) {
                registerForm.forEach(function(input) {
                    input.setAttribute("disabled", "disabled");
                });
                loginForm.forEach(function(input) {
                    input.removeAttribute("disabled");
                });
                // Menonaktifkan elemen-elemen dalam registerForm
            }
        });

        radio2.addEventListener("change", function() {
            if (radio2.checked) {
                registerForm.forEach(function(input) {
                    input.removeAttribute("disabled");
                });
                loginForm.forEach(function(input) {
                    input.setAttribute("disabled", "disabled");
                });
            }
        });
    });

    function showWelcomePopup() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Silahkan pilih template terlebih dahulu!',
        }).then(function() {
            window.location = '<?= base_url() ?>';
        });
    }
    <?= $this->session->flashdata('firstTemplate'); ?>

    function loadingButton(element) {
        // const loading = document.getElementById('google-sign-in');
        element.innerHTML = ` <svg aria-hidden="true" role="status" class="inline w- h-5 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
    </svg>`;
    }

    function validateForm() {
        // Lakukan validasi formulir di sini, misalnya:
        var email = $("#emailLogin").val();
        var password = $("#passwordLogin").val();

        if (email === "" || password === "") {
            // Tampilkan pesan kesalahan atau lakukan tindakan lain
            alert("Silakan isi semua kolom");
            return false;
        }

        // Lanjutkan dengan validasi lain yang Anda butuhkan
        return true;
    }
    <?php if (!$this->session->userdata('profile')) {
    ?>
        document.getElementById('login_google').addEventListener('click', function(e) {
            e.preventDefault();
            // Mengambil nilai input email dan password


            var email = $("#emailLogin").val();
            var password = $("#passwordLogin").val();

            if (!validateForm()) {
                // Form tidak valid, berhenti di sini atau tampilkan pesan kesalahan
                return;
            }
            var loginGoogleElement = document.getElementById('login_google');
            var loginPanel = document.getElementById('loginPanel');
            const loginClientPanel = document.getElementById('loginClient');
            const buttonCheckout = document.getElementById('checkout');

            buttonCheckout.removeAttribute('disabled');
            buttonCheckout.nextElementSibling.remove();
            loadingButton(loginGoogleElement);
            // Melakukan pengiriman data ke fungsi login menggunakan AJAX
            $.ajax({
                type: "POST",
                url: '<?= base_url('instan/doLogin') ?>', // Ganti dengan URL Anda
                data: {
                    email: email,
                    password: password,
                },
                dataType: 'json',
                success: function(response) {
                    // Callback yang akan dijalankan setelah respons selesai
                    loginGoogleElement.innerHTML = 'Login';
                    if (response['result'] !== 'error') {
                        loginClientPanel.innerHTML = `<a class="login bg-yellow-500" onclick="logoutLogin(this)">
                                <div class="sign-login"><svg viewBox="0 0 14 18" class="w-5 h-5">
                                        <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"></path>
                                    </svg></div>
                                <div class="pl-3 text-login text-sm md:text-md">Logout</div>
                            </a>`;

                        loginForm.innerHTML = `
                        <p class="text-md text-gray-500 font-normal">` + response['fullname'] + `</p>
                            <p class="text-md text-gray-500 font-normal">` + response['address'] + `</p>
                            <p class="text-md text-gray-500 font-normal">` + response['city'] + `,` + response['state'] + `</p>
                            <p class="text-md text-gray-500 font-normal">` + response['country'] + `</p>
                            <p class="text-md text-gray-500 font-normal">` + response['phonenumber'] + `</p>
                        `;
                        // Respons berhasil, Anda dapat melakukan tindakan sesuai kebutuhan
                    } else {
                        // Respons gagal atau ada kesalahan, tampilkan pesan kesalahan atau lakukan tindakan lain
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response['message'],
                        })
                    }

                },
                error: function(xhr, status, error) {
                    // Penanganan kesalahan AJAX jika diperlukan
                    console.error(xhr, status, error);
                },
            });
        });
    <?php } ?>

    <?php if (!$this->session->userdata('getUrl')) {
    ?>
        document.addEventListener('DOMContentLoaded', function(e) {

            // Memanggil fungsi loginGoogle melalui AJAX
            $.ajax({
                url: "<?php echo base_url('instan/loginGoogle'); ?>", // Ganti dengan URL yang sesuai
                type: 'POST',
                dataType: 'json',
                success: function(response) {

                    console.log(response['status']);
                    // Callback yang akan dijalankan setelah respons selesai
                    if (response.status === 1) {
                        var googleSignInLink = document.getElementById('google-sign-in');
                        googleSignInLink.href = response.data;
                    } else {
                        console.log(response);
                    }
                },
                error: function(xhr, status, error) {
                    // Penanganan kesalahan AJAX jika diperlukan
                    console.error(xhr, status, error);
                }
            });
        });
    <?php
    } ?>

    function logoutLogin(element) {
        $.ajax({
            url: "<?php echo base_url('instan/logoutLogin'); ?>", // Ganti dengan URL yang sesuai
            type: 'POST',
            success: function(response) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Logout',
                    width: '200px',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    location.reload();
                });
            },
            error: function(xhr, status, error) {
                // Penanganan kesalahan AJAX jika diperlukan
                console.error(xhr, status, error);
            }
        });
    }

    // Menambahkan event listener untuk input pencarian
    btnDaftarDomain.forEach(function(btnDomain) {
        btnDomain.addEventListener('click', function() {
            event.preventDefault();

            const domainOrder = document.querySelector('.items-order-domain');
            const searchInputs = btnDomain.parentElement.querySelector('.default-search');
            const searchValue = searchInputs.value;

            if (!searchValue) {
                // Input tidak diisi
                alert('Harap isi nama domain terlebih dahulu.');
                return; // Keluar dari fungsi jika input kosong
            }

            if (domainOrder) {
                hapusOrder(domainOrder);
            }

            loadingDiv.style.display = 'none';
            resultDiv.style.display = 'none';
            resultDivNonValid.style.display = 'none';

            getIdCategory = btnDomain.getAttribute('aria-labelledby');

            if (getIdCategory === "register") {
                loadingButton(btnDomain);
                eppAuth.style.display = 'none';
                if (/\.[a-zA-Z]+$/.test(searchValue)) {
                    loadingDiv.style.display = 'block';
                    $.ajax({
                        type: "POST", // Metode HTTP yang digunakan (POST)
                        url: "<?php echo base_url('api/getDomain'); ?>", // URL controller CI3
                        data: {
                            domain: searchValue,
                            type: getIdCategory
                        }, // Data yang akan dikirim
                        dataType: "json", // Tipe data yang diharapkan dalam respons (JSON)
                        success: function(response) {

                            btnDomain.innerHTML = 'Cari';
                            // Tangani respons dari controller di sini
                            console.log(response); // Contoh: Cetak respons ke konsol

                            if (response['result'] === 'error') {
                                const strongElement = resultDivNonValid.querySelector('#namadomain strong');
                                strongElement.textContent = searchValue;


                                loadingDiv.style.display = 'block';

                                // Sembunyikan tampilan loading
                                loadingDiv.style.display = 'none';
                                resultDiv.style.display = 'none';

                                // Tampilkan tampilan hasil
                                resultDivNonValid.style.display = 'block';
                                return;
                            }

                            const strongElement = resultDiv.querySelector('#namadomain');

                            var formatIDR = Intl.NumberFormat('id-ID', {
                                style: 'currency',
                                currency: 'IDR'
                            }).format(response['register']);
                            var IDR = formatIDR.replace(/\,00$/, '')

                            strongElement.innerHTML = '<strong>' + searchValue + '</strong> is available! ';
                            strongElement.nextElementSibling.innerHTML = IDR + "<sub>/yr</sub>";
                            addCartDomain.setAttribute('onclick', 'addOrder("' + searchValue + '","' + response['register'] + '")');
                            // Hilangkan loading
                            loadingDiv.style.display = 'none';
                            // Hilangkang result unvalid
                            resultDivNonValid.style.display = 'none';

                            // munculkan hasil berhasil
                            resultDiv.style.display = 'block';
                            return;
                        },
                        error: function(xhr, status, error) {
                            btnDomain.innerHTML = 'Cari';
                            console.log("Kegagalan permintaan: " + status + " - " + error);
                            const strongElement = resultDivNonValid.querySelector('#namadomain strong');
                            strongElement.textContent = searchValue;


                            loadingDiv.style.display = 'block';

                            // Sembunyikan tampilan loading
                            loadingDiv.style.display = 'none';
                            resultDiv.style.display = 'none';

                            // Tampilkan tampilan hasil
                            resultDivNonValid.style.display = 'block';
                            return;
                        }
                    });
                } else {
                    const strongElement = resultDivNonValid.querySelector('#namadomain strong');
                    strongElement.textContent = searchValue;

                    loadingDiv.style.display = 'block';

                    btnDomain.innerHTML = 'Cari';
                    setTimeout(function() {
                        // Sembunyikan tampilan loading
                        loadingDiv.style.display = 'none';
                        resultDiv.style.display = 'none';

                        // Tampilkan tampilan hasil
                        resultDivNonValid.style.display = 'block';
                    }, 2000);
                }


            } else if (getIdCategory === "transfer") {
                loadingButton(btnDomain);
                if (/\.[a-zA-Z]+$/.test(searchValue)) {
                    loadingDiv.style.display = 'block';
                    // Memperbarui teks dalam elemen <h2><strong>
                    $.ajax({
                        type: "POST", // Metode HTTP yang digunakan (POST)
                        url: "<?php echo base_url('api/getDomain'); ?>", // URL controller CI3
                        data: {
                            domain: searchValue,
                            type: getIdCategory
                        }, // Data yang akan dikirim
                        dataType: "json", // Tipe data yang diharapkan dalam respons (JSON)
                        success: function(response) {
                            btnDomain.innerHTML = 'Cari';
                            // Tangani respons dari controller di sini
                            console.log(response); // Contoh: Cetak respons ke konsol

                            if (response['status'] === 'available') {
                                const strongElement = resultDivNonValid.querySelector('#namadomain strong');
                                strongElement.textContent = searchValue;


                                loadingDiv.style.display = 'block';

                                // Sembunyikan tampilan loading
                                loadingDiv.style.display = 'none';
                                resultDiv.style.display = 'none';

                                // Tampilkan tampilan hasil
                                resultDivNonValid.style.display = 'block';
                                return;
                            }

                            const strongElement = resultDiv.querySelector('#namadomain');

                            var formatIDR = Intl.NumberFormat('id-ID', {
                                style: 'currency',
                                currency: 'IDR'
                            }).format(response['transfer']);
                            var IDR = formatIDR.replace(/\,00$/, '')

                            strongElement.innerHTML = '<strong>' + searchValue + '</strong> memenuhi syarat untuk ditransfer';
                            strongElement.nextElementSibling.innerHTML = IDR + "<sub>/yr</sub>";
                            addCartDomain.setAttribute('onclick', 'addOrder("' + searchValue + '","' + response['transfer'] + '")');

                            // Hilangkan loading
                            loadingDiv.style.display = 'none';
                            eppAuth.style.display = 'flex';
                            // Hilangkang result unvalid
                            resultDivNonValid.style.display = 'none';

                            // munculkan hasil berhasil
                            resultDiv.style.display = 'block';
                            return;
                        },
                        error: function(xhr, status, error) {

                            console.log("Kegagalan permintaan: " + status + " - " + error);
                        }
                    });
                } else {
                    const strongElement = resultDivNonValid.querySelector('#namadomain strong');
                    strongElement.textContent = searchValue;
                    btnDomain.innerHTML = 'Cari';

                    loadingDiv.style.display = 'block';

                    setTimeout(function() {
                        // Sembunyikan tampilan loading
                        loadingDiv.style.display = 'none';
                        resultDiv.style.display = 'none';

                        // Tampilkan tampilan hasil
                        resultDivNonValid.style.display = 'block';
                    }, 2000);
                }
            } else if (getIdCategory === "hosting") {
                eppAuth.style.display = 'none';
                loadingButton(btnDomain);
                console.log(getIdCategory);
                if (/\.[a-zA-Z]+$/.test(searchValue)) {

                    // Tampilkan tampilan loading
                    loadingDiv.style.display = 'block';
                    $.ajax({
                        type: "POST", // Metode HTTP yang digunakan (POST)
                        url: "<?php echo base_url('api/getDomain'); ?>", // URL controller CI3
                        data: {
                            domain: searchValue,
                            type: getIdCategory
                        }, // Data yang akan dikirim
                        dataType: "json", // Tipe data yang diharapkan dalam respons (JSON)
                        success: function(response) {
                            btnDomain.innerHTML = 'Cari';
                            // Tangani respons dari controller di sini
                            console.log(response); // Contoh: Cetak respons ke konsol

                            if (response['status'] === 'available') {
                                const strongElement = resultDivNonValid.querySelector('#namadomain strong');
                                strongElement.textContent = searchValue;


                                loadingDiv.style.display = 'block';

                                // Sembunyikan tampilan loading
                                loadingDiv.style.display = 'none';
                                resultDiv.style.display = 'none';

                                // Tampilkan tampilan hasil
                                resultDivNonValid.style.display = 'block';
                                return;
                            }

                            // Memperbarui teks dalam elemen <h2><strong>
                            const strongElement = resultDiv.querySelector('#namadomain');


                            strongElement.innerHTML = '<strong>' + searchValue + '</strong> berhasil digunakan';
                            thirdElement = strongElement.nextElementSibling;
                            hiddenButton = thirdElement.nextElementSibling;

                            var pricing = 0;

                            addOrder(searchValue, pricing);
                            if (hiddenButton) {
                                hiddenButton.classList.add('hidden');
                            }

                            // Hilangkan loading
                            loadingDiv.style.display = 'none';
                            // Hilangkang result unvalid
                            resultDivNonValid.style.display = 'none';

                            // munculkan hasil berhasil
                            resultDiv.style.display = 'block';
                            return;
                        },
                        error: function(xhr, status, error) {
                            btnDomain.innerHTML = 'Cari';
                            console.log("Kegagalan permintaan: " + status + " - " + error);
                        }
                    });
                } else {
                    const strongElement = resultDivNonValid.querySelector('#namadomain strong');
                    strongElement.textContent = searchValue;

                    // Tampilkan tampilan loading
                    loadingDiv.style.display = 'block';

                    // Simulasikan proses loading
                    setTimeout(function() {
                        btnDomain.innerHTML = 'Cari';
                        // Sembunyikan tampilan loading
                        loadingDiv.style.display = 'none';
                        resultDiv.style.display = 'none';

                        // Tampilkan tampilan hasil
                        resultDivNonValid.style.display = 'block';
                    }, 2000);
                }
            } else {
                alert('pilih kategori');
            }
        });
    });
</script>

</html>