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
                    @if(session()->has('alert.message'))
                    <div class="alert alert-{{ session('alert.status') }} alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('alert.message') }}.
                    </div>
                    @endif
                    <div class="col-lg-12">
                        {{ Form::open(['url' => route('content_store',[$slug]), 'method' => 'post','enctype'=>'multipart/form-data']) }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Title</label>
                                    <input name="title" class="form-control" value="{{old('title')}}">
                                    
                                    @if ($errors->has('title'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('title') }}
                                    </p>
                                    @endif
                                </div>
                                @if($slug=='sister-concerns')
                                <div class="col-md-6 form-group">
                                    <label>Web Site Link</label>
                                    <input name="link" class="form-control" value="{{old('link')}}">
                                    @if ($errors->has('link'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('link') }}
                                    </p>
                                    @endif
                                </div>
                                <!-- @elseif($slug=='about')
                                <div class="col-md-6 form-group">
                                    <label>Select Type</label>
                                    <select class="form-control" name="type">
                                        <option value="">Select Type</option>
                                        @if(old('type')==1)
                                        <option value="1" selected>WHY CHOOSE US</option>
                                        @else
                                        <option value="1">WHY CHOOSE US</option>
                                        @endif
                                        @if(old('type')==2)
                                        <option value="2" selected>Corporate Governance</option>
                                        @else
                                        <option value="2">Corporate Governance</option>
                                        @endif
                                        @if(old('type')==3)
                                        <option value="3" selected>Management</option>
                                        @else
                                        <option value="3">Management</option>
                                        @endif
                                        @if(old('type')==4)
                                        <option value="4" selected>Excellence</option>
                                        @else
                                        <option value="4" >Excellence</option>
                                        @endif
                                    </select>
                                    @if ($errors->has('type'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('type') }}
                                    </p>
                                    @endif
                                </div> -->
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Summery</label>
                                <textarea name="summery" class="form-control" rows="3" id="editor_summery">{{old('summery')}}</textarea>
                                @if ($errors->has('summery'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('summery') }}
                                </p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Details</label>
                                <textarea name="details" class="form-control" rows="3" id="editor_details">{{old('details')}}</textarea>
                                @if($errors->has('details'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('details') }}
                                </p>
                                @endif
                            </div>
                            <div class="row">
                            @if($slug=='products' || $slug=='solutions')    
                            <div class="col-md-4 form-group">
                                <label>Slider Image</label>
                                <input name="image" type="file">
                                @if($errors->has('image'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('image') }}
                                </p>
                                @endif
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Thumnail Image</label>
                                <input name="thumnail" type="file">
                                @if ($errors->has('thumnail'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('thumnail') }}
                                </p>
                                @endif
                            </div>
                            @elseif($slug=='services')
                            <div class="col-md-4 form-group">
                                <label>Png Logo Or Thumnail</label>
                                <input name="thumnail" type="file">
                                @if ($errors->has('thumnail'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('thumnail') }}
                                </p>
                                @endif
                            </div>
                            @elseif($slug=='clients' || $slug=='brands')
                            <div class="col-md-4 form-group">
                                <label>Png Logo Or Thumnail</label>
                                <input name="thumnail" type="file">
                                @if ($errors->has('thumnail'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('thumnail') }}
                                </p>
                                @endif
                            </div>
                            @elseif($slug=='sister-concerns' || $slug=='awards' || $slug=='leadership')
                            <div class="col-md-4 form-group">
                                <label>Thumnail Image</label>
                                <input name="thumnail" type="file">
                                @if ($errors->has('thumnail'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('thumnail') }}
                                </p>
                                @endif
                            </div>
                            @endif
                            @if($slug!='about')
                            <div class="col-md-4 form-group">
                                <label>Status</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="status" type="checkbox">Show on Home page
                                    </label>
                                </div>
                            </div>
                            @endif
                            </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <a href="{{url('content_add',[$slug])}}" type="reset" class="btn btn-default">Reset Button</a>
                        {{ Form::close() }}
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