@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@push('js')
<script>
	$('div.alert').not('.alert-important').delay(5000).fadeOut(350);
	$('#flash-overlay-modal').modal();
</script>
@endpush