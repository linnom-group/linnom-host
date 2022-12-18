<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h>


        <h3>Name: {{$data->name}}<br>
        Email: {{$data->email}}</h3><br><br>
        <a href="logout">Logout</a>

        <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
<input type="text" name="first_name" placeholder="name"><br>
<input type="text" name="last_name" placeholder="last name"><br>
<input type="text" name="code" placeholder="code"><br>
<input type="file" name="file" ><br>
<input type="submit" value="submiit">
        </form>
</body>
</html>