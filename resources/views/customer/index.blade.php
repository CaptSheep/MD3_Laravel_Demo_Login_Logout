<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer List</title>
</head>
<body>
<button class="btn btn-primary"><a href="{{route('store')}}">Create</a></button>
<table border="1">
<thead>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th colspan="3">Action</th>
</tr>
</thead>
<tbody>
@foreach($customers as $key => $customer)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$customer->name}}</td>
        <td><a href="{{route('show',$customer->id)}}">Detail</a></td>
        <td><a href="{{route('edit',$customer->id)}}">Edit</a></td>
        <td><a onclick="return confirm('Are you sure ')" href="{{route('destroy',$customer->id)}}">Delete</a></td>
    </tr>
@endforeach
</tbody>
</table>
</body>
</html>
