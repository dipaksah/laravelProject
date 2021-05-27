<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>verify Email</title>
</head>
<body>
    <h2>Welcome to the site {{$user['name']}}</h2>
    <br/>
    Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
    <br/>
    <a href="{{url('user/verify', $user->verifyUser->token)}}">Verify Email</a>
    {{-- <h2>Welcome to our website,{{ $user->name }}</h2>
    <p>
        click <a href="/user/verify/{{ $user->verification_code }}">here</a>
    </p> --}}
</body>
</html>