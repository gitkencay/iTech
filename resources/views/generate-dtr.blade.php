@extends('main')

@section('title')Generate DTR
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Generate DTR</h3>
		@endslot
		<li class="breadcrumb-item">User</li>
		<li class="breadcrumb-item">Generate DTR</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Generate Daily Time Record(DTR) </h5>
					</div>
					<form class="form theme-form">
						<div class="card-body">
							<div class="row">
								<div class="col">
                                    <div class="mb-3 row">
										<label class="col-sm-3 col-form-label">From</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="date" value="0000-00-00" />
										</div>
									</div>
									<div class="mb-3 row">
										<label class="col-sm-3 col-form-label">To</label>
										<div class="col-sm-9">
											<input class="form-control digits" type="date" value="0000-00-00" />
										</div>
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