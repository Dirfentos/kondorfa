// resources/js/bootstrap.js
import 'bootstrap/dist/js/bootstrap.bundle.js';  // Bootstrap JS importálása
import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
