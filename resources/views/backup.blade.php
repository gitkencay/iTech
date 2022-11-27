@extends('main')

@section('title')Backup
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Backup</h3>
		@endslot
		<li class="breadcrumb-item">Maintenance</li>
		<li class="breadcrumb-item">Backup</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Backup database</h5>
					</div>
					<form class="form theme-form">
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Enter Password</label>
										<div class="col-sm-9">
											<input class="form-control" type="password" placeholder="Enter Password" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Current Date</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="date" value="0000-00-00" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">Current Time</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="time" value="00:00:00" />
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label">Remarks</label>
										<div class="col-sm-9">
											<textarea class="form-control" rows="5" cols="5" placeholder="Remarks/Reason for backup"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer text-end">
							<div class="col-sm-9 offset-sm-3">
								<button class="btn btn-primary" type="submit">Proceed</button>
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