<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/minia.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.4.47/css/materialdesignicons.min.css" rel="stylesheet">

    <?php 
        $mode = Session::get('mode', config('app.mode'));
        $size = Session::get('sidebar-size', config('app.sidebar-size'));
    ?>
</head>
<body data-sidebar-size="{{ $size }}" data-layout-mode="{{ $mode }}" data-sidebar="{{ $mode }}"> 
    <div id="app">
        <x-navbar/>
        <x-sidebar/>

        <div class="main-content  h-100">

            <div class="page-content ">
                <div class="container-fluid">

                    <x-alert />

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">@yield('title')</h4>

                                    <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                                        <li class="breadcrumb-item active">Material Design Icons</li>
                                    </ol>
                                </div> -->

                                </div>
                            </div>
                        </div>
                    <?php //= Alert::widget() ?>
                    @yield('content')
                </div>
                <footer class="footer" style="user-select: none">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                © TemirBeton.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design &amp; Develop by Yusuf Axmedov
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>

        
       
    </div>
</body>
</html>
