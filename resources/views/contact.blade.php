<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - AmikomEventHub</title>
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
            <a href="/profil" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Profil</a>
            <a href="/katalog" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Katalog</a>
            <a href="/bantuan" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Bantuan</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 pb-20">
        <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 p-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-3xl md:text-4xl font-extrabold">Kontak</h1>
                    <p class="mt-2 text-slate-500 font-medium">Hubungi tim AmikomEventHub untuk pertanyaan seputar event dan tiket.</p>
                </div>
                <div class="flex gap-3">
                    <a href="/" class="px-5 py-3 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition">Home</a>
                    <a href="/katalog" class="px-5 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Ke Katalog</a>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 rounded-2xl border border-slate-100 bg-slate-50">
                    <p class="text-xs uppercase tracking-widest font-bold text-slate-500">Email</p>
                    <p class="mt-2 text-lg font-extrabold text-slate-900">admin@amikomeventhub.com</p>
                    <p class="mt-2 text-sm text-slate-600">Tersedia untuk pertanyaan umum.</p>
                </div>

                <div class="p-6 rounded-2xl border border-slate-100 bg-slate-50">
                    <p class="text-xs uppercase tracking-widest font-bold text-slate-500">Telepon</p>
                    <p class="mt-2 text-lg font-extrabold text-slate-900">+62 812 3456 7890</p>
                    <p class="mt-2 text-sm text-slate-600">Senin–Jumat, 09.00–17.00.</p>
                </div>

                <div class="p-6 rounded-2xl border border-slate-100 bg-slate-50 md:col-span-2">
                    <h2 class="text-xl font-extrabold">Form Pesan (Placeholder)</h2>
                    <p class="mt-2 text-slate-600 leading-relaxed">Bagian ini placeholder untuk tugas pertemuan 2. Implementasi formulir dapat menyusul pada modul berikutnya.</p>

                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Nama" class="px-4 py-3 rounded-xl border border-slate-200 bg-white outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 transition" />
                        <input type="email" placeholder="Email" class="px-4 py-3 rounded-xl border border-slate-200 bg-white outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 transition" />
                    </div>

                    <textarea rows="4" placeholder="Pesan" class="mt-4 w-full px-4 py-3 rounded-xl border border-slate-200 bg-white outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 transition"></textarea>

                    <div class="mt-4 flex flex-wrap gap-3">
                        <a href="/bantuan" class="px-6 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Lihat FAQ</a>
                        <button type="button" class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition">Kirim Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>

