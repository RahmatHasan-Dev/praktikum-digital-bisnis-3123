@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<main class="max-w-5xl mx-auto px-6 py-12">

    <div class="flex items-center gap-4 mb-10">
        <div class="w-12 h-12 bg-indigo-100 rounded-2xl flex items-center justify-center text-indigo-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
        </div>
        <div>
            <h1 class="text-3xl font-extrabold text-slate-900">Profil Saya</h1>
            <p class="text-slate-500">Kelola informasi akun dan aktivitas Anda</p>
        </div>
    </div>

    @if(session('success'))
    <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl font-bold text-sm flex items-center gap-3">
        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-2xl font-bold text-sm flex items-center gap-3">
        <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        {{ session('error') }}
    </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-5 gap-8">

        <!-- KOLOM KIRI (2/5) -->
        <div class="md:col-span-2 space-y-6">

            <!-- Kartu Profil -->
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8 text-center">
                <div class="w-28 h-28 rounded-full mx-auto mb-5 overflow-hidden border-4 border-indigo-100 shadow-md">
                    <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}" class="w-full h-full object-cover">
                </div>
                <h2 class="text-2xl font-extrabold text-slate-900">{{ $user->name }}</h2>
                <p class="text-slate-500">{{ $user->email }}</p>
                <div class="mt-3">
                    @if($user->role === 'organizer')
                    <span class="inline-block px-4 py-1.5 bg-indigo-100 text-indigo-700 rounded-full text-xs font-bold uppercase">Penyelenggara</span>
                    @elseif($user->role === 'admin')
                    <span class="inline-block px-4 py-1.5 bg-purple-100 text-purple-700 rounded-full text-xs font-bold uppercase">Admin</span>
                    @else
                    <span class="inline-block px-4 py-1.5 bg-green-100 text-green-700 rounded-full text-xs font-bold uppercase">Pengguna</span>
                    @endif
                </div>

                @if($user->nim)
                <div class="mt-6 p-5 bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl text-left border border-indigo-100">
                    <p class="text-xs font-bold uppercase tracking-wider text-indigo-500 mb-3">Identitas Mahasiswa</p>
                    <div class="space-y-2">
                        <p class="text-sm"><span class="font-bold text-slate-600">NIM:</span> <span class="font-mono font-bold text-indigo-700">{{ $user->nim }}</span></p>
                        @if($user->kelas)
                        <p class="text-sm"><span class="font-bold text-slate-600">Kelas:</span> <span class="font-bold text-indigo-700">{{ $user->kelas }}</span></p>
                        @endif
                    </div>
                </div>
                @endif

                <div class="mt-6 pt-5 border-t border-slate-100 space-y-3 text-left text-sm">
                    @if($user->phone)
                    <div class="flex items-center gap-3 text-slate-600"><span>📱</span><span>{{ $user->phone }}</span></div>
                    @endif
                    @if($user->tempat_lahir && $user->tanggal_lahir)
                    <div class="flex items-center gap-3 text-slate-600"><span>🎂</span><span>{{ $user->tempat_lahir }}, {{ \Carbon\Carbon::parse($user->tanggal_lahir)->format('d M Y') }}</span></div>
                    @endif
                    <div class="flex items-center gap-3 text-slate-600"><span>📅</span><span>Bergabung {{ $user->created_at->format('d M Y') }}</span></div>
                </div>

                @if($user->bio)
                <div class="mt-6 pt-5 border-t border-slate-100 text-left">
                    <p class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Bio</p>
                    <p class="text-slate-600 text-sm leading-relaxed">{{ $user->bio }}</p>
                </div>
                @endif

                <button onclick="document.getElementById('panelEdit').classList.toggle('hidden');window.scrollTo({top:0,behavior:'smooth'})" class="mt-6 w-full py-3.5 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 active:scale-[0.98] transition-all shadow-lg shadow-indigo-200">
                    ✏️ Edit Profil
                </button>
            </div>

            <!-- Riwayat Transaksi -->
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="px-8 py-5 border-b border-slate-100">
                    <h3 class="font-extrabold text-slate-800 flex items-center gap-3">
                        <span class="w-8 h-8 bg-green-50 rounded-xl flex items-center justify-center text-green-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        </span>
                        Riwayat Transaksi
                    </h3>
                </div>
                <div class="p-6 space-y-3">
                    @forelse($transactions->take(5) as $trx)
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-indigo-50 transition">
                        <div class="flex-1 min-w-0 mr-4">
                            <p class="font-bold text-slate-800 truncate">{{ $trx->event->title ?? 'Event' }}</p>
                            <p class="text-xs text-slate-400 truncate">{{ $trx->order_id }}</p>
                            <p class="text-xs text-slate-400 mt-0.5">{{ $trx->created_at->format('d M Y, H:i') }}</p>
                        </div>
                        <div class="text-right flex-shrink-0">
                            <p class="font-black text-indigo-600">Rp{{ number_format($trx->total_price,0,',','.') }}</p>
                            <span class="inline-block mt-1 px-3 py-0.5 rounded-lg text-[10px] font-bold uppercase tracking-wide {{ in_array($trx->status,['success','settlement']) ? 'bg-green-100 text-green-700' : ($trx->status==='pending' ? 'bg-orange-100 text-orange-700' : 'bg-rose-100 text-rose-700') }}">{{ $trx->status === 'success' ? 'Lunas' : ($trx->status === 'pending' ? 'Pending' : $trx->status) }}</span>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-10">
                        <div class="w-14 h-14 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-7 h-7 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                        </div>
                        <p class="text-slate-500 font-medium">Belum ada transaksi</p>
                        <p class="text-xs text-slate-400 mt-1">Pesan tiket event untuk mulai bertransaksi.</p>
                    </div>
                    @endforelse
                </div>
            </div>

        </div>

        <!-- KOLOM KANAN (3/5) -->
        <div class="md:col-span-3 space-y-6">

            <!-- Panel Edit Profil -->
            <div id="panelEdit" class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8 {{ $errors->any() ? '' : 'hidden' }}">
                <div class="flex items-center gap-3 mb-8 pb-5 border-b border-slate-100">
                    <div class="w-10 h-10 bg-indigo-100 rounded-2xl flex items-center justify-center text-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold">Edit Profil</h3>
                        <p class="text-sm text-slate-500">Perbarui informasi akun Anda</p>
                    </div>
                </div>

                <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" value="{{ old('name',$user->name) }}" required class="w-full px-5 py-3.5 bg-slate-50 border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium">
                            @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">NIM</label>
                            <input type="text" name="nim" value="{{ old('nim',$user->nim) }}" class="w-full px-5 py-3.5 bg-slate-50 border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" placeholder="24.12.xxxx">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Kelas</label>
                            <input type="text" name="kelas" value="{{ old('kelas',$user->kelas) }}" class="w-full px-5 py-3.5 bg-slate-50 border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" placeholder="24 S1 SI 01">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">No. Telepon</label>
                            <input type="text" name="phone" value="{{ old('phone',$user->phone) }}" class="w-full px-5 py-3.5 bg-slate-50 border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" placeholder="08xxxxxxx">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir',$user->tempat_lahir) }}" class="w-full px-5 py-3.5 bg-slate-50 border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium" placeholder="Yogyakarta">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir',$user->tanggal_lahir ? \Carbon\Carbon::parse($user->tanggal_lahir)->format('Y-m-d') : '') }}" class="w-full px-5 py-3.5 bg-slate-50 border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium">
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Bio</label>
                        <textarea name="bio" rows="3" class="w-full px-5 py-3.5 bg-slate-50 border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium resize-none" placeholder="Ceritakan tentang diri Anda...">{{ old('bio',$user->bio) }}</textarea>
                    </div>
                    <div class="mb-6">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Foto Profil</label>
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-xl overflow-hidden border border-slate-200 flex-shrink-0">
                                <img src="{{ $user->avatar_url }}" class="w-full h-full object-cover">
                            </div>
                            <input type="file" name="avatar" accept="image/*" class="flex-1 px-5 py-3 bg-slate-50 border-2 border-slate-200 rounded-2xl focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-600 outline-none transition font-medium text-sm file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Format: JPG/PNG. Maks 2MB. Kosongkan jika tidak ingin mengganti.</p>
                    </div>
                    <div class="flex gap-3">
                        <button type="submit" class="flex-1 py-3.5 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 active:scale-[0.98] transition-all shadow-lg shadow-indigo-200">💾 Simpan Perubahan</button>
                        <button type="button" onclick="document.getElementById('panelEdit').classList.add('hidden')" class="px-6 py-3.5 bg-slate-100 text-slate-600 rounded-2xl font-bold hover:bg-slate-200 transition">Batal</button>
                    </div>
                </form>
            </div>

            <!-- Welcome Card -->
            @if(!$errors->any())
            <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-3xl border border-indigo-100 p-8 text-center">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Selamat datang, {{ $user->name }}!</h3>
                <p class="text-slate-500">Klik "Edit Profil" untuk memperbarui data diri Anda.</p>
            </div>
            @endif

            <!-- Ulasan Saya -->
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="px-8 py-5 border-b border-slate-100">
                    <h3 class="font-extrabold text-slate-800 flex items-center gap-3">
                        <span class="w-8 h-8 bg-yellow-50 rounded-xl flex items-center justify-center text-yellow-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                        </span>
                        Ulasan Saya
                    </h3>
                </div>
                <div class="p-6 space-y-4">
                    @forelse($reviews as $review)
                    <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100">
                        <div class="flex items-start justify-between mb-2">
                            <p class="font-bold text-slate-800">{{ $review->event->title ?? 'Event' }}</p>
                            <span class="text-xs text-slate-400 flex-shrink-0 ml-2">{{ $review->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="flex items-center gap-0.5 mb-2">
                            @for($i=1;$i<=5;$i++)
                            <svg class="w-4 h-4 {{ $i<=$review->rating ? 'text-yellow-400' : 'text-slate-200' }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        @if($review->comment)
                        <p class="text-slate-600 text-sm leading-relaxed">{{ $review->comment }}</p>
                        @endif
                    </div>
                    @empty
                    <div class="text-center py-10">
                        <div class="w-14 h-14 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-7 h-7 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                        </div>
                        <p class="text-slate-500 font-medium">Belum ada ulasan</p>
                        <p class="text-xs text-slate-400 mt-1">Berikan rating & review setelah menghadiri event.</p>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Event Saya (khusus Organizer) -->
            @if(isset($organizedEvents) && $organizedEvents->isNotEmpty())
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
                <div class="px-8 py-5 border-b border-slate-100">
                    <h3 class="font-extrabold text-slate-800 flex items-center gap-3">
                        <span class="w-8 h-8 bg-purple-50 rounded-xl flex items-center justify-center text-purple-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </span>
                        Event Saya
                    </h3>
                </div>
                <div class="p-6 space-y-3">
                    @foreach($organizedEvents as $event)
                    <div class="flex items-center justify-between p-4 bg-slate-50 rounded-2xl hover:bg-purple-50 transition">
                        <div class="flex-1 min-w-0 mr-4">
                            <p class="font-bold text-slate-800 truncate">{{ $event->title }}</p>
                            <p class="text-xs text-slate-400 truncate">{{ $event->category->name ?? 'Tanpa Kategori' }}</p>
                            <p class="text-xs text-slate-400 mt-0.5">{{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('d M Y') : 'TBD' }}</p>
                        </div>
                        <div class="text-right flex-shrink-0">
                            <span class="inline-block px-3 py-0.5 rounded-lg text-[10px] font-bold uppercase tracking-wide {{ $event->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-slate-100 text-slate-600' }}">{{ $event->status === 'published' ? 'Publik' : 'Draft' }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>

    </div>

</main>
@endsection

