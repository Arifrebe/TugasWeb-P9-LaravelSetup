<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Laravel P9</title>
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
                <a href="/about" class="text-blue-600">About</a>
                <a href="/contact" class="text-slate-500 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- About -->
    <main class="max-w-5xl mx-auto px-6 py-20">

        <div class="mb-12">
            <p class="text-blue-600 font-semibold text-sm mb-3">
                ABOUT ME
            </p>

            <h1 class="text-4xl font-bold mb-4">
                Mengenal Saya Lebih Dekat
            </h1>

            <p class="text-slate-500 max-w-2xl leading-relaxed">
                Halaman ini menampilkan data mahasiswa yang dikirim
                secara dinamis dari Route Laravel ke Blade View.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <!-- Profile -->
            <div class="md:col-span-2 bg-white border rounded-2xl p-8 shadow-sm">
                <div class="flex items-center gap-5 mb-8">
                    <div class="w-16 h-16 rounded-full bg-blue-100
                                flex items-center justify-center
                                text-blue-600 text-2xl font-bold">
                        {{ substr($nama, 0, 1) }}
                    </div>

                    <div>
                        <h2 class="text-2xl font-bold">{{ $nama }}</h2>
                        <p class="text-slate-500">{{ $prodi }}</p>
                    </div>
                </div>

                <p class="text-slate-500 leading-relaxed">
                    Saya merupakan mahasiswa {{ $prodi }} di
                    {{ $kampus }}. Halaman ini dibuat sebagai bagian
                    dari latihan dasar pengembangan aplikasi menggunakan
                    framework Laravel.
                </p>
            </div>

            <!-- Information -->
            <div class="bg-blue-600 text-white rounded-2xl p-8">
                <p class="text-blue-200 text-sm mb-6">
                    INFORMASI
                </p>

                <div class="space-y-6">
                    <div>
                        <p class="text-blue-200 text-sm">Nama</p>
                        <p class="font-semibold text-lg">{{ $nama }}</p>
                    </div>

                    <div>
                        <p class="text-blue-200 text-sm">Program Studi</p>
                        <p class="font-semibold text-lg">{{ $prodi }}</p>
                    </div>

                    <div>
                        <p class="text-blue-200 text-sm">Kampus</p>
                        <p class="font-semibold text-lg">{{ $kampus }}</p>
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
