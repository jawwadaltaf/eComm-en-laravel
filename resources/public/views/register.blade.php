@extends('layouts.master')
@section('content')
<div class="container custom-login">
	<div class="row">
    	<div class="col-sm-4 col-sm-offset-4">
        	<form action="register" method="POST">
            @csrf
            <div class="form-group">
                <label for="UserName">User Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="UserName" placeholder="User Name">
              </div>
              <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Address">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
              </div>
              
              <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
