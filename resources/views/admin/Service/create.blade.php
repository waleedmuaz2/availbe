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
                            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Add Service</h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('admin.service.index')}}" type="buttn" class="btn btn-primary" style="float: right;"><i class="typcn typcn-th-list mg-r-5"></i> View List </a>
                        </div>
                    </div>
                    <hr>
                    <form action="{{route('admin.service.store')}}" method="POST">
                        @csrf
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label>Service Name</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" placeholder="Enter Service eg. Tire Replacement Service">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label>Service slang (Should be Unique across the platform )</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" name="slang" class="form-control" placeholder="Enter slang eg tire_replacement_ervice">
                                @if ($errors->has('slang'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('slang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label>Select Service Category (If this is an extra service, leave it blank.) </label>
                            </div>
                            <div class="col-sm-10">
                                <select name="service_category_id" class="form-control">
                                    @if(count($serviceCategories)==0)
                                        <option>Add a service category first</option>
                                    @else
                                        <option value>Select a service category</option>
                                        @foreach($serviceCategories as $serviceCategorie)
                                            <option value="{{$serviceCategorie->id}}">{{$serviceCategorie->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label>Select Car Category</label>
                            </div>
                            <div class="col-sm-10">
                                <select id="mainCategory" name="selected_car_category_id" class="form-control">
                                    <option selected="" disabled="">Select Car Category</option>
                                    @foreach($carCategories as $categories)
                                        <option value="{{$categories->id}}">{{$categories->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label>Select Car Type</label>
                            </div>
                            <div class="col-sm-10">
                                <select name="car_type_id" class="form-control" id="matchedCarCategory">
                                    <option selected="" disabled="">Select Car Category First</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <label>Cost</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" name="cost" class="form-control" placeholder="Enter Service Cost">
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
@push('scripts')
<script>
    $(document).ready(function(){
        //get car type according to car category
        $("#mainCategory").change(function () {
            var id = this.value;
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{route("admin.get-car-type-by-id")}}',
                method: "POST",
                data: {id: id, _token: _token},
                dataType: 'json',
                success: function (data) {
                    var output = '';
                    if(data.length > 0){
                       $.each(data,function(i,obj){
                            output +='<option value="'+obj.id+'">'+obj.name+'</option>';
                        }); 
                   }else{
                        output +='<option selected>Add car type first</option>';
                   }
                    
                     $('#matchedCarCategory').html(output); 
                }
            });
        });
    });
</script>
@endpush
