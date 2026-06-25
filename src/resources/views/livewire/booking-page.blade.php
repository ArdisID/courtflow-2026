<div class="bg-slate-50 min-h-screen py-20">

    <div class="max-w-7xl mx-auto px-6">

        {{-- HEADER --}}
        <div class="text-center mb-14">

            <span class="text-blue-600 font-semibold uppercase tracking-[4px] text-sm">
                Booking Court
            </span>

            <h1 class="mt-4 text-5xl font-extrabold text-slate-900">
                Reservasi Lapangan Padel
            </h1>

            <p class="mt-4 text-slate-500 max-w-2xl mx-auto">
                Pilih lapangan favoritmu dan lakukan booking dalam hitungan menit.
            </p>

        </div>

        @if(session('success'))

            <div class="mb-8 bg-green-100 border border-green-300 text-green-700 px-5 py-4 rounded-2xl">
                {{ session('success') }}
            </div>

        @endif

        <div class="grid lg:grid-cols-3 gap-8">

            {{-- FORM --}}
            <div class="lg:col-span-2">

                <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-8">

                    <h2 class="text-2xl font-bold mb-8">
                        Form Booking
                    </h2>

                    <form wire:submit.prevent="save">

                        <div class="grid md:grid-cols-2 gap-6">

                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    wire:model="name"
                                    class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                >
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    wire:model="email"
                                    class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                >
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    No HP
                                </label>

                                <input
                                    type="text"
                                    wire:model="phone"
                                    class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                >
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Lapangan
                                </label>

                                <select
                                    wire:model="court_id"
                                    class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                >
                                    <option value="">
                                        Pilih Lapangan
                                    </option>

                                    @foreach($courts as $court)

                                        <option value="{{ $court->id }}">
                                            {{ $court->name }}
                                        </option>

                                    @endforeach

                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Tanggal Main
                                </label>

                                <input
                                    type="date"
                                    wire:model="booking_date"
                                    class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                >
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Jam Main
                                </label>

                                <input
                                    type="time"
                                    wire:model="start_time"
                                    class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                >
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Durasi (Jam)
                                </label>

                                <input
                                    type="number"
                                    min="1"
                                    wire:model="duration"
                                    class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                >
                            </div>

                        </div>

                        <button
                            type="submit"
                            class="mt-8 w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl font-semibold transition"
                        >
                            Booking Sekarang
                        </button>

                    </form>

                </div>

            </div>

            {{-- SIDEBAR --}}
            <div>

                <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-8 sticky top-24">

                    <h3 class="text-xl font-bold mb-6">
                        Kenapa CourtFlow?
                    </h3>

                    <div class="space-y-5">

                        <div class="flex gap-4">

                            <div class="text-2xl">
                                ⚡
                            </div>

                            <div>
                                <h4 class="font-semibold">
                                    Fast Booking
                                </h4>

                                <p class="text-sm text-slate-500">
                                    Booking hanya beberapa klik.
                                </p>
                            </div>

                        </div>

                        <div class="flex gap-4">

                            <div class="text-2xl">
                                🎾
                            </div>

                            <div>
                                <h4 class="font-semibold">
                                    Premium Court
                                </h4>

                                <p class="text-sm text-slate-500">
                                    Lapangan berkualitas terbaik.
                                </p>
                            </div>

                        </div>

                        <div class="flex gap-4">

                            <div class="text-2xl">
                                🔒
                            </div>

                            <div>
                                <h4 class="font-semibold">
                                    Secure System
                                </h4>

                                <p class="text-sm text-slate-500">
                                    Data booking tersimpan aman.
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="mt-8 pt-6 border-t">

                        <p class="text-sm text-slate-500">
                            Customer Support
                        </p>

                        <p class="font-bold text-lg mt-2">
                            +62 812-3456-7890
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>