require('./bootstrap');

window.Vue = require('vue');

Vue.component('file-upload-component', require('./components/FileUpload.vue').default);

const app = new Vue({
    el: '#app',
});
