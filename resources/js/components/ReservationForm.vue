<template>
    <form :action="url" method="post">
        <input type="hidden" :value="token" name="_token">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Car Brand</label>
                    <select name="car_brand_id" class="form-control" required>
                        <template v-for="brand in carBrands">
                            <option v-bind:value="brand.id">{{brand.name}}</option>
                        </template>
                    </select>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Car Type</label>
                    <select name="car_type_id" class="form-control" required>
                        <template v-for="type in cartypes">
                            <option v-bind:value="type.id">{{type.type}}</option>
                        </template>
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
                <div class="form-group">
                    <label>Type Of Service</label>
                    <select v-model="current_service_category_id"
                            name="service_category_id"
                            class="form-control"
                            required>
                        <option selected :value="null">Select a service Category</option>
                        <template v-for="cat in serviceCategories">
                            <option :value="cat.id">{{cat.name}}</option>
                        </template>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Service</label>
                    <select id="popup_car_service_select" name="services_id[]"
                            class="form-control js-example-basic-single"
                            required>
                        <option :value="null">Please Select a Service Type first.</option>
                        <template v-for="service in services">
                            <option :value="service.id">{{service.name}}</option>
                        </template>
                    </select>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <p>Extra Services</p>
                    <template v-for="extra in extraService">
                        <label class="control control--checkbox">{{extra.name}}
                            <input :value="extra.id" type="checkbox" name="services_id[]"/>
                            <div class="control__indicator"></div>
                        </label>
                    </template>
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
                    <input type="hidden" name="state" v-model="address.administrative_area_level_1">
                    <input type="hidden" name="country" v-model="address.country">
                    <input type="hidden" name="lat" v-model="address.latitude">
                    <input type="hidden" name="lng" v-model="address.longitude">
                    <input type="hidden" name="route" v-model="address.route">
                    <vue-google-autocomplete
                            name="address"
                            ref="address"
                            :enable-geolocation="true"
                            id="reserveMap"
                            classname="form-control asdasdcas"
                            placeholder="Where you want the service ?"
                            v-on:placechanged="getAddressData"
                    >
                    </vue-google-autocomplete>
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
</template>

<script>
    import VueGoogleAutocomplete from 'vue-google-autocomplete'
    import JQuery from 'jquery'
    export default {
        data() {
            return {
                current_service_category_id: null,
                address: '',
                serviceCategories: [],
                services: null,
                extraService: [],
                carBrands: [],
                cartypes: [],
                url: BASE_URL + '/service-request',
                token: document.head.querySelector('meta[name="csrf-token"]').content
            }
        },
        created() {
            this.getServices();
            this.getExtraServices();
            this.getCarBrands();
            this.getCarTypes();
            let recaptchaScript = document.createElement('script')
            recaptchaScript.setAttribute('src', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js')
            document.head.appendChild(recaptchaScript)
        },
        mounted() {

        },
        watch: {
            current_service_category_id(v) {
                let self = this;
                if (v !== null) {
                    this.serviceCategories.forEach((va) => {
                        if (va.id === v) {
                            self.services = va.services
                        }
                    })
                } else {
                    this.services = null;
                }
            }
        },
        methods: {
            getAddressData: function (addressData, placeResultData, id) {
                this.address = addressData;
            },
            getServices() {
                let self = this;
                axios.get('/api/services').then((res) => {
                    self.serviceCategories = res.data;
                });
            },
            getExtraServices() {
                let self = this;
                axios.get('/api/extra-services').then((res) => {
                    self.extraService = res.data;
                });
            }
            ,
            getCarBrands() {
                let self = this;
                axios.get('/api/car-brand').then((res) => {
                    self.carBrands = res.data;
                });
            }
            ,
            getCarTypes() {
                let self = this;
                axios.get('/api/car-type').then((res) => {
                    self.cartypes = res.data;
                });
            }
        },
        components: {VueGoogleAutocomplete}
    }
    let $ = JQuery
    $(document).ready(function(){
        // $('.js-example-basic-single').select2();
    });
</script>

<style scoped>

</style>