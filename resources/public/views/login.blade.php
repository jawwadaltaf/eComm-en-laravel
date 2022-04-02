@extends('layouts.master')
@section('content')
<div class="container custom-login">
	<div class="row">
    	<div class="col-sm-4 col-sm-offset-4">
        	<form action="login" method="POST">
            @csrf
              <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="pass" name="password">
              </div>
              
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
