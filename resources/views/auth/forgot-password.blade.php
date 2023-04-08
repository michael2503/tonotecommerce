

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="container">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf


            <div class="row d-flex justify-content-center">
                <div class="col-xl-5">
                    <div class="card card-body mt-4 mb-5">

                        @if (Session::get('failed'))
                        <div class="mt-4 alert alert-danger">
                            <b>{{ Session::get('failed') }}</b>
                        </div>
                        @endif

                        <h4 class="text-center mb-5"><b>FORGOT PASSWORD</b></h4>

                        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                        <div class="form-group mt-5">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="johndoe@gmail.com" class="form-control" required="" autofocus="" autocomplete="username">
                            <div class="formErr">{{$errors->first('email')}}</div>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-primary">SUBMIT</button>
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </div>

</x-guest-layout>

