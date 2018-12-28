@extends('layout')



@section('content')

    <div class="row">

    <div class="col-lg-6 col-lg-offset-3">
    
   <form action="create/todo" method="post">

        {{ csrf_field() }}
  
   <input type="text" class="form-control input-lg" name="todo" placeholder="create a new todo">


   </form>

    
    
    </div>    
    
    </div>

    <hr>

    @foreach($todos as $todo)

    {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">delete</a>

    <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info">update</a>

     @if(!$todo->completed)

    <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-success">Mark as complete</a>


    @else

        <span class="text-success">Completed!</span>

    @endif
        <hr>

    @endforeach

@stop