<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Tblsatoutput;
use App\Satker;
use App\Tblkdoutput;
use App\Paket7;
//use DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_paket=Paket::with('paket7','tblsatoutput','satker','tblkdoutput')->paginate(10);
                   //->get(['id','nmpaket','pagurmp','trgoutput','satoutput','trgoutcome','satoutcome','kdoutput','progres_keu','progres_fisik']);
        //dd($data_paket);
        return view('paket.index',compact('data_paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_paket=Paket::get();
        $dtsatoutput=Tblsatoutput::get();
        $dtkdoutput=Tblkdoutput::get();  
        $dtsatker=Satker::get();
        $dtpaket7=Paket7::get();
        return view('paket.create',compact('dtsatker','dtsatoutput','data_paket','dtkdoutput','dtpaket7'));
        //Paket::create($request->all());
        // return redirect('/paket')->with('sukses', 'Data berhasil diinput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Paket::create($request->all());
        Paket7::create($request->all());
        return redirect('/paket')->with('sukses', 'Data berhasil diinput');
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
        $data_paket=Paket::with('paket7','tblsatoutput','satker','tblkdoutput')->find($id);
        $dtsatoutput=Tblsatoutput::get();
        $dtkdoutput=Tblkdoutput::get();  
        $dtsatker=Satker::get();     
        //dd($data_paket);  
        return view('paket/edit', compact('data_paket','dtsatoutput','dtsatker','dtkdoutput'));
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
        $this->validate($request, [
            'progres_keu' => 'numeric|between:0,100',
            'progres_fisik' => 'numeric|between:0,100'
        ]);
        $data_paket = Paket::with('paket7','tblsatoutput')->find($id);
        $data_paket->update($request->all());
        return redirect('/paket')->with('sukses', 'Data berhasil diupdate');
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
    }
}
