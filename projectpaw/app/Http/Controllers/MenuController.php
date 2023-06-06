<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu.index', ['menus' => Menu::orderBy('nama_menu', 'desc')->get()]);
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            'foto_menu' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if ($request->file() != null) $request->request->add(['foto_menu' => $request->file('foto_menu')->store('foto_menu', 'public')]);
        else $request->request->add(['foto_fasilitas' => null]);

        Menu::create($request->post());

        return redirect()->route('menu.index')->with('success', 'Menu has been created successfully.');
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga_menu' => 'required',
            'foto_menu' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->file() != null) $request->request->add(['foto_fasilitas' => $request->file('foto_fasilitas')->store('foto_fasilitas', 'public')]);

        $menu->fill($request->post())->save();

        return redirect()->route('menu.index')->with('success', 'Menu Has Been updated successfully');
    }

    public function destroy(Menu $menu)
    {
        if ($menu->foto_menu != null && Storage::disk('public')->exists($menu->foto_menu)) {
            Storage::disk('public')->delete($menu->foto_menu);
        }
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu has been deleted successfully');
    }
}
