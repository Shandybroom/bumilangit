@extends('layouts.master')
@section('script')
<script>

</script>
@endsection

@section('title','Detail')

@section('container')

<div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3><strong>{{$karakter->nama}}</strong></h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="card-text"><i><strong>{{$karakter->alias}}</strong><i></p>
                    <hr>
                    <p class="card-text">Era : {{$karakter->era}}</p>
                    <p class="card-text">Spesies : {{$karakter->spesies}}</p>
                    <p class="card-text">Kekuatan/Kemampuan : {{$karakter->kemampuan}}</p>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('/data_file/'.$karakter->avatar)}}" class="card-img-top" alt="No Image Available" height="250">
                </div>
            </div>
        </div>
        <div class="box-body align-center">
            <h4>DESCRIPTION</h4>
            <hr>
            <p class="card-text">{{$karakter->deskripsi}}</p>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="form-group">
                    <a href="{{url('karakter')}}" type="button" class="btn btn-warning">
                        <i class="fa fa-fw fa-mail-reply"></i>
                        Go Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection