<?php

namespace App\Http\Controllers;

use App\Models\JenisTempatWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JenisTempatWisataController extends Controller
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
            $data = JenisTempatWisata::all();
            return view('jenistempatwisata/jenistempatwisata', compact('data'));
        }
    }
    public function tambah()
    {
        return view('jenistempatwisata/tambah-jenistempatwisata');
    }

    public function insert(Request $request)
    {
        $jenistempatwisata = new jenistempatwisata($request->all());
        $jenistempatwisata->save();
        return redirect()->route('jenistempatwisata');
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
            return view('jenistempatwisata/tambah-jenistempatwisata');
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
        JenisTempatWisata::create([
            'id_kriteriatempatwisata' => $request->id_kriteriatempatwisata,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);
         return redirect("jenis-tempat-wisata");
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
        $fas = JenisTempatWisata::findorfail($id);
        return view('jenistempatwisata.Edit-jenistempatwisata', compact('fas'));
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
        $fas = JenisTempatWisata::findorfail($id);
        $fas->update($request->all());
        return redirect('jenistempatwisata')->with('toast_success','Data Berhasil Update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = JenisTempatWisata::find($id);
        $data->delete();
        return redirect("jenistempatwisata")->with("message", "Data berhasil dihapus");
    }
}