@extends('main')

@section('title')Generate Payslip
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Generate Payslip</h3>
		@endslot
		<li class="breadcrumb-item">User</li>
		<li class="breadcrumb-item">Generate Payslip</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Generate Payslip </h5>
					</div>
					<form class="form theme-form">
						<div class="card-body">
							<div class="row">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label text-end">Select Month</label>
									<div class="col-xl-5 col-sm-9">
										<input class="datepicker-here form-control digits" type="text" data-language="en" data-min-view="months" data-view="months" data-date-format="MM yyyy" />
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer text-end">
							<div class="col-sm-9 offset-sm-3">
								<button class="btn btn-primary" type="submit">Generate</button>
								<input class="btn btn-light" type="reset" value="Cancel" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	@endpush

@endsection