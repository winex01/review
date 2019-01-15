@extends('layouts.master')

@section('content')

<div class="container-fluid">
	<div class="row">
		@foreach ($projects as $project)
			@if ($loop->index >= 4)
		        @break
		    @endif
				<div class="col-md-3 portfolio-item">
					<div class="project-thumpbnail thumbnail">
						<img src="{{ url($project->image) }}" class="img-responsive" alt="no photo">
					</div>
					<strong><a class="project-title" title="{{ $project->title }}" href="#">{{ $project->title }}</a></strong>
					<br/>
					<a href="#">{{ $project->owner->name }}</a>
					<br>
					889K views • 3 weeks ago
				</div>
		@endforeach
	</div>

	<div class="row">
		@foreach ($projects as $project)
			@if ($loop->index <= 3)
		        @continue
		    @endif
				<div class="col-md-3 portfolio-item">
					<div class="project-thumpbnail thumbnail">
						<img src="{{ url($project->image) }}" class="img-responsive" alt="no photo">
					</div>
					<strong><a class="project-title" title="{{ $project->title }}" href="#">{{ $project->title }}</a></strong>
					<br/>
					<a href="#">{{ $project->owner->name }}</a>
					<br>
					889K views • 3 weeks ago
				</div>
		@endforeach
	</div>

</div>

{{-- pagination --}}
{{ $projects->links() }}
{{-- end pagination --}}

@endsection

@push('js')
<script type="text/javascript">
	$(document).ready(function(){
		var winWidth =  $(window).width();
		fixedThumbnail(winWidth);

	    $(window).on('resize',function(){
	       var winWidth =  $(window).width();
	       fixedThumbnail(winWidth);
	    });
	});

	function fixedThumbnail(winWidth) {
	   if( winWidth <= 991){
          // console.log('Window Width: '+ winWidth + 'class used: col-xs & col-sm');
          $('.project-thumpbnail').removeClass('thumbnail');
       }else{
          // console.log('Window Width: '+ winWidth + 'class used: col-md & col-lg');
          $('.project-thumpbnail').removeClass('thumbnail');
          $('.project-thumpbnail').addClass('thumbnail');
       }
	}
</script>
@endpush