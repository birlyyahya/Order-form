<!-- Stepper -->
<div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
    <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
        <li class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                Pilih <span class="hidden sm:inline-flex sm:ml-2">Template</span>
            </span>
        </li>
        <li class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                Konten <span class="hidden sm:inline-flex sm:ml-2">Website</span>
            </span>
        </li>
        <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                <span class="mr-2">3</span>
                Kustomisasi <span class="hidden sm:inline-flex sm:ml-2">Website</span>
            </span>
        </li>
        <li class="flex items-center">
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            Finish
        </li>
    </ol>
</div>
<!-- end stepper -->

<!-- text next step -->
<p class="mb-5 text-lg font-semibold text-gray-500 lg:text-xl text-center dark:text-gray-400">STEP 3</p>


<h1 class="mb-5 text-4xl font-extrabold tracking-tight leading-none text-center text-gray-900 md:text-3xl lg:text-3xl dark:text-white">Kustom Menu</h1>
<p class="font-normal text-gray-700 dark:text-gray-400 text-center mb-4">Kami telah siapkan menu umum website di bawah ini.<br>Anda bisa mengubah susunan, mengedit, menambah, dan menghapusnya..</p>
<!-- end text next step -->


<!-- main content -->
<form action="<?= base_url('instan/uploadkonten/') ?>" method="POST">
    <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-8 mb-8 w-1/2 mx-auto shadow-md">
        <div class="mb-6 menu-list">
            <div class="menu-items flex my-3">
                <div class="flex flex-col space-y-1 justify-center items-center">
                    <button type="button" id="up-menu" onclick="moveMenuUp(this)" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                        </svg>
                    </button>
                    <button type="button" id="down-menu" onclick="moveMenuDown(this)" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5  mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                        </svg>
                    </button>
                </div>
                <input type="text" id="data-menu" name="data-menu-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl text-semibold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Home">
                <button type="button" id="delete-menu" onclick="deleteMenu(this)" class="text-red-400 bg-transparent hover:bg-red-200 hover:text-red-900 rounded-lg text-lg w-10 h-10 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white self-center ml-3" data-modal-hide="staticModal">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <div class="menu-items flex my-3">
                <div class="flex flex-col space-y-1 justify-center items-center">
                    <button type="button" id="up-menu" onclick="moveMenuUp(this)" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                        </svg>
                    </button>
                    <button type="button" id="down-menu" onclick="moveMenuDown(this)" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5  mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                        </svg>
                    </button>
                </div>
                <input type="text" id="data-menu" name="data-menu-2" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl text-semibold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Galery">
                <button type="button" id="delete-menu" onclick="deleteMenu(this)" class="text-red-400 bg-transparent hover:bg-red-200 hover:text-red-900 rounded-lg text-lg w-10 h-10 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white self-center ml-3" data-modal-hide="staticModal">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <div class="menu-items flex my-3">
                <div class="flex flex-col space-y-1 justify-center items-center">
                    <button type="button" id="up-menu" onclick="moveMenuUp(this)" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                        </svg>
                    </button>
                    <button type="button" id="down-menu" onclick="moveMenuDown(this)" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5  mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-4 h-4 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                        </svg>
                    </button>
                </div>
                <input type="text" id="data-menu" name='data-menu-3' class="bg-gray-50 border border-gray-300 text-gray-900 text-xl text-semibold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Tentang">
                <button type="button" id="delete-menu" onclick="deleteMenu(this)" class="text-red-400 bg-transparent hover:bg-red-200 hover:text-red-900 rounded-lg text-lg w-10 h-10 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white self-center ml-3" data-modal-hide="staticModal">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="relative mb-4 flex flex-wrap items-stretch input-groups">
            <input type="text" id="inputmenu" class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto bg-gray-50 border border-gray-300 text-gray-900 text-lg text-semibold rounded-l focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tambah menu baru" aria-label="tambahmenu" aria-describedby="button-addon2" />
            <button id="buttonTambahMenu" class="z-[2] inline-block rounded-r bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:z-[3] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init type="button" id="button-addon2" onclick="addMenu()">
                <svg class="w-6 h-6 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z" />
                </svg>
            </button>
        </div>
        <div class="flex justify-space-between pt-10">
            <a href="<?= base_url('checkout')?>" id="btn-lewati" class="learn-more self-center mb-4">
                <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                </span>
                <span class="button-text">Lewati</span>
            </a>
            <button id="button-lanjutkan" type="submit" class="mb-5 ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-lg px-14 py-2.5 text-center mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Lanjutkan
            </button>
        </div>
        <p class="font-normal text-gray-700 dark:text-gray-400 italic">*Anda bisa mengkonfigurasi website <br>nanti setelah proses order selesai.</p>
    </div>
</form>



<!-- product offer -->
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
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
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


        <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-0rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 modal-enter">
                    <button type="button" class="absolute top-3 right-2.5 text-white bg-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-full text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-2 text-center">
                        <img class="h-auto max-w-full rounded-lg p-2" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
                        <button data-modal-hide="popup-modal" type="button" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Live Preview
                        </button>
                        <button id="pilih-template" data-modal-hide="popup-modal" type="button" class="text-gray-800 bg-white hover:bg-gray-100 focus:ring-5 focus:outline-none focus:ring-gray-800 rounded-lg border border-gray-500 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Pilih Template</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->session->flashdata('firstTemplate'); ?>