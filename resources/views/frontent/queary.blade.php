@extends('frontent.layout')
@section('title')
@section('header')
	@include('frontent.menu2')
@stop
@section('content')
<section class="contact-form section-main section-padding section" id="contact" style="margin-top:40px;">
		<div class="container">
			<div class="section-heading text-center m-b-xxs-60 m-b-md-80">
				<h2 class="wow fadeInUpSmall">Send Your Query hare</h2>
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
									<textarea class="mdl-textfield__input" name="query" placeholder="Your query"></textarea>
									@if ($errors->has('query'))
	                                <p class="help-block" style="color:red">
	                                    {{ $errors->first('query') }}
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
	</section>
@stop
@section('styles')
@stop
@section('scripts')
@stop