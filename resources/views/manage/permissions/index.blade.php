@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">Manage Permissions</h1>
			<div class="header-button float-right">
				<a href="{{ route('permissions.create') }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Create Permission</a>
			</div>
		</div>
		<hr>
		<table class="table table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Slug</th>
					<th scope="col">Description</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($permissions as $permission)
					<tr>
						<th scope="row">{{ $permission->id }}</th>
						<td>{{ $permission->display_name }}</td>
						<td>{{ $permission->name }}</td>
						<td>{{ $permission->description }}</td>
						<td><a class="btn btn-info btn-sm" href="{{ route('permissions.edit', $permission->id) }}">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection