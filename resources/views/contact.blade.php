<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Laravel P9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 text-slate-800">

    <!-- Navbar -->
    <nav class="bg-white border-b">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-blue-600">
                Laravel<span class="text-slate-800">P9</span>
            </a>

            <div class="flex gap-6 text-sm font-medium">
                <a href="/" class="text-slate-500 hover:text-blue-600">Home</a>
                <a href="/about" class="text-slate-500 hover:text-blue-600">About</a>
                <a href="/contact" class="text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Contact -->
    <main class="max-w-5xl mx-auto px-6 py-20">

        <div class="text-center mb-12">
            <p class="text-blue-600 font-semibold text-sm mb-3">
                CONTACT
            </p>

            <h1 class="text-4xl font-bold mb-4">
                Mari Terhubung
            </h1>

            <p class="text-slate-500 max-w-xl mx-auto">
                Beberapa informasi yang dapat digunakan untuk
                menghubungi saya.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <!-- Email -->
            <div class="bg-white border rounded-2xl p-8 text-center
                        shadow-sm hover:-translate-y-1 transition">
                <div class="w-14 h-14 mx-auto mb-5 rounded-xl bg-blue-100
                            flex items-center justify-center
                            text-blue-600 text-xl">
                    @
                </div>

                <h2 class="font-bold text-lg mb-2">Email</h2>

                <p class="text-slate-500 text-sm break-all">
                    {{ $email }}
                </p>
            </div>

            <!-- Instagram -->
            <div class="bg-white border rounded-2xl p-8 text-center
                        shadow-sm hover:-translate-y-1 transition">
                <div class="w-14 h-14 mx-auto mb-5 rounded-xl bg-blue-100
                            flex items-center justify-center
                            text-blue-600 text-xl">
                    ◎
                </div>

                <h2 class="font-bold text-lg mb-2">Instagram</h2>

                <p class="text-slate-500 text-sm">
                    {{ $instagram }}
                </p>
            </div>

            <!-- Location -->
            <div class="bg-white border rounded-2xl p-8 text-center
                        shadow-sm hover:-translate-y-1 transition">
                <div class="w-14 h-14 mx-auto mb-5 rounded-xl bg-blue-100
                            flex items-center justify-center
                            text-blue-600 text-xl">
                    +
                </div>

                <h2 class="font-bold text-lg mb-2">Lokasi</h2>

                <p class="text-slate-500 text-sm">
                    {{ $alamat }}
                </p>
            </div>

        </div>

        <div class="mt-10 bg-blue-600 rounded-2xl p-8 text-center text-white">
            <h2 class="text-2xl font-bold mb-2">
                Ada yang ingin ditanyakan?
            </h2>

            <p class="text-blue-100">
                Silakan hubungi saya melalui informasi kontak di atas.
            </p>
        </div>

    </main>

    <footer class="border-t bg-white">
        <div class="max-w-6xl mx-auto px-6 py-6 text-sm text-slate-400 text-center">
            Laravel P9 · Tugas Rutin 9
        </div>
    </footer>

</body>
</html>