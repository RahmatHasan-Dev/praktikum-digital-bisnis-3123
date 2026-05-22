<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan - AmikomEventHub</title>
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
            <a href="/katalog" class="px-4 py-2 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100 hover:bg-indigo-100 transition font-semibold">Katalog</a>
            <a href="/bantuan" class="px-4 py-2 rounded-xl bg-indigo-50 text-indigo-600 border border-indigo-100 hover:bg-indigo-100 transition font-semibold">Bantuan</a>
            <a href="/kontak" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Kontak</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 pb-20">
        <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 p-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-3xl md:text-4xl font-extrabold">FAQ / Bantuan</h1>
                    <p class="mt-2 text-slate-500 font-medium">Jawaban singkat untuk pertanyaan paling umum.</p>
                </div>
                <div class="flex gap-3">
                    <a href="/katalog" class="px-5 py-3 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition">Ke Katalog</a>
                    <a href="/" class="px-5 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Home</a>
                </div>
            </div>

            <div class="mt-8 space-y-4">
                <details class="group rounded-2xl border border-slate-100 bg-slate-50 p-5 hover:border-indigo-200 transition">
                    <summary class="cursor-pointer font-bold text-slate-800">Bagaimana cara memesan tiket?</summary>
                    <p class="mt-3 text-slate-600 leading-relaxed">Pilih event di katalog, lalu ikuti alur checkout hingga mendapatkan tiket digital.</p>
                </details>

                <details class="group rounded-2xl border border-slate-100 bg-slate-50 p-5 hover:border-indigo-200 transition">
                    <summary class="cursor-pointer font-bold text-slate-800">Apakah pembayaran aman?</summary>
                    <p class="mt-3 text-slate-600 leading-relaxed">Ya. Pembayaran diproses melalui gateway pembayaran (sesuai implementasi di materi aplikasi).</p>
                </details>

                <details class="group rounded-2xl border border-slate-100 bg-slate-50 p-5 hover:border-indigo-200 transition">
                    <summary class="cursor-pointer font-bold text-slate-800">Kapan tiket dikirim?</summary>
                    <p class="mt-3 text-slate-600 leading-relaxed">Tiket akan tersedia setelah transaksi statusnya berhasil/terkonfirmasi.</p>
                </details>

                <details class="group rounded-2xl border border-slate-100 bg-slate-50 p-5 hover:border-indigo-200 transition">
                    <summary class="cursor-pointer font-bold text-slate-800">Bagaimana jika event sudah penuh?</summary>
                    <p class="mt-3 text-slate-600 leading-relaxed">Jika stok habis, event bisa tidak tersedia. Silakan pilih event lain sesuai kategori.</p>
                </details>
            </div>

            <div class="mt-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-t border-slate-100 pt-6">
                <p class="text-slate-500 font-medium">Masih bingung? Silakan hubungi kami.</p>
                <div class="flex gap-3 flex-wrap">
                    <a href="/kontak" class="px-5 py-3 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition">Kontak</a>
                    <a href="/profil" class="px-5 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Profil</a>
                    <a href="/katalog" class="px-5 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Katalog</a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>

