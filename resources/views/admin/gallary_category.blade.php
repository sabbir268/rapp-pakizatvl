@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
                  @if(Session::get('g_c'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('g_c') }}.
                    </div>
                   {{ Session::put('g_c',null)}}
                    @endif
            <div class="panel-heading">
                Table
                <a type="button" href="{{URL::to('/add/category')}}" class="btn btn-primary pull-right">Add</a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contents as $content)
                        <tr class="odd gradeX">
                            <td>{{$content->category}}</td>
                            <td>{{$content->status}}</td>
                            
                            <td class="center">
                                <a href="{{URL::to('edit/category/'.$content->id)}}" type="button" class="btn btn-outline btn-success">Edit</a>
                                <a href="{{URL::to('delete/category/'.$content->id)}}" type="button" class="btn btn-outline btn-danger">Delete</a>
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