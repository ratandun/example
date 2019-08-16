@extends('layouts.app')

@section('content')

<a href="{{ route('add.user')}}" class="btn btn-primary pull-right" > Add user </a> <br>

<table class="table table-bordered">
	
	<tr>
		<td> Username </td>
		<td> Office </td>
		<td> Department </td>
		<td> Type </td>
		<td> Action </td>
	</tr>

	@foreach ($users as $user)
		<tr>
			<td> {{ $user->name }} </td>
			<td> {{ $user->office_master_id  }} </td>
			<td> {{ $user->deptt->name }} </td>
			<td> {{ $user->user_type }} </td>
			<td> <a href="{{ route('edit.user', ['id' => $user->id ]) }}">Edit  </a> | <a href="{{ route('delete.user', ['id' => $user->id ]) }}"> Delete  </a> </td>
		</tr>
	@endforeach

</table>

@endsection


@push('styles')

<style type="text/css">
	
.pull-right {
	float: right;
}

</style>

@endpush