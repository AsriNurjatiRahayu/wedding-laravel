<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WoOnly;

class WoOnlyController extends Controller
{
    public function woonly()
    {
        $wo = WoOnly::all();
        return view('admin.woonly', compact('wo'));
    }

    public function tambahwo()
    {
        return view('admin.tambahwo');
    }

    public function aksi_tambah(Request $request)
    {
        $wo = new WoOnly();
        $wo->nama_layanan = $request->nama_layanan;
        $wo->harga = $request->harga;
        $wo->peralatan_pengantin = $request->peralatan_pengantin;
        $wo->fasilitas = $request->fasilitas;
        $wo->save();

        return redirect('/woonly');
    }

    public function editwo($id)
    {
        $wo = WoOnly::find($id);
        return view('admin.editwo', compact('wo'));
    }

    public function aksi_edit(Request $request, $id)
    {
        $wo = WoOnly::find($id);
        $wo->nama_layanan = $request->nama_layanan;
        $wo->harga = $request->harga;
        $wo->peralatan_pengantin = $request->peralatan_pengantin;
        $wo->fasilitas = $request->fasilitas;
        $wo->save();

        return redirect('/woonly');
    }

    public function hapuswo($id)
    {
        $wo = WoOnly::find($id);
        $wo->delete();

        return redirect('/woonly');
    }
}
