@extends('layouts.app')


@push('styles')
<style type="text/css" media="screen">
    .form-inline{
        display: block !important;
    }
</style>
@endpush

@section('content')
    <div class="az-content-body">
        <div class="row row-sm mg-b-15 mg-sm-b-20">
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
                            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Car Brand List</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('admin.car-company.create')}}" type="buttn" class="btn btn-primary" style="float: right;"><i class="typcn typcn-plus mg-r-5"></i> Add New</a>
                        </div>
                    </div>
                    <hr>
                    <table id="example2" class="table">
                      <thead>
                        <tr>
                          <th class="wd-10p"># SI</th>
                          <th class="wd-15p">Brand Avatar</th>
                          <th class="wd-15p">Brand Name</th>
                          <th class="wd-25p">Brand Description</th>
                          <th class="wd-20p">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($carCompanys)==0)
                            <div class="card bd-0">
                                <h2 class="text-center">No Car Brand added yet!</h2>
                            </div>
                        @endif
                        <?php $i = 1;?>
                        @if(!empty($carCompanys))
                            @foreach($carCompanys as $carCompany)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    <img src="{{$carCompany->avatar}}" class="wd-100p wd-sm-100 rounded mg-sm-r-20 mg-b-20 mg-sm-b-0 " alt="">
                                </td>
                                <td>{{$carCompany->name}}</td>
                                <td>{{ $carCompany->desc }}</td>
                                <td>
                                    <a href="{{route('admin.car-company.edit',$carCompany->id)}}" title="Edit" class="btn btn-success"><i class="typcn typcn-edit"></i></a>
                                    <form method="POST"  id="delete-form-{{$carCompany->id}}" action="{{route('admin.car-company.destroy', $carCompany->id)}}" style="display:none;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                    </form>
                                    <button onclick="if(confirm('Are You Sure, You Want to Delete This?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$carCompany->id}}').submit();
                                    }else{
                                        event.preventDefault();
                                    }" title="Delete" class="btn btn-danger"><i class="typcn typcn-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
