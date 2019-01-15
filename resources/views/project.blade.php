@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-7">
		<img src="{{ url($project->image) }}" class="img-responsive img-thumbnail" alt="Image">
		<strong>{{ $project->title }}</strong>
		<div class="row">
			<div class="col-md-6">
				<div>
					29,719,618 views
				</div>
			</div>
			<div class="col-md-6">
				<div class="pull-right">
					<button type="button" class="btn btn-xs btn-primary">Like</button>
					<button type="button" class="btn btn-xs btn-danger">Dislike</button>
					<button type="button" class="btn btn-xs btn-success">Save</button>
				</div>
			</div>

		</div>
		<hr>
		<p>
			{{ $project->description }}
		</p>
	</div>
	<div class="col-md-5">
		@include('project.random')
	</div>
</div>
	
@endsection