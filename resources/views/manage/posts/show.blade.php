@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">{{ $role->display_name }}<small><em>({{ $role->name }})</em></small></h1>
			<div class="header-button float-right">
				<a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Edit Role</a>
			</div>

		</div>
		<div class="row">
			<h3>{{ $role->description }}</h3>
		</div>
		<hr>
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Permissions:</h5>
				<ul>
					@foreach ($role->permissions as $permission)
						<li>{{ $permission->display_name }}  <em>({{ $permission->description }})</em></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection