import login from './components/login.vue'
import page from './components/page.vue'
import create from './components/admin/users/create.vue'
import admin from './components/admin/admin.vue'
import dashboard from './components/admin/dashboard.vue'
import ProductList from './components/admin/products/list.vue'
import ProductShow from './components/admin/products/show.vue'
import ProductAdd from './components/admin/products/add.vue'
import ProductEdit from './components/admin/products/edit.vue'
import ProductDelete from './components/admin/products/delete.vue'

export default [
    { path: '/', component: admin },
    { path: '/login', component: login },
    { path: '/:userID', component: page },
    { path: '/dashboard', component: dashboard },
    { path: '/user_create', component: create },
    { path: '/product', component: ProductList},
    { path: '/product/product_add', component: ProductAdd},
    { path: '/product/:product_id', component: ProductShow, name: 'product-show'},
    { path: '/product/:product_id/edit', component: ProductEdit, name: 'product-edit'},
    { path: '/product/:product_id/delete', component: ProductDelete, name: 'product-delete'}
]