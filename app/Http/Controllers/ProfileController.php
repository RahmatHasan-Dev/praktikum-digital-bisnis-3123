<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Tampilkan halaman profil user yang sedang login.
     */
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('home');
        }

        // Ambil data spesifik berdasarkan role
        $reviews = collect();
        $transactions = collect();
        $organizedEvents = collect();

        // Ambil semua review yang ditulis user (berlaku untuk semua role)
        $reviews = Review::with('event')
            ->where('user_id', $user->id)
            ->latest()
            ->get();

        // Ambil transaksi yang dilakukan user
        $transactions = Transaction::with('event')
            ->where('customer_email', $user->email)
            ->latest()
            ->take(5)
            ->get();

        // Ambil events yang diorganisir (untuk organizer)
        if ($user->role === 'organizer') {
            $organizedEvents = $user->organizedEvents()->with('category')->latest()->take(5)->get();
        }

        return view('profil', compact('user', 'reviews', 'transactions', 'organizedEvents'));
    }

    /**
     * Update profil user.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'nullable|string|max:50',
            'kelas' => 'nullable|string|max:50',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:1000',
            'avatar' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'nim', 'kelas', 'tempat_lahir', 'tanggal_lahir', 'phone', 'bio']);

        // Handle upload avatar
        if ($request->hasFile('avatar')) {
            // Hapus avatar lama
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->update($data);

        return redirect()->route('profil')->with('success', 'Profil berhasil diperbarui!');
    }
}