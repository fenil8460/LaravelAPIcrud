
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>  
<div class="container">
<h1>Hello</h1>
<table  class="table table-striped">
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Password</th>
    <th>Delete</th>
    <th>Update</th>
</tr>

@foreach($member as $members)
<tr>
    <td>{{$members['user_id']}}</td>
    <td>{{$members['user_name']}}</td>
    <td>{{$members['pasword']}}</td>
    <td><a href={{"delete/".$members['user_id']}}>Delete</a></td>
    <td><a href={{"update/".$members['user_id']}}>Update</a></td>
</tr>
@endforeach
</table>

{{$member->links()}}

<a href="add" class="btn btn-primary">Add</a>

</div>
</body>
</html>