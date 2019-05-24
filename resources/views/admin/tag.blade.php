@extends('layouts.app_admin')

@section('active-sidebar')
<li><a href="{{route('admin.furniture')}}"><i class="fa fa-link"></i> <span>Furnitures</span></a></li>
<li><a href="{{route('admin.order')}}"><i class="fa fa-link"></i> <span>Orders</span></a></li>
<li class="active"><a href="{{route('admin.tag')}}"><i class="fa fa-link"></i> <span>Tags</span></a></li>
@endsection

@section('content')
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-left: 20%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background-color: #ffffff;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Furnitures List
        <br>
        <!--<small>Optional description</small>-->
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="container">
            <div class="row justify-content-center">
            	<div class="col-md-8">
            		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CreateNewTagModal">{{ __('+ Create New Tag') }}</button>
                    <div class="card">
                        <div class="card-body">
                                <table>
                                    <th>Name</th>
                                    <th>Action</th>
                                    @foreach ($tags as $tag)
                                        @if ($tags)
                                            <tr>
                                                <td>{{ $tag->name }}</td>
                                                <td>
                                                    <form id="change-status-booking-form" action="#" method="POST">
                                                        {!! method_field('post') !!}
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Edit</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" style="margin-top: 100px;" id="CreateNewTagModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
				    <form method="POST" action="{{ route('admin.tag.store') }}">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Create new tag</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	@csrf
				        <div class="input-group form-group">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Tag name') }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      	<div class="form-group">
						<input type="submit" value="{{ __('Create') }}" class="btn float-right btn-primary">
                        </div>
				      </div>
				      </form>
				    </div>
				</div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection