@extends('layouts.manage')

@section('content')
	<div class="container">
		<div class="row container-header">
			<h1 class="header-title">Create New Permission</h1>
			<div class="header-button float-right">
				{{-- <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-user-add"></i>Create</a> --}}
			</div>
		</div>
		<hr>
		<form action="{{ route('users.store') }}" method="POST">
			{{ csrf_field() }}
			<fieldset class="form-group row">
				<div class="col-sm-10">
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="permission_type" id="basic"  v-model="permissionType" value="basic" checked>
							Basic Permission
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="permission_type" id="crud"  v-model="permissionType" value="crud">
							CRUD Permission
						</label>
					</div>
				</div>
			</fieldset>
			<div v-if="permissionType == 'basic'">
				<div class="form-group">
					<label for="exampleInputEmail1">Name (Display Name)</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Slug</label>
					<input type="text" class="form-control" name="slug">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Description</label>
					<input type="text" class="form-control" name="description">
				</div>
			</div>
			<div v-if="permissionType == 'crud'">
				<div class="form-group">
					<label for="exampleInputEmail1">Resource</label>
					<input type="text" class="form-control" name="resource" v-model="resource">
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" v-model="crudSelected"  id="inlineCheckbox1" value="create"> Create
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" v-model="crudSelected" id="inlineCheckbox2" value="read"> Read
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" v-model="crudSelected" id="inlineCheckbox3" value="update"> Update
					</label>
				</div>
				<div class="form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" v-model="crudSelected" id="inlineCheckbox3" value="delete"> Delete
					</label>
				</div>
				<table class="table table-sm">
					<thead>
						<tr>
							<th scope="col">Name</th>
							<th scope="col">Slug</th>
							<th scope="col">Description</th>
						</tr>
					</thead>
					<tbody v-if="resource.length >= 3">
						<tr v-for="item in crudSelected">
							<td v-text="crudName(item)"></td>
							<td v-text="crudSlug(item)"></td>
							<td v-text="crudDescription(item)"></td>
						</tr>
					</tbody>
				</table>
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
				permissionType: 'basic',
				resource: '',
				crudSelected: ['create', 'read', 'update', 'delete']
			},
			methods: {
				crudName: function(item) {
					return item.substr(0,1).toUpperCase() + item.substr(1) + " " +
					app.resource.substr(0,1).toUpperCase() +
					app.resource.substr(1);
				},
				crudSlug: function(item) {
					return item.toLowerCase() + '-' + app.resource.toLowerCase();
				},
				crudDescription: function(item) {
					return "Allow a User to " + item.toUpperCase() + ' a ' + app.resource.substr(0,1).toLowerCase() +
					app.resource.substr(1);
				}
			}
		});
	</script>
@endsection