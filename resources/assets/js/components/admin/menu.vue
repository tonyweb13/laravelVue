<template>
   <nav class="navbar-default navbar-static-side" role="navigation" style="height:100%;">
            <div class="sidebar-collapse" style="height:100%;">
                <ul class="nav metismenu" id="side-menu" style="height:100%;">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <!--<span>-->
                                <!--<img alt="image" class="img-circle" src="img/profile_small.jpg">-->
                            <!--</span>-->
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                            <!--<span class="block m-t-xs"> <strong class="font-bold">{{ fullName }}</strong></span>-->
                            <span class="text-muted text-xs block">Administrator <b class="caret"></b></span>
                            </span></a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="#">Timeclock</a></li>
                                <li class="divider"></li>
                                <li><logout/></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <router-link to="/product">Product</router-link>
                    </li>
                </ul>
            </div>
        </nav>
</template>
<script>
    import logout from '../logout.vue'

    export default {
        components:{ logout },
        props:['fullName'],
        mounted(){
            $('#side-menu').metisMenu();
        }
    }
</script>