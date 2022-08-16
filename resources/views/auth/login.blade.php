<x-base-layout>
    <style>
        .google-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            margin: 5px 0;
            opacity: 0.85;
            display: inline-block;
            font-size: 17px;
            line-height: 20px;
            text-decoration: none;
            /* remove underline from anchors */
        }

        .facebook-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            margin: 5px 0;
            opacity: 0.85;
            display: inline-block;
            font-size: 17px;
            line-height: 20px;
            text-decoration: none;
            /* remove underline from anchors */
        }

        .google-btn {
            background-color: #dd4b39;
            color: white;
        }

        .facebook-btn {
            background-color: #3B5998;
            color: white;
        }

        .google-btn:hover {
            opacity: 1;
            color: white !important;
        }

        .facebook-btn:hover {
            opacity: 1;
            color: white !important;
        }
    </style>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">
                                <a href="{{ route('user.social.redirect') }}" class="google-btn">
                                    <i class="fa fa-google fa-fw">
                                    </i> Login with Google+
                                </a>
                                <a href="#" class="facebook-btn">
                                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                </a>
                                <hr>
                                <x-jet-validation-errors class="mb-4" />
                                <form name="frm-login" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Log in to your account</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Email Address:</label>
                                        <input id="frm-login-uname"type="text" name="email" :value="old('email')"
                                            required autofocus placeholder="Type your email,phone,user_name,address">
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-pass">Password:</label>
                                        <input type="password" id="frm-login-pass" name="password"
                                            placeholder="************" required autocomplete="current-password">
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label class="remember-field">
                                            <input class="frm-input " name="rememberme" id="rememberme" value="forever"
                                                type="checkbox"><span>Remember me</span>
                                        </label>
                                        <a class="link-function left-position" href="{{ route('password.request') }}"
                                            title="Forgotten password?">Forgotten password?</a>
                                    </fieldset>
                                    <input type="submit" class="btn btn-submit" value="Login" name="submit">
                                </form>

                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>

</x-base-layout>
