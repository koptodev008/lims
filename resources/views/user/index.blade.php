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
                                    <h5 class="m-b-10">User List</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">User Management</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Users</a></li>
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
                                        <h5 class="mb-0 flex-grow-1">Users</h5>
                                        <button data-pc-animate="3d-slit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                            Add New User
                                        </button>
                                    </div>
                                    <div class="card-block px-0 py-3">
                                        <div class="table-responsive">
                                            <table class="table table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Activity</th>
                                                        <th>Time</th>
                                                        <th>Status</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                    <tr class="unread">
                                                        <td>
                                                            @if($user->profile_photo_path)
                                                            <img class="rounded-circle" style="width:40px;" src="{{ url('$user->profile_photo_path') }}" alt="activity-user">
                                                            @else
                                                            <img class="rounded-circle" style="width:40px;" src="assets/images/user/avatar-1.jpg" alt="activity-user">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-1">{{ $user->name }}</h6>
                                                            <p class="m-0">{{ $user->email }}</p>
                                                        </td>
                                                        <td>
                                                            <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>11 MAY 12:56</h6>
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
    </div>



<!-- modal start -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create new User</h5>
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
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                @error('name')
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
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required>
                                @error('email')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
                                @error('password')
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="lab">Lab</label>
                                <select class="form-control @error('lab') is-invalid @enderror" name="lab" id="lab" required>
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
@endsection