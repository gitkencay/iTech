@extends('main')

@section('title')Change Password
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Change Password</h3>
		@endslot
		<li class="breadcrumb-item">Maintenance</li>
		<li class="breadcrumb-item active">Change Password</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-body">
	                    <div class="form theme-form">
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Old Password</label>
	                                    <input class="form-control" type="text" placeholder="Old Password *" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Create New Password</label>
	                                    <input class="form-control" type="text" placeholder="Create New Password" />
	                                </div>
	                            </div>
	                        </div>
                            <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Re-confirm New Password</label>
	                                    <input class="form-control" type="text" placeholder="Re-confirm New Password" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="mb-3">
	                                    <label>Reason for change password</label>
	                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col">
	                                <div class="text-end"><a class="btn btn-secondary me-3" href="#">Save</a><a class="btn btn-danger" href="#">Cancel</a></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
	@endpush

@endsection