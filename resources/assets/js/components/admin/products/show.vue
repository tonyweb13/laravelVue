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
                                        <h2>{{ product.name }}</h2>
                                    </div>
                                    <div class="ibox-content">
                                        <div>
                                            <b>Description: </b>
                                            <div>{{ product.description }}</div>
                                            <b>Price:</b>
                                            <div>{{ product.price }}<span class="glyphicon glyphicon-euro"></span></div>
                                        </div>
                                        <a class="btn btn-default"><router-link to="/">Back</router-link></a>
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
    import axios from 'axios'
    import * as constants from '../../../constants.js'
    import AdminHeader from '../header.vue'
    import AdminMenu from '../menu.vue'
    import AdminFooter from '../../footer.vue'

    export default {
        components: { AdminHeader, AdminMenu, AdminFooter },
        data () {
            return {
                product: {},
                userUrl: constants.API_URL,
            };
        },
        created() {
            axios.get(this.userUrl+"/product/"+this.$route.params.product_id)
                .then(response => {
                    this.product = response.data;
                });
        },
    }
</script>