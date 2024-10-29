@extends('layouts.dashboard')

@section('content')

    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Lab List</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Lab Management</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Labs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!--[ Recent Users ] start-->
                            <div class="col-xl-12 col-md-8">
                                <div class="card Recent-Users">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="mb-0 flex-grow-1">Labs</h5>
                                        <button data-pc-animate="3d-slit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                            Add New Lab
                                        </button>
                                    </div>
                                    <div class="card-block px-0 py-3">
                                        <div class="table-responsive">
                                            <table class="table table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No</th>
                                                        <th>Name</th>
                                                        <th>State</th>
                                                        <th>District</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($labs as $lab)
                                                    <tr class="unread">
                                                        <td>{{ $lab->index + 1}}</td>
                                                        <td>
                                                            <h6 class="mb-1">{{ $lab->name }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-1">{{ $lab->state }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-1">{{ $lab->district }}</h6>
                                                        </td>

                                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Reject</a><a href="#!" class="label theme-bg text-white f-12">Approve</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[ Recent Users ] end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- modal start -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create new lab</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/create_lab') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lab_name">Lab Name</label>
                                <input type="text" class="form-control @error('lab_name') is-invalid @enderror" id="lab_name" name="lab_name" placeholder="Enter lab name" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                @error('lab_name')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <select class="form-control @error('state') is-invalid @enderror" name="state" id="state" required>
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                @error('state')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pincode">Pincode</label>
                                <input type="number" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" id="postal_code" placeholder="Enter pincode" required>
                                @error('postal_code')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="mobile_number">Mobile number</label>
                                <input type="number" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" id="mobile_number" placeholder="Enter mobile number" required>
                                @error('mobile_number')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
    <label for="lab_address">Lab Address</label>
    <textarea class="form-control @error('lab_address') is-invalid @enderror" 
              name="lab_address" 
              id="lab_address" 
              required>{{ old('lab_address') }}</textarea>
    
    @error('lab_address')
    <div class="fv-plugins-message-container invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>



                            <div class="form-group">
                                <label for="district">District</label>
                                <select class="form-control @error('district') is-invalid @enderror" name="district" id="district" required>
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                @error('district')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required>
                                @error('email')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- modal end -->
    
    </div>



@endsection