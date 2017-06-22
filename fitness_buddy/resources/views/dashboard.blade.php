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
                    @if(count($foods) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Meal</th>
                            <th>Food</th>
                            <th>Calories</th>
                            <th>Macronutrients</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                        @foreach($foods as $food)
                            <tr>
                                <th>{{$food->meal}}</th>
                                <th>{{$food->food}}</th>
                                <th>{{$food->calories}}</th>
                                <th>{{$food->macronutrients}}</th>
                                <th>{{$food->created_at}}</th>
                                <th><a href="/posts/{{$food->id}}/edit" class="btn btn-default">Edit</a></th>
                                <td>
                                    {!!Form::open(['action' => ['FoodsController@destroy', $food->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}</td>
                            </tr>
                            @endforeach
                    </table>
                        @else
                    <p>You have no meals</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
