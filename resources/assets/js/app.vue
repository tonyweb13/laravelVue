<template>
    <div>
        <router-view
         :api-url="apiUrl"
         :secret="secret"
         @success="handleLogin"
         @failed="handleErrors">
        </router-view>
 </div>
</template>
<script>
 import Vue from 'vue'
 import VueRouter from 'vue-router'
 import Routes from './routes'
 import * as constants from './constants.js'
 import login from './components/login.vue'
 import page from './components/page.vue'
 import ProductList from './components/admin/products/list.vue'

 Vue.use(VueRouter);

 // Register routes
 const router = new VueRouter({
     routes: Routes,
     mode: 'history'
 });

 export default {
     el: '#dialer-app',
     router: router,
     data () {
         return {
             apiUrl: constants.API_URL,
             secret: constants.PASSPORT_SECRET,
             userid: 0,
             users: {}
         }
     },
     methods: {
         handleLogin (payload) {
             /*start session*/
             this.userid = payload.response.data.id;
             this.$session.start();
             this.$session.set('arb_dialer_'+this.userid, payload.headers.Authorization);
             this.$router.push('/');
         },
         handleErrors (errors) {
             console.log("handleErrors");
             this.$session.destroy();
             alert('Authorization error: ' + errors)
         },
     }
 }
</script>