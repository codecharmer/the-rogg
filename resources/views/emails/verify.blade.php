<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Verify Your Email Address</h2>

<div>
    <p>Thanks for creating an account with the Rogg.</p>

    <p>Please follow the link below to verify your email address.</p>

    <p>
        <a href="{{ URL::to('auth/register/verify/' . $confirmationCode) }}">{{ URL::to('auth/register/verify/' . $confirmationCode) }}</a>
    </p>
</div>

</body>
</html>