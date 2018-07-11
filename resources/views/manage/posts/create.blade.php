@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">Add New Blog Post</h1>
			<div class="header-button float-right">
				{{-- <a href="{{ route('roles.create') }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Create</a> --}}
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-8">
				<form action="{{ route('posts.store') }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" class="form-control" name="display_name" placeholder="Post Title" v-model="title">
					</div>
					<slug-widget url="{{ url('/') }}" subdirectory="blog" :title="title" @slug-changed="updateSlug"></slug-widget>
					<div class="form-group">
						<textarea class="form-control" placeholder="Compose your masterpiece..."  rows="30"></textarea>
					</div>
				</form>
			</div>
			<div class="col-md-4">
					<div class="card">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								<div class="row">
										<div class="col-md-3 col-sm-3">
											<img class="card-img-top rounded-circle" src="https://placehold.it/50x50" alt="Card image cap">
										</div>
										<div class="col-md-9 col-sm-9">
											<h6><strong>Draft <span class="bold">Saved</span></strong></h6>
											<h6>A Few Minute Ago</h6>
										</div>
									</div>
							</li>
							<li class="list-group-item">
								<div class="row">
									<div class="col-md-3 col-sm-3">
										<i class="fa fa-file-text fa-3x float-right"></i>
									</div>
									<div class="col-md-9 col-sm-9">
										<h6><strong>Draft <span class="bold">Saved</span></strong></h6>
										<h6>A Few Minute Ago</h6>
									</div>
								</div>
							</li>
							<li class="list-group-item">
									<div class="row">
										<button type="button" class="btn btn-outline-secondary btn-sm btn-margin col-md-5 form-control">Save Draft</button>
										<button type="button" class="btn btn-info btn-margin btn-sm col-md-5 form-control">Publish</button>
									</div>
							</li>
						</ul>
					</div>
			</div>
		</div>
	</div>
@endsection

@section('css')
	<style>
		.btn-margin{
			margin: 0.5rem;
		}
	</style>
@endsection

@section('scripts')
	<script>
		var app = new Vue({
			el: '#app',
			data: {
				title: '',
				slug: '',
				api_token: '{{ Auth::user()->api_token }}'
			},
			methods: {
				updateSlug: function(val) {
					this.slug = val;
				},
			}
		});
	</script>
@endsection