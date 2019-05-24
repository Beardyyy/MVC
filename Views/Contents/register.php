<div class="col-5">
    <form action="/MVC-new/register" method="POST">
	<div class="form-group">
        <label for="username">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
	
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>