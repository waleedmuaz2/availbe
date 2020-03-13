require('./bootstrap');
import Echo from 'laravel-echo'
import 'es6-promise/auto'
import store from "./store/index";
import moment from 'moment'

window.BASE_URL = 'http://' + window.location.host;
window.Pusher = require('pusher-js');
window.Vue = require('vue');

Vue.config.productionTip = false;

Vue.prototype.$userId = document.querySelector("meta[name='user-id']").getAttribute('content');
Vue.prototype.$userRoles = document.querySelector("meta[name='user-roles']").getAttribute('content');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('resarvation-form', require('./components/ReservationForm.vue').default);
Vue.component('customer-dashboard', require('./components/Customer/index').default);
Vue.component('google-place', require('./components/google-place').default);
Vue.component('service-partner-service-offer-model', require('./components/service-partner-offer-modal').default);
Vue.component('customer-partner-service-offer-model', require('./components/customer-offer-modal').default);


const app = new Vue({
    el: '#app',
    store,
    mounted() {
        let self = this;
        const uid = document.head.querySelector('meta[name="user-uid"]').content;
        let ECHO;
        if (uid !== 'null') {
            this.$store.commit('setUserRoles', this.$userRoles);
            ECHO = new Echo({
                broadcaster: 'pusher',
                key: 'AE6AD4757773A7B25527622D7B79997E' + `?uid=${uid}&`,
                wsHost: window.location.hostname,
                wsPort: 6001,
                disableStats: true,
            });
            if (this.hasRole('service_partner')) {
                this.servicePartnerChannel(ECHO);
            }
            if (this.hasRole('customer')) {
                this.customerChannel(ECHO);
            }


        }
    },
    methods: {
        hasRole(role) {
            var roles = JSON.parse(this.$userRoles);
            return roles.find((v) => {
                if (v === role) {
                    return true
                } else {
                    return false
                }
            })
        },
        customerChannel(ECHO) {
            let self = this;
            ECHO.private(`customer.${self.$userId}`)
                .listen('ServiceRequestAccepted', (d) => {
                    self.$store.commit('setServiceOffer', d)
                    $('customerServiceOffer').modal('show')
                })
        },
        servicePartnerChannel(ECHO) {
            let self = this;
            ECHO.private(`service_partner.${self.$userId}`)
                .listen('ServicePartnerMatched', (d) => {

                    self.$store.commit('setServiceOffer', d)
                    self.$store.commit('setTimer', 120);
                    $('#partnerServiceOffer').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $('#partnerServiceOffer').on('shown.bs.modal', function () {

                    })
                })
        }
    }
});

Vue.filter("redabledate", function (value) {
    var t = moment(value).format("dddd, Do MMMM YYYY, h:mm:ss a");
    return t;
});
