@extends('layouts.master')

@section('content')
<h1>Edit data paket</h1>
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif
<div class="row mt-5">
    <div class="col-lg-12">
        <form action="/paket/{{$data_paket->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group{{$errors->has('satker') ? 'has-error' : ''}}">
                    <label for="satker">Select Satuan Output</label>
                    <select name="satker" id="satker" class="form-control">
                        @foreach ($dtsatker as $output)
                            <option value="{{$output->kdsatker}}" @if($output->kdsatker == $data_paket->kdsatker) selected @endif>{{$output->nmsatker}}</option>                            
                        @endforeach
                    </select>                
                </div>
            <div class="form-group">
                <label for="nmpaket">Nama Paket</label>
                <input name="nmpaket" type="text" class="form-control" id="nmpaket" placeholder="Nama Paket" value="{{$data_paket->nmpaket}}">
            </div>
            <div class="form-group">
                <label for="pagurmp">Pagu</label>
                <input name="pagurmp" type="number" step="any" class="form-control" id="pagurmp" placeholder="Pagu" value="{{$data_paket->pagurmp}}">
            </div>
            <div class="form-group{{$errors->has('trgoutput') ? 'has-error' : ''}}">
                <label for="trgoutput">Output</label>
                <input name="trgoutput" type="number" step="any" class="form-control" id="trgoutput" placeholder="Output" value="{{$data_paket->trgoutput}}">
                @if($errors->has('trgoutput'))
                    <span class="help-block">{{$errors->first('trgoutput')}}</span>
                @endif
            </div>
            <div class="form-group{{$errors->has('satoutput') ? 'has-error' : ''}}">
                <label for="satoutput">Select Satuan Output</label>
                <select name="satoutput" id="satoutput" class="form-control">
                    @foreach ($dtsatoutput as $output)
                        <option value="{{$output->satoutput}}" @if($output->satoutput == $data_paket->satoutput) selected @endif>{{$output->nmsatoutput}}</option>                            
                    @endforeach
                </select>                
            </div>
            <div class="form-group{{$errors->has('trgoutcome') ? 'has-error' : ''}}">
                <label for="trgoutcome">Penyerapan trgoutcome</label>
                <input name="trgoutcome" type="number" step="any" class="form-control" id="trgoutcome" placeholder="Outcome" value="{{$data_paket->trgoutcome}}">
                @if($errors->has('trgoutcome'))
                    <span class="help-block">{{$errors->first('trgoutcome')}}</span>
                @endif
            </div>
            <div class="form-group{{$errors->has('satoutcome') ? 'has-error' : ''}}">
                <label for="satoutcome">Select Satuan Outcome</label>
                <select name="satoutput" id="satoutput" class="form-control">                        
                    <option value="lt/dt">Liter/detik</option>
                    <option value="ha">Hektar</option>
                    <option value="apalagi">Apalagi ya</option>
                </select>     
            </div>
            <div class="form-group{{$errors->has('progres_keu') ? 'has-error' : ''}}">
                <label for="progres_keu">Progres Keuangan</label>
                <input name="progres_keu" type="number" step="any" class="form-control" id="progres_keu" placeholder="Progres Keuangan" value="{{$data_paket->paket7->progres_keu}}">
                @if($errors->has('progres_keu'))
                    <span class="help-block">{{$errors->first('progres_keu')}}</span>
                @endif
            </div>
            <div class="form-group{{$errors->has('progres_fisik') ? 'has-error' : ''}}">
                <label for="progres_fisik">Progres Fisik</label>
                <input name="progres_fisik" type="number" step="any" class="form-control" id="progres_fisik" placeholder="Progres Fisik" value="{{$data_paket->paket7->progres_fisik}}">
                @if($errors->has('progres_fisik'))
                    <span class="help-block">{{$errors->first('progres_fisik')}}</span>
                @endif
            </div>
            <label class="form-group">
                <label for="ta">Tahun</label>
                <input name="ta" type="number" class="form-control" id="ta" placeholder="Progres Fisik" value="{{$data_paket->TahunFisik}}">
            </label>  
            <div class="modal-footer">                
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </form> 
    </div>  
</div>

@endsection