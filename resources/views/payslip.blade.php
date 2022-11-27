@extends('main')

@section('title')Payslip
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Payslip</h3>
		@endslot
		<li class="breadcrumb-item">Payroll</li>
		<li class="breadcrumb-item">Payslip</li>
	@endcomponent

	<div class="container-fluid">
        <!-- Ajax Generated content for a column start-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Payslip</h5>
                    <span>Payslip will appear before the day before salary day</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display datatables" id="auto-generate-content">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Payslip</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Payslip</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</div>

	
	@push('scripts')
	<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
	@endpush

@endsection