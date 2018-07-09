<template>
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted">US Time: 2017-10-23 21.58.14</span> |
                    <span class="m-r-sm text-muted">Session ID: 8600059</span>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-life-saver"></i>
                        <span class="label label-default">Calls in Queue: 0 </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-lightbulb-o"></i>
                        <span class="label label-default">No Live Call</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-group"></i> Group
                    </a>
                </li>
                <li>
                    <logout/>
                </li>
            </ul>
        </nav>
    </div>
</template>
<script>
    import logout from '../logout.vue'
    export default {
        components:{ logout }
    }
</script>