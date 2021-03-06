@extends("layout.default")


@section("content")

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-wrapper">
                <div class="box">
                    <form action="{{url('/api/sign-in')}}" class="login-form" method="POST" id="login_form">
                        <div class="content-wrap">
                            <h6>Sign In</h6>
                            <div class="alert alert-danger" id="alert_message">
                                <strong class="alert-title">Failed</strong>
                                <span class="alert-body"></span>
                            </div>
                            <input class="form-control" name="email" type="email" placeholder="E-mail address">
                            <input class="form-control" name="password" type="password" placeholder="Password">
                            <div class="action">
                                <button type="submit" class="btn btn-primary signup" >Login</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="already">
                    <p>Don't have an account yet?</p>
                    <a href="{{url('/sign-up.html')}}">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script src="/js/app/auth.js"></script>
@endsection