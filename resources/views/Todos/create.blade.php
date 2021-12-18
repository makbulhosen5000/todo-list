@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 pt-2 text-center border bg-primary">
                <h1 class="bg-light">ADD TODO TITLE</h1>
                <a class="btn btn-outline-warning btn-lg" href="{{url('home')}} ">TODO LIST</a>
                <form action="{{route('todo-store')}} " method="POST" class="pt-2">
                    @csrf
                    @if(Session::has('success'))
                    <div class="btn btn-success">{{Session::get('success')}} </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="form-group">
                        <input type="text" name="name" class="py-3 px-5 " placeholder="Enter Todo Title Name" required />
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-success btn-lg p-2"/>
                    </div>
                </form>
           </div>
        </div>
    </div>
@endsection



