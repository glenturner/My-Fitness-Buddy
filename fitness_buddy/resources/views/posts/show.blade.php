@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
            <div class="well">
                <h4>{{$post->food}}</h4>
                <h4>calories: {{$post->calories}}</h4>
                <h4>macronutrients: {{$post->macronutrients}}</h4>
                <small>This meal was posted on {{$post->created_at}}</small>
            </div>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

@endsection