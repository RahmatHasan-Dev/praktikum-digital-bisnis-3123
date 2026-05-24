<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil semua kategori untuk filter
        $categories = Category::all();

        // 2. Query dasar event (terdekat / upcoming)
        $query = Event::with('category')
            ->where('date', '>=', now())
            ->orderBy('date', 'asc');

        // 3. Filter berdasarkan kategori (jika ada)
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // 4. Ambil data (batasi biar sesuai "terdekat")
        $events = $query->take(9)->get();

        return view('welcome', compact('events', 'categories'));
    }
}
