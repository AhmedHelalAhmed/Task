@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            The list of tasks is :
        </h1>
        <ul>

            @foreach ($tasks as $task)
                <li>{{$task->description}}</li>
            @endforeach

        </ul>
    </div>
@endsection
