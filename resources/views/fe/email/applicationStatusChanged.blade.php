@if($status == "approved")
    <p>Dear {{ $user->name }},</p>

    <p>We are pleased to inform you that your application for <strong>{{ $application->job_name }}</strong> has been <strong style="color: #28a745">APPROVED</strong>!</p>

    <p>Next steps:</p>
    <ul>
        <li>The employer will contact you shortly to discuss further details</li>
        <li>Please check your email and prepare your documents for the onboarding process</li>
    </ul>

    <p>Best regards,<br>
    {{ config('app.name') }} Team</p>

@else
    <p>Dear {{ $user->name }},</p>

    <p>Thank you for applying for <strong>{{ $application->job_name }}</strong>. After careful consideration, we regret to inform you that your application has not been successful this time.</p>

    <p>Key points:</p>
    <ul>
        <li>Status: <strong style="color: #dc3545">REJECTED</strong></li>
        <li>We encourage you to apply for other suitable positions</li>
        <li>Your profile will be kept in our database for future opportunities</li>
    </ul>

    <p>We appreciate your interest and wish you success in your job search.</p>

    <p>Sincerely,<br>
    {{ config('app.name') }} Team</p>
@endif