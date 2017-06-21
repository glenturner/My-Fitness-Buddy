@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['FoodsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('meal', 'Meal')}}
        {{Form::text('meal', $post->meal, ['class' => 'form-control', 'placeholder' => 'Breakfast'])}}
        {{Form::label('food', 'Food')}}
        {{Form::text('food', $post->food, ['class' => 'form-control', 'placeholder' => '5oz Chicken Breast and Brocolli'])}}
        {{Form::label('calories', 'Calories')}}
        {{Form::text('calories', $post->calories, ['class' => 'form-control', 'placeholder' => '300'])}}
        {{Form::label('macronutrients', 'Macronutrients')}}
        {{Form::text('macronutrients', $post->macronutrients, ['class' => 'form-control', 'placeholder' => 'Protein'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection