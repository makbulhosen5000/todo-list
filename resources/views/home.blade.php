@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 pt-2 bg-primary">
                <h1 class="text-light d-flex justify-content-between align-items-center">Todo List
                <a href="{{route('todo-create')}} "class="btn btn-outline-light btn-lg"> <i class="fas fa-plus"></i> </a>
               </h1>
                <table class="table table-light text-center">
                    <tbody>
                        @foreach ($todos as $todo)
                        <tr>
                            <td>{{$todo->id}} </td>
                            <td>{{$todo->name}} </td>
                            <td>
                                <a href="{{route('todo-edit',$todo->id)}}" class="btn btn-success" title="edit"><i class="fas fa-edit"></i></a>
                                <a href="{{route('todo-delete',$todo->id)}}"  id="delete"  class="btn btn-danger"  title="Delete"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>

           </div>
        </div>
    </div>
@endsection
