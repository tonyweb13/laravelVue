<template>
    <div>
        <AdminMenu :fullName="fname"/>

        <div id="page-wrapper" class="gray-bg dashbard-1">

            <AdminHeader/>

            <div class="row">
                <div class="col-lg-12">

                    <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <ProductList/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <AdminFooter/>

            </div>

        </div>

    </div>
</template>
<script>
//    import Vue from 'vue'
    import AdminHeader from './header.vue'
    import AdminMenu from './menu.vue'
    import AdminFooter from '../footer.vue'
    import ProductList from '../admin/products/list.vue'


    export default {
       props:['adminProps'],
        components: { AdminHeader, AdminMenu, AdminFooter, ProductList },
        beforeCreate () {
             if (!this.$session.exists()) {
                 this.$router.push('/login')
             }
         },
        data () {
            return {
                showLoginModal:false,
                fname: this.adminProps.full_name
            }
        },
    }
</script>