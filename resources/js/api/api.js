import axios from 'axios';

const baseDomain = 'http://localhost/eppbd-lumen/public';
const baseURL = `${baseDomain}/api/v1/admin`;

export default axios.create({
    baseURL,
    // headers:{"Authorization": "Bearar token"}
});