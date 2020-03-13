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
        <div class="row row-sm mg-t-20 mg-b-15 mg-sm-b-20">
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
                            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Service Category List</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('admin.service-category.create')}}" title="Add new" class="btn btn-primary" style="float: right;"><i class="typcn typcn-plus mg-r-5"></i>Add New</a>
                        </div>
                    </div>
                    <hr>
                    <table id="example2" class="table">
                      <thead>
                        <tr>
                          <th class="wd-20p">#</th>
                          <th class="wd-20p">Category Name</th>
                          <th class="wd-25p">Category Slang</th>
                          <th class="wd-20p">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1;?>
                        @if(!empty($serviceCategories))
                            @foreach($serviceCategories as $serviceCategorie)
                            <tr>
                              <td>{{ $i++ }}</td>
                              <td>{{$serviceCategorie->name}}</td>
                              <td>{{$serviceCategorie->slang}}</td>
                              <td>
                                    <a href="{{ route('admin.service-category.edit',$serviceCategorie->id) }}" title="Edit" class="btn btn-success"><i class="typcn typcn-edit"></i></a>
                                    <form method="POST"  id="delete-form-{{$serviceCategorie->id}}" action="{{route('admin.service-category.destroy', $serviceCategorie->id)}}" style="display:none;">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                    </form>
                                    <button onclick="if(confirm('Are You Sure, You Want to Delete This?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$serviceCategorie->id}}').submit();
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
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- az-content-body -->
@endsection