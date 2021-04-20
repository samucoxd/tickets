<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login - Bootstrap Admin Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/pages/signin.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="navbar navbar-fixed-top">

        <div class="navbar-inner">

            <div class="container">

                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <a class="brand" href="index.html">
				Bootstrap Admin Template
			</a>

                <div class="nav-collapse">
                    <ul class="nav pull-right">

                        <li class="">
                            <a href="signup.html" class="">
							Don't have an account?
						</a>

                        </li>

                        <li class="">
                            <a href="index.html" class="">
                                <i class="icon-chevron-left"></i> Back to Homepage
                            </a>

                        </li>
                    </ul>

                </div>
                <!--/.nav-collapse -->

            </div>
            <!-- /container -->

        </div>
        <!-- /navbar-inner -->

    </div>
    <!-- /navbar -->



    <div class="account-container">

        <div class="content clearfix">

            <form action="#" method="post">
                @csrf
                <h1>{{ __('Login') }}</h1>

                <div class="login-fields">

                    <p>Please provide your details</p>

                    <div class="field">
                        <label for="username">{{ __('carnet') }}</label>
                        <input type="text" id="carnet" name="carnet" value="{{ old('carnet') }}" required autocomplete="carnet" autofocus placeholder="carnet" class="login username-field @error('carnet') is-invalid @enderror" /> @error('carnet')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror

                    </div>
                    <!-- /field -->

                    <div class="field">
                        <label for="password">{{ __('Password') }}</label>
                        <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field" />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                    <!-- /password -->

                </div>
                <!-- /login-fields -->

                <div class="login-actions">

                    <span class="login-checkbox">
					<input id="remember" name="remember" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" {{ old('remember') ? 'checked' : '' }} />
					<label class="choice" for="Field">{{ __('Remember Me') }}</label>
				</span>

                    <button type="submit" class="button btn btn-success btn-large">{{ __('Login') }}</button>


                </div>
                <!-- .actions -->



            </form>

        </div>
        <!-- /content -->

    </div>
    <!-- /account-container -->



    <div class="login-extra">
    @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

    </div>
    <!-- /login-extra -->


    <script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <script src="{{ asset('js/signin.js') }}"></script>

</body>

</html>
