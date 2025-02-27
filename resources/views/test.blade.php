<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FBF | Studio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/bf4e5e20a8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<header>
    <!-- Üst Kırmızı Duyuru Çubuğu -->
    <div class="bg-red-600 text-white text-center py-2">
        Dükkanlarda nakit ödemeli siparişlerde net %15 indirim!
    </div>

    <!-- Navigasyon Çubuğu -->
    <div class="bg-white shadow-lg py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <!-- Logo -->
            <a href="#" class="text-3xl font-bold text-teal-600">FBF Studio</a>

            <!-- Menü Linkleri ve Arama -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="#" class="text-gray-700 hover:text-teal-600 transition">Ana Sayfa</a>
                <a href="#" class="text-gray-700 hover:text-teal-600 transition">Ürünler</a>
                <a href="#" class="text-gray-700 hover:text-teal-600 transition">Hakkımızda</a>
                <a href="#" class="text-gray-700 hover:text-teal-600 transition">İletişim</a>

                <!-- Arama Çubuğu -->
                <div class="relative">
                    <input type="text" placeholder="Ürün ara..."
                           class="border border-gray-300 rounded-md px-4 py-2 focus:ring-teal-500 focus:border-teal-500">
                    <i class="fas fa-search absolute top-2 right-3 text-gray-500"></i>
                </div>

                <!-- Kullanıcı ve Sepet -->
                <i class="fas fa-user text-gray-600 text-xl hover:text-teal-600 cursor-pointer"></i>
                <i class="fas fa-shopping-cart text-gray-600 text-xl hover:text-teal-600 cursor-pointer"></i>
            </div>
        </div>
    </div>
</header>

<!-- Slider Bölümü -->
<section x-data="sliderData()" class="relative w-full h-screen overflow-hidden">
    <!-- Slider İçeriği -->
    <template x-for="(slide, index) in slides" :key="index">
        <div class="absolute inset-0 transition-transform duration-700 ease-in-out"
             :class="{
                 'translate-x-0': currentSlide === index,
                 '-translate-x-full': currentSlide > index,
                 'translate-x-full': currentSlide < index
             }"
             :style="'background-image: url(' + slide.img + ')'"
             class="bg-cover bg-center">

            <!-- Slider Üstündeki Yazılar -->
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                <div class="text-center text-white p-6 max-w-xl">
                    <h2 class="text-4xl font-bold mb-4" x-text="slide.title"></h2>
                    <p class="text-lg mb-6" x-text="slide.description"></p>
                    <a href="#products" class="bg-teal-500 text-white py-3 px-8 rounded-lg hover:bg-teal-400 transition">
                        Ürünleri İncele
                    </a>
                </div>
            </div>
        </div>
    </template>

    <!-- Slider Kontrolleri -->
    <button @click="prevSlide()"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-teal-500 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button @click="nextSlide()"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-teal-500 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>

    <!-- Slider İndikatörleri -->
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="currentSlide = index" class="w-3 h-3 rounded-full"
                :class="{ 'bg-teal-500': currentSlide === index, 'bg-gray-300': currentSlide !== index }">
            </button>
        </template>
    </div>
</section>




<body class="bg-gray-50 text-gray-800">

    {{-- <!-- Navbar -->
    <nav class="bg-teal-600 text-white py-4 shadow-lg" x-data="{ open: false }">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a href="#" class="text-3xl font-bold">FBF Studio.</a>
            <div class="hidden md:flex space-x-8">
                <a href="/products" class="hover:text-teal-200 transition">Menü</a>
                <a href="#hakkimizda" class="hover:text-teal-200 transition">Hakkımızda</a>
                <a href="#iletisim" class="hover:text-teal-200 transition">İletişim</a>
            </div>
            <!-- Mobil menü butonu -->
            <div class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i> <!-- Font Awesome simgesi -->
                </button>
            </div>
        </div>
        <!-- Mobil menü -->
        <div x-show="open" x-transition class="md:hidden px-6 pt-4 pb-2 bg-teal-600 text-white space-y-2">
            <a href="#menu" class="block hover:text-teal-200">Menü</a>
            <a href="#hakkimizda" class="block hover:text-teal-200">Hakkımızda</a>
            <a href="#iletisim" class="block hover:text-teal-200">İletişim</a>
        </div>
    </nav> --}}


