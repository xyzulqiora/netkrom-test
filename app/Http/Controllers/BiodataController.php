<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Tiket;

class BiodataController extends Controller
{

    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {
        $biodata = new Biodata();
        $biodata->nama = $request->input('nama');
        $biodata->alamat = $request->input('alamat');
        $biodata->email = $request->input('email');
        $biodata->no_telp = $request->input('no_telp');

        $biodata->nomor_id = mt_rand(10000000, 99999999);

        $biodata->save();

        $tiket = new Tiket();
        $tiket->nomor_id = $biodata->nomor_id;
        $tiket->status = $request->input('status');

        $nomor_id = $biodata->nomor_id;
        return view('admin.biodata.ticket', compact('nomor_id'));
    }

    public function daftar_pemesan()
    {
        return view('admin.daftar-pemesan.index', [
            'biodata' => Biodata::all(),
        ]);
    }

    public function biodata_edit($id)
    {
        $biodata = Biodata::find($id);
        return view('admin.daftar-pemesan.edit', [
            'biodata' => $biodata,

        ]);
    }

    public function biodata_update($id, Request $request)
    {
        $biodata = Biodata::findOrFail($id);
        $biodata->nama = $request->input('nama');
        $biodata->email = $request->input('email');
        $biodata->alamat = $request->input('alamat');
        $biodata->nomor_id = $request->input('nomor_id');
        $biodata->no_telp   = $request->input('no_telp');
        $biodata->save();
        return redirect()->route('daftar-pemesan')->with('success', 'Data berhasil diperbarui.');;
    }

    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
        return redirect()->route('daftar_pemesan');
    }
}
