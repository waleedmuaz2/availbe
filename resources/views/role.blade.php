@extends('layouts.app')

@section('content')
    <div class="az-content-header d-block d-md-flex">
        <div>
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Hi, Welcome back! (Logged in Admin Name)</h2>
            <p class="mg-b-0">Dashboard</p>
        </div>
        <div class="az-dashboard-header-right">
            <div>
                <label class="tx-13">Customer Ratings</label>
                <div class="az-star">
                    <i class="typcn typcn-star active"></i>
                    <i class="typcn typcn-star active"></i>
                    <i class="typcn typcn-star active"></i>
                    <i class="typcn typcn-star active"></i>
                    <i class="typcn typcn-star active"></i>
                    <span>(12,775)</span>
                </div>
            </div>
            <div>
                <label class="tx-13">Active Services</label>
                <h5>31</h5>
            </div>
            <div>az-content-body
                <label class="tx-13">Complete Services</label>
                <h5>150</h5>
            </div>
        </div><!-- az-dashboard-header-right -->
    </div><!-- az-content-header -->
    <div class="az-content-body">
        <h1>asas</h1>
    </div><!-- az-content-body -->
@endsection
