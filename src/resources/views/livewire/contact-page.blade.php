<div class="bg-slate-50 min-h-screen">

    {{-- HERO --}}
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700 py-24">

        <div class="max-w-7xl mx-auto px-6 text-center text-white">

            <span class="uppercase tracking-[4px] text-sm font-semibold">
                Contact Us
            </span>

            <h1 class="mt-4 text-5xl font-extrabold">
                Hubungi Tim CourtFlow
            </h1>

            <p class="mt-6 max-w-2xl mx-auto text-blue-100 text-lg">
                Ada pertanyaan mengenai booking lapangan, pembayaran,
                atau kerja sama bisnis? Tim kami siap membantu.
            </p>

        </div>

    </section>

    {{-- CONTENT --}}
    <section class="py-20">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-2 gap-10">

                {{-- FORM --}}
                <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-8">

                    <h2 class="text-3xl font-bold mb-8">
                        Kirim Pesan
                    </h2>

                    @if (session()->has('success'))
                        <div class="mb-6 rounded-xl bg-green-100 border border-green-300 text-green-700 px-4 py-3">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form wire:submit="save" class="space-y-6">

                        <div>
                            <label class="block mb-2 font-medium">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                wire:model="name"
                                class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Masukkan nama"
                            >

                            @error('name')
                                <span class="text-red-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">
                                Email
                            </label>

                            <input
                                type="email"
                                wire:model="email"
                                class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                placeholder="nama@email.com"
                            >

                            @error('email')
                                <span class="text-red-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">
                                Subjek
                            </label>

                            <input
                                type="text"
                                wire:model="subject"
                                class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Masukkan subjek"
                            >

                            @error('subject')
                                <span class="text-red-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div>
                            <label class="block mb-2 font-medium">
                                Pesan
                            </label>

                            <textarea
                                rows="6"
                                wire:model="message"
                                class="w-full rounded-xl border-slate-300 focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Tulis pesan Anda..."
                            ></textarea>

                            @error('message')
                                <span class="text-red-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl font-semibold transition"
                        >
                            <span wire:loading.remove>
                                Kirim Pesan
                            </span>

                            <span wire:loading>
                                Mengirim...
                            </span>
                        </button>

                    </form>

                </div>

                {{-- INFO --}}
                <div class="space-y-6">

                    <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-8">

                        <h3 class="text-2xl font-bold mb-6">
                            Informasi Kontak
                        </h3>

                        <div class="space-y-5">

                            <div class="flex gap-4">

                                <div class="text-3xl">
                                    📍
                                </div>

                                <div>
                                    <h4 class="font-semibold">
                                        Alamat
                                    </h4>

                                    <p class="text-slate-500">
                                        Tangerang Selatan, Banten
                                    </p>
                                </div>

                            </div>

                            <div class="flex gap-4">

                                <div class="text-3xl">
                                    📞
                                </div>

                                <div>
                                    <h4 class="font-semibold">
                                        Telepon
                                    </h4>

                                    <p class="text-slate-500">
                                        +62 812-3456-7890
                                    </p>
                                </div>

                            </div>

                            <div class="flex gap-4">

                                <div class="text-3xl">
                                    ✉️
                                </div>

                                <div>
                                    <h4 class="font-semibold">
                                        Email
                                    </h4>

                                    <p class="text-slate-500">
                                        courtflow@email.com
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-8">

                        <h3 class="text-2xl font-bold mb-4">
                            Jam Operasional
                        </h3>

                        <div class="space-y-3 text-slate-600">

                            <div class="flex justify-between">
                                <span>Senin - Jumat</span>
                                <span>08:00 - 22:00</span>
                            </div>

                            <div class="flex justify-between">
                                <span>Sabtu</span>
                                <span>07:00 - 23:00</span>
                            </div>

                            <div class="flex justify-between">
                                <span>Minggu</span>
                                <span>07:00 - 23:00</span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>