@extends('templates.dashboard-template')

@section('content')
   <div class="container mt-5">
       <div class="row">
           <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Active Members</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Full name</th>
                                    <th>Birthday</th>
                                    <th>Sex</th>
                                    <th>Email</th>
                                    <th>Contact #</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td>Tiangco, Crimson F.</td>
                                    <td>05/24/1991</td>
                                    <td>Male</td>
                                    <td>cftiangco@gmail.com</td>
                                    <td>09201313616</td>
                                    <td>
                                        <div>
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2</td>
                                    <td>Alcones, Gieljay R.</td>
                                    <td>04/18/1995</td>
                                    <td>Male</td>
                                    <td>gielalcones@gmail.com</td>
                                    <td>09391232133</td>
                                    <td>
                                        <div>
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#3</td>
                                    <td>Smith, Jane D.</td>
                                    <td>02/18/1999</td>
                                    <td>Female</td>
                                    <td>smithjane@gmail.com</td>
                                    <td>09201313213</td>
                                    <td>
                                        <div>
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#4</td>
                                    <td>Doe, Jon F.</td>
                                    <td>04/18/1995</td>
                                    <td>Male</td>
                                    <td>sadasdasd@gmail.com</td>
                                    <td>09203201302</td>
                                    <td>
                                        <div>
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