@extends('masterlayout')

@section('content')

<table class="table table-striped">
	<tr>
		<th>Plate No.</th>
		<th>Current Color</th>
		<th>Target Color</th>
		<th>Action</th>
	</tr>

 @foreach($paintjob as $paint)
 	<tr>
 		<td>{{$paint->plat}}</td>
		<td>{{$paint->current}}</td>
		<td> @if($paint->target == 0) <label> Red</label> @elseif($paint->target == 1) <label> Green</label> @elseif($paint->target == 2) <label> Blue  </label></td>@endif
		<td><button class="btn btn-success">Mark As Completed</button></td>
 	</tr>

 @endforeach
	

</table>

@endsection