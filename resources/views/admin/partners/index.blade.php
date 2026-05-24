@extends('layouts.admin')
@section('title', 'Data Partners - Admin')
@section('page_title', 'Data Partners')
@section('page_subtitle', 'Partner yang mendukung platform digital ini.')

@section('content')
<div class="mb-4 text-right">
    <a href="{{ route('admin.partners.create') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">
        + Tambah Partner
    </a>
</div>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4 w-16">No</th>
                    <th class="px-8 py-4">Logo</th>
                    <th class="px-8 py-4">Partner</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                @foreach($partners as $index => $partner)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-8 py-6 font-bold text-slate-400">{{ $index + 1 }}</td>
                        <td class="px-8 py-6">
                            <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}" class="w-16 h-16 rounded-xl object-contain bg-slate-50 border border-slate-100">
                        </td>
                        <td class="px-8 py-6">
                            <p class="font-black text-slate-800">{{ $partner->name }}</p>
                            <p class="text-xs text-slate-400 break-all">{{ $partner->logo_url }}</p>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex gap-2 justify-start">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-slate-50 border border-slate-200 text-slate-600">
                                    Ready
                                </span>
                            </div>
                        </td>
                    </tr>
                @endforeach

                @if($partners->count() === 0)
                    <tr>
                        <td colspan="4" class="px-8 py-10 text-center text-slate-500 font-medium">Belum ada partner.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection

