@extends('admin.layout')
@section('content')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Content Add Form
            </div>
            <div class="panel-body">
                <div class="row">
                    @if(Session::get('cat'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('cat') }}.
                    </div>
                   {{ Session::put('cat',null)}}
                    @endif
                    <div class="col-lg-12">
                        <form action="{{url('/save/category')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                
                              
                                <div class="col-md-6 form-group">
                                    <label>Category name</label>
                                    <input name="c_name" class="form-control" required="">
                                    @if ($errors->has('link'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('link') }}
                                    </p>
                                    @endif
                                </div>
                                
                                
                            </div>
                           
                            <div class="row">
                            
                            
                           
        
                           
                            <div class="col-md-4 form-group">
                                <label>Publication status</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="status" type="checkbox" value="1">Show on Home page
                                    </label>
                                </div>
                            </div>
                           
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <a href="#" type="reset" class="btn btn-default">Reset</a>
                       </form>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection