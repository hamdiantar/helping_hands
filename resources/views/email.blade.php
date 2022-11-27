<!DOCTYPE html>
<html>
<head>
    <title>Helping Hands</title>
</head>
<body>
<h1>Dear : {{ $details['name'] }}</h1>
<p>Thank You For Your Registering In Our Website</p>
<p>You Can Login Now Via Url in The Bottom</p>
<a target="_blank" href="{{url('/volunteering-entity/login')}}">Login Now</a>

<p>Thank you</p>
</body>
</html>
