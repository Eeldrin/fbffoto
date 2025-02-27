@extends('layouts.app')





@section('content')

<body>

    @include('inc.header')


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
                :style="'background-image: url(' + slide.img + ')'" class="bg-cover bg-center">

                <!-- Slider Üstündeki Yazılar -->
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="text-center text-white p-6 max-w-xl">
                        <h2 class="text-4xl font-bold mb-4" x-text="slide.title"></h2>
                        <p class="text-lg mb-6" x-text="slide.description"></p>
                        <a href="#products"
                            class="bg-teal-500 text-white py-3 px-8 rounded-lg hover:bg-teal-400 transition">
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

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">

        <!-- Menü Bölümü -->
        <section id="kesfet" class="py-12">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-4 text-teal-700">Keşfet</h2>
                <p class="text-lg text-gray-700 text-center mb-6">
                    En kaliteli fotoğraf baskı hizmetleriyle anılarınızı ölümsüzleştirin! Hemen sipariş verin.
                </p>
                <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6">
                    <!-- Kart 1 -->
                    <div
                        class="relative bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all duration-300">
                        <!-- İndirim etiketi -->
                        <span
                            class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                            %20 İndirim
                        </span>
                        <img src="https://urfacicekdunyasi.com/upload/blog/202306180101501042592940.jpg"
                            alt="Sevgililer Günü Paketi" class="w-full h-40 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-lg font-bold mb-2 text-teal-600">Sevgililer Günü Paketi</h3>
                            <p class="text-sm text-gray-600">Romantik ve özel hediye seçenekleriyle sevginizi ifade
                                edin.
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
                        <img src="https://static-cse.canva.com/blob/1812406/1600w-nSCNcO11GwY.jpg"
                            alt="Doğum Günü Paketi" class="w-full h-40 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="text-lg font-bold mb-2 text-teal-600">Doğum Günü Paketi</h3>
                            <p class="text-sm text-gray-600">Unutulmaz doğum günü hediyeleri için mükemmel seçenekler.
                            </p>
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
        <section id="popkat" class="py-12">
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
    </main>

    @include('inc.footer')

</body>




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

</html>

@endsection
