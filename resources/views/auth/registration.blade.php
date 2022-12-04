<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <h4>Registration</h4>
    <form action="{{route('register-user')}}" method="post">
        @csrf
        @if(Session::has('success'))
            <div style="color: green">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div style="color: red">{{Session::get('fail')}}</div>
        @endif
        <div>
            <label for="name">Full name:</label><br>
            <input type="text" id="name" name="name" placeholder="Fullname" value="{{old('name')}}">
            <span>@error('name') {{$message}} @enderror</span>
            <br><br>
        </div>
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
        <div>
            <label for="repassword">RePassword:</label><br>
            <input type="password" id="repassword" name="repassword">
            <span>@error('repassword') {{$message}} @enderror</span>
            <br><br>
        </div>
        <a href="login">Already have account? Login here</a><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
