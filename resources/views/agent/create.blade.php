@extends('layouts.master')
@section('script')
<script>
$(function(){
    $('.select2').select2()
})
</script>
@endsection

@section('title','Add Hero')

@section('container')

<div class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <div class="box-tittle"><h3>Tambah Hero</h3></div>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
        </div>
        <div class="box-body">
        <form method="POST" action="{{url('agent')}}" enctype="multipart/form-data">@csrf
        <div class="col-md-12">
        
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-xs-12 {{$errors->has('name') ? 'has-error' : ''}}">
                        <label>Name</label>
                        <div class="form-line">
                            <input id='name' name='name' class="form-control" type="text" placeholder="Agent Name" value="{{old('name')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-xs-12 {{$errors->has('alias') ? 'has-error' : ''}}">
                        <label>Alias</label>            
                        <div class="form-line">
                            <input id='alias' name='alias' class="form-control" type="text" value="{{old('alias')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-3 {{$errors->has('age') ? 'has-error' : ''}}">
                        <label>Age</label>
                        <div class="form-line">
                            <input id='age' name='age' class="form-control" type="number" value="{{old('age')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-4">
                    <label>Class</label>
                        <select class="form-control select2" style="width: 100%;" id="class" name="class">
                            <option value="S">S</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-3 {{$errors->has('rank') ? 'has-error' : ''}}">
                        <label>Rank</label>
                        <div class="form-line">
                            <input id='rank' name='rank' class="form-control" type="number" value="{{old('rank')}}" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group col-xs-12 {{$errors->has('skills') ? 'has-error' : ''}}">
                    <label>Skills</label>            
                    <div class="form-line">
                        <input id='skills' name='skills' class="form-control" type="text" value="{{old('skills')}}" required>
                    </div>
                </div>
                <div class="form-group col-xs-12 {{$errors->has('description') ? 'has-error' : ''}}">
                    <label>Description</label>            
                    <div class="form-line">
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="What the Hell is that!" value="{{old('description')}}" required></textarea>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <label>File Upload</label>            
                    <div class="form-line">
                        <input id='file' name='file' type="file">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="form-group">
                    <div class="col-xs-2 col-xs-offset-4">
                        <a href="{{url('agent')}}" type="button" class="btn btn-warning">
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
    </div>
</div>
@endsection
