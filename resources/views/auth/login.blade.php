<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h4>Login</h4>
    <form action="{{route('login-user')}}" method="post">
        @csrf
        @if(Session::has('fail'))
            <div style="color: red">{{Session::get('fail')}}</div>
        @endif
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="example@gmail.com" value="{{old('email')}}">
            <span>@error('email') {{$message}} @enderror</span>
            <br><br>
        </div>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" value="{{old('password')}}">
            <span>@error('password') {{$message}} @enderror</span>
            <br><br>
        </div>
        <a href="registration">New user? Register here</a><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
