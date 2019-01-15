@extends('layouts.master')

@section('content')

<div class="container-fluid">
	<div class="row">
		@foreach ($projects as $project)
			@if ($loop->index >= 4)
		        @break
		    @endif
				@include('partials.project-details')
		@endforeach
	</div>

	<div class="row">
		@foreach ($projects as $project)
			@if ($loop->index <= 3)
		        @continue
		    @endif
				@include('partials.project-details')
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