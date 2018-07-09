<template>
    <div>
        <h2>Edit product</h2>
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
</template>
<script>
    import Vue from 'vue'
    import VueRouter from 'vue-router'
    import Routes from '../../../routes'

    Vue.use(VueRouter);

    const router = new VueRouter({
        routes: Routes,
        mode: 'history'
    });

    let products = [
        {id: 1, name: 'Angular', description: 'Superheroic JavaScript MVW Framework.', price: 100},
        {id: 2, name: 'Ember', description: 'A framework for creating ambitious web applications.', price: 100},
        {id: 3, name: 'React', description: 'A JavaScript Library for building user interfaces.', price: 100}
    ];

    export default {
        data: function () {
            return {product: this.findProduct(this.$route.params.product_id)};
        },
        methods: {
            findProduct (productId) {
                return products[this.findProductKey(productId)];
            },
            findProductKey (productId) {
                for (var key = 0; key < products.length; key++) {
                    if (products[key].id == productId) {
                        return key;
                    }
                }
            },
            updateProduct: function () {
                //Obsolete, product is available directly from data...
                let product = this.product; //var product = this.$get('product');
                products[this.findProductKey(product.id)] = {
                    id: product.id,
                    name: product.name,
                    description: product.description,
                    price: product.price
                };
                router.push('/product');
            }
        }
    }
</script>