<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kafem | Menü Listesi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/bf4e5e20a8.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- <!-- Başlık -->
    <header class="bg-teal-600 text-white py-8">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Menü Listesi</h1>
            <p class="mt-2">Lezzetli menülerimizi keşfedin!</p>
        </div>
    </header> --}}
    <!-- Navbar -->
    <nav class="bg-teal-600 text-white py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a href="#" class="text-3xl font-bold">Kafem.</a>
            <div class="hidden md:flex space-x-8">
                <a href="/products" class="hover:text-teal-200 transition">Menü</a>
                <a href="#hakkimizda" class="hover:text-teal-200 transition">Hakkımızda</a>
                <a href="#iletisim" class="hover:text-teal-200 transition">İletişim</a>
            </div>
            <!-- Mobil menü butonu -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i> <!-- Font Awesome simgesi -->
                </button>
            </div>
        </div>
        <!-- Mobil menü -->
        <div id="mobile-menu" class="md:hidden hidden px-6 pt-4 pb-2 bg-teal-600 text-white space-y-2">
            <a href="#menu" class="block hover:text-teal-200">Menü</a>
            <a href="#hakkimizda" class="block hover:text-teal-200">Hakkımızda</a>
            <a href="#iletisim" class="block hover:text-teal-200">İletişim</a>
        </div>
    </nav>

    <!-- Kategoriler ve Ürünler -->
    <section class="container mx-auto my-12 px-6">
        <div class="space-y-8">
            <!-- Kahveler Kategorisi -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <button onclick="toggleCategory('category1')" class="w-full text-left text-2xl font-bold text-teal-600 mb-4 flex justify-between items-center">
                    Kahveler
                    <svg class="w-5 h-5 transition-transform transform" id="arrow-category1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="category1" class="hidden">
                    <div class="grid gap-6 md:grid-cols-2">
                        <!-- Ürün Kartı -->
                        <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                            <img src="https://images.pexels.com/photos/3026802/pexels-photo-3026802.jpeg" alt="Latte" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-bold text-teal-600">Latte</h3>
                                <p class="text-gray-600">Köpüklü süt ve yoğun kahve aromasıyla lezzetli bir deneyim.</p>
                            </div>
                        </div>
                        <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                            <img src="https://images.pexels.com/photos/374129/pexels-photo-374129.jpeg" alt="Espresso" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-bold text-teal-600">Espresso</h3>
                                <p class="text-gray-600">Yoğun kahve sevenler için mükemmel bir seçim.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tatlılar Kategorisi -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <button onclick="toggleCategory('category2')" class="w-full text-left text-2xl font-bold text-teal-600 mb-4 flex justify-between items-center">
                    Tatlılar
                    <svg class="w-5 h-5 transition-transform transform" id="arrow-category2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="category2" class="hidden">
                    <div class="grid gap-6 md:grid-cols-2">
                        <!-- Ürün Kartı -->
                        <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                            <img src="https://images.pexels.com/photos/411000/pexels-photo-411000.jpeg" alt="Cheesecake" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-bold text-teal-600">Cheesecake</h3>
                                <p class="text-gray-600">Kremalı dokusuyla enfes cheesecake lezzeti.</p>
                            </div>
                        </div>
                        <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                            <img src="https://images.pexels.com/photos/1099680/pexels-photo-1099680.jpeg" alt="Çikolatalı Kek" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-bold text-teal-600">Çikolatalı Kek</h3>
                                <p class="text-gray-600">Yoğun çikolatalı kek sevenler için harika bir seçenek.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript kodu: Kategorileri açıp kapatma işlemi -->
    <script>
        function toggleCategory(categoryId) {
            const categoryElement = document.getElementById(categoryId);
            const arrowElement = document.getElementById(`arrow-${categoryId}`);
            categoryElement.classList.toggle('hidden');
            arrowElement.classList.toggle('rotate-180'); // Ok simgesini döndür
        }


        // Mobil menü açma/kapama
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
