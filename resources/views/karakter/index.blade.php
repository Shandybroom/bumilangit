@extends('layouts/master')

@section('script')
<script>
    $(function () {
        $('#myTable').DataTable()
    })
</script>
@endsection

@section('title','Index')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">Karakter List :</div>
                    <hr>
                    <p class="text-light">1000+ total Karakter yang ada di Jagat Bumi Langit </p>
                    <br>
                    <a href="{{url('karakter/create')}}" type="button" class="btn btn-primary">
                    <i class="fa fa-fw fa-plus"></i>
                    <strong>Tambah Karakter</strong></a>
                </div>
                
                <div class="box-body">
                    <table id="myTable" class="table table-bordered table-striped nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Pict</th>
                                <th>Nama</th>
                                <th>Alias</th>
                                <th>Era</th>
                                <th>Spesies</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($karakter as $krktr)
                            <tr>
                            <th>{{$loop->iteration}}</th>
                                <th>
                                    <!-- <a href="" class="badge badge-success">edit</a> -->
                                    <a href="karakter/{{$krktr->id}}" class="btn btn-primary"><i class="fa fa-fw fa-book"></i> detail</a>
                                </th>
                                <th><img src="/data_file/{{$krktr->avatar}}" alt="image not found" width="30%"></th>
                                <th>{{$krktr->nama}}</th>
                                <th>{{$krktr->alias}}</th>
                                <th>{{$krktr->era}}</th>
                                <th>{{$krktr->spesies}}</th>                                                     
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
