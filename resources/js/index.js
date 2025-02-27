document.addEventListener('alpine:init', () => {
    Alpine.data('productPage', () => ({
        category: '',
        categories: ['Fotoğraf Baskı', 'Çerçeve', 'Albüm'],
        products: [{
                id: 1,
                name: 'Fotoğraf Baskı',
                price: 25,
                isDiscounted: true,
                image: 'https://placehold.co/190x160',
                category: 'Fotoğraf Baskı',
                indirimtutar: '%10 İndirim'
            },
            {
                id: 2,
                name: 'Çerçeve',
                price: 50,
                isDiscounted: false,
                image: 'https://placehold.co/190x160',
                category: 'Çerçeve',
                indirimtutar: '%15 İndirim'
            },
            {
                id: 3,
                name: 'Albüm',
                price: 75,
                isDiscounted: true,
                image: 'https://placehold.co/190x160',
                category: 'Albüm',
                indirimtutar: '%25 İndirim'
            },
            {
                id: 4,
                name: 'Anı Defterleri',
                price: 75,
                isDiscounted: true,
                image: 'https://placehold.co/190x160',
                category: 'Albüm',
                indirimtutar: '%12 İndirim'
            },
            {
                id: 5,
                name: 'Anı Defterleri 2',
                price: 75,
                isDiscounted: true,
                image: 'https://placehold.co/190x160',
                category: 'Albüm',
                indirimtutar: '%5 İndirim'
            },
            {
                id: 6,
                name: 'Anı Defterleri 3',
                price: 75,
                isDiscounted: true,
                image: 'https://placehold.co/190x160',
                category: 'Albüm',
                indirimtutar: '%3 İndirim'
            },
            {
                id: 7,
                name: 'Anı Defterleri 4',
                price: 75,
                isDiscounted: true,
                image: 'https://placehold.co/190x160',
                category: 'Albüm',
                indirimtutar: '%11 İndirim'
            },
        ],
        get filteredProducts() {
            return this.category ?
                this.products.filter(product => product.category === this.category) :
                this.products;
        },
    }));
});
