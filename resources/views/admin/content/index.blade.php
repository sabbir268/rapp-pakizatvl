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
                Table
                <a type="button" href="{{route('content_add',[$slug])}}" class="btn btn-primary pull-right">Add</a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contents as $content)
                        <tr class="odd gradeX">
                            <td>{{$content->title}}</td>
                            <td>{{$content->type}}</td>
                            <td class="center">
                                <a href="{{route('content_edit',[$slug,$content->id])}}" type="button" class="btn btn-outline btn-success">Edit</a>
                                <a href="{{route('content_delete',[$slug,$content->id])}}" type="button" class="btn btn-outline btn-danger">Delete</a>
                            </td>
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