@extends('templates.dashboard-template')

@section('content')
   <div class="container mt-5">
       <div class="row">
           <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">For Approval</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Application ID</th>
                                    <th>Full name</th>
                                    <th>Birthday</th>
                                    <th>Sex</th>
                                    <th>Email</th>
                                    <th>Contact #</th>
                                    <th>Date/Time Submitted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#2348</td>
                                    <td>Tiangco, Crimson F.</td>
                                    <td>05/24/1991</td>
                                    <td>Male</td>
                                    <td>cftiangco@gmail.com</td>
                                    <td>09201313616</td>
                                    <td>05/16/2022 7:32AM</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-danger btn-sm">Decline</a>
                                            <a href="" class="btn btn-primary btn-sm">Approve</a>
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2349</td>
                                    <td>Alcones, Gieljay R.</td>
                                    <td>04/18/1995</td>
                                    <td>Male</td>
                                    <td>gielalcones@gmail.com</td>
                                    <td>+6391232133</td>
                                    <td>05/17/2022 7:32AM</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-danger btn-sm">Decline</a>
                                            <a href="" class="btn btn-primary btn-sm">Approve</a>
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2350</td>
                                    <td>Smith, Jane D.</td>
                                    <td>02/18/1999</td>
                                    <td>Female</td>
                                    <td>smithjane@gmail.com</td>
                                    <td>09201313213</td>
                                    <td>05/18/2022 7:32AM</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-danger btn-sm">Decline</a>
                                            <a href="" class="btn btn-primary btn-sm">Approve</a>
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2351</td>
                                    <td>Doe, Jon F.</td>
                                    <td>04/18/1995</td>
                                    <td>Male</td>
                                    <td>sadasdasd@gmail.com</td>
                                    <td>09203201302</td>
                                    <td>05/19/2022 7:32AM</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-danger btn-sm">Decline</a>
                                            <a href="" class="btn btn-primary btn-sm">Approve</a>
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Full name</th>
                                    <th>Birthday</th>
                                    <th>Sex</th>
                                    <th>Email</th>
                                    <th>Contact #</th>
                                    <th>Date/Time Submitted</th>
                                    <th>Action</th>
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