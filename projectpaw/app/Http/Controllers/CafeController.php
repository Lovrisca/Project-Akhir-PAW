<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CafeController extends Controller
{
    public function index()
    {
        return view('cafe.index', ['cafes' => Cafe::orderBy('nama_cafe', 'desc')->get()]);
    }

    public function create()
    {
        return view('cafe.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_cafe' => 'required',
            'no_telepon' => 'required',
            'definisi_cafe' => 'required',
            'alamat_cafe' => 'required',
            'foto_cafe' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if ($request->file() != null) $request->request->add(['foto_cafe' => $request->file('foto_cafe')->store('foto_cafe', 'public')]);
        else $request->request->add(['foto_cafe' => null]);

        Cafe::create($request->post());

        return redirect()->route('cafe.index')->with('success', 'Cafe has been created successfully.');
    }

    public function edit(Cafe $cafe)
    {
        return view('cafe.edit', compact('cafe'));
    }

    public function update(Request $request, Cafe $cafe)
    {
        $request->validate([
            'nama_cafe' => 'required',
            'no_telepon' => 'required',
            'definisi_cafe' => 'required',
            'alamat_cafe' => 'required',
            'foto_cafe' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // if ($cafe->foto_cafe != null && Storage::disk('public')->exists($cafe->foto_cafe)) Storage::disk('public')->delete($cafe->foto_cafe);
        if ($request->file() != null) $request->request->add(['foto_cafe' => $request->file('foto_cafe')->store('foto_cafe', 'public')]);

        $cafe->fill($request->post())->save();

        return redirect()->route('cafe.index')->with('success', 'Cafe Has Been updated successfully');
    }

    public function destroy(Cafe $cafe)
    {
        if ($cafe->foto_cafe != null && Storage::disk('public')->exists($cafe->foto_cafe)) {
            Storage::disk('public')->delete($cafe->foto_cafe);
        }
        $cafe->delete();
        return redirect()->route('cafe.index')->with('success', 'Cafe has been deleted successfully');
    }
}
