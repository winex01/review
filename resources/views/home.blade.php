@extends('layouts.master')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<img src="{{ url('images/Screenshot_1.png') }}" class="img-thumbnail" alt="Responsive image">
			<strong>School Management System</strong>
			<br/>
			<a href="#">JohnDoe</a>
			<br>
			85K views • 1 week ago
		</div>
		<div class="col-md-3">
			<img src="{{ url('images/Screenshot_2.png') }}" class="img-thumbnail" alt="Responsive image">
			<strong>Points of Sales</strong>
			<br/>
			<a href="#">Renegade</a>
			<br>
			2.5M views • 2 years ago
		</div>
		<div class="col-md-3">
			<img src="{{ url('images/Screenshot_3.png') }}" class="img-thumbnail" alt="Responsive image">
			<strong>PHP sample ajax request</strong>
			<br/>
			<a href="#">DarkMage</a>
			<br>
			21K views • 5 days ago
		</div>
		<div class="col-md-3">
			<img src="{{ url('images/Screenshot_4.png') }}" class="img-thumbnail" alt="Responsive image">
			<strong>Laravel Multiple User Roles</strong>
			<br/>
			<a href="#">Namuro Kun Sage</a>
			<br>
			250K views • 1 month ago
		</div>
	</div>

<hr>

	<div class="row">
		<div class="col-md-3">
			<img src="{{ url('images/Screenshot_5.png') }}" class="img-thumbnail" alt="Responsive image">
			<strong>Code Igniter Sample Login System</strong>
			<br/>
			<a href="#">RiverCzz</a>
			<br>
			889K views • 3 weeks ago
		</div>
		<div class="col-md-3">
			<img src="{{ url('images/Screenshot_6.png') }}" class="img-thumbnail" alt="Responsive image">
			<strong>Hotel Management System</strong>
			<br/>
			<a href="#">Lorszi</a>
			<br>
			5M views • 4 years ago
		</div>
		<div class="col-md-3">
			<img src="{{ url('images/Screenshot_7.png') }}" class="img-thumbnail" alt="Responsive image">
			<strong>C# how to fix this Bug</strong>
			<br/>
			<a href="#">YourSSiYol</a>
			<br>
			3K views • 3 days ago
		</div>
		<div class="col-md-3">
			<img src="{{ url('images/Screenshot_8.png') }}" class="img-thumbnail" alt="Responsive image">
			<strong>Online enrollment system</strong>
			<br/>
			<a href="#">Tempest</a>
			<br>
			903K views • 11 months ago
		</div>
	</div>
</div>
<ul class="pagination">
	<li><a href="#">&laquo;</a></li>
	<li><a href="#">1</a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li><a href="#">5</a></li>
	<li><a href="#">&raquo;</a></li>
</ul>
@endsection
