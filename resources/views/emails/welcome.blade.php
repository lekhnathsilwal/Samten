@component('mail::message')
<b>Hello {{$admin->f_name}} {{$admin->l_name}} Welcome To Samten</b><br>
You have registered as {{($admin->type==0)?'Super Admin':'Admin'}} to Samten<br>
Your password is: <b><i>{{$password}}</i></b><br>
Please do change your password after you login.

@component('mail::button', ['url' => url('/login')])
Proceed to login
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
