<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function show(\App\Models\Event $event)
    {
        // relasi kategori dipakai di view
        $event->load('category');
        return view('event-detail', compact('event'));
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function ticket()
    {
        return view('ticket');
    }
}
