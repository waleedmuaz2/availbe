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
                            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Add Service Category</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('admin.service-category.index')}}" title="Edit" class="btn btn-primary" style="float: right;"><i class="typcn typcn-th-list mg-r-5"></i>View List</a>
                        </div>
                    </div>
                    <hr>
                    <form action="{{route('admin.service-category.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Service eg. Service Technicians and Mechanics">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slang" class="col-sm-2 col-form-label"> Category slang (Should be Unique across the platform )</label>
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" id="slang" name="slang" class="form-control" placeholder="Enter slang eg st&e ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slang" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-2">
                                <button class="btn btn-az-primary btn-block">Add</button>
                            </div>
                        </div>
                    </form>
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- az-content-body -->
@endsection
