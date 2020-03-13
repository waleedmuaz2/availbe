@extends('layouts.frontendLayout.frontend_design')
@push('styles')
<style>
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        top: 11px;
    }
    .select2-container .select2-selection--single .select2-selection__rendered {
        padding: 10px 10px !important;
    }
    .select2-container--default .select2-selection--single {
        border-radius: unset;
    }
    .select2-container .select2-selection--single {
        height: 45px;
    }
</style>
@endpush
@section('content')
<div class="main-content">
  <section>
      <div class="container">
          <div class="row">
            <div class="col-md-12">
               <div class="panel panel-default">
                 <div class="panel-heading" style="background-color: #000;"><h4 class="text-white">Reservation Form</h4></div>
                 <div class="panel-body">
                    <form action="{{url('service-request')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Car Brand</label>
                                    <select name="car_brand_id" class="form-control" required>
                                      <option selected="" disabled="">Select car Brand</option>
                                      @if(!empty($car_companies))
                                        @foreach($car_companies as $cb) 
                                             <option value="{{$cb->id}}">{{$cb->name}}</option>       
                                        @endforeach
                                      @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Car Model</label>
                                    <input placeholder="Type Model Here" type="text" id="popup_car_model"
                                           name="car_model" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Car Category</label>
                                    <select id="mainCarCategory" name="car_category_id" class="form-control" required>
                                      <option selected="" disabled="">Select Car Category</option>
                                      @if(!empty($car_types))
                                        @foreach($car_types as $cb) 
                                             <option value="{{$cb->id}}">{{$cb->type}}</option>       
                                        @endforeach
                                      @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Car Type</label>
                                    <select name="car_type_id" class="form-control" id="matchedCarCategory">
                                        <option selected="" disabled="">Select Car Category First</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <!-- Ui-Slider-Handle Markup -->
                                    <label for="popup_amount">Car Year:</label>
                                    <select name="car_year" class="form-control" required>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Type Of Service</label>
                                    <select id="mainCategory" name="service_category_id" class="form-control" required>
                                        <option selected="" disabled="">Select a service Type</option>
                                        @if(!empty($service_category))
                                            @foreach($service_category as $st) 
                                                 <option value="{{$st->id}}">{{$st->name}}</option>       
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Service</label>
                                    <select id="serviceMatched" name="services_id[]" class="form-control js-example-basic-single"required >
                                        <option selected="" disabled="">Please Select a Service Type first.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <p>Extra Services</p>
                                        @if(!empty($extra_Service))
                                            @foreach($extra_Service as $es) 
                                                <label class="control control--checkbox">{{$es->name}}
                                                  <input value="{{$es->id}}" type="checkbox" name="services_id[]"/>
                                                  <div class="control__indicator"></div>
                                                </label>       
                                            @endforeach
                                        @endif
                                </div>
                              </div>
                            </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <label>Number of Wheels</label>
                                <div class="form-group">
                                    <label class="control control--radio">1
                                        <input value="1" type="radio" name="number_of_wheels"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--radio">2
                                        <input value="2" type="radio" name="number_of_wheels"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--radio">3
                                        <input value="3" type="radio" name="number_of_wheels"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--radio">4
                                        <input value="4" type="radio" name="number_of_wheels" checked="checked"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--radio">6
                                        <input value="6" type="radio" name="number_of_wheels"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                    <label class="control control--radio">8
                                        <input value="8" type="radio" name="number_of_wheels"/>
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Preferred Date & Time Of Booking</label>
                                    <input name="preferred_service_time" class="form-control required datetime-picker"
                                           type="text"
                                           placeholder="Type Reservation Date" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <input type="hidden" id="state" name="state" value="">
                                    <input type="hidden" id="country" name="country" value="">
                                    <input type="hidden" id="lat" name="lat" value="">
                                    <input type="hidden" id="lng" name="lng" value="">
                                    <input type="hidden" id="route" name="route" value="">
                                    <input type="text" id="addressAutocomplete" name="address" placeholder="Where you want the service ?" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <input placeholder="Exact Location (optional)" type="text"
                                           name="exact_location" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <input placeholder="Enter Name" type="text" id="popup_reservation_name"
                                           name="reservation_name"
                                           required="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <input placeholder="Email" type="text" id="popup_reservation_email"
                                           name="user_email"
                                           class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <input placeholder="Your Phone" type="text" id="popup_reservation_phone"
                                           name="reservation_phone" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <textarea placeholder="Message"
                                              name="message" class="form-control" required></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <p class="text-center">
                            <button class="btn btn-success">Submit Request</button>
                        </p>
                    </form>
                 </div>
               </div>
            </div>
          </div>
      </div>
  </section>
</div>
@endsection
@push('scripts')
<script>
    //get google map data
    google.maps.event.addDomListener(window,'load',initialize);
    function initialize(){
        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('addressAutocomplete'));
        google.maps.event.addListener(autocomplete,'place_changed',function(){
            var places = autocomplete.getPlace();
            var latitude = places.geometry.location.lat();
            var longitude = places.geometry.location.lng();
            var filtered_country_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("country");
            });
            var country = filtered_country_array.length ? filtered_country_array[0].long_name: "";

            var filtered_state_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("administrative_area_level_1");
            });
            var state = filtered_state_array.length ? filtered_state_array[0].long_name: "";

            var filtered_route_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("route");
            });
            var route = filtered_route_array.length ? filtered_route_array[0].long_name: "";

            var filtered_zip_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("postal_code");
            });
            var zip = filtered_zip_array.length ? filtered_zip_array[0].long_name: "";
            document.getElementById("state").value = state;    
            document.getElementById("country").value = country;    
            document.getElementById("lat").value = latitude;    
            document.getElementById("lng").value = longitude;    
            document.getElementById("route").value = route;    
        });
    }

    $(document).ready(function(){
        $('.js-example-basic-single').select2();
        //get5 service  according to service category
        $("#mainCategory").change(function () {
            var id = this.value;
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{route("get-services-by-id")}}',
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
                            output +='<option selected>No service found</option>';
                       }
                     $('#serviceMatched').html(output); 
                }
            });
        });
        //get car type according to car category
        $("#mainCarCategory").change(function () {
            var id = this.value;
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{route("get-front-car-type")}}',
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