<template>
    <div>
        <div class="az-content-header d-block d-md-flex">
            <div>

            </div>
        </div>
        <div class="az-content-body">
            <div class="row row-sm mg-b-15 mg-sm-b-20">
                <div class="col-lg-12 col-xl-12 col-xs-12">
                    <div class="card card-dashboard-six">
                        <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Al Service Requests</h2>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-hover mg-b-0">
                                <thead>
                                <tr>
                                    <th class="text-center">Preferred Service Time</th>
                                    <th class="text-center">Preferred Address</th>
                                    <th class="text-center">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <template v-for="request in allRequests">
                                    <tr @click="show(request)">
                                        <td class="text-center"><span
                                                v-html="$options.filters.redableDate(request.preferred_service_time)"></span>
                                        </td>
                                        <td class="text-center">{{request.reservation_address}}</td>
                                        <td class="text-center">$320,800</td>
                                    </tr>
                                </template>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- card -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- az-content-body -->
        <!-- LARGE MODAL -->
        <div id="waitingForConfirmation" class="modal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">This Service Request are waiting for confirmation.</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table  mg-b-0">
                            <thead>
                            <tr>
                                <th class="text-center">Date</th>
                                <th class="text-center">Preferred Address</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <template v-for="request in allRequests">
                                <tr @click="show(request)">
                                    <td class="text-center"><span
                                            v-html="$options.filters.redableDate(request.updated_at)"></span></td>
                                    <td class="text-center">{{request.reservation_address}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning btn-block">Confirm</a>
                                    </td>
                                </tr>
                            </template>
                            </tbody>
                        </table>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-outline-light">Not Now</button>
                    </div>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

        <div id="currentModel" class="modal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Request ID : # {{current.request_id}}</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <h6 v-if="current.preferred_service_time">Preferred Date : <span
                                v-html="$options.filters.redableDate(current.preferred_service_time)"></span>
                        </h6>

                    </div><!-- modal-body -->
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-outline-light">Not Now</button>
                    </div>
                </div>
            </div><!-- modal-dialog -->
        </div><!-- modal -->

    </div>
</template>

<script>
    var moment = require('moment');
    export default {
        data() {
            return {
                allRequests: [],
                waiting: [],
                current: {}
            }
        },
        filters: {
            sort: function (value) {
                if (!value) return ''
                value = value.toString()
                return value.charAt(0).toUpperCase() + value.slice(1)
            },
            redableDate(value) {
                // Split timestamp into [ Y, M, D, h, m, s ]
                var t = value.split(/[- :]/);

                // Apply each element to the Date function
                var d = new Date(Date.UTC(t[0], t[1] - 1, t[2], t[3], t[4], t[5]));

                return moment(d).format('h:mm a<br>MMM Do YYYY');
                ;
            }
        },
        mounted() {
            let self = this;
            axios.get('/customer/service-request').then((res) => {
                self.allRequests = res.data;
                res.data.forEach((v) => {
                    if (v.confirmed == false) {
                        self.waiting.push(v);
                    }
                })
                if (self.waiting.length > 0) {
                    $('#waitingForConfirmation').modal('show')
                }
            })
            setTimeout(function () {

            }, 2000)

        },
        methods: {
            show(v) {
                this.current = v;
                $('#currentModel').modal('show')
            }
        }
    }
</script>




