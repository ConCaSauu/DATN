<p>Dear {{ $user->name }},</p>

<p>We have recived a request to changing password for your account in our website !</p>

<p>If it was you please click the link below to finish the process. You will be able to reset your current password.</p>
<p>Click here to <a href="{{route('reset_password', $token)}}"><strong style="font-weight: bold; color: orange;">Reset password</strong></a></p>

<p>Best regards,<br>
{{ config('app.name') }} Team</p>
