<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Praktikan - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-900">

    <nav class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between">
        <a href="/" class="flex items-center gap-3">
            <span class="w-10 h-10 bg-indigo-600 text-white rounded-xl flex items-center justify-center font-bold">AH</span>
            <span class="text-xl font-extrabold tracking-tight">AmikomEventHub</span>
        </a>
        <div class="flex items-center gap-3">
            <a href="/" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Home</a>
            <a href="/katalog" class="px-4 py-2 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100 hover:bg-indigo-100 transition font-semibold">Katalog</a>
            <a href="/bantuan" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Bantuan</a>
            <a href="/kontak" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Kontak</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 pb-20">
        <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 p-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h1 class="text-3xl md:text-4xl font-extrabold">Profil Praktikan</h1>
                    <p class="mt-2 text-slate-500 font-medium">Identitas dan ringkasan singkat.</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-600 flex items-center justify-center text-white font-bold text-xl">RN</div>
                    <div>
                        <p class="text-sm uppercase tracking-widest font-bold text-indigo-600">Digital Business</p>
                        <p class="font-extrabold text-slate-900">Pertemuan 2–6</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="p-5 rounded-2xl border border-slate-100 bg-slate-50">
                    <p class="text-xs uppercase tracking-widest font-bold text-slate-500">Nama</p>
                    <p class="mt-2 font-bold text-slate-900 text-lg">Rahmat Nur Hasan</p>
                </div>
                <div class="p-5 rounded-2xl border border-slate-100 bg-slate-50">
                    <p class="text-xs uppercase tracking-widest font-bold text-slate-500">NIM</p>
                    <p class="mt-2 font-bold text-slate-900 text-lg">24.12.3123</p>
                </div>
            </div>

            <div class="mt-6 p-6 rounded-2xl border border-slate-100 bg-white">
                <h2 class="text-xl font-extrabold">Deskripsi Singkat</h2>
                <p class="mt-2 text-slate-600 leading-relaxed">
                    Saya mengerjakan praktikum Digital Bisnis menggunakan Laravel (PHP 8.2.12) dengan implementasi:
                    routing, controller, Blade layout, Tailwind via CDN, migration & seeding, CRUD admin, serta filter berbasis relasi Eloquent.
                </p>
            </div>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="/katalog" class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition">Lihat Katalog Event</a>
                <a href="/bantuan" class="px-6 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Baca FAQ</a>
                <a href="/" class="px-6 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Kembali ke Home</a>
            </div>
        </div>
    </main>

</body>
</html>

