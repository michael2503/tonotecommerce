<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf


        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-5">
                    <div class="card card-body mt-4 mb-5">

                        <h4 class="text-center mb-5"><b>REGISTER</b></h4>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required autofocus autocomplete="username" />
                            <div class="formErr">{{$errors->first('name')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required autofocus autocomplete="username" />
                            <div class="formErr">{{$errors->first('email')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control" required autocomplete="current-password" />
                            <div class="formErr">{{$errors->first('password')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" required autocomplete="new-password" />
                            <div class="formErr">{{$errors->first('password_confirmation')}}</div>
                        </div>


                        <div class="text-right">
                            <a class="text-dark" href="{{ route('login') }}"><small>Already registered?</small></a>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-primary">Register</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>





</x-guest-layout>
