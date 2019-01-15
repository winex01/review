@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-8">
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
	<div class="col-md-4">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
</div>
	
@endsection