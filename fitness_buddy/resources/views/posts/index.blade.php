@extends('layouts.app')

@section('content')
    <h1>All Member Meals</h1>
    @if(count($posts) > 0)
    @foreach ($posts as $post)
    <div class="well">
        <h4><a href="/posts/{{$post->id}}">{{$post->meal}}<a/></h4>
        <h4>{{$post->food}}</h4>
        <h4>calories: {{$post->calories}}</h4>
        <h4>macronutrients: {{$post->macronutrients}}</h4>
        <small>{{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action' => ['FoodsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}</td>
    </div>
    @endforeach
        {{$posts->links()}}
    @else
    <p>You have not added any meals yet.</p>
    @endif
@endsection