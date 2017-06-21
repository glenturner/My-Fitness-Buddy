@extends('layouts.app')

@section('content')
        <h1>Enter Meal Below</h1>
        {!! Form::open(['action' => 'FoodsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
        {{Form::label('meal', 'Meal')}}
                {{Form::text('meal', '', ['class' => 'form-control', 'placeholder' => 'Breakfast'])}}
                {{Form::label('food', 'Food')}}
                {{Form::text('food', '', ['class' => 'form-control', 'placeholder' => '5oz Chicken Breast and Brocolli'])}}
                {{Form::label('calories', 'Calories')}}
                {{Form::text('calories', '', ['class' => 'form-control', 'placeholder' => '300'])}}
                {{Form::label('macronutrients', 'Macronutrients')}}
                {{Form::text('macronutrients', '', ['class' => 'form-control', 'placeholder' => 'Protein'])}}
        </div>
        {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}

@endsection