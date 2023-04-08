<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf


            <div class="row d-flex justify-content-center">
                <div class="col-xl-5">
                    <div class="card card-body mt-4 mb-5">

                        @if (Session::get('failed'))
                        <div class="mt-4 alert alert-danger">
                            <b>{{ Session::get('failed') }}</b>
                        </div>
                        @endif

                        <h4 class="text-center mb-5"><b>LOGIN</b></h4>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="johndoe@gmail.com" class="form-control" required="" autofocus="" autocomplete="username">
                            <div class="formErr">{{$errors->first('email')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" value="" class="form-control" required="" autocomplete="current-password">
                            <div class="formErr">{{$errors->first('password')}}</div>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                            <label class="custom-control-label" for="remember_me">Remember me</label>
                        </div>

                        <div class="text-right">
                            <a class="text-dark" href="http://127.0.0.1:8400/forgot-password"><small>Forgot your password?</small></a>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-primary">Log In</button>
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </div>

</x-guest-layout>
