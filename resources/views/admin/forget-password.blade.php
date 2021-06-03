@extends('admin/layouts/app')
@section('body')
<div class="login">
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{route('password.reset.mail')}}" method="post">
                    @csrf
                    <h1>Recover Password</h1>
                    @include('includes/message')
                    <h6>Enter your email address and your password reset link will be sent to your email. </h6><p></p>
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-lg btn-success submit">Send reset link</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection