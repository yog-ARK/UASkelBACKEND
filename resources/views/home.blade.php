<x-guest-layout>

@if(config('global.layout')==='basic')
    <x-home.slider />
    <x-home.about />
    <x-home.categories />
    <x-home.trending />
    {{-- <x-home.features /> --}}
    <x-home.products />
    <x-home.brands />
    <x-home.branches />
     <div class="relative w-full h-96">
        <iframe class="absolute top-0 left-0 w-full h-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6488954300312!2d106.8480187695166!3d-6.184842766313401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f44f4a2fcecf%3A0xd9b3dcb21e6689ce!2sJl.%20Moh.%20Saleh%201%2C%20Kramat%2C%20Kec.%20Senen%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010450!5e0!3m2!1sid!2sid!4v1719498655767!5m2!1sid!2sid"
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
    </div>
@else
    <x-home.slider />
    <x-home.trending />
    <x-home.about />
    {{-- <x-home.features /> --}}
    <x-home.products />
     <x-home.categories />
    <x-home.brands />
    <div class="relative w-full h-96">
        <iframe class="absolute top-0 left-0 w-full h-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6488954300312!2d106.8480187695166!3d-6.184842766313401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f44f4a2fcecf%3A0xd9b3dcb21e6689ce!2sJl.%20Moh.%20Saleh%201%2C%20Kramat%2C%20Kec.%20Senen%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010450!5e0!3m2!1sid!2sid!4v1719498655767!5m2!1sid!2sid"
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
    </div>
@endif
    <!-- Swiper JS -->
    <script>
        var mainSwiper = new Swiper(".mainSwiper", {
            init: true,
            speed: 3000,
            // direction: 'horizontal',
            // loop: true,
            preloadImages: true,

            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
            slidesPerView: 'auto'
        });
        mainSwiper.autoplay.start();

        var productsSwiper = new Swiper(".productsSwiper", {
            init: true,
            speed: 3000,
            // direction: 'horizontal',
            // loop: true,
            preloadImages: true,

            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
            slidesPerView: 1,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 4,

                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 4,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 4,
                },
            }
        });
        productsSwiper.autoplay.start();
    </script>
</x-guest-layout>
