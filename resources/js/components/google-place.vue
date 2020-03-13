<template>
    <div>
        <label>Address</label>
        <input type="hidden" name="state" v-model="address.administrative_area_level_1">
        <input type="hidden" name="country" v-model="address.country">
        <input type="hidden" name="lat" v-model="address.latitude">
        <input type="hidden" name="lng" v-model="address.longitude">
        <input type="hidden" name="route" v-model="address.route">
        <input type="hidden" name="zip" v-model="address.postal_code">
        <vue-google-autocomplete
                name="address"
                ref="address"
                :enable-geolocation="true"
                id="registerMap"
                classname="form-control asdasdcas"
                placeholder="Service area (approximate)"
                v-on:placechanged="getAddressData"
        >
        </vue-google-autocomplete>
    </div>
</template>

<script>
    import VueGoogleAutocomplete from 'vue-google-autocomplete'

    export default {
        data() {
            return {
                address: '',
            }
        },
        methods: {
            getAddressData: function (addressData, placeResultData, id) {
                this.address = addressData;
            },
        },
        components: {VueGoogleAutocomplete}
    }
</script>

<style scoped>

</style>