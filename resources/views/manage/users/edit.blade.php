@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">Edit User</h1>
			<div class="header-button float-right">
				{{-- <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Create</a> --}}
			</div>
		</div>
		<hr>
		<form action="{{ route('users.update', $user->id) }}" method="POST">
			{{ method_field('PUT') }}
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $user->name }}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Enter email">
					</div>
					<div class="form-group">
						<fieldset class="form-group row">
							<legend class="col-form-legend col-sm-2">Password</legend>
							<div class="col-sm-10">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="password_option" v-model="password_option" id="keep" value="keep" checked>
										Do not change password
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="password_option" v-model="password_option" id="auto" value="auto">
										Auto-Generate New Password
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="password_option" v-model="password_option" id="manual" value="manual">
										Manually Set New Password
									</label>
									<input type="password" class="form-control" placeholder="Manually Passwords" v-if="password_option == 'manual'">
								</div>
							</div>
						</fieldset>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Roles:</h5>
							<input type="hidden" :value="roleSelected" name="roles">
							@foreach ($roles as $role)
							<div class="form-check">
								<input class="form-check-input" type="checkbox" v-model="roleSelected" id="{{ $role->name }}" value="{{ $role->id }}">
								<label class="form-check-label" for="{{ $role->name }}">
									{{ $role->display_name }} <em>({{ $role->description }})</em>
								</label>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Update User</button>
		</form>
	</div>
@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el: '#app',
			data: {
				password_option: 'keep',
				roleSelected: {!! $user->roles->pluck('id') !!}
			},
		});
	</script>
@endsection