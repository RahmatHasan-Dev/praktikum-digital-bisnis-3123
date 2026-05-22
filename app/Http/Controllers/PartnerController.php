<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = \App\Models\Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'logo_url' => 'required|string|max:1024',
        ]);

        \App\Models\Partner::create($data);

        return redirect()->route('admin.partners.index')->with('success', 'Data partner berhasil ditambahkan.');
    }
}
