@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-md-7">
		@include('flash::message')
		@include('partials.errors')
		<div class="box box-info">
			<div class="box-header">
			  <h3 class="box-title">{{ __('Create Project') }}
			    <small>{{ __('Share your project to the world') }}</small>
			  </h3>
			  <!-- tools box -->
			  <div class="pull-right box-tools">
			    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
			            title="Collapse">
			      <i class="fa fa-minus"></i></button>
			    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
			            title="Remove">
			      <i class="fa fa-times"></i></button>
			  </div>
			  <!-- /. tools -->
			</div>
			<!-- /.box-header -->
			<div class="box-body pad">
			  <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
			  	@csrf
			  	<div class="form-group">
                  <label for="title">{{ __('Title') }}</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ old('title') }}">
                </div>
		        <div class="form-group">
				  <label for="description">{{ __('Description') }}</label>
				  <textarea class="form-control" id="description" name="description" rows="10" cols="80">
		        	@if(old('description'))
		        		{{ old('description') }}
		        	@else
		        		{{ __('Write description and how to use or install the application.') }}
		        	@endif
		          </textarea>
				</div>
				
				<div class="form-group col-md-6">
                  <label for="image">{{ __('Cover Image File') }}</label>
                  <input type="file" id="image" name="image">
                  <p class="help-block">{{ __('Files must be less than 2 MB / 2,000 KB (jpg, jpeg, png)') }}</p>
                </div>

                <div class="form-group col-md-6">
                  <label for="code">{{ __('Code File') }}</label>
                  <input type="file" id="code" name="code">
                  <p class="help-block">{{ __('Files must be less than 50 MB / 50,000 KB (zip, rar)') }}</p>
                </div>

				<div class="pull-right">
					<button type="submit" class="btn btn-primary">{{ __('Submit Code') }}</button>
				</div>
			  </form>
			</div>
		</div>
		<!-- /.box -->
	</div>
	{{-- col-md-7 --}}
	<div class="col-md-5">
		@include('project.random')
	</div>
</div>
@endsection

@push('js')
<script src="{{ asset('adminlte/bower_components/ckeditor/ckeditor.js') }}"></script>
<script>
  $(function () {
    CKEDITOR.replace('description')
  })
</script>
@endpush