<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Tblsatoutput;
use App\Satker;
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
        $data_paket=Paket::with('paket7','tblsatoutputs','satker')->paginate(10);
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
        //
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
        $data_paket=Paket::with('paket7','tblsatoutputs','satker')->find($id);
        $dtsatoutput=Tblsatoutput::get();  
        $dtsatker=Satker::get();     
        //dd($data_paket);  
        return view('paket/edit', compact('data_paket','dtsatoutput','dtsatker'));
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
