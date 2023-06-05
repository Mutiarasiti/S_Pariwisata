<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Fasilitas;
use App\Models\penilaian;
use App\Models\TempatWisata;
// use PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Session;

class FasilitasController extends Controller
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
            $data = fasilitas::all();
            return view('fasilitas/fasilitas', compact('data'));
        }
    }
    public function tambah()
    {
        $penilaian = penilaian::all();
        return view('fasilitas/fasilitas-tambah');
    }

    public function insert(Request $request)
    {
        $pemesanan = new fasilitas($request->all());
        $pemesanan->save();
        return redirect()->route('fasilitas');
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
        Fasilitas::create([
            'id_tempatwisata' => $request->id_tempatwisata,
            'nama' => $request->nama,
        ]);
         return redirect("fasilitas");
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
        $fas = Fasilitas::findorfail($id);
        return view('fasilitas.Edit-fasilitas', compact('fas'));
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
        $fas = Fasilitas::findorfail($id);
        $fas->update($request->all());
        return redirect('fasilitas')->with('toast_success','Data Berhasil Update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Fasilitas::find($id);
        $data->delete();
        return redirect("fasilitas")->with("message", "Data berhasil dihapus");
    }

  public function export()
  {
    $fasilitas = Fasilitas::all();
    $pdf = PDF::loadview('fasilitas.export-fasilitas',compact('fasilitas'))->setPaper('a4', 'landscape');
    return $pdf->download('fasilitas.pdf');
  }
}
