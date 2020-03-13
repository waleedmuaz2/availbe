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
                            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Edit Car Category</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('admin.car-type.index')}}" type="buttn" class="btn btn-primary" style="float: right;"><i class="typcn typcn-th-list mg-r-5"></i> View List </a>
                        </div>
                    </div>
                    <hr>
                    <form action="{{route('admin.car-type.update',['car_type'=>$carT->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label>Category Name</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="type" value="{{$carT->type}}" class="form-control" placeholder="Enter Car Category">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label>Description (optional)</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" value="{{$carT->desc}}" name="desc" class="form-control" placeholder="Enter Description">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label>Avatar (optional)</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" value="{{$carT->avatar}}" name="avatar" class="form-control" placeholder="Enter Description">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label></label>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-az-primary btn-block">Update</button>
                            </div>
                        </div>
                    </form>
                </div><!-- card -->
            </div>
        </div>
    </div>
@endsection
