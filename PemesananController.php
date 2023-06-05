<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\PDF;
class PemesananController extends Controller
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
            $data = Pemesanan::all();
            return view('pemesanan/pemesanan', compact('data'));
        }
    }
    public function tambah()
    {
        return view('pemesanan/tambah-pemesanan');
    }

    public function insert(Request $request)
    {
        $pemesanan = new pemesanan($request->all());
        $pemesanan->save();
        return redirect()->route('pemesanan');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pemesanan::create([
            'id_objek_atraksi' => $request->id_objek_atraksi,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgl_pemesanan' => $request->tgl_pemesanan,
        ]);
         return redirect("pemesanan");
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
        $fas = Pemesanan::findorfail($id);
        return view('pemesanan.Edit-pemesanan', compact('fas'));
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
        $fas = Pemesanan::findorfail($id);
        $fas->update($request->all());
        return redirect('pemesanan')->with('toast_success','Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Pemesanan::find($id);
        $data->delete();
        return redirect("pemesanan")->with("message", "Data berhasil dihapus");
    }

 public function export()
  {
    $pemesanan = Pemesanan::all();
    $pdf = PDF::loadview('pemesanan.export-pemesanan',compact('pemesanan'))->setPaper('a4', 'landscape');
    return $pdf->download('pemesanan.pdf');
  }
}