@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Balai</h3>
            </div>
        
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama Balai</th>
                            <th>Nama Paket</th>
                            <th>Pagu</th>
                            <th>Output</th>
                            <th>Satuan Output</th>
                            <th>Outcome</th>
                            <th>Satuan Outcome</th>
                            <th>Progres Keuangan</th>
                            <th>Progres Fisik</th>
                            <th>Kode Output</th>
                            <th>Modify</th>
                            
                        </tr>

                    @foreach ($data_paket as $no => $paket)  
                    
                        <tr>
                            {{-- @foreach ($data_paket7 as $paket7) --}}
                                
                            <td>{{++$no}}</td>
                            <td>{{$paket->satker->nmsatker}}</td>
                            <td><a href="#">{{$paket->nmpaket}}</td>
                            <td class="text-right">{{number_format($paket->pagurmp)}}</td>
                            <td>{{number_format($paket->trgoutput)}}</td>
                            <td>{{$paket->tblsatoutputs->nmsatoutput}}</td>
                            <td>{{number_format($paket->trgoutcome)}}</td>
                            <td>{{$paket->satoutcome}}</td>
                            <td>{{$paket->paket7->progres_keu}}</td>
                            <td>{{$paket->paket7->progres_fisik}}</td>
                            <td>{{$paket->kdoutput}}</td>
                            <td>
                                <a href="/paket/{{$paket->id}}/edit">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="/paket/{{$paket->id}}/delete">
                                    <i class="fa fa-trash red" onclick="return confirm('Yakin data mau dihapus')"></i>
                                </a>
                            </td>                            
                            {{-- @endforeach --}}
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                {{$data_paket->links()}}
            </div>
        
        </div>
       
    </div>
    
</div>

@endsection