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
        <li class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
            <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                Kustomisasi <span class="hidden sm:inline-flex sm:ml-2">Website</span>
            </span>
        </li>
        <li class="flex items-center  text-blue-600 dark:text-blue-500">
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            Finish
        </li>
    </ol>
</div>
<!-- end stepper -->

<!-- text next step -->
<p class="mb-5 text-lg font-semibold text-gray-500 lg:text-xl text-center dark:text-gray-400">STEP 4</p>


<h1 class="mb-5 text-4xl font-extrabold tracking-tight leading-none text-center text-gray-900 md:text-3xl lg:text-3xl dark:text-white">Pilih Domain dan Checkout</h1>
<p class="font-normal text-gray-700 dark:text-gray-400 text-center mb-4">Anda dapat membeli domain baru atau menggunakan domain yang telah Anda miliki sebelumnya.</p>
<!-- end text next step -->



<!-- main content -->
<form action="<?= base_url('instan/checkoutSubmit') ?>" method="POST">
    <div class="grid grid-cols-1 grid-rows-1 lg:grid-cols-3 gap-4">
        <!-- search -->
        <div class="mt-2 col-span-2 flex flex-col">
            <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="daftardomain-tab" data-tabs-target="#daftardomain" type="button" role="tab" aria-controls="daftardomain" aria-selected="false">Daftarkan Domain</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active" id="transferdomain-tab" data-tabs-target="#transferdomain" type="button" role="tab" aria-controls="transferdomain" aria-selected="false">Transfer Domain</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="hostingsaja-tab" data-tabs-target="#hostingsaja" type="button" role="tab" aria-controls="hostingsaja" aria-selected="false">Hosting Saja</button>
                    </li>
                </ul>
            </div>
            <!-- tab content -->
            <div class="bg-blue-500 dark:bg-blue-800 border border-gray-200 dark:border-gray-700 rounded-t-lg p-8 md:p-8 shadow-lg">
                <div id="myTabContent">
                    <div class="bg-blue-500 p-4 rounded-lg dark:bg-blue-800" id="daftardomain" role="tabpanel" aria-labelledby="register">
                        <h2 class="mb-4 text-xl font-normal leading-none tracking-tight text-gray-50 md:text-xl dark:text-white">Masukan nama domain baru Anda</h2>
                        <label for="default-search-1" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-blue-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search-1" class="default-search block w-full p-5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-blue focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Temukan nama domain baru Anda..." required>
                            <button id="btn-daftar-domain-1" aria-labelledby="register" type="submit" class="btn-daftar-domain text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-12 py-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                        </div>
                    </div>
                    <div class="bg-blue-500 p-4 rounded-lg dark:bg-blue-800 hidden" id="transferdomain" role="tabpanel" aria-labelledby="transfer">
                        <h2 class="mb-4 text-xl font-normal leading-none tracking-tight text-gray-50 md:text-xl dark:text-white">Masukan nama domain transfer</h2>
                        <label for="default-search-2" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-blue-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search-2" class="default-search block w-full p-5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-blue focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Temukan nama domain baru Anda..." required>
                            <button id="btn-daftar-domain-2" aria-labelledby="transfer" type="submit" class="btn-daftar-domain text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-12 py-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                        </div>
                    </div>
                    <div class="bg-blue-500 p-4 rounded-lg dark:bg-blue-800 hidden" id="hostingsaja" role="tabpanel" aria-labelledby="hosting">
                        <h2 class="mb-4 text-xl font-normal leading-none tracking-tight text-gray-50 md:text-xl dark:text-white">Masukan nama domain anda</h2>
                        <label for="default-search-3" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-blue-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search-3" class="default-search block w-full p-5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-blue focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Temukan nama domain baru Anda..." required>
                            <button id="btn-daftar-domain-3" aria-labelledby="hosting" type="submit" class="btn-daftar-domain text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-12 py-3 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gunakan</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end tab content -->

            <!-- loading result -->
            <div id="loading-domain" class="hidden bg-white dark:bg-blue-800 border border-gray-200 dark:border-gray-700 rounded-b-lg p-8 md:p-8 shadow-lg relative">
                <div class="absolute -top-3 transform -translate-x-1/2 rotate-45 w-5 h-5 bg-white"></div>
                <div class="flex p-4 items-center">
                    <div class="relative">
                        <div class="h-10 w-10 rounded-full border-t-8 border-b-8 border-gray-200"></div>
                        <div class="absolute top-0 left-0 h-10 w-10 rounded-full border-t-8 border-b-8 border-blue-500 animate-spin">
                        </div>
                    </div>
                    <h2 class="ml-5 text-2xl font-normal leading-none tracking-tight text-gray-500 md:text-xl dark:text-white">Loading results, please wait</h2>
                </div>
            </div>
            <!-- end loading result -->

            <!-- result domain product valid -->
            <div id="result-domain" class="hidden bg-white dark:bg-blue-800 border border-gray-200 dark:border-gray-700 rounded-b-lg p-8 md:p-8 shadow-lg relative">
                <div class="absolute -top-3 transform -translate-x-1/2 rotate-45 w-5 h-5 bg-white"></div>
                <div class="grid grid-col-1  md:flex flex-wrap md:text-start items-center justify-center ">
                    <svg class="w-10 h-10 text-green-500 dark:text-white mb-4 md:mb-0" style="justify-self: center;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <h2 id="namadomain" class="flex-1 mr-5 ml-5 pr-3 text-2xl mb-4 md:mb-0 font-normal leading-none tracking-tight text-gray-800 md:text-xl dark:text-white"></h2>
                    <h2 class=" mb-6 md:mb-0 text-2xl text-center font-bold leading-none tracking-tight text-gray-800 md:text-xl dark:text-white"></h2>
                    <button type="button" id="add-cart-domain" onclick="" class="text-blue-800 bg-blue-200 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 ml-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add to cart</button>
                </div>
            </div>
            <!-- end result product valid -->

            <!-- result domain product non-valid -->
            <div id="result-domain-nonvalid" class="hidden bg-white dark:bg-blue-800 border border-gray-200 dark:border-gray-700 rounded-b-lg p-8 md:p-8 mb-8 shadow-lg relative">
                <div class="absolute -top-3 transform -translate-x-1/2 rotate-45 w-5 h-5 bg-white"></div>
                <div class="grid grid-col-1 md:flex flex-wrap items-center justify-center md:text-left">
                    <svg class="w-10 h-10 text-red-500 dark:text-red mb-4 md:mb-0" style="justify-self: center;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                    </svg>
                    <h2 id="namadomain" class="flex-1 ml-5 text-2xl mb-4 md:mb-0 font-normal leading-none tracking-tight text-red-600 md:text-xl dark:text-white"><strong>aurospace.net</strong> is unavailable!</h2>
                </div>
            </div>
            <div id="epp-auth" class="hidden flex pt-5">
                <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EPP Code / Auth Code</label>
                </span>
                <input type="text" id="eppcode" name="eppcode" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
            </div>
            <!-- end result product non-valid -->
        </div>
        <!-- order summary -->
        <div class="lg:mt-20 flex flex-col row-span-2">
            <div class=" bg-blue-500 rounded-lg lg:block shadow-lg">
                <h1 class="py-6 text-xl text-gray-50 px-8">Ringkasan Pesanan</h1>
                <ul class="py-6 space-y-1 px-8 list-orders">
                    <li class="grid grid-cols-2 md:grid-cols-2 gap-4  mt-0 items-order">
                        <div class="justify-center border-b-1">
                            <span id="order-tittle" class="text-gray-50 text-md font-semi-bold"><?= preg_replace('/-\d+/', '', $id['name']) ?> 1 Tahun</span>
                        </div>
                        <div class="text-right">
                            <span id="order-price" class="text-gray-50 font-semibold inline-block" value="<?= $id['pricing'] ?>">Rp <?= number_format($id['pricing'], 0, ',') ?></span>
                        </div>
                    </li>
                    <?php if ($this->session->userdata('data_perusahaan') === 'kuisioner') {
                    ?>
                        <li class="grid grid-cols-2 md:grid-cols-2 gap-4  mt-0 items-order">
                            <div class="justify-center border-b-1">
                                <span id="order-tittle" class="text-gray-50 text-md font-semi-bold">Copywriting</span>
                            </div>
                            <div class="text-right">
                                <span id="order-price" class="text-gray-50 font-semibold inline-block" value="250000">Rp 250.000</span>
                                <input type="hidden" name="copywriting" value="250000">
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="px-8 flex flex-col space-y-2 justify-between pb-8 pt-2 text-gray-50">
                    <hr>
                    <span>Total yang dibayarkan</span>
                    <?php if (!empty($totals)) { ?>
                        <span id="order-total" class="font-bold text-4xl pb-3" value="<?= $totals ?>">Rp <?= number_format($totals, 0, ',') ?></span>
                        <input type="hidden" name="totalOrders" value="<?= $totals ?>">
                    <?php } else { ?>
                        <span id="order-total" class="font-bold text-4xl pb-3" value="<?= $id['pricing'] ?>">Rp <?= number_format($id['pricing'], 0, ',') ?></span>
                        <input type="hidden" name="totalOrders" value="<?= $id['pricing'] ?>">
                    <?php
                    } ?>

                    <?php if ($this->session->userdata('profile')) {
                    ?>
                        <button type="submit" id="checkout" class="inline-flex justify-center items-center text-blue-500 bg-blue-100 hover:bg-blue-200 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-md px-5 py-3 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <svg class="mr-2 mt-1 w-3 h-3 text-blue-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 17">
                                <path d="M2.057 6.9a8.718 8.718 0 0 1 6.41-3.62v-1.2A2.064 2.064 0 0 1 9.626.2a1.979 1.979 0 0 1 2.1.23l5.481 4.308a2.107 2.107 0 0 1 0 3.3l-5.479 4.308a1.977 1.977 0 0 1-2.1.228 2.063 2.063 0 0 1-1.158-1.876v-.942c-5.32 1.284-6.2 5.25-6.238 5.44a1 1 0 0 1-.921.807h-.06a1 1 0 0 1-.953-.7A10.24 10.24 0 0 1 2.057 6.9Z" />
                            </svg>
                            Checkout
                        </button>
                    <?php
                    } else {
                    ?>
                        <button data-popover-target="popover-top" type="submit" disabled id="checkout" class="inline-flex justify-center items-center text-blue-500 bg-blue-100 hover:bg-blue-200 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-md px-5 py-3 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <svg class="mr-2 mt-1 w-3 h-3 text-blue-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 17">
                                <path d="M2.057 6.9a8.718 8.718 0 0 1 6.41-3.62v-1.2A2.064 2.064 0 0 1 9.626.2a1.979 1.979 0 0 1 2.1.23l5.481 4.308a2.107 2.107 0 0 1 0 3.3l-5.479 4.308a1.977 1.977 0 0 1-2.1.228 2.063 2.063 0 0 1-1.158-1.876v-.942c-5.32 1.284-6.2 5.25-6.238 5.44a1 1 0 0 1-.921.807h-.06a1 1 0 0 1-.953-.7A10.24 10.24 0 0 1 2.057 6.9Z" />
                            </svg>
                            Checkout
                        </button>
                    <?php
                    } ?>
                    <div data-popover id="popover-top" role="tooltip" class="text-center absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                        <div class="px-3 py-2">
                            <svg class="w-10 h-10 py-1 text-red-600 m-auto dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                            </svg>
                            <span>Silahkan Login atau Daftar akun terlebih dahulu!</span>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <div class="flex items-center pt-3">
                        <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                        <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-50 dark:text-gray-300">I have read & agree to <a href="#" class="text-blue-200 dark:text-blue-500 hover:underline">Ketentuan Layanan</a>.</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-20 flex flex-col col-span-2">
            <h1 class="text-4xl my-5 font-thin tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl dark:text-white">Billing Account</h1>
            <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white" class="mt-5 shadow-lg">
                <h2 id="accordion-color-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-800 border border-b-0 border-gray-200 rounded-t-sm focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800">
                        <input checked id="default-radio-1" type="radio" value="login" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1" aria-hidden="true">
                        <?php
                        if (!empty($data)) {
                        ?>
                            <label for="default-radio-1" class="flex-1 pl-2"><?= $data['fullname'] ?></label>

                        <?php
                        } else {
                        ?>
                            <label for="default-radio-1" class="flex-1 pl-2">Login akun member</label>
                        <?php
                        }
                        ?>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 p-8" id="loginForm">
                        <?php
                        if (!$this->session->userdata('profile')) {
                        ?>
                            <a href="<?= $this->session->userdata('getUrl') ?>" onclick="loadingButton(this)" id="google-sign-in" class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-500 rounded-md group hover:bg-blue-500 focus:outline-none">
                                <span id="login_logo_google">
                                    <svg class="w-6 h-6 text-blue-500 group-hover:text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                                        <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <p class="text-sm font-medium text-blue-500 group-hover:text-white">Sign In with Google</p>
                            </a>
                            <?php if ($this->session->flashdata('error')) {
                            ?>
                                <div id="alert-4" class="flex mt-2 items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                    </svg>
                                    <span class="sr-only">Info</span>
                                    <div class="ml-3 text-sm font-normal ">
                                        <strong>Link Initiated! </strong> Please complete sign in to associate this service with your existing account. You will only have to do this once.
                                    </div>
                                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700" data-dismiss-target="#alert-4" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>
                            <?php
                            } ?>
                            <div class="flex items-center">
                                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 w-1/2">
                                <p class="text-md px-5 font-normal text-gray-500 group-hover:text-white">atau</p>
                                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 w-1/2">
                            </div>
                            <div class="grid grid-cols-1 lg:flex flex-row gap-4" id="loginManualClient">
                                <div class="flex flex-col flex-1">
                                    <label class="text-gray-600 dark:text-gray-200" for="emailLogin">Email Address</label>
                                    <input id="emailLogin" type="email" name="email" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                                <div class="flex flex-col flex-1">
                                    <label class="text-gray-600 dark:text-gray-200" for="passwordLogin">Password</label>
                                    <input id="passwordLogin" type="text" name="password" required class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                                <div class="flex flex-col-reverse">
                                    <button type="submit" id="login_google" class="w-full h-10 px-4 py-2 text-md font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4">Login</button>
                                </div>
                            </div>
                        <?php } else { ?>
                            <p class="text-md text-gray-500 font-normal"><?= ucwords($data['email']); ?></p>
                            <p class="text-md text-gray-500 font-normal"><?= $data['address'] ?></p>
                            <p class="text-md text-gray-500 font-normal"><?= $data['city'] ?>,<?= $data['state'] ?></p>
                            <p class="text-md text-gray-500 font-normal"><?= $data['country'] ?></p>
                            <p class="text-md text-gray-500 font-normal"><?= $data['phonenumber'] ?></p>
                            <input type="hidden" name="userid" value="<?= $data['userid'] ?>">
                        <?php } ?>
                    </div>
                </div>
                <h2 id="accordion-color-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-800 border border-t-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800">
                        <input id="default-radio-2" type="radio" value="register" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                        <label for="default-radio-2" class="flex-1 pl-2">Daftar akun member</label>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>

                <!-- register -->
                <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <div class="p-3" id="registerForm">
                            <?php
                            if (empty($data)) {
                            ?>
                                <div class="flex flex-row justify-center space-x-3">
                                    <a href="#" class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-500 rounded-md group bg-blue-500 hover:bg-blue-700 focus:outline-none">
                                        <span>
                                            <svg class="w-4 h-4 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="text-sm font-medium text-gray-50 group-hover:text-white">Sign Up with Facebook</span>
                                    </a>
                                    <a href="<?= $this->session->userdata('getUrl') ?>" class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-500 rounded-md group hover:bg-blue-500 focus:outline-none">
                                        <span>
                                            <svg class="w-6 h-6 text-blue-500 group-hover:text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                                                <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="text-sm font-medium text-blue-500 group-hover:text-white">Sign in with Google</span>
                                    </a>
                                </div>
                                <div class="flex items-center my-8">
                                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 w-1/2">
                                    <p class="text-md px-5 font-normal text-gray-500 group-hover:text-white">atau</p>
                                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 w-1/2">
                                </div>
                            <?php
                            }
                            ?>
                            <h2 class="text-lg font-semibold text-gray-800 capitalize dark:text-white">Account settings</h2>
                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                <div>
                                    <label class="text-gray-600 dark:text-gray-200" for="namaDepan">Nama Depan</label>
                                    <input id="namaDepan" type="text" name="firstNama" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required>
                                </div>

                                <div>
                                    <label class="text-gray-600 dark:text-gray-200" for="namaBelakang">Nama Belakang</label>
                                    <input id="namaBelakang" type="text" name="lastName" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-600 dark:text-gray-200" for="emailRegister">Email Valid</label>
                                    <input id="emailRegister" type="email" name="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-gray-600 dark:text-gray-200" for="nomoWA">Nomor Whatsapp</label>
                                    <input id="nomorWA" type="telepon" name="telepon" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                            </div>
                            <h2 class="text-lg font-semibold text-gray-800 capitalize dark:text-white mt-8">Billing Address</h2>
                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                <div>
                                    <div class="flex flex-row" style="justify-content: space-between;">
                                        <label class="text-gray-600 dark:text-gray-200" for="namaPerusahaan">Nama Perusahaan</label>
                                        <span class="text-gray-400 text-sm dark:text-gray-200">Opsional</span>
                                    </div>
                                    <input id="namaPerusahaan" type="text" name="namaPerusahaan" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                                <div>
                                    <label class="text-gray-600 dark:text-gray-200" for="negara">Negara</label>
                                    <select id="negara" name="negara" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        <option value="indonesia">Indonesia</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-gray-600 dark:text-gray-200" for="alamatLengkap">Alamat Lengkap</label>
                                    <input id="alamatLengkap" name="alamat1" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                                <div>
                                    <div class="flex flex-row" style="justify-content: space-between;">
                                        <label class="text-gray-600 dark:text-gray-200" for="namaPerusahaan">Alamat Lengkap 2</label>
                                        <span class="text-gray-400 text-sm dark:text-gray-200">Opsional</span>
                                    </div>
                                    <input id="alamatLengkap2" name="alamat2" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-5">
                                <div class="col-span-2">
                                    <label class="text-gray-600 dark:text-gray-200" for="kota">Kota</label>
                                    <input id="kota" type="text" name="kota" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                                <div class="col-span-2">
                                    <label class="text-gray-600 dark:text-gray-200" for="provinsi">Provinsi</label>
                                    <input id="provinsi" type="text" name="provinsi" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                                <div class="col-span-2">
                                    <label class="text-gray-600 dark:text-gray-200" for="kodepos">Kode Pos</label>
                                    <input id="kodepos" type="text" name="kodepos" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                            </div>
                            <h1 class="text-lg font-semibold text-gray-800 capitalize dark:text-white mt-8">Informasi Tambahan Diperlukan</h1>
                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                <div>
                                    <div class="flex flex-row" style="justify-content: space-between;">
                                        <label class="text-gray-600 dark:text-gray-200" for="survey">Where did you hear about us?</label>
                                        <span class="text-gray-400 text-sm dark:text-gray-200">Opsional</span>
                                    </div>
                                    <select id="survey" name="survey" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        <option value=""></option>
                                        <option value="Teman">Teman</option>
                                        <option value="Artikel Blog">Artikel Blog</option>
                                        <option value="Forum Online">Forum Online</option>
                                        <option value="Google">Google</option>
                                        <option value="Yotube">Youtube</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Iklan">Iklan</option>
                                        <option value="Seminar">Seminar</option>
                                        <option value="Kursus Online">Kursus Online</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div>
                                    <div class="flex flex-row" style="justify-content: space-between;">
                                        <label class="text-gray-600 dark:text-gray-200" for="akuninfo">Akun ini adalah</label>
                                        <span class="text-gray-400 text-sm dark:text-gray-200">Opsional</span>
                                    </div>
                                    <select id="akuninfo" name="akuninfo" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        <option value=""></option>
                                        <option value="pribadi">Akun pribadi</option>
                                        <option value="perusahaan">Akun perusahaan dan saya pemiliknya</option>
                                        <option value="karyawan">Akun perusahaan dan saya karyawan</option>
                                        <option value="pelanggan">Akun pelanggan saya</option>
                                        <option value="rekan">Akun rekan saya</option>
                                    </select>
                                </div>
                            </div>
                            <h1 class="text-lg font-semibold text-gray-800 capitalize dark:text-white mt-8">Account Security</h1>
                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                <div>
                                    <div class="flex flex-row" style="justify-content: space-between;">
                                        <label class="text-gray-600 dark:text-gray-200" for="passwordRegister1">Kata Sandi</label>
                                        <span class="text-gray-400 text-sm dark:text-gray-200">at least 5 character
                                            <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                                </svg><span class="sr-only">Show information</span></button></span>
                                        <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                            <div class="p-3 space-y-2 text-center">
                                                <strong>Tips for a good password</strong><br />Use both upper and lowercase characters<br />Include at least one symbol (# $ ! % & etc.)<br />Do not use dictionary words
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <input id="passwordRegister1" type="password" name="password1" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                                <div>
                                    <label class="text-gray-600 dark:text-gray-200" for="passwordRegister2">Konfirmasi Kata Sandi</label>
                                    <input id="passwordRegister2" type="password" name="password2" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search -->
    </div>
</form>