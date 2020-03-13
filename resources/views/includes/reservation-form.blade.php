<div class="modal fade bs-example-modal-book" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-theme-colored">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-white" id="popup_myModalLabel">Reservation Form</h4>
            </div>
            <div class="p-40">
                <form id="popup_reservation_form" name="reservation_form" class="reservation-form" method="post"
                      action="{{route('service-request.store')}}">
                    @csrf
                    <div class="row">
                        <div class="reservation-first-step">
                            <h3 class="text-theme-colored line-bottom ml-15 mb-30 mr-15">Vehicle <span
                                        class="text-theme-color-2">Information</span>
                            </h3>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <label>Car Name</label>
                                    <div class="styled-select">
                                        {{--<select id="popup_car_name_select" name="car_name_select" class="form-control ddslick" required>--}}
                                        <select id="" name="car_brand_id" class="form-control" required>
                                            @foreach(\App\Models\CarBrand::all())->sortBy('name') as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <label>Car Type</label>
                                    <div class="styled-select">
                                        {{--<select id="popup_car_type_select" name="car_type_select" class="form-control ddslick" required="">--}}
                                        <select name="car_type_id" class="form-control ddslick" required="">
                                            @foreach(\App\Models\CarType::all())->sortBy('type') as $t)
                                                <option value="{{$t->id}}">{{$t->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <!-- Ui-Slider-Handle Markup -->
                                    <label for="popup_amount">Car Year:</label>
                                    <input type="text" id="popup_amount" data-target="popup-slider-range-max"
                                           class="no-border slider-range" name="car_year" required="">
                                    <div id="popup-slider-range-max"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <label>Car Model</label>
                                    <input placeholder="Type Model Here" type="text" id="popup_car_model"
                                           name="car_model"
                                           class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <label>Type Of Service</label>
                                    <div class="styled-select">
                                        <select id="popup_car_service_cat_select" name="service_category_id"
                                                class="form-control"
                                                required>
                                            <option selected value>Select a Service Category</option>
                                            @foreach($serviceCategories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-30">
                                    <label>Service</label>
                                    <div class="styled-select">
                                        <select id="popup_car_service_select" name="services_id[]" class="form-control" required>
                                            <option selected value>Select a Service</option>
                                            @foreach($services as $service)
                                                @if($service->service_category_id!=null)
                                                <option class="service-{{$service->service_category_id}} service hidden" value="{{$service->id}}">{{$service->name}}
                                                </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <label class="mb-20">Number of Wheels</label><br>
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
                            <div class="clearfix"></div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <label>Extra Services</label><br>
                                    @foreach($services as $service)
                                        @if($service->service_category_id==null)
                                            <label class="control control--checkbox">{{$service->name}}
                                                <input value="{{$service->id}}" type="checkbox" name="services_id[]"/>
                                                <div class="control__indicator"></div>
                                            </label>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <label>Preferred Date & Time Of Booking</label>
                                    <input name="preferred_service_time" class="form-control required datetime-picker" type="text"
                                    placeholder="Type Reservation Date" aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="reservation-second-step">
                            <h3 class="text-theme-colored line-bottom mt-0 mr-15 mb-30 ml-15">Personal <span class="text-theme-color-2">Information</span></h3>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input placeholder="Enter Name" type="text" id="popup_reservation_name" name="reservation_name"
                                    required="" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input placeholder="Email" type="text" id="popup_reservation_email" name="user_email" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input placeholder="Your Phone" type="text" id="popup_reservation_phone" name="reservation_phone" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input placeholder="Your Address" type="text" id="popup_reservation_address" name="reservation_address" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea placeholder="Enter Message" rows="5" class="form-control required" name="message"
                                  aria-required="true"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group text-center mb-0 mt-20">
                                    <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-color-2-4px" data-loading-text="Please wait...">Submit Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#popup_car_service_cat_select').on('change', function () {
        var cat_id = $(this).val();
        $('.service').addClass('hidden');
        var avi = '.service-' + cat_id;
        $(avi).removeClass('hidden');
    });
    $("#popup_reservation_form").validate({
        submitHandler: function (form) {
            var form_btn = $(form).find('button[type="submit"]');
            var form_result_div = '#popup_form-result';
            $(form_result_div).remove();
            form_btn.before('<div id="popup_form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            $(form).submit();
            // $(form).ajaxSubmit({
            //     dataType: 'json',
            //     success: function (data) {
            //         if (data.status == 'true') {
            //             $(form).find('.form-control').val('');
            //         }
            //         form_btn.prop('disabled', false).html(form_btn_old_msg);
            //         $(form_result_div).html(data.message).fadeIn('slow');
            //         setTimeout(function () {
            //             $(form_result_div).fadeOut('slow')
            //         }, 6000);
            //     }
            // });
        }
    });
</script>
