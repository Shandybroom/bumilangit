@extends('layouts/master')

@section('script')
<script>
    $(function () {
        $('#myTable').DataTable()
    })
</script>
@endsection

@section('container')
<div class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">Heroes List :</div>
                    <hr>
                    <p class="text-light">Heroes SPC adalah pasukan/agent khusus yang tersebar di seluruh penjuru dunia dan terlibat dalam penangkapan/pemusnahan monster yang selanjutnya akan di daftarkan sebagai monster spc.</p>
                    <p class="text-light">Class heroes terdiri dari 6 group yaitu mulai dari yang terendah E,D,C,B,A,S dari setiap group class ada rank yang berbeda dari tingkat kemampuan heroes tsb.</p>
                    <p class="text-light">Berbeda dengan group yang lain, class S hanya terdiri dari 12 orang. karena mereka adalah orang - orang terkuat terpilih.</p>
                    <ul
                     class="list-group">
                        <li class="list-group-item list-group-item-success">heroes SPC Terkuat Class S Rank 1 <strong>Khalid Bin Wahid</strong></li>
                    </ul>
                    <br>
                    <a href="{{url('agent/create')}}" type="button" class="btn btn-primary">
                    <i class="fa fa-fw fa-plus"></i>
                    <strong>Add Agent</strong></a>
                </div>
                
                <div class="box-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>No</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Alias</th>
                                <th>Class</th>
                                <th>Rank</th>
                                <th>Skills</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agent as $agents)
                            <tr>
                                <th>
                                    <!-- <a href="" class="badge badge-success">edit</a> -->
                                    <a href="agent/{{$agents->id}}" class="btn btn-primary"><i class="fa fa-fw fa-book"></i> detail</a>
                                </th>
                                <th>{{$loop->iteration}}</th>
                                <th>{{$agents->id}}</th>
                                <th>{{$agents->name}}</th>
                                <th>{{$agents->alias}}</th>
                                <th>{{$agents->class}}</th>
                                <th>{{$agents->rank}}</th>
                                <th>{{$agents->skills}}</th>
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
