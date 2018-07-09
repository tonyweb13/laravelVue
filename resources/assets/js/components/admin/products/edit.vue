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
                                                    <h2>Edit product</h2>
                                                </div>
                                                <div class="ibox-content">
                                                    <form v-on:submit="updateProduct">
                                                        <div class="form-group">
                                                            <label for="edit-name">Name</label>
                                                            <input class="form-control" id="edit-name" v-model="product.name" required/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-description">Description</label>
                                                            <textarea class="form-control" id="edit-description" rows="3" v-model="product.description"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-price">Price, <span class="glyphicon glyphicon-euro"></span></label>
                                                            <input type="number" class="form-control" id="edit-price" v-model="product.price"/>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save</button>
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
//    import CustomModal from '../../helper/modal.vue'

    Vue.use(VueRouter);

    const router = new VueRouter({
        routes: Routes,
        mode: 'history'
    });

    export default {
        components: { AdminHeader, AdminMenu, AdminFooter },
        data: function () {
            return {
                product: {},
                userUrl: constants.API_URL,
            };
        },
        methods: {
            updateProduct: function () {
                //Obsolete, product is available directly from data...
                let product = this.product; //var product = this.$get('product');

                axios.get(this.userUrl+"/product/"+this.$route.params.product_id, {
                    params: {
                        name: product.name,
                        description: product.description,
                        price: product.price,
                    }
                })
                    .then(response => {
                    console.log(response);
                    this.product = response.data;
                });

                router.push('/');
            }
        },
        created() {
            axios.get(this.userUrl+"/product/"+this.$route.params.product_id+"/edit")
                .then(response => {
                    this.product = response.data;
                });
        },
    }
</script>