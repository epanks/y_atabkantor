<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balai;
use App\Wilayah;
use App\Satker;
use App\Paket;
use App\Paket7;
use DB;

class BalaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_balai = Balai::paginate(16);
        return view('balai.index', compact('data_balai'));
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
        $show_balai=Balai::find($id);
        $show_satker=$show_balai->satker;
        $data_paket=$show_balai->paket;
        //$data_progres=($data_paket) ? $data_paket->paket7:'progres_keu';
        //dd($data_progres);
        return view ('balai.show',compact('show_balai','show_satker','data_paket'));
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


    public function wilayah($id)
    {
        $wilayah=Wilayah::find($id);
        $data_balai = Wilayah::find($id)->balai;
        //$balaipaket = $data_balai->paket;
        $data_satker = Wilayah::find($id)->satker;
        $listpaket =Wilayah::find($id)->paket; 
        //dd($datapaket);
        return view('balai.wilayah', compact('wilayah','data_balai','data_satker','listpaket'));
    }
}
