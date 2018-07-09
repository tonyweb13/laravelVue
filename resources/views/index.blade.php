<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pure Laravel Vue App</title>
    <link href="{{ mix('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ mix('css/template.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">--}}
</head>
<body class="gray-bg">
    <div id="dialer-app"></div>
    <script src="{{ mix('js/template.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    {{--<script>--}}
        {{--$(document).ready(function() {--}}

            {{--if(window.location.href.indexOf('#myModal') != -1) {--}}
                {{--$('#myModal').modal('show');--}}
            {{--}--}}

        {{--});--}}
    {{--</script>--}}
</body>
</html>
