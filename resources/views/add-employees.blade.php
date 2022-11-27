@extends('main')

@section('title')Add Employee
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Add Employee</h3>
		@endslot
		<li class="breadcrumb-item">Employee</li>
		<li class="breadcrumb-item active">Add Employee</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="edit-profile">
	        <div class="row">
	            <div class="col-xl-4">
	                <div class="card">
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">Profile</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        <form>
	                            <div class="row mb-2">
	                                <div class="profile-title">
	                                    <div class="media">
	                                        <img class="img-70 rounded-circle" alt="" src="{{asset('assets/images/user/7.jpg')}}" />
	                                        <div class="media-body">
	                                            <h3 class="mb-1 f-20 txt-primary">UPLOAD IMAGE</h3>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
                                <div class="mb-3">
	                                <label class="form-label">Employee ID</label>
	                                <input class="form-control" placeholder="01-2022-11-001" disabled />
	                            </div>
	                            <div class="mb-3">
	                                <label class="form-label">Full Name</label>
	                                <input class="form-control" placeholder="Full Name" />
	                            </div>
	                            <div class="mb-3">
	                                <label class="form-label">Email-Address</label>
	                                <input class="form-control" placeholder="your-email@domain.com" />
	                            </div>
	                            <div class="mb-3">
	                                <label class="form-label">Password</label>
	                                <input class="form-control" type="password" value="password" />
	                            </div>
                                <div class="mb-3">
	                                    <label class="form-label">Department</label>
	                                    <select class="form-control btn-square">
	                                        <option value="0">--Select--</option>
	                                        <option value="1">HR Department</option>
	                                        <option value="2">Accounting</option>
	                                        <option value="3">Teachers</option>
	                                        <option value="4">Staff</option>
	                                    </select>
	                                </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-8">
	                <form class="card">
	                    <div class="card-header pb-0">
	                        <h4 class="card-title mb-0">Additional Details</h4>
	                        <div class="card-options">
	                            <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
	                        </div>
	                    </div>
	                    <div class="card-body">
	                        <div class="row">
	                            <div class="col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label">SSS No.</label>
	                                    <input class="form-control" type="number" placeholder="your SSS No." />
	                                </div>
	                            </div>
	                            <div class="col-sm-4">
	                                <div class="mb-3">
	                                    <label class="form-label">Phil. Health No.</label>
	                                    <input class="form-control" type="number" placeholder="your PhilHealth No." />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
	                                <div class="mb-3">
	                                    <label class="form-label">HDMF No.</label>
	                                    <input class="form-control" type="number" placeholder="your HDMF No." />
	                                </div>
	                            </div>
                                <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Basic Salary</label>
	                                    <input class="form-control" type="number" placeholder="Basic Salary" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
                                        <label class="form-label">Designation</label>
	                                    <select class="form-control btn-square">
	                                        <option value="0">--Select--</option>
	                                        <option value="1">HR Staff</option>
	                                        <option value="2">Teacher</option>
                                            <option value="3">Accounting Staff</option>
                                            <option value="4">Staff</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Joining Date</label>
	                                    <input class="form-control digits" type="date" placeholder="Joining Date" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Birth Date</label>
	                                    <input class="form-control digits" type="date" placeholder="Joining Date" />
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="mb-3">
	                                    <label class="form-label">Address</label>
	                                    <input class="form-control" type="text" placeholder="Home Address" />
	                                </div>
	                            </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
	                                    <label class="form-label">City</label>
	                                    <input class="form-control" type="text" placeholder="City" />
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
	                                    <label class="form-label">Phone No.</label>
	                                    <input class="form-control" type="number" placeholder="Phone No." />
	                                </div>
	                            </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="mb-3">
	                                    <label class="form-label">Postal Code</label>
	                                    <input class="form-control" type="number" placeholder="ZIP Code" />
	                                </div>
	                            </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="mb-3">
	                                    <label class="form-label">Gender</label>
	                                    <select class="form-control btn-square">
	                                        <option value="0">--Select--</option>
	                                        <option value="1">Male</option>
	                                        <option value="2">Female</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
	                                    <label class="form-label">Civil Status</label>
	                                    <select class="form-control btn-square">
	                                        <option value="0">--Select--</option>
	                                        <option value="1">Single</option>
	                                        <option value="2">Married</option>
                                            <option value="3">Separated</option>
                                            <option value="4">Widowed</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
	                                    <label class="form-label">Blood Type</label>
	                                    <select class="form-control btn-square">
	                                        <option value="0">--Select--</option>
	                                        <option value="1">A</option>
	                                        <option value="2">B</option>
	                                        <option value="3">AB</option>
	                                        <option value="4">O</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div class="col-sm-5 col-md-3">
	                                <div class="mb-3">
	                                    <label class="form-label">Country</label>
	                                    <select class="form-control btn-square">
	                                        <option value="0">--Select--</option>
	                                        <option value="1">Germany</option>
	                                        <option value="2">Canada</option>
	                                        <option value="3">Usa</option>
	                                        <option value="4">Aus</option>
                                            <option value="4">Philippines</option>
	                                    </select>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="card-footer text-end">
	                        <button class="btn btn-primary" type="submit">Save Profile</button>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	@endpush

@endsection