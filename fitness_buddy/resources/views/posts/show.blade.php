@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <hr>
            <div class="well">
                <h4>{{$post->food}}</h4>
                <h4>calories: {{$post->calories}}</h4>
                <h4>macronutrients: {{$post->macronutrients}}</h4>
                <small>This meal was posted on {{$post->created_at}}</small>
            </div>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>


    {!!Form::open(['action' => ['FoodsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection