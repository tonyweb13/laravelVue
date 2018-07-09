<template>
    <div>
        <AdminMenu/>

        <div id="page-wrapper" class="gray-bg dashbard-1">

            <AdminHeader/>

            <div class="row">
                <div class="col-lg-12">

                    <div class="wrapper wrapper-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ibox float-e-margins">
                                                <div class="ibox-title">
                                                    <h2>Are you sure you want to delete this "{{ product.name }}"?</h2>
                                                </div>
                                                <div class="ibox-content">
                                                    <form v-on:submit="deleteProduct">
                                                        <div class="form-group">
                                                            <label>Description: </label>
                                                            <p> {{ product.description }} </p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Price:</label>
                                                            <p>{{ product.price }} </p>
                                                        </div>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        <a class="btn btn-default"><router-link to="/">Cancel</router-link></a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    import Vue from 'vue'
    import axios from 'axios'
    import * as constants from '../../../constants.js'
    import VueRouter from 'vue-router'
    import Routes from '../../../routes'
    import AdminHeader from '../header.vue'
    import AdminMenu from '../menu.vue'
    import AdminFooter from '../../footer.vue'

    Vue.use(VueRouter);

    const router = new VueRouter({
        routes: Routes,
        mode: 'history'
    });

//    let prod = this.product;

    export default {
        components: { AdminHeader, AdminMenu, AdminFooter },
        data: function () {
            return {
                product: {},
                userUrl: constants.API_URL,
            };

        },
        methods: {
//           findProductKey (productId) {
//                for (var key = 0; key < prod.length; key++) {
//                    if (products[key].id == productId) {
//                        return key;
//                    }
//                }
//            },
            deleteProduct: function () {
                axios.delete(this.userUrl+"/product/"+this.$route.params.product_id)
                    .then(response => {
//                        this.products = response.data.splice(this.findProductKey(this.$route.params.product_id), 1);
                        this.products = response.data;
                    });
                router.push('/');
            }
        },
        created() {
            axios.get(this.userUrl+"/product/"+this.$route.params.product_id)
                .then(response => {
                    this.product = response.data;
                });
        },
    }
</script>