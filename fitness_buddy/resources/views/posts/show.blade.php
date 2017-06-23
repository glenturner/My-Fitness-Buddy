@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    @if(auth()->user()->id !==$post->user_id)

        @if(Auth::user()->id == $post->user_id)
    <hr>
            <div class="well">
                <h4>{{$post->food}}</h4>
                <h4>calories: {{$post->calories}}</h4>
                <h4>macronutrients: {{$post->macronutrients}}</h4>
                <small>This meal was posted on {{$post->created_at}}by {{$post->user->name}}</small>
            </div>


            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>


    {!!Form::open(['action' => ['FoodsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
                    @endif
    @endif
@endsection