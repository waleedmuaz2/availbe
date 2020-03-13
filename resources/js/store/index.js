import Vue from 'vue';
import Vuex from 'vuex';
import subjects from './modules/subjects';

Vue.use(Vuex);


export default new Vuex.Store({
    state: {
        userRoles: null,
        serviceOffer: null,
        snackbar: false,
        offerTimmer: 0,
        timmerInterVel: null,
        color: '',
        y: 'top',
        x: null,
        timeout: 4000,
        text: 'Hello, I\'m a snackbar',

        progressC: false,
        progressT: false,

    },
    mutations: {
        setSnakebar(state, {color, text}) {
            state.snackbar = true;
            state.color = color;
            state.text = text;
        },
        setTimer(state, payload) {
            state.offerTimmer = payload;
            state.timmerInterVel = setInterval(function () {
                state.offerTimmer--;
                // If the count down is finished, write some text
                if (state.offerTimmer < 0) {
                    clearInterval(state.timmerInterVel);
                }
            }, 1000);
        },
        stopTimer(state) {
            if (state.timmerInterVel) {
                clearInterval(state.timmerInterVel);
                state.offerTimmer = 0;
            }
        },
        setUserRoles(state, payload) {
            state.userRoles = JSON.parse(payload);
        },
        setServiceOffer(state, payload) {
            state.serviceOffer = payload;
        },

        toggleProgress(state) {
            state.progressC = !state.progressC;
        },
        toggleProgressToolbar(state) {
            state.progressT = !state.progressT;
        }
    },
    actions: {
        async offerAccpet({state}) {
            commit('stopTimer')
            const {data} = await axios.post('/service-partner/offer/accepted', {"service_request_uid": state.serviceOffer.service_request_uid})

        },
        async offerDecline({state, commit}) {
            commit('stopTimer')
            const {data} = await axios.post('/service-partner/offer/declined', {"service_request_uid": state.serviceOffer.service_request_uid})
            state.serviceOffer = null
        }
    },
    getters: {
        getTimmer(state) {
            return state.offerTimmer;
        },
        getOffer(state) {
            return state.serviceOffer;
        }
    },
    modules: {subjects}
});
