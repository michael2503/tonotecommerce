@if (Session::get('error'))
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6">
                <div class="mt-4 alert alert-danger">
                    <b>{{ Session::get('error') }}</b>
                </div>
            </div>
        </div>
    </div>
@endif

