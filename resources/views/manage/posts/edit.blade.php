@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">Edit {{ $role->display_name }}</h1>
			<div class="header-button float-right">
				{{-- <a href="{{ route('roles.create') }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Create</a> --}}
			</div>
		</div>
		<hr>
		<form action="{{ route('roles.update', $role->id) }}" method="POST">
			{{ method_field('PUT') }}
			{{ csrf_field() }}
			<div class="form-group">
				<label for="exampleInputEmail1">Name (Human Readable)</label>
				<input type="text" class="form-control" name="display_name" placeholder="Enter name" value="{{ $role->display_name }}">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Slug (Can not be edit)</label>
				<input type="text" class="form-control" name="name" value="{{ $role->name }}" placeholder="slug" disabled>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Description</label>
				<input type="text" class="form-control" name="description" value="{{ $role->description }}" placeholder="description">
			</div>
			<input type="hidden" :value="permissionSelected" name="permissions">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Permissions:</h5>
					@foreach ($permissions as $permission)
					<div class="form-check">
						<input class="form-check-input" type="checkbox" v-model="permissionSelected" id="{{ $permission->name }}" value="{{ $permission->id }}">
						<label class="form-check-label" for="{{ $permission->name }}">
							{{ $permission->display_name }} <em>({{ $permission->description }})</em>
						</label>
					</div>
					@endforeach
				</div>
			</div>
			<div class="form-group">
			</div>
			<button type="submit" class="btn btn-primary">Save Change to Roles</button>
		</form>
	</div>
@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el: '#app',
			data: {
				permissionSelected: {!! $role->permissions->pluck('id') !!}
			},
		});
	</script>
@endsection