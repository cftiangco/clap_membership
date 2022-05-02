@extends('templates.dashboard-template')

@section('content')
   <div class="container mt-5">
       <div class="row">
           <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Accounts</h4>
                        <a href="/dashboard/users/accounts/new" class="btn btn-primary">Create New Account</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiangco, Crimson F.</td>
                                    <td>cftiangco@gmail.com</td>
                                    <td>Admin</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alcones, Gieljay R.</td>
                                    <td>gielalcones@gmail.com</td>
                                    <td>Admin</td>
                                    <td>Inactive</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <tr>
                                        <th>Full name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tr>
                            </tfoot>
                        </table>
                    </div> <!-- table-responsive -->
                </div>
            </div>
           </div>
       </div>
   </div>
@stop