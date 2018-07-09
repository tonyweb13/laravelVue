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
                                    <div class="ibox-title">
                                        <h2>Add new product</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <form v-on:submit="createProduct">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" v-model="product.name" required/>
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" v-model="product.description" rows="10" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Price, <span class="glyphicon glyphicon-euro"></span></label>
                                                <input type="number" class="form-control" v-model="product.price"/>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Create</button>
                                            <a class="btn btn-default"><router-link to="/">Cancel</router-link></a>
                                        </form>
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

    export default {
        components: { AdminHeader, AdminMenu, AdminFooter },
        data: function () {
            return { product: {name: '', description: '', price: ''},
                products: {},
                userUrl: constants.API_URL,
            }
        },
        methods: {
            createProduct: function() {
                //Obsolete, product is available directly from data...
                let product = this.product; //var product2 = this.$get('product');
                axios.get(this.userUrl+"/product/create", {
                    params: {
                        name: product.name,
                        description: product.description,
                        price: product.price,
                    }
                })
                .then(response => {
                    console.log(response);
                    this.products = response.data;
                });
                router.push('/');
            }
        },
    }
</script>