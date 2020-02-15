<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} | @yield('title', 'Laravelx') </title>

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
    @include('frontend.includes.styles')

    @yield('css')

    <link rel="stylesheet" type="text/css" href="{{url('css/custom.css?')}}{{ mt_rand() }}">
    

</head>
    <body>
        @include('frontend.includes._theme-loader')
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>

            <div class="bg-hero  d-none d-sm-block">

                <div class="main-body">
                    <div class="row">
                        <div class="col">
                            <div class="#!">
                                <div class="card-body p-10">
                                    <div class="row justify-content-center">
                                        <div class="col-md-9">
                                           <div class="card card-body bg-widget-overlay">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <div class="date-day" id="printDay">{{ date('D') }}</div>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="date-time" id="printTime">{{ date('h:i:s a') }}</div>
                                                        <div class="date" id="printDate">{{ date('F d Y') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-body bg-widget-overlay text-white">
                                                <div class="text-block mb-0">
                                                    <div id='fullcalendar'></div>
                                                    <h4 class="type--uppercase museosans900-font type--bold text-center">Calendar of Events</h4>
                                                    <hr class="border-white">
                                                    <p class="unmarg">Jul 15 - Jul 20, 2019</p>
                                                    <p class="bold text-uppercase">PRELIM EXAMINATION</p> 
                                                    <hr class="border-white">
                                                    <p class="unmarg">Aug 24 - Aug 24, 2019</p>
                                                    <p class="bold text-uppercase">Wearing of Prescribed School Uniform (New &amp; Transferees)</p> 
                                                    <hr class="border-white">
                                                    <p class="unmarg">Jul 27 - Jul 31, 2019</p>
                                                    <p class="bold text-uppercase">30th Foundation Day - Academic Festival</p> 
                                                    <hr class="border-white">
                                                    
                                                </div>
                                            </div>
                                            <div class="card card-body bg-widget-overlay p-0">
                                                <a class="weatherwidget-io" href="https://forecast7.com/en/7d87123d89/lanao-del-norte/" data-label_1="LANAO DEL NORTE" data-label_2="WEATHER" data-mode="Current" data-theme="weather_one" >LANAO DEL NORTE WEATHER</a>
                                                <script>
                                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <section class="login-block">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">

                                            <form class="md-float-material form-material" method="POST" action="{{ url('login') }}">
                                                @csrf
                                                <div class="text-center">
                                                    <h3 class="bold">Admin Boilerplate</h3>
                                                    <p class="lead text-center">
                                                        Laravel v6 with Adminty Template
                                                    </p>
                                                </div>
                                                <div class="auth-box card">
                                                    <div class="card-block">
                                                        <div class="row m-b-20">
                                                            <div class="col-md-12">

                                                                @if (session()->has('danger'))
                                                                    <div class="alert alert-danger icons-alert">
                                                                        <p>{{ session()->get('danger') }}</p>
                                                                    </div>
                                                                @endif

                                                                @if ($errors->any())
                                                                    <div class="alert alert-danger">
                                                                        <ul>
                                                                            @foreach ($errors->all() as $error)
                                                                                <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif

                                                                @include('includes.partials.messages')
                                                                
                                                                <h3 class="text-center">Sign In</h3>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="email" class="form-control" required placeholder="Email Address" 
                                                            name="email">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="password" name="password" class="form-control" required="" placeholder="Password">
                                                            <span class="form-bar"></span>
                                                        </div>
                                                        <div class="row m-t-25 text-left">
                                                            <div class="col-12">
                                                                <div class="checkbox-fade fade-in-primary d-">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                                        <span class="text-inverse">Remember me</span>
                                                                    </label>
                                                                </div>
                                                                <div class="forgot-phone text-right f-right">
                                                                    <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-30">
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-md-12 text-right">
                                                                <img alt="Logo" src="{{url('img/logo.png')}}" height="100px" class="image--xs" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </section>
                        </div>
                    </div>

                </div>
            </div>

            <div class="mobile-view d-block d-sm-none">
                <div class="pcoded-container navbar-wrapper">
                </div>
                <div class="text-center mb-3">
                    <a href="http://ncmc.edu.ph" class="btn btn-primary">Visit Site</a>
                    <a href="{{ url('/portal') }}" class="btn btn-warning">Open Portal</a>
                </div>
                <form class="md-float-material form-material" method="POST" action="{{ url('login') }}">
                    @csrf
                    <div class="text-center">
                        <h5 class="bold">North Central Mindanao College</h5>
                        <p class="lead text-center">School Management Information System</p>
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    
                                    <h3 class="text-center">Sign In</h3>
                                </div>
                            </div>
                            <div class="form-group form-primary">
                                <input type="text" class="form-control" required placeholder="Username" 
                                name="username">
                                <span class="form-bar"></span>
                            </div>
                            <div class="form-group form-primary">
                                <input type="password" name="password" class="form-control" required="" placeholder="Password">
                                <span class="form-bar"></span>
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary d-">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="forgot-phone text-right f-right">
                                        <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <img alt="Logo" src="{{url('img/Powered by Teach.png')}}" class="image--xs" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- Scripts -->
        
        @include('frontend.includes.scripts')
        <script src="js/date.js"></script>
        <script src="{{ url('js/custom.js?') }}{{ mt_rand() }}"></script>
        <script src="{{ url('js/v.js?') }}{{ mt_rand() }}"></script>
        @yield('scripts')

    </body>
</html>
