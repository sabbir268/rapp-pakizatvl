@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            @if(session()->has('alert.message'))
            <div class="alert alert-{{ session('alert.status') }} alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('alert.message') }}.
            </div>
            @endif
            <div class="panel-heading">
                All Queary
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Subject</th>
                            <th>Queary</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quearys as $queary)
                        <tr class="odd gradeX">
                            <td>{{$queary->name}}</td>
                            <td>{{$queary->email}}</td>
                            <td>{{$queary->mobile}}</td>
                            <td>{{$queary->subject}}</td>
                            <td>{{$queary->queary}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection