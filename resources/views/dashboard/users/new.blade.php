@extends('templates.dashboard-template')

@section('content')
   <div class="container mt-5">
       <div class="row">
           <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">New User Account</h4>
                        <div class="basic-form">
                            <form>

                                <div class="row">
                                    <div class="col-12 col-lg-4 mb-3">
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <input type="text" class="form-control" placeholder="Middle name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-4 mb-3">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <select class="form-control" id="sel1">
                                            <option selected disabled>Select Role</option>
                                            <option>Admin</option>
                                            <option>User</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-4 mb-3">
                                        <input type="text" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col-12 col-lg-4 mb-3">
                                        <input type="text" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-dark m-t-20">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
       </div>
   </div>
@stop