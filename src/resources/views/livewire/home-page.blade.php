<div>

   {{-- HERO --}}
<section class="bg-gradient-to-r from-blue-700 to-blue-500 text-white">

    <div class="max-w-7xl mx-auto px-6 py-24">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- LEFT --}}
            <div>

                <span class="inline-block bg-blue-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    🎾 Platform Booking Lapangan Padel
                </span>

                <h1 class="text-5xl lg:text-6xl font-extrabold leading-tight mb-6">
                    Booking Lapangan
                    <span class="text-yellow-300">
                        Padel
                    </span>
                    Jadi Lebih Mudah
                </h1>

                <p class="text-xl text-blue-100 leading-8 mb-10">

                    CourtFlow membantu Anda melakukan reservasi lapangan
                    secara online dengan cepat, mudah, dan real-time.

                </p>

                <div class="flex gap-4">

                    <a href="{{ route('booking') }}"
                        class="bg-white text-blue-600 px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition">

                        Booking Sekarang

                    </a>

                    <a href="{{ route('courts') }}"
                        class="border-2 border-white px-8 py-4 rounded-xl font-bold hover:bg-white hover:text-blue-600 transition">

                        Lihat Lapangan

                    </a>

                </div>

            </div>

            {{-- RIGHT --}}
            <div>

                <img
                    src="{{ asset('images/hero-padel.jpg') }}"
                    alt="Padel Court"
                    class="rounded-3xl shadow-2xl w-full">

            </div>

        </div>

    </div>

</section>

   <section class="-mt-10 relative z-10">

    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-4 gap-6">

            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-4xl font-bold text-blue-600">500+</h2>
                <p class="text-gray-500 mt-2">Booking</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-4xl font-bold text-blue-600">8</h2>
                <p class="text-gray-500 mt-2">Lapangan</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-4xl font-bold text-blue-600">1000+</h2>
                <p class="text-gray-500 mt-2">Member</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-4xl font-bold text-blue-600">24/7</h2>
                <p class="text-gray-500 mt-2">Support</p>
            </div>

        </div>

    </div>

</section>

{{-- ================= FEATURES ================= --}}
<section class="py-28 bg-slate-50">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="text-center mb-20">

            <span
                class="inline-block bg-blue-100 text-blue-600 px-5 py-2 rounded-full text-sm font-semibold tracking-wide">

                WHY CHOOSE US

            </span>

            <h2 class="mt-6 text-4xl md:text-5xl font-extrabold text-slate-900">

                Kenapa Memilih
                <span class="text-blue-600">
                    CourtFlow?
                </span>

            </h2>

            <p class="mt-6 text-lg text-slate-500 max-w-3xl mx-auto leading-8">

                Kami menghadirkan pengalaman booking lapangan padel yang cepat,
                aman, praktis, dan selalu real-time agar Anda bisa fokus bermain.

            </p>

        </div>

        {{-- Cards --}}
        <div class="grid md:grid-cols-3 gap-8">

            {{-- Card --}}
            <div
                class="group bg-white rounded-3xl p-10 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transition-all duration-300 text-center">

                <div
                    class="mx-auto w-20 h-20 rounded-3xl bg-blue-100 flex items-center justify-center text-5xl group-hover:bg-blue-600 group-hover:text-white transition">

                    ⚡

                </div>

                <h3 class="mt-8 text-2xl font-bold text-slate-900">

                    Booking Cepat

                </h3>

                <p class="mt-5 text-slate-500 leading-8">

                    Proses reservasi lapangan hanya membutuhkan beberapa klik
                    tanpa antre maupun konfirmasi manual.

                </p>

            </div>

            {{-- Card --}}
            <div
                class="group bg-white rounded-3xl p-10 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transition-all duration-300 text-center">

                <div
                    class="mx-auto w-20 h-20 rounded-3xl bg-green-100 flex items-center justify-center text-5xl group-hover:bg-green-500 group-hover:text-white transition">

                    📅

                </div>

                <h3 class="mt-8 text-2xl font-bold text-slate-900">

                    Jadwal Real-Time

                </h3>

                <p class="mt-5 text-slate-500 leading-8">

                    Ketersediaan lapangan selalu diperbarui secara otomatis
                    sehingga tidak terjadi double booking.

                </p>

            </div>

            {{-- Card --}}
            <div
                class="group bg-white rounded-3xl p-10 shadow-lg border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transition-all duration-300 text-center">

                <div
                    class="mx-auto w-20 h-20 rounded-3xl bg-yellow-100 flex items-center justify-center text-5xl group-hover:bg-yellow-400 group-hover:text-white transition">

                    💳

                </div>

                <h3 class="mt-8 text-2xl font-bold text-slate-900">

                    Pembayaran Aman

                </h3>

                <p class="mt-5 text-slate-500 leading-8">

                    Mendukung berbagai metode pembayaran yang aman,
                    praktis, dan mudah digunakan oleh seluruh pelanggan.

                </p>

            </div>

        </div>

    </div>

</section>