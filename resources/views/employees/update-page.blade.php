<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h2>Update</h2>

<form action="{{url('update',$employee->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
<input type="text" name="first_name" value="{{$employee->first_name}}" placeholder="name"><br>
<input type="text" name="last_name" value="{{$employee->last_name}}" placeholder="last name"><br>
<input type="text" name="code" value="{{$employee->code}}" placeholder="code"><br>
<a href="/Documents/{{$employee->documents}}">{{$employee->documents}}</a>
<input type="file" name="file" ><br>
<input type="submit" value="submiit">
        </form>
</body>
</html>