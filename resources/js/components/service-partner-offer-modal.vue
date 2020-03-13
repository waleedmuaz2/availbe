<template>
    <div class="modal fade" id="partnerServiceOffer" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-theme-colored">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title text-white" id="popup_myModalLabel">Reservation Form</h4>
                </div>
                <div v-if="offer" class="modal-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Service Request Type
                        </a>
                        <template v-for="service in offer.services">
                            <a href="#" class="list-group-item">{{service}}</a>
                        </template>
                    </div>
                    <hr>
                    <h5>Vehicle Detaild</h5>
                    <table class="table">
                        <tr>
                            <td>Car Brand</td>
                            <td>Car Type</td>
                            <td>Car Model</td>
                            <td>Car Year</td>
                        </tr>
                        <tr>
                            <td>{{offer.car_brand}}</td>
                            <td>{{offer.car_type}}</td>
                            <td>{{offer.car_model}}</td>
                            <td>{{offer.car_year}}</td>
                        </tr>
                    </table>
                    <hr>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Preferred Service Location</h3>
                        </div>
                        <div class="panel-body">
                            {{offer.address}}
                        </div>
                    </div>
                    <hr>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Preferred Service Time</h3>
                        </div>
                        <div class="panel-body">
                            {{offer.preferred_time|redabledate}}
                        </div>
                    </div>
                    <hr>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="120" v-bind:style="{width: timmer + '%'}">
                            <span class="sr-only"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" @click="decline()" class="btn btn-warning btn-lg  m0-auto"
                            data-dismiss="modal">Decline
                    </button>
                    <button type="button" @click="accept()" data-dismiss="modal" class="btn btn-success btn-lg m0-auto">Accept</button>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        computed: {
            timmer() {
                return ((this.$store.getters.getTimmer / 120) * 100)
            },
            offer() {
                console.log(this.$store.getters.getOffer);
                return this.$store.getters.getOffer
            },
        },
        methods: {
            accept() {
                this.$store.dispatch('offerAccpet')
            },
            decline() {
                this.$store.dispatch('offerDecline')
            }
        }
    }
</script>
