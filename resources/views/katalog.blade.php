<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog - AmikomEventHub</title>
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
            <a href="/profil" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Profil</a>
            <a href="/bantuan" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Bantuan</a>
            <a href="/kontak" class="px-4 py-2 rounded-xl bg-white border border-slate-200 hover:border-indigo-400 hover:text-indigo-600 transition font-semibold">Kontak</a>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 pb-20">
        <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 p-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                <div>
                    <h1 class="text-3xl md:text-4xl font-extrabold">Katalog Event</h1>
                    <p class="mt-2 text-slate-500 font-medium">Placeholder daftar event AmikomEventHub.</p>
                </div>
                <div class="flex items-center gap-3">
                    <a href="/" class="px-5 py-3 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition">Lihat Event Terdekat</a>
                    <a href="/profil" class="px-5 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Profil</a>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-slate-50 rounded-3xl border border-slate-200 p-6 hover:shadow-lg transition-shadow">
                    <img src="https://placehold.co/300x200?text=Seminar" alt="Seminar" class="w-full h-36 object-cover rounded-2xl mb-4 bg-slate-100 border border-slate-200">
                    <p class="text-xs uppercase tracking-widest font-bold text-indigo-600">Seminar</p>
                    <h2 class="mt-3 text-xl font-extrabold">UI/UX Masterclass</h2>
                    <p class="mt-2 text-slate-600">Belajar desain interface dan pengalaman pengguna secara praktis.</p>
                    <a href="/" class="mt-4 inline-block px-4 py-2 rounded-xl bg-indigo-50 text-indigo-700 font-bold hover:bg-indigo-600 hover:text-white transition">Detail (Placeholder)</a>
                </div>

                <div class="bg-slate-50 rounded-3xl border border-slate-200 p-6 hover:shadow-lg transition-shadow">
                    <img src="https://placehold.co/300x200?text=Workshop" alt="Workshop" class="w-full h-36 object-cover rounded-2xl mb-4 bg-slate-100 border border-slate-200">
                    <p class="text-xs uppercase tracking-widest font-bold text-indigo-600">Workshop</p>
                    <h2 class="mt-3 text-xl font-extrabold">Workshop Laravel</h2>
                    <p class="mt-2 text-slate-600">Build aplikasi CRUD & relasi Eloquent dalam sesi latihan.</p>
                    <a href="/" class="mt-4 inline-block px-4 py-2 rounded-xl bg-indigo-50 text-indigo-700 font-bold hover:bg-indigo-600 hover:text-white transition">Detail (Placeholder)</a>
                </div>

                <div class="bg-slate-50 rounded-3xl border border-slate-200 p-6 hover:shadow-lg transition-shadow">
                    <img src="https://placehold.co/300x200?text=Konser" alt="Konser" class="w-full h-36 object-cover rounded-2xl mb-4 bg-slate-100 border border-slate-200">
                    <p class="text-xs uppercase tracking-widest font-bold text-indigo-600">Konser</p>
                    <h2 class="mt-3 text-xl font-extrabold">Jazz Night 2025</h2>
                    <p class="mt-2 text-slate-600">Nikmati malam dengan alunan jazz yang menenangkan.</p>
                    <a href="/" class="mt-4 inline-block px-4 py-2 rounded-xl bg-indigo-50 text-indigo-700 font-bold hover:bg-indigo-600 hover:text-white transition">Detail (Placeholder)</a>
                </div>

                <div class="bg-slate-50 rounded-3xl border border-slate-200 p-6 hover:shadow-lg transition-shadow">
                    <img src="https://placehold.co/300x200?text=E-Sport" alt="E-Sport" class="w-full h-36 object-cover rounded-2xl mb-4 bg-slate-100 border border-slate-200">
                    <p class="text-xs uppercase tracking-widest font-bold text-indigo-600">E-Sport</p>
                    <h2 class="mt-3 text-xl font-extrabold">E-Sport U-Champ</h2>
                    <p class="mt-2 text-slate-600">Kompetisi game antar tim dengan sistem bracket.</p>
                    <a href="/" class="mt-4 inline-block px-4 py-2 rounded-xl bg-indigo-50 text-indigo-700 font-bold hover:bg-indigo-600 hover:text-white transition">Detail (Placeholder)</a>
                </div>

                <div class="bg-slate-50 rounded-3xl border border-slate-200 p-6 hover:shadow-lg transition-shadow">
                    <img src="https://placehold.co/300x200?text=Teknologi" alt="Teknologi" class="w-full h-36 object-cover rounded-2xl mb-4 bg-slate-100 border border-slate-200">
                    <p class="text-xs uppercase tracking-widest font-bold text-indigo-600">Teknologi</p>
                    <h2 class="mt-3 text-xl font-extrabold">AI & Future Tech Summit</h2>
                    <p class="mt-2 text-slate-600">Diskusi tren AI dan teknologi masa depan.</p>
                    <a href="/" class="mt-4 inline-block px-4 py-2 rounded-xl bg-indigo-50 text-indigo-700 font-bold hover:bg-indigo-600 hover:text-white transition">Detail (Placeholder)</a>
                </div>

                <div class="bg-slate-50 rounded-3xl border border-slate-200 p-6 hover:shadow-lg transition-shadow">
                    <img src="https://placehold.co/300x200?text=Entertaiment" alt="Entertaiment" class="w-full h-36 object-cover rounded-2xl mb-4 bg-slate-100 border border-slate-200">
                    <p class="text-xs uppercase tracking-widest font-bold text-indigo-600">Talkshow</p>
                    <h2 class="mt-3 text-xl font-extrabold">Entertaiment Night</h2>
                    <p class="mt-2 text-slate-600">Sesi hiburan dan networking untuk peserta.</p>
                    <a href="/" class="mt-4 inline-block px-4 py-2 rounded-xl bg-indigo-50 text-indigo-700 font-bold hover:bg-indigo-600 hover:text-white transition">Detail (Placeholder)</a>
                </div>
            </div>


            <div class="mt-10 flex flex-wrap gap-3">
                <a href="/profil" class="px-6 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Profil</a>
                <a href="/bantuan" class="px-6 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Bantuan</a>
                <a href="/" class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition">Home</a>
            </div>
        </div>
    </main>

</body>
</html>

