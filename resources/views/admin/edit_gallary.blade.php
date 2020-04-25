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
                    @if(Session::get('gallary'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('gallary') }}.
                    </div>
                   {{ Session::put('gallary',null)}}
                    @endif
                    <div class="col-lg-12">
                        <form action="{{url('/update/gallary',$content->id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                
                              
                                <div class="col-md-6 form-group">
                                    <label>Category</label>
                                    <select  name="category_id" class="form-control" required="">
                                  <option >Select category</option>
                                  <?php
                                    $all_category = DB::table('gallary_category')
                                                ->get();
                                    foreach($all_category as $c){?>
									<option value="{{$c->id}}">{{ $c->category}}</option>
                                    <?php } ?>
								  </select>
                                </div>
                                
                                
                            </div>
                           
                            <div class="row">
                            
                            
                            <div class="col-md-4 form-group">
                                <label>Image</label>
                                <input name="image" type="file">
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