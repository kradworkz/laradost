<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Dost - Laravel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Dost - Laravel" name="description" />
    <meta content="Dost - Laravel" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body data-sidebar="dark" data-keep-enlarged="true" class="vertical-collpsed">
    <div id="app">

        <div id="layout-wrapper">
            @include('layouts.header')
            @include('layouts.navigation')
            
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <router-view></router-view>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>

    </div>

    <div class="rightbar-overlay"></div>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>