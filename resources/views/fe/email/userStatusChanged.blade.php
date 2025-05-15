<p>Dear {{ $user_data->name }},</p>

<p>We regret to inform you that your account <strong>{{ $user_data->name }}</strong> has been temporarily <strong style="color: #fa2222">suspended</strong>
     due to detected activity that
     violates our platform's terms of service and/or security policies. 
    This action was taken to ensure the safety and integrity of our community and systems.</p>

<p>If you believe this suspension is in error or wish to resolve the issue, please contact our support team at 
    GoodJob@gmail.com within 7 days to initiate an account review. Be prepared to provide any requested 
    information for verification purposes.</p>

<p>We take these measures seriously to protect all users and appreciate your understanding. </p>   
    
<p>   
    Thank you for your cooperation.
</p>

<p>Best regards,<br>
{{ config('app.name') }} Team</p>
