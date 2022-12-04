<!DOCTYPE html>
<html>
<head>
    <title>Helping Hands</title>
</head>
<body>
@if($details['status'] == 1)

    <h1>Dear : {{ $details['name'] }},</h1>
   <p>
       Thank you for expressing interest in joining HelpingHands community. We are pleased to accept your application in joining HelpingHands.

       As a next step, you have to subscribe in the website to be able to use all of its features. We would like you to visit the website link to know the three subscription packages. To log in directly click on the provided link
       <a target="_blank" href="{{url('/volunteering-entity/login')}}">Login Now</a>

       Thank you again for your interest in HelpingHands, and we look forward to a successful working relationship with you in the future. If you have any questions or need additional information,
       please don’t hesitate to contact us by email <strong>{{auth('admin')->user()->ADMIN_EMAIL}}</strong>.

   </p>
   <h5> Regards,</h5>
   <h1> HelpingHands Team.</h1>
@else
    <h1>Dear : {{ $details['name'] }},</h1>
    <p>
        Thank you for expressing interest in joining Helping Hands community. On this occasion, we've decided not to take your application further.

        We want to thank you for the time and efforts you invested during the registration process. It was a pleasure to learn more about your entity.

        While you were not successful on this occasion, we hope you’ll keep us in mind and apply again in the future.
        If you have any questions or need additional information, p
        lease don’t hesitate to contact us by email <strong>{{auth('admin')->user()->ADMIN_EMAIL}}</strong>.

        Thank you again for your interest in HelpingHands, and we wish you best of luck.

    </p>
    <h5> Regards,</h5>
    <h1> HelpingHands Team.</h1>
@endif

</body>
</html>
