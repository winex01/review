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
		@foreach($random as $project)
			<div class="row">
				<div class="col-md-6">
					<div class="random-project-thumbnail">
						<img src="{{ url($project->image) }}" class="img-responsive" alt="no photo">
					</div>
				</div>
				<div class="col-md-6">
					<strong>
						<a class="project-title" title="{{ $project->title }}" href="{{ route('project', [$project->id, str_replace(' ', '-', $project->title)]) }}">
							{{ $project->title }}
						</a>
					</strong>
					<br/>
					<a href="#">{{ $project->owner->name }}</a>
					<br>
					889K views • {{ $project->created_at->diffForHumans() }}
				</div>
			</div>
			<hr>
		@endforeach
	</div>
</div>
	
@endsection