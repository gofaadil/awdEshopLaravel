@extends("layout.default")


@section("content")

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-wrapper">
                <div class="box">
                    <form action="" name="frm_signup" id="frm_signup" method="POST" class="signup_form">
                        <div class="content-wrap">
                            <h6>Sign Up</h6>
                            <input class="form-control" name="first_name" type="text" placeholder="first name">
                            <input class="form-control" name="last_name" type="text" placeholder="last name">
                            <input class="form-control" name="email" type="text" placeholder="E-mail address">
                            <input class="form-control" name="password" type="password" placeholder="Password">
                            <div class="action">
                                <button class="btn btn-primary signup" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="already">
                    <p>Already have an account?</p>
                    <a href="/">Sign In</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/app/auth.js"></script>

@endsection