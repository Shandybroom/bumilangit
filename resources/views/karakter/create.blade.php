@extends('layouts.master')
@section('script')
<script>
$(function(){
    $('.select2').select2()
})
</script>
@endsection

@section('title','Membuat Karakter')

@section('container')

<div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <div class="box-tittle"><h3>Tambah Karakter</h3></div>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <form method="POST" action="{{url('karakter')}}" enctype="multipart/form-data">@csrf
        <div class="box-body">
        <div class="col-md-12">
        
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-xs-12 {{$errors->has('nama') ? 'has-error' : ''}}">
                        <label>Nama</label>
                        <div class="form-line">
                            <input id='nama' name='nama' class="form-control" type="text" placeholder="Nama Karakter" value="{{old('nama')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-xs-12 {{$errors->has('alias') ? 'has-error' : ''}}">
                        <label>Alias</label>            
                        <div class="form-line">
                            <input id='alias' name='alias' class="form-control" type="text" placeholder="Nama Pahlawan" value="{{old('alias')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-xs-4 {{$errors->has('spesies') ? 'has-error' : ''}}">
                        <label>Spesies</label>            
                        <div class="form-line">
                            <input id='spesies' name='spesies' class="form-control" type="text" placeholder="Spesies" value="{{old('spesies')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-4">
                    <label>Era</label>
                        <select class="form-control select2" style="width: 100%;" id="era" name="era">
                            <option value="legenda">Legenda</option>
                            <option value="Jawara">Jawara</option>
                            <option value="patriot">Patriot</option>
                            <option value="revolusi">Revolusi</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group col-xs-12 {{$errors->has('kemampuan') ? 'has-error' : ''}}">
                    <label>Kemampuan</label>            
                    <div class="form-line">
                        <textarea class="form-control" id="kemampuan" name="kemampuan" rows="4" placeholder="Kemampuan" value="{{old('kemampuan')}}" required></textarea>
                    </div>
                </div>
                <div class="form-group col-xs-12 {{$errors->has('deskripsi') ? 'has-error' : ''}}">
                    <label>Deskripsi</label>            
                    <div class="form-line">
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Deskripsi" value="{{old('deskripsi')}}" required></textarea>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <label>File Upload</label>            
                    <div class="form-line">
                        <input id='avatar' name='avatar' type="file">
                    </div>
                </div>
            </div>
            <br>
        </div>
        </div>
        <br>
        <div class="box-footer">
            <div class="row">
                <div class="form-group">
                    <div class="col-xs-2 col-xs-offset-3">
                        <a href="{{url('karakter')}}" type="button" class="btn btn-warning">
                            <i class="fa fa-fw fa-remove"></i>
                            Cancel
                        </a>
                    </div>
                    <div class="col-xs-3">
                        <button class="btn btn-primary" type="submit" value="Submit">
                        <i class="fa fa-fw fa-save"></i> Save Data</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
