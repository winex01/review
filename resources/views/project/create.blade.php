@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-md-7">
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
			  <form>
			        <textarea id="description" name="description" rows="10" cols="80">
			        	{{ __('Write description and how to use or install the application.') }}
			        </textarea>
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