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
            {{$wilayah->nmwilayah}}
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
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-building"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text">
                    <a href="/wilayah/{{$wilayah->id}}">
                        Jumlah Balai
                    </a>
                </span>
                <span class="info-box-number">
                    {{$data_balai->count()}}
                    <small>balai</small> <br/>                                     
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-building"></i></span>                </br>
            <div class="info-box-content">
                <span class="info-box-text">
                    <a href="/satker">
                        Jumlah Satker
                    </a>
                </span>
                <span class="info-box-number">
                    {{$data_satker->count()}}
                    <small>satker</small> <br/>                                     
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-2">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>                
            <div class="info-box-content">
                <span class="info-box-text"><a href="/balai">Jumlah Paket</a></span>
                <span class="info-box-number">
                    {{$listpaket->count()}}
                    <small>paket</small>
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
                    {{$data_balai->count()}}
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
                    {{$data_satker->count()}}
                    <small>%</small>
                </span>
            </div>
        </div>
    </div>
<div class="row mt-3">
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
                            <th>Nama Satker</th>
                            <th>Pagu</th>
                            <th>Rencana Keuangan</th>
                            <th>Rencana Fisik</th>
                            <th>Progres Keuangan</th>
                            <th>Progres Fisik</th>
                            <th>Satker ID</th>
                            
                        </tr>

                    @foreach ($wilayahall as $no => $balai)                      
                        <tr>
                            <td>{{++$no}}</td>
                            <td><a href="/balai/{{$balai->id}}/show">{{$balai->nmbalai}}</td>
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
                {{$wilayahall->links()}}
            </div>        
        </div>       
    </div>    
</div>
</div>

@endsection