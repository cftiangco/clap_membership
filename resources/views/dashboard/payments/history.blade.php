@extends('templates.dashboard-template')

@section('content')
   <div class="container mt-5">
       <div class="row">
           <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Payment History</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>Contact #</th>
                                    <th>Amount</th>
                                    <th>Date/Time Submitted</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#2348</td>
                                    <td>Tiangco, Crimson F.</td>
                                    <td>cftiangco@gmail.com</td>
                                    <td>09201313616</td>
                                    <th>&#x20B1;3,500</th>
                                    <td>05/16/2022 7:32AM</td>
                                    <th>Approved</th>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2349</td>
                                    <td>Alcones, Gieljay R.</td>
                                    <td>gielalcones@gmail.com</td>
                                    <td>+6391232133</td>
                                    <th>&#x20B1;3,500</th>
                                    <td>05/17/2022 7:32AM</td>
                                    <th>Approved</th>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2350</td>
                                    <td>Smith, Jane D.</td>
                                    <td>smithjane@gmail.com</td>
                                    <td>09201313213</td>
                                    <th>&#x20B1;2,725</th>
                                    <td>05/18/2022 7:32AM</td>
                                    <th class="text-danger">Declined</th>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2351</td>
                                    <td>Doe, Jon F.</td>
                                    <td>sadasdasd@gmail.com</td>
                                    <td>09203201302</td>
                                    <th>&#x20B1;3,500</th>
                                    <td>05/19/2022 7:32AM</td>
                                    <th>Approved</th>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <tr>
                                        <th>Member ID</th>
                                        <th>Full name</th>
                                        <th>Email</th>
                                        <th>Contact #</th>
                                        <th>Amount</th>
                                        <th>Date/Time Submitted</th>
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