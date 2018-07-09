<template>
        <div>
            <div class="ibox-title">
                <h5>Basic Data Tables</h5>
            </div>
            <div class="ibox-content">
                <div class="filters row">
                    <div class="form-group col-lg-6">
                        <div class="actions pull-left">
                            <router-link class="btn btn-primary" :to="{path: '/product/product_add'}">
                                <span class="glyphicon glyphicon-plus"></span>
                                Add product
                            </router-link>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <div class="pull-right">
                            <input v-model="searchKey" placeholder="Search Here..." class="form-control" id="search-element" requred/>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th class="col-sm-2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="product in filteredProducts">
                    <!--<tr v-for="product in products" >-->
                        <!--<tr v-for="product in products | filterBy searchKey in 'name'" >-->
                        <td>
                            <router-link :to="{name: 'product-show', params: {product_id: product.id}}">{{ product.name }}</router-link>
                        </td>
                        <td>{{ product.description }}</td>
                        <td>
                            {{ product.price }}
                            <span class="glyphicon glyphicon-euro" aria-hidden="true"></span>
                        </td>
                        <td>
                            <router-link class="btn btn-warning btn-xs" :to="{name: 'product-edit', params: {product_id: product.id}}" >Edit</router-link>
                            <router-link class="btn btn-danger btn-xs" :to="{name: 'product-delete', params: {product_id: product.id}}">Delete</router-link>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--<CustomModal class="myModal">-->
                <!--<edit></edit>-->
            <!--</CustomModal>-->
        </div>
</template>
<script>
//    import admin from '../admin.vue'
//    import edit from '../products/edit.vue'
//    import CustomModal from '../../helper/modal.vue'
      import axios from 'axios'
      import * as constants from '../../../constants.js'

    export default {
//        components:{ CustomModal, edit },
        data: function () {
            return {
                products: [],
                searchKey: '',
                userUrl: constants.API_URL,

            };
        },
        computed: {
            filteredProducts() {
                return this.products.filter((product) => {
                    return product.name.indexOf(this.searchKey) > -1 || product.description.indexOf(this.searchKey) > -1;
                    //return !product.name.indexOf(this.searchKey)
                })
            }
        },
        created() {
            axios.get(this.userUrl+"/product")
                .then(response => {
                    console.log(response);
                    this.products = response.data;
            });
        },
    }
</script>