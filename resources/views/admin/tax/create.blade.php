@extends('layouts.app')

@section('content')
	<div class="az-content-body">
        <div class="row row-sm mg-b-15 mg-t-20 mg-sm-b-20">
            <div class="col-lg-12 col-xl-12">
                <div class="card card-dashboard-six">
                    @if (Session::has('flash_message_success'))
                       <div class="alert alert-success alert-block">
                           <button type="button" class="close" data-dismiss="alert"></button>
                           <strong>{!! session('flash_message_success') !!}</strong>
                       </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Add Tax</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('admin.tax.index')}}" type="buttn" class="btn btn-primary" style="float: right;"><i class="typcn typcn-th-list mg-r-5"></i> View Tax List </a>
                        </div>
                    </div>
                    <hr>
                    <form action="{{route('admin.tax.store')}}" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label>State name</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="state_name" class="form-control" placeholder="Enter State Name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label>Tax Rate</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" name="tax_rate" class="form-control" placeholder="Enter Tax Rate">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label></label>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-az-primary btn-block">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection