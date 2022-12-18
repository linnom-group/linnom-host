<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<body>
<h4>Register</h4>
<form action="{{route('reg-user')}}" method="post"> 
  @if(Session::has('success'))
  <span style="green">{{Session::get('success')}}</span>
  @endif

   @if(Session::has('fail'))
  <span style="red">{{Session::get('fail')}}</span>
  @endif


  @csrf
<input type="text" name="name" value="{{old('name')}}" placeholder="Fullname"><br>
<span style="color: red;">@error('name') {{$message}} @enderror<span><br>
<input type="text" name=" email" value="{{old('email')}}" placeholder="Email"><br>
<span style="color: red;">@error('email') {{$message}} @enderror<span><br>
<input type="password" name="password" placeholder="Password"><br>
<span style="color: red;">@error('password') {{$message}} @enderror<span><br>
<button type="submit">Register</button>
</form><br><br>
  <a href="login">Already Hace an Account</a>  
</body>
</html>