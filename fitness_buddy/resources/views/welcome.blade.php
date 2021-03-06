@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <div class="container">

        <form class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
        </form>
        <form class="form-signin">
            <button class="btn btn-lg btn-primary btn-block" href="/register" id="#register" type="submit">Register</button>
        </form>
    </div> <!-- /container -->


   @endsection