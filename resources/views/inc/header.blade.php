<header x-data="{ open: false }">
    <!-- Announcement Bar -->
    <div class="bg-red-600 text-white text-center py-2">
        Elden nakit ödemeli siparişlerde net <b>%10 indirim!</b>
    </div>

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo -->
            <a href="#" class="text-3xl font-bold text-teal-600">FBF Studio</a>

            <!-- Menu Links & Search -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="http://kafem.test" class="text-gray-700 hover:text-teal-600 transition">Ana Sayfa</a>
                <a href="photos" class="text-gray-700 hover:text-teal-600 transition">Ürünler</a>
                <a href="#" class="text-gray-700 hover:text-teal-600 transition">Hakkımızda</a>
                <a href="#" class="text-gray-700 hover:text-teal-600 transition">İletişim</a>

                <!-- Search Input -->
                <div class="relative">
                    <input type="text" placeholder="Ürün ara..."
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-teal-600">
                    <button class="absolute right-2 top-2 text-gray-500">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="block md:hidden text-gray-700">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" @click.outside="open = false" class="md:hidden bg-gray-100 border-t border-gray-200">
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-200">Ana Sayfa</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-200">Ürünler</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-200">Hakkımızda</a>
            <a href="#" class="block py-2 px-4 text-gray-700 hover:bg-gray-200">İletişim</a>
        </div>
    </nav>
</header>
