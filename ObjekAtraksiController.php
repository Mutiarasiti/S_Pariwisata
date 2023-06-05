<?php

namespace App\Http\Controllers;

use App\Models\ObjekAtraksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ObjekAtraksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Session::get('logged_in_pegawai')) {
            return redirect('login');
        } else {
            $data = ObjekAtraksi::all();
            return view('objekatraksi/objekatraksi', compact('data'));
        }
    }
    public function tambah()
    {
        return view('objekatraksi/tambah-objekatraksi');
    }

    public function insert(Request $request)
    {
        $objekatraksi = new objekatraksi($request->all());
        $objekatraksi->save();
        return redirect()->route('objekatraksi');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Session::get('logged_in_pegawai')) {
            return redirect('login');
        } else {
            return view('objekatraksi/tambah-objekatraksi');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ObjekAtraksi::create([
            'id_tempatwisata' => $request->id_tempatwisata,
            'nama_objek' => $request->nama_objek,
            'harga_masuk' => $request->harga_masuk,
            'deskripsi' => $request->deskripsi,
        ]);
         return redirect("objek-atraksi");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fas = ObjekAtraksi::findorfail($id);
        return view('objekatraksi.Edit-objekatraksi', compact('fas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fas = ObjekAtraksi::findorfail($id);
        $fas->update($request->all());
        return redirect('objekatraksi')->with('toast_success','Data Berhasil Update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = ObjekAtraksi::find($id);
        $data->delete();
        return redirect("objekatraksi")->with("message", "Data berhasil dihapus");
    }
}