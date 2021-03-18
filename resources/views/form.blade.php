
<h1>User login</h1>
<form action="users" method="POST">

    @csrf 
    <!-- {{method_field('PUT')}} -->
    <input type="text" name="user" placeholder="Enter User Name" ><br><br>
    <input type="password" name="password" placeholder="Enter User Password" ><br><br>

<button>Log in</button>

</form>