<?php

namespace App\Http\Controllers;

use App\Models\Facilities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilitiesController extends Controller
{
    public function index()
    {
        return view('facilities.index', ['facilities' => Facilities::orderBy('nama_fasilitas', 'desc')->get()]);
    }

    public function create()
    {
        return view('facilities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'foto_fasilitas' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if ($request->file() != null) $request->request->add(['foto_fasilitas' => $request->file('foto_fasilitas')->store('foto_fasilitas', 'public')]);
        else $request->request->add(['foto_fasilitas' => null]);
        Facilities::create($request->post());

        return redirect()->route('facilities.index')->with('success', 'Facilities has been created successfully.');
    }

    public function edit(Facilities $facility)
    {
        return view('facilities.edit', ['facilities' => $facility]);
    }

    public function update(Request $request, Facilities $facility)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'foto_fasilitas' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->file() != null) $request->request->add(['foto_fasilitas' => $request->file('foto_fasilitas')->store('foto_fasilitas', 'public')]);

        $facility->fill($request->post())->save();

        return redirect()->route('facilities.index')->with('success', 'Facilities Has Been updated successfully');
    }

    public function destroy(Facilities $facility)
    {
        if ($facility->foto_fasilitas != null && Storage::disk('public')->exists($facility->foto_fasilitas)) {
            Storage::disk('public')->delete($facility->foto_fasilitas);
        }
        $facility->delete();
        return redirect()->route('facilities.index')->with('success', 'Facilities has been deleted successfully');
    }
}
