import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import Swiper from 'swiper';
window.Swiper = Swiper;
import 'swiper/swiper-bundle.css';


