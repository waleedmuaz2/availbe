@extends('layouts.font-app')

@section('content')
    <div class="icon-box mb-0 p-0">
        <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register as
            Partners Now.</h4>
    </div>
    <hr>
    <p class="text-gray">Register as a partner using this page then select what category
        you fall into. You then get access to a profile. </p>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form id="reg-form" action="{{route('register')}}" class="form"
          method="post">
        {{csrf_field()}}

        @if (session('waiting_for_reg', false))   {{--// if a user is customer do not show this section--}}
        <h4 class="text-gray pt-10 mt-0 ">
            Hi! {{session('customer_name')}} . Please set a Password for your
            account!</h4>
        <input type="hidden" value="true" name="waiting_for_reg">
        <input type="hidden" value="{{session('email')}}" name="email">
        @else
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <label>Select Partners Type</label>
                        <div class="styled-select">
                            <select
                                    name="partner_type"
                                    class="form-control ddslick {{ $errors->has('partner_type') ? ' is-invalid' : '' }}">
                                <option value="">Select a partner type</option>
                                <option {{ (old('partner_type')=='banking_partner')?'selected':'' }} value="banking_partner">
                                    Banking
                                    Partner
                                </option>
                                <option {{ (old('partner_type')=='collusion_center_partner')?'selected':'' }} value="collusion_center_partner">
                                    Collusion Center Partner
                                </option>
                                <option {{ (old('partner_type')=='inventory_partner')?'selected':'' }} value="inventory_partner">
                                    Inventory Partner
                                </option>
                                <option {{ (old('partner_type')=='insurance_partner')?'selected':'' }} value="insurance_partner">
                                    Insurance Partner
                                </option>
                                <option {{ (old('partner_type')=='service_partner')?'selected':'' }} value="service_partner">
                                    Service Partner
                                </option>
                                <option {{ (old('partner_type')=='towing_partner')?'selected':'' }} value="towing_partner">
                                    Towing Partner
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="service_type_div" class="form-group hidden">
                        <label>Choos a service type</label>
                        <div class="styled-select">
                            <select name="service_type"
                                    class="form-control ddslick {{ $errors->has('service_type') ? ' is-invalid' : '' }}">
                                @foreach($serviceCategories as $cat)
                                    <option {{ (old('service_type')==$cat->slang)?'selected':'' }} value="{{$cat->slang}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class=" col-md-12">
                    <google-place></google-place>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-6">
                    <label for="form_name">First Name</label>
                    <input value="{{ old('first_name') }}" required id="form_first_name"
                           name="first_name"
                           class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                           type="text">
                    <p class="text-danger help-block">
                        @if ($errors->has('first_name'))
                            <span class="text-danger"
                                  role="alert"><strong>{{ $errors->first('last_name') }}</strong></span>
                        @endif
                    </p>
                </div>
                <div class=" col-md-6">
                    <label>Last Name</label>
                    <input value="{{ old('last_name') }}" required id="form_last_name"
                           name="last_name"
                           class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                           type="text">
                    <p class="text-danger help-block">
                        @if ($errors->has('last_name'))
                            <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                        @endif
                    </p>
                </div>

            </div>

            <div class="row">
                <div class=" col-md-6">
                    <label for="email">Email Address</label>

                    <input id="email" type="email"
                           class="form-control"
                           name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="text-danger"
                              role="alert"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>
                <div class=" col-md-6">
                    <label>Company Name</label>
                    <input required id="company_name" name="company_name" value="{{ old('company_name') }}"
                           class="form-control"
                           type="text">
                    <p class="text-danger help-block">
                        @if ($errors->has('company_name'))
                            <span class="text-danger"
                                  role="alert"><strong>{{ $errors->first('company_name') }}</strong></span>
                        @endif
                    </p>
                </div>
            </div>
        @endif
        <div class="row">
            <div class=" col-md-6">
                <label for="form_choose_password">Choose Password</label>
                <input class="form-control"
                       name="password" required type="password">

                @if ($errors->has('password'))
                    <span class="text-danger"
                          role="alert"><strong>{{ $errors->first('password') }}</strong></span>
                @endif

            </div>
            <div class=" col-md-6">
                <label>Re-enter Password</label>
                <input required name="password_confirmation"
                       class="form-control" type="password">
                <p class="text-danger"></p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-md-12">
                <button class="btn btn-dark btn-lg btn-block" form="reg-form"
                        type="submit">
                    Register
                </button>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script>
        if ($("[name='partner_type']").val() == 'service_partner') {
            st.fadeIn(2000).removeClass('hidden')
        }

        var asc = $("[name='partner_type']").on('change', function () {
            console.log(asc.val());
            var st = $("#service_type_div");
            if (asc.val() == 'service_partner') {
                console.log('asd');
                st.fadeIn(2000).removeClass('hidden')
            } else {
                st.fadeOut(2000).addClass('hidden')
            }
        })


        $("[name='country']").on('change', function () {
            var c_id = $(this).val();
            var state_s = '.state-' + c_id;
            $(".state").addClass('hidden');
            $(state_s).removeClass('hidden');
        })
    </script>
@endsection
