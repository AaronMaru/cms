@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">Manage Role</h1>
			<div class="header-button float-right">
				<a href="{{ route('posts.create') }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Create Post</a>
			</div>
		</div>
		<hr>
		<div class="row">
		{{-- @foreach ($roles as $role)
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">
					<p class="card-text">{{ $role->name }}</p>
				</div>
				<div class="card-body">
					<h5 class="card-title">{{ $role->display_name }}</h5>
					<p class="card-text">{{ $role->description }}</p>
					<a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">show</a>
				</div>
			</div>
		</div>
		@endforeach --}}
		</div>
	</div>
@endsection
@section('css')
<style>
	.col-md-3{
		padding-bottom: 15px;
		padding-top: 15px;
	}
</style>
@stop