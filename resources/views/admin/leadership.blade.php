@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
                @if(Session::get('l_s'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('l_s') }}.
                    </div>
                   {{ Session::put('l_s',null)}}
                    @endif
            <div class="panel-heading">
                Table
                <a type="button" href="{{URL::to('/add-lead')}}" class="btn btn-primary pull-right">Add</a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($contents as $content)
                        <tr class="odd gradeX">
                            <td>{{$content->name}}</td>
                            <td>{{$content->designation}}</td>
                            <td><img src="{{URL::to($content->image)}}" alt="about image" style="height:70px; width:70px"></td>
                            <td class="center">
                                <a href="{{URL::to('edit/leadership/'.$content->id)}}" type="button" class="btn btn-outline btn-success">Edit</a>
                                <a href="{{URL::to('delete/leadership/'.$content->id)}}" type="button" class="btn btn-outline btn-danger">Delete</a>
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