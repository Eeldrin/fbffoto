@extends('layouts.app')

@section('content')
    @include('inc.header')

    <div class="min-h-screen bg-gray-100" x-data="productPage">
        <!-- Sayfa Başlığı -->
        <header class="bg-white shadow p-6">
            <h1 class="text-3xl font-semibold text-gray-800">Ürünler</h1>
            <p class="text-gray-600">En kaliteli fotoğraf baskı ürünlerini keşfedin.</p>
        </header>

        <!-- Kategoriler -->
        <div class="bg-white p-4 shadow mt-4">
            <div class="flex overflow-x-auto space-x-4 justify-center">
                <button
                    class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded text-sm font-medium text-gray-800 whitespace-nowrap"
                    @click="category = ''">
                    Tüm Ürünler
                </button>
                <template x-for="cat in categories" :key="cat">
                    <button
                        class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded text-sm font-medium text-gray-800 whitespace-nowrap"
                        @click="category = cat" x-text="cat">
                    </button>
                </template>
            </div>
        </div>

        <!-- Ürünler -->
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-6 gap-6 p-6 justify-center">
                <template x-for="product in filteredProducts" :key="product.id">
                    <div class="bg-white rounded shadow p-4 flex flex-col">
                        <div class="relative">
                            <img :src="product.image" :alt="product.name" class="rounded w-full h-40 object-cover">
                            <template x-if="product.isDiscounted">
                                <span
                                    class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-md"
                                    x-text="product.indirimtutar"></span>
                            </template>
                        </div>
                        <h3 class="text-xl font-extrabold text-gray-800 mt-4" x-text="product.name"></h3>
                        <p class="text-lg font-medium text-teal-600 mt-2" x-text="product.price + ' TL'"></p>
                    </div>
                </template>
            </div>
        </div>
        </template>
    </div>
    </div>

    @include('inc.footer')
@endsection
