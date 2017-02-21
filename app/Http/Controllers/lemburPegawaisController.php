<?php

namespace App\Http\Controllers;

use Request;
use App\Kategori_lembur;
use App\Pegawai;
use App\Lembur_pegawai;


class lemburPegawaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $lmbpegawai = Lembur_pegawai::all();
        return view('lemburpegawais.index', compact('lmbpegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $katlmb = Kategori_lembur::all();
        $pegawai = Pegawai::all();
        return view('lemburpegawais.create', compact('katlmb', 'pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $lmbpegawai = Request::all();
        Lembur_pegawai::create($lmbpegawai);
        return redirect('lemburpegawai');
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
        //
        $katlmb = Kategori_lembur::all();
        $pegawai = Pegawai::all();
        $lmbpegawai = Lembur_pegawai::find($id);
        return view('lemburpegawais.edit', compact('lmbpegawai', 'katlmb', 'pegawai'));
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
        //
        $lmbpegawaiUpdate = Request::all();
        $lmbpegawai = Lembur_pegawai::find($id);
        $lmbpegawai->update($lmbpegawaiUpdate);
        return redirect('lemburpegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Lembur_pegawai::find($id)->delete();
        return redirect('lemburpegawai');
    }
}
