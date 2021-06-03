@extends('admin/layouts/app')
@section('body')
    <div class="login">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{route('check.login')}}" method="post">
            @csrf
              <h1>Login Form</h1>
              @include('includes/message')
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="required" />
              </div>
              <div class="checkbox">
                <input type="checkbox" name="remember" class="i-checks" checked>
                  Remember login<p></p>
              </div>
              <div>
                <button type="submit" class="btn btn-success submit">Log in</button>
                <a class="reset_pass" href="{{route('forget.password')}}">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Samten</h1>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
@endsection