@component('mail::message')
 Hey {{$admin->f_name}} {{$admin->l_name}} did you forget password of Samten?? if yes click reset otherwise ignore this mail.

@component('mail::button', ['url' => URL::SignedRoute('reset.forget.password',['id'=>$admin->id])])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
