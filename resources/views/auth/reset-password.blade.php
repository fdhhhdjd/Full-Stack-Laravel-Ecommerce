<x-base-layout>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>
                    <li class="item-link"><span>Reset Password</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">

                                <x-jet-validation-errors class="mb-4" />
                                <form name="frm-login" method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Forgot Password</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Email Address:</label>
                                        <input id="frm-login-uname"type="text" name="email"
                                            value="{{ $request->email }}" required autofocus
                                            placeholder="Type your email Password Reset">
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="password">Password *</label>
                                        <input type="password" id="password" name="password" required
                                            autocomplete="new-password">
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="password_confirmation">Confirm Password *</label>
                                        <input type="password" id="password_confirmation"name="password_confirmation"
                                            required autocomplete="new-password">
                                    </fieldset>
                                    <input type="submit" class="btn btn-submit" value="Reset Password" name="submit">
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
