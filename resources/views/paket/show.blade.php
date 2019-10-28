@extends('layouts.master')

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<div class="row mt-3">
    <img class="profile-user-img img-responsive text-center" src="/img/logopu.jpg" alt="User profile picture">  
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <h1 class="profile-username text-center">
            {{$data_paket->nmsatker}}
        </h1>  
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <p class="text-muted text-center">Pusat Air Tanah dan Air Baku</p>
    </div>
</div>
<div class="row mt-2">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-dollar-sign"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">
                    <a href="">
                        Jumlah Pagu
                    </a>
                </span>
                <span class="info-box-number">
                    <small>Rp.</small>                                   
                    {{number_format($data_paket->paket->sum('pagurmp'))}}
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-list"></i></span>                </br>
            <div class="info-box-content">
                <span class="info-box-text">
                    <a href="#">
                        Jumlah Paket
                    </a>
                </span>
                <span class="info-box-number">
                    {{$data_paket->paket->count()}}
                    <small>paket</small>                                  
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chart-line"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text"><a href="#">Progres Keuangan</a></span>
                <span class="info-box-number">
                    {{$data_paket->paket->count()}}
                    <small>%</small>
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-bar"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">                
                    Progres Fisik
                </span>
                <span class="info-box-number">
                    {{$data_paket->paket->count()}}
                    <small>%</small>                                 
                </span>
            </div>
        </div>
    </div>
    {{-- <div class="col-12 col-sm-6 col-md-2">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chart-bar"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">Progres Fisik</a></span>
                <span class="info-box-number">
                    {{$data_satker->count()}}
                    <small>%</small>
                </span>
            </div>
        </div>
    </div> --}}
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Paket</h3>
            </div>        
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>No</th>                            
                            <th>Nama Paket</th>
                            <th>Pagu</th>
                            <th>Output</th>
                            <th>Satuan Output</th>
                            <th>Outcome</th>
                            <th>Satuan Outcome</th>
                            <th>Progres Keuangan</th>
                            <th>Progres Fisik</th>
                            <th>Modify</th>
                            
                        </tr>

                    @foreach ($data_paket->paket as $no => $paket)                      
                        <tr>
                            <td>{{++$no}}</td>
                            <td><a href="#">{{$paket->nmpaket}}</td>
                            <td class="text-right">{{number_format(($paket->pagurmp),2)}}</td>
                            <td class="text-right">{{number_format(($paket->trgoutput),2)}}</td>
                            <td>{{$paket->satoutput}}</td>
                            <td class="text-right">{{number_format(($paket->trgoutcome),2)}}</td>
                            <td>{{$paket->satoutcome}}</td>
                            <td>%</td>
                            <td>%</td>
                            <td>
                                <a href="/paket/{{$paket->id}}/edit">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="/paket/{{$paket->id}}/delete">
                                    <i class="fa fa-trash red" onclick="return confirm('Yakin data mau dihapus')"></i>
                                </a>
                            </td>   

                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
                
            </div>
        
        </div>
       
    </div>
    
</div>

@endsection