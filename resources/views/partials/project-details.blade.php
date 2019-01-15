<div class="col-md-3 portfolio-item">
	<div class="project-thumpbnail thumbnail">
		<img src="{{ url($project->image) }}" class="img-responsive" alt="no photo">
	</div>
	<strong>
		<a class="project-title" title="{{ $project->title }}" href="{{ route('project', $project->id) }}">
			{{ $project->title }}
		</a>
	</strong>
	<br/>
	<a href="#">{{ $project->owner->name }}</a>
	<br>
	889K views • 3 weeks ago
</div>