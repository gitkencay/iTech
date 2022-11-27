@extends('main')

@section('title')All Employees
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jsgrid.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>All Employees</h3>
		@endslot
		<li class="breadcrumb-item">Employees</li>
		<li class="breadcrumb-item active">All Employees</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Employee Table</h5>
	                </div>
	                <div class="card-body">
	                    <div id="basicScenario"></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	@push('scripts')
	<script src="{{asset('assets/js/jsgrid/jsgrid.min.js')}}"></script>`
    <script src="{{asset('assets/js/jsgrid/griddata.js')}}"></script>
    <script src="{{asset('assets/js/jsgrid/jsgrid.js')}}"></script>
	@endpush

@endsection