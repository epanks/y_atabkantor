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
            {{$show_satker->nmsatker}}
        </h1>  
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <p class="text-muted text-center">Pusat Air Tanah dan Air Baku</p>
    </div>
</div>
<div class="row mt-2">    
    <div class="col-12 col-sm-6 col-md-2">
        <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-list"></i></span>                </br>
            <div class="info-box-content">
                <span class="info-box-text">
                    <a href="#">
                        Jumlah Paket
                    </a>
                </span>
                <span class="info-box-number">
                    {{$show_paket->count()}}
                    <small>paket</small> <br/>                                     
                </span>
            </div>
        </div>
    </div>
   
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chart-line"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">                
                    Progres Keuangan
                </span>
                <span class="info-box-number">
                    {{$show_paket->count()}}
                    <small>%</small> <br/>                                     
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chart-bar"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">Progres Fisik</a></span>
                <span class="info-box-number">
                    {{$show_paket->count()}}
                    <small>%</small>
                </span>
            </div>
        </div>
    </div>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Satker</h3>
            </div>        
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama Satker</th>
                            <th>Pagu</th>
                            <th>Rencana Keuangan</th>
                            <th>Rencana Fisik</th>
                            <th>Progres Keuangan</th>
                            <th>Progres Fisik</th>
                            <th>Satker ID</th>
                            
                        </tr>

                    @foreach ($show_paket as $no => $paket)                      
                        <tr>
                            <td>{{++$no}}</td>
                            <td><a href="/paketdashboard/{{$paket->id}}">{{$paket->nmpaket}}</td>
                            <td class="text-right">{{number_format(($paket->pagurmp),0)}}</td>
                            <td>{{number_format(($paket->paket7->progres_keu),2)}}</td>
                            <td>{{number_format(($paket->paket7->progres_fisik),2)}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
                {{-- {{$show_paket->links()}} --}}
            </div>        
        </div>       
    </div>    
</div>
</div>

@endsection