<?php //print_r($data);?>
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
<h1 class="text-primary">Update Member</h1>
    <form action="/update" method="POST">
    @csrf
    <!-- {{method_field('PUT')}} -->
    @foreach($data as $data1)
    
    <input type="hidden" name="id" value="{{$data1->user_id}}" class="form-control" placeholder="Enter User Name" ><br><br>
    
    <input type="text" name="names" value="{{$data1->user_name}}" class="form-control" placeholder="Enter User Name" ><br><br>
    <input type="text" name="password" value="{{$data1->pasword}}" class="form-control" placeholder="Enter User Password" ><br><br>

    <button class="btn btn-primary" type="submit">Update</button>
    @endforeach
    </from>

</div>
</body>
</html>