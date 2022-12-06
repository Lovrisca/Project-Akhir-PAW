<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\Facilities;
use App\Models\Menu;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', ['cafes' => Cafe::orderBy('nama_cafe')->get(), 'menus' => Menu::orderBy('nama_menu')->paginate(4), 'facilities' => Facilities::orderBy('nama_fasilitas')->get()]);
    }

    public function all()
    {
        return view('dashboardAll', ['cafes' => Cafe::orderBy('nama_cafe')->get(), 'menus' => Menu::orderBy('nama_menu')->get(), 'facilities' => Facilities::orderBy('nama_fasilitas')->get()]);
    }
}
