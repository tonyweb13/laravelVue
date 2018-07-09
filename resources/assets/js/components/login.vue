<template>
    <div>
        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <h4 class="logo-name">{{ labels.title }}</h4>
            </div>
            <h3>Welcome to ARB Dialer</h3>
            <p>Perfectly designed and precisely prepared for agent handling calls with admin facilities for more tools.</p>
            <form class="form-horizontal m-t" role="form" @submit.prevent="handleLogin">
                <div class="form-group">
                    <label class="form-label" v-text="labels.user"></label>
                    <input type="text" class="form-control" placeholder="Username" v-model="login.user" required="">
                </div>
                <div class="form-group">
                    <label class="form-label"  v-text="labels.password"></label>
                    <input type="password" class="form-control" placeholder="●●●●●●●" v-model="login.password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" v-text="labels.button"></button>
            </form>
            <p class="m-t"> <small>ARB Dialer version 1.0.1 &copy; 2017</small> </p>
        </div>
    </div>
</template>
<script>
    import axios from 'axios'

    export default {
        props: {
            labels: {
                type: Object,
                default () {
                    return {
                        title: 'ARB Dialer',
                        user: 'Username',
                        password: 'Password',
                        button: 'Login'
                    }
                }
            },
            apiUrl: {
                type: String,
                required: true
            },
            loginRoute: {
                type: String,
                default: 'oauth/token'
            },
            userRoute: {
                type: String,
                default: 'user/'
            },
            usernameRoute: {
                type: String,
                default: 'user/find/'
            },
            clientId: {
                type: [Number, String],
                default: 2
            },
            secret: {
                type: String,
                required: true
            }
        },
        data () {
            return {
                login: {
                    user: '',
                    password: ''
                },
            }
        },
        computed: {
            loginUrl () {
                return `${this.apiUrl}/${this.loginRoute}`
            },
            userUrl () {
                return `${this.apiUrl}/${this.userRoute}`
            },
            usernameUrl () {
                return `${this.apiUrl}/${this.usernameRoute}`
            },
        },
        methods: {
            getHeaders (token) {
                return {
                    'Accept': 'application/json',
                    'Authorization': `Bearer ${token}`
                }
            },
            handleLogin () {
                const postData = {
                    grant_type: 'password',
                    client_id: this.clientId,
                    client_secret: this.secret,
                    username: this.login.user,
                    password: this.login.password,
                    scope: ''
                }

                const authUser = {}

                axios.post(this.loginUrl, postData)
                    .then(response => {

                        console.log("post response1=");
                        console.log(response);

                        authUser.access_token = response.data.access_token
                        authUser.refresh_token = response.data.refresh_token

                        const headers = this.getHeaders(authUser.access_token)

                        axios.get(this.usernameUrl+this.login.user, {headers})
                            .then(response => {
                                this.$emit('success', { authUser, headers, response });
                        })
                        .catch(error => {
                            this.$emit('failed', error)
                        })
                    })
                    .catch(error => {
                        this.$emit('failed', error)
                    })
            }
        }
    }
</script>


