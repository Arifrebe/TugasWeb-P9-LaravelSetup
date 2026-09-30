<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-2xl p-10 text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-3">
            Hello, {{ $nama }}!
        </h1>

        <p class="text-gray-600">
            Selamat datang di project Laravel saya.
        </p>

        <a href="/"
           class="inline-block mt-6 bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
            Kembali ke Home
        </a>
    </div>

</body>
</html>