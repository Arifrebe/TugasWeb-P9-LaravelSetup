<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laravel P9</title>
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
                <a href="/" class="text-blue-600">Home</a>
                <a href="/about" class="text-slate-500 hover:text-blue-600">About</a>
                <a href="/contact" class="text-slate-500 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <main class="max-w-6xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>
                <p class="text-blue-600 font-semibold mb-3">
                    TUGAS RUTIN 9
                </p>

                <h1 class="text-5xl font-bold leading-tight mb-6">
                    Belajar Laravel
                    <span class="text-blue-600">dari Dasar.</span>
                </h1>

                <p class="text-slate-500 text-lg leading-relaxed mb-8">
                    Website sederhana ini dibuat untuk mempraktikkan
                    routing, Blade View, data dinamis, dan struktur dasar
                    Laravel.
                </p>

                <div class="flex gap-4">
                    <a href="/about"
                       class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700">
                        Tentang Saya
                    </a>

                    <a href="/contact"
                       class="border border-slate-300 px-6 py-3 rounded-lg font-medium hover:bg-white">
                        Hubungi Saya
                    </a>
                </div>
            </div>

            <!-- Data Card -->
            <div class="bg-white rounded-2xl shadow-sm border p-8">
                <p class="text-sm text-slate-400 mb-6">
                    DATA MAHASISWA
                </p>

                <div class="space-y-5">
                    <div>
                        <p class="text-sm text-slate-400">Nama</p>
                        <p class="text-xl font-semibold">{{ $nama }}</p>
                    </div>

                    <div class="border-t pt-5">
                        <p class="text-sm text-slate-400">Program Studi</p>
                        <p class="text-xl font-semibold">{{ $prodi }}</p>
                    </div>

                    <div class="border-t pt-5">
                        <p class="text-sm text-slate-400">Semester</p>
                        <p class="text-xl font-semibold">{{ $semester }}</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="border-t bg-white">
        <div class="max-w-6xl mx-auto px-6 py-6 text-sm text-slate-400 text-center">
            Laravel P9 · Tugas Rutin 9
        </div>
    </footer>

</body>
</html>