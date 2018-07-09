<template>
    <div>
        <AgentMenu :fullName="fname" />

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <AgentHeader/>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content p-md">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1">Script</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2">Form</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3">Chat Internal</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-4">Chat Customer</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            tab1
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            tab2
                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane">
                                        <div class="panel-body">
                                            tab3
                                        </div>
                                    </div>
                                    <div id="tab-4" class="tab-pane">
                                        <div class="panel-body">
                                            tab4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="m-t-sm m-b-sm">
                                <button type="button" class="btn btn-success">Show Conference Call Channel Information</button>
                                <button type="button" class="btn btn-warning">Hide Calls in Queue</button>
                                <button type="button" class="btn btn-primary">Agent View <i class="fa fa-plus"></i></button>
                            </div>
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-5">Manual Dial</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-6">Fast Dial</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-7">View Call Log</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-5" class="tab-pane active">
                                        <div class="panel-body">
                                            tab1
                                        </div>
                                    </div>
                                    <div id="tab-6" class="tab-pane">
                                        <div class="panel-body">
                                            tab2
                                        </div>
                                    </div>
                                    <div id="tab-7" class="tab-pane">
                                        <div class="panel-body">
                                            tab3
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <AgentFooter/>
            </div>
        </div>
    </div>
</template>
<script>
    import AgentHeader from './header.vue'
    import AgentMenu from './menu.vue'
    import AgentFooter from '../footer.vue'

    export default {
       props:['agentProps'],
        components: { AgentHeader, AgentMenu, AgentFooter },
        data () {
            return {
                fname: this.agentProps.full_name
            }
        },
    }
</script>