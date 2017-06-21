@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <div class="container">

        <form class="registration">
            <h2 class="form-register-heading">Please register below</h2>
            <label for="name" class="sr-only">Name</label>
            <input type="name" id="name" class="form-control" placeholder="Name" required>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-success btn-block" type="submit">Register</button>
        </form>
    </div> <!-- /container -->
@endsection