<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'date',
        'location',
        'price',
        'stock',
        'poster_path',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function getPosterUrlAttribute()
    {
        // 1) Jika poster_path ada dan file tersimpan di disk "public" (storage/app/public/...)
        if ($this->poster_path) {
            if (Storage::disk('public')->exists($this->poster_path)) {
                return asset('storage/' . $this->poster_path);
            }

            // 2) Fallback jika path ternyata menunjuk ke lokasi public/...
            if (file_exists(public_path($this->poster_path))) {
                return asset($this->poster_path);
            }
        }

        // 3) Wajib ada gambar untuk publik.
        // Kita HARUS ambil dari lokasi yang bisa di-serve langsung oleh web:
        //   public/storage/posters/event-*.png
        // (karena di Windows/symlink kadang /storage tidak ter-serve sempurna).
        $posterDir  = public_path('storage/posters');
        $candidates = [
            'event-1.png',
            'event-2.png',
            'event-3.png',
        ];

        // Deterministic pick berdasarkan id agar tidak lompat-lompat
        $idx = 0;
        if ($this->id) {
            $idx = $this->id % count($candidates);
        }

        for ($i = 0; $i < count($candidates); $i++) {
            $candidate = $candidates[($idx + $i) % count($candidates)];
            $fullPath  = $posterDir . DIRECTORY_SEPARATOR . $candidate;

            if (file_exists($fullPath)) {
                return asset('storage/posters/' . $candidate);
            }
        }

        // Terakhir: placehold
        return 'https://placehold.co/200x600';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
