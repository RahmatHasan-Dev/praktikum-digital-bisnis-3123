@extends('layouts.app')

@section('content')

<main class="max-w-7xl mx-auto px-6 pb-20">
    <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 p-8 mt-10">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold">Katalog Event</h1>
                <p class="mt-2 text-slate-500 font-medium">Daftar semua event dari AmikomEventHub.</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="/" class="px-5 py-3 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition">Lihat Event Terdekat</a>
                <a href="/profil" class="px-5 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Profil</a>
            </div>
        </div>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($events ?? [] as $event)
                <div class="bg-slate-50 rounded-3xl border border-slate-200 p-6 hover:shadow-lg transition-shadow">
                    <img
                        src="{{ $event->poster_url }}"
                        alt="{{ $event->title }}"
                        class="w-full h-36 object-cover rounded-2xl mb-4 bg-slate-100 border border-slate-200">

                    <p class="text-xs uppercase tracking-widest font-bold text-indigo-600">
                        {{ $event->category->name ?? 'Tanpa Kategori' }}
                    </p>

                    <h2 class="mt-3 text-xl font-extrabold">{{ $event->title }}</h2>
                    <p class="mt-2 text-slate-600">{{ \Illuminate\Support\Str::limit($event->description, 110) }}</p>

                    <div class="flex items-center justify-between mt-4 pt-4 border-t">
                        <span class="text-lg font-black text-indigo-600">
                            Rp {{ number_format($event->price, 0, ',', '.') }}
                        </span>
                        <a href="{{ url('event/' . $event->id) }}"
                            class="px-4 py-2 rounded-xl bg-indigo-50 text-indigo-700 font-bold hover:bg-indigo-600 hover:text-white transition inline-block">
                            Detail
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 bg-slate-50 rounded-3xl border border-slate-200 p-10 text-center">
                    <p class="font-bold text-slate-700">Belum ada event yang tersedia.</p>
                    <p class="text-slate-500 mt-2">Silakan buat event lewat menu admin.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-10 flex flex-wrap gap-3">
            <a href="/profil" class="px-6 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Profil</a>
            <a href="/bantuan" class="px-6 py-3 rounded-xl bg-white border border-slate-200 text-slate-800 font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Bantuan</a>
            <a href="/" class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition">Home</a>
        </div>
    </div>
</main>

@endsection

