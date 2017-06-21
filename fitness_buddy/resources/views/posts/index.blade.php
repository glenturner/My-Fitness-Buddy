@extends('layouts.app')

@section('content')
    <h1>Your meals</h1>
    @if(count($posts) > 1)
    @foreach ($posts as $post)
    <div class="well">
        <h4><a href="/post/{{$post->id}}">{{$post->meal}}<a/></h4>
        <h4>{{$post->food}}</h4>
        <h4>calories: {{$post->calories}}</h4>
        <h4>macronutrients: {{$post->macronutrients}}</h4>
        <small>{{$post->created_at}}</small>
    </div>
    @endforeach
    @else
    <p>You have not added any meals yet.</p>
    @endif
@endsection