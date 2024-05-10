<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layouts.landing-partial.style')
</head>

<body>

    <!-- page wrapper -->
    <div class="page-wrapper pbmit-bg-color-light">

        <!-- Header Main Area -->
        <header class="site-header header-style-2">
            <!-- Header Content Goes Here -->
        </header>
        <!-- Header Main Area End Here -->

        <!-- page content -->
        <div class="page-content">

            <section class="section-xl">
                <div class="container">
                    @include('layouts.flashmessage')
                    <div class="appointment_box">
                        <div class="pbmit-heading-subheading text-center">
                            <h2 class="pbmit-title"> Login Admin </h2>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row justify-content-center mb-3">
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
                                    </div>
                                    @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row justify-content-center mb-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center mb-0">
                                <div class="col-md-6 mt-4">
                                    <button class="pbmit-btn btn btn-primary btn-block" type="submit">
                                        <span class="pbmit-button-text" name="submit">Login</span>
                                        <span class="pbmit-button-icon-wrapper">
                                            <span class="pbmit-button-icon">
                                                <i class="pbmit-base-icon-black-arrow-1"></i>
                                            </span>
                                        </span>
                                    </button>
                                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('layouts.landing-partial.script')

    
</body>

</html>
