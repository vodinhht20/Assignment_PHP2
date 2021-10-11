<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang quản trị</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    @include('layout.admin.style')


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        @include('layout.admin.header')
        <div class="content-page">
            <div class="content mb-5">
                @yield('content')
            </div>
            @include('layout.admin.footer')
        </div>

    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    @include('layout.admin.script')
    @yield('scriptUpfle')


</body>

</html>