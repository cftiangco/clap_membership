@extends('templates.dashboard-template')

@section('content')
    
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-9">
                <div class="card-body">
                    <h3 class="card-title text-white">Member Request</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">12</h2>
                        <p class="text-white mb-0">Today</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
                <div class="card-body">
                    <h3 class="card-title text-white">Payment Request</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">&#8369;23,500</h2>
                        <p class="text-white mb-0">Today</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-credit-card-alt"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

@stop