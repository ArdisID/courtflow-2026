<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CourtFlow</title>

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

</head>

<body class="font-['Plus_Jakarta_Sans'] bg-slate-50 text-slate-800 antialiased">

    {{-- ================= NAVBAR ================= --}}
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-lg border-b border-slate-200 shadow-sm">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex items-center justify-between h-20">

                {{-- Logo --}}
                <a
                    href="{{ route('home') }}"
                    class="text-4xl font-extrabold tracking-tight text-blue-600">

                    CourtFlow

                </a>

                {{-- Menu --}}
                <nav class="hidden md:flex items-center">

                    <ul class="flex items-center space-x-10">

                        <li>
                            <a
                                href="{{ route('home') }}"
                                class="{{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : 'text-slate-600' }} hover:text-blue-600 transition">

                                Home

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('courts') }}"
                                class="{{ request()->routeIs('courts') ? 'text-blue-600 font-semibold' : 'text-slate-600' }} hover:text-blue-600 transition">

                                Courts

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('booking') }}"
                                class="{{ request()->routeIs('booking') ? 'text-blue-600 font-semibold' : 'text-slate-600' }} hover:text-blue-600 transition">

                                Booking

                            </a>
                        </li>

                        <li>
                            <a
                                href="{{ route('contact') }}"
                                class="{{ request()->routeIs('contact') ? 'text-blue-600 font-semibold' : 'text-slate-600' }} hover:text-blue-600 transition">

                                Contact

                            </a>
                        </li>

                    </ul>

                </nav>

                {{-- Button --}}
                <a
                    href="{{ route('booking') }}"
                    class="hidden md:inline-flex items-center justify-center px-7 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold shadow-lg transition">

                    Book Now

                </a>

            </div>

        </div>

    </header>

    {{-- ================= CONTENT ================= --}}
    <main class="pt-20">

        {{ $slot }}

    </main>

    {{-- ================= FOOTER ================= --}}
    <footer class="bg-slate-900 mt-24 text-white">

        <div class="max-w-7xl mx-auto px-6 py-16">

            <div class="grid md:grid-cols-3 gap-12">

                {{-- Brand --}}
                <div>

                    <h2 class="text-3xl font-extrabold">

                        CourtFlow

                    </h2>

                    <p class="mt-5 text-slate-400 leading-8">

                        Platform booking lapangan padel modern yang cepat,
                        aman, dan mudah digunakan.

                    </p>

                </div>

                {{-- Navigation --}}
                <div>

                    <h3 class="font-bold text-xl mb-5">

                        Navigation

                    </h3>

                    <ul class="space-y-3">

                        <li>
                            <a href="{{ route('home') }}"
                                class="text-slate-400 hover:text-white transition">

                                Home

                            </a>
                        </li>

                        <li>
                            <a href="{{ route('courts') }}"
                                class="text-slate-400 hover:text-white transition">

                                Courts

                            </a>
                        </li>

                        <li>
                            <a href="{{ route('booking') }}"
                                class="text-slate-400 hover:text-white transition">

                                Booking

                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contact') }}"
                                class="text-slate-400 hover:text-white transition">

                                Contact

                            </a>
                        </li>

                    </ul>

                </div>

                {{-- Contact --}}
                <div>

                    <h3 class="font-bold text-xl mb-5">

                        Contact

                    </h3>

                    <div class="space-y-3 text-slate-400">

                        <p>📍 Tangerang Selatan</p>

                        <p>📞 +62 812-3456-7890</p>

                        <p>✉️ courtflow@email.com</p>

                    </div>

                </div>

            </div>

            <div class="border-t border-slate-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center gap-5">

                <p class="text-slate-500 text-sm">

                    © {{ date('Y') }} CourtFlow. All Rights Reserved.

                </p>

                <div class="flex items-center space-x-6">

                    <a href="#" class="text-slate-500 hover:text-white transition">
                        Instagram
                    </a>

                    <a href="#" class="text-slate-500 hover:text-white transition">
                        Facebook
                    </a>

                    <a href="#" class="text-slate-500 hover:text-white transition">
                        WhatsApp
                    </a>

                </div>

            </div>

        </div>

    </footer>

    @livewireScripts

</body>

</html>