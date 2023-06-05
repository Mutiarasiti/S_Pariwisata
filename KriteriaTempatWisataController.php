<?php

namespace App\Http\Controllers;

use App\Models\KriteriaTempatWisata;
use App\Models\TempatWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KriteriaTempatWisataController extends Controller
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
            $data = KriteriaTempatWisata::all();
            return view('kriteriatempatwisata/kriteriatempatwisata', compact('data'));
        }
    }
    public function tambah()
    {
        return view('kriteriatempatwisata/tambah-kriteriatempatwisata');
    }

    public function insert(Request $request)
    {
        $kriteriatempatwisata = new kriteriatempatwisata($request->all());
        $kriteriatempatwisata->save();
        return redirect()->route('kriteriatempatwisata');
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
            return view('kriteriatempatwisata/tambah-kriteriatempatwisata');
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
        KriteriaTempatWisata::create([
            'id_tempatwisata' => $request->id_tempatwisata,
            'nilai' => $request->nilai,
            'deskripsi' => $request->deskripsi,
        ]);
         return redirect("kriteria-tempat-wisata");
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
        $fas = KriteriaTempatWisata::findorfail($id);
        return view('kriteriatempatwisata.Edit-kriteriatempatwisata', compact('fas'));
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
        $fas = KriteriaTempatWisata::findorfail($id);
        $fas->update($request->all());
        return redirect('kriteriatempatwisata')->with('toast_success','Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = KriteriaTempatWisata::find($id);
        $data->delete();
        return redirect("kriteriatempatwisata")->with("message", "Data berhasil dihapus");
    }
}
