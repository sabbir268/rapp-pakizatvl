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
                        {{ Form::open(['url' => route('setting_update',[$slug,$about->id]), 'method' => 'post','enctype'=>'multipart/form-data']) }}
                        @if($slug=='we-belive-in')
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>About</label>
                                    <textarea name="about" class="form-control" rows="3" >{{$about->about}}</textarea>
                                    
                                    @if ($errors->has('about'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('about') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Service Excellence</label>
                                    <textarea name="wbi1" class="form-control" rows="3" >{{$about->wbi1}}</textarea>
                                    
                                    @if ($errors->has('wbi1'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('wbi1') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Rights to Know</label>
                                    <textarea name="wbi2" class="form-control" rows="3" >{{$about->wbi2}}</textarea>
                                    
                                    @if ($errors->has('wbi2'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('wbi2') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Hight Quality</label>
                                    <textarea name="wbi3" class="form-control" rows="3" >{{$about->wbi3}}</textarea>
                                    
                                    @if ($errors->has('wbi3'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('wbi3') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Visibility</label>
                                    <textarea name="wbi4" class="form-control" rows="3" >{{$about->wbi4}}</textarea>
                                    
                                    @if ($errors->has('wbi4'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('wbi4') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Value for money</label>
                                    <textarea name="wbi5" class="form-control" rows="3" >{{$about->wbi5}}</textarea>
                                    
                                    @if ($errors->has('wbi5'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('wbi5') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group">
                                    <label>Customer Satisfaction</label>
                                    <textarea name="wbi6" class="form-control" rows="3" >{{$about->wbi6}}</textarea>
                                    
                                    @if ($errors->has('wbi6'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('wbi6') }}
                                    </p>
                                    @endif
                                </div>
                            </div>
                        @elseif($slug=='information')
                            <div class="row">
                            	<div class="col-md-6 form-group">
                                    <label>Mobile</label>
                                    <input name="mobile" class="form-control" value="{{$about->mobile}}">
                                    
                                    @if ($errors->has('mobile'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('mobile') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Email</label>
                                    <input name="email" class="form-control" value="{{$about->email}}">
                                    
                                    @if ($errors->has('email'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('email') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Address</label>
                                    <input name="address" class="form-control" value="{{$about->address}}">
                                    
                                    @if ($errors->has('address'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('address') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Address 2</label>
                                    <input name="address2" class="form-control" value="{{$about->address2}}">
                                    
                                    @if ($errors->has('address2'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('address2') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Address 3</label>
                                    <input name="address3" class="form-control" value="{{$about->address3}}">
                                    
                                    @if ($errors->has('address3'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('address3') }}
                                    </p>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-md-3 form-group">
                                    <label>Facebook</label>
                                    <input name="fb" class="form-control" value="{{$about->fb}}">
                                    
                                    @if ($errors->has('fb'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('fb') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Twitter</label>
                                    <input name="tw" class="form-control" value="{{$about->tw}}">
                                    
                                    @if ($errors->has('tw'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('tw') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Google +</label>
                                    <input name="gl" class="form-control" value="{{$about->gl}}">
                                    
                                    @if ($errors->has('gl'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('gl') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Linkedin</label>
                                    <input name="lin" class="form-control" value="{{$about->lin}}">
                                    
                                    @if ($errors->has('lin'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('lin') }}
                                    </p>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Embed a map</label>
                                    <input name="lng" class="form-control" value="{{$about->lng}}">
                                    
                                    @if ($errors->has('lng'))
                                    <p class="help-block" style="color:red">
                                        {{ $errors->first('lng') }}
                                    </p>
                                    @endif
                                </div>
                                <!--<div class="col-md-3 form-group">-->
                                <!--    <label>Latitude </label>-->
                                <!--    <input name="lat" class="form-control" value="{{$about->lat}}">-->
                                    
                                <!--    @if ($errors->has('lat'))-->
                                <!--    <p class="help-block" style="color:red">-->
                                <!--        {{ $errors->first('lat') }}-->
                                <!--    </p>-->
                                <!--    @endif-->
                                <!--</div>-->
                            </div>
                        @else
                        <div class="row">
                        	 <div class="col-md-12 form-group">
                                <label>Contact Page Image</label>
                                @if($about->contact_image!='')
                                <img src="{{url($about->contact_image)}}" style="width: 100%;">
                                @endif
                                <input name="contact_image" type="file">
                                @if ($errors->has('contact_image'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('contact_image') }}
                                </p>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <label>About Page Image</label>
                                @if($about->about_image!='')
                                <img src="{{url($about->about_image)}}" style="width: 100%;">
                                @endif
                                <input name="about_image" type="file">
                                @if ($errors->has('about_image'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('about_image') }}
                                </p>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Product & Solution Page Image</label>
                                @if($about->product_image!='')
                                <img src="{{url($about->product_image)}}" style="width: 100%;">
                                @endif
                                <input name="product_image" type="file">
                                @if ($errors->has('product_image'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('product_image') }}
                                </p>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Brand's Page Image</label>
                                @if($about->brand_image!='')
                                <img src="{{url($about->brand_image)}}" style="width: 100%;">
                                @endif
                                <input name="brand_image" type="file">
                                @if ($errors->has('brand_image'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('brand_image') }}
                                </p>
                                @endif
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Sister Concern's Page Image</label>
                                @if($about->sister_image!='')
                                <img src="{{url($about->sister_image)}}" style="width: 100%;">
                                @endif
                                <input name="sister_image" type="file">
                                @if ($errors->has('sister_image'))
                                <p class="help-block" style="color:red">
                                    {{ $errors->first('sister_image') }}
                                </p>
                                @endif
                            </div>
                        </div>
                        @endif
                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <a href="{{url('settings',[$slug])}}" type="reset" class="btn btn-default">Reset Button</a>
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