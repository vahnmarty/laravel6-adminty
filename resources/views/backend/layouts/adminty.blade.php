<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} | @yield('title', 'x') </title>

    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="icon" href="{{ url('img/icon.png') }}" type="image/x-icon">
    <link rel="icon" type="image/png" href="../../files/assets/images/old-logo.png">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    @include('backend.includes.styles')

    @yield('css')

    <link rel="stylesheet" type="text/css" href="{{url('css/custom.css?')}}{{ mt_rand() }}">
    

</head>
    <body data-url="{{ url('/') }}">
        @include('backend.includes._theme-loader')
        @include('backend.includes._network-checker')
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                @include('backend.includes._submit-loader')
                
                @include('backend.includes.navbar')


                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">

                        @include('backend.includes.sidebar')

                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">

                                    @include('includes.partials.logged-in-as')
                                    @include('includes.partials.messages')

                                    @yield('content')
                                    
                                    <div class="md-overlay"></div>

                                    <div id="styleSelector" class="d-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Scripts -->
        
        @include('backend.includes.scripts')

        <script src="{{ url('js/custom.js?') }}{{ mt_rand() }}"></script>
        <script src="{{ url('js/v.js?') }}{{ mt_rand() }}"></script>
        @yield('scripts')

    </body>
</html>
