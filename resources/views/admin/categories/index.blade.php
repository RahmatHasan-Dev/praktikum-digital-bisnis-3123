@extends('layouts.admin')

@section('title', 'Manajemen Kategori - Admin')
@section('page_title', 'Manajemen Kategori')
@section('page_subtitle', 'Kelola daftar kategori event dan tombol aksi (Tambah/Edit/Hapus).')

@section('content')
<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="p-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h2 class="text-2xl font-extrabold">Daftar Kategori</h2>
                <p class="text-slate-500 mt-2 font-medium">UI sederhana (belum terhubung database) sesuai instruksi modul.</p>
            </div>

            <div class="flex gap-3">
                <a href="#" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-100">+ Tambah</a>
                <a href="#" class="inline-block px-6 py-3 bg-white border border-slate-200 text-slate-800 rounded-2xl font-bold hover:border-indigo-400 hover:text-indigo-600 transition">Refresh</a>
            </div>
        </div>

        <div class="mt-8 bg-slate-50/50 border border-slate-100 rounded-3xl p-6">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-[10px] uppercase tracking-widest text-slate-400 font-black">
                            <th class="px-4 py-4 w-16">No</th>
                            <th class="px-4 py-4">Nama Kategori</th>
                            <th class="px-4 py-4">Slug</th>
                            <th class="px-4 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y border-t">
                        @php
                            $items = [
                                ['name'=>'Seminar', 'slug'=>'seminar'],
                                ['name'=>'Konser', 'slug'=>'konser'],
                                ['name'=>'Workshop', 'slug'=>'workshop'],
                            ];
                        @endphp

                        @foreach($items as $idx => $item)
                            <tr class="hover:bg-slate-50/70 transition">
                                <td class="px-4 py-5 font-bold text-slate-400">{{ $idx + 1 }}</td>
                                <td class="px-4 py-5">
                                    <p class="font-extrabold text-slate-900">{{ $item['name'] }}</p>
                                </td>
                                <td class="px-4 py-5">
                                    <span class="inline-block px-3 py-1 rounded-xl bg-white border border-slate-200 text-slate-600 text-sm font-bold">{{ $item['slug'] }}</span>
                                </td>
                                <td class="px-4 py-5 text-center">
                                    <div class="inline-flex gap-2">
                                        <a href="#" class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition" aria-label="Edit">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form action="#" method="POST" onsubmit="return confirm('Hapus kategori ini?');">
                                            @csrf
                                            <button type="submit" class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition" aria-label="Hapus">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6 text-sm text-slate-500">
                Catatan: Tombol aksi hanya untuk UI (belum terhubung CRUD database sesuai instruksi).
            </div>
        </div>
    </div>
</div>
@endsection

