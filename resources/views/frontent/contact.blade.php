@extends('frontent.layout')
@section('title')
@section('header')
	@include('frontent.menu2')
@stop
@section('content')
	<div class="container" style="margin-top: 107px;">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="map-holder pt160 pb160">
					    <?php echo $WeBeliveIn->lng?>
					    
			          <!--<iframe src="http://maps.google.com/maps?q={{$WeBeliveIn->lng}},{{$WeBeliveIn->lat}}&z=15&output=embed" style="width: 100%;height: 500px;"></iframe>-->
			      </div>
				</div>
				<div class="col-md-6">
					<div class="section-heading text-center m-b-xxs-60 m-b-md-80">
								<h2 class="wow fadeInUpSmall">Send Your Queary hare</h2>
								<h3 class="wow fadeInUpSmall" data-wow-delay=".15s">Ready to keep in touch with me for amazing things?.</h3>
								@if(session()->has('alert.message'))
					            <div class="alert alert-{{ session('alert.status') }} alert-dismissable">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                {{ session('alert.message') }}.
					            </div>
					            @endif
							</div>

							<div class="row">

								<div class="col-sm-12 col-md-8 col-md-offset-2">
									 {{ Form::open(['url' => route('query_store'), 'method' => 'post','enctype'=>'multipart/form-data','class'=>'personx-form-valid wow fadeInUpSmall']) }}
										<div class="row">
											<div class="col-sm-4">
												<div class="mdl-textfield mdl-js-textfield m-b-xxs-15 m-b-sm-0">
													<input class="mdl-textfield__input" name="name" placeholder="Your Name" type="text">
													@if ($errors->has('name'))
					                                <p class="help-block" style="color:red">
					                                    {{ $errors->first('name') }}
					                                </p>
					                                @endif
												</div>
											</div>
											<div class="col-sm-4">
												<div class="mdl-textfield mdl-js-textfield m-b-xxs-15 m-b-sm-0">
													<input class="mdl-textfield__input" name="email" placeholder="Your Email" type="email">
													@if ($errors->has('email'))
					                                <p class="help-block" style="color:red">
					                                    {{ $errors->first('email') }}
					                                </p>
					                                @endif
												</div>
											</div>
											<div class="col-sm-4">
												<div class="mdl-textfield mdl-js-textfield">
													<input class="mdl-textfield__input" name="subject" placeholder="Subject" type="text">
													@if ($errors->has('subject'))
					                                <p class="help-block" style="color:red">
					                                    {{ $errors->first('subject') }}
					                                </p>
					                                @endif
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="mdl-textfield mdl-textfield--textarea mdl-js-textfield">
													<textarea class="mdl-textfield__input" name="queary" placeholder="Your queary"></textarea>
													@if ($errors->has('queary'))
					                                <p class="help-block" style="color:red">
					                                    {{ $errors->first('queary') }}
					                                </p>
					                                @endif
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="text-center m-t-xxs-30 m-t-md-60">
													<button class="mdl-button mdl-button--large mdl-js-button mdl-js-ripple-effect" disabled="disabled">Submit</button>
												</div>
											</div>
										</div>
									{{ Form::close() }}
								</div>
							</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			
		</div>
	</div>
	<div class="container" style="margin-top: 10px">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					
				</div>
				<div class="col-md-6">
					<h3 class="heading-text-color">Contact <strong>Details</strong></h3>
	                <ul class="list-unstyled list-contact">
	                	@if($WeBeliveIn->mobile)
                        <li><i class="zmdi zmdi-phone" style="padding: 10px; font-size: 15px;"></i>{{$WeBeliveIn->mobile}}</li>
                        @endif
                        @if($WeBeliveIn->email)
                        <li><i class="zmdi zmdi-email" style="padding: 10px; font-size: 15px;"></i>{{$WeBeliveIn->email}}</li>
                        @endif
                        @if($WeBeliveIn->address)
                        <li><i class="zmdi zmdi-pin" style="padding: 10px; font-size: 15px;"></i>{{$WeBeliveIn->address}}</li>
                        @endif
                        @if($WeBeliveIn->address2)
                        <li><i class="zmdi zmdi-pin" style="padding: 10px; font-size: 15px;"></i>{{$WeBeliveIn->address2}}</li>
                        @endif
                        @if($WeBeliveIn->address3)
                        <li><i class="zmdi zmdi-pin" style="padding: 10px; font-size: 15px;"></i>{{$WeBeliveIn->address3}}</li>
                        @endif
	                </ul>
				</div>
			</div>
		</div>
	</div>
@stop
@section('styles')
@stop
@section('scripts')
@stop