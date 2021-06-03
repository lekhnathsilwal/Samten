@extends('admin/layouts/app')
@section('body')
<div class="login">
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{route('reset.password',['id'=>$id])}}" method="post">
                    @csrf
                    <h1>Recover Password</h1>
                    <h6>Fill up the form to reset your password<h6><p></p>
                    @include('includes/message')
                    <div>
                        <input type="email" name="email" class="form-control" placeholder="email" required="required" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="******" required="required" />
                    </div>
                    <div>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="******" required="required" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-lg btn-success submit">Submit</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection