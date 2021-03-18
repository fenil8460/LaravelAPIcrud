<h1>Add New member</h1>

@if(session('users'))
<h3> Data saved for {{session('users')}}</h3>
@endif
<form action="storecontroller" method="POST">

    @csrf 
    <!-- {{method_field('PUT')}} -->
    <input type="text" name="users" placeholder="Enter User Name" ><br><br>
    <input type="password" name="password" placeholder="Enter User Password" ><br><br>
    <input type="text" name="email" placeholder="Enter User email" ><br><br>

<button type="submit">Add user</button>

</form>