<section class="py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="text-center mb-14">

            <span class="inline-block text-blue-600 font-semibold uppercase tracking-[4px] text-sm">

                Available Courts

            </span>

            <h1 class="mt-4 text-4xl md:text-5xl font-extrabold text-slate-900">

                Daftar Lapangan

            </h1>

            <p class="mt-5 text-lg text-gray-500 max-w-2xl mx-auto leading-8">

                Pilih lapangan favoritmu dan lakukan booking dengan cepat
                melalui CourtFlow.

            </p>

        </div>

        {{-- Grid --}}
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">

            @forelse($courts as $court)

<div class="group bg-white rounded-3xl overflow-hidden border border-slate-200 shadow-md hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">

    {{-- IMAGE --}}
    <div class="relative overflow-hidden">

        @if($court->image)
            <img
                src="{{ asset('storage/'.$court->image) }}"
                alt="{{ $court->name }}"
                class="w-full h-60 object-cover group-hover:scale-110 transition duration-700">
        @else
            <img
                src="{{ asset('images/hero-padel.jpg') }}"
                alt="{{ $court->name }}"
                class="w-full h-60 object-cover group-hover:scale-110 transition duration-700">
        @endif

        <div class="absolute top-4 left-4">

            <span class="bg-white/90 backdrop-blur text-blue-600 px-3 py-1 rounded-full text-xs font-bold shadow">

                Premium

            </span>

        </div>

        <div class="absolute top-4 right-4">

            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">

                Available

            </span>

        </div>

    </div>

    {{-- CONTENT --}}
    <div class="p-6">

        <div class="flex justify-between items-start">

            <div>

                <h3 class="text-2xl font-bold text-slate-900">

                    {{ $court->name }}

                </h3>

                <p class="mt-2 text-gray-500">

                    {{ $court->description }}

                </p>

            </div>

            <div class="text-yellow-500 font-semibold">

                ⭐ 4.9

            </div>

        </div>

        {{-- FACILITIES --}}
        <div class="flex flex-wrap gap-2 mt-6">

            <span class="bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-sm">

                🏟 Indoor

            </span>

            <span class="bg-yellow-50 text-yellow-700 px-3 py-1 rounded-full text-sm">

                💡 LED

            </span>

            <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-sm">

                🚿 Shower

            </span>

        </div>

        {{-- PRICE --}}
        <div class="mt-8 border-t pt-6">

            <p class="text-sm text-gray-400">

                Mulai dari

            </p>

            <div class="flex justify-between items-end mt-2">

                <div>

                    <h4 class="text-3xl font-extrabold text-blue-600">

                        Rp {{ number_format($court->price_per_hour,0,',','.') }}

                    </h4>

                    <span class="text-gray-400 text-sm">

                        / jam

                    </span>

                </div>

            </div>

            <a
               href="{{ route('booking', [
    'court' => $court->id
]) }}"
                class="mt-6 w-full inline-flex justify-center items-center rounded-xl bg-blue-600 hover:bg-blue-700 text-white py-3 font-semibold transition duration-300">

                Booking Sekarang

            </a>

        </div>

    </div>

</div>
            @empty

<div class="col-span-3">

    <div class="bg-white rounded-2xl shadow p-16 text-center">

        <div class="text-6xl mb-5">

            🎾

        </div>

        <h3 class="text-3xl font-bold">

            Belum Ada Lapangan

        </h3>

        <p class="text-gray-500 mt-4">

            Saat ini belum ada lapangan yang tersedia.

        </p>

    </div>

</div>

@endforelse

            </div>

        </div>

    </section>

</div> 