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
    #footer-bg {}

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

<body style="overflow: inherit !important;">

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
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <button class="login bg-gray-800">
                            <div class="sign-login"><svg viewBox="0 0 14 18" class="w-5 h-5">
                                    <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"></path>
                                </svg></div>
                            <div class="text-login text-sm">Login</div>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 relative">
            <?= $contents ?>
        </div>
    </section>

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

</body>

<script>
    const gradientBackground = document.getElementById('gradient-background');
    const pilihTemplateButton = document.getElementById('pilih-template');
    const iconTemplate = document.getElementById('icon-template');
    const popupModalTemplate = document.getElementById('popup-modal-template');
    const buttonLanjutkan = document.querySelectorAll('#button-lanjutkan');

    // Mendapatkan elemen-elemen yang diperlukan
    const searchInput = document.getElementById('default-search');
    const loadingDiv = document.getElementById('loading-domain');
    const myTab = document.getElementById('myTab');
    const resultDiv = document.getElementById('result-domain');
    const btnDaftarDomain = document.querySelectorAll('#btn-daftar-domain');
    const resultDivNonValid = document.getElementById('result-domain-nonvalid');
    const addCartDomain = document.getElementById('add-cart-domain');
    const tabs = document.querySelectorAll('[data-tabs-target]');
    const resultDivs = document.querySelectorAll('#result-domain');
    const eppAuth = document.getElementById('epp-auth');

    let activeTab = null;

    tabs.forEach(function(tab) {
        tab.addEventListener('click', function() {
            searchInput.value = '';

            // Sembunyikan elemen-elemen hasil
            resultDivs.forEach(function(resultDiv) {
                resultDiv.style.display = 'none';
                resultDivNonValid.style.display = 'none';
                addCartDomain.classList.replace('hidden', 'visible');
            });

            // Sembunyikan elemen loading
            loadingDiv.style.display = 'none';
            eppAuth.style.display = 'none';

            if (activeTab) {
                activeTab.removeAttribute('disabled');
            }

            tab.setAttribute('disabled', 'true');
            activeTab = tab;
        });
    });

    if (tabs.length > 0) {
        tabs[0].click();
    }

    // Menambahkan event listener untuk input pencarian
    btnDaftarDomain.forEach(function(btnDomain) {
        btnDomain.addEventListener('click', function() {
            event.preventDefault();

            const domainOrder = document.querySelector('.items-order-domain');
            const searchInputs = btnDomain.parentElement.querySelector('#default-search');
            const searchValue = searchInputs.value;

            if (!searchValue) {
                // Input tidak diisi
                alert('Harap isi nama domain terlebih dahulu.');
                return; // Keluar dari fungsi jika input kosong
            }

            if(domainOrder){
                hapusOrder(domainOrder);
            }

            loadingDiv.style.display = 'none';
            resultDiv.style.display = 'none';
            resultDivNonValid.style.display = 'none';

            getIdCategory = btnDomain.getAttribute('aria-labelledby');

            if (getIdCategory === "daftardomain-tab") {
                if (/\.[a-zA-Z]+$/.test(searchValue)) {
                    const strongElement = resultDiv.querySelector('#namadomain');
                    strongElement.innerHTML = '<strong>' + searchValue + '</strong> is available! ';
                    strongElement.nextElementSibling.innerHTML= "Rp 170,000<sub>/yr</sub>";

                    addCartDomain.setAttribute('onclick', 'addOrder("' + searchValue + '")');
                    loadingDiv.style.display = 'block';

                    setTimeout(function() {
                        loadingDiv.style.display = 'none';
                        resultDivNonValid.style.display = 'none';

                        resultDiv.style.display = 'block';
                    }, 2000);
                } else {
                    const strongElement = resultDivNonValid.querySelector('#namadomain');
                    strongElement.textContent = searchValue;

                    loadingDiv.style.display = 'block';

                    setTimeout(function() {
                        loadingDiv.style.display = 'none';
                        resultDiv.style.display = 'none';

                        // Tampilkan tampilan hasil
                        resultDivNonValid.style.display = 'block';
                    }, 2000);
                }

            } else if (getIdCategory === "transferdomain-tab") {
                if (/\.[a-zA-Z]+$/.test(searchValue)) {
                    // Memperbarui teks dalam elemen <h2><strong>
                    const strongElement = resultDiv.querySelector('#namadomain');
                    
                    console.log(eppAuth);

                    strongElement.innerHTML = '<strong>' + searchValue + '</strong> memenuhi syarat untuk ditransfer';
                    strongElement.nextElementSibling.innerHTML = "Rp 170,000<sub>/yr</sub>";

                    addCartDomain.setAttribute('onclick', 'addOrder("' + searchValue + '")');
                    // Tampilkan tampilan loading
                    loadingDiv.style.display = 'block';
                    
                    // Simulasikan proses loading
                    setTimeout(function() {
                        // Sembunyikan tampilan loading
                        loadingDiv.style.display = 'none';
                        resultDivNonValid.style.display = 'none';
                        
                        eppAuth.style.display = 'flex';
                        // Tampilkan tampilan hasil
                        resultDiv.style.display = 'block';
                    }, 2000);
                } else {
                    const strongElement = resultDivNonValid.querySelector('#namadomain strong');
                    strongElement.textContent = searchValue;


                    loadingDiv.style.display = 'block';

                    setTimeout(function() {
                        // Sembunyikan tampilan loading
                        loadingDiv.style.display = 'none';
                        resultDiv.style.display = 'none';

                        // Tampilkan tampilan hasil
                        resultDivNonValid.style.display = 'block';
                    }, 2000);
                }
            } else if (getIdCategory === "hostingsaja-tab") {
                if (/\.[a-zA-Z]+$/.test(searchValue)) {
                    // Memperbarui teks dalam elemen <h2><strong>
                    const strongElement = resultDiv.querySelector('#namadomain');
                    strongElement.innerHTML = '<strong>' + searchValue + '</strong> berhasil digunakan';
                    thirdElement = strongElement.nextElementSibling;
                    hiddenButton = thirdElement.nextElementSibling;
                    if (hiddenButton) {
                        hiddenButton.classList.add('hidden');
                    }

                    // Tampilkan tampilan loading
                    loadingDiv.style.display = 'block';

                    // Simulasikan proses loading
                    setTimeout(function() {
                        // Sembunyikan tampilan loading
                        loadingDiv.style.display = 'none';
                        resultDivNonValid.style.display = 'none';

                        // Tampilkan tampilan hasil
                        resultDiv.style.display = 'block';
                        addOrder(searchValue);
                    }, 2000); // Angka ini adalah waktu simulasi loading (dalam milidetik)
                } else {
                    const strongElement = resultDivNonValid.querySelector('#namadomain strong');
                    strongElement.textContent = searchValue;

                    // Tampilkan tampilan loading
                    loadingDiv.style.display = 'block';

                    // Simulasikan proses loading
                    setTimeout(function() {
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

    pilihTemplateButton.addEventListener('click', function() {

        // Mengubah kelas pada elemen dengan gradient background
        gradientBackground.classList.add('bg-gradient-to-b', 'from-blue-50', 'to-transparent', 'dark:from-blue-900');
        popupModalTemplate.classList.add('border-2', 'border-green-400');
        iconTemplate.classList.replace('hidden', 'visible');
        buttonLanjutkan.forEach(function(elemen) {
            // Mengubah teks elemen
            elemen.classList.replace('hidden', 'visible');
        });
    });

    function addOrder(kategori) {
        var orderList = document.querySelector('.list-orders');

        var orderItems = document.createElement('li');
        orderItems.className = 'grid grid-cols-3 gap-4  mt-0 items-order-domain';
        orderItems.innerHTML = ` <div class="flex flex-col col-span-2 justify-center border-b-1">
                        <div class="flex">
                        <span id="order-title" class="text-gray-50 text-md font-semi-bold mr-1">` + kategori + `</span><span class="text-gray-50 text-md font-semi-bold">tahunan</span></div>
                    </div>
                    <div class="pt-1 text-right">
                        <span id="order-price" class="text-gray-50 font-semibold inline-block">Rp 999.000</span>
                    </div>`;
        orderList.appendChild(orderItems);

        addCartDomain.className = 'text-gray-50 bg-gray-500 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-md text-sm px-5 py-2.5 ml-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800';
        addCartDomain.textContent = 'Hapus';
        addCartDomain.onclick = function() {
            hapusOrder(orderItems); // Memanggil fungsi hapusOrder dengan elemen item order sebagai argumen
        };
    }

    function hapusOrder(orderItem) {
        kategori = orderItem.querySelector('#order-title');
        orderItem.remove(); 
        addCartDomain.className = 'text-blue-800 bg-blue-200 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 ml-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800';
        addCartDomain.textContent = 'Add Cart';
        addCartDomain.onclick = function() {
            addOrder(kategori.textContent); 
        };
    }

    // Fungsi untuk menambahkan menu baru
    function addMenu() {
        var inputMenu = document.getElementById('inputmenu');
        var menuName = inputMenu.value.trim();
        var menuNumber = 0;

        if (menuName === '') {
            alert('Nama menu tidak boleh kosong');
            return;
        }

        var menuList = document.querySelector('.menu-list');
        var menuItems = document.querySelectorAll('.menu-items');

        menuNumber = menuItems.length;
        

        var menuItems = document.createElement('div');
        menuItems.className = 'menu-items flex my-3';
        menuItems.innerHTML = `
            <div class="flex flex-col space-y-1 justify-center items-center">
                <button type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="moveMenuUp(this)">
                    <svg class="w-4 h-4 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7" />
                    </svg>
                </button>
                <button type="button" class="text-white bg-blue-500 hover.bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="moveMenuDown(this)">
                    <svg class="w-4 h-4 text-gray-50 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                    </svg>
                </button>
            </div>
            <input type="text" name="data-menu-${menuNumber+1}" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl text-semibold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="${menuName}" readonly>
            <button type="button" class="text-red-400 bg-transparent hover:bg-red-200 hover:text-red-900 rounded-lg text-lg w-10 h-10 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white self-center ml-3" onclick="deleteMenu(this)">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        `;

        menuList.appendChild(menuItems);
        inputMenu.value = '';
    }

    // Fungsi untuk menghapus menu
    function deleteMenu(button) {
        var menuItems = button.closest('.menu-items');

        // Periksa apakah menu yang akan dihapus adalah menu baru
        if (menuItems) {
            // Hapus menu-items
            menuItems.parentNode.removeChild(menuItems);
        }
    }

    // Fungsi untuk memindahkan menu ke atas
    function moveMenuUp(button) {
        var menuItems = button.closest('.menu-items');
        var previousMenu = menuItems.previousElementSibling;
        if (previousMenu) {
            menuItems.parentElement.insertBefore(menuItems, previousMenu);
        }
    }

    // Fungsi untuk memindahkan menu ke bawah
    function moveMenuDown(button) {
        var menuItems = button.closest('.menu-items');
        var nextMenu = menuItems.nextElementSibling;
        if (nextMenu) {
            menuItems.parentElement.insertBefore(nextMenu, menuItems);
        }
    }
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>


</html>