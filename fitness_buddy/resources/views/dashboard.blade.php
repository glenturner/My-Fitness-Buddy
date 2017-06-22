@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Add Meal</a>
                    <h3>Your Meal Plan</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
