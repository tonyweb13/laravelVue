<template>
    <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                            <span class="clear">
                                <span class="block m-t-xs"> <strong class="font-bold">{{ fullName }}</strong></span>
                                <span class="text-muted text-xs block">Phone: <strong>SIP/6361246</strong>  </span>
                                <span class="text-muted text-xs block">Campaign: <strong>Test Campaign</strong>  </span>
                            </span>
                        </div>
                    </li>
                    <li class="landing_link">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="nav-label">You Are Paused</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-arrow-right"></i>
                            <span class="nav-label">Dial Next Number</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-stop"></i>
                            <span class="nav-label">Start Recording</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span class="nav-label">Web Form</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-file-archive-o"></i>
                            <span class="nav-label">Web Form 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-caret-square-o-left"></i>
                            <span class="nav-label">Park Call</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-arrows-v"></i>
                            <span class="nav-label">Transfer Conference</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-arrows-alt"></i>
                            <span class="nav-label">Hangup Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><input type="checkbox"></span>
                            <span class="nav-label">Lead Preview</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="nav-label">Send DTMF</span>
                            <span class="pull-right">
                            <input type="text" class="form-control" style="width: 100px;height: 22px;">
                        </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
</template>
<script>
    export default {
        props:['fullName'],
    }
</script>