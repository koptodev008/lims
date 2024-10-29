@extends('layouts.dashboard')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Role List</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">User Management</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Roles</a></li>
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
                                        <h5 class="mb-0 flex-grow-1">Roles</h5>
                                        <button data-pc-animate="3d-slit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                            Add New Role
                                        </button>
                                    </div>

                                    <div class="card-block px-0 py-3">
                                        <div class="table-responsive">
                                            <table class="table table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No</th>
                                                        <th>Name</th>
                                                        <th>Status</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($roles as $role)
                                                    <tr class="unread">
                                                        <td>{{ $role->index + 1}}</td>
                                                        <td>
                                                            <h6 class="mb-1">{{ $role->name }}</h6>
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
</div>

<!-- modal start -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
@endsection