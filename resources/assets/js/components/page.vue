<template>
    <div>
        <admin v-if="users.level_id == 8 || users.level_id == 9" :adminProps="users" ></admin>
        <agent v-else-if="users.level_id <= 7" :agentProps="users"></agent>
    </div>
</template>
<script>
    import axios from 'axios'
    import * as constants from '../constants.js'
    import login from './login.vue'
    import agent from './agent/agent.vue'
    import admin from './admin/admin.vue'

    export default {
        components: { agent, admin, login },
        created() {
            if(this.$session.has("arb_dialer_"+this.userid)) {
                axios.get(this.userUrl+"/user/"+this.userid)
                    .then(response => {
                        this.users = response.data;
                    });
            } else {
                this.$router.push('/');
            }
        },
        data () {
            return {
                userid: this.$route.params.userID,
                userUrl: constants.API_URL,
                users: {}
            }
        },
    }
</script>