@extends('main')

@section('title')Time Record
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Time Record</h3>
		@endslot
		<li class="breadcrumb-item">User</li>
        <li class="breadcrumb-item active">Time Record</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Record Time In and Out</h5>
                    </div>
                    <div class="card-body megaoptions-border-space-sm">
                        <form class="mega-inline">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-primary me-3">
                                                <input id="radio19" type="radio" name="radio1" value="option1" />
                                                <label for="radio19"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Morning Time IN</h6>
                                                <p>Current TIME: 00:00:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-secondary me-3">
                                                <input id="radio20" type="radio" name="radio1" value="option1" />
                                                <label for="radio20"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Morning Time OUT</h6>
                                                <p>Current TIME: 00:00:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-secondary me-3">
                                                <input id="radio21" type="radio" name="radio1" value="option1" />
                                                <label for="radio21"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Afternoon Time IN</h6>
                                                <p>Current TIME: 00:00:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="media p-20">
                                            <div class="radio radio-primary me-3">
                                                <input id="radio22" type="radio" name="radio1" value="option1" />
                                                <label for="radio22"></label>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mega-title-badge">Afternoon TIME OUT</h6>
                                                <p>Current TIME: 00:00:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary m-r-15" type="submit">Submit</button>
                        <button class="btn btn-light" type="submit">Cancel</button>
                    </div>
                </div>
            </div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{ asset('assets/js/height-equal.js') }}"></script>
	@endpush

@endsection