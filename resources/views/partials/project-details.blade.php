<div class="col-md-3 portfolio-item">
	<div class="project-thumpbnail thumbnail">
		<img src="{{ empty($project->image) ?  asset('images/default.jpg') : asset('storage/' . $project->image) }}" class="img-responsive" alt="no photo">
	</div>
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