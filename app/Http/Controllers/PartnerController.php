<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        $query = \App\Models\Partner::query()->orderByDesc('id');

        if ($request->filled('search')) {
            $search = $request->string('search')->trim();
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $partners = $query->paginate(10)->withQueryString();

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

    public function edit(\App\Models\Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, \App\Models\Partner $partner)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'logo_url' => 'required|string|max:1024',
        ]);

        $partner->update($data);

        return redirect()->route('admin.partners.index')->with('success', 'Data partner berhasil diperbarui.');
    }

    public function destroy(\App\Models\Partner $partner)
    {
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Data partner berhasil dihapus.');
    }
}
