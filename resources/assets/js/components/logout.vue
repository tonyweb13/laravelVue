<template>
    <router-link to="/logout" @click.native="logout">
        <i class="fa fa-sign-out"></i> Log out
    </router-link>
</template>
<script>
    export default {
        methods: {
            logout () {
                alert("Are you sure you want to logout?");
                this.$session.destroy()
                this.$router.push('/')
            }
        }
    }
</script>