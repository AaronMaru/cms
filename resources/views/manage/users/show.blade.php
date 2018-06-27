@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">View User Details</h1>
			<div class="header-button float-right">
				<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Edit User</a>
			</div>
		</div>
		<hr>
		<form action="{{ route('users.store') }}" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Name</label>
				<pre>{{ $user->name }}</pre>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<pre>{{ $user->email }}</pre>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Role</label>
				<ul>
					@foreach ($user->roles as $role)
						<li>{{ $role->display_name }} ({{ $role->description }})</li>
					@endforeach
				</ul>
			</div>
		</form>
	</div>
@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el: '#app',
			data: {
				auto_password: true
			}
		});
	</script>
@endsection