<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee details</h>
<form action="{{url('search')}}" method="get">
<input type="search" name="search">
<input type="submit" value="Search">
</form>
<table border="1px">
<tr>
    <td>Code</td>
    <td>Name</td>
    <td>Last name</td>
    <td>Documrnt</td>
    <td>Action</td>
    <td>update</td>
</tr>
@foreach($data as $employees)
<tr>
    <td>{{$employees->code}}</td>
    <td>{{$employees->first_name}}</td>
    <td>{{$employees->last_name}}</td>
    <td><a href="Documents/{{$employees->documents}}">{{$employees->documents}}</a></td>
    <td><a href="{{url('delete',$employees->id)}}">delete</a></td>
    <td><a href="{{url('update',$employees->id)}}">Edit</a></td>
</tr>
@endforeach
</table>

</body>
</html>