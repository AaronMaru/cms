@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">Create New User</h1>
			<div class="header-button float-right">
				{{-- <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Create</a> --}}
			</div>
		</div>
		<hr>
		<form action="{{ route('users.store') }}" method="POST">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="exampleInputEmail1">Name</label>
				<input type="text" class="form-control" name="name" placeholder="Enter name">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" name="email" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" placeholder="Password" name="password" :disabled="auto_password">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1" v-model="auto_password">
				<label class="form-check-label" for="exampleCheck1" :check="true">Auto Generate Password</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
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