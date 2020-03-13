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
                            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Service List</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('admin.service.create')}}" type="buttn" class="btn btn-primary" style="float: right;"><i class="typcn typcn-plus mg-r-5"></i> Add New</a>
                        </div>
                    </div>
                    <hr>
                    <table id="example2" class="table">
                      <thead>
                        <tr>
                          <th># SI</th>
                          <th>Service Name</th>
                          <th>Service Category</th>
                          <th>Car Category</th>
                          <th>Car Type</th>
                          <th>Cost</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($services)==0)
                            <div class="card bd-0">
                                <h2 class="text-center">No service added yet!</h2>
                            </div>
                        @endif
                        <?php $i = 1;?>
                        @if(!empty($services))
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$service->name}}</td>
                                <td>{{($service->category)?$service->category->name:'Extra Service'}}</td>
                                <td>{{$service->carCategory->type}}</td>
                                <td>{{$service->carType->name}}</td>
                                <td>{{$service->cost}}</td>
                                <td>
                                    <a href="{{route('admin.service.edit',$service->id)}}" title="Edit" class="btn btn-success"><i class="typcn typcn-edit"></i></a>
                                    <form method="POST"  id="delete-form-{{$service->id}}" action="{{route('admin.service.destroy', $service->id)}}" style="display:none;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                    </form>
                                    <button onclick="if(confirm('Are You Sure, You Want to Delete This?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$service->id}}').submit();
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
