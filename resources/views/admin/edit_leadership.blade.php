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
                    @if(Session::get('lead'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('lead') }}.
                    </div>
                   {{ Session::put('lead',null)}}
                    @endif
                    <div class="col-lg-12">
                        <form action="{{url('/update/leadership',$contents->id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                              <div class="col-md-6 form-group">
                                    <label>Name</label>
                                    <input name="name" class="form-control" value="{{$contents->name}}" required="">
                                    
                                    @if ($errors->has('title'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('title') }}
                                    </p>
                                    @endif
                                </div>
                              
                                <div class="col-md-6 form-group">
                                    <label>Designation</label>
                                    <input name="designation" class="form-control" value="{{$contents->designation}}"required="">
                                    @if ($errors->has('link'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('link') }}
                                    </p>
                                    @endif
                                </div>
                                
                                
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3" id="editor_summery" required="">
                                {{$contents->description}}
                                </textarea>
                                @if ($errors->has('summery'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('summery') }}
                                </p>
                                @endif
                            </div>
                            
                            <div class="row">
                            
                            
                            <div class="col-md-4 form-group">
                                <label>Image</label>
                                <input name="image" type="file" required="" >
                                @if ($errors->has('thumnail'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('thumnail') }}
                                </p>
                                @endif
                            </div>
                           
        
                           
                            <div class="col-md-4 form-group">
                                <label>Publication status</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="status" type="checkbox" value="1">Show on Home page
                                    </label>
                                </div>
                            </div>
                           
                            </div>
                            <button type="submit" class="btn btn-default">update</button>
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