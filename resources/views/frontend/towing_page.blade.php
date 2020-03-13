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
    .result{
        background: #00000012;
        padding: 5px 13px 5px 13px;
    }
    .result p{
        background: #fff;
        text-align: center;
        color: #000;
        font-size: 17px;
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
                 <div class="panel-heading" style="background-color: #000;"><h4 class="text-white">Reserve Your Towing Service</h4></div>
                 <div class="panel-body">
                    <form action="{{url('service-request')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Car Brand</label>
                                    <select name="car_brand_id" class="form-control" required>
                                      <option selected="" disabled="">Select car Brand</option>
                                      @if(!empty($car_brands))
                                        @foreach($car_brands as $cb) 
                                             <option value="{{$cb->id}}">{{$cb->name}}</option>       
                                        @endforeach
                                      @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Car Type</label>
                                    <select name="car_type_id" class="form-control" required>
                                        <option selected="" disabled="">Select car type</option>
                                        @if(!empty($car_types))
                                            @foreach($car_types as $ct) 
                                                 <option value="{{$ct->id}}">{{$ct->type}}</option>       
                                            @endforeach
                                        @endif
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
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Car Model</label>
                                    <input placeholder="Type Model Here" type="text" id="popup_car_model"
                                           name="car_model"
                                           class="form-control" required="">
                                </div>
                            </div>
                        </div>
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
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group ">
                                    <input type="hidden" id="curState" name="state" value="">
                                    <input type="hidden" id="curCountry" name="country" value="">
                                    <input type="hidden" id="curLat" name="lat" value="">
                                    <input type="hidden" id="curLng" name="lng" value="">
                                    <input type="hidden" id="curRoute" name="route" value="">
                                    <input type="hidden" id="origin" name="origin" value="">
                                    <input type="text" id="currentLocationAutocomplete" name="address" placeholder="Your Current Location " class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group ">
                                    <input type="hidden" id="desState" name="state" value="">
                                    <input type="hidden" id="desCountry" name="country" value="">
                                    <input type="hidden" id="desLat" name="lat" value="">
                                    <input type="hidden" id="desLng" name="lng" value="">
                                    <input type="hidden" id="desRoute" name="route" value="">
                                    <input type="hidden" id="destination" name="destination" value="">
                                    <input type="text" id="destinationLocationAutocomplete" name="address" placeholder="Your Destination" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12" style="margin-top: 5px;">
                                <button type="button" class="btn btn-success" onclick="calculateDistance();">Calculate</button>
                            </div>
                            <div class="col-sm-12">
                                <div id="calculatedResult">
                                    
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Preferred Date & Time Of Booking</label>
                                    <input name="preferred_service_time" class="form-control required datetime-picker"
                                           type="text"
                                           placeholder="Type Date" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
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
    //get google map for current data
    google.maps.event.addDomListener(window,'load',initialize);
    function initialize(){
        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('currentLocationAutocomplete'));
        google.maps.event.addListener(autocomplete,'place_changed',function(){
            var places = autocomplete.getPlace();
            var origin = places.formatted_address;
            var curLat = places.geometry.location.lat();
            var curLng = places.geometry.location.lng();
            var filtered_country_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("country");
            });
            var curCountry = filtered_country_array.length ? filtered_country_array[0].long_name: "";

            var filtered_state_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("administrative_area_level_1");
            });
            var curState = filtered_state_array.length ? filtered_state_array[0].long_name: "";

            var filtered_route_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("route");
            });
            var curRoute = filtered_route_array.length ? filtered_route_array[0].long_name: "";

            var filtered_zip_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("postal_code");
            });
            var curZip = filtered_zip_array.length ? filtered_zip_array[0].long_name: "";
            document.getElementById("curState").value = curState;    
            document.getElementById("curCountry").value = curCountry;    
            document.getElementById("curLat").value = curLat;    
            document.getElementById("curLng").value = curLng;    
            document.getElementById("curRoute").value = curRoute;   
            document.getElementById("origin").value = origin;   
        });
    }

    //get destination data
    google.maps.event.addDomListener(window,'load',desIitialize);
    function desIitialize(){
        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('destinationLocationAutocomplete'));
        google.maps.event.addListener(autocomplete,'place_changed',function(){
            var places = autocomplete.getPlace();
            var destination = places.formatted_address;
            var desLat = places.geometry.location.lat();
            var desLng = places.geometry.location.lng();
            var filtered_country_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("country");
            });
            var desCountry = filtered_country_array.length ? filtered_country_array[0].long_name: "";

            var filtered_state_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("administrative_area_level_1");
            });
            var desState = filtered_state_array.length ? filtered_state_array[0].long_name: "";

            var filtered_route_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("route");
            });
            var desRoute = filtered_route_array.length ? filtered_route_array[0].long_name: "";
            var filtered_zip_array = places.address_components.filter(function(address_component){
                return address_component.types.includes("postal_code");
            });
            var desZip = filtered_zip_array.length ? filtered_zip_array[0].long_name: "";
            document.getElementById("desState").value = desState;    
            document.getElementById("desCountry").value = desCountry;    
            document.getElementById("desLat").value = desLat;    
            document.getElementById("desLng").value = desLng;    
            document.getElementById("desRoute").value = desRoute; 
            document.getElementById("destination").value = destination;   
        });
    }

    //submit calculation form
   function calculateDistance(){
        var origin = $('#origin').val();
        var destination = $('#destination').val();
        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
                origins: [origin],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                // unitSystem: google.maps.UnitSystem.IMPERIAL,
                unitSystem: google.maps.UnitSystem.metric,
                avoidHighways: false,
                avoidTolls: false
            }, callback );
    }

   function callback(response, status){
        if(status != google.maps.DistanceMatrixStatus.OK){
            alert('Error was: ' + status);
        }else{
            var origin = response.originAddresses[0];
            var destination = response.destinationAddresses[0];

            if(response.rows[0].elements[0].status === 'ZERO_RESULTS'){
                alert('Error was: ' + response.rows[0].elements[0].status);
            }else{
                var distance = response.rows[0].elements[0].distance;
                var duration = response.rows[0].elements[0].duration;
                var distance_in_kilo = distance.value/1000;
                var distance_in_mile = distance.value/1609.34;
                var duration_text = duration.text;
                var duration_value = duration.value;

                var calculatedOutput = '<div class="result">';
                    calculatedOutput += '<p>Total Distance : ' +Math.ceil(distance_in_mile) +' miles </p>';
                    calculatedOutput += '<p>Total Duration : '+duration_text+' ( Fastest route )</p>';
                    calculatedOutput += '<p>Total Cost : $xx</p>';
                    calculatedOutput += '</div>';
                $('#calculatedResult').html(calculatedOutput);    
            }
        }
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
                    $.each(data,function(i,obj){
                        output +='<option value="'+obj.value+'">'+obj.name+'</option>';
                    });
                     $('#serviceMatched').html(output); 
                }
            });
        });
    });
</script>
@endpush