{{--
    <!-- Hero Bölümü -->
    <section x-data="sliderData()" class="relative w-full h-screen overflow-hidden">
        <!-- Slider Görselleri -->
        <template x-for="(slide, index) in slides" :key="index">
            <div class="absolute inset-0 transition-transform duration-700 ease-in-out"
                :class="{
                    'translate-x-0': currentSlide === index,
                    '-translate-x-full': currentSlide > index,
                    'translate-x-full': currentSlide < index
                }"
                :style="'background-image: url(' + slide.img + ')'" class="bg-cover bg-center">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="text-center text-white p-6 max-w-xl">
                        <h2 class="text-4xl font-bold mb-4" x-text="slide.title"></h2>
                        <p class="text-lg mb-6" x-text="slide.description"></p>
                        <a href="#menu"
                            class="bg-teal-500 text-white py-3 px-8 rounded-lg hover:bg-teal-400 transition">Keşfet</a>
                    </div>
                </div>
            </div>
        </template>

        <!-- Önceki ve Sonraki Butonlar -->
        <button @click="prevSlide()"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-teal-500 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button @click="nextSlide()"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-full hover:bg-teal-500 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </button>


        <!-- Slider İndikatörleri -->
        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="currentSlide = index" class="w-3 h-3 rounded-full"
                    :class="{ 'bg-teal-500': currentSlide === index, 'bg-gray-300': currentSlide !== index }">
                </button>
            </template>
        </div>
    </section> --}}




    <!-- Banner Bölümü -->
    <section class="flex items-center justify-center min-h-96 bg-gray-100">
        <div
            class="bg-gradient-to-r from-teal-500 to-cyan-500 text-white max-w-7xl w-full h-auto p-7 rounded-lg shadow-2xl text-center relative overflow-hidden">
            <!-- Arka Plan Şekil -->
            <div class="absolute inset-0 bg-white opacity-10 rounded-lg transform scale-125 blur-3xl"></div>

            <!-- İçerik -->
            <div class="relative z-10">
                <h2 class="text-4xl font-extrabold mb-4">Yılbaşı Kampanyası Başladı!</h2>
                <p class="text-xl mb-6">Yeni yıl için sevdiklerinize özel fotoğraf baskıları %20 indirimle! Kaçırmayın.
                </p>
                <a href="#menu"
                    class="bg-white text-teal-600 py-3 px-8 rounded-lg font-semibold hover:bg-gray-100 transition">
                    Şimdi İncele
                </a>
            </div>
        </div>
    </section>








    <!-- Menü Bölümü -->
    <section id="kesfet" class="py-12 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-teal-700">Keşfet</h2>
            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6">
                <!-- Kart 1 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        %20 İndirim
                    </span>
                    <img src="https://urfacicekdunyasi.com/upload/blog/202306180101501042592940.jpg"
                        alt="Sevgililer Günü Paketi" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Sevgililer Günü Paketi</h3>
                        <p class="text-sm text-gray-600">Romantik ve özel hediye seçenekleriyle sevginizi ifade edin.
                        </p>
                    </div>
                </div>
                <!-- Kart 2 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span
                        class="absolute top-2 left-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        %15 İndirim
                    </span>
                    <img src="https://static-cse.canva.com/blob/1812406/1600w-nSCNcO11GwY.jpg" alt="Doğum Günü Paketi"
                        class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Doğum Günü Paketi</h3>
                        <p class="text-sm text-gray-600">Unutulmaz doğum günü hediyeleri için mükemmel seçenekler.</p>
                    </div>
                </div>
                <!-- Kart 3 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span
                        class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        %10 İndirim
                    </span>
                    <img src="https://cdn.prod.website-files.com/6038bb143b527d24465f114b/6576ea6943a2ed2ff40c8794_fransa.jpg"
                        alt="Yılbaşı Paketi" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Yılbaşı Paketi</h3>
                        <p class="text-sm text-gray-600">Yeni yılı özel hissettiren hediyelerle kutlayın.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Menü Bölümü -->
    <section id="popkat" class="py-12 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-teal-700">Popüler Kategoriler</h2>
            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6">
                <!-- Kart 1 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span
                        class="absolute top-2 left-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        Stokta
                    </span>
                    <img src="https://www.hizlifotobaski.com/Media/Photo/Kategori/74/280x280/fotograf-baski.webp"
                        alt="Sevgililer Günü Paketi" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Fotoğraf Baskı</h3>
                        </p>
                    </div>
                </div>
                <!-- Kart 2 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span
                        class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        Yakında
                    </span>
                    <img src="https://http2.mlstatic.com/D_NQ_NP_622255-MLB75847668807_042024-O.webp"
                        alt="Doğum Günü Paketi" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Polo Kartlar</h3>
                    </div>
                </div>
                <!-- Kart 3 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span
                        class="absolute top-2 left-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        Stokta
                    </span>
                    <img src="https://cdn.dsmcdn.com/ty1477/product/media/images/prod/QC/20240812/09/16873a18-466d-35a9-867a-439988b79263/1_org_zoom.jpg"
                        alt="Yılbaşı Paketi" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Fotoğraf Çerçeveleri</h3>
                    </div>
                </div>
                <!-- Kart 3 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span
                        class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        Yakında
                    </span>
                    <img src="https://image.bikutumutluluk.com/1000x0/product/12910/sok-tak-kare-yapisan-beyaz-cerceve-20-x-20-cm-3-adet_295153.jpeg"
                        alt="Yılbaşı Paketi" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Kare Çerçeve</h3>
                    </div>
                </div>
                <!-- Kart 3 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span
                        class="absolute top-2 left-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        Stokta
                    </span>
                    <img src="https://images.sosyopix.com/product-images/v2/10795/categorypageimage-13x18-cift_tarafli_yeni_cerceve_yeni_cekim_.jpg"
                        alt="Yılbaşı Paketi" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Klasik Çerçeve</h3>
                    </div>
                </div>
                <!-- Kart 3 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span
                        class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        Yakında
                    </span>
                    <img src="https://www.teknofinal.com/toptan-promosyon-fotograf-albumu-21674-17-O.jpg"
                        alt="Yılbaşı Paketi" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Klasik Fotoğraf Albüm</h3>
                    </div>
                </div>
                <!-- Kart 3 -->
                <div
                    class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                    <!-- İndirim etiketi -->
                    <span
                        class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                        Yakında
                    </span>
                    <img src="https://cdn03.ciceksepeti.com/cicek/kcm83934127-1/L/siyah-yaprakli-kendin-yap-album-ani-defteri-beyaz-kalemli-20-fotografli-kcm83934127-1-ba1bc770cf0e4296ac9dc90cbfe8dbfa.jpg"
                        alt="Yılbaşı Paketi" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="text-lg font-bold mb-2 text-teal-600">Özel Fotoğraf Albüm</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>








    <!-- Neden Bizi Tercih Etmelisiniz Bölümü -->
    <section id="neden-tercih-etmelisiniz" class="py-12 bg-teal-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6 text-teal-700">Neden Bizi Tercih Etmelisiniz?</h2>
            <p class="text-lg text-gray-700 mb-8 max-w-3xl mx-auto">
                Fotoğraf baskı hizmetlerimizde kaliteyi ön planda tutuyoruz. İşte fotoğraflarınızı bizimle bastırmayı
                tercih etmeniz için birkaç neden:
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Neden 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <svg class="w-16 h-16 mb-4 text-teal-600 mx-auto" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-teal-700 mb-4">Yüksek Kalite Baskı</h3>
                    <p class="text-gray-600">Sizlere en yüksek kaliteli baskıları sunmak için en son teknoloji
                        makineler kullanıyoruz.</p>
                </div>

                <!-- Neden 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <svg class="w-16 h-16 mb-4 text-teal-600 mx-auto" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 7.3L12 15.4 2 7.3V4l10 7 10-7z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-teal-700 mb-4">Hızlı ve Güvenilir Teslimat</h3>
                    <p class="text-gray-600">Baskılarınız, belirttiğiniz sürede hızlı ve güvenilir bir şekilde
                        adresinize teslim edilir.</p>
                </div>

                <!-- Neden 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <svg class="w-16 h-16 mb-4 text-teal-600 mx-auto" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 7h6v10H9z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-teal-700 mb-4">Farklı Baskı Seçenekleri</h3>
                    <p class="text-gray-600">Fotoğraflarınızı çeşitli materyallere bastırma seçeneği sunuyoruz, böylece
                        her ihtiyaca uygun baskı türüne sahip olabilirsiniz.</p>
                </div>

                <!-- Neden 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <svg class="w-16 h-16 mb-4 text-teal-600 mx-auto" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M19 3H5c-1.1 0-1.99.9-1.99 2L3 19c0 1.1.89 2 1.99 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 16H6V6h12v12z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold text-teal-700 mb-4">Özel Tasarım Baskılar</h3>
                    <p class="text-gray-600">Kendi tasarımlarınızı oluşturabilir veya fotoğraflarınızı özel olarak
                        bastırabilirsiniz. Sadece size özel baskılar.</p>
                </div>

                <!-- Neden 5 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <svg class="w-16 h-16 mb-4 text-teal-600 mx-auto" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 2v8H4v12h16V10h-6V2h-4z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-teal-700 mb-4">Kişiye Özel Çerçeve Seçenekleri</h3>
                    <p class="text-gray-600">Baskılarınızı sadece kaliteli materyallerle değil, aynı zamanda kişiye
                        özel çerçeve seçenekleriyle de sunuyoruz.</p>
                </div>

                <!-- Neden 6 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <svg class="w-16 h-16 mb-4 text-teal-600 mx-auto" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L8 6h3v7h2V6h3z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-teal-700 mb-4">Müşteri Memnuniyeti</h3>
                    <p class="text-gray-600">Müşterilerimizin memnuniyetini en ön planda tutarak, her baskı sürecinde
                        sürekli destek sağlıyoruz.</p>
                </div>
            </div>
        </div>
    </section>



    {{-- <!-- İletişim Bölümü -->
    <section id="iletisim" class="py-12 bg-gray-100">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6 text-teal-700">İletişim</h2>
            <p class="text-gray-700">Bize ulaşmak için aşağıdaki formu doldurun veya sosyal medya hesaplarımızdan takip
                edin.</p>
            <div class="mt-6">
                <form class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
                    <div class="mb-4">
                        <input type="text" placeholder="Adınız"
                            class="w-full px-4 py-2 border border-teal-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>
                    <div class="mb-4">
                        <input type="email" placeholder="E-posta"
                            class="w-full px-4 py-2 border border-teal-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>
                    <div class="mb-4">
                        <textarea placeholder="Mesajınız"
                            class="w-full px-4 py-2 border border-teal-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500"></textarea>
                    </div>
                    <button
                        class="bg-teal-600 text-white px-6 py-2 rounded-lg hover:bg-teal-500 transition">Gönder</button>
                </form>
            </div>
        </div>
    </section> --}}

    <!-- Footer Bölümü -->
    <footer class="bg-teal-600 text-white py-8">
        <div class="container mx-auto px-6 text-center md:text-left">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Sosyal Medya -->
                <div>
                    <p class="text-lg font-semibold mb-4">Bizi Sosyal Medyada Takip Edin</p>
                    <div class="space-x-4">
                        <a href="https://facebook.com" target="_blank"
                            class="text-white hover:text-teal-200 transition">
                            <svg class="w-6 h-6 inline" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12.1C22 6.13 17.52 1 12 1S2 6.13 2 12.1c0 5.32 4.1 9.74 9.38 9.95V15H7v-3h4v-2.3c0-4.07 2.33-6.4 6.08-6.4 1.77 0 3.77.27 3.77.27v4h-2.12c-2.09 0-2.73 1.28-2.73 2.6v3.1h4.59l-1.34 3h-3.25v6.06c5.28-.21 9.38-4.63 9.38-9.95z">
                                </path>
                            </svg>
                        </a>
                        <a href="https://instagram.com" target="_blank"
                            class="text-white hover:text-teal-200 transition">
                            <svg class="w-6 h-6 inline" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.37 0 0 5.37 0 12c0 6.63 5.37 12 12 12s12-5.37 12-12c0-6.63-5.37-12-12-12zm0 21c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9zm4.5-12.25h-2.8c-.42 0-.75.34-.75.75s.33.75.75.75h2.8c.41 0 .75-.33.75-.75s-.34-.75-.75-.75zm-6 0h-2.8c-.42 0-.75.34-.75.75s.33.75.75.75h2.8c.41 0 .75-.33.75-.75s-.34-.75-.75-.75zm-1.5 1.5c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z">
                                </path>
                            </svg>
                        </a>
                        <a href="https://twitter.com" target="_blank"
                            class="text-white hover:text-teal-200 transition">
                            <svg class="w-6 h-6 inline" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.5 4.5c-.88.39-1.83.65-2.83.77 1.02-.61 1.8-1.57 2.17-2.72-.95.56-2.01.97-3.14 1.19-1.35-1.44-3.29-1.5-4.63-.14-1.27 1.02-1.52 2.77-.68 4.2-3.13-.16-5.92-1.66-7.78-3.96-.6.98-.94 2.14-.94 3.35 0 2.31 1.17 4.35 2.93 5.56-1.08-.03-2.1-.33-3-.82-.03 2.8 1.98 5.45 4.94 6.03-1.29.38-2.63.42-3.98.16 1.13 3.52 4.41 5.83 7.88 5.91-3.23 2.53-7.15 3.71-11.36 3.27 3.96 2.54 8.83 3.56 13.54 2.72 4.18-1.15 7.26-4.32 8.74-8.07-.57-.07-1.12-.18-1.67-.33-2.02-.42-3.8-1.6-5.19-3.26z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- İletişim Bilgileri -->
                <div>
                    <p class="text-lg font-semibold mb-4">İletişim Bilgileri</p>
                    <p class="text-sm text-gray-300">Adres: FBF Studio, Örnek Mahallesi, Konya</p>
                    <p class="text-sm text-gray-300">Telefon: +90 123 456 7890</p>
                    <p class="text-sm text-gray-300">E-posta: info@fbfstudio.com</p>
                </div>

                <!-- Müşteri Hizmetleri -->
                <div>
                    <p class="text-lg font-semibold mb-4">Müşteri Hizmetleri</p>
                    <ul class="text-sm text-gray-300 space-y-2">
                        <li><a href="#" class="hover:text-teal-200 transition">Bize Ulaşın</a></li>
                        <li><a href="#" class="hover:text-teal-200 transition">Sık Sorulan Sorular</a></li>
                        <li><a href="#" class="hover:text-teal-200 transition">İade Politikası</a></li>
                        <li><a href="#" class="hover:text-teal-200 transition">Teslimat Bilgileri</a></li>
                    </ul>
                </div>

                <!-- Banka Bilgileri -->
                <div>
                    <p class="text-lg font-semibold mb-4">Banka Bilgileri</p>
                    <p class="text-sm text-gray-300">Banka: ABC Bankası</p>
                    <p class="text-sm text-gray-300">Hesap Adı: FBF Ltd. Şti.</p>
                    <p class="text-sm text-gray-300">IBAN: TR123456789012345678901234</p>
                    <p class="text-sm text-gray-300">Şube: Konya Merkez</p>
                </div>
            </div>

            <div class="mt-8 text-center text-sm text-gray-300">
                <p>&copy; 2025 FBF. | Tüm Hakları Saklıdır.</p>
            </div>
        </div>
    </footer>



    <script>
        // Mobil menü açma/kapama
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <script>
        function sliderData() {
            return {
                currentSlide: 0,
                slides: [{
                        img: 'https://www.alraza.com/images/Photo%20Printing/Custom%20photo%20prints%20Qatar.jpg',
                        title: 'Kampanya 1: %20 İndirim',
                        description: 'Tüm fotoğraf baskılarında şimdi avantajlı fiyatlar!'
                    },
                    {
                        img: 'https://www.alraza.com/images/Photo%20Printing/photo-printing-in-doha.jpg',
                        title: 'Kampanya 2: Yılbaşı Özel',
                        description: 'Sevdiklerinize yılbaşında özel fotoğraf paketleri hediye edin.'
                    },
                    {
                        img: 'https://www.alraza.com/images/Photo%20Printing/Best%20photo%20printing%20services%20Qatar.jpg',
                        title: 'Kampanya 3: Hediye Kartları',
                        description: 'Fotoğraf hediye kartlarıyla sevdiklerinizi mutlu edin.'
                    }
                ],
                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                },
                prevSlide() {
                    this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                },
                autoSlide() {
                    setInterval(() => {
                        this.nextSlide();
                    }, 5000); // 5 saniyede bir geçiş yapar
                },
                init() {
                    this.autoSlide();
                }
            }
        }
    </script>


</body>

</html>
