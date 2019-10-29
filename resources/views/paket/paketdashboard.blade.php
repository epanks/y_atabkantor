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
            {{$paket_dashboard->nmpaket}}
        </h1>  
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <h5 class="text-muted text-center">
            {{$paket_dashboard->satker->nmsatker}}
        </h5>  
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
                        Pagu
                    </a>
                </span>
                <span class="info-box-number">
                    <small>Rp.</small>                                     
                    {{number_format($paket_dashboard->pagurmp)}}
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-dollar-sign"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">
                        Keuangan
                    </a>
                </span>
                <span class="info-box-number">
                    <small>Rp.</small>                                     
                    {{number_format($paket_dashboard->pagurmp)}}
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-chart-line"></i></span>                </br>
            <div class="info-box-content">
                <span class="info-box-text">
                        Progres Keuangan
                    </a>
                </span>
                <span class="info-box-number">
                    {{$paket_dashboard->paket7->progres_keu}}
                    <small>%</small> <br/>                                     
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chart-bar"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">Progres Fisik</a></span>
                <span class="info-box-number">
                        {{$paket_dashboard->paket7->progres_fisik}}
                    <small>%</small>
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-sign-out-alt"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">                
                    Output
                </span>
                <span class="info-box-number">
                        {{$paket_dashboard->trgoutput}}
                    <small>{{$paket_dashboard->tblsatoutput->nmsatoutput}}</small> <br/>                                     
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tint"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">Outcome</a></span>
                <span class="info-box-number">
                        {{$paket_dashboard->trgoutcome}}
                    <small>{{$paket_dashboard->tblsatoutput->nmsatoutput}}</small>
                </span>
            </div>
        </div>
    </div>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Note</h3>
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

                    @foreach ($paket_dashboard as $no => $balai)                      
                        <tr>
                            <td>{{++$no}}</td>
                            <td><a href="#">{{$balai->nmpaket}}</td>
                            <td class="text-right">{{number_format(($balai->pagurmp),0)}}</td>
                            <td>{{number_format(($balai->paket7->progres_keu),2)}}</td>
                            <td>{{number_format(($balai->paket7->progres_fisik),2)}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
                {{$paket_dashboard->links()}}
            </div>        
        </div>       
    </div>    
</div>
</div>

@endsection