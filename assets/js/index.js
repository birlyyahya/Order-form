const buttonLanjutkan = document.querySelectorAll('#button-lanjutkan');
const pilihTemplateButton = document.getElementById('pilih-template');
// Mendapatkan elemen-elemen yang diperlukan
const searchInput = document.querySelectorAll('default-search');
const loadingDiv = document.getElementById('loading-domain');
const myTab = document.getElementById('myTab');
const resultDiv = document.getElementById('result-domain');
const btnDaftarDomain = document.querySelectorAll('.btn-daftar-domain');
const resultDivNonValid = document.getElementById('result-domain-nonvalid');
const addCartDomain = document.getElementById('add-cart-domain');
const tabs = document.querySelectorAll('[data-tabs-target]');
const resultDivs = document.querySelectorAll('#result-domain');
const eppAuth = document.getElementById('epp-auth');

let activeTab = null;

function getImage(element) {
	const image = element.querySelector("img");
	const imagemodal = document.querySelector("#image-modal");
	const modal = element.getAttribute("id");
	const dataPreview = element.getAttribute("data-preview");
	imagemodal.src = image.src;
	imagemodal.nextElementSibling.href = dataPreview;

	pilihTemplateButton.setAttribute("onclick", 'lanjutkan("' + modal + '")');
}

function lanjutkan(modal) {
	const gradientBackgrounds = document.querySelectorAll("#gradient-background");
	const iconTemplates = document.querySelectorAll("#icon-template");
	const nameTemplate = document.getElementsByName("template");
	// Hapus kelas dari setiap elemen dalam NodeList gradientBackgrounds
	gradientBackgrounds.forEach(function (element) {
		element.classList.remove(
			"bg-gradient-to-b",
			"from-blue-50",
			"to-transparent",
			"dark:from-blue-900"
		);
		element.classList.remove("border-2", "border-green-400");
	});
	// Hapus kelas dari setiap elemen dalam NodeList iconTemplates
	iconTemplates.forEach(function (element) {
		element.classList.replace("visible", "hidden");
	});
	nameTemplate.forEach(function (element) {
		element.remove();
	});

	const modals = document.getElementById(modal);
	const gradientBackground = modals.querySelector("#gradient-background");
	const iconTemplate = modals.querySelector("#icon-template ");
	const hiddenInput = document.createElement("input");
	hiddenInput.type = "hidden";
	hiddenInput.name = "template";
	hiddenInput.value = modal;
	gradientBackground.insertAdjacentElement("afterend", hiddenInput);
	gradientBackground.classList.add(
		"bg-gradient-to-b",
		"from-blue-50",
		"to-transparent",
		"dark:from-blue-900",
		"border-2",
		"border-green-400"
	);
	iconTemplate.classList.replace("hidden", "visible");
	buttonLanjutkan.forEach(function (elemen) {
		elemen.classList.replace("hidden", "visible");
	});
}
tabs.forEach(function (tab) {
	tab.addEventListener("click", function () {
		searchInput.value = "";

		// Sembunyikan elemen-elemen hasil
		resultDivs.forEach(function (resultDiv) {
			resultDiv.style.display = "none";
			resultDivNonValid.style.display = "none";
			addCartDomain.classList.replace("hidden", "visible");
		});

		// Sembunyikan elemen loading
		loadingDiv.style.display = "none";
		eppAuth.style.display = "none";

		if (activeTab) {
			activeTab.removeAttribute("disabled");
		}

		tab.setAttribute("disabled", "true");
		activeTab = tab;
	});
});

if (tabs.length > 0) {
	tabs[0].click();
}

function addOrder(kategori, pricing) {
	var orderList = document.querySelector(".list-orders");

	var orderItems = document.createElement("li");
	orderItems.className = "grid grid-cols-2 gap-4  mt-0 items-order-domain";
	orderItems.innerHTML =
		` <div class=" justify-center border-b-1" style="overflow-wrap:anywhere;">
                    <span id="order-title" class="text-gray-50 text-md font-semi-bold mr-1">` +
		kategori +
		`</span>
                </div>
                <div class="pt-1 text-right">
                    <span id="order-price" class="text-gray-50 font-semibold inline-block">` +
		pricing +
		`</span>
                </div>`;
	orderList.appendChild(orderItems);

	addCartDomain.className =
		"text-gray-50 bg-gray-500 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-md text-sm px-5 py-2.5 ml-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800";
	addCartDomain.textContent = "Hapus";
	addCartDomain.onclick = function () {
		hapusOrder(orderItems); // Memanggil fungsi hapusOrder dengan elemen item order sebagai argumen
	};
}

function hapusOrder(orderItem) {
	kategori = orderItem.querySelector("#order-title");
	orderItem.remove();
	addCartDomain.className =
		"text-blue-800 bg-blue-200 hover:bg-blue-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 ml-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800";
	addCartDomain.textContent = "Add Cart";
	addCartDomain.onclick = function () {
		addOrder(kategori.textContent);
	};
}

// Fungsi untuk menambahkan menu baru
function addMenu() {
	var inputMenu = document.getElementById("inputmenu");
	var menuName = inputMenu.value.trim();
	var menuNumber = 0;

	if (menuName === "") {
		alert("Nama menu tidak boleh kosong");
		return;
	}

	var menuList = document.querySelector(".menu-list");
	var menuItems = document.querySelectorAll(".menu-items");

	menuNumber = menuItems.length;

	var menuItems = document.createElement("div");
	menuItems.className = "menu-items flex my-3";
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
        <input type="text" name="data-menu-${
					menuNumber + 1
				}" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl text-semibold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="${menuName}" readonly>
        <button type="button" class="text-red-400 bg-transparent hover:bg-red-200 hover:text-red-900 rounded-lg text-lg w-10 h-10 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white self-center ml-3" onclick="deleteMenu(this)">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    `;

	menuList.appendChild(menuItems);
	inputMenu.value = "";
}

// Fungsi untuk menghapus menu
function deleteMenu(button) {
	var menuItems = button.closest(".menu-items");

	// Periksa apakah menu yang akan dihapus adalah menu baru
	if (menuItems) {
		// Hapus menu-items
		menuItems.parentNode.removeChild(menuItems);
	}
}

// Fungsi untuk memindahkan menu ke atas
function moveMenuUp(button) {
	var menuItems = button.closest(".menu-items");
	var previousMenu = menuItems.previousElementSibling;
	if (previousMenu) {
		menuItems.parentElement.insertBefore(menuItems, previousMenu);
	}
}

// Fungsi untuk memindahkan menu ke bawah
function moveMenuDown(button) {
	var menuItems = button.closest(".menu-items");
	var nextMenu = menuItems.nextElementSibling;
	if (nextMenu) {
		menuItems.parentElement.insertBefore(nextMenu, menuItems);
	}
}
// Mendapatkan referensi ke elemen select
const selectElement = document.getElementById("negara");

// URL API negara
const apiUrl = "https://restcountries.com/v3.1/all";
// Mengambil data dari API
fetch(apiUrl)
	.then((response) => response.json())
	.then((data) => {
		// Loop melalui data negara dan menambahkannya sebagai pilihan dalam select
		const sortedCountries = data.sort((a, b) => {
			const nameA = a.name.common.toUpperCase();
			const nameB = b.name.common.toUpperCase();
			if (nameA < nameB) {
				return -1;
			}
			if (nameA > nameB) {
				return 1;
			}
			return 0;
		});
		if (selectElement) {
			sortedCountries.forEach((country) => {
				const option = document.createElement("option");
				option.value = country.name.common;
				option.textContent = country.name.common;
				selectElement.appendChild(option);
			});
		}
	})
	.catch((error) => {
		console.error("Terjadi kesalahan saat mengambil data:", error);
	});
