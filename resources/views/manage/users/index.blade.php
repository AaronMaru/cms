@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">Manage User</h1>
			<div class="header-button float-right">
				<a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Create</a>
			</div>
		</div>
		<hr>
		<table class="table table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Date Created</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<th scope="row">{{ $user->id }}</th>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at }}</td>
						<td><a class="btn btn-info btn-sm" href="{{ route('users.show', $user->id) }}">Show</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